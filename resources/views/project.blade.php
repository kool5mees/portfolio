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
            <div>
                <div>
                    <div>{{$project->naam}}</div>
                    <div>{{$project->beschrijving}}</div>
                </div>
                <div>
                    <div>
                        @if($project->github)
                            <div>{{$project->github}}</div>
                        @endif
                        @if($project->site)
                            <div>{{$project->site}}</div>
                        @endif
                        @if($project->download)
                            <div>{{$project->download}}</div>
                        @endif
                    </div>
                    <div>
                        @foreach($frameworks as $f)
                        {{$f->naam}}
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