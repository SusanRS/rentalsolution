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
    <script>
        
function show()
{   
  var v = document.getElementById('property').value;
  //var divr = document.getElementById('rdiv');
  //var divh = document.getElementById('hdiv');
   if(v== 'Rental'){
      //divh.style.display = "none";
     document.getElementById('hdiv').style.display = "none";
    document.getElementById('rdiv').style.display = 'block';
  

}
    else if (v== 'Homestay'){
     //divr.style.display = "none";
    document.getElementById('rdiv').style.display = "none";
    document.getElementById('hdiv').style.display = 'block';


}}


    </script>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel ">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
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
                            <a class="nav-link " href="{{ url('/') }}">{{ __('Rent') }}</a>
                            </li>
                    <li class="nav-item">
                            <a class="nav-link " href="{{ url('/') }}">{{ __('Homestay') }}</a>
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
                                   {{-- list 1 properties --}}
                                    <a href="/property" class="dropdown-item fa fa-btn fa-user">{{ __('My Properties') }}</a> @endif
                                    
                                    
                                    {{-- list 1 properties --}}
                                    
                                    {{-- <a href="/property/{{ $p->id}}/edit" class="btn btn-primary">Edit</a>  --}}

                                    {{-- <a href="{{url('/profile')}}" class="dropdown-item">{{ __('Profile') }}</a> --}}
                                    
                                    <a href="/profile/{{auth()->user()->id}}" class="dropdown-item">{{ __('Profile') }}</a>
                                    {{-- list 2 bookigs --}}
                                   
                                    <a href="" class="dropdown-item">{{ __('Bookings') }}</a>
                                    {{-- list 3 feedback --}}

                                    <a href="" class="dropdown-item">{{ __('Feedback') }}</a>
                                    {{-- list 4 logout --}}

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

         
@if($flash = session('message'))
<div class="alert alert-success" role  ="alert">

    {{ $flash }}
    
</div>

@endif
         <main>
            @yield('content')
        </main>

    </div>
</body>
</html>
