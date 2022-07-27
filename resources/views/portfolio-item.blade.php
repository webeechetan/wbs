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
                    <p class="mb-0">{{ $work->short_description }}</p>
                </div>
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
                                    <h5 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapseOne">{{ $heading[$i] }}</button>
                                    </h5>
                                </div>
                                <div id="collapse{{$i}}" class="collapse @if($i==0) show @endif" aria-labelledby="headingOne" data-parent="#accordionExample">
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