@extends('layouts.admin.app')
@section('headerScripts')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Blog</h4>
                <form class="outer-repeater" method="post" action="{{ route('blog.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item="" class="outer">
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Title</label>
                                <div class="col-lg-10">
                                    <input id="" name="title" required type="text" class="form-control" placeholder="Enter Title Here..." id=""  value="{{$blog->title }}">
                                    @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Description</label>
                                <div class="col-lg-10">
                                    <textarea id="description" name="description" class="form-control"  >{{$blog->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Category</label>
                                <div class="col-lg-10">
                                    <select name="category" class="form-control" required> 
                                        <option value="">Category</option>
                                        @foreach($categories as $category)
                                            @if($blog->cat_id == $category->id)
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
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Meta</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Meta title" name="meta_title" required value="{{ $blog->meta_title }}">
                                    @error('meta_title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-5">
                                    <textarea class="form-control" required name="meta_description" placeholder="Meta description">{{ $blog->meta_description }}</textarea>
                                    @error('meta_description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Images</label>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">Thumbnail</label>
                                    <input type="file" class="form-control" name="thumbnail" >
                                    <img src="{{ asset('images') }}/{{ $blog->thumbnail }}" class="rounded avatar-md mt-2">
                                    @error('thumbnail')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">Banner</label>
                                    <input type="file" class="form-control" name="banner" >
                                    <img src="{{ asset('images') }}/{{ $blog->banner }}" class="rounded avatar-md mt-2">
                                    @error('banner')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $blog->id }}">
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Update Blog</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footerScripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('script')
@if(session('success'))
    <script>
        let msg = '{{ session()->get("success") }}';
        toastr["info"](msg);
    </script>
@endif
<script>
    $(document).ready(function() {
        $('#breif').summernote();
        $('#meet_the_client').summernote();
        $('#description').summernote();
        $('#what_we_did').summernote();
        $('#result').summernote();
        $('#challenge').summernote();
    });
</script>
@endsection