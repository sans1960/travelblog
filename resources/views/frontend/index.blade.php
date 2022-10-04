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
                    <img src="https://cdn.pixabay.com/photo/2017/01/13/07/41/kyoto-1976538_960_720.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100 ">
                      <h1 class="mb-5">The world is yours</h1>
                      <h5>We are specialists in tailor-made trips around the world.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2019/11/29/14/29/new-zealand-4661427_960_720.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                      <h1>We create unique trips.</h1>
                      <h5>Some representative placeholder content for the second slide.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_960_720.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                      <h1>Third slide label</h1>
                      <h5>Some representative placeholder content for the third slide.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_960_720.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                      <h1>Third slide label</h1>
                      <h5>Some representative placeholder content for the third slide.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_960_720.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                      <h1>Third slide label</h1>
                      <h5>Some representative placeholder content for the third slide.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_960_720.jpg" class="d-block w-100" alt="...">
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
            <a href="" class="btn btn-outline-dark mb-5">Tailor-made trips</a>
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
                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                      </div>
                      <div class="d-flex justify-content-center">
                         <button type="submit" class="btn btn-outline-dark">Sign up</button>
                      </div>
                </form>
              
               
    
            </div>
    
        </div>
    </div>
@endsection