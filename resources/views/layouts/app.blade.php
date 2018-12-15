<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('assets/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a href="{{ route('home') }}" class="navbar-brand">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        {{--<li class="nav-item active">
                            <a href="#" class="nav-link">Home</a>
                        </li>--}}
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                                Database
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Commanders</a>
                                <a href="#" class="dropdown-item">Factions</a>
                                <a href="#" class="dropdown-item">Leagues</a>
                                <a href="#" class="dropdown-item">Maps</a>
                                <a href="#" class="dropdown-item">Units</a>
                                {{--<div class="dropdown-divider"></div>--}}
                                {{--<a href="#" class="dropdown-item">foo</a>--}}
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Decks</a>
                        </li>
                    </ul>

                    <!-- Navbar Center -->
                    <form action="" class="form-inline mt-2 mt-md-0">
                        <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
                        {{--<button class="btn btn-primary my-2 my-sm-0" type="submit">
                            Search
                        </button>--}}
                    </form>

                    <!-- Right Side Of Navbar -->
                    <div class="navbar-nav ml-auto">
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
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-4" role="main">
            @yield('content')
        </main>
    </div>
</body>
</html>
