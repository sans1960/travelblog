@extends('layouts.front')
@section('title')
   {{$page->name}} 
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-center align-items-center" style="background-image: url({{asset('storage/page/'.$page->image)}});background-size:cover;height:200px;">
                      <h1 class="text-white">{{ $page->name}}</h1>
                    </div>
                    <div class="card-body">
                     <div class="d-flex justify-content-between border-bottom border-dark p-2">
                       <p>{{$page->date}}</p>
                       <p>{{$page->tag->name}}</p>
                     </div>
                     <div class="p-5" style="text-align: justify;">
                        {!!$page->description !!}
                     </div>
                    </div>
                  </div>

            </div>
        </div>
        
            @foreach ($page->article as $item)
            <div class="row mt-4">
                <div class="col-md-6 mx-auto">
                    <h4 class="text-center">{{$item->order}}.{{$item->name}}</h3>
                        <figure class="figure mt-2">
                            <img src="{{asset('storage/articles/'.$item->image)}}" class="figure-img img-fluid rounded" alt="...">
                            <figcaption class="figure-caption text-center">{{ $item->caption}}</figcaption>
                          </figure>
                    <div  class="p-5 border-bottom border-dark" style="text-align: justify;"> 
                        {!! $item->body !!}
                    </div>

                </div>
            </div>  
            @endforeach

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="p-5" style="text-align: justify;">
                    {!!$page->conclusion !!}
                 </div>
            </div>
        </div>
        <div class="row d-flex  p-4 ">
            <h2>Share this Page with:

            </h2>
               <div class="col-md-2 mx-auto ">
                <a href="{{ route('contactpage',$page)}}" class="btn btn-dark d-block p-2 mx-auto">Let's Go</a>
               </div>
               
        </div>
    </div>

@endsection