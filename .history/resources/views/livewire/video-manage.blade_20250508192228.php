<div class="max-w-screen-xl mx-auto px-4 py-10 sm:px-6 lg:px-8 lg:py-14 overflow-hidden">
    <!-- Başlık -->
    <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
        <h2 class="text-4xl font-semibold text-gray-800 dark:text-white">Video Haberler</h2>
        <p class="mt-3 text-lg text-gray-600 dark:text-neutral-400">Güncel video içerikli haberleri izleyin.</p>
    </div>

    <!-- Video Tablosu -->
    <div class="overflow-x-auto bg-white dark:bg-neutral-900 p-4 rounded-lg shadow-md">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="text-left bg-blue-600 text-white">
                    <th class="px-4 py-3">Başlık</th>
                    <th class="px-4 py-3">Açıklama</th>
                    <th class="px-4 py-3">Video</th>
                    <th class="px-4 py-3 text-center">İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $video)
                <tr class="border-t border-gray-200 dark:border-neutral-700">
                    <td class="px-4 py-3 text-gray-800 dark:text-white">{{ $video->title }}</td>
                    <td class="px-4 py-3 text-sm text-gray-600 dark:text-neutral-400">{{ \Illuminate\Support\Str::limit(strip_tags($video->details), 100) }}</td>
                    <td class="px-4 py-3">
                        @php
                            $link = $video->video_link;
                            $youtubeId = null;

                            // YouTube linki kontrolü
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
                            <div class="aspect-w-16 aspect-h-9 mb-4">
                                <div class="youtube-player" data-video-id="{{ $youtubeId }}"></div>
                            </div>
                        @else
                            <!-- Yerel MP4 Video -->
                            <video controls class="w-full rounded-lg">
                                <source src="{{ $video->video_link }}" type="video/mp4">
                                Tarayıcınız video etiketini desteklemiyor.
                            </video>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex justify-center space-x-2">
                            <button wire:click="edit({{ $video->id }})" class="bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700">Düzenle</button>
                            <button wire:click="delete({{ $video->id }})" class="bg-red-600 text-white p-2 rounded-lg hover:bg-red-700">Sil</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
