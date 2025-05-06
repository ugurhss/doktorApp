<div class="max-w-4xl mx-auto p-6 bg-gray-900 dark:bg-gray-900 rounded-lg shadow-lg">
    <!-- Başlık -->
    <h1 class="text-3xl text-white font-bold mb-4">{{ $news->title }}</h1>

    <!-- Resim -->
    @if($news->image)
        <img src="{{ asset('storage/' . json_decode($news->image)[0]) }}" alt="{{ $news->title }}" class="w-full rounded-lg shadow-md mb-6">
    @endif

    <!-- Detaylar - prose ile destekli gösterim -->
    <div class="text-gray-300 dark:text-gray-400 mb-6 prose prose-invert max-w-none">
        {!! $news->details !!}
        </div>

    <!-- Geri Dön Butonu -->
    <a href="{{ route('news.index') }}" class="text-indigo-500 hover:text-indigo-700 font-semibold">Geri Dön</a>
</div>
