<div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <!-- Başlık -->
    <div class="max-w-3xl text-center mx-auto mb-12 lg:mb-16">
        <h2 class="text-4xl font-bold text-gray-900">Video Haberler</h2>
        <p class="mt-3 text-xl text-gray-600">Güncel video içerikli haberleri keşfedin</p>
        <div class="mt-4 w-20 h-1 bg-blue-600 mx-auto rounded-full"></div>
    </div>

    <!-- Video Grid -->
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @foreach ($videos as $video)
            <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-100 hover:border-blue-100">
                <!-- Video Container -->
                <div class="relative pt-[56.25%] overflow-hidden bg-gray-100">
                    @php
                        $link = $video->video_link;
                        $youtubeId = null;

                        if (Str::contains($link, 'youtube.com/watch?v=')) {
                            $youtubeId = Str::after($link, 'v=');
                            $youtubeId = Str::before($youtubeId, '&');
                        } elseif (Str::contains($link, 'youtu.be/')) {
                            $youtubeId = Str::afterLast($link, '/');
                            $youtubeId = Str::before($youtubeId, '?');
                        }
                    @endphp

                    @if ($youtubeId)
                        <!-- YouTube Video Thumbnail with Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <img src="https://img.youtube.com/vi/{{ $youtubeId }}/maxresdefault.jpg"
                                 alt="{{ $video->title }}"
                                 class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/30 transition-colors duration-300"></div>
                            <div class="relative z-10 w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center transform transition-all duration-300 group-hover:scale-110">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <a href="https://www.youtube.com/watch?v={{ $youtubeId }}"
                           class="absolute inset-0 z-20"
                           data-lity></a>
                    @else
                        <!-- Local Video Player -->
                        <video class="absolute inset-0 w-full h-full object-cover" poster="{{ $video->thumbnail ?? '' }}">
                            <source src="{{ $video->video_link }}" type="video/mp4">
                        </video>
                    @endif
                </div>

                <!-- Content -->
                <div class="p-5">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <span class="inline-flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            {{ $video->created_at->diffForHumans() }}
                        </span>
                        <span class="mx-2">•</span>
                        <span class="inline-flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            {{ rand(100, 999) }}K
                        </span>
                    </div>

                    <h3 class="text-xl font-semibold text-gray-900 mb-2 line-clamp-2">{{ $video->title }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">{{ \Illuminate\Support\Str::limit(strip_tags($video->details), 120) }}</p>

                    <div class="flex justify-between items-center">
                        <a href="/news/{{ $video->slug }}" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center transition-colors">
                            Devamını oku
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                        <button class="text-gray-400 hover:text-blue-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination or Load More -->
    <div class="mt-12 text-center">
        <button class="px-6 py-3 bg-white border border-gray-300 rounded-full text-gray-700 hover:bg-gray-50 hover:border-gray-400 transition-colors font-medium inline-flex items-center">
            Daha fazla yükle
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </button>
    </div>
</div>

<!-- Lity Lightbox CSS -->
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css" rel="stylesheet">
<!-- Lity Lightbox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js"></script> --}}
