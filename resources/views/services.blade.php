@extends('layouts.app')
@section('content')
<section>
    <div class="headlines">
        <div class="container">
            <div class="zikzak-container">
                <h2 class="title-big">Our <span class="text-primary">Services</span></h2>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end headlines -->
</section>
<!-- end about headline -->

<section class="services sec-space pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/digital-strategy.png"></figure>
                    <div class="card-icon-content">
                         <div class="titles">
                              <h6 class="font-weight-600">Digital Strategy and Planning</h6>
                         </div>
                        <p>“We leverage our years of experience to create the correct strategy and plans for your
                            business which helps to grow your brand and revenue.</p>
                        <div class="custom-link"><a href="about-us.php">Read More</a> <span></span> <i></i></div>
                    </div>
                    <!-- end  -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/creative-strategy.png"></figure>
                    <div class="card-icon-content">
                         <div class="titles">
                              <h6 class="font-weight-600">Creative Strategy and Web Graphics Design</h6>
                         </div>
                        <p>“Creativity is a way of life at webeesocial. When we create something – a website, an app,
                            emailer, an infographic, a social media post or..</p>
                        <div class="custom-link"><a href="about-us.php">Read More</a> <span></span> <i></i></div>
                    </div>
                    <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/social-media.png"></figure>
                    <div class="card-icon-content">
                         <div class="titles">
                              <h6 class="font-weight-600">Social Media Marketing</h6>
                         </div>
                         <p>“Social is in our name, literally! Social Media is key to our overall strategy, and we use a
                            variety of social strategies across different channels…</p>
                        <div class="custom-link"><a href="about-us.php">Read More</a> <span></span> <i></i></div>
                    </div>
                    <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/content-marketing.png"></figure>
                    <div class="card-icon-content">
                         <div class="titles">
                              <h6 class="font-weight-600">Videos, GIFs and Content Marketing</h6>
                         </div>
                        <p>“Video has become the most popular content format. Google algorithm rewards pages with
                            features such as social media integration, social bookmarking and rich videos. Videos…</p>
                        <div class="custom-link"><a href="about-us.php">Read More</a> <span></span> <i></i></div>
                    </div>
                    <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/web-design.png"></figure>
                    <div class="card-icon-content">
                         <div class="titles">
                              <h6 class="font-weight-600">Website Design and Development</h6>
                         </div>
                        <p>“We stay ahead of the technological and UI trends. We focus on breaking down a user journey,
                            translating our design into the most efficient and…</p>
                        <div class="custom-link"><a href="about-us.php">Read More</a> <span></span> <i></i></div>
                    </div>
                    <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/seo-sem.png"></figure>
                    <div class="card-icon-content">
                         <div class="titles">
                              <h6 class="font-weight-600">SEO and Search Engine Marketing</h6>
                         </div>
                        <p>“Our approach to SEO and SEM is simple and transparent. We audit your assets and assess your
                            SEO/SEM goals post which we share timeline expectations…</p>
                        <div class="custom-link"><a href="about-us.php">Read More</a> <span></span> <i></i></div>
                    </div>
                    <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/email-marketing.png"></figure>
                    <div class="card-icon-content">
                         <div class="titles">
                              <h6 class="font-weight-600">Email Marketing</h6>
                         </div>
                        <p>“We can build effective email marketing campaigns and streamline the delivery process so that
                            sending emailers is easy, secure and personalised. Our creative team designs…</p>
                        <div class="custom-link"><a href="about-us.php">Read More</a> <span></span> <i></i></div>
                    </div>
                    <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/analysis.png"></figure>
                    <div class="card-icon-content">
                         <div class="titles">
                              <h6 class="font-weight-600">Web Analytics</h6>
                         </div>
                        <p>“Data driven marketing is most effective. Understanding analytics data is key for any
                            business with a digital presence. Your analytics helps you understand how users…</p>
                        <div class="custom-link"><a href="about-us.php">Read More</a> <span></span> <i></i></div>
                    </div>
                    <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/media-planning.png"></figure>
                    <div class="card-icon-content">
                         <div class="titles">
                              <h6 class="font-weight-600">Media Planning and Buying</h6>
                         </div>
                        <p>“We are connected with a network of media partners who help us offer a fully integrated and
                            accredited communication solution. These media include websites, apps,…</p>
                        <div class="custom-link"><a href="about-us.php">Read More</a> <span></span> <i></i></div>
                    </div>
                    <!-- end card-icon-content -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-icon">
                    <figure class="card-icon-img"><img src="{{ asset('frontend') }}/images/icons/shopify-development.png"></figure>
                    <div class="card-icon-content">
                         <div class="titles">
                              <h6 class="font-weight-600">Shopify Website & Development</h6>
                         </div>
                        <p>“Looking for a Shopify website development company? You’ve landed on just the right page!,…
                        </p>
                        <div class="custom-link"><a href="about-us.php">Read More</a> <span></span> <i></i></div>
                    </div>
                    <!-- end card-icon-content -->
                </div>
            </div>

        </div>
    </div>
</section>

@endsection