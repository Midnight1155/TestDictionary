<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dictionary</title>

    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('fonts/fontawesome-all.min.css') }}" rel="stylesheet">

</head>
<style>

</style>
<body>
<nav class="navbar navbar-light navbar-expand-md bg-light">
    <div class="container-fluid"><a class="navbar-brand text-primary" href="#">Dictionary</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#">First Item</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Glossary</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">About</a></li>
            </ul>
            <button class="btn btn-dark ml-auto" type="submit"><i class="far fa-user"></i> Login</button>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')

</div>



<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
