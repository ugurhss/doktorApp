<div class="max-w-5xl mx-auto p-4">
    <h1 class="text-2xl font-bold text-white mb-6">Haberler</h1>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($newsList as $news)
        <a href="{{ route('haber.detay', ['slug' => $news->slug]) }}">
            <h2 class="text-xl font-semibold text-yellow-400 mb-2">{{ $news->title }}</h2>
                <p class="text-gray-300 text-sm">
                    {{ \Str::limit($news->details, 100) }}
                </p>
            </a>
        @endforeach
    </div>
</div>
