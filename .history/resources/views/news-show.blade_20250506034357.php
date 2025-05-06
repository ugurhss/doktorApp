<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Haber Detayları') }}
        </h2>
    </x-slot>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-neutral-900 shadow-xl rounded-lg p-6">

            <!-- Başlık ve Tarih -->
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold text-gray-900 dark:text-white">{{ $news->title }}</h1>
                <span class="text-sm text-gray-600 dark:text-neutral-400">{{ $news->created_at->format('d M Y') }}</span>
            </div>

            <!-- Kategori -->
            <p class="mt-2 text-gray-600 dark:text-neutral-400 text-sm">
                @if($news->menus && $news->menus->isNotEmpty())
                    <span class="uppercase font-semibold">{{ $news->menus->first()->name }}</span>
                @else
                    <span class="uppercase font-semibold">Uncategorized</span>
                @endif
            </p>

            <!-- Görseller -->
            <div class="mt-6">
                @php
                    $images = [
                        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRi-NNOKyx4elipLI5FqSEJnv6vP9FXmnzULg&s',
                        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKRRZsQR-Ep3Fy5EcfZAt50bUtcg5nzVQCyA&s'
                    ];
                @endphp

                <div class="swiper-container rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        @forelse ($images as $img)
                            <div class="swiper-slide">
                                <img src="{{ $img }}" alt="news image" class="w-full h-96 object-cover">
                            </div>
                        @empty
                            <div class="swiper-slide">
                                <img src="https://via.placeholder.com/800x400?text=No+Image+Available" class="w-full h-96 object-cover" alt="No image">
                            </div>
                        @endforelse
                    </div>


                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- İçerik -->
            <div class="mt-8 text-lg text-gray-800 dark:text-neutral-300">
                {!! nl2br(e($news->details)) !!}
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Swiper Init -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                // navigation: {
                //     nextEl: '.swiper-button-next',
                //     prevEl: '.swiper-button-prev',
                // },
            });
        });
    </script>
</x-app-layout>
