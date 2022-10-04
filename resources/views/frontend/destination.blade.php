@extends('layouts.front')
@section('title')
    {{ $destination->name}}
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
        <div class="col-md-8 mx-auto">
            
        </div>
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
                    <a href="" class="btn  btn-outline-dark">Start to plan my trip</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="text-center">Sights from {{ $destination->name}}</h1>
    </div>
@endsection
@section('js')

@endsection