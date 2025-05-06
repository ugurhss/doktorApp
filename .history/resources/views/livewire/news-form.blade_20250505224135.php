<div class="max-w-6xl mx-auto p-6 space-y-6">
    <h2 class="text-3xl font-bold text-gray-800 dark:text-white">📰 Haber Yönetimi</h2>

    @if (session()->has('message'))
        <div class="p-4 text-sm text-green-800 rounded-lg bg-green-100 dark:bg-green-800 dark:text-green-200">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'store' }}" class="space-y-4">

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">Başlık</label>
            <input type="text" wire:model="title"
                   class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded p-2">
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div wire:ignore>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">Detay</label>
            <!-- Quill Editör Alanı -->
            <div id="editor" class="bg-white dark:bg-gray-800"></div>
        </div>

        <script>
            document.addEventListener('livewire:load', function () {
                var quill = new Quill('#editor', {
                    theme: 'snow',
                    modules: {
                        toolbar: [
                            [{ 'header': '1' }, { 'header': '2' }, { 'font': [] }],
                            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                            ['bold', 'italic', 'underline'],
                            ['link'],
                            [{ 'align': [] }],
                            ['image']
                        ]
                    }
                });

                quill.on('text-change', function () {
                    // Livewire ile Quill içeriğini güncelleme
                    @this.set('details', quill.root.innerHTML);
                });
            });
        </script>

        @error('details') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">Görseller</label>
            <input type="file" wire:model="image" multiple
                   class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
            @error('image.*') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        @if ($image)
            <div class="flex flex-wrap gap-2">
                @foreach ($image as $img)
                    <img src="{{ $img->temporaryUrl() }}" class="w-24 h-24 object-cover rounded border">
                @endforeach
            </div>
        @endif

        <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">
            {{ $updateMode ? 'Güncelle' : 'Oluştur' }}
        </button>
    </form>

    <hr class="border-gray-200 dark:border-gray-700">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border">
        <thead class="text-xs bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
        <tr>
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2">Başlık</th>
            <th class="px-4 py-2">Detay</th>
            <th class="px-4 py-2 text-right">İşlem</th>
        </tr>
        </thead>
        <tbody>
        @forelse($newsList as $news)
            <tr class="bg-white dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-4 py-2">{{ $news->id }}</td>
                <td class="px-4 py-2">{{ $news->title }}</td>
                <td class="px-4 py-2">{!! Str::limit($news->details, 50) !!}</td>
                <td class="px-4 py-2 text-right space-x-2">
                    <button wire:click="edit({{ $news->id }})"
                            class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Düzenle</button>
                    <button wire:click="delete({{ $news->id }})"
                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Sil</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center py-4">Kayıt yok</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
<script>
    var quill = new Quill('#editor', {
    theme: 'snow',
    modules: {
        toolbar: [
            [{ 'header': '1' }, { 'header': '2' }, { 'font': [] }],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            ['bold', 'italic', 'underline'],
            ['link'],
            [{ 'align': [] }],
            ['image']
        ]
    }
});

</script>
