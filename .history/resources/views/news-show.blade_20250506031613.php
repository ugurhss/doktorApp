<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Haber Detayları j') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-neutral-900 shadow-xl rounded-lg p-6">

            <!-- Başlık ve Tarih -->
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold text-gray-900 dark:text-white">{{ $news->title }}</h1>
                <span class="text-sm text-gray-600 dark:text-neutral-400">{{ $news->created_at->format('d M Y') }}</span>
            </div>

            <!-- Kategori -->
            <p class="mt-2 text-gray-600 dark:text-neutral-400 text-sm">
                @if($news->category)
                    <span class="uppercase font-semibold">{{ $news->menus }}</span>
                @else
                    <span class="uppercase font-semibold">Uncategorized</span>
                @endif
            </p>

            <!-- Görsel -->
            <div class="mt-6">
                @if($news->image)
                    @php
                        $image = json_decode($news->image);
                    @endphp

                    @if(is_array($image) && count($image) > 0)
                        <img class="w-full object-cover rounded-lg" src="{{ $image[0] }}" alt="{{ $news->title }}">
                    @else
                        <img class="w-full object-cover rounded-lg" src="https://cdnuploads.aa.com.tr/uploads/Contents/2025/04/02/thumbs_b_c_37d45cdf92b25d4d153e882d6cbc9602.jpg?v=230229" alt="Blog Image">
                    @endif
                @else
                    <img class="w-full object-cover rounded-lg" src="https://i.tgrthaber.com/images/haberler/25-02/04/galatasarayda-gece-yarisi-transfer-operasyonu-imza-icin-istanbula-geldi-17386415288989.jpg" alt="Blog Image">
                @endif
            </div>

            <!-- İçerik -->
            <div class="mt-8 text-lg text-gray-800 dark:text-neutral-300">
                {!! nl2br(e($news->details)) !!}
            </div>

            <!-- Sosyal Medya Paylaşım Linkleri -->
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
</x-app-layout>
