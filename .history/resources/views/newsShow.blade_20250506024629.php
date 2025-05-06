<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kullanucı Dashboard') }}
        </h2>

        @extends('layouts.app')

        @section('content')
        <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-neutral-900 shadow-lg rounded-xl p-6">
                <!-- Başlık -->
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">{{ $news->title }}</h1>

                <!-- Kategori ve Yayınlanma Tarihi -->
                <p class="mt-2 text-gray-600 dark:text-neutral-400 text-sm">
                    @if($news->category)
                        <span class="uppercase font-semibold">{{ $news->category }}</span>
                    @else
                        <span class="uppercase font-semibold">Uncategorized</span>
                    @endif
                    &middot;
                    <span>{{ $news->created_at->format('d M Y') }}</span>
                </p>

                <!-- Haber Görseli -->
                <div class="mt-6">
                    @if($news->image)
                        @php
                            $image = json_decode($news->image);
                        @endphp

                        @if(is_array($image) && count($image) > 0)
                            <img class="w-full object-cover rounded-lg" src="{{ $image[0] }}" alt="{{ $news->title }}">
                        @else
                            <!-- Eğer image boşsa, placeholder bir resim göster -->
                            <img class="w-full object-cover rounded-lg" src="https://cdnuploads.aa.com.tr/uploads/Contents/2025/04/02/thumbs_b_c_37d45cdf92b25d4d153e882d6cbc9602.jpg?v=230229" alt="Blog Image">
                        @endif
                    @else
                        <!-- Eğer image alanı boşsa, placeholder bir resim göster -->
                        <img class="w-full object-cover rounded-lg" src="https://i.tgrthaber.com/images/haberler/25-02/04/galatasarayda-gece-yarisi-transfer-operasyonu-imza-icin-istanbula-geldi-17386415288989.jpg" alt="Blog Image">
                    @endif
                </div>

                <!-- Haber İçeriği -->
                <div class="mt-8">
                    <p class="text-lg text-gray-800 dark:text-neutral-300">
                        {!! nl2br(e($news->content)) !!}
                    </p>
                </div>

                <!-- Sosyal Medya Paylaşım Linkleri (Opsiyonel) -->
                <div class="mt-8 flex gap-x-4">
                    <a href="https://twitter.com/share?url={{ url()->current() }}" target="_blank" class="text-blue-500 hover:text-blue-700">
                        Twitter'da Paylaş
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="text-blue-500 hover:text-blue-700">
                        Facebook'ta Paylaş
                    </a>
                </div>
            </div>
        </div>
        @endsection

</x-app-layout>
