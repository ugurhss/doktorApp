<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-6 sm:px-6 lg:px-8 lg:py-8 mx-auto">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Son Randevular</h2>
        <p class="text-sm text-gray-600 dark:text-neutral-400">En son oluşturulan randevu kayıtları</p>
    </div>

    <!-- Card -->
    <div class="flex flex-col bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700 overflow-hidden">
        <!-- Table Container -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                <thead class="bg-gray-50 dark:bg-neutral-800">
                    <tr>
                        @if (auth()->user() && auth()->user()->role != 0)
                        <th scope="col" class="ps-6 pe-3 py-3 text-start">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Hasta
                            </span>
                        </th>
                        @endif

                        @if (auth()->user() && auth()->user()->role != 1)
                        <th scope="col" class="px-3 py-3 text-start">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Doktor
                            </span>
                        </th>
                        @endif

                        <th scope="col" class="px-3 py-3 text-start">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Tarih
                            </span>
                        </th>

                        <th scope="col" class="px-3 py-3 text-start">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Saat
                            </span>
                        </th>

                        <th scope="col" class="pe-6 ps-3 py-3 text-start">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Durum
                            </span>
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                    @forelse ($recent_appointments as $appointment)
                    <tr class="hover:bg-gray-50 dark:hover:bg-neutral-800 transition-colors">
                        @if (auth()->user() && auth()->user()->role != 0)
                        <td class="size-px whitespace-nowrap ps-6 pe-3 py-4">
                            <div class="flex items-center gap-x-3">
                                <livewire:profile-image :user_id="$appointment->patient->id"/>
                                <div>
                                    <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $appointment->patient->name }}</span>
                                    <span class="block text-xs text-gray-500 dark:text-neutral-500">{{ $appointment->patient->email }}</span>
                                </div>
                            </div>
                        </td>
                        @endif

                        @if (auth()->user() && auth()->user()->role != 1)
                        <td class="size-px whitespace-nowrap px-3 py-4">
                            <div class="flex items-center gap-x-3">
                                <div class="flex-shrink-0 size-10 rounded-full bg-gray-100 dark:bg-neutral-700 flex items-center justify-center">
                                    <span class="text-gray-600 dark:text-neutral-300 font-medium uppercase">
                                        {{ substr($appointment->doctor->doctorUser->name, 0, 1) }}
                                    </span>
                                </div>
                                <div>
                                    <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $appointment->doctor->doctorUser->name }}</span>
                                    <span class="block text-xs text-gray-500 dark:text-neutral-500">{{ $appointment->doctor->doctorUser->email }}</span>
                                </div>
                            </div>
                        </td>
                        @endif

                        <td class="size-px whitespace-nowrap px-3 py-4">
                            <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                {{ date('d M Y', strtotime($appointment->appointment_date)) }}
                            </span>
                        </td>

                        <td class="size-px whitespace-nowrap px-3 py-4">
                            <span class="text-sm text-gray-600 dark:text-neutral-400">
                                {{ date('H:i', strtotime($appointment->appointment_time)) }}
                            </span>
                        </td>

                        <td class="size-px whitespace-nowrap pe-6 ps-3 py-4">
                            @if($appointment->is_complete == 1)
                            <span class="inline-flex items-center gap-x-1.5 py-1 px-2.5 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-900/20 dark:text-teal-500">
                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                Tamamlandı
                            </span>
                            @else
                            <span class="inline-flex items-center gap-x-1.5 py-1 px-2.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/20 dark:text-yellow-500">
                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                Beklemede
                            </span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="{{ auth()->user() && auth()->user()->role == 0 ? 3 : (auth()->user() && auth()->user()->role == 1 ? 3 : 4) }}" class="px-6 py-4 text-center">
                            <div class="flex flex-col items-center justify-center py-8 text-gray-500 dark:text-neutral-500">
                                <svg class="w-12 h-12 mb-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>
                                </svg>
                                <span class="font-medium">Kayıtlı randevu bulunamadı</span>
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
