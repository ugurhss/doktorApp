<x-app-layout>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Breadcrumb -->
        {{-- <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <i class="fas fa-home mr-2"></i>
                        Ana Sayfa
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                        <a href="{{ route('news.index') }}" class="ml-3 text-sm font-medium text-gray-700 hover:text-blue-600">Haberler</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                        <span class="ml-3 text-sm font-medium text-gray-500 truncate max-w-xs">{{ Str::limit($news->title, 30) }}</span>
                    </div>
                </li>
            </ol>
        </nav> --}}

        <div class="bg-white shadow-xl rounded-xl overflow-hidden transition-all duration-300 hover:shadow-2xl border border-gray-100">
            <!-- Başlık ve Meta Bilgiler -->
            <div class="p-6 md:p-8">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
                    <div>
                        @if($news->menus && $news->menus->isNotEmpty())
                            <span class="inline-block px-3 py-1 text-xs font-semibold tracking-wider text-blue-600 uppercase bg-blue-50 rounded-full">
                                {{ $news->menus->first()->name }}
                            </span>
                        @endif
                        <h1 class="mt-3 text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                            {{ $news->title }}
                        </h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-500">
                            <i class="far fa-calendar-alt mr-1"></i>
                            {{ $news->created_at->translatedFormat('d F Y') }}
                        </span>
                        <span class="text-sm text-gray-500">
                            <i class="far fa-eye mr-1"></i>
                            1.2K Görüntülenme
                        </span>
                    </div>
                </div>
            </div>

            <!-- Görseller Slider -->
            <div class="relative">
                <div class="swiper-container rounded-lg">
                    <div class="swiper-wrapper">
                        @php
                            $images = [
                                'https://images.unsplash.com/photo-1495020689067-958852a7765e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80',
                                'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                                'https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'
                            ];
                        @endphp

                        @forelse ($images as $img)
                            <div class="swiper-slide">
                                <div class="relative pt-[56.25%] overflow-hidden">
                                    <img src="{{ $img }}" alt="news image"
                                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                                </div>
                            </div>
                        @empty
                            <div class="swiper-slide">
                                <div class="relative pt-[56.25%] overflow-hidden bg-gray-100">
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <i class="far fa-image text-4xl text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    <!-- Navigation buttons -->
                    <div class="swiper-button-next text-white bg-black/30 backdrop-blur-sm rounded-full w-12 h-12 flex items-center justify-center hover:bg-black/50 transition-all"></div>
                    <div class="swiper-button-prev text-white bg-black/30 backdrop-blur-sm rounded-full w-12 h-12 flex items-center justify-center hover:bg-black/50 transition-all"></div>

                    <!-- Pagination -->
                    <div class="swiper-pagination !bottom-4"></div>
                </div>
            </div>

            <!-- İçerik -->
            <div class="p-6 md:p-8">
                <div class="prose prose-lg max-w-none text-gray-700">
                    {!! $news->details !!}
                </div>

                <!-- Etiketler -->
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-sm rounded-full bg-gray-100 text-gray-800">
                            #haber
                        </span>
                        <span class="px-3 py-1 text-sm rounded-full bg-gray-100 text-gray-800">
                            #güncel
                        </span>
                        <span class="px-3 py-1 text-sm rounded-full bg-gray-100 text-gray-800">
                            #{{ $news->menus->first()->name ?? 'genel' }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Paylaşım Butonları -->
            <div class="px-6 md:px-8 pb-6">
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-600">Paylaş:</span>
                    <a href="#" class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center hover:bg-blue-700 transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-blue-400 text-white flex items-center justify-center hover:bg-blue-500 transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-red-600 text-white flex items-center justify-center hover:bg-red-700 transition-colors">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 text-white flex items-center justify-center hover:bg-gray-900 transition-colors">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Benzer Haberler -->
        <div class="mt-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Benzer Haberler</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @for ($i = 0; $i < 3; $i++)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                        <div class="relative pt-[56.25%] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                 class="absolute inset-0 w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-4">
                            <span class="text-xs font-semibold text-blue-600 uppercase">Teknoloji</span>
                            <h4 class="mt-1 text-lg font-semibold text-gray-900 line-clamp-2">Yeni teknoloji trendleri ve gelecek projeksiyonları</h4>
                            <p class="mt-2 text-sm text-gray-600 line-clamp-2">Teknoloji dünyasındaki son gelişmeler ve önümüzdeki yıllarda bizi nelerin beklediğine dair uzman görüşleri...</p>
                            <div class="mt-3 flex items-center text-xs text-gray-500">
                                <span>2 gün önce</span>
                                <span class="mx-2">•</span>
                                <span>5 dakika okuma</span>
                            </div>
                        </div>
                    </div>
                @endfor
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
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
            });
        });
    </script>
</x-app-layout>
