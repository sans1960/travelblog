@extends('layouts.front')
@section('title')
    Thanks you
@endsection
@section('content')
<div class="container-fluid  d-flex flex-column justify-content-center align-items-center min-vh-100" style="background-image: url({{ asset('img/fondo.jpg')}});background-size:cover;background-position:center center;">
 >
            <h3 class="text-white">Thanks: {{$contact->trait }} {{$contact->name }} {{$contact->surname }}</h3>
            <h4 class="text-white">You will soon hear from us</h4>
      
</div>
    
@endsection