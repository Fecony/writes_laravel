<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        @stack('styles')
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>

        @include('layouts.partials.favicon')
    </head>

    <body class="antialiased {{ App::environment() ? 'debug-screens' : '' }}">
        @yield('body')

        @livewireScripts
        @stack('scripts')
    </body>
</html>
