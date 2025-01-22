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
        <div class="container">
            <div class="divider"></div>
            <div class="header">
                <div class='titel'>projects</div>
                <div class='para'>list of projects i have worked on</div>
            </div>
        </div>
        <div>
            <div class="container2">
                <div class="divider"></div>
                <div class="menu">
                    <div class="lege menuname">name</div>
                    <div class="lege menuframe">langauges/frameworks</div>
                    <form method="GET" action="{{ route('projects.list') }}">
                        <select name="framework_id" onchange="this.form.submit()" class="select">
                            <option value="">-Filter-</option>
                            @foreach ($frameworks as $framework)
                                <option value="{{ $framework->id }}" 
                                    {{ isset($frameworkId) && $frameworkId == $framework->id ? 'selected' : '' }}>
                                    {{ $framework->naam }}
                                </option>
                            @endforeach    
                        </select>
                    </form>
                </div>
            </div>
            <div class="container3">
                <div class="divider"></div>
                <div class="list">
                    @foreach ($projects as $p)
                        <div class="item">
                            <div class="itemcont">
                                <h3 class="itemname">{{ $p->naam }}</h3>
                            </div>
                            <div class="itemcont">
                                <div class="itemframework">langauges and frameworks</div>
                            </div>
                            <div class="itemcont">
                                <div class="itemimage">thumbnail image</div>
                            </div>
                            <div class="itemcont">
                                <a class="itemlink">GO TO</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>