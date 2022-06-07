@extends('layouts.app')
@section('title',$meta->title)
@section('meta_description',$meta->meta_description)
@section('og_title',$meta->og_title)
@section('og_image',$meta->og_image)
@section('content')
<div class="our-work-template">
    <section>
        <div class="headlines">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('our-work') }}">Our Work</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('view.work',$work->slug) }}">{{ $work->name }}</a></li>
                    </ol>
                </nav>
                <div class="zikzak-container">
                    <h2 class="title-banner">{{$work->name}}</h2>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end headlines -->
    </section>
    <section class="sec-space pt-0">
        <div class="container">
            <div class="row">
                @php 
                    $description = json_decode($work->description);
                    $heading = json_decode($work->heading);
                    $i = 0;
                @endphp

                @foreach($description as $item)
                    <div class="col-sm-6 col-lg-4 mb-4 mb-sm-5">
                        <div class="titles">
                            <h5>{{ $heading[$i] }}</h5>
                            {!! $item !!}
                        </div>
                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </div>
            <div class="row sec-space pb-0">
                <div class="col-12">
                    <div class="design-reff">
                        @php
                            $gallery_images = explode(",", $work->gallery_images);
                        @endphp
                        <div class="row">
                            @foreach ($gallery_images as $image)
                            <div class="col-md-4">
                                <img src="{{ asset('images') }}/{{ $image }}" alt="image">
                            </div> 
                            @endforeach
                        </div>   
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection