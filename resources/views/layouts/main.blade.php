<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Modul 151 LB</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">M151LB3</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('contact') }}">Kontakt</a></li>
                    <li class="{{ Request::is('info') ? 'active' : '' }}"><a href="{{ url('info') }}">Info</a></li>
                    <!--<li class="{{ Request::is('list') ? 'active' : '' }}"><a href="{{ url('list') }}">Liste</a></li>-->
                    <li class="{{ Request::is('autos') ? 'active' : '' }}"><a href="{{ url('autos') }}">Autos</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                    <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Registrieren</a></li>
                    <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    @else
                    <li><p class="navbar-text">Angemeldet als: <b>{{ Auth::user()->name }}</b></a></p></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <span class="glyphicon glyphicon-log-out"></span>Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
                });
            });
    </script>
</body>