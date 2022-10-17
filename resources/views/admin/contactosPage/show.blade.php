@extends('layouts.admin')
@section('title')
@foreach ($contact as $item)
{{ $item->name }} {{ $item->surname }}
@endforeach

@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
            @foreach($contact as $item)
            <div class="card">
                <div class="card-header">
                  {{$item->trait}} {{$item->name}} {{$item->surname}}
                </div>
                <div class="card-body">
                   <div class="row">
                    <div class="col">
                        {{$item->email}}
                    </div>
                    <div class="col">
                        {{$item->phone}}
                    </div>
                    <div class="col">
                        {{$item->created_at}}
                    </div>
                   </div>
                   <div class="row">
                    <div class="col">
                        {{$item->city}}
                    </div>
                    <div class="col">
                        {{$item->state}}
                    </div>
                    <div class="col">
                        {{$item->zipcode}}
                    </div>
                   </div>
                
               
                   <div class="row">
                    <div class="col">
                        {{$item->tag}}
                    </div>
                 
                   </div>
                   <div>
                    {{$item->message}}
                   </div>
                   <div>
                    {{$item->page}}
                   </div>
                  
                </div>
              </div>
            @endforeach
         
        </div>
      
    </div>

    
</div> 

@endsection