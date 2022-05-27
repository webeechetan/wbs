@extends('layouts.app')
@section('content')
<section>
        <div class="headlines">
            <div class="container">
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
                            <h6>{{ $heading[$i] }}</h6>
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
                        <img src="{{ $work->images }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection