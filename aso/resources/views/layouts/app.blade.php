<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
<style>
    body {
        background: #1e2746 !important;
        color: #f1f1f1 !important;
    }
    .navbar {
        background: #232e4a !important;
        color: #f1f1f1 !important;
        border-bottom: 2px solid #2e3a5c;
    }
    .navbar-brand {
        color: #ffd700 !important;
        font-weight: bold;
    }
    .navbar-nav .nav-link {
        color: #b0c4f7 !important;
        transition: color 0.2s;
    }
    .navbar-nav .nav-link.active, .navbar-nav .nav-link:focus, .navbar-nav .nav-link:hover {
        color: #ffd700 !important;
    }
    .dropdown-menu {
        background: #232e4a !important;
        color: #f1f1f1 !important;
        border: 1px solid #2e3a5c;
    }
    .dropdown-item {
        color: #b0c4f7 !important;
    }
    .dropdown-item:hover, .dropdown-item:focus {
        background: #1e2746 !important;
        color: #ffd700 !important;
    }
    .bg-white, .shadow-sm, .container {
        background: #232e4a !important;
        color: #f1f1f1 !important;
        border-radius: 8px;
    }
    .card {
        background: #27325a !important;
        color: #f1f1f1 !important;
        border: 1px solid #2e3a5c !important;
        box-shadow: 0 2px 8px #1e2746;
    }
    .alert-success {
        background: #2e4d2f !important;
        color: #d4ffb2 !important;
        border-color: #3a6b3c !important;
    }
    .alert-danger, .alert-error {
        background: #4d2e2e !important;
        color: #ffb2b2 !important;
        border-color: #6b3a3a !important;
    }
    .form-control, .form-group {
        background: #232e4a !important;
        color: #f1f1f1 !important;
        border: 1px solid #2e3a5c !important;
    }
    .form-control:focus {
        background: #27325a !important;
        color: #ffd700 !important;
        border-color: #ffd700 !important;
    }
    .btn-primary {
        background: #ffd700 !important;
        color: #1e2746 !important;
        border: none;
        font-weight: bold;
    }
    .btn-primary:hover {
        background: #ffe066 !important;
        color: #1e2746 !important;
    }
    .btn-secondary {
        background: #b0c4f7 !important;
        color: #1e2746 !important;
        border: none;
    }
    .btn-secondary:hover {
        background: #7a90c2 !important;
        color: #fff !important;
    }
    .btn-danger {
        background: #ff4d4d !important;
        color: #fff !important;
        border: none;
    }
    .btn-danger:hover {
        background: #c0392b !important;
        color: #fff !important;
    }
    .py-4 {
        background: #222b44 !important;
        border-radius: 8px;
        padding: 2rem !important;
    }
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
