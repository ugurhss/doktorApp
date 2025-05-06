<div>
    <form wire:submit.prevent="create">
        <div>
            <label>Başlık</label>
            <input type="text" wire:model="title" class="border rounded p-2 w-full">
        </div>

        <div wire:ignore class="mt-4">
            <label>Detaylar</label>
            <div id="quillEditor" style="min-height: 150px;" class="bg-white"></div>
        </div>

        <input type="hidden" wire:model="details" id="detailsInput">

        <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Kaydet
        </button>
    </form>

    @push('scripts')
        <script>
            document.addEventListener('livewire:load', function () {
                var quill = new Quill('#quillEditor', {
                    theme: 'snow'
                });

                quill.on('text-change', function () {
                    document.getElementById('detailsInput').value = quill.root.innerHTML;
                    @this.set('details', quill.root.innerHTML);
                });
            });
        </script>
    @endpush
</div>
