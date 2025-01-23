<link rel="stylesheet" href="../css/contactadmin.css">

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
                    aboutme
                </div>
            </div>
        </div>
    </div>
        <div class="flex flex-col">
            <div class="flex flex-col items-center text-white">
            </div>
            <div class="flex items-center flex-col text-orange-700">
                <form action="{{ route('aboutme.admin') }}" method="post" class="flex flex-col w-2/4">
                @foreach($aboutme as $aboutme)
                    @csrf
                    <h1>titel</h1>
                    <input type="hidden" name='posttype' value="update" required>
                    <input name="titel" value="{{$aboutme ->titel}}">
                    <h1>content</h1>
                    <textarea name="content" cols="125" rows="8" >{{$aboutme ->content}}</textarea>
                    <h1>img</h1>
                    <input name="img" value="{{$aboutme ->img}}">
                    <h1>link1</h1>
                    <input name="link1" value="{{$aboutme ->link1}}">
                    <h1>link2</h1>
                    <input name="link2" value="{{$aboutme ->link2}}">
                    <h1>link3</h1>
                    <input name="link3" value="{{$aboutme ->link3}}">
                    <h1>img1</h1>
                    <input name="img1"value="{{$aboutme ->img1}}">
                    <h1>img2</h1>
                    <input name="img2"value="{{$aboutme ->img2}}">
                    <h1>img3</h1>
                    <input name="img3"value="{{$aboutme ->img3}}">
                    <div>
                        <button type="submit" class="submit">submit</button>
                    </div>
                    @endforeach 
                </form>
                <form action="{{ route('aboutme.admin') }}" method="post" class="flex flex-col w-2/4" enctype="multipart/form-data">
                    @csrf
                    <h1>frameworks</h1>
                    <input type="hidden" name='posttype' value="add">
                    <input name="naam">
                    <input type="file" name="logo">
                    <div>
                        <button type="submit" class="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
</x-app-layout>
