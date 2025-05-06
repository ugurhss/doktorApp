<div>
    <form wire:submit.prevent="create">
        <div>
            <label for="title" class="font-bold">Başlık</label>
            <input type="text" id="title" wire:model="title" class="w-full border rounded p-2">
            @error('title') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Trix Editörü -->
        <div wire:ignore>
            <label for="details" class="font-bold">Detaylar</label>
            <trix-editor input="details"></trix-editor>
        </div>

        <input type="hidden" id="details" wire:model="details">

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Kaydet
        </button>
    </form>

    @if (session()->has('message'))
        <div class="text-green-600 font-semibold mt-2">
            {{ session('message') }}
        </div>
    @endif
</div>
