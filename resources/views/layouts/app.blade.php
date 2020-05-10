<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jake Richardson</title>
    <!-- favicon --> 
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <!-- font awesome --> 
    <script src="https://kit.fontawesome.com/bf91e43d08.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Oswald:wght@300;400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app" class="container">
        <nav class="navigation navbar navbar-light bg-white">
            <a class="navbar-brand" href="{{ url('/') }}">
                JAKE <span class="brand_style">.</span>
            </a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">ABOUT</a>
                        <a class="nav-link" href="#resume">RESUME</a>
                        <a class="nav-link" href="#portfolio">PORTFOLIO</a>
                        <a class="nav-link" href="#contact_section"><i class="far fa-envelope"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
