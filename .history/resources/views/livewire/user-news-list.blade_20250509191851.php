<div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16 bg-gray-50">
    <!-- Title Section -->
    <div class="max-w-3xl mx-auto text-center mb-12 lg:mb-16">
        <div class="inline-flex items-center justify-center mb-4">
            <span class="h-1 w-12 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full"></span>
            <span class="ml-3 text-sm font-semibold text-blue-600 uppercase tracking-wider">Güncel Haberler</span>
        </div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight">
            Dünyadan ve Türkiye'den <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-blue-700">Son Dakika</span> Haberler
        </h2>
        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
            Gelişmeleri anında takip edin, gündemi kaçırmayın.
        </p>
    </div>

    <!-- News Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($newsItems as $news)
        <a href="/news/{{ $news->slug }}" class="group relative flex flex-col h-full bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-blue-100">
            <!-- Image with Gradient Overlay -->
            <div class="relative aspect-w-16 aspect-h-9 w-full overflow-hidden">
                @if($news->image)
                    @php
                        $image = json_decode($news->image);
                    @endphp
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         src="{{ is_array($image) && count($image) > 0 ? $image[0] : 'https://cdnuploads.aa.com.tr/uploads/Contents/2025/04/02/thumbs_b_c_37d45cdf92b25d4d153e882d6cbc9602.jpg?v=230229' }}"
                         alt="{{ $news->title }}"
                         loading="lazy">
                @else
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         src="https://i.tgrthaber.com/images/haberler/25-02/04/galatasarayda-gece-yarisi-transfer-operasyonu-imza-icin-istanbula-geldi-17386415288989.jpg"
                         alt="{{ $news->title }}"
                         loading="lazy">
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>

                <!-- Category Badge -->
                <div class="absolute top-4 left-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white text-blue-600 shadow-sm">
                        {{ $news->category ?? 'Genel' }}
                    </span>
                </div>

                <!-- Date -->
                <div class="absolute bottom-4 left-4 flex items-center text-sm text-white">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    {{ $news->created_at->diffForHumans() }}
                </div>
            </div>

            <!-- Content -->
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2 group-hover:text-blue-600 transition-colors">
                    {{ $news->title }}
                </h3>

                <p class="text-gray-500 mb-4 line-clamp-3">
                    {{ Str::limit(strip_tags($news->details), 150) }}
                </p>

                <div class="mt-auto pt-4 border-t border-gray-100">
                    <span class="inline-flex items-center text-blue-500 font-medium group-hover:text-blue-600 transition-colors">
                        Devamını oku
                        <svg class="ml-2 w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </a>
        @endforeach
    </div>

    <!-- View More Button -->
    <div class="mt-16 text-center">
        <a href="/news" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-300">
            Tüm Haberleri Gör
            <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </a>
    </div>
</div>
