@extends('layouts.admin')
@section('title')
   Article / Show
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto mt-5">
            <div class="card mb-3">
                <img src="{{ asset('storage/articles/'.$article->image)}}" class="card-img-top" alt="{{ $article->caption}}">
                <div class="card-body">
                  <h3 class="card-title">{{ $article->name}}</h3>
                  <h4 class="card-title">{{ $article->page->name}}</h4>
                  <h5 class="card-title">{{ $article->order}}</h5>
                  <div>
                    {!! $article->body !!}
                  </div>
                
              
                </div>
              </div>
        </div>
    </div>
</div>
    
@endsection