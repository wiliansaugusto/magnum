<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gerenciamento Magnum') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">


    <!-- Configurações do FontAwesome -->
    <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet"> <!--load all styles -->
    <script defer src="{{ asset('fontawesome/js/all.js')}}"></script> <!--load all styles -->




</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel sticky-top flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 text-uppercase" href="{{ url('/dashboard') }}">
        <h3>Magnum</h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column mt-3">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            <i class="fas fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/palestrante">
                            <i class="far fa-grin-beam"></i> Palestrantes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/categoria">
                            <i class="fas fa-stream"></i> Categorias
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @yield('content')
        </main>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/core.js') }}"></script>
</body>
</html>
