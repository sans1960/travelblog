@extends('layouts.admin')
@section('title')
   Country / Show
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto mt-5">
            <div class="card mb-3">
                <img src="{{ asset('storage/countries/'.$country->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title">{{ $country->name}}</h3>
                  <h4 class="card-title">{{ $country->destination->name}}</h4>
                  <h5 class="card-title">{{ $country->subregion->name}}</h5>
                
              
                </div>
              </div>
        </div>
    </div>
</div>
    
@endsection