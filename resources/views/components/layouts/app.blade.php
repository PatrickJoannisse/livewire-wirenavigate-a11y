<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav>
            <h2>Wire:navigate</h2>
            <ul>
                <li><a wire:navigate href="{{ route('home') }}">Home</a></li>
                <li><a wire:navigate href="{{ route('about') }}">About</a></li>
            </ul>
            <h2>Regular anchor tags</h2>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
            </ul>
        </nav>
        {{ $slot }}
    </body>
</html>
