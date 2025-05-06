<div class="max-w-4xl mx-auto p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-4 rounded mb-6">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save">
        <!-- Başlık Alanı -->
        <div class="mb-6">
            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Başlık</label>
            <input type="text" wire:model="title" id="title" class="mt-1 p-3 w-full rounded-md border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Başlık girin" />
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Detaylar Alanı -->
        <div class="mb-6">
            <label for="details" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Detaylar</label>
            <textarea wire:model="details" id="details" class="mt-1 p-3 w-full h-32 rounded-md border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Detaylar girin"></textarea>
            @error('details') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Menü Seçimi -->
        <div class="mb-6">
            <label for="menus" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Menüler</label>
            <select wire:model="menus" id="menus" class="mt-1 p-3 w-full rounded-md border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" multiple>
                @foreach($menus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                @endforeach
            </select>
            @error('menus') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Resim Seçimi -->
        <div class="mb-6">
            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Resim</label>
            <input type="file" wire:model="image" id="image" class="mt-1 p-3 w-full rounded-md border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" />
            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Gönderme Butonu -->
        <button type="submit" class="w-full p-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-indigo-700 dark:hover:bg-indigo-800">
            Kaydet
        </button>
    </form>
</div>

