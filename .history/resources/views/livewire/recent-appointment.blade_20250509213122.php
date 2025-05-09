<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-5 sm:px-6 lg:px-8 lg:py-7 mx-auto">
    <div class="mb-4">
        <h5 class="text-sm font-medium text-gray-500 dark:text-neutral-400 uppercase tracking-wider">Son Randevular</h5>
    </div>

    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
                    <!-- Table -->
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="bg-gray-50 dark:bg-neutral-800">
                                <tr>
                                    <!-- Conditional columns based on user role -->
                                    @unless (auth()->user() && auth()->user()->role == 0)
                                        <th scope="col" class="px-6 py-3 text-left">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Kullanıcı
                                            </span>
                                        </th>
                                    @endunless

                                    @unless (auth()->user() && auth()->user()->role == 1)
                                        <th scope="col" class="px-6 py-3 text-left">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Takım
                                            </span>
                                        </th>
                                    @endunless

                                    <th scope="col" class="px-6 py-3 text-left">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Seans Günü
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-left">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Seans Zamanı
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-left">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                            Durum
                                        </span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                @forelse ($recent_appointments as $appointment)
                                    <tr class="bg-white hover:bg-gray-50 dark:bg-neutral-900 dark:hover:bg-neutral-800 transition-colors duration-150">
                                        <!-- Patient Column -->
                                        @unless (auth()->user() && auth()->user()->role == 0)
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center gap-3">
                                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200 dark:bg-neutral-700 flex items-center justify-center">
                                                        <!-- Placeholder for profile image -->
                                                        <span class="text-sm font-medium text-gray-600 dark:text-neutral-300">
                                                            {{ substr($appointment->patient->name, 0, 1) }}
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                                                            {{ $appointment->patient->name }}
                                                        </div>
                                                        <div class="text-sm text-gray-500 dark:text-neutral-400">
                                                            {{ $appointment->patient->email }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        @endunless

                                        <!-- Doctor Column -->
                                        @unless (auth()->user() && auth()->user()->role == 1)
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center gap-3">
                                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200 dark:bg-neutral-700 flex items-center justify-center">
                                                        <!-- Placeholder for profile image -->
                                                        <span class="text-sm font-medium text-gray-600 dark:text-neutral-300">
                                                            {{ substr($appointment->doctor->doctorUser->name, 0, 1) }}
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                                                            {{ $appointment->doctor->doctorUser->name }}
                                                        </div>
                                                        <div class="text-sm text-gray-500 dark:text-neutral-400">
                                                            {{ $appointment->doctor->doctorUser->email }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        @endunless

                                        <!-- Appointment Date -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900 dark:text-white">
                                                {{ date('d M Y', strtotime($appointment->appointment_date)) }}
                                            </div>
                                        </td>

                                        <!-- Appointment Time -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-600 dark:text-neutral-300">
                                                {{ date('H:i', strtotime($appointment->appointment_time)) }}
                                            </div>
                                        </td>

                                        <!-- Status -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if($appointment->is_complete == 1)
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-900/20 dark:text-teal-400">
                                                    <svg class="mr-1.5 h-2 w-2 text-teal-400" fill="currentColor" viewBox="0 0 8 8">
                                                        <circle cx="4" cy="4" r="3" />
                                                    </svg>
                                                    Tamamlandı
                                                </span>
                                            @else
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/20 dark:text-yellow-400">
                                                    <svg class="mr-1.5 h-2 w-2 text-yellow-400" fill="currentColor" viewBox="0 0 8 8">
                                                        <circle cx="4" cy="4" r="3" />
                                                    </svg>
                                                    Beklemede
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ (auth()->user() && auth()->user()->role == 0) ? 3 : ((auth()->user() && auth()->user()->role == 1) ? 4 : 5) }}" class="px-6 py-4 text-center text-sm text-gray-500 dark:text-neutral-400">
                                            <div class="flex flex-col items-center justify-center py-8">
                                                <svg class="w-12 h-12 text-gray-400 dark:text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                                </svg>
                                                <span class="mt-2 block text-sm font-medium text-gray-600 dark:text-neutral-400">
                                                    Kayıtlı randevu bulunamadı
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->

                    @if($recent_appointments->hasPages())
                        <div class="px-6 py-4 border-t border-gray-200 dark:border-neutral-700">
                            {{ $recent_appointments->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->
</div>
<!-- End Table Section -->
