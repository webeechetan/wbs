@extends('layouts.admin.app')
@section('headerScripts')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">News</h4>
                <form class="outer-repeater" method="post" action="{{ route('news.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item="" class="outer">
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Title</label>
                                <div class="col-lg-10">
                                    <input id="title" name="title" required type="text" class="form-control" placeholder="Enter Title Here..."   value="{{$news->title }}">
                                    @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Slug</label>
                                <div class="col-lg-10">
                                    <input id="slug" name="slug" required type="text" class="form-control" placeholder="Enter Slug Here..."  value="{{ $news->slug }}">
                                    @error('slug')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Description</label>
                                <div class="col-lg-10">
                                    <textarea id="description" name="description" class="form-control"  >{{$news->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Short Description</label>
                                <div class="col-lg-10">
                                    <textarea id="short_description" name="short_description" class="form-control"  >{{ $news->short_description }}</textarea>
                                    @error('short_description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Meta</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Meta title" name="meta_title" required value="{{ $news->meta_title }}">
                                    @error('meta_title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-5">
                                    <textarea class="form-control" required name="meta_description" placeholder="Meta description">{{ $news->meta_description }}</textarea>
                                    @error('meta_description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Images</label>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">Thumbnail</label>
                                    <div class="input-group">
                                        <div class="input-group-text open_gallery"><i class="bx bx-image-add"></i></div>
                                        <input type="text" class="form-control" placeholder="Enter Thumbnail URL" name="thumbnail" value="{{ $news->thumbnail}}">
                                    </div>
                                    @error('thumbnail')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">Banner</label>
                                    <div class="input-group">
                                        <div class="input-group-text open_gallery"><i class="bx bx-image-add"></i></div>
                                        <input type="text" class="form-control" placeholder="Enter Banner URL" name="banner" value="{{ $news->banner }}">
                                    </div>
                                    @error('banner')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">OG</label>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">OG Title</label>
                                    <input type="text" class="form-control" name="og_title" placeholder="OG Title" value="{{ $news->og_title }}">
                                </div>
                                <div class="col-lg-5">
                                    <label class="col-form-label col-lg-2">OG Image</label>
                                    <div class="input-group">
                                        <div class="input-group-text open_gallery"><i class="bx bx-image-add"></i></div>
                                        <input type="text" class="form-control" placeholder="Enter OG-Image URL" name="og_image" value="{{ $news->og_image }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $news->id }}">
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
        $("#title").keyup(function(e){
            let title = $(this).val();
            let slug = title.split(' ').join('-');
            slug = slug.toLowerCase();
            $("#slug").val(slug);
        })
    });
</script>
@endsection