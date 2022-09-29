@extends('layouts.admin')
@section('title')
{{ __('Image Destinations-show') }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h2>{{ $imagedestination->destination->name}}</h2>
            <figure class="figure">
                <img src="{{ asset('storage/imagedestination/'. $imagedestination->image)}}" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">{{  $imagedestination->title}}</figcaption>
              </figure>
              <p>{{  $imagedestination->caption}}</p>
        </div>
    </div>
</div>
    
@endsection