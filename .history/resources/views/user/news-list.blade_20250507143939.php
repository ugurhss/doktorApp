<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $selectedMenuId ? __('Menüye Göre Haberler') : __('Tüm Haberler') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:user-news-list :menuId="$selectedMenuId" />
        </div>
    </div>
</x-app-layout>
