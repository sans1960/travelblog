@extends('layouts.front')
@section('title')
    Home
@endsection
@section('estilo')
 
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('img/architecture.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100 ">
                      <h1 class="mb-5">The world is yours</h1>
                      <h5>We are specialists in tailor-made trips around the world.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/bora-bora.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                      <h1>We create unique trips.</h1>
                      <h5>Some representative placeholder content for the second slide.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/lighthouse.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                      <h1>Third slide label</h1>
                      <h5>Some representative placeholder content for the third slide.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/maldives.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                      <h1>Third slide label</h1>
                      <h5>Some representative placeholder content for the third slide.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/woman.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                      <h1>Third slide label</h1>
                      <h5>Some representative placeholder content for the third slide.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                 
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1>Welcome</h1>
            <p>We believe that trips should be as individual as you, where every detail counts for a unique experience. This is the essence of our business.</p>
            <a href="{{ route('taylor')}}" class="btn btn-outline-dark mb-5">Tailor-made trips</a>
            <h1 class="text-center mt-5">Our destinations</h1>

        </div>

    </div>
</div>
    <div class="container mt-5">
        <div class="row mt-5">
            @foreach ($destinations as $destination)
                <div class="col-md-3 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('storage/destination/'.$destination->image)}});background-size:cover;height:200px;">
                  <a href="{{ route('destination',$destination)}}" class="btn btn-outline-dark">{{$destination->name}}</a>
                </div>
            @endforeach
        </div>

    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 class="text-center">Subscribe</h1>
                <p class="text-center">Sign up to hear from us about specials, news and promotions.</p>
                <form action="{{ route('contactos.list.store')}}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                        @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                      </div>
                      <div class="d-flex justify-content-center">
                         <button type="submit" class="btn btn-outline-dark">Sign up</button>
                      </div>
                </form>
              
               
    
            </div>
    
        </div>
    </div>
    <div class="container mt-5">
      <h2 class="text-center">Travel Blog</h2>
      <div class="row">
        <div class="col-md-6 mx-auto owl-carousel owl-theme">
          @foreach ($pages as $page)
          <a href="{{ route('page',$page)}}" class="nav-link">
            <div class="card">
              <img src="{{ asset('storage/page/'.$page->image)}}" class="card-img-top" alt=".{{ $page->caption}}">
             <div class="card-body">
               <h6 class="card-title">{{ $page->date}}</h6>
               <h5 class="card-title">{{ $page->name}}</h5>
                 <div>
                  {!! Str::limit($page->description, 110, '...') !!}
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
<script>
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
         items:4,
         nav:true,
         loop:false
     }
 }
})
</script>
@endsection