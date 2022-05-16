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
                <form class="outer-repeater" method="POST" action="{{ route('our-work.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item="" class="outer">
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Name</label>
                                <div class="col-lg-10">
                                    <input id="" name="name" type="text" class="form-control" placeholder="Enter Work Name..." id="" value="{{ $work->name }}">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center">
                            <button type="button" class="btn btn-outline-success waves-effect waves-light add_more_section">Add More</button>
                            </div>

                            @php 
                                $description = json_decode($work->description);
                                $i = 1;
                            @endphp
                            <div class="custom_row mt-2">
                                @foreach ($description as $item)
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Section {{ $i }}</label>
                                    <div class="col-lg-10">
                                        <textarea id="editor{{ $i }}" name="section[]" class="form-control ckEditor" >{{ $item }}</textarea>
                                        <div class="text-center mt-1">
                                            <button type="button" class="btn btn-outline-danger waves-effect waves-light remove_section"><i class="mdi mdi-delete d-block font-size-16"></i></button>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $i++;
                                @endphp
                                @endforeach
                            </div>

                            

                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Category</label>
                                <div class="col-lg-5">
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            @if($work->cat_id == $category->id)
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
                                <div class="col-lg-5">
                                    <input type="file" class="form-control" name="image[]" multiple >
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Images</label>
                                @php
                                $images = explode(",", $work->images);
                                @endphp
                                @foreach ($images as $image)
                                    <div class="col-lg-1 text-danger">
                                        <img src="{{ asset('images') }}/{{$image}}" class="rounded avatar-md">
                                        <a class="btn btn-danger btn-sm remove_image" data-id="{{ $work->id }}" data-image_name ='{{ $image }}'>Remove</a>
                                    </div>
                                @endforeach
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
                        <label class="col-form-label col-lg-2">Section ${section_count}</label>
                        <div class="col-lg-10">
                            <textarea data-rand_num='${rand_number}' id="ckEditor${rand_number}" name="section[]" class="form-control ckEditor"  ></textarea>
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
        $(this).parent().remove();
        $.post("{{ route('our-work.remove_image') }}",{image,id},function( data,status){
            if(data.status == 'success'){
                toastr["info"](data.msg);
            }
        })
    })
</script>
@endsection