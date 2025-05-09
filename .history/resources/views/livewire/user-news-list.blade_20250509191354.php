<div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <!-- Title Section -->
    <div class="max-w-3xl mx-auto text-center mb-12 lg:mb-16">
        <div class="inline-flex items-center mb-4">
            <span class="h-1 w-12 bg-blue-500 rounded-full"></span>
            <span class="ml-2 text-sm font-medium text-blue-500 uppercase tracking-wider">Güncel Haberler</span>
        </div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white leading-tight">
            Dünyadan ve Türkiye'den <span class="text-blue-500">Son Dakika</span> Haberler
        </h2>
        <p class="mt-4 text-lg text-gray-600 dark:text-neutral-300 max-w-2xl mx-auto">
            Gelişmeleri anında takip edin, gündemi kaçırmayın.
        </p>
    </div>

    <!-- News Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($newsItems as $news)
        <a href="/news/{{ $news->slug }}" class="group relative flex flex-col h-full bg-white dark:bg-neutral-900 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
            <!-- Image with Gradient Overlay -->
            <div class="relative aspect-w-16 aspect-h-9 w-full overflow-hidden">
                @if($news->image)
                    @php
                        $image = json_decode($news->image);
                    @endphp
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                         src="{{ is_array($image) && count($image) > 0 ? $image[0] : 'https://cdnuploads.aa.com.tr/uploads/Contents/2025/04/02/thumbs_b_c_37d45cdf92b25d4d153e882d6cbc9602.jpg?v=230229' }}"
                         alt="{{ $news->title }}">
                @else
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                         src="https://i.tgrthaber.com/images/haberler/25-02/04/galatasarayda-gece-yarisi-transfer-operasyonu-imza-icin-istanbula-geldi-17386415288989.jpg"
                         alt="{{ $news->title }}">
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent"></div>

                <!-- Category Badge -->
                <div class="absolute top-4 left-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-500 text-white">
                        {{ $news->category ?? 'Genel' }}
                    </span>
                </div>
            </div>

            <!-- Content -->
            <div class="p-6 flex flex-col flex-grow">
                <div class="flex items-center text-sm text-gray-500 dark:text-neutral-400 mb-2">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    {{ $news->created_at->diffForHumans() }}
                </div>

                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-2">
                    {{ $news->title }}
                </h3>

                <p class="text-gray-600 dark:text-neutral-300 mb-4 line-clamp-3">
                    {{ Str::limit(strip_tags($news->details), 150) }}
                </p>

                <div class="mt-auto">
                    <span class="inline-flex items-center text-blue-500 font-medium group-hover:text-blue-600 transition-colors">
                        Devamını oku
                        <svg class="ml-1 w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </a>
        @endforeach
    </div>

    <!-- View More Button -->
    <div class="mt-12 text-center">
        <a href="/news" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300">
            Tüm Haberleri Gör
            <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </a>
    </div>
</div>
