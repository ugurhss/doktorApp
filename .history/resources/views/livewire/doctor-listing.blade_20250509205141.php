<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    @if (session()->has('message'))
        <div class="mb-6 bg-teal-500/10 border border-teal-500 text-teal-500 rounded-lg p-4 dark:bg-teal-900/30 dark:border-teal-700" role="alert">
          <span class="font-bold">Bilgi</span> {{ session('message') }}
        </div>
    @endif

    <!-- Card -->
    <div class="flex flex-col bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700 overflow-hidden">
        <!-- Header -->
        <div class="px-6 py-4 flex flex-col md:flex-row md:justify-between md:items-center gap-4 border-b border-gray-200 dark:border-neutral-700">
            <div>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                    Takım Üyeleri
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                    Sistemde kayıtlı tüm takım üyeleri
                </p>
            </div>

            <div class="flex-shrink-0">
                <a class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none py-2 px-3" href="/admin/doctor/create">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"/><path d="M12 5v14"/>
                    </svg>
                    Yeni Üye Ekle
                </a>
            </div>
        </div>
        <!-- End Header -->

        <!-- Table Container -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                <thead class="bg-gray-50 dark:bg-neutral-800">
                    <tr>
                        <th scope="col" class="ps-6 pe-3 py-3 text-start">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                #
                            </span>
                        </th>
                        <th scope="col" class="px-3 py-3 text-start">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Üye Bilgileri
                            </span>
                        </th>
                        <th scope="col" class="px-3 py-3 text-start">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Uzmanlık
                            </span>
                        </th>
                        <th scope="col" class="px-3 py-3 text-start">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Kurum
                            </span>
                        </th>
                        <th scope="col" class="px-3 py-3 text-start">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Deneyim
                            </span>
                        </th>
                        <th scope="col" class="px-3 py-3 text-start">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Durum
                            </span>
                        </th>
                        <th scope="col" class="pe-6 ps-3 py-3 text-end"></th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                    @forelse ($doctors as $item)
                    <tr class="hover:bg-gray-50 dark:hover:bg-neutral-800 transition-colors">
                        <!-- Serial Number -->
                        <td class="size-px whitespace-nowrap ps-6 pe-3 py-4">
                            <span class="text-sm text-gray-800 dark:text-neutral-200">{{ $loop->iteration }}</span>
                        </td>

                        <!-- Member Info -->
                        <td class="size-px whitespace-nowrap px-3 py-4">
                            <div class="flex items-center gap-x-3">
                                <div class="flex-shrink-0 size-10 rounded-full bg-gray-100 dark:bg-neutral-700 flex items-center justify-center">
                                    <span class="font-medium text-gray-600 dark:text-neutral-300 uppercase">
                                        {{ substr($item->doctorUser->name, 0, 1) }}
                                    </span>
                                </div>
                                <div>
                                    <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $item->doctorUser->name }}</span>
                                    <span class="block text-sm text-gray-600 dark:text-neutral-400">{{ $item->doctorUser->email }}</span>
                                    <span class="block text-xs text-gray-500 dark:text-neutral-500 mt-1 line-clamp-1">{{ $item->bio }}</span>
                                </div>
                            </div>
                        </td>

                        <!-- Speciality -->
                        <td class="size-px whitespace-nowrap px-3 py-4">
                            <span class="text-sm text-gray-800 dark:text-neutral-200">{{ $item->speciality->speciality_name ?? '-' }}</span>
                        </td>

                        <!-- Hospital -->
                        <td class="size-px whitespace-nowrap px-3 py-4">
                            <span class="text-sm text-gray-800 dark:text-neutral-200">{{ $item->hospital_name }}</span>
                        </td>

                        <!-- Experience -->
                        <td class="size-px whitespace-nowrap px-3 py-4">
                            <div class="flex items-center gap-x-2">
                                <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $item->experience }}</span>
                                <span class="text-xs text-gray-500 dark:text-neutral-500">yıl</span>
                            </div>
                        </td>

                        <!-- Status -->
                        <td class="size-px whitespace-nowrap px-3 py-4">
                            <span class="inline-flex items-center gap-x-1.5 py-1 px-2 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/20 dark:text-green-500">
                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                Aktif
                            </span>
                        </td>

                        <!-- Actions -->
                        <td class="size-px whitespace-nowrap pe-6 ps-3 py-4">
                            <div class="flex justify-end gap-x-2">
                                <a class="inline-flex items-center gap-x-1.5 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400" href="/admin/doctor/edit/{{$item->id}}">
                                    Düzenle
                                </a>
                                <button wire:confirm.prompt="Bu üyeyi silmek istediğinize emin misiniz?\n\nSilme işlemini onaylamak için 'SİL' yazın|SİL"
                                        wire:click="delete({{$item->id}})"
                                        class="inline-flex items-center gap-x-1.5 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 disabled:opacity-50 disabled:pointer-events-none dark:text-red-500 dark:hover:text-red-400">
                                    Sil
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-center">
                            <div class="flex flex-col items-center justify-center py-8 text-gray-500 dark:text-neutral-500">
                                <svg class="w-12 h-12 mb-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                </svg>
                                <span class="font-medium">Kayıtlı takım üyesi bulunamadı</span>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- End Table Container -->
    </div>
    <!-- End Card -->
</div>
<!-- End Table Section -->
