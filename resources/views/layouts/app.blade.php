<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/bootstrap3-typeahead.js') }}"></script>
    <script src="{{ asset('js/bootstrap3-typeahead.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bs-animation.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!--<script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

-->

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.js"></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('fonts/fontawesome-all.min.css') }}" rel="stylesheet">
    <!--<link rel="stylesheet" href="{{url('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('css/aos.css')}}">
    <link rel="stylesheet" href="{{url('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('fonts/icomoon/style.css')}}">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.css"/>


</head>
<style>
    section {
        padding-top: 4rem;
        padding-bottom: 5rem;
        background-color: #f1f4fa;
    }
    .wrap {
        display: flex;
        background: white;
        padding: 1rem 1rem 1rem 1rem;
        border-radius: 0.5rem;
        box-shadow: 7px 7px 30px -5px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
        position: relative;
    }

    .wrap a{
        position: absolute;
        width:100%;
        height:100%;
        top:0px;
        left:0px;
    }

    .wrap:hover {
        background: linear-gradient(135deg,#6394ff 0%,#0a193b 100%);
        color: white;
    }

    .ico-wrap {
        margin: auto;
    }

    .mbr-iconfont {
        font-size: 4.5rem !important;
        color: #313131;
        margin: 1rem;
        padding-right: 1rem;
    }
    .vcenter {
        margin: auto;
    }

    .mbr-section-title3 {
        text-align: left;
    }
    h2 {
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .display-5 {
        font-family: 'Source Sans Pro',sans-serif;
        font-size: 1.4rem;
    }
    .mbr-bold {
        font-weight: 700;
    }

    p {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        line-height: 25px;
    }
    .display-6 {
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 1rem;
    }
    .hr1 {
        border: none;
        height: 1px;
        /* Set the hr color */
        color: #333; /* old IE */
        background-color: #333; /* Modern Browsers */
    }
    .hr2 {
        border: none;
        height: 1px;
        /* Set the hr color */
        color: #4F81BD; /* old IE */
        background-color: #4F81BD; /* Modern Browsers */
    }
    a:hover {
        box-shadow: 5px 5px 5px rgb(238, 238, 238);
    }
    .page-footer {
        background-color: #1A78C2;
        text-decoration: none;
    }
</style>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                {{ config('app.name', 'Dictionary') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Contributors</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('glossary') }}">Glossary</a></li>
                    <li class="nav-item dropdown" role="presentation">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" data-target="#navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            About
                        </a>
                        <div id="navbarDropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('message') }}">Message</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('foreword') }}">Foreword</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('preface') }}">Preface</a>
                        </div>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} <i class="far fa-user"></i></a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <!-- Hide Register Link
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                -->
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

    <main class="py-4">

        @yield('content')

    </main>
</div>
<!-- Footer -->
<footer class="page-footer font-small">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="/" style="text-decoration: none;"><font color="#f0f8ff"> www.kadazandusunchair.com</font></a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
