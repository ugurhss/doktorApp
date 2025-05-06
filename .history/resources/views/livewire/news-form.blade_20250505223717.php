<div class="max-w-6xl mx-auto px-4 py-6 space-y-6">

    <div class="bg-white dark:bg-gray-900 rounded-xl shadow p-6 space-y-4">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">📝 Yeni Haber {{ $updateMode ? 'Güncelle' : 'Ekle' }}</h2>

        @if (session()->has('message'))
            <div class="p-4 text-sm text-green-800 rounded-lg bg-green-100 dark:bg-green-800 dark:text-green-200">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="{{ $updateMode ? 'update' : 'store' }}" class="space-y-4">

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Başlık</label>
                <input type="text" wire:model="title"
                       class="w-full rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white p-2 focus:ring-2 focus:ring-blue-500">
                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div wire:ignore>
                <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">İçerik</label>
                <input id="x" type="hidden" value="{{ $details }}">
                <trix-editor input="x" class="trix-content dark:bg-gray-800 dark:text-white"></trix-editor>
            </div>
            <script>
                document.addEventListener("trix-change", function (e) {
                    @this.set('details', e.target.innerHTML);
                });
            </script>
            @error('details') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Görsel(ler)</label>
                <input type="file" wire:model="image" multiple
                       class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                @error('image.*') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            @if ($image)
                <div class="flex flex-wrap gap-3 mt-2">
                    @foreach ($image as $img)
                        <img src="{{ $img->temporaryUrl() }}" class="w-24 h-24 object-cover rounded shadow">
                    @endforeach
                </div>
            @endif

            <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition">
                {{ $updateMode ? 'Güncelle' : 'Oluştur' }}
            </button>
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($newsList as $news)
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 space-y-2">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $news->title }}</h3>

                <div class="text-sm text-gray-600 dark:text-gray-300 line-clamp-3">
                    {!! Str::limit(strip_tags($news->details), 100) !!}
                </div>

                @if($news->image)
                    <div class="flex flex-wrap gap-2 mt-2">
                        @foreach(json_decode($news->image) as $img)
                            <img src="{{ asset('storage/' . $img) }}" class="w-16 h-16 object-cover rounded">
                        @endforeach
                    </div>
                @endif

                <div class="flex justify-end space-x-2 pt-2">
                    <button wire:click="edit({{ $news->id }})"
                            class="px-3 py-1 bg-yellow-500 hover:bg-yellow-600 text-white text-xs font-medium rounded">Düzenle</button>
                    <button wire:click="delete({{ $news->id }})"
                            class="px-3 py-1 bg-red-600 hover:bg-red-700 text-white text-xs font-medium rounded">Sil</button>
                </div>
            </div>
        @empty
            <p class="text-center col-span-full text-gray-600 dark:text-gray-400">Henüz haber eklenmedi.</p>
        @endforelse
    </div>
</div>
