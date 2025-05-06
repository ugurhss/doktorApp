<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Son Haberler</h2>
        <p class="mt-1 text-gray-600 dark:text-neutral-400">Dünyadan ve Türkiye'den güncel haberler burada.</p>
        <p class="mt-1 text-gray-600 dark:text-neutral-400">Haberleri takip ederek gelişmeleri kaçırmayın!</p>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10 lg:mb-14">
        @foreach ($newsItems as $news)
        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="/news/{{ $news->slug }}">
            <div class="aspect-w-16 aspect-h-9">
                @if($news->image)
                    @php
                        $image = json_decode($news->image);
                    @endphp

                    @if(is_array($image) && count($image) > 0)
                        <img class="w-full object-cover rounded-t-xl" src="{{ $image[0] }}" alt="Blog Image">
                    @else
                        <img class="w-full object-cover rounded-t-xl" src="https://cdnuploads.aa.com.tr/uploads/Contents/2025/04/02/thumbs_b_c_37d45cdf92b25d4d153e882d6cbc9602.jpg?v=230229" alt="Blog Image">
                    @endif
                @else
                    <img class="w-full object-cover rounded-t-xl" src="https://i.tgrthaber.com/images/haberler/25-02/04/galatasarayda-gece-yarisi-transfer-operasyonu-imza-icin-istanbula-geldi-17386415288989.jpg" alt="Blog Image">
                @endif
            </div>
            <div class="p-4 md:p-5">
                <p class="mt-2 text-xs uppercase text-gray-600 dark:text-neutral-400">
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
                    {!! Str::limit($news->details, 200, '...') !!}
                </p>

                <!-- Link to full content -->
                <a href="/news/{{ $news->slug }}" class="inline-block mt-2 text-blue-600 dark:text-blue-500 font-medium hover:underline">
                    Devamını Oku
                </a>
            </div>
        </a>
        @endforeach
    </div>
    <!-- End Grid -->

    <!-- Card -->
    <div class="text-center">
        <div class="inline-block bg-white border border-gray-200 shadow-2xs rounded-full dark:bg-neutral-900 dark:border-neutral-800">
            <div class="py-3 px-4 flex items-center gap-x-2">
                <p class="text-gray-600 dark:text-neutral-400">
                    Daha fazla okumak ister misiniz?
                </p>
                <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500" href="../docs/index.html">
                    Buraya git
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </a>
            </div>
        </div>
    </div>
    <!-- End Card -->
</div>
