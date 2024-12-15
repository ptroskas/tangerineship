<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Tangerineship') }}</title>
        <meta name="description" content="Tangerineship es una plataforma que conecta personas con intereses comunes. Únete a nuestra comunidad." />
        <meta name="keywords" content="Tangerineship, conexión, intereses, social" />
        <meta property="og:title" content="Tangerineship" />
        <meta property="og:description" content="Conecta con personas únicas en TangerineShip." />
        <meta property="og:image" content="{{ asset('images/logo.svg') }}" />
        <meta property="og:url" content="{{ url()->current() }}" />
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ asset('images/logo.svg') }}" type="image/svg+xml">
        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
