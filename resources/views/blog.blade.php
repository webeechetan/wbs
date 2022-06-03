@extends('layouts.app')
@section('title',$meta->title)
@section('meta_description',$meta->meta_description)
@section('og_title',$meta->og_title)
@section('og_image',$meta->og_image)
@section('content')
<section>
    <div class="headlines">
        <div class="container">
            <div class="zikzak-container">
                <h2 class="title-banner">Our <span class="text-primary">Blog</span></h2>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end headlines -->
</section>
<!-- end about headline -->
<section class="blog sec-space pt-0">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-lg-6">
                            <div class="post wow fadeIn">
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
                        </div>
                    @endforeach
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
                        <h4 class="title">SEARCH</h4>
                        <form class="searchbar">
                            <input type="text" placeholder="Search on blog">
                            <button type="submit">
                                <img src="{{ asset('frontend') }}/images/search.svg" alt="search">
                            </button>
                        </form>
                    </div>
                    <!-- end widget -->
                    {{-- <div class="widget">
                        <h4 class="title">CATEGORIES</h4>
                        <ul class="categories">
                            @foreach($categories as $category)
                                <li><a href="#">{{ $category->name }}</a><span>{{ $category->blogs()->count() }}</span></li>
                            @endforeach
                        </ul>
                    </div> --}}
                    <!-- end widget -->
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