<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        nav a {
            display: flex;
            height: 100%;
            align-items: center;
            padding: 0 15px;
        }

        nav a:hover {
            color: white;
        }

        nav li>ul {
            background: #2d3748;
            height: 0;
            position: absolute;
            overflow: hidden;
        }

        nav li>ul a {
            line-height: 40px;
        }

        nav li:hover>ul {
            height: auto;
        }
    </style>
</head>

<body class="h-full bg-gray-300">
    <div id="app">
        <nav class="flex items-center justify-between bg-gray-800 text-gray-500 px-4 h-12">
            <div class="flex items-center h-full">
                <div>{{ config('app.name', 'Laravel') }} 😎</div>
                <ul class="ml-4 flex items-stretch h-full">
                    <li>
                        <a href="http://" class="block h-full flex items-center px-4">Register</a>
                        <ul class="absolute bg-gray-800">
                            <li><a href="http://" class="py-2 px-4">Lorem</a></li>
                            <li><a href="http://" class="py-2 px-4">Lorem</a></li>
                            <li><a href="http://" class="py-2 px-4">Lorem</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="flex items-center">
                <!-- Authentication Links -->
                @guest
                <div>
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </div>
                @if (Route::has('register'))
                <div class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
                @endif
                @else
                <div>
                    {{ Auth::user()->name }}
                </div>
                <ul class="flex items-stretch h-full mr-4">
                    <li>
                        <img src="https://i.pravatar.cc/300" alt="" srcset=""
                            class="h-8 w-8 rounded-full border-2 ml-8">
                        <ul class="absolute bg-gray-800">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endguest
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
