@extends('layouts.admin.app')
@section('headerScripts')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="row mb-4 align-items-center">
    <div class="col-md-6">
        <h4 class="card-title">Edit Slide</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form class="outer-repeater" method="post" action="{{ route('slide.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item="" class="outer">
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Slide</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <div class="input-group-text open_gallery">
                                            <i class="bx bx-image-add"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter Slide URL" name="slide" value="{{ $slide->slide}}">
                                    </div>
                                    @error('slide')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <img src="{{ $slide->slide }}" width='250'>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Sequence</label>
                                <div class="col-lg-10">
                                    <input id="" name="sequence" required type="text" class="form-control" value="{{ $slide->sequence }}">
                                    @error('sequence')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Logo</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <div class="input-group-text open_gallery">
                                            <i class="bx bx-image-add"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter Logo URL" name="logo" value="{{ $slide->logo}}">
                                    </div>
                                    @if($slide->logo)
                                        <img src="{{ $slide->logo }}" width='120'>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Description</label>
                                <div class="col-lg-10">
                                    <textarea name="description" class="form-control">{{ $slide->description }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Link</label>
                                <div class="col-lg-10">
                                    <input type="text" name="link" class="form-control" value="{{ $slide->link }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Link Text</label>
                                <div class="col-lg-10">
                                    <input type="text" name="link_text" class="form-control" value="{{ $slide->link_text }}">
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $slide->id }}">
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