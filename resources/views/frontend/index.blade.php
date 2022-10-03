@extends('layouts.front')
@section('title')
    Home
@endsection
@section('estilo')
 
@endsection
@section('content')

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
                  <a href="" class="btn btn-outline-dark">{{$destination->name}}</a>
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