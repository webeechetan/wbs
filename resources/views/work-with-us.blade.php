@extends('layouts.app')
@section('content')
<section>
    <div class="headlines">
        <div class="container">
            <div class="zikzak-container">
                <h2 class="title-big">Work With <span class="text-primary">Us</span></h2>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end headlines -->
</section>
<!-- end about headline -->

<section class="page-header">
    <img src="{{ asset('frontend') }}/images/work_with_us_banner.jpg" width="100%" alt="Work With Us">
</section>
<!-- page header end -->

<section class="sec-space pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 px-md-0">
                <figure class="project-image reveal-effect mb-0 masker wow"> 
                    <img src="{{ asset('frontend') }}/images/our-value.jpg" width="100%" alt="Our Value">
                </figure>
            </div>
            <div class="col-md-6 pl-md-5 pr-md-0">
                <div class="titles">
                    <h4>Our Values</h4>
                    <p class="mb-0">At Webeesocial, we are proud of our team and encourage the efforts of all our bees in their achievements throughout their career with us. As a full-service agency, we strengthen ourselves by integrating each team to learn from one another. As a company, we have 4 specific values that we believe represent a successful working strategy: Taking Ownership, Thinking Smart, Supporting Others and Surprise and Delight. They are the essence of what we stand for as a company and part of our success are making sure we apply them to our work ethic.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 pl-md-0">
                <div class="titles">
                    <h4>Our Environment</h4>
                    <p class="mb-0">As soon as you walk into our office you will notice the vibrant atmosphere that hits you. As a company, we also want to encourage social awareness and are keen that we give a little back to the society in which we live and work. We endorse our “Bees” to share all ideas and recommendations to help drive the atmosphere in the working environment run smoothly and efficiently.</p>
                </div>
            </div>
            <div class="col-md-6 px-md-0">
                <figure class="project-image reveal-effect mb-0 masker wow"> 
                    <img src="{{ asset('frontend') }}/images/our-environment.jpg" width="100%" alt="Our Environment">
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- end work with us content -->

<section class="contact sec-space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titles">
                    <h3>Contact Our <span class="text-primary">HR</span></h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="titles">
                    <h6>For enquiries and applications</h6>
                    <p>please send your resume along with a detailed cover letter to our HR team at</p>
                    <p class="align-items-center">
                        <img src="{{ asset('frontend') }}/images/icon-mail.svg" width="24" alt="Email"> 
                        <a href="mailto:roshni.rastogi@webeesocial.com" class="ml-2"><b>hr@webeesocial.com</b></a>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="titles">
                    <h6>For WBS CA applications, please send a mail to</h6>
                    <p class="align-items-center">
                        <img src="{{ asset('frontend') }}/images/icon-mail.svg" width="24" alt="Email"> 
                        <a href="mailto:saurav.k@webeesocial.com" class="ml-2"><b>saurav.k@webeesocial.com</b></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact -->

@endsection