<div class="max-w-7xl mx-auto px-4 py-10 sm:px-6 lg:px-8 lg:py-14">
    <!-- Title -->
    <div class="text-center mb-12">
        <h2 class="text-3xl font-semibold text-gray-900 dark:text-white md:text-4xl mb-2">Son Haberler</h2>
        <p class="text-lg text-gray-600 dark:text-neutral-400 mb-2">Dünyadan ve Türkiye'den güncel haberler burada.</p>
        <p class="text-lg text-gray-600 dark:text-neutral-400">Haberleri takip ederek gelişmeleri kaçırmayın!</p>
    </div>
    <!-- End Title -->

    <!-- News Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-12">
        @foreach ($newsItems as $news)
        <a href="/news/{{ $news->slug }}" class="group flex flex-col bg-white border rounded-lg shadow-md transition-transform transform hover:scale-105 hover:shadow-xl dark:bg-neutral-900 dark:border-neutral-800">
            <div class="aspect-w-16 aspect-h-9">
                @if($news->image)
                    @php
                        $image = json_decode($news->image);
                    @endphp
                    @if(is_array($image) && count($image) > 0)
                        <img class="w-full object-cover rounded-t-lg" src="{{ $image[0] }}" alt="{{ $news->title }}">
                    @else
                        <img class="w-full object-cover rounded-t-lg" src="https://cdnuploads.aa.com.tr/uploads/Contents/2025/04/02/thumbs_b_c_37d45cdf92b25d4d153e882d6cbc9602.jpg?v=230229" alt="Blog Image">
                    @endif
                @else
                    <img class="w-full object-cover rounded-t-lg" src="https://i.tgrthaber.com/images/haberler/25-02/04/galatasarayda-gece-yarisi-transfer-operasyonu-imza-icin-istanbula-geldi-17386415288989.jpg" alt="Blog Image">
                @endif
            </div>
            <div class="p-4">
                <p class="text-xs text-gray-600 dark:text-neutral-400 uppercase">
                    @if($news->category)
                        {{ $news->category }}
                    @else
                        Uncategorized
                    @endif
                </p>
                <h3 class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600 dark:text-neutral-300 dark:group-hover:text-white">
                    {{ $news->title }}
                </h3>

                <!-- Content preview (first 200 characters) -->
                <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                    {!! Str::limit($news->details, 150, '...') !!}
                </p>

                <!-- Link to full content -->
                <a href="/news/{{ $news->slug }}" class="mt-3 text-blue-600 dark:text-blue-500 font-medium hover:underline">
                    Devamını Oku
                </a>
            </div>
        </a>
        @endforeach
    </div>
    <!-- End News Grid -->

    <!-- More News Card -->
    <div class="text-center mt-12">
        <a href="/news" class="inline-block bg-white border border-gray-200 rounded-full py-3 px-6 text-gray-600 dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 hover:bg-gray-100 dark:hover:bg-neutral-700 hover:text-blue-600 transition-all">
            Daha fazla haber
        </a>
    </div>
</div>
