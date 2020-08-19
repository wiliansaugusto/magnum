<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gerenciamento Magnum') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link href="{{ asset('lib/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('lib/nprogress/nprogress.css') }}" rel="stylesheet">

    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}" />
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{ url('/dashboard') }}" class="site_title"><i class="fa fa-paw"></i> <span>Magnum</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>Bem vindo,</span>
                            <h2>{{ Auth::user()->nm_usuario }}</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <br/>
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{ url('/dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
                                </li>
                                <li><a href="/dashboard/palestrante"><i class="fa fa-users"></i> Palestrantes </a>
                                </li>
                                <li><a href="/dashboard/proposta"><i class="fa fa-file-text"></i> Proposta </a>
                                </li>
                                <li><a href="/dashboard/palestrantepdf"><i class="fa fa-file-pdf-o"></i> Gerar Pdf </a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Recursos</h3>
                            <ul class="nav side-menu">
                                <li><a href="/dashboard/categoria"><i class="fa fa-list"></i> Categoria </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-footer hidden-small">
                        <a href="{{url("/dashboard/config")}}" data-toggle="tooltip" data-placement="top" title="Configurações">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                   id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->nm_usuario }}
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pull-right"></i>{{ __(' Sair') }}
                                    </a>
                                    <form action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="right_col" role="main">
                @yield('content')
            </div>
            <footer>
                <div class="pull-right">
                    Gerenciamento Magnum
                </div>
                <div class="clearfix"></div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="c024bab70492f018f6371c66-text/javascript"></script>
    <script src="{{ asset('lib/fastclick/lib/fastclick.js') }}" type="c024bab70492f018f6371c66-text/javascript"></script>
    <script src="{{ asset('js/js.js') }}" type="c024bab70492f018f6371c66-text/javascript"></script>
    <script src="{{ asset('js/html-table-search.js') }}" type="c024bab70492f018f6371c66-text/javascript"></script>
    <script src="{{ asset('build/js/custom.min.js') }}" type="c024bab70492f018f6371c66-text/javascript"></script>
    <script src="{{ asset('build/js/rocket-loader.min.js') }}" data-cf-settings="c024bab70492f018f6371c66-|49" defer=""></script>
    <script type="text/javascript" src="{{ asset('js/module.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/hotkeys.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/simditor.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
</body>
</html>
