@extends('layouts.app')
@section('title',$meta->title)
@section('meta_description',$meta->meta_description)
@section('og_title',$meta->og_title)
@section('og_image',$meta->og_image)
@section('content')

<section class="inner-banner">
    <div class="container">
        <h2 class="title-big">Our <b>Services</b></h2>
   </div>
</section>
<!-- end hero title -->
<section>
    <img src="{{ asset('frontend') }}/images/about_banner.jpg" width="100%" alt="About Us">
</section>
<!-- page header end -->
<section class="layout1 sec-space">
    <div class="container">
        <ul class="works">
            <li>
                <div class="wow fadeInUp">
                    <h2 class="font-weight-400">Explore our all <b>services</b></h2>
                    <p><strong>Adding new features. Working to help your section business grow. We’re constantly refining our product.</strong></p>
                </div>
            </li>
            <li>
                <div class="project-box">
                    <figure class="project-image reveal-effect masker wow">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/works02.jpg" alt="">
                        </a>
                    </figure>
                    <div class="project-content">
                        <h5><a href="http://agensy.themezinho.net/portfolio/moments-matter-event-studio/"> Digital Strategy & Planning </a></h5>
                        <p>“We leverage our years of experience to create the correct strategy and plans for your business which helps to grow your brand and revenue.</p>
                        <div class="custom-link"><a href="http://localhost/github/wbs/our-services/digital-strategy-and-planning">Read More</a> <span></span> <i></i></div>
                    </div>
                </div>
                <!-- end project-box -->
            </li>
            <li>
                <div class="project-box">
                    <figure class="project-image reveal-effect masker wow">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/works02.jpg" alt="">
                        </a>
                    </figure>
                    <div class="project-content">
                        <h5><a href="http://agensy.themezinho.net/portfolio/moments-matter-event-studio/"> Digital Strategy & Planning </a></h5>
                        <p>“We leverage our years of experience to create the correct strategy and plans for your business which helps to grow your brand and revenue.</p>
                        <div class="custom-link"><a href="http://localhost/github/wbs/our-services/digital-strategy-and-planning">Read More</a> <span></span> <i></i></div>
                    </div>
                </div>
                <!-- end project-box -->
            </li>
            <li>
                <div class="project-box">
                    <figure class="project-image reveal-effect masker wow">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/works02.jpg" alt="">
                        </a>
                    </figure>
                    <div class="project-content">
                        <h5><a href="http://agensy.themezinho.net/portfolio/moments-matter-event-studio/"> Digital Strategy & Planning </a></h5>
                        <p>“We leverage our years of experience to create the correct strategy and plans for your business which helps to grow your brand and revenue.</p>
                        <div class="custom-link"><a href="http://localhost/github/wbs/our-services/digital-strategy-and-planning">Read More</a> <span></span> <i></i></div>
                    </div>
                </div>
                <!-- end project-box -->
            </li>
            <li>
                <div class="project-box">
                    <figure class="project-image reveal-effect masker wow">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/works02.jpg" alt="">
                        </a>
                    </figure>
                    <div class="project-content">
                        <h5><a href="http://agensy.themezinho.net/portfolio/moments-matter-event-studio/"> Digital Strategy & Planning </a></h5>
                        <p>“We leverage our years of experience to create the correct strategy and plans for your business which helps to grow your brand and revenue.</p>
                        <div class="custom-link"><a href="http://localhost/github/wbs/our-services/digital-strategy-and-planning">Read More</a> <span></span> <i></i></div>
                    </div>
                </div>
                <!-- end project-box -->
            </li>
        </ul>
    </div>
