@extends('layouts.admin.app')
@section('headerScripts')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Our-Work</h4>
                <form class="outer-repeater" method="POST" action="{{ route('our-work.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item="" class="outer">
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Name</label>
                                <div class="col-lg-10">
                                    <input id="" name="name" type="text" class="form-control" placeholder="Enter Work Name..." id="">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center">
                            <button type="button" class="btn btn-outline-success waves-effect waves-light add_more_section">Add More</button>
                            </div>

                            <div class="custom_row mt-2">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Section 1</label>
                                    <div class="col-lg-10">
                                        <textarea id="editor" name="section[]" class="form-control"  ></textarea>
                                        <div class="text-center mt-1">
                                            <button type="button" class="btn btn-outline-danger waves-effect waves-light remove_section"><i class="mdi mdi-delete d-block font-size-16"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            

                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Category</label>
                                <div class="col-lg-5">
                                    <select name="category_id" class="form-control">
                                        <option value="">Category</option>
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
                                    <input type="file" class="form-control" name="image" multiple >
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Meta</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Meta title" name="meta_title">
                                    @error('meta_title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-5">
                                    <textarea class="form-control" name="meta_description" placeholder="Meta description"></textarea>
                                    @error('meta_description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Create Task</button>
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
                        <label class="col-form-label col-lg-2">Section ${section_count}</label>
                        <div class="col-lg-10">
                            <textarea data-rand_num='${rand_number}' id="ckEditor${section_count}" name="section[]" class="form-control ckEditor"  ></textarea>
                            <div class="text-center mt-1">
                                <button type="button" class="btn btn-outline-danger waves-effect waves-light remove_section"><i class="mdi mdi-delete d-block font-size-16"></i></button>
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
</script>
@endsection