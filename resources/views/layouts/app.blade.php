<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lighter h-screen font-sans">
<div id="app">
    <div class="min-h-screen">

        <div class="flex flex-col w-full fixed pin-l pin-y">

            <header class="absolute pin-t pin-l w-full py-4">
                <div class="flex items-center justify-between px-8">
                <span class="text-2xl tracking-tight font-semibold">
                    <a class="navbar-brand" href="{{ url('/') }}"> {{ config('app.name', 'Laravel') }}</a>
                </span>
                    <div class="">
                        <div class="flex items-center">
                            <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline ml-8" href="#">Link</a>
                            <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline ml-8" href="#">Link</a>
                            <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline ml-8" href="#">Link</a>
                        </div>
                    </div>
                </div>
            </header>

            <div class="px-4 pt-4 flex-1 overflow-y-scroll">
                <div class="container mx-auto" style="height: 1000px;">
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>

            <footer class="border-t border-smoke px-8 py-4">
                <div class="flex flex-col-reverse md:flex-row md:items-center md:justify-between px-8">
                    <small class="block text-sm text-grey">
                        &copy; DiegoDev Group LLC.
                    </small>
                    <div class="mb-4 md:mb-0">
                        <div class="flex flex-col md:flex-row md:items-center">
                            <a class="text-xl md:text-base leading-normal text-grey-dark hover:text-black no-underline mb-4 md:mb-0 md:ml-8" href="#">Link</a>
                            <a class="text-xl md:text-base leading-normal text-grey-dark hover:text-black no-underline mb-4 md:mb-0 md:ml-8" href="#">Another link</a>
                            <a class="text-xl md:text-base leading-normal text-grey-dark hover:text-black no-underline mb-4 md:mb-0 md:ml-8" href="#">Link to something</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
</body>
</html>
