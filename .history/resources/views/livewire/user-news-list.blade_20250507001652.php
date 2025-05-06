<a href="/news/{{ $news->slug }}" class="group flex flex-col bg-white dark:bg-neutral-900 border border-gray-200 dark:border-neutral-800 rounded-xl shadow-md hover:shadow-lg transition-transform duration-300 hover:scale-105 overflow-hidden">

    <!-- Görsel -->
    <div class="aspect-w-16 aspect-h-9 w-full overflow-hidden rounded-t-xl">
        @php
            $imageUrl = 'https://i.tgrthaber.com/images/haberler/25-02/04/galatasarayda-gece-yarisi-transfer-operasyonu-imza-icin-istanbula-geldi-17386415288989.jpg';
            if ($news->image) {
                $decoded = json_decode($news->image, true);
                if (is_array($decoded) && count($decoded) > 0) {
                    $imageUrl = $decoded[0];
                }
            }
        @endphp
        <img src="{{ $imageUrl }}" alt="{{ $news->title }}" class="w-full h-full object-cover rounded-t-xl" />
    </div>

    <!-- İçerik -->
    <div class="p-4 md:p-5">
        <!-- Kategori -->
        <p class="text-sm font-medium text-blue-600 dark:text-blue-400 uppercase tracking-wide">
            {{ $news->category ?? 'Uncategorized' }}
        </p>

        <!-- Başlık -->
        <h3 class="mt-2 text-lg font-semibold text-gray-800 group-hover:text-blue-600 dark:text-white dark:group-hover:text-blue-400">
            {{ $news->title }}
        </h3>

        <!-- Özet -->
        <p class="mt-2 text-sm text-gray-700 dark:text-gray-300 line-clamp-3">
            {!! Str::limit($news->details, 100, '...') !!}
        </p>

        <!-- Devamını Oku -->
        <span class="mt-3 inline-block text-sm text-blue-600 hover:underline dark:text-blue-400">
            Devamını Oku →
        </span>
    </div>
</a>
