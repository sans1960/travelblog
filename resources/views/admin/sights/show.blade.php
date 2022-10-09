@extends('layouts.admin')
@section('title')
   Sight / Show
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto mt-5">
            <div class="card mb-3">
                <img src="{{ asset('storage/sights/'.$sight->image)}}" class="card-img-top" alt="{{ $sight->caption}}">
                <div class="card-body">
                  <h3 class="card-title">{{ $sight->title}}</h3>
                  <h4 class="card-title">{{ $sight->destination->name}}</h4>
                  <h5 class="card-title">{{ $sight->subregion->name}}</h5>
                  <h5 class="card-title">{{ $sight->country->name}}</h5>
                  <h5 class="card-title">{{ $sight->category->name}}</h5>
                  <h5 class="card-title">{{ $sight->date}}</h5>
                  <h5 class="card-title">{{ $sight->latitud}}</h5>
                  <h5 class="card-title">{{ $sight->longitud}}</h5>
                  <h5 class="card-title">{{ $sight->zoom}}</h5>
                  <div>
                    {!! $sight->extract !!}
                  </div>
                  <div>
                    {!! $sight->body !!}
                  </div>
              
                </div>
              </div>
        </div>
    </div>
</div>
    
@endsection