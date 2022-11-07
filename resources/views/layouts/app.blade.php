<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('css/leftSidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nextAndPrev.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="w-100 d-flex">
        @if (Auth::check())
            <div class="">
                @include('layouts.left_sidebar')
            </div>
        @endif
        <div class=" w-100">
            <div id="app">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <div>
                            <a href="/">
                                <img width="250px" src="{{ asset('images/png version.png') }}" alt=""
                                    srcset="">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto ms-4" style="font-size: 20px">
                                <li class="nav-item">
                                    <a style="" target="blank" class="nav-link"
                                        href="">{{ __('Home') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a style="" target="blank" class="nav-link"
                                        href="">{{ __('About') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a style="" target="blank" class="nav-link"
                                        href="">{{ __('Rates') }}</a>
                                </li>

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto " style="font-size: 20px">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a style="color: var(--primary-text-color);" class="nav-link"
                                                href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a style="color: var(--primary-text-color);" class="nav-link"
                                                href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    @php
                                        $myArray = explode('@', Auth::user()->email);
                                    @endphp
                                    <li class="nav-item dropdown">
                                        <a style="color: var(--primary-text-color);" id="navbarDropdown"
                                            class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ $myArray[0] }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>

                <main class="mt-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"
        integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/jquerry.js') }}"></script>
    <script src="{{ asset('js/bootstrap5.js') }}"></script>
    <script src="{{ asset('js/nextAndPrev.js') }}"></script>

</body>

</html>
