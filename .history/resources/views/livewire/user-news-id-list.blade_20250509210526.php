<div class="max-w-screen-2xl mx-auto px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
    <!-- Title Section -->
    <div class="max-w-3xl mx-auto text-center mb-12 lg:mb-16">
        <h2 class="text-4xl font-bold text-gray-800 dark:text-white mb-4">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">Son Haberler</span>
        </h2>
        <p class="text-xl text-gray-600 dark:text-neutral-400">
            Güncel haberler ve gelişmeler hakkında bilgi almak için aşağıdaki haberleri inceleyebilirsiniz.
        </p>
    </div>

    <!-- News Grid -->
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($newsItems as $news)
        <a href="/news/{{ $news->slug }}"
           class="group flex flex-col h-full bg-white dark:bg-neutral-900 border border-gray-200 dark:border-neutral-800 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 ease-in-out overflow-hidden hover:-translate-y-1">

            <!-- Image Container -->
            <div class="relative aspect-w-16 aspect-h-9 w-full overflow-hidden">
                <!-- Image -->
                <div class="w-full h-64">
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
                             alt="Blog Image">
                    @endif
                </div>

                <!-- Category Badge -->
                <div class="absolute top-4 right-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">
                        {{ $news->category ?? 'Genel' }}
                    </span>
                </div>
            </div>

            <!-- Content -->
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-3 line-clamp-2">
                    {{ $news->title }}
                </h3>
                <p class="text-gray-600 dark:text-neutral-400 mb-4 line-clamp-3">
                    {{ Str::limit(strip_tags($news->details), 120) }}
                </p>

                <!-- Date and Read More -->
                <div class="mt-auto flex items-center justify-between">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">
                        {{ $news->created_at->format('d M Y') }}
                    </span>
                    <span class="inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400 transition-colors">
                        Devamını Oku
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </a>
        @empty
        <div class="col-span-3 py-12 text-center">
            <div class="mx-auto max-w-md">
                <svg class="mx-auto h-12 w-12 text-gray-400 dark:text-neutral-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
                <h3 class="mt-2 text-lg font-medium text-gray-900 dark:text-white">Haber bulunamadı</h3>
                <p class="mt-1 text-gray-500 dark:text-neutral-400">Bu kategoriye ait henüz haber eklenmemiş.</p>
            </div>
        </div>
        @endforelse
    </div>

    <!-- Pagination or View More -->
    @if($newsItems->hasPages())
    <div class="mt-12 flex justify-center">
        {{ $newsItems->links() }}
    </div>
    @elseif(count($newsItems) > 6)
    <div class="mt-12 text-center">
        <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800 transition-colors">
            Daha Fazla Haber Göster
        </a>
    </div>
    @endif
</div>
