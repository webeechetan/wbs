@extends('layouts.app')
@section('title',$meta->title)
@section('meta_description',$meta->meta_description)
@section('og_title',$meta->og_title)
@section('og_image',$meta->og_image)
@section('content')
<div class="our-work-template">
    <section>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('our-work') }}">Our Work</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('view.work',$work->slug) }}">{{ $work->name }}</a></li>
                </ol>
            </nav>
            <div class="zikzak-container">
                <h2 class="title-banner mb-3">{{$work->name}}</h2>
                <p class="mb-0">Amyr is a first-of-its-kind fine jewellery brand, specifically</p>
            </div>
        </div>
        <!-- end container -->
    </section>
    <section class="sec-space">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    {!! $work->gallery_images !!}
                </div>
                <div class="col-md-4">
                    <div class="accordion" id="accordionMain">
                        @php 
                            $description = json_decode($work->description);
                            $heading = json_decode($work->heading);
                            $i = 0;
                        @endphp

                        @foreach($description as $item)
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <div class="accordion-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        {{ $heading[$i] }}
                                        <div class="accordion-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/></svg>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionMain">
                                    <div class="card-body">{!! $item !!}</div>
                                </div>
                            </div>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection