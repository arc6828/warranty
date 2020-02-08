<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    <script src="https://kit.fontawesome.com/d59a8a2721.js"></script>

    
    <style>
        a.active {
        font-weight: 900;
    }
    </style>
    
    

    @yield('head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                      <li class="mx-4"><a href="{{ url('/') }}/energy-report">Energy</a></li>
                      <li class="mx-4"><a href="#">Environment</a></li>
                      <li class="mx-4"><a href="#">Factory</a></li>
                      <li class="mx-4"><a href="#">BOI</a></li>

                      <li class="mx-4 d-none"><a href="{{ url('/') }}/branch">Branch</a></li>
                      <li class="mx-4 d-none"><a href="{{ url('/') }}/building">Building</a></li>
                      <li class="mx-4 d-none"><a href="{{ url('/') }}/hardware">Hardware</a></li>
                      <li class="mx-4 d-none"><a href="{{ url('/') }}/energy-usage">Energy usage</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container pt-4 text-right">
            <button class="btn btn-sm btn-outline-primary" onclick="previous_page()">ก่อนหน้า</button>
            <button class="btn btn-sm btn-primary"  onclick="next_page()">ถัดไป</button>
        </div>

        <div class="py-4">
            @yield('content')
        </div>
    </div>
    <script>
        var url = window.location.href;
        console.log("URL : ", url);
        var object = document.querySelector('a[href="'+url+'"]');
        console.log(object);
        if(object){
            object.classList.add('active');
        }
        //$('.menu a[href="'+url+'"]').addClass('current_page_item');
        function previous_page(){
            //get and up
            var object = document.querySelector('a[href="'+url+'"]').parentNode;
            var prev_object = object.previousElementSibling;
            //console.log(object);
            if (prev_object.tagName == "LI") {
                prev_object.firstChild.click();
            }else{
                prev_object.previousElementSibling.firstChild.click();
            }
            
        }
        function next_page(){
            var object = document.querySelector('a[href="'+url+'"]').parentNode;
            console.log(object);
            var next_object = object.nextElementSibling;
            console.log(next_object,next_object.tagName);
            if (next_object.tagName == "LI") {
                next_object.firstChild.click();
            }else{
                next_object.nextElementSibling.firstChild.click();
            }
            
            //console.log(object);
            
        }
    </script>
</body>
</html>
