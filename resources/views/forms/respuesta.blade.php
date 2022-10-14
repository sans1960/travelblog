@extends('layouts.front')
@section('title')
    Thanks you
@endsection
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-8 mx-auto mt-5 vh-100 d-flex justify-content-center align-item-center">
          <div class="mt-5 p-4">
            <h3>Thanks: {{$contact->trait }} {{$contact->name }} {{$contact->surname }}</h3>
            <h4>You will soon hear from us</h4>
          </div>
        </div>
    </div>
</div>
    
@endsection