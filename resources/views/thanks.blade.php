<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body class="antialiased flex flex-col justify-center items-center text-center">
        <a href="{{ route('index') }}"><img src="{{ mix('images/monkey.png') }}"></a>
        <p class="text-xl">Your message has been sent</p>
        <p class="text-xl">I'll be in touch soon!</p>
    </body>
</html>