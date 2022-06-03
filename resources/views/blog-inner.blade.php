@extends('layouts.app')
@section('title',$meta->title)
@section('meta_description',$meta->meta_description)
@section('og_title',$meta->og_title)
@section('og_image',$meta->og_image)
@section('content')
<section class="blog blog-single sec-space pt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-4 mb-md-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog.view',$blog->slug) }}">{{ $blog->title }}</a></li>
                    </ol>
                </nav>
                @if($blog->banner)
                    <img src="{{ $blog->banner }}" width="100%" alt="{{ $blog->title }}">
                @endif
            </div>
        </div>
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-12">
                <div class="post-body wow fadeIn">
                    {!! $blog->description !!}
                </div>
            </div>
        </div>
        <!-- end row -->
        @if($blog->type == '1')
            <div class="row">
                <div class="col-12">
                    <div class="titles">
                        <h5>Related Posts</h5>
                    </div>
                </div>
                @foreach($related_blog as $blog)
                    <div class="col-md-4">
                        <div class="post wow fadeIn ">
                            <figure class="post-image"><img src="{{ $blog->thumbnail }}" alt="Image"></figure>
                            <div class="post-content">
                                <h3 class="post-title">{{ $blog->title }}</h3>
                                <small class="post-date">{{ $blog->created_at }}</small>
                                <!-- <p class="post-intro">{!! Str::limit($blog->title,50) !!}</p> -->
                                <a href="{{ route('blog.view') }}/{{ $blog->slug }}" class="post-link">READ MORE</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <!-- end container -->
</section>
<!-- end blog -->

@endsection