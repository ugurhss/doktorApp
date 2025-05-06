<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Haber Detayı') }}
        </h2>
    </x-slot>

    <livewire:user-news-detail :slug="$slug" />
</x-app-layout>
