<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Haberler Sayfası') }}
        </h2>
    </x-slot>

    <livewire:user-news-list />
</x-app-layout>
