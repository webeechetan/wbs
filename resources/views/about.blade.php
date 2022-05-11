@extends('layouts.app')
@section('content')
<section>
    <div class="headlines">
        <div class="container">
            <div class="zikzak-container">
                <h2 class="title-big">About <span class="text-primary">Us</span></h2>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end headlines -->
</section>
<!-- end about headline -->

<section class="page-header">
    <img src="{{ asset('frontend') }}/images/about_banner.jpg" width="100%" alt="About Us">
</section>
<!-- page header end -->

<section class="sec-space pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <figure class="project-image reveal-effect masker wow"> 
                    <img src="{{ asset('frontend') }}/images/about_img4.jpg" alt="Image">
                </figure>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="titles">
                    <h4>Who we are?</h4>
                    <p class="font-weight-600">We live and breathe digital. The Internet is our home.</p>
                    <p class="mb-0">We are a buzzing digital media agency based out of New Delhi, India. Our team consists of experienced and hardworking social bees who breathe and live digital. Change on Facebook, Twitter, YouTube, Instagram, Google algorithm? Rest assured that we are aware of it the moment it’s out. We combine our years of experience in creating integrated social solutions with creative output to generate a rich digital experience for our clients. We think we research, we create, and for our clients, we thrive to deliver best solutions to their every problem.</p>
                </div>
            </div>
        </div>
        <div class="row sec-space pb-0 align-items-center">
            <div class="col-md-6">
                <div class="titles">
                    <h4>What We Do?</h4>
                    <p class="font-weight-600">We are working with clients from India, U.K., Canada, New Zealand, Hong Kong, Singapore , U.A.E. e.t.c. across verticals like ecommerce, technology, retail and events.</p>
                    <p class="mb-0"> From marketing events like Auto Expo - Components and MTV unplugged to creating some incredible ROAS (Return on ad spends) for ecommerce brands, our team loves to be creative and strategic about different lines of businesses. We won the 'Best Digital Innovation' award at the ACT summit in Pune where our digital activation campaign for ACMA Safer work-places won accolades from auto component OEMs. We are hungry for creativity and passionate about driving results. Our clients below can attest to our efforts!</p>
                </div>
            </div>
            <div class="col-md-6">
                <figure class="project-image reveal-effect masker wow"> 
                    <img src="{{ asset('frontend') }}/images/what-we-do.jpg" alt="What We Do?">
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- end about content -->

{{-- Awards --}}

<section class="our-awards sec-space">
    <div class="container">
        <div class="titles mb-5 text-center">
            <h6 class="text-primary">#WeBeeWinning</h6>
            <h2>AWARDS & PRIZES</h2>
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
                <small>February 2022 Awarded by Agency Reporter</small>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.05s">
                <figure><img src="{{ asset('frontend') }}/images/awards/bronze.png" alt="Image"></figure>
                <p>Bronze For Best SEO Campaign</p>
                <small>July 2021 Awarded by Agency Reporter</small>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.10s">
                <figure><img src="{{ asset('frontend') }}/images/awards/indias-top-10.png" alt="Image"></figure>
                <p>India’s top 10 Digital Agencies - Independent</p>
                <small>March 2021 Awarded at the Driver of Digital Summit</small>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.15s">
                <figure><img src="{{ asset('frontend') }}/images/awards/gold-for-best.png" alt="Image"></figure>
                <p>Gold for Best Social Media Campaign (Non – Profit)</p>
                <small>June 2020 Awarded at the Digixx summit by Adgully</small>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.20s">
                <figure><img src="{{ asset('frontend') }}/images/awards/best-digital-award.png" alt="Image"></figure>
                <p>Best Digital Innovation for ACMA Safer Drives</p>
                <small>December 2017 Awarded at the ACT Digital Summit Pune</small>
            </li>
        </ul>
    </div>
    <!-- end container -->
</section>
<!-- end our-awards -->

<section class="sec-space pt-0">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <div class="titles">
                    <h2>The <span class="text-primary">Leadership</span><h2>    
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-leader">
                    <div class="card-leader-head">
                        <figure class="bg-design-1"><img src="{{ asset('frontend') }}/images/team-1.png"></figure>
                        <div class="card-leader-title">
                            <p><span class="font-weight-600">Soumya Sharma</span><br/><span class="text-primary">Co-Founder & CEO</span></p>
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
                            <p><span class="font-weight-600">Shubhendu Jha</span><br/><span class="text-primary">Co-Founder & MD</span></p>
                            <p>Shubhendu Jha is the Co-Founder & MD of WebeeSocial. He also heads the Client Servicing Department of the agency. Before setting up WeBeeSocial, he was working with brands like airtel, Dabur, Honda, Adidas etc. which made him proficient in different verticals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>
<!-- end about content -->

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
            <!-- <li><figure><img src="{{ asset('frontend') }}/images/client-logos/hella-black.png" alt="Hella Logo"></figure></li> -->
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/bpcl-black.png" alt="Bharat Petroleum Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/max-black.png" alt="Max Healthcare Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/solo-black.png" alt="Solo Expenses Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/oriflame-black.png" alt="Oriflame Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/bbc-black.png" alt="BBC Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/beds4u-black.png" alt="Beds4u Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/nasscom-black.png" alt="Nasscom Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/ozone-black.png" alt="Ozone Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/shemford-black.png" alt="Shemford Logo"></figure></li>
            <!-- <li><figure><img src="{{ asset('frontend') }}/images/client-logos/isgec-black.png" alt="ISGEC Logo"></figure></li> -->
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/ccc-black.png" alt="CCC Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/colors-black.png" alt="Colors Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/sos-black.png" alt="SOS Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/ok-play-black.png" alt="Ok Play Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/tci-black.png" alt="TCI Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/goethe-black.png" alt="Goethe Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/teamwork-black.png" alt="Teamwork Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/aston-black.png" alt="Aston University Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/bare-body-black.png" alt="Bare Body Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/pfi-black.png" alt="PFI Logo"></figure></li>
            <li><figure><img src="{{ asset('frontend') }}/images/client-logos/jagat-pharma-black.png" alt="Jagat Pharma Logo"></figure></li>
        </ul>
    </div>
    <!-- end container -->
</section>
<!-- end logos -->

<section>
    <div class="container">
        <div class="row sec-space">
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