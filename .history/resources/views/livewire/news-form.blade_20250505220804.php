<div class="p-6 bg-white rounded-lg shadow-md">

    @if (session()->has('message'))
        <div class="mb-4 p-4 text-green-700 bg-green-100 rounded">
            {{ session('message') }}
        </div>
    @endif

    <h2 class="text-xl font-semibold mb-4">{{ $newsId ? 'Haberi Düzenle' : 'Yeni Haber Ekle' }}</h2>

    <form wire:submit.prevent="storeOrUpdate" class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">Başlık</label>
            <input type="text" wire:model="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Başlık">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Detaylar</label>
            <textarea wire:model="details" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Detaylar"></textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Görsel URL</label>
            <input type="text" wire:model="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Görsel URL">
        </div>
        <div class="flex space-x-2">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                {{ $newsId ? 'Güncelle' : 'Ekle' }}
            </button>
            @if($newsId)
                <button type="button" wire:click="resetForm" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">
                    İptal
                </button>
            @endif
        </div>
    </form>

    <hr class="my-6">

    <h3 class="text-lg font-semibold mb-4">Haber Listesi</h3>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 border border-gray-300 rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Başlık</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Detay</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Görsel</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">İşlemler</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($news as $n)
                    <tr>
                        <td class="px-4 py-2">{{ $n->title }}</td>
                        <td class="px-4 py-2">{{ $n->details }}</td>
                        <td class="px-4 py-2">
                            @if(!empty($n->image[0]))
                                <img src="{{ $n->image[0] }}" alt="Görsel" class="w-20 h-auto rounded">
                            @endif
                        </td>
                        <td class="px-4 py-2 space-x-2">
                            <button wire:click="edit({{ $n->id }})" class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                Düzenle
                            </button>
                            <button wire:click="delete({{ $n->id }})" onclick="return confirm('Silinsin mi?')" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                Sil
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
