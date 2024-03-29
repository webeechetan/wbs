@extends('layouts.app')
@section('title',$meta->title)
@section('meta_description',$meta->meta_description)
@section('og_title',$meta->og_title)
@section('og_image',$meta->og_image)
@section('content')
<section>
    <div class="headlines">
        <div class="container-fluid">
            <div class="zikzak-container">
                <h2 class="title-banner">We create super - rich experiences online<span class="text-primary">!</span></h2>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end headlines -->
</section>
<!-- end home headline -->
<section class="slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($slides as $slide)
                <div class="swiper-slide" data-background="{{ $slide->slide }}">
                    <div class="slide-inner">
                        <figure><img src="{{ $slide->logo }}" alt="Messe Frankfurt"></figure>
                        <h2>{{ $slide->description }}</h2>
                        <div class="link">
                            <a href="{{ $slide->link }}">{{ $slide->link_text }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- end swiper-wrapper -->
        <div class="swiper-pagination"></div>
        <!-- end swiper-pagination -->
        <div class="swiper-button-prev"><span></span><b>PREV</b></div>
        <!-- end swiper-button-prev -->
        <div class="swiper-button-next"><span></span><b>NEXT</b></div>
        <!-- end swiper-button-next -->
    </div>
    <!-- end swiper-container -->
</section>
<!-- end slider -->
<section class="sec-space">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <div class="titles">
                        <h2 class="mb-0">What we do<span class="text-primary">?</span><h2>    
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div class="titles">
                        <h5>Digital.</h5>
                        <p class="font-weight-700">We create super-rich experiences online!</p>
                        <p>WeBeeSocial is a full-scale Digital Marketing Agency based out of New Delhi, India. We mix our years of experience and knowledge to create solutions for our clients which are not only performance driven, but also creative.  We are running kick-ass digital campaigns for our clients, even as you read this!</p>
                    </div>
                    <div class="custom-link"><a href="about-us.php">About Us</a> <span></span> <i></i></div>
                    <!-- end custom-btn -->
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div class="titles">
                        <h5>And More Digital.</h5>
                        <p class="font-weight-700">Marketing brands with care</p>
                        <p>What is marketing if it is not performance driven?</p>
                        <p>We create digital experiences which stick with audiences and also reach the end objective. Trust us with making your brand visible and desired, with highly focused performance marketing.</p>
                    </div> 
                    <div class="custom-link"><a href="our-services.php">Our Services</a> <span></span> <i></i></div>
                    <!-- end custom-btn -->
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>
<!-- end overview section -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0">
                <div class="port-box">
                    <div class="port-box-img">
                        <img src="{{ asset('frontend') }}/images/port-img1.jpg" alt="Social Media Marketing">
                    </div>
                    <div class="port-box-items">
                        <div class="titles">
                            <h6>Social Media Marketing</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-0">
                <div class="port-box">
                    <div class="port-box-img">
                        <img src="{{ asset('frontend') }}/images/port-img2.jpg" alt="Performance Marketing">
                    </div>
                    <div class="port-box-items">
                        <div class="titles">
                            <h6>Performance Marketing</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-0">
                <div class="port-box">
                    <div class="port-box-img">
                        <img src="{{ asset('frontend') }}/images/port-img3.jpg" alt="Web Analytics">
                    </div>
                    <div class="port-box-items">
                        <div class="titles">
                            <h6>Web Analytics</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-0">
                <div class="port-box">
                    <div class="port-box-img">
                        <img src="{{ asset('frontend') }}/images/port-img4.jpg" alt="Website Design & Development">
                    </div>
                    <div class="port-box-items">
                        <div class="titles">
                            <h6>Website Design & Development</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home portfolio section -->
<section class="layout1 sec-space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 px-md-0">
                <figure class="project-image mb-0 reveal-effect masker wow"> 
                    <img src="{{ asset('frontend') }}/images/digital-solutions.jpg" width="100%" alt="Integrated Digital Solutions">
                </figure>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="titles">
                    <h4>Integrated Digital Solutions</h4>
                    <p class="font-weight-700">Insights, Metrics and Analytics - Everything is connected!</p>
                    <p class="mb-0">In a digital world where everything’s connected, we believe that the approach to digital communications has to be joined-up too. Our approach combines creativity & technology and blends a diverse range of digital marketing disciplines — from mobile and responsive web design to search and social media campaigns — all under one roof.</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="titles">
                    <h4>Strategy, Creativity & Results!</h4>
                    <p class="font-weight-700">Our approach is backed by strategy, creativity and optimised for results.</p>
                    <p>We understand that each client and each project we undertake is different and so we have developed a repeatable process that we know works. Our methodology puts the user at the heart of the experience from the start. By working iteratively through a pre-defined set of stages, we create beautiful and usable solutions that work hard and deliver targeted results.</p>
                </div>
            </div>
            <div class="col-md-6 px-md-0">
                <figure class="project-image mb-0 reveal-effect masker wow"> 
                    <img src="{{ asset('frontend') }}/images/creativity-results.jpg" width="100%" alt="Strategy, Creativity & Results!">
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- end Digital Solutions & Strategy, Creativity & Results -->
{{-- Clients --}}
<section class="logos">
    <div class="container">
        <div class="titles">
            <h2>Our Clients</h2>
        </div>
        <!-- end titles -->
        <ul class="wow fadeInUp">
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/mahindra-black.png" alt="Mahindra Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/acma-black.png" alt="Acma Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/lotus-black.png" alt="Lotus Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/iiht-black.png" alt="IIHT Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/cbre-black.png" alt="CBRE Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/govt-black.png" alt="Govt Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/mtv-black.png" alt="Mtv Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/messe-frankfurt-black.png" alt="Messe frankfurt Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/oupont-black.png" alt="Oupont Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/usaid-black.png" alt="Usaid Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/bpcl-black.png" alt="Bharat Petroleum Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/max-black.png" alt="Max Healthcare Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/solo-black.png" alt="Solo Expenses Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/oriflame-black.png" alt="Oriflame Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/bbc-black.png" alt="BBC Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/beds4u-black.png" alt="Beds4u Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/nasscom-black.png" alt="Nasscom Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/ozone-black.png" alt="Ozone Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/shemford-black.png" alt="Shemford Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/ccc-black.png" alt="CCC Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/colors-black.png" alt="Colors Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/sos-black.png" alt="SOS Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/ok-play-black.png" alt="Ok Play Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/tci-black.png" alt="TCI Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/goethe-black.png" alt="Goethe Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/teamwork-black.png" alt="Teamwork Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/aston-black.png" alt="Aston University Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/bare-body-black.png" alt="Bare Body Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/PFI-black.png" alt="PFI Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/jagat-pharma-black.png" alt="Jagat Pharma Logo"></figure></li>
        </ul>
    </div>
    <!-- end container -->
</section>
{{-- Awards --}}

<section class="our-awards sec-space">
    <div class="container">
        <div class="titles mb-5 text-center">
            <h6 class="text-primary">#WeBeeWinning</h6>
            <h2>Our Awards</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <p class="text-sub">Here are a few shiny objects that make us smile and tilt our heads upwards with pride.</p>
                </div>
            </div>
        </div>
        <!-- end titles -->
        <ul>
            <li class="wow fadeInUp" data-wow-delay="0s">
                <figure><img src="{{ asset('frontend') }}/images/awards/indias-fastest.png" alt="Image"></figure>
                <p>India’s Fastest Growing Social Media Agency</p>
                <small class="text-primary"><b>February 2022</b></small>
                <small>Awarded by Agency Reporter</small>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.05s">
                <figure><img src="{{ asset('frontend') }}/images/awards/bronze.png" alt="Image"></figure>
                <p>Bronze For Best SEO Campaign</p>
                <small class="text-primary"><b>July 2021</b></small>
                <small>Awarded by Agency Reporter</small>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.10s">
                <figure><img src="{{ asset('frontend') }}/images/awards/indias-top-10.png" alt="Image"></figure>
                <p>India’s top 10 Digital Agencies - Independent</p>
                <small class="text-primary"><b>March 2021</b></small>
                <small>Awarded at the Driver of Digital Summit</small>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.15s">
                <figure><img src="{{ asset('frontend') }}/images/awards/gold-for-best.png" alt="Image"></figure>
                <p>Gold for Best Social Media Campaign (Non – Profit)</p>
                <small class="text-primary"><b>June 2020</b></small>
                <small>Awarded at the Digixx summit by Adgully</small>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.20s">
                <figure><img src="{{ asset('frontend') }}/images/awards/best-digital-award.png" alt="Image"></figure>
                <p>Best Digital Innovation for ACMA Safer Drives</p>
                <small class="text-primary"><b>December 2017</b></small>
                <small>Awarded at the ACT Digital Summit Pune</small>
            </li>
        </ul>
    </div>
    <!-- end container -->
</section>
{{-- News --}}

<section class="recent-news sec-space">
    <div class="container">
        <div class="titles">
            <h2>Latest News</h2>
        </div>
        <div class="row">
            <div class="col-12 mb-5 wow fadeInUp">
                @if($latest_news)
                    <div class="content-box selected titles">
                        <h3 class="news-title"><a href="{{ $latest_news->url }}">{{ $latest_news->title }}</a></h3>
                        <span>{{ $latest_news->created_at }}</span>
                        <div class="custom-link mt-4"><a href="{{ $latest_news->url }}">Read More</a> <span></span> <i></i></div>
                    </div>
                @endif
            </div>
            <!-- end col-12 -->
            @foreach ($news as $news_row)
                <div class="col-lg-4 wow fadeInUp">
                    <div class="content-box h-100">
                        <small>News</small>
                        <h3 class="news-title"><a href="{{ $news_row->url }}">{{ $news_row->title }}</a></h3>
                        <span>{{ $news_row->created_at }}</span>
                        <div class="custom-link mt-4"><a href="{{ $news_row->url }}">Read More</a> <span></span> <i></i></div>
                    </div>
                </div>
           @endforeach
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

{{-- Testimonials --}}

<section class="testimonials sec-space">
    <div class="container">
        <div class="titles">
            <h2>Our Testimonials</h2>
        </div>
        <!-- end titles -->
        <div class="swiper-container">
            <div class="swiper-wrapper slider-btm-spacing">
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="titles">
                               <span class="slider-quote"><img src="{{ asset('frontend') }}/images/quote.png" alt="quote"></span>
                            <h4 class="font-weight-400">It is reassuring to work with people who treat your properties as their own and think pro-actively</h4>
                            <!-- <span class="slider-quote"><img src="images/quote.png" alt="quote"></span> -->
                            <p><span class="text-primary ">Ankita Dasgupta</span> | Marketing Manager, Teamwork Arts</p>
                           
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="titles">
                             <span class="slider-quote"><img src="{{ asset('frontend') }}/images/quote.png" alt="quote"></span>
                            <h4 class="font-weight-400">Webeesocial has been a fantastic partner in helping us define and optimize our digital objectives at ACMA</h4>
                            <!-- <span class="slider-quote"><img src="images/quote.png" alt="quote"></span> -->
                            <p><span class="text-primary">Harkaran Malhotra</span> | Deputy Director, ACMA</p>
                          
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="titles">
                             <span class="slider-quote"><img src="{{ asset('frontend') }}/images/quote.png" alt="quote"></span>
                            <h4 class="font-weight-400">As a marketer if I have a story, they are the best story tellers. They make your story heard & understood.</h4>
                              <!-- <span class="slider-quote"><img src="images/quote.png" alt="quote"></span> -->
                            <p><span class="text-primary">Gaurav Sandilya</span> | S.R. Overseas</p>
                         
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->
            <div class="swiper-pagination"></div>
            <!-- end swiper-pagination -->
        </div>
    </div>
</section>

<!-- end testimonials -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
        <div class="row sec-space">
            <div class="col-md-7">
                <div class="titles mb-md-0 wow fadeInUp">
                    <h3 class="mb-0">Want to check out our portfolio?</h3>
                </div>
                <!-- end career -->
            </div>
            <!-- end col-md-7 -->
            <div class="col-md-5">
                <div class="custom-btn justify-content-center mt-4 mt-md-5"><a href="{{ route('our-work') }}">Our Work<span></span> <i></i></a></div>
                <!-- end custom-btn -->
            </div>
        </div>
    </div>
</section>
@endsection