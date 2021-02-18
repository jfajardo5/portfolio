<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Julio Fajardo | Web Dev</title>
        <link rel="shortcut icon" href="{{ mix('images/favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ mix('images/applogo.png') }}">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ag-grid/25.0.1/ag-grid-community.min.js" integrity="sha512-7VPz1NAYcuVu1/eQooUfDUcG2sGRdmy2P9sa6ZgtXOpAVY66bN4u+cDXPcmhrVKA44LdznEEZwMabZ3qO8HB6A==" crossorigin="anonymous" defer></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.admin-nav')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
