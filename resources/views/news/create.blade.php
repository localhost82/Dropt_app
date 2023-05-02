<x-app-layout>
    <x-slot name="pageTitle">Publish News</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publish News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alerts />
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-3">
                <x-publish-news />
            </div>
        </div>
    </div>

</x-app-layout>
