<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bs-animation.js') }}"></script>
    <script src="{{ asset('js/-Filterable-Cards-.js') }}"></script>
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
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap3-typeahead.js') }}"></script>
    <script src="{{ asset('js/bootstrap3-typeahead.min.js') }}"></script>
-->

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.js"></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/-Filterable-Cards-.css') }}" rel="stylesheet">
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
    .hr1 {
        border: none;
        height: 1px;
        /* Set the hr color */
        color: #999999; /* old IE */
        background-color: #999999; /* Modern Browsers */
    }
</style>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container">
                <a class="navbar-brand" href="{{ route('landing') }}"><b>Kadazandusun</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">History</a>
                                <a class="dropdown-item" href="#">Introduction</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact Us</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a class="btn btn-outline-primary my-2 my-sm-0" href="{{ route('home') }}" role="button"><h4>K-Dictionary</h4><i class="fas fa-hand-pointer"></i></a>
                    </form>
                </div>
        </div>
    </nav>

    <main class="py-4">

        @yield('content')

    </main>
</div>
<!-- Footer -->
<footer class="page-footer font-small bg-primary">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="/" style="text-decoration:none"><font color="#f0f8ff"> www.kadazandusunchair.com</font></a>
    </div>
    <!-- Copyright -->

</footer>
</body>
</html>
