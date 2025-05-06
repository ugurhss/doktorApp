<div class="max-w-5xl mx-auto p-6 bg-white rounded-xl shadow-md space-y-6">

    @if (session()->has('message'))
        <div class="text-green-600 font-medium">{{ session('message') }}</div>
    @endif

    <h2 class="text-xl font-semibold text-gray-800">{{ $newsId ? 'Haberi Düzenle' : 'Yeni Haber Ekle' }}</h2>

    <form wire:submit.prevent="storeOrUpdate" class="space-y-4">
        <input type="text" wire:model="title" placeholder="Başlık"
               class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

        <textarea wire:model="details" placeholder="Detaylar"
                  class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>

        <input type="text" wire:model="image" placeholder="Görsel URL"
               class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

        <div class="flex items-center gap-2">
            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                {{ $newsId ? 'Güncelle' : 'Ekle' }}
            </button>

            @if($newsId)
                <button type="button" wire:click="resetForm"
                        class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-400 transition">
                    İptal
                </button>
            @endif
        </div>
    </form>

    <hr>

    <h3 class="text-lg font-semibold text-gray-700">Haber Listesi</h3>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-700 border border-gray-200 rounded-md">
            <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                <tr>
                    <th class="px-4 py-2">Başlık</th>
                    <th class="px-4 py-2">Detay</th>
                    <th class="px-4 py-2">Görsel</th>
                    <th class="px-4 py-2">İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $n)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $n->title }}</td>
                        <td class="px-4 py-2">{{ $n->details }}</td>
                        <td class="px-4 py-2">
                            @if(!empty($n->image[0]))
                                <img src="{{ $n->image[0] }}" alt="Haber Görseli" class="w-20 rounded">
                            @endif
                        </td>
                        <td class="px-4 py-2 space-x-2">
                            <button wire:click="edit({{ $n->id }})"
                                    class="text-indigo-600 hover:text-indigo-800 font-medium">Düzenle</button>
                            <button wire:click="delete({{ $n->id }})"
                                    onclick="return confirm('Silinsin mi?')"
                                    class="text-red-600 hover:text-red-800 font-medium">Sil</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
