<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="css/contact.css">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased  flex flex-col">
        <div class="flex items-center justify-evenly text-5xl nav">
            <a href="{{ url('/') }}"><img src="logo.png"></img></a>
            <div><a href="{{ url('/aboutme') }}">about me</a></div>
            <div><a href="">projects</a></div>
            <div><a href="{{ url('/contact') }}" class="current-page">contact</a></div>
            <div><a href="">login</a></div>
        </div>
        <div class="container1">
            <form action="{{ route('contact.store') }}" method="post">
                @csrf
                <h1 class="title">contact me</h1>
                <input type="email" name="email" class="email">
                <textarea name="content" cols="125" rows="24" ></textarea>
                <div>
                    <button type="submit" class="submit">submit</button>
                </div>
            </form>    
        </div>
    </body>
</html>
