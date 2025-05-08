<div class="max-w-screen-xl mx-auto px-4 py-10 sm:px-6 lg:px-8 lg:py-14 overflow-hidden">
    <!-- Başlık -->
    <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
        <h2 class="text-4xl font-semibold text-gray-800 dark:text-white">Video Haberler</h2>
        <p class="mt-3 text-lg text-gray-600 dark:text-neutral-400">Güncel video içerikli haberleri izleyin.</p>
    </div>

    <!-- Video Grid -->
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($videos as $video)
            <div class="bg-white dark:bg-neutral-900 border rounded-xl shadow-lg hover:shadow-2xl transition duration-300 ease-in-out p-6 overflow-hidden">
                <div class="aspect-w-16 aspect-h-9 mb-4">
                    @php
                        // Video linkini alıyoruz
                        $link = $video->video_link;
                        $youtubeId = null;

                        // Youtube linki kontrolü
                        if (Str::contains($link, 'youtube.com/watch?v=')) {
                            $youtubeId = Str::after($link, 'v=');
                            $youtubeId = Str::before($youtubeId, '&');
                        } elseif (Str::contains($link, 'youtu.be/')) {
                            $youtubeId = Str::afterLast($link, '/');
                            $youtubeId = Str::before($youtubeId, '?');
                        }
                    @endphp

                    @if ($youtubeId)
                        <!-- YouTube Embed Player -->
                        <div class="youtube-player" data-video-id="{{ $youtubeId }}"></div>
                    @else
                        <!-- Yerel MP4 Video -->
                        <video controls class="js-plyr w-full rounded-lg">
                            <source src="{{ $video->video_link }}" type="video/mp4">
                            Tarayıcınız video etiketini desteklemiyor.
                        </video>
                    @endif
                </div>

                <!-- Video Başlığı -->
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">{{ $video->title }}</h3>

                <!-- Video Detayları -->
                <p class="text-sm text-gray-600 dark:text-neutral-400 mb-3">{{ \Illuminate\Support\Str::limit(strip_tags($video->details), 120) }}</p>

                <!-- Video Detay Sayfasına Gitme Linki -->
                <a href="/news/{{ $video->slug }}" class="inline-block text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500 font-semibold">
                    Devamını Oku →
                </a>

                <!-- Düzenleme ve Silme Butonları -->
                <div class="mt-4 flex space-x-4">
                    <button wire:click="edit({{ $video->id }})" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-500">Düzenle</button>
                    <button wire:click="delete({{ $video->id }})" class="text-red-600 dark:text-red-400 hover:text-red-800 dark:hover:text-red-500">Sil</button>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Form: Yeni Video Ekleme / Düzenleme -->
    <div class="mt-8 bg-white dark:bg-neutral-900 p-6 rounded-xl shadow-lg">
        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">{{ $editing ? 'Videoyu Düzenle' : 'Yeni Video Ekle' }}</h3>
        <form wire:submit.prevent="{{ $editing ? 'update' : 'create' }}">
            <div class="mt-4">
                <label class="block text-gray-700 dark:text-white">Başlık</label>
                <input wire:model="title" type="text" class="mt-1 block w-full border rounded-lg p-3 shadow-sm focus:ring-2 focus:ring-blue-500 dark:bg-neutral-800 dark:text-white dark:border-neutral-600"/>
                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <label class="block text-gray-700 dark:text-white">Detaylar</label>
                <textarea wire:model="details" class="mt-1 block w-full border rounded-lg p-3 shadow-sm focus:ring-2 focus:ring-blue-500 dark:bg-neutral-800 dark:text-white dark:border-neutral-600"></textarea>
                @error('details') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <label class="block text-gray-700 dark:text-white">Video Linki</label>
                <input wire:model="video_link" type="url" class="mt-1 block w-full border rounded-lg p-3 shadow-sm focus:ring-2 focus:ring-blue-500 dark:bg-neutral-800 dark:text-white dark:border-neutral-600" />
                @error('video_link') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-200 ease-in-out">
                    {{ $editing ? 'Güncelle' : 'Ekle' }}
                </button>
            </div>
        </form>
    </div>

    <!-- Başarı mesajı -->
    @if (session()->has('message'))
    <div class="mt-6 text-green-600 font-semibold">
        {{ session('message') }} <!-- Başarı mesajını gösteriyoruz -->
    </div>
    @endif
</div>
