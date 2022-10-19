<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
   <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
   

   @yield('estilo')
</head>
<body>
    <div class="bg-dark d-flex justify-content-center p-2">
        <img src="{{ asset('img/ll.png')}}" alt="">
    </div>
    @include('layouts.navbar',['destinations'=>$destinations=App\Models\Destination::all()])
  @yield('content')
<footer class="bg-dark">
    <div class="container p-2">
        <div class="row">
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                <a class="text-white nav-link">Copyright © 2021 Sojournplanet</a>
            </div>
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                  
                    <a class="text-white nav-link">All rights reserved</a>
                </div>
         
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                <a href="https://sojournplanet.com/images-copyright" class="nav-link text-white" target="_blank">Images Copyright</a>
            </div>
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                <a target="_blank" href="https://www.facebook.com/sojournplanet" class="text-white">
                    <i class="bi bi-facebook"></i>
      
                  </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <a href="https://sojournplanet.com/faqs" target="_blank" class="text-white nav-link">FAQs</a>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                  
                    <a href="https://sojournplanet.com/terms-and-conditions" target="_blank" class="text-white nav-link">Terms and Conditions</a>
                </div>
         
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <a href="https://sojournplanet.com/privacy-policy" target="_blank" class="nav-link text-white" target="_blank">Privacy Policy</a>
            </div>
            
        </div>
      

    </div>

</footer>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  
    @yield('js')
</body>
</html>
