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
                <!-- Plyr Video -->
                <div class="aspect-w-16 aspect-h-9 mb-4">
                    <video class="js-player w-full rounded-md" controls>
                        <source src="{{ $video->video_link }}" type="video/mp4">
                        Tarayıcınız video etiketini desteklemiyor.
                    </video>
                </div>

                <!-- Başlık ve içerik -->
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-1 break-words">{{ $video->title }}</h3>
                <p class="text-sm text-gray-600 dark:text-neutral-400 break-words">{{ Str::limit(strip_tags($video->details), 100) }}</p>

                <!-- Link -->
                <a href="/news/{{ $video->slug }}" class="inline-block mt-3 text-blue-600 hover:underline dark:text-blue-400">
                    Devamını Oku →
                </a>
            </div>
        @endforeach
    </div>
</div>

<!-- Plyr CDN -->
@push('styles')
<link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
@endpush

@push('scripts')
<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
<script>
    document.addEventListener('livewire:load', () => {
        Plyr.setup('.js-player');
    });
</script>
@endpush
