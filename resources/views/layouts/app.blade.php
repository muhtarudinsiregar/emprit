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
</head>

<body class="antialiased font-sans">
    <div id="app">
        <nav class="bg-transparent py-4 px-4 lg:px-16 xl:py-8 fixed top-0 z-50 w-full md:px-8 xl:px-24 xxl:px-40"
            id="nav">
            <div class="flex items-center justify-between flex-wrap relative">
                <div class="w-1/2 md:w-1/4">
                    <h3 class="font-bold text-white text-2xl">EmpritApp</h3>
                </div>
                <div class="w-1/2 text-right sm:hidden"></div>
                <div class="w-full navigation-menu hidden md:flex md:w-3/4 relative">
                    <div
                        class="flex flex-col md:flex-row pt-8 pb-2 md:pt-0 md:pb-0 md:ml-auto md:items-center relative">
                        <a class="font-bold text-white ml-4 mr-4 hover:underline" href="">Twitter</a>
                        <a class="font-bold text-white ml-4 mr-4 hover:underline" href="">Github</a>
                        <a class="font-bold text-white ml-4 mr-4 hover:underline" href="#about">About</a>
                        <a class="font-bold text-white ml-4 mr-4 hover:underline" href="">Patreon</a>
                        <a class="font-bold text-white ml-4 mr-4 hover:underline">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded uppercase">sign
                                in</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
</body>

</html>
