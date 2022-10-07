@extends('layouts.admin')
@section('title')
   Pages / Show
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto mt-5">
            <div class="card mb-3">
                <img src="{{ asset('storage/page/'.$page->image)}}" class="card-img-top" alt="{{ $page->caption}}">
                <div class="card-body">
                  <h3 class="card-title">{{ $page->name}}</h3>
                  <h4 class="card-title">{{ $page->tag->name}}</h4>
                  <h5 class="card-title">{{ $page->date}}</h5>
                  <div>
                    {!! $page->description !!}
                  </div>
                  <div>
                    {!! $page->conclusion !!}
                  </div>
              
                </div>
              </div>
        </div>
    </div>
</div>
    
@endsection