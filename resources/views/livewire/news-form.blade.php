<div class="max-w-4xl mx-auto p-6 space-y-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
    <!-- Başlık -->
    <h2 class="text-3xl font-bold text-gray-800 dark:text-white">📰 Haber Yönetimi</h2>

    @if (session()->has('message'))
        <div class="p-4 text-sm text-green-800 rounded-lg bg-green-100 dark:bg-green-800 dark:text-green-200">
            {{ session('message') }}
        </div>
    @endif

    <!-- Form Başlangıcı -->
    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'store' }}" class="space-y-6">
        <!-- Başlık -->
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Başlık</label>
            <input type="text" id="title" wire:model="title"
                   class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-600">
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Menü Seçimi -->
        <div class="mb-4">
            <label for="menu_ids" class="block text-sm font-medium text-gray-700 dark:text-gray-200">İlgili Menüler</label>
            <select id="menu_ids" wire:model="menu_ids" multiple
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-md shadow-sm">
                @foreach($allMenus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                @endforeach
            </select>
            @error('menu_ids') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Trix Editörü -->
        <div wire:ignore class="mb-4">
            <label for="details" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Detay</label>
            <input id="x" type="hidden" value="{{ $details }}">
            <trix-editor input="x" class="w-full rounded-md shadow-sm dark:bg-gray-700 dark:text-white dark:border-gray-700"></trix-editor>
        </div>
        <script>
            document.addEventListener('trix-change', function (e) {
                @this.set('details', e.target.innerHTML);
            });
        </script>
        @error('details') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <!-- Resim Yükleme -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Görseller</label>
            <input type="file" wire:model="image" multiple
                   class="w-full text-sm text-gray-900 border border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
            @error('image.*') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Resim Önizleme -->
        @if ($image)
            <div class="flex flex-wrap gap-4">
                @foreach ($image as $img)
                    <img src="{{ $img->temporaryUrl() }}" class="w-24 h-24 object-cover rounded-md border">
                @endforeach
            </div>
        @endif

        <!-- Gönder Butonu -->
        <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md dark:bg-blue-700 dark:hover:bg-blue-600 focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-600">
            {{ $updateMode ? 'Güncelle' : 'Oluştur' }}
        </button>
    </form>

    <hr class="border-gray-200 dark:border-gray-700">

    <!-- Haber Listesi Tablosu -->
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border dark:border-gray-700">
        <thead class="text-xs bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Başlık</th>
                <th class="px-4 py-2">Detay</th>
                <th class="px-4 py-2">Menüler</th>
                <th class="px-4 py-2 text-right">İşlem</th>
            </tr>
        </thead>
        <tbody>
            @forelse($newsList as $news)
                <tr class="bg-white dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-4 py-2">{{ $news->id }}</td>
                    <td class="px-4 py-2">{{ $news->title }}</td>
                    <td class="px-4 py-2">{!! Str::limit($news->details, 50) !!}</td>
                    <td class="px-4 py-2">
                        {{ $news->menus->pluck('name')->implode(', ') }}
                    </td>
                    <td class="px-4 py-2 text-right space-x-2">
                        <button wire:click="edit({{ $news->id }})"
                                class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Düzenle</button>
                        <button wire:click="delete({{ $news->id }})"
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Sil</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-4">Kayıt yok</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
