<div class="max-w-screen-xl mx-auto px-4 py-10 sm:px-6 lg:px-8 lg:py-14 overflow-hidden">
    <!-- Başlık -->
    <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
        <h2 class="text-4xl font-extrabold text-gray-800 dark:text-white">Video Haberler</h2>
        <p class="mt-3 text-lg text-gray-600 dark:text-neutral-400">Güncel video içerikli haberleri izleyin.</p>
    </div>

    <!-- Video Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full table-auto border-collapse text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="bg-gray-100 dark:bg-neutral-800">
                <tr>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Başlık</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Video Linki</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Detaylar</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">İşlemler</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @foreach ($videos as $video)
                <tr class="hover:bg-gray-50 dark:hover:bg-neutral-800">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-white">
                        {{ $video->title }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-neutral-400">
                        <a href="{{ $video->video_link }}" target="_blank" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500">
                            İzle
                        </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-neutral-400">
                        {{ \Illuminate\Support\Str::limit(strip_tags($video->details), 100) }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-neutral-400">
                        <div class="space-x-2">
                            <button wire:click="edit({{ $video->id }})" class="bg-blue-600 text-white p-2 rounded-lg text-sm hover:bg-blue-700 transition duration-200 ease-in-out">Düzenle</button>
                            <button wire:click="delete({{ $video->id }})" class="bg-red-600 text-white p-2 rounded-lg text-sm hover:bg-red-700 transition duration-200 ease-in-out">Sil</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Success Message -->
    @if (session()->has('message'))
    <div class="mt-6 text-green-600 font-semibold">
        {{ session('message') }}
    </div>
    @endif
</div>
