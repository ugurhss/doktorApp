<div class="max-w-4xl mx-auto p-6 space-y-6">

    <h2 class="text-3xl font-bold text-gray-800 dark:text-white">📰 News Yönetimi</h2>

    @if (session()->has('message'))
        <div class="p-4 text-sm text-green-800 rounded-lg bg-green-100 dark:bg-green-800 dark:text-green-200">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'store' }}" class="space-y-4">
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Başlık</label>
            <input type="text" wire:model="title" placeholder="Haber başlığı"
                class="py-2 px-3 block w-full border border-gray-300 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white">
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Detay</label>
            <textarea wire:model="details" rows="4" placeholder="Haber detayı"
                class="py-2 px-3 block w-full border border-gray-300 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white"></textarea>
        </div>

        <button type="submit"
            class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            {{ $updateMode ? 'Güncelle' : 'Oluştur' }}
        </button>
    </form>

    <hr class="border-gray-200 dark:border-gray-700">

    <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-gray-200 dark:border-gray-700 rounded-md">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">#</th>
                    <th scope="col" class="px-6 py-3">Başlık</th>
                    <th scope="col" class="px-6 py-3">Detay</th>
                    <th scope="col" class="px-6 py-3 text-right">İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach($newsList as $news)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">{{ $news->id }}</td>
                    <td class="px-6 py-4">{{ $news->title }}</td>
                    <td class="px-6 py-4">{{ Str::limit($news->details, 50) }}</td>
                    <td class="px-6 py-4 text-right space-x-2">
                        <button wire:click="edit({{ $news->id }})"
                            class="inline-flex items-center px-3 py-1.5 bg-yellow-400 text-white text-xs font-medium rounded hover:bg-yellow-500">
                            Düzenle
                        </button>
                        <button wire:click="delete({{ $news->id }})"
                            class="inline-flex items-center px-3 py-1.5 bg-red-500 text-white text-xs font-medium rounded hover:bg-red-600">
                            Sil
                        </button>
                    </td>
                </tr>
                @endforeach

                @if($newsList->isEmpty())
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                        Kayıt bulunamadı.
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
