<div class="max-w-4xl mx-auto p-6 bg-gray-900 dark:bg-gray-900 rounded-lg shadow-lg">
    <h1 class="text-2xl text-white mb-6">Haberler</h1>
    <ul class="space-y-4">
        @foreach($news as $newsItem)
            <li class="bg-gray-800 dark:bg-gray-800 p-4 rounded-lg shadow-md">
                <a href="{{ route('news.show', $newsItem->slug) }}" class="text-lg font-bold text-yellow-500 hover:text-yellow-400">
                    {{ $newsItem->title }}
                </a>
                <p class="text-gray-300 dark:text-gray-400 mt-2">{{ Str::limit($newsItem->details, 150) }}</p>
            </li>
        @endforeach
    </ul>
</div>
