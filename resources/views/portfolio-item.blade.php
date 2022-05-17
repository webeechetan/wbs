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
                @endphp
                @foreach($description as $item)
                <div class="col-sm-6 col-lg-4 mb-4 mb-sm-5">
                    <div class="titles">
                        {!! $item !!}
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row sec-space pb-0">
                <div class="col-12">
                    <div class="design-reff">
                        @foreach (explode(',',$work->images) as $image)
                            <img src="{{ asset('images') }}/{{ $image }}" alt="image">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection