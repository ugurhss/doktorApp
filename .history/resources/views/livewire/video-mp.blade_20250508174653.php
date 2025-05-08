<div class="max-w-screen-xl mx-auto px-4 py-10 sm:px-6 lg:px-8 lg:py-14 overflow-hidden">
    <!-- Başlık -->
    <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
        <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">Video Haberler</h2>
        <p class="mt-2 text-lg text-gray-600 dark:text-neutral-400">Güncel video içerikli haberleri izleyin.</p>
    </div>

    <!-- Video Grid -->
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($videos as $video)
            <div class="bg-white dark:bg-neutral-900 border rounded-xl shadow-md p-4 overflow-hidden">
                <div class="aspect-w-16 aspect-h-9 mb-4">
                    @php
                        $link = $video->video_link;
                        $youtubeId = null;

                        if (Str::contains($link, 'youtube.com/watch?v=')) {
                            $youtubeId = Str::after($link, 'v=');
                        } elseif (Str::contains($link, 'youtu.be/')) {
                            $youtubeId = Str::afterLast($link, '/');
                        }
                    @endphp

                    @if ($youtubeId)
                        <video
                            id="video_{{ $video->id }}"
                            class="video-js vjs-default-skin w-full h-full"
                            controls
                            preload="auto"
                            data-setup='{
                                "techOrder": ["youtube"],
                                "sources": [{
                                    "type": "video/youtube",
                                    "src": "https://www.youtube.com/watch?v={{ $youtubeId }}"
                                }]
                            }'>
                        </video>
                    @else
                        <video class="video-js vjs-default-skin w-full h-full" controls>
                            <source src="{{ $video->video_link }}" type="video/mp4">
                            Tarayıcınız video etiketini desteklemiyor.
                        </video>
                    @endif
                </div>



                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-1 break-words">{{ $video->title }}</h3>
                <p class="text-sm text-gray-600 dark:text-neutral-400 break-words">{{ \Illuminate\Support\Str::limit(strip_tags($video->details), 100) }}</p>
                <a href="/news/{{ $video->slug }}" class="inline-block mt-3 text-blue-600 hover:underline dark:text-blue-400">
                    Devamını Oku →
                </a>
            </div>
        @endforeach
    </div>
</div>
