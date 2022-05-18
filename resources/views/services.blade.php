@extends('layouts.app')
@section('content')
<section>
    <div class="headlines">
        <div class="container">
            <div class="zikzak-container">
                <h2 class="title-banner">Our <span class="text-primary">Services</span></h2>
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
            @foreach ($services as $service)
            <div class="col-md-4 sec-space pt-0">
                <div class="card-icon">
                    <div class="card-icon-top">
                        <figure class="card-icon-img"><img src="{{ asset('images') }}/{{ $service->icon }}"></figure>
                        <div class="titles"><h6 class="font-weight-700">{{ $service->title }}</h6></div>
                    </div>
                    <div class="card-icon-content">
                        <p>{{ Str::words(strip_tags($service->description),25) }}</p>
                        <div class="custom-link"><a href="about-us.php">Read More</a> <span></span> <i></i></div>
                    </div>
                    <!-- end  -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection