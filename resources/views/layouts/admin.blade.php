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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{ __('Home') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                     
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin')}}">
                                <i class="bi bi-house-door-fill"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Geography
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="nav-link" href="{{ route('admin.destinations.index')}}">
                                {{ __('Destinations') }}
                            </a>
                          </li>
                              <li> <a class="nav-link" href="{{ route('admin.imagedestinations.index')}}">
                                {{ __('Images Destinations') }}
                            </a></li>
                              
                              <li>
                                <a class="nav-link" href="{{ route('admin.subregions.index')}}">
                                    {{ __('Subregions') }}
                                </a>
                              </li>
                              <li>
                                <a class="nav-link" href="{{ route('admin.countries.index')}}">
                                    {{ __('Countries') }}
                                </a>
                              </li>
                            </ul>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.categories.index')}}">
                                    {{ __('Categories') }}
                                </a>
                              </li>
                         
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Blog
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="nav-link" href="{{ route('admin.tags.index')}}">
                                    {{ __('Tags') }}
                                </a>
                              </li>
                                  <li> <a class="nav-link" href="{{ route('admin.pages.index')}}">
                                    {{ __('Pages') }}
                                </a></li>
                                  
                                  <li>
                                    <a class="nav-link" href="{{ route('admin.articles.index')}}">
                                      {{ __('Articles') }}
                                    </a>
                                  </li>
                                  <li>
                                    <a class="nav-link" href="">
                                        
                                    </a>
                                  </li>
                                </ul>
                            </li
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('admin.sights.index')}}">
                                  {{ __('Sights') }}
                              </a>
                            </li>
                    </ul>

                    
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    @yield('js')
</body>
</html>
