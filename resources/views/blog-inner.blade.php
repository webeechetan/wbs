@extends('layouts.app')
@section('content')
<section class="blog blog-single sec-space pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4 mb-md-5">
                <img src="{{ asset('images') }}/{{ $blog->banner }}" width="100%" alt="{{ $blog->title }}">
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
        <div class="row">
            <div class="col-12">
                <div class="titles">
                    <h3>Related Posts</h3>
                </div>
            </div>
            @foreach($related_blog as $blog)
                <div class="col-md-4">
                    <div class="post wow fadeIn ">
                        <figure class="post-image"><img src="{{ asset('images') }}/{{ $blog->thumbnail }}" alt="Image"></figure>
                        <div class="post-content">
                            <h3 class="post-title">{{ $blog->title }}</h3>
                            <small class="post-date">{{ $blog->created_at }}</small>
                            <p class="post-intro">{!! Str::limit($blog->title,50) !!}</p>
                            <a href="{{ route('blog.view') }}/{{ $blog->title }}" class="post-link">READ MORE</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- end container -->
</section>
<!-- end blog -->

@endsection