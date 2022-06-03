@extends('layouts.admin.app')
@section('headerScripts')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="row mb-4 align-items-center">
    <div class="col-md-6">
        <h4 class="card-title">Edit Work</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form class="outer-repeater" method="POST" action="{{ route('our-work.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item="" class="outer">
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Name</label>
                                <div class="col-lg-10">
                                    <input id="title" name="name" type="text" class="form-control" placeholder="Enter Work Name..." value="{{ $work->name }}">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Slug</label>
                                <div class="col-lg-10">
                                    <input id="slug" name="slug" required type="text" class="form-control" placeholder="Enter Slug Here..."  value="{{ $work->slug }}">
                                    @error('slug')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        

                            @php 
                                $description = json_decode($work->description);
                                $heading = json_decode($work->heading);
                                $i = 0;
                                $check = false;
                            @endphp
                            <div class="custom_row mt-2">
                                @foreach ($description as $item)
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label col-lg-2">Column {{ $i + 1 }}</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="Heading" name="heading[]" class="form-control mb-2" value="{{ $heading[$i]}}">
                                            <textarea id="editor{{ $i }}" name="section[]" class="form-control ckEditor" >{{ $item }}</textarea>
                                            <div class="mt-3">
                                                <button type="button" class="btn btn-outline-danger waves-effect waves-light remove_section"><i class="mdi mdi-delete font-size-16"></i> Delete Column</button>
                                            </div>
                                        </div>
                                    </div>
                                @php
                                    $i++;
                                @endphp
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-lg-10 ms-auto">
                                    <hr>
                                    <div class="mb-3">
                                        <button type="button" class="btn btn-outline-success waves-effect waves-light add_more_section"><i class="bx bx-plus-medical"></i> Add Column</button>
                                    </div>
                                </div>
                            </div>    
                        

                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Category</label>
                                <div class="col-lg-5">
                                    <select name="category_id[]" class="form-control" multiple>
                                        @foreach($categories as $category)
                                            @php
                                                $check = false;
                                            @endphp
                                            @foreach(explode(',', $work->cat_id) as $saved_cat)
                                                @if($category->id == $saved_cat)
                                                    @php
                                                        $check = true;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @if($check)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-5 text-center">
                                <label class="col-form-label col-lg-2">Thumbnail</label>
                                    <div class="input-group">
                                        <div class="input-group-text open_gallery"><i class="bx bx-image-add"></i></div>
                                        <input type="text" class="form-control" placeholder="Enter Thumbnail URL" name="image" value="{{ $work->images}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Meta</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Meta title" name="meta_title" value="{{ $work->meta_title }}">
                                    @error('meta_title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-5">
                                    <textarea class="form-control" name="meta_description" placeholder="Meta description"> {{ $work->meta_description }} </textarea>
                                    @error('meta_description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">OG</label>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">OG Title</label>
                                    <input type="text" class="form-control" name="og_title" placeholder="OG Title" value="{{ $work->og_title }}">
                                </div>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">OG Image</label>
                                    <div class="input-group">
                                        <div class="input-group-text open_gallery"><i class="bx bx-image-add"></i></div>
                                        <input type="text" class="form-control" placeholder="Enter OG-Image URL" name="og_image" value="{{ $work->og_image}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Dates</label>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">Publish At</label>
                                    <input type="date" class="form-control" name="publish_at" value="{{ $work->publish_at}}">
                                    @error('publish_at')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">Images</label>
                                    <input type="file" class="form-control" name="gallery_images[]" accept="images/*" multiple>
                                    @error('publish_at')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Images</label>
                                <div class="col-lg-10">
                                    @foreach(explode(",",$work->gallery_images) as $image)
                                        <span>
                                        <img src="{{ asset('images') }}/{{ $image }}" class="avatar-lg">
                                        <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete d-block font-size-16 remove_image" data-image_name = '{{ $image }}' data-id = '{{ $work->id }}'></i></button>
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $work->id }}">
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Update</button>
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
    let section_count = {{ count($description) }} + 1;
    
    $(document).ready(function() {

        $('.ckEditor').each(function () {
            let id = $(this).attr('id');
                ClassicEditor
                .create( document.querySelector(`#${id}`))
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
        });

    });

    $(".add_more_section").click(function(){
        let rand_number = Math.floor((Math.random() * 1000) + 1);
        let section = `
                    <div class="form-group row mb-4">
                        <label class="col-form-label col-lg-2">Column ${section_count}</label>
                        <div class="col-lg-10">
                            <input type="text" placeholder="Heading" name="heading[]" class="form-control mb-2" value="">
                            <textarea data-rand_num='${rand_number}' id="ckEditor${rand_number}" name="section[]" class="form-control ckEditor"  ></textarea>
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
            console.log(id)
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

    ///Removing image 

    $(".remove_image").click(function(){
        let image = $(this).data('image_name');
        let id = $(this).data('id');
        $(this).parent().parent().remove();
        console.log(image)
        $.post("{{ route('our-work.remove_image') }}",{image,id},function( data,status){
            if(data.status == 'success'){
                toastr["info"](data.msg);
            }
        })
    })

    $("#title").keyup(function(e){
        let title = $(this).val();
        let slug = title.split(' ').join('-');
        slug = slug.toLowerCase();
        $("#slug").val(slug);
    })
</script>
@endsection