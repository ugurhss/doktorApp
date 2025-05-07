<div class="max-w-screen-xl mx-auto px-4 py-10 sm:px-6 lg:px-8 lg:py-14 overflow-hidden">
    <!-- Title -->
    <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
        <h2 class="text-3xl font-semibold text-gray-800 dark:text-white break-words">Son Haberler</h2>
        <p class="mt-2 text-lg text-gray-600 dark:text-neutral-400 break-words">
            Seçtiğiniz menüye ait haberler aşağıda listelenmektedir.
        </p>
    </div>
    <!-- End Title -->

    <!-- News Grid -->
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10 lg:mb-14">
        @forelse ($newsItems as $news)
        <a href="/news/{{ $news->slug }}"
           class="group flex flex-col bg-white dark:bg-neutral-900 border rounded-xl shadow-md hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105 overflow-hidden">

            <!-- Image -->
            <div class="aspect-w-16 aspect-h-9 w-full overflow-hidden rounded-t-xl">
                @if($news->image)
                    @php
                        $image = json_decode($news->image);
                    @endphp
                    <img class="w-full h-full object-cover rounded-t-xl" src="{{ is_array($image) && count($image) > 0 ? $image[0] : 'https://cdnuploads.aa.com.tr/uploads/Contents/2025/04/02/thumbs_b_c_37d45cdf92b25d4d153e882d6cbc9602.jpg?v=230229' }}" alt="{{ $news->title }}">
                @else
                    <img class="w-full h-full object-cover rounded-t-xl" src="https://i.tgrthaber.com/images/haberler/25-02/04/galatasarayda-gece-yarisi-transfer-operasyonu-imza-icin-istanbula-geldi-17386415288989.jpg" alt="Blog Image">
                @endif
            </div>

            <!-- Content -->
            <div class="p-4 md:p-5 break-words overflow-hidden">
                <p class="mt-2 text-xs uppercase text-gray-500 dark:text-neutral-400 break-words">
                    {{ $news->category ?? 'Kategori Yok' }}
                </p>
                <p class="mt-2 text-sm text-gray-700 dark:text-gray-300 break-words">
                    {{ Str::limit(strip_tags($news->details), 100) }}
                </p>
                <span class="mt-3 inline-block text-sm text-blue-600 hover:underline dark:text-blue-500">
                    Devamını Oku →
                </span>
            </div>
        </a>
        @empty
        <div class="col-span-3 text-center text-gray-500 dark:text-gray-400">
            Bu menüye ait haber bulunamadı.
        </div>
        @endforelse
    </div>
    <!-- End News Grid -->
</div>
