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

            <!-- Görsel (Swiper) -->
            <div class="mt-6">
                @php
                    $images = ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRi-NNOKyx4elipLI5FqSEJnv6vP9FXmnzULg&s'];

                    try {
                        $decoded = json_decode($news->image, true);
                        if (is_array($decoded) && count($decoded) > 0) {
                            $images = $decoded;
                        }
                    } catch (\Exception $e) {
                        $images = [];
                    }

                    if (empty($images)) {
                        $images[] = 'https://via.placeholder.com/800x400?text=No+Image+Available';
                    }
                @endphp

                <div class="swiper-container rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach($images as $image)
                            <div class="swiper-slide">
                                <img src="{{ $image }}" alt="news image" class="w-full h-96 object-cover">
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- İçerik -->
            <div class="mt-8 text-lg text-gray-800 dark:text-neutral-300">
                {!! nl2br(e($news->details)) !!}
            </div>

            <!-- Sosyal Medya -->
            <div class="mt-8 flex gap-x-4">
                <a href="https://twitter.com/share?url={{ url()->current() }}" target="_blank" class="text-blue-500 hover:text-blue-700 flex items-center gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path d="M22 4.01c-.81.36-1.69.61-2.61.72a4.48 4.48 0 0 0 1.98-2.48 8.93 8.93 0 0 1-2.85 1.09c-1.68 1.79-4.14 2.8-6.8 2.8a6.89 6.89 0 0 0-6.92-6.88c-.9 0-1.77.18-2.58.51-1.92 1.02-3.02 3.02-3.02 5.25 0 .4.05.79.14 1.17-2.49-.12-4.69-1.32-6.16-3.14a6.93 6.93 0 0 0-.94 3.47c0 2.38 1.21 4.48 3.03 5.7a6.9 6.9 0 0 1-3.14-.87v.09c0 3.68 2.63 6.77 6.11 7.47-1.28.35-2.6.43-3.9.16 1.26 3.94 4.9 6.83 9.14 6.83a13.76 13.76 0 0 0 4.53-.73c1.83-1.11 3.26-2.76 4.04-4.73.77-1.98 1.18-4.17 1.18-6.38 0-.15 0-.31-.02-.46A7.48 7.48 0 0 0 22 4.01z"></path>
                    </svg>
                    Twitter'da Paylaş
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="text-blue-500 hover:text-blue-700 flex items-center gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path d="M18 2.25c1.72 0 3.18 1.46 3.18 3.25v13.5c0 1.8-1.46 3.25-3.18 3.25H6c-1.72 0-3.18-1.46-3.18-3.25V5.5C2.82 3.7 4.28 2.25 6 2.25h12zm0 1.5H6c-.95 0-1.73.78-1.73 1.75v13.5c0 .97.78 1.75 1.73 1.75h12c.95 0 1.73-.78 1.73-1.75V5.5c0-.97-.78-1.75-1.73-1.75z"></path>
                    </svg>
                    Facebook'ta Paylaş
                </a>
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
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
</x-app-layout>
