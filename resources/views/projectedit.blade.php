<link rel="stylesheet" href="">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    projects
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <form action="{{route('projects.edit', ['id' => $project->id])}}" method="post">
        @csrf
        @if($project)
            <input value="{{$project->naam}}" name="naam">
            <input value="{{$project->beschrijving}}" name="beschrijving">
            @if($project->github)
            <input value="{{$project->github}}" name="github">
            @endif
            @if($project->site)
            <input value="{{$project->site}}" name="site">
            @endif
            @if($project->download)
            <input value="{{$project->download}}" name="download">
            @endif
            <input value="{{$project->thumbnail}}" name="thumbnail">
        @endif

        @foreach($frameworks as $f)
        <label for="{{$f->id}}">{{$f->naam}}</label>
        <input type="checkbox" value="{{$f->id}}" id="{{$f->id}}" name="frameworks[]" {{ $frameworksfilt->contains('id', $f->id) ? 'checked' : '' }}> 

        @endforeach

        <button type="submit">submit</button>
        </form>
    </div>
</x-app-layout>