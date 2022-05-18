@extends('layouts.app')
@section('content')

<section>
    <div class="headlines pb-0">
        <div class="container">
            <div class="row text-center text-md-left">
                <div class="col-lg-9">
                    <div class="zikzak-container">
                        <h2 class="title-banner mb-4">Thank you for <span class="text-primary">writing to us!</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end headlines -->
</section>
<!-- end about headline -->

<section class="sec-space pt-0">
    <div class="container">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-md-6">
                <div class="titles">
                    <h3 class="mb-4">We shall get back to you at the earliest.</h3>
                    <h6>In the meantime, do check out <a href="our-work" class="text-link">our work</a> or <a href="blog" class="text-link">our blogs</a>.</h6>
                </div>
                <p>Looking forward to connecting with you.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('frontend') }}/images/webee-thanku-img.jpg" alt="">
            </div>
        </div>
    </div>
</section>

@endsection