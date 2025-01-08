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
                    create project
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div>
            <form action="{{ route('projects.create') }}" method="post" class="flex flex-col">
                @csrf
                <h1>naam</h1>
                <input name="naam" required>
                <h1>beschrijving</h1>
                <input name="beschrijving" required>
                <h1>github</h1>
                <input name="github">
                <h1>site</h1>
                <input name="site">
                <h1>download</h1>
                <input name="download">
                <div>
                    <h1>frameworks</h1>
                    @foreach ($frameworks as $framework)
                        <input type="checkbox" id="{{$framework->id}}" name="{{$framework->id}}" value="{{$framework->id}}">
                        <label for="{{$framework->id}}">{{$framework->naam}}</label>
                    @endforeach
                </div>
                <h1>thumbnail</h1>
                <input name="thumbnail" required>
                <button type="submit">create</button>
            </form>
        </div>
    </div>
</x-app-layout>