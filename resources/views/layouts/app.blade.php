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
        li.active {
        font-weight: 900;
    }
    </style>
    
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <style>
        h1, h2, h3, h4, h5, h6, nav, .nav, .menu, button, .button, .btn, .price, ._heading, .wp-block-pullquote blockquote, blockquote, label, legend, a, .card-header, th {
            font-family: "Prompt", "Open Sans script=all rev=1" !important;
            font-weight: 700 !important;
            
        }
    </style>
    

    @yield('head')
</head>
<body>
    <div id="">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo-team.png') }}" height=50>
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                      

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
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}/energy-report">Energy</a></li>                            
                            <li class="nav-item "><a class="nav-link" href="{{ url('/') }}/boi-report">BOI</a></li>
                            <li class="nav-item "><a class="nav-link" href="#">Environment</a></li>
                            <li class="nav-item "><a class="nav-link" href="#">Factory</a></li>
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
        <div class="container pt-4">
            <div class="row">
                <div class="col-lg-9 t">
                    <h2>@yield("header")</h2>
                </div>
                <div class="col-lg-3 text-right">
                @if(isset($energyreport))
                    <button class="btn btn-sm btn-outline-primary" onclick="previous_page()">ก่อนหน้า</button>
                    <span id="nubmer_of_progress"></span>
                    <button class="btn btn-sm btn-primary"  onclick="next_page()">ถัดไป</button>
                @endif
                </div>
            </div>
            
        </div>
        
        

        <div class="py-4">
            @yield('content')
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 t">
                   
                </div>
                <div class="col-lg-3 text-right">
                @if(isset($energyreport))
                    <button class="btn btn-sm btn-outline-primary" onclick="previous_page()">ก่อนหน้า</button>
                    <span id="nubmer_of_progress"></span>
                    <button class="btn btn-sm btn-primary"  onclick="next_page()">ถัดไป</button>
                @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        //DEFINED ACTIVE LINK
        var url = window.location.href;
        console.log("URL : ", url);
        var object = document.querySelector('a[href="'+url+'"]');
        console.log("Object : " , object);
        if(object){
            object.parentNode.classList.add('active');
        }
        //$('.menu a[href="'+url+'"]').addClass('current_page_item');
        //POSITIONING ACTIVE LINK
        var objects = document.querySelectorAll('li[role="presentation"]');
        console.log(objects.length);
        let i = 0;
        for(let i=0; i<objects.length; i++)
        {
            if (objects[i].classList.contains("active")) {
                var target = document.querySelector('#nubmer_of_progress');
                target.innerHTML = ""+(i+1)+"/"+objects.length;
            } 

        }

        function previous_page(){
            //get and up
            var object = document.querySelector('a[href="'+url+'"]').parentNode;
            var prev_object = object.previousElementSibling;
            //console.log(object);
            if (prev_object.tagName == "LI") {
                prev_object.querySelectorAll("a")[0].click();
            }else{
                prev_object.previousElementSibling.querySelectorAll("a")[0].click();
            }
            
        }
        function next_page(){
            var object = document.querySelector('a[href="'+url+'"]').parentNode;
            console.log(object);
            var next_object = object.nextElementSibling;
            console.log(next_object,next_object.tagName);
            if (next_object.tagName == "LI") {
                next_object.querySelectorAll("a")[0].click();
            }else{
                
                console.log(next_object.nextElementSibling,next_object.nextElementSibling.tagName);
                console.log(next_object.nextElementSibling.firstChild);
                next_object.nextElementSibling.querySelectorAll("a")[0].click();
            }
            
            //console.log(object);
            
        }
    </script>
</body>
</html>
