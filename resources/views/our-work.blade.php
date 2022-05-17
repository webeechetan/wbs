@extends('layouts.app')
@section('content')
<section>
   <div class="headlines">
      <div class="container">
         <div class="zikzak-container">
            <h2 class="title-big">Our <span class="text-primary">Work</span></h2>
         </div>
      </div>
      <!-- end container -->
   </div>
   <!-- end headlines -->
</section>
<!-- end Our Work headline -->
<section class="sec-space pt-0">
   <div class="container">
      <div class="gallery-btns">
         <button class="filter-button active" data-filter="all">All</button>
         @foreach ($categories as $category)
            <button class="filter-button" data-filter="{{$category->name}}">{{$category->name}}</button>
         @endforeach
      </div>
      <div class="row">
         @foreach ($ourWork as $work)
         
         <div class="gallery-product col-sm-4 col-lg-3 filter {{$work->category->name}}">
            <a href="{{ route('view.work',$work->name) }}"><img src="{{ asset('images') }}/{{ $work->images }}"  class="img-fluid"></a>
            <div class="content ">
               <h5><a href="#">{{$work->name}}</a></h5>
               <p>{{$work->category->name}}</p>
            </div>
         </div>
         @endforeach
      </div>
   
   </div>
   </div>
</section>
@endsection