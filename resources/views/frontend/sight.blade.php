@extends('layouts.front')
@section('title')
   {{$sight->title}} 
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <figure class="figure">
                        <img src="{{ asset('storage/sights/'.$sight->image)}}" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption text-center">{{ $sight->caption}}</figcaption>
                      </figure>
                    <div class="card-header">
                      <h1 class="text-center">{{$sight->title}}</h1>
                    </div>
                    <div class="card-body">
                     <div class="d-flex justify-content-around  p-2">
                        <p class="me-5">{{ $sight->country->name}}</p>
                        
                        <p class="ms-5">{{ $sight->category->name}}</p>
                     
                     </div>
                     <div class="" style="text-align: justify;">
                       {!! $sight->extract!!}
                      
                     </div>
                     <div class="" style="text-align: justify;">
                        {!! $sight->body!!}
                      </div>
                    </div>
                  </div>

            </div>
        </div>
        
  

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="p-5" >
                  <h1>Aqui va el mapa</h1>
                 </div>
            </div>
        </div>
        <div class="row d-flex  p-4 ">
            <h2>Share this Page with:

            </h2>
               <div class="col-md-2 mx-auto ">
                <a href="" class="btn btn-dark d-block p-2 mx-auto">Plan a trip here</a>
               </div>
               
        </div>
    </div>

@endsection