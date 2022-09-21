@extends('layouts.app')
@section('title',$meta->title)
@section('meta_description',$meta->meta_description)
@section('og_title',$meta->og_title)
@section('og_image',$meta->og_image)
@section('content')

<section class="pb-4">
    <div class="container">
        <h2 class="title-big">About <b>Us</b></h2>
   </div>
</section>

<section class="page-header">
    <img src="{{ asset('frontend') }}/images/about_banner.jpg" width="100%" alt="About Us">
</section>
<!-- page header end -->

<section class="sec-space pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 p-md-0">
                <figure class="project-image reveal-effect mb-0 masker wow w-100"> 
                    <img src="{{ asset('frontend') }}/images/about_img4.jpg" width="100%" alt="Image">
                </figure>
            </div>
            <div class="col-md-6 pl-md-5 pr-md-0">
                <div class="titles">
                    <h4 class="title">Who We <b>Are?</b></h4>
                    <p class="font-weight-600">We live and breathe digital. The Internet is our home.</p>
                    <p class="mb-0">We are a buzzing digital media agency based out of New Delhi, India. Our team consists of experienced and hardworking social bees who breathe and live digital. Change on Facebook, Twitter, YouTube, Instagram, Google algorithm? Rest assured that we are aware of it the moment it’s out. We combine our years of experience in creating integrated social solutions with creative output to generate a rich digital experience for our clients. We think we research, we create, and for our clients, we thrive to deliver best solutions to their every problem.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 pl-md-0">
                <div class="titles">
                    <h4 class="title">What We <b>Do?</b></h4>
                    <p class="font-weight-600">We are working with clients from India, U.K., Canada, New Zealand, Hong Kong, Singapore, U.A.E. e.t.c. across verticals like ecommerce, technology, retail and events.</p>
                    <p class="mb-0"> From marketing events like Auto Expo - Components and MTV unplugged to creating some incredible ROAS (Return on ad spends) for ecommerce brands, our team loves to be creative and strategic about different lines of businesses. We won the 'Best Digital Innovation' award at the ACT summit in Pune where our digital activation campaign for ACMA Safer work-places won accolades from auto component OEMs. We are hungry for creativity and passionate about driving results. Our clients below can attest to our efforts!</p>
                </div>
            </div>
            <div class="col-md-6 p-md-0">
                <figure class="project-image reveal-effect mb-0 masker wow w-100"> 
                    <img src="{{ asset('frontend') }}/images/what-we-do.jpg" width="100%" alt="What We Do?">
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- end about content -->

<!-- Awards Works -->
<section class="awards_sec sec-space">
    <div>
        <div class="container">
            <div class="awards_sec_title text-center">
                <div>
                    <h2 class="title-big mb-lg-5">Awards</h2>
                    <img src="{{ asset('') }}/frontend/images/new-home/awards_left_img.jpg" class="d-none d-lg-inline-block" alt="">
                </div>
            </div>
        </div>
        <div class="awards_sec_right">
            <div class="awards_sec_slider-container awards_sec_slider">
                <div class="awards_sec_slider-inner swiper-wrapper">
                    <div class="awards_sec_slider-item swiper-slide">
                        <img src="{{ asset('') }}/frontend/images/new-home/award_img1.jpg" class="border-round" alt="">
                        <div>
                            <h6>India’s Fastest Growing Social Media Agency</h6>
                            <p>Awarded by Agency Reporter</p>
                            <ul class="meta">
                                <li>February 2022</li>
                            </ul>
                        </div>
                    </div>
                    <div class="awards_sec_slider-item swiper-slide">
                        <img src="{{ asset('') }}/frontend/images/new-home/award_img1.jpg" class="border-round" alt="">
                        <div>
                            <h6>India’s Fastest Growing Social Media Agency</h6>
                            <p>Awarded by Agency Reporter</p>
                            <ul class="meta">
                                <li>February 2022</li>
                            </ul>
                        </div>
                    </div>
                    <div class="awards_sec_slider-item swiper-slide">
                        <img src="{{ asset('') }}/frontend/images/new-home/award_img1.jpg" class="border-round" alt="">
                        <div>
                            <h6>India’s Fastest Growing Social Media Agency</h6>
                            <p>Awarded by Agency Reporter</p>
                            <ul class="meta">
                                <li>February 2022</li>
                            </ul>
                        </div>
                    </div>
                    <div class="awards_sec_slider-item swiper-slide">
                        <img src="{{ asset('') }}/frontend/images/new-home/award_img1.jpg" class="border-round" alt="">
                        <div>
                            <h6>India’s Fastest Growing Social Media Agency</h6>
                            <p>Awarded by Agency Reporter</p>
                            <ul class="meta">
                                <li>February 2022</li>
                            </ul>
                        </div>
                    </div>     
                </div>
                <div class="awards_sec_slider-pagination text-center mt-3"></div>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section>
    <div class="container">
        <div class="row text-center">
            <div class="col-12 mb-4 mb-md-5">
                <h2 class="title-big">The <b>Leadership</b><h2>
            </div>
            <div class="col-md-6">
                <div class="card-leader">
                    <div class="card-leader-head">
                        <figure class="bg-design-1"><img src="{{ asset('frontend') }}/images/team-1.png"></figure>
                        <div class="card-leader-title">
                            <p><span class="font-weight-700">Soumya Sharma</span><br/><span class="text-primary">Co-Founder & CEO</span></p>
                            <p>Soumya sharma is the Co-Founder & CEO of WebeeSocial. She also heads the Creative Department of the agency. Before setting up WeBeeSocial, she spearheaded some of the biggest campaigns for brands like Huawei, Intel, Ford, Dabur etc.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-leader">
                    <div class="card-leader-head">
                        <figure><img src="{{ asset('frontend') }}/images/team-2.png"></figure>
                        <div class="card-leader-title">
                            <p><span class="font-weight-700">Shubhendu Jha</span><br/><span class="text-primary">Co-Founder & MD</span></p>
                            <p>Shubhendu Jha is the Co-Founder & MD of WebeeSocial. He also heads the Client Servicing Department of the agency. Before setting up WeBeeSocial, he was working with brands like airtel, Dabur, Honda, Adidas etc. which made him proficient in different verticals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>

