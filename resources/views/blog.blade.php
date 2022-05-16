@extends('layouts.app')
@section('content')
<section>
    <div class="headlines">
        <div class="container">
            <div class="zikzak-container">
                <h2 class="title-big">Our <span class="text-primary">Blog</span></h2>
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

                @foreach($blogs as $blog)
                <div class="post wow fadeIn">
                    <figure class="post-image"><img src="{{ asset('images') }}/{{ $blog->thumbnail }}" alt="Image"></figure>
                    <div class="post-content">
                        <h3 class="post-title">{{ $blog->title }}</h3>
                        <small class="post-date">21 April, 2022</small>
                        <p class="post-intro">{!! substr($blog->description,0,100) !!}</p>
                        <a href="blog-single.html" class="post-link">READ MORE</a>
                    </div>
                </div>
                @endforeach
    
                <!-- end post -->
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
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
                    <div class="widget">
                        <h4 class="title">CATEGORIES</h4>
                        <ul class="categories">
                            <li><a href="#">Web Design</a><span>14</span></li>
                            <li><a href="#">Web Development</a><span>22</span></li>
                            <li><a href="#">e-Commerce</a><span>74</span></li>
                            <li><a href="#">Woo Commerce</a><span>4</span></li>
                            <li><a href="#">Wordpress</a><span>64</span></li>
                            <li><a href="#">App Development</a><span>53</span></li>
                            <li><a href="#">Print Design</a><span>14</span>71</li>
                        </ul>
                    </div>
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