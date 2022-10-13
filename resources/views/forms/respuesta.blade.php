@extends('layouts.front')
@section('title')
    Thanks yoy
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto vh-100">
          {{$contact->name}}
        </div>
    </div>
</div>
    
@endsection