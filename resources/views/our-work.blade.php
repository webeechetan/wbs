@extends('layouts.app')
@section('title',$meta->title)
@section('meta_description',$meta->meta_description)
@section('og_title',$meta->og_title)
@section('og_image',$meta->og_image)
@section('content')
<section>
   <div class="headlines">
      <div class="container">
         <div class="zikzak-container">
            <h2 class="title-banner">Our <span class="text-primary">Work</span></h2>
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
         
         <div class="gallery-product col-sm-4 col-lg-3 filter @foreach($work->category() as $category){{ $category->name }} @endforeach">
            <a href="{{ route('view.work',$work->slug) }}"><img src="{{ $work->images }}"  class="img-fluid"></a>
            <div class="content ">
               <h5><a href="{{ route('view.work',$work->slug) }}">{{$work->name}}</a></h5>
               <p>
                  @foreach($work->category() as $category)
                     {{ $category->name }},
                  @endforeach
               </p>
            </div>
         </div>
         @endforeach
      </div>
   
   </div>
   </div>
</section>
@endsection