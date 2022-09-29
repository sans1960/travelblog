@extends('layouts.admin')
@section('title')
   Destinations / Show
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto mt-5">
            <div class="card mb-3">
                <img src="{{ asset('storage/destination/'.$destination->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title">{{ $destination->name}}</h3>
                  <h4 class="card-title">{{ $destination->title}}</h4>
                  <h5 class="card-title">{{ $destination->subtitle}}</h5>
                  <div>
                    {!! $destination->body !!}
                  </div>
                  <div>
                    {!! $destination->sidebody !!}
                  </div>
              
                </div>
              </div>
        </div>
    </div>
</div>
    
@endsection