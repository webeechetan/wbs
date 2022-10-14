@extends('layouts.app')
@section('title',$meta->title)
@section('meta_description',$meta->meta_description)
@section('og_title',$meta->og_title)
@section('og_image',$meta->og_image)
@section('content')
<section class="inner-banner">
    <div class="container">
        <h2 class="title-big">Our <b>Blog</b></h2>
   </div>
</section>
<!-- end hero title -->
<section>
    <img src="{{ asset('frontend') }}/images/about_banner.jpg" width="100%" alt="About Us">
</section>
<!-- end about headline -->
<section class="blog sec-space">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-md-8">
                @foreach($blogs as $blog)
                    <div class="post wow fadeIn d-none">
                        @if($blog->thumbnail)
                            <figure class="post-image"><img src="{{ $blog->thumbnail }}" alt="Image"></figure>
                        @endif
                        <div class="post-content">
                            <h3 class="post-title mb-2">{{ $blog->title }}</h3>
                            <small class="post-date mb-3">{{ $blog->created_at }}</small>
                            <p class="post-intro">{{ Str::limit($blog->short_description,25) }}</p>
                            <a href="{{ route('post.view') }}/{{ $blog->slug }}" class="post-link">READ MORE</a>
                        </div>
                    </div>
                @endforeach
                <div class="mb-4 mb-md-5">
                    <img src="{{ asset('frontend') }}/images/sidebar-img.jpg" width="100%" alt="">
                    <h5 class="mt-3">Our approach is backed by strategy, creativity and optimised for results.</h5>
                    <p>We understand that each client and each project we undertake is different and so we have developed a repeatable process that we know works. Our methodology puts the user</p>
                    <div class="custom-link mt-4"><a href="#">Read More</a> <span></span> <i></i></div>
                </div>
                <div class="opinion-article-card mb-4 mb-md-5">
                    <div class="opinion-article-card__column opinion-article-card__column--image">
                        <div class="opinion-article-card__aspect-ratio image">
                            <img src="{{ asset('') }}/frontend/images/new-home/Brompton_Thumb_3_4.webp" alt="">
                        </div>
                    </div>
                    <div class="opinion-article-card__column opinion-article-card__column--content">
                        <h3 class="opinion-article-card__column--content-title">F.R.I.E.N.D.S. – We saw it. And we saw it again.</h3>
                        <p>The classic comic timing and the impeccable cast of the sitcom has captured</p>
                        <div class="custom-link mt-4"><a href="#">Read More</a> <span></span> <i></i></div>
                    </div>
                </div>
                <div class="opinion-article-card mb-4 mb-md-5">
                    <div class="opinion-article-card__column opinion-article-card__column--image">
                        <div class="opinion-article-card__aspect-ratio image">
                            <img src="{{ asset('') }}/frontend/images/new-home/Brompton_Thumb_3_4.webp" alt="">
                        </div>
                    </div>
                    <div class="opinion-article-card__column opinion-article-card__column--content">
                        <h3 class="opinion-article-card__column--content-title">F.R.I.E.N.D.S. – We saw it. And we saw it again.</h3>
                        <p>The classic comic timing and the impeccable cast of the sitcom has captured</p>
                        <div class="custom-link mt-4"><a href="#">Read More</a> <span></span> <i></i></div>
                    </div>
                </div>
                <div class="opinion-article-card">
                    <div class="opinion-article-card__column opinion-article-card__column--image">
                        <div class="opinion-article-card__aspect-ratio image">
                            <img src="{{ asset('') }}/frontend/images/new-home/Brompton_Thumb_3_4.webp" alt="">
                        </div>
                    </div>
                    <div class="opinion-article-card__column opinion-article-card__column--content">
                        <h3 class="opinion-article-card__column--content-title">F.R.I.E.N.D.S. – We saw it. And we saw it again.</h3>
                        <p>The classic comic timing and the impeccable cast of the sitcom has captured</p>
                        <div class="custom-link mt-4"><a href="#">Read More</a> <span></span> <i></i></div>
                    </div>
                </div>
    
                <!-- end post -->
                <ul class="pagination">
                    {{-- <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li> --}}
                    {!! $blogs->links() !!}
                </ul>
            </div>
            <!-- end col-8 -->
            
            <div class="col-lg-4 mb-5 mb-lg-0">
                <aside class="sidebar">
                    <div class="widget">
                        <h4 class="title">CATEGORIES</h4>
                        <ul class="categories">
                            @foreach($categories as $category)
                                <li><a href="#">{{ $category->name }}</a><span>{{ $category->blogs()->count() }}</span></li>
                            @endforeach
                        </ul>
                    </div> 
                </aside>
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end blog -->

@endsection