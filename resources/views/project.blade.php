<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/project.css">
        <title>Mees Windhouwer</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    
    </head>
    <body class="font-sans antialiased  flex flex-col">
        <div class="flex items-center justify-evenly text-5xl nav">
            <a href="{{ url('/') }}"><img src="{{asset('/logo.png')}}"></img></a>
            <div><a href="{{ url('/aboutme') }}">about me</a></div>
            <div><a href="{{ url('/projects')}}" class="current-page">projects</a></div>
            <div><a href="{{ url('/contact') }}">contact</a></div>
            <div><a href="">login</a></div>
        </div>
        <div>
            <div class="container1">
                <div class="para">
                    <div class="titel">{{$project->naam}}</div>
                    <div class="text">{{$project->beschrijving}}</div>
                </div>
                <div class="container2">
                    <div class="links">
                        @if($project->github)
                            <div class="github"><img src="{{asset('github.png')}}"><a href="{{$project->github}}">GITHUB</a></div>
                        @endif
                        @if($project->site)
                            <div class="site"><img src="{{asset('logo.png')}}"><a href="{{$project->site}}">SITE</a></div>
                        @endif
                        @if($project->download)
                            <div class="download"><img src="{{asset('images.png')}}"><a href="{{$project->download}}">DOWNLOAD</a></div>
                        @endif
                    </div>
                    <div class="frameworks">
                        <div>langauges/frameworks</div>
                        @foreach($frameworks as $f)
                        <div class="item"><img src="{{asset('storage/'. $f->logo)}}" class="framelogo"><div>{{$f->naam}}</div></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
                <!-- images ooit een keer -->
            </div>
        </div>
    </body>
</html>