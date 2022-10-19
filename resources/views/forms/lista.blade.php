@extends('layouts.front')
@section('title')
    Thanks you
@endsection
@section('content')
<div class="container-fluid  d-flex flex-column justify-content-center align-items-center min-vh-100 text-white" style="background-image: url({{ asset('img/fondo.jpg')}});background-size:cover;background-position:center center;">
    
        >
            <h3>Thanks: </h3>
            <h3> Your email : {{$contact->email}} is in our list</h3>
            <h4>You will soon hear from us</h4>
     
</div>
    
@endsection