<div class="max-w-3xl mx-auto p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Yeni Haber Oluştur</h2>

    <form wire:submit.prevent="create" enctype="multipart/form-data">
        <!-- Başlık -->
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Başlık</label>
            <input type="text" wire:model="title" class="w-full px-4 py-2 border rounded-md shadow-sm dark:bg-gray-700 dark:text-white">
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Resim -->
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Resim Yükle</label>
            <input type="file" wire:model="image" class="w-full px-4 py-2 border rounded-md shadow-sm dark:bg-gray-700 dark:text-white">
            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Trix Editör -->
        <div class="mb-4" wire:ignore>
            <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Detaylar</label>
            <input id="details" type="hidden" name="details" wire:model="details">
            <trix-editor input="details" class="trix-content dark:bg-gray-700 dark:text-white dark:border-gray-700"></trix-editor>
        </div>

        <!-- Submit -->
        <button type="submit" class="w-full bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
            Kaydet
        </button>
    </form>

    @if (session()->has('message'))
        <div class="text-green-600 font-semibold mt-2">
            {{ session('message') }}
        </div>
    @endif
</div>

@push('scripts')
<script>
    document.addEventListener("trix-change", function () {
        @this.set('details', document.querySelector("#details").value);
    });
</script>
@endpush