<!-- Client Logos Section -->
<section class="client_ani-sec sec-space">
    <div class="container">
        <h2 class="title-big text-center mb-4 mb-md-5">Our <b>Clients</b></h2>
    </div>
    <div class="client_ani">
        <div class="client_ani-row">
            <div class="client_ani-row-list" data-client-list-id="1">
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/mahindra-black.png" alt="Mahindra Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/acma-black.png" alt="Acma Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/lotus-black.png" alt="Lotus Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/iiht-black.png" alt="IIHT Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/cbre-black.png" alt="CBRE Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/govt-black.png" alt="Govt Logo"></figure>
            </div>
            <div class="client_ani-row-list" data-client-list-id="1">
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/mahindra-black.png" alt="Mahindra Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/acma-black.png" alt="Acma Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/lotus-black.png" alt="Lotus Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/iiht-black.png" alt="IIHT Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/cbre-black.png" alt="CBRE Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/govt-black.png" alt="Govt Logo"></figure>
            </div>
        </div>
        <div class="client_ani-row">
            <div class="client_ani-row-list" data-client-list-id="2">
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/mtv-black.png" alt="Mtv Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/messe-frankfurt-black.png" alt="Messe frankfurt Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/oupont-black.png" alt="Oupont Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/usaid-black.png" alt="Usaid Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/bpcl-black.png" alt="Bharat Petroleum Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/max-black.png" alt="Max Healthcare Logo"></figure>
            </div>
            <div class="client_ani-row-list" data-client-list-id="2">
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/mtv-black.png" alt="Mtv Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/messe-frankfurt-black.png" alt="Messe frankfurt Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/oupont-black.png" alt="Oupont Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/usaid-black.png" alt="Usaid Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/bpcl-black.png" alt="Bharat Petroleum Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/max-black.png" alt="Max Healthcare Logo"></figure>
            </div>
        </div>
        <div class="client_ani-row">
            <div class="client_ani-row-list" data-client-list-id="3">
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/solo-black.png" alt="Solo Expenses Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/oriflame-black.png" alt="Oriflame Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/bbc-black.png" alt="BBC Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/beds4u-black.png" alt="Beds4u Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/nasscom-black.png" alt="Nasscom Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/ozone-black.png" alt="Ozone Logo"></figure>
            </div>
            <div class="client_ani-row-list" data-client-list-id="3">
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/solo-black.png" alt="Solo Expenses Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/oriflame-black.png" alt="Oriflame Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/bbc-black.png" alt="BBC Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/beds4u-black.png" alt="Beds4u Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/nasscom-black.png" alt="Nasscom Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/ozone-black.png" alt="Ozone Logo"></figure>
            </div>
        </div>
        <div class="client_ani-row">
            <div class="client_ani-row-list" data-client-list-id="4">
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/shemford-black.png" alt="Shemford Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/ccc-black.png" alt="CCC Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/colors-black.png" alt="Colors Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/sos-black.png" alt="SOS Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/ok-play-black.png" alt="Ok Play Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/tci-black.png" alt="TCI Logo"></figure>
            </div>
            <div class="client_ani-row-list" data-client-list-id="4">
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/shemford-black.png" alt="Shemford Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/ccc-black.png" alt="CCC Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/colors-black.png" alt="Colors Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/sos-black.png" alt="SOS Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/ok-play-black.png" alt="Ok Play Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/tci-black.png" alt="TCI Logo"></figure>
            </div>
        </div>
        <div class="client_ani-row">
            <div class="client_ani-row-list" data-client-list-id="5">
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/goethe-black.png" alt="Goethe Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/teamwork-black.png" alt="Teamwork Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/aston-black.png" alt="Aston University Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/bare-body-black.png" alt="Bare Body Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/PFI-black.png" alt="PFI Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/jagat-pharma-black.png" alt="Jagat Pharma Logo"></figure>
            </div>
            <div class="client_ani-row-list" data-client-list-id="5">
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/goethe-black.png" alt="Goethe Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/teamwork-black.png" alt="Teamwork Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/aston-black.png" alt="Aston University Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/bare-body-black.png" alt="Bare Body Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/PFI-black.png" alt="PFI Logo"></figure>
                <figure class="client_ani-column"><img src="{{ asset('') }}/frontend/images/client-logos/jagat-pharma-black.png" alt="Jagat Pharma Logo"></figure>
            </div>
        </div>
    </div>
</section>

<section class="sec-space pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titles mb-md-0 wow fadeInUp">
                    <h3 class="mb-0">We live by our motto – “We create super-rich experiences online<span class="text-primary">!</span>”</h3>
                </div>
                <!-- end career -->
            </div>
        </div>
    </div>
</section>
<!-- end footer bottom -->

@endsection