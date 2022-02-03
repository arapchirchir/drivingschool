<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- title --}}
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- font-family: 'Lato', sans-serif;
        font-family: 'Nunito', sans-serif;
        font-family: 'Open Sans', sans-serif;
        font-family: 'STIX Two Text', serif; --}}

    {{-- custom CSS for text over images --}}
    <style>
        /* Container holding the image and the text */
        .holder {
            position: relative;
        }

        /* Bottom left text */
        .bottom-left {
            position: absolute;
            bottom: 8px;
            left: 16px;
        }

    </style>
</head>

<body>
    <div id="app">
        <div class="bg-dark" id="top-of-nav">
            <div class="container py-2">
                <div id="hidden">
                    <div class="text-center">
                        <div><a href="#" class="text-white"><i class="fa fa-phone fa-lg"> <span>Tel: +254 722
                                        819933</span></i></a></div>
                        <div class="ml-3"><a href="#" class="text-white"><i class="fa fa-clock-o fa-lg"> <span>Monday –
                                        Saturday 7:00am – 18:00pm</span></i></a></div>
                    </div>
                </div>
                {{-- <div id="show" class="" style="display: none">
                    <div class="col-9">
                        <div class="row d-flex">
                            <div><a href="#" class="text-white"><i class="fa fa-phone fa-lg"> <span>Tel: +254 722
                                            819933</span></i></a></div>
                            <div class="ml-3"><a href="#" class="text-white"><i class="fa fa-envelope fa-lg">
                                        <span>info@drivingschool.com</span></i></a></div>
                            <div class="ml-3"><a href="#" class="text-white"><i class="fa fa-clock-o fa-lg">
                                        <span>Monday – Saturday 7 AM – 7PM</span></i></a></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="float-right mr-4">
                            <div class="row d-flex">
                                <div><a class="text-white" href="#"><i class="fa fa-facebook fa-lg"></i></a></div>
                                <div class="ml-2"><a class="text-white" href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                </div>
                                <div class="ml-2"><a class="text-white" href="#"><i
                                            class="fa fa-google-plus fa-lg"></i></a></div>
                                <div class="ml-2"><a class="text-white" href="https://wa.me/+254715738974"><i
                                            class="fa fa-whatsapp fa-lg"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <nav id="navbar" class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: #00008B !important">
            <div class="container-fluid">
                <div class="navbar-brand text-uppercase text-white h5 font-weight-bold"> Graebens </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item font-weight-bold"><a href="{{ route('Default') }}"
                                class="nav-link text-white">Home</a></li>
                        <li class="nav-item font-weight-bold"><a href="{{ route('Branches') }}"
                                class="nav-link text-white">Branches</a></li>
                        <li class="nav-item font-weight-bold"><a href="{{ route('Courses') }}"
                                class="nav-link text-white">Courses</a></li>
                        <li class="nav-item font-weight-bold"><a href="{{ route('Assessment') }}"
                                class="nav-link text-white">Driver Assessment</a></li>
                        <li class="nav-item font-weight-bold"><a href="{{ route('Contact') }}"
                                class="nav-link text-white">Contact</a></li>
                        <li class="nav-item font-weight-bold"><a href="{{ route('OnlineRegistration') }}"
                                class="nav-link text-white">Online Registration</a></li>
                        <li class="nav-item font-weight-bold"><a href="{{ route('login') }}" class="nav-link text-white">|
                                Admin</a></li>
                        <!-- Authentication Links -->
                        {{-- @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}"> <i class="fa fa-user"></i>  {{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest --}}
                    </ul>
                </div>
            </div>
        </nav>

        @if ($message = Session::get('success'))
            <div class="container" style="position: absolute; top:70px; left:20px;">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ $message }}</strong>
                </div>

                {{-- requires util.js --}}
                {{-- <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="..." class="rounded mr-2" alt="...">
                        <strong class="mr-auto">Bootstrap</strong>
                        <small>11 mins ago</small>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        {{ $message }}
                    </div>
                </div> --}}
            </div>
        @endif

        <main class="py-4" id="body">
            @yield('content')
        </main>

        <footer style="background-color: #00008B; font-family: 'Open Sans', sans-serif;">
            <div class="container-fluid text-white pt-4">
                <div class="row d-flex">
                    <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="h4 font-weight-bold">GET OUR NEWSLETTER</div>
                        <p class="h5">
                            Subscribe to our newsletter and stay updated on the latest developments and special offers!
                        </p>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="enter your email...">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-primary text-white" type="submit"
                                        id="newslatter" onclick="clickFunction()">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="row d-flex">
                            <div class="col-4 col-md-6">
                                <img src="{{ asset('assets/logo.png') }}" alt="" class="img-fluid"
                                    style="height: 70px;">
                            </div>
                            <div class="col-8 col-md-6">
                                <div class="h4 font-weight-bold text-uppercase"> connect with us </div>
                                <div class="d-inline-flex">
                                    <div> <a href="https://www.facebook.com/Graebens/" target="blank"> <i class="fa fa-facebook fa-lg p-2"></i> </a> </div>
                                    <div class="ml-2"><i class="fa fa-twitter fa-lg p-2"></i></div>
                                    <div class="ml-2"><i class="fa fa-instagram fa-lg p-2"></i></div>
                                    <div class="ml-2"><i class="fa fa-youtube fa-lg p-2"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <button class="btn btn-danger btn-sm" type="button" id="scrollToTop" style="position: fixed; z-indez: 99; bottom: 20px; right: 30px; display: none"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></button>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function clickFunction() {
            document.getElementById('newslatter').innerHTML = 'Submitting....';
        }
    </script>
</body>

</html>
