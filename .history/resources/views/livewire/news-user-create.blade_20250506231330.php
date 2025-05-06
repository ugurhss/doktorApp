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

        <!-- Gönder Butonu -->

      <button
            type="submit"
            onclick="location.href='/news'; location.reload();"
            class="w-full bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 dark:bg-indigo-700 dark:hover:bg-indigo-800"
        >
            Kaydet
        </button></a>
    </form>

    @if (session()->has('message'))
        <div class="text-green-600 font-semibold mt-2">
            {{ session('message') }}
        </div>
    @endif
</div>
