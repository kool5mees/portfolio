<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="css/aboutme.css">
        <title>Mees Windhouwer</title>
        <link rel="" href="bg.png">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased  flex flex-col">
    <div class="flex items-center justify-evenly text-5xl nav">
            <a href="{{ url('/') }}"><img src="logo.png"></img></a>
            <div><a href="{{ url('/aboutme') }}" class="current-page">about me</a></div>
            <div><a href="{{ url('/projects')}}">projects</a></div>
            <div><a href="{{ url('/contact') }}">contact</a></div>
            <div><a href="">login</a></div>
        </div>
        @if($aboutme->isNotEmpty())        
        <div class="flex">
            <div class="container-left">
                <div class="text">
                    <h1>{{$aboutme->first()->titel}}</h1>
                    <p>
                    {{$aboutme->first()->content}}  
                    </p>
                </div>
                <div class="flex social-links">
                    <a href="https://github.com/kool5mees"><img class="socials" src="github.png"></a>
                    <a href="https://www.linkedin.com/in/mees-windhouwer-b86a1b225/"><img class="socials" src="linkedin.png"></a>
                    <a href="https://www.instagram.com/kool4mees/"><img class="socials" src="instagram.png"></a>
                </div>
            </div>
            <div>
                <img class="headshot" src="https://media.discordapp.net/attachments/906667721364754492/1210225725005889647/IMG_2471.png?ex=6755a789&is=67545609&hm=2097d0433e545347cd52b0a3a49d52fbc21bb0007eb23ec3c6ba9b8416b2de5f&=&format=webp&quality=lossless&width=380&height=676">
            </div> 
        </div>
        @endif
        @if($framework->isNotEmpty())
        <div>
            <div class='list'>
                <div class="frameworks">
                    <div class="fheader">
                        languages/frameworks
                    </div>
                    <div class="placeholder">
                    </div>
                </div>
                <div class="centering">
                    <div class="itemcont">
                        @foreach($framework as $code)
                            <div class='listitem'>
                                {{$code->naam}}
                                <!-- {{$code->logo}} -->
                            </div>
                        @endforeach
                    </div>    
                </div>
            </div>
        </div>
        @endif
    </body>
</html>
