<div class="container mt-6">
    <h2 class="text-3xl font-semibold text-center mb-6">Haberler</h2>

    @if($news->isEmpty())
        <div class="text-center text-lg text-gray-500">
            Haber bulunamadı.
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($news as $new)
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <!-- Görsel kontrolü -->
                    <img src="{{ $new->image_url ?: 'https://via.placeholder.com/300x200?text=No+Image' }}" class="w-full h-48 object-cover" alt="{{ $new->title }}">

                    <div class="px-6 py-4">
                        <h5 class="font-semibold text-xl text-gray-800 mb-3">{{ $new->title }}</h5>
                        <p class="text-gray-600 text-sm">{{ Str::limit($new->content, 100) }}</p>
                    </div>

                    <div class="px-6 pt-4 pb-2">
                        <span class="text-xs text-gray-500">{{ $new->created_at->format('d-m-Y H:i') }}</span>
                    </div>

                    <div class="px-6 py-4">
                        {{-- <a href="{{ route('news.show', $new->id) }}" class="inline-block px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Devamını Oku</a> --}}
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
