@extends('layouts.admin.app')
@section('headerScripts')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="row mb-4 align-items-center">
    <div class="col-md-6">
        <h4 class="card-title">Add Work</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form class="outer-repeater" method="POST" action="{{ route('our-work.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item="" class="outer">
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Name</label>
                                <div class="col-lg-10">
                                    <input id="title" name="name" type="text" class="form-control" placeholder="Enter Work Name..." value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Slug</label>
                                <div class="col-lg-10">
                                    <input id="slug" name="slug" required type="text" class="form-control" placeholder="Enter Slug Here..."  value="{{ old('slug') }}">
                                    @error('slug')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="custom_row mt-2">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Column 1</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Heading" name="heading[]" class="form-control mb-2">
                                        <textarea id="editor" name="section[]" class="form-control"  ></textarea>
                                        <div class="mt-3">
                                            <button type="button" class="btn btn-outline-danger waves-effect waves-light remove_section"><i class="mdi mdi-delete font-size-16"></i> Delete Column</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 ms-auto">
                                    <hr>
                                    <div class="mb-3">
                                        <button type="button" class="btn btn-outline-success waves-effect waves-light add_more_section"><i class="bx bx-plus-medical"></i> Add Column</button>
                                    </div>
                                </div>
                            </div>                            

                            <div class="form-group row mb-4 align-items-end">
                                <label class="col-form-label col-lg-2">Category</label>
                                <div class="col-lg-5">
                                    <select name="category_id[]" class="form-control" multiple>
                                        <option value="" disabled>Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-5">
                                    <span class="col-form-label col-lg-2">Thumbnail</span>
                                    <div class="input-group">
                                        <div class="input-group-text open_gallery"><i class="bx bx-image-add"></i></div>
                                        <input type="text" class="form-control" placeholder="Enter Thumbnail URL" name="image">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Meta</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Meta title" name="meta_title" value="{{ old('meta_title') }}">
                                    @error('meta_title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-5">
                                    <textarea class="form-control" name="meta_description" placeholder="Meta description">{{ old('meta_description') }}</textarea>
                                    @error('meta_description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">OG</label>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">OG Title</label>
                                    <input type="text" class="form-control" name="og_title" placeholder="OG Title" value="{{ old('og_title') }}">
                                </div>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">OG Image</label>
                                    <div class="input-group">
                                        <div class="input-group-text open_gallery"><i class="bx bx-image-add"></i></div>
                                        <input type="text" class="form-control" placeholder="Enter OG-Image URL" name="og_image">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Dates</label>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">Publish At</label>
                                    <input type="date" class="form-control" name="publish_at" >
                                    @error('publish_at')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">Images</label>
                                    <input type="file" class="form-control" name="gallery_images[]" accept="images/*" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Add Work</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footerScripts')
{{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('script')
@if(session('success'))
    <script>
        let msg = '{{ session()->get("success") }}';
        toastr["info"](msg);
    </script>
@endif
<script>
    let section_count = 2;
    
    $(document).ready(function() {
        // $('.summernote').summernote();
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );

    });

    $(".add_more_section").click(function(){
        let rand_number = Math.floor((Math.random() * 1000) + 1);
        let section = `
                    <div class="form-group row mb-4">
                        <label class="col-form-label col-lg-2">Column ${section_count}</label>
                        <div class="col-lg-10">
                            <input type="text" placeholder="Heading" name="heading[]" class="form-control mb-2">
                            <textarea data-rand_num='${rand_number}' id="ckEditor${section_count}" name="section[]" class="form-control ckEditor"  ></textarea>
                            <div class="mt-3">
                                <button type="button" class="btn btn-outline-danger waves-effect waves-light remove_section"><i class="mdi mdi-delete font-size-16"></i> Delete Column</button>
                            </div>
                        </div>
                    </div>
                            `;
        section_count = section_count + 1;
        $(".custom_row").append(section);
        $('.ckEditor').each(function () {
            let id = $(this).attr('id');
            console.log($(this).data('is_editor'))
            if($(this).data('rand_num')==rand_number){
                ClassicEditor
                .create( document.querySelector(`#${id}`))
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
            }
        });
    })

    $(document).on('click', '.remove_section', function() {
        let p = $(this).parent().parent().parent().remove();
    });
    $("#title").keyup(function(e){
        let title = $(this).val();
        let slug = title.split(' ').join('-');
        slug = slug.toLowerCase();
        $("#slug").val(slug);
    })
</script>
@endsection