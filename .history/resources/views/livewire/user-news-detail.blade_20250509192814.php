<div class="max-w-4xl mx-auto p-6 bg-gray-900 rounded-xl shadow-2xl backdrop-blur-sm bg-opacity-90">
    <!-- Başlık -->
    <h1 class="text-4xl text-white font-extrabold mb-6 leading-tight tracking-tight bg-gradient-to-r from-indigo-400 to-purple-500 bg-clip-text text-transparent">
        {{ $news->title }}
    </h1>

    <!-- Resim -->
    @if($news->image)
        <div class="relative overflow-hidden rounded-2xl shadow-xl mb-8 group">
            <img src="{{ asset('storage/' . json_decode($news->image)[0]) }}" alt="{{ $news->title }}"
                 class="w-full h-auto transition-transform duration-700 ease-in-out group-hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/50 to-transparent"></div>
        </div>
    @endif

    <!-- Detaylar -->
    <div class="prose prose-invert max-w-none text-gray-300 dark:text-gray-400 mb-8">
        <div class="text-lg leading-relaxed space-y-4">
            {!! $news->details !!}
        </div>
    </div>

    <!-- Meta Bilgiler ve Geri Dön Butonu -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 pt-6 border-t border-gray-800">
        <div class="flex items-center space-x-4">
            <span class="text-sm text-gray-500">{{ $news->created_at->diffForHumans() }}</span>
            <!-- Kategori vb. ek bilgiler eklenebilir -->
        </div>
        <a href="{{ route('news.index') }}"
           class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-medium rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Tüm Haberlere Dön
        </a>
    </div>
</div>
