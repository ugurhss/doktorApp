<div>
    <form wire:submit.prevent="create">
        <div class="mb-4">
            <label for="title" class="font-semibold">Başlık</label>
            <input type="text" wire:model="title" id="title" class="border p-2 w-full rounded" />
            @error('title') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4" wire:ignore>
            <label for="details" class="font-semibold">Detaylar</label>
            <textarea id="details" class="hidden"></textarea>
        </div>

        <input type="hidden" wire:model="details" id="detailsInput">

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Kaydet
        </button>
    </form>

    @push('scripts')
        <script>
            document.addEventListener('livewire:load', function () {
                ClassicEditor
                    .create(document.querySelector('#details'))
                    .then(editor => {
                        editor.model.document.on('change:data', () => {
                            document.getElementById('detailsInput').value = editor.getData();
                            @this.set('details', editor.getData());
                        });
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
        </script>
    @endpush
</div>
