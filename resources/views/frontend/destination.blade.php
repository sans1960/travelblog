@extends('layouts.front')
@section('title')
    {{ $destination->name}}
@endsection
@section('estilo')
<link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
    
@endsection
@section('content')

    <div class="container-fluid  d-flex justify-content-center align-items-center"  style="background-image: url({{ asset('storage/destination/'.$destination->image)}});height:300px; background-size:cover;background-position:center center;" >
       
        <h1 class="text-white">{{ $destination->title}}</h1>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto d-flex justify-content-center align-items-center p-5">
                 <h3>{{ $destination->subtitle}}</h3>
            </div>
        </div>
    </div>
<div class="container mt-5">
    <div class="row">
        @foreach ($destination->imagedestination as $item)
          <div class="col-md-3 mt-2">
            <a href="{{ asset('storage/imagedestination/'.$item->image)}}"  data-lightbox="example-set" data-title="{{ $item->title}}">
                <img src="{{ asset('storage/imagedestination/'.$item->image)}}" class="img-fluid">
            </a>
          </div>
        @endforeach

        {{-- <div class="col-md-6 mx-auto owl-carousel owl-theme">
            @foreach ($destination->imagedestination as $item)
                <div class="card">
                    <img src="{{ asset('storage/imagedestination/'.$item->image)}}" class="card-img-top" alt=".{{ $item->caption}}">
                   <div class="card-body">
                     <h5 class="card-title">{{ $item->title}}</h5>
   
                     </div>
                </div>
                
            @endforeach

        </div> --}}
      
        
    </div>
</div>
    <div class="container mt-5
    ">
        <div class="row">
            <div class="col-md-8 p-3">
                {!! $destination->body!!}
            </div>
            <div class="col-md-4 p-3">
                {!! $destination->sidebody!!}
                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ route('contactdestination',$destination)}}" class="btn  btn-outline-dark">Start to plan my trip</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="text-center">Sights from {{ $destination->name}}</h1>
        <div class="row mt-5">
            <div class="col-md-6 mx-auto owl-carousel owl-theme">
                @foreach ($sights as $sight)
                <a href="{{ route('sight',$sight)}}" class="nav-link">
                    <div class="card mb-5">
                      <img src="{{ asset('storage/sights/'.$sight->image)}}" class="card-img-top" alt=".{{ $sight->caption}}">
                     <div class="card-body mb-5">
                       <h6 class="card-title">{{ $sight->date}}</h6>
                       <h5 class="card-title">{{ $sight->title}}</h5>
                         <div>
                          {!! Str::limit($sight->extract, 110, '...') !!}
                         </div>
                         <p>Read more</p>
                       </div>
                  </div>
                  </a>
                     
                @endforeach

            </div>
        </div>
    </div>

@endsection
@section('js')
<script src="{{ asset('js/lightbox.js')}}"></script>

{ <script>
     $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})
</script>
@endsection