<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Julio Fajardo | Web Dev</title>
        <meta name="description" content="I'm Julio. I am a Web Developer and Programmer Analyst who will build amazing tools for your business."/>
        <link rel="shortcut icon" href="{{ mix('images/favicon.ico') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
