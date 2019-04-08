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
    
     <script>
        setTimeout(function()
        {
            $('#alerts').fadeOut('slow');
        }, 3000);

        function show()
        {   
          var v = document.getElementById('change_property').value;
          //var divr = document.getElementById('rdiv');
          //var divh = document.getElementById('hdiv');
           if(v== 'Rental'){
              //divh.style.display = "none";
            document.getElementById('div_homestay').style.display = "none";
            document.getElementById('div_rental').style.display = 'block';
            }
            else if (v== 'Homestay'){
             //divr.style.display = "none";
            document.getElementById('div_rental').style.display = "none";
            document.getElementById('div_homestay').style.display = 'block';
            }
            else
            {
                document.getElementById('div_homestay').style.display = 'none'
                document.getElementById('div_rental').style.display = 'none'
            }
        }

     

    </script>
    

    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  


    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
</head>
<body style="background-color:#e8ecf2 ">
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark ">
            <div class="container-fluid">
                
                <a class="navbar-brand" style="padding-left:20px;" href=""><i class="fa fa-home" style=" ;position:; color:white"></i>
                   Dashboard
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                     <li class="nav-item">
                            <a class="nav-link" href="">{{ __('About Us') }}</a>
                            </li>
                     <li class="nav-item">
                            <a class="nav-link" href="">{{ __('FAQ') }}</a>
                            </li><li class="nav-item">
                            <a class="nav-link" href="">{{ __('About Us') }}</a>
                            </li>
                     <li class="nav-item">
                            <a class="nav-link" href="">{{ __('FAQ') }}</a>
                            </li><li class="nav-item">
                            <a class="nav-link" href="">{{ __('About Us') }}</a>
                            </li>
                     <li class="nav-item">
                            <a class="nav-link" href="">{{ __('FAQ') }}</a>
                            </li><li class="nav-item">
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
                            
                           
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
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
<div id="alerts" style="display:hidden" class="alert alert-success" >
{{ $flash }} 
</div>

@elseif($flash = session('abort'))
<div id="alerts" style="display:hidden" class="alert alert-danger" >
{{ $flash }} 
</div>

@endif
    <main style="background-color: ;">
    @yield('content')
    </main>

</div>
</body>
</html>
