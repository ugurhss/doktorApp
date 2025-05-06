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
                @if($news->menus->isNotEmpty())
                    <span class="uppercase font-semibold">{{ $news->menus->first()->name }}</span>
                @else
                    <span class="uppercase font-semibold">Uncategorized</span>
                @endif
            </p>

            <!-- Resim Slider -->
            @if($news->image)
                @php
                    $images = json_decode($news->image);
                @endphp

                @if(is_array($images) && count($images) > 0)
                    <div class="swiper-container mt-6 rounded-lg overflow-hidden">
                        <div class="swiper-wrapper">
                            @foreach($images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ $image }}" alt="news image" class="w-full h-96 object-cover">
                                </div>
                            @endforeach
                        </div>

                        <!-- Navigasyon okları -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>

                        <!-- Sayfa göstergesi -->
                        <div class="swiper-pagination"></div>
                    </div>
                @endif
            @endif

            <!-- İçerik -->
            <div class="mt-8 text-lg text-gray-800 dark:text-neutral-300">
                {!! nl2br(e($news->details)) !!}
            </div>

            <!-- Sosyal Medya Linkleri -->
            <div class="mt-8 flex gap-x-4">
                <a href="https://twitter.com/share?url={{ url()->current() }}" target="_blank" class="text-blue-500 hover:text-blue-700 flex items-center gap-x-2">
                    Twitter'da Paylaş
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="text-blue-500 hover:text-blue-700 flex items-center gap-x-2">
                    Facebook'ta Paylaş
                </a>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Swiper Ayarları -->
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
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
</x-app-layout>
