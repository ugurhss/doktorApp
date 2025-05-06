<div class="max-w-3xl mx-auto p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Yeni Haber Oluştur</h2>

    <form wire:submit.prevent="create" enctype="multipart/form-data">
        <!-- Başlık -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Başlık</label>
            <input
                type="text"
                id="title"
                name="title"
                wire:model="title"
                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white dark:focus:ring-indigo-600"
                autocomplete="off"
            >
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Resim Yükleme -->
        <div class="mb-4">
            <label for="image" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Resim Yükle</label>
            <input
                type="file"
                id="image"
                name="image"
                wire:model="image"
                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white dark:focus:ring-indigo-600"
                autocomplete="off"
            >
            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Detaylar (Textarea) -->
        <div class="mb-4">
            <label for="details" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Detaylar</label>
            <textarea
                id="details"
                name="details"
                wire:model="details"
                rows="6"
                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white dark:focus:ring-indigo-600"
            ></textarea>
            @error('details') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Gönder Butonu -->
        <button
            type="submit"
            class="w-full bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 dark:bg-indigo-700 dark:hover:bg-indigo-800"
        >
            Kaydet
        </button>
    </form>

    @if (session()->has('message'))
        <div class="text-green-600 font-semibold mt-2">
            {{ session('message') }}
        </div>
    @endif
</div>
