<div class="max-w-3xl mx-auto p-6">
    <h1 class="text-3xl font-bold text-yellow-400 mb-4">{{ $news->title }}</h1>

    @if ($news->image)
        <img src="{{ asset('storage/' . $news->image[0]) }}" alt="{{ $news->title }}" class="rounded mb-4">
    @endif

    <div class="text-gray-300 leading-relaxed">
        {!! nl2br(e($news->details)) !!}
    </div>

    <a href="{{ route('haberler') }}" class="mt-6 inline-block text-indigo-400 hover:underline">← Tüm Haberlere Dön</a>
</div>
