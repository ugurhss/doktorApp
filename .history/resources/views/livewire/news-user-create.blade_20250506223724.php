<!-- Quill CSS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

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

        <!-- Detaylar (Quill) -->
        <div class="mb-4" wire:ignore>
            <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Detaylar</label>
            <div id="quill-editor" class="bg-white dark:bg-gray-700 dark:text-white h-40"></div>
            <input type="hidden" id="details" wire:model="details">
        </div>
        @error('details') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

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

<!-- Quill JS -->
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script>
    document.addEventListener('livewire:load', function () {
        const quill = new Quill('#quill-editor', {
            theme: 'snow',
            placeholder: 'Detayları buraya yazın...',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline'],
                    [{ 'header': [1, 2, false] }],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    ['link'],
                    ['clean']
                ]
            }
        });

        quill.on('text-change', function () {
            document.getElementById('details').value = quill.root.innerHTML;
            @this.set('details', quill.root.innerHTML);
        });

        // Detay daha önceden varsa editor'e yükle
        const existingContent = @this.get('details') ?? '';
        quill.root.innerHTML = existingContent;
    });
</script>
