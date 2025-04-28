<div>
    <!-- Button to trigger the modal -->
    <button type="button" data-modal-target="appointment-modal" data-modal-toggle="appointment-modal" class="bg-blue-500 text-white p-2 rounded">
        Open Appointment List
    </button>

    <!-- Modal -->
    <div id="appointment-modal" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-50 dark:bg-opacity-80">
        <!-- Modal Content -->
        <div class="relative w-full max-w-[85rem] mx-auto mt-10 p-4">
            <!-- Modal Dialog -->
            <div class="bg-white rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
                <!-- Modal Header -->
                <div class="px-6 py-4 flex justify-between items-center border-b border-gray-200 dark:border-neutral-700">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Appointment List</h3>
                    </div>
                    <button type="button" data-modal-toggle="appointment-modal" class="text-gray-500 dark:text-neutral-400">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!-- Modal Body -->
                <div class="px-6 py-4 overflow-x-auto">
                    <div class="relative mb-4">
                        <label for="search" class="sr-only">Search</label>
                        <input type="text" wire:model.live.debounce.300ms="search" id="search" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500" placeholder="Search">
                    </div>

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead class="bg-gray-50 dark:bg-neutral-800">
                            <tr>
                                <th class="px-6 py-3 text-start">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">Kullanıcı Bilgisi</span>
                                </th>
                                <th class="px-6 py-3 text-start">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">Doctor</span>
                                </th>
                                <th class="px-6 py-3 text-start">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">Görüşme Türü</span>
                                </th>
                                <th class="px-6 py-3 text-start">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">Tarih</span>
                                </th>
                                <th class="px-6 py-3 text-start">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">Saat</span>
                                </th>
                                <th class="px-6 py-3 text-start">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">Status</span>
                                </th>
                                <th class="px-6 py-3 text-start">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">İşlemler</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach ($all_appointments as $appointment)
                            <tr class="bg-white hover:bg-gray-50 dark:bg-neutral-900 dark:hover:bg-neutral-800">
                                <td class="px-6 py-3">{{ $appointment->patient->name }}</td>
                                <td class="px-6 py-3">{{ $appointment->doctor->doctorUser->name }}</td>
                                <td class="px-6 py-3">{{ $appointment->appointment_type == 0 ? 'On site' : 'Live Consultation' }}</td>
                                <td class="px-6 py-3">{{ date('d M Y',strtotime($appointment->appointment_date)) }}</td>
                                <td class="px-6 py-3">{{ date('H:i A',strtotime($appointment->appointment_time)) }}</td>
                                <td class="px-6 py-3">
                                    @if($appointment->is_complete == 1)
                                    <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">Complete</span>
                                    @else
                                    <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">Pending</span>
                                    @endif
                                </td>
                                <td class="px-6 py-3">
                                    <button class="bg-green-500 rounded text-white p-1">Join</button>
                                    <button class="bg-red-500 rounded text-white p-1">Cancel</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table -->
                </div>
                <!-- Modal Footer -->
                <div class="px-6 py-4 border-t border-gray-200 dark:border-neutral-700">
                    <div class="max-w-sm space-y-3">
                        <select wire:model.live='perPage' class="py-2 px-3 pe-9 block border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    {{ $all_appointments->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Modal açma
        const openButton = document.querySelector('[data-modal-toggle="appointment-modal"]');
        const modal = document.getElementById('appointment-modal');
        const closeButton = modal.querySelector('[data-modal-toggle="appointment-modal"]');

        // Modal'ı göster
        openButton.addEventListener('click', function () {
            modal.classList.remove('hidden');
        });

        // Modal'ı kapat
        closeButton.addEventListener('click', function () {
            modal.classList.add('hidden');
        });

        // Modal dışına tıklanarak kapanmasını sağlamak (Opsiyonel)
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });
</script>
