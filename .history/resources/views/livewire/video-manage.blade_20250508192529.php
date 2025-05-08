<div class="max-w-screen-xl mx-auto px-4 py-10 sm:px-6 lg:px-8 lg:py-14 overflow-hidden">
    <!-- Başlık -->
    <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
        <h2 class="text-4xl font-extrabold text-gray-800 dark:text-white">Video Haberler</h2>
        <p class="mt-3 text-lg text-gray-600 dark:text-neutral-400">Güncel video içerikli haberleri izleyin.</p>
    </div>

    <!-- Video Kartları -->
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($videos as $video)
        <div class="bg-white dark:bg-neutral-900 border border-gray-200 dark:border-neutral-700 rounded-lg shadow-xl overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <div class="relative w-full h-64 bg-gray-200 dark:bg-neutral-700">
                @php
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
                    <video controls class="absolute top-0 left-0 w-full h-full object-cover">
                        <source src="{{ $video->video_link }}" type="video/mp4">
                        Tarayıcınız video etiketini desteklemiyor.
                    </video>
                @endif
            </div>

            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">{{ $video->title }}</h3>
                <p class="text-sm text-gray-600 dark:text-neutral-400 mb-4">{{ \Illuminate\Support\Str::limit(strip_tags($video->details), 120) }}</p>

                <div class="flex items-center justify-between mt-4">
                    <a href="/news/{{ $video->slug }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500 font-medium">
                        Devamını Oku →
                    </a>

                    <div class="space-x-4">
                        <button wire:click="edit({{ $video->id }})" class="bg-blue-600 text-white p-2 rounded-lg text-sm hover:bg-blue-700 transition duration-200 ease-in-out">Düzenle</button>
                        <button wire:click="delete({{ $video->id }})" class="bg-red-600 text-white p-2 rounded-lg text-sm hover:bg-red-700 transition duration-200 ease-in-out">Sil</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Form: Yeni Video Ekleme / Düzenleme -->
    <div class="mt-10 bg-white dark:bg-neutral-900 p-8 rounded-xl shadow-lg transition duration-300 hover:shadow-2xl">
        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">{{ $editing ? 'Videoyu Düzenle' : 'Yeni Video Ekle' }}</h3>
        <form wire:submit.prevent="{{ $editing ? 'update' : 'create' }}">
            <div class="mt-6">
                <label class="block text-gray-700 dark:text-white">Başlık</label>
                <input wire:model="title" type="text" class="mt-1 block w-full border rounded-lg p-3 shadow-sm focus:ring-2 focus:ring-blue-500 dark:bg-neutral-800 dark:text-white dark:border-neutral-600" />
                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mt-6">
                <label class="block text-gray-700 dark:text-white">Detaylar</label>
                <textarea wire:model="details" class="mt-1 block w-full border rounded-lg p-3 shadow-sm focus:ring-2 focus:ring-blue-500 dark:bg-neutral-800 dark:text-white dark:border-neutral-600"></textarea>
                @error('details') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mt-6">
                <label class="block text-gray-700 dark:text-white">Video Linki</label>
                <input wire:model="video_link" type="url" class="mt-1 block w-full border rounded-lg p-3 shadow-sm focus:ring-2 focus:ring-blue-500 dark:bg-neutral-800 dark:text-white dark:border-neutral-600" />
                @error('video_link') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- İlgili Menüler -->
            <div class="mt-6">
                <label for="menu_ids" class="block text-sm font-medium text-gray-700 dark:text-gray-200">İlgili Menüler</label>
                <select id="menu_ids" wire:model="menu_ids" multiple
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-md shadow-sm">
                    @foreach($allMenus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
                @error('menu_ids') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mt-8">
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
