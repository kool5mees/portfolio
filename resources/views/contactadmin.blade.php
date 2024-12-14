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
                    contact page
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        @foreach($contact as $contact)
            <div class="flex flex-col items-center contact">
                <div class="email">
                {{
                    $contact->email;
                }}
                </div>
                <div class="content">
                {{
                    $contact->content;
                }}
                </div>
                <div class="time">
                {{
                    $contact->created_at;
                }}
                </div>
            </div>
        @endforeach
        </div>
</x-app-layout>
