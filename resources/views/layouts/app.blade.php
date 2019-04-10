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
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
 
    <script src="{{ asset('js/customscript.js') }}" defer></script>
    
    
     <script>
       

    </script>
    

    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  


    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
</head>
<body style="background-color:#deecf9 ">
    <div id="app">
        <nav style="background-color:#1c1513;"class="navbar navbar-expand-md navbar-dark bg navbar-laravel ">
            <div class="container-fluid">
                
                <a class="navbar-brand" style="padding-left:20px;" href="{{ url('/') }}"><i class="fa fa-home" style=" ;position:; color:white"></i>
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a  class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                            </li>
                    <li class="nav-item">
                            <a class="nav-link " href="{{ url('/rentals') }}">{{ __('Rent') }}</a>
                            </li>
                    <li class="nav-item">
                            <a class="nav-link " href="{{ url('/homestays') }}">{{ __('Homestay') }}</a>
                            </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('property.create') }}">{{ __('Post Ad') }}</a>
                            </li>
                     <li class="nav-item">
                            <a class="nav-link" href="">{{ __('About Us') }}</a>
                            </li>
                     <li class="nav-item">
                            <a class="nav-link" href="">{{ __('FAQ') }}</a>
                            </li>
                   
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
                                    
                                   @if(auth()->user()->isowner == 1)
                                     <i class="fa fa-building" style="padding:8px ;position:absolute;"></i>

                                    <a href="/property" class="dropdown-item ">{{ __('My Properties') }}</a> @endif
                                    <i class="fa fa-user" style="padding:8px ;position:absolute;"></i>
                                    <a href="/profile/{{auth()->user()->id}}" class="dropdown-item ">  {{ __('Profile') }}</a>
                                    
                                    <i class="fa fa-shopping-cart" style="padding:7px ;position:absolute;"></i>

                                    <a href="/booking" class="dropdown-item">{{ __('Bookings') }}</a>
                                    

                                    <i class="fa fa-comments" style="padding:7px; position:absolute;"></i>
                                    <a href="" class="dropdown-item">{{ __('Feedback') }}</a>
                                    
                                    <i class="fa fa-bed" style="padding:7px ;position:absolute;"></i>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

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

         
@if($flash = session('message'))
<div id="alerts" class="alert alert-success" >
{{ $flash }} 
</div>



@elseif($flash = session('abort'))
<div id="alerts" class="alert alert-danger" >
{{ $flash }} 
</div>

@endif
    <main style="background-color: ;">
    @yield('content')
    </main>

</div>
</body>
</html>