</section>
<section class="services d-none sec-space">
    <div class="container">
        <div class="row">
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                <div class="card-icon-top">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/digital-strategy.png"></figure>
                    <div class="titles">
                        <h6 class="font-weight-600">Digital Strategy & Planning</h6>
                    </div>
                </div>
                <div class="card-icon-content">
                    <p>“We leverage our years of experience to create the correct strategy and plans for your business which helps to grow your brand and revenue.</p>
                    <div class="custom-link"><a href="{{route('digital.strategy.and.planning')}}">Read More</a> <span></span> <i></i></div>
                </div>
                <!-- end  -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                    <div class="card-icon-top">
                        <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/creative-strategy.png"></figure>
                        <div class="titles">
                            <h6 class="font-weight-600">Creative Strategy and Web Graphics Design</h6>
                        </div>
                    </div>
                    <div class="card-icon-content">
                        <p>“Creativity is a way of life at webeesocial. When we create something – a website, an app, emailer, an infographic, a social media post or..</p>
                        <div class="custom-link"><a href="{{route('creative.strategy.and.web.graphics.design')}}">Read More</a> <span></span> <i></i></div>
                    </div>
                   <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                <div class="card-icon-top">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/social-media.png"></figure>
                    <div class="titles">
                        <h6 class="font-weight-600">Social Media Marketing</h6>
                    </div>
                </div>
                <div class="card-icon-content">
                    <p>“Social is in our name, literally! Social Media is key to our overall strategy, and we use a variety of social strategies across different channels…</p>
                    <div class="custom-link"><a href="{{route('social.media.marketing')}}">Read More</a> <span></span> <i></i></div>
                </div>
                <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                <div class="card-icon-top">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/content-marketing.png"></figure>
                    <div class="titles">
                        <h6 class="font-weight-600">Videos, GIFs and Content Marketing</h6>
                    </div>
                </div>
                <div class="card-icon-content">
                    <p>“Video has become the most popular content format. Google algorithm rewards pages with features such as social media integration, social bookmarking and rich videos. Videos…</p>
                    <div class="custom-link"><a href="{{route('videos.gifs.and.content.marketing')}}">Read More</a> <span></span> <i></i></div>
                </div>
                <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                <div class="card-icon-top">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/web-design.png"></figure>
                    <div class="titles">
                        <h6 class="font-weight-600">Website Design and Development</h6>
                    </div>
                </div>
                <div class="card-icon-content">
                    <p>“We stay ahead of the technological and UI trends. We focus on breaking down a user journey, translating our design into the most efficient and…</p>
                    <div class="custom-link"><a href="{{route('website.design.and.development')}}">Read More</a> <span></span> <i></i></div>
                </div>
                <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                <div class="card-icon-top">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/seo-sem.png"></figure>
                    <div class="titles">
                        <h6 class="font-weight-600">SEO and Search Engine Marketing</h6>
                    </div>
                </div>
                <div class="card-icon-content">
                    <p>“Our approach to SEO and SEM is simple and transparent. We audit your assets and assess your SEO/SEM goals post which we share timeline expectations…</p>
                    <div class="custom-link"><a href="{{route('seo.and.search.engine.marketing')}}">Read More</a> <span></span> <i></i></div>
                </div>
                <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                <div class="card-icon-top">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/email-marketing.png"></figure>
                    <div class="titles">
                        <h6 class="font-weight-600">Email Marketing</h6>
                    </div>
                </div>
                <div class="card-icon-content">
                    <p>“We can build effective email marketing campaigns and streamline the delivery process so that sending emailers is easy, secure and personalised. Our creative team designs…</p>
                    <div class="custom-link"><a href="{{route('email.marketing')}}">Read More</a> <span></span> <i></i></div>
                </div>
                <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                <div class="card-icon-top">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/web-analytics.png"></figure>
                    <div class="titles">
                        <h6 class="font-weight-600">Web Analytics</h6>
                    </div>
                </div>
                <div class="card-icon-content">
                    <p>“Data driven marketing is most effective. Understanding analytics data is key for any
                        business with a digital presence. Your analytics helps you understand how users…
                    </p>
                    <div class="custom-link"><a href="{{route('web.analytics')}}">Read More</a> <span></span> <i></i></div>
                </div>
                <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
            <div class="card-icon">
               <div class="card-icon-top">
                  <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/media-planning.png"></figure>
                  <div class="titles">
                     <h6 class="font-weight-600">Media Planning and Buying</h6>
                  </div>
               </div>
               <div class="card-icon-content">
                  <p>“We are connected with a network of media partners who help us offer a fully integrated and accredited communication solution. These media include websites, apps,…</p>
                  <div class="custom-link"><a href="{{route('media.planning.and.buying')}}">Read More</a> <span></span> <i></i></div>
               </div>
               <!-- end card-icon-content -->
            </div>
         </div>
         <div class="col-md-4">
            <div class="card-icon">
               <div class="card-icon-top">
                  <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/shopify-development.png"></figure>
                  <div class="titles">
                     <h6 class="font-weight-600">Shopify Website & Development</h6>
                  </div>
               </div>
               <div class="card-icon-content">
                  <p>“Looking for a Shopify website development company? You’ve landed on just the right page!,…</p>
                  <div class="custom-link"><a href="{{route('shopify.website.development')}}">Read More</a> <span></span> <i></i></div>
               </div>
               <!-- end card-icon-content -->
            </div>
         </div>
        </div>
    </div>
</section>
<!-- CTA -->
<section class="sec-space pt-0">
    <div class="container">
        <div class="row align-items-center wow fadeInUp">
            <div class="col-md-8">
                <h2 class="font-weight-400 mb-0">Ready to discuss your <b>project</b> ?</h2>
            </div>
            <div class="col-md-4 text-right">
                <div class="custom-btn justify-content-end"><a href="#">Get in touch<span></span> <i></i></a></div>
            </div>
        </div>
    </div>
</section>
@endsection    
