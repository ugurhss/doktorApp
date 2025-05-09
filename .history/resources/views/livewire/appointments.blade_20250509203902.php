<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-5 sm:px-6 lg:px-8 lg:py-7 mx-auto">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">Son Randevular</h2>
        <p class="text-sm text-gray-500 dark:text-neutral-500">Son oluşturulan randevuların listesi</p>
    </div>

    <!-- Card -->
    <div class="flex flex-col rounded-xl shadow-sm bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700 overflow-hidden">
        <!-- Table Container -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                <thead class="bg-gray-50 dark:bg-neutral-800">
                    <tr>
                        @if (auth()->user() && auth()->user()->role != 0)
                        <th scope="col" class="px-6 py-3 text-left">
                            <div class="flex items-center gap-x-2">
                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Kullanıcı
                                </span>
                            </div>
                        </th>
                        @endif

                        @if (auth()->user() && auth()->user()->role != 1)
                        <th scope="col" class="px-6 py-3 text-left">
                            <div class="flex items-center gap-x-2">
                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Doktor
                                </span>
                            </div>
                        </th>
                        @endif

                        <th scope="col" class="px-6 py-3 text-left">
                            <div class="flex items-center gap-x-2">
                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Tarih
                                </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-left">
                            <div class="flex items-center gap-x-2">
                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Saat
                                </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-left">
                            <div class="flex items-center gap-x-2">
                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Durum
                                </span>
                            </div>
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                    @if (count($recent_appointments) > 0)
                        @foreach ($recent_appointments as $appointment)
                        <tr class="bg-white hover:bg-gray-50 dark:bg-neutral-900 dark:hover:bg-neutral-800 transition-colors">
                            @if (auth()->user() && auth()->user()->role != 0)
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-x-3">
                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-100 dark:bg-neutral-700 flex items-center justify-center">
                                        <span class="text-gray-600 dark:text-neutral-300 font-medium">
                                            {{ substr($appointment->patient->name, 0, 1) }}
                                        </span>
                                    </div>
                                    <div>
                                        <span class="block text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $appointment->patient->name }}</span>
                                        <span class="block text-xs text-gray-500 dark:text-neutral-500">{{ $appointment->patient->email }}</span>
                                    </div>
                                </div>
                            </td>
                            @endif

                            @if (auth()->user() && auth()->user()->role != 1)
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-x-3">
                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-100 dark:bg-neutral-700 flex items-center justify-center">
                                        <span class="text-gray-600 dark:text-neutral-300 font-medium">
                                            {{ substr($appointment->doctor->doctorUser->name, 0, 1) }}
                                        </span>
                                    </div>
                                    <div>
                                        <span class="block text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $appointment->doctor->doctorUser->name }}</span>
                                        <span class="block text-xs text-gray-500 dark:text-neutral-500">{{ $appointment->doctor->doctorUser->email }}</span>
                                    </div>
                                </div>
                            </td>
                            @endif

                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">{{ date('d M Y', strtotime($appointment->appointment_date)) }}</span>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="text-sm text-gray-600 dark:text-neutral-400">{{ date('H:i', strtotime($appointment->appointment_time)) }}</span>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($appointment->is_complete == 1)
                                <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-900/20 dark:text-teal-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    Tamamlandı
                                </span>
                                @else
                                <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/20 dark:text-yellow-500">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    Beklemede
                                </span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500 dark:text-neutral-500">
                                <div class="flex flex-col items-center justify-center py-8">
                                    <svg class="w-12 h-12 text-gray-400 dark:text-neutral-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="mt-2 font-medium text-gray-600 dark:text-neutral-400">Henüz randevu bulunmamaktadır</span>
                                </div>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- End Table Container -->
    </div>
    <!-- End Card -->
</div>
<!-- End Table Section -->
