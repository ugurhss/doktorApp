<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-5 sm:px-6 lg:px-8 lg:py-7 mx-auto">
    <!-- Loading Indicator -->
    <div wire:loading.flex class="w-full justify-center items-center py-4">
        <div class="animate-spin inline-block size-6 border-[3px] border-current border-t-transparent text-blue-600 rounded-full dark:text-blue-500" role="status" aria-label="loading"></div>
        <span class="ml-2 text-sm dark:text-white">Yükleniyor...</span>
    </div>

    <!-- Card -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
        <!-- Header with Search -->
        <div class="px-4 py-4 sm:px-6 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Randevular</h2>

            <div class="w-full md:w-auto">
                <label for="hs-as-table-product-review-search" class="sr-only">Ara</label>
                <div class="relative">
                    <input type="text" wire:model.live.debounce.300ms="search" id="hs-as-table-product-review-search"
                           class="py-2 px-3 ps-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500
                                  disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700
                                  dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                           placeholder="Randevu ara...">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                        <svg class="flex-shrink-0 size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Cards View -->
        <div class="sm:hidden divide-y divide-gray-200 dark:divide-neutral-700">
            @forelse ($all_appointments as $appointment)
            <div class="p-4 hover:bg-gray-50 dark:hover:bg-neutral-800 transition-colors">
                <div class="flex justify-between items-start">
                    <div>
                        @unless (auth()->user() && auth()->user()->role == 0)
                        <div class="mb-2">
                            <span class="font-medium text-gray-800 dark:text-white">{{ $appointment->patient->name }}</span>
                        </div>
                        @endunless

                        @unless (auth()->user() && auth()->user()->role == 1)
                        <div class="mb-2">
                            <span class="font-medium text-gray-800 dark:text-white">{{ $appointment->doctor->doctorUser->name }}</span>
                            <span class="block text-xs text-gray-500 dark:text-neutral-400">{{ $appointment->doctor->doctorUser->email }}</span>
                        </div>
                        @endunless

                        <div class="text-sm text-gray-600 dark:text-neutral-300">
                            <span class="font-medium">{{ date('d M Y',strtotime($appointment->appointment_date)) }}</span>
                            <span class="mx-1">•</span>
                            <span>{{ date('H:i',strtotime($appointment->appointment_time)) }}</span>
                        </div>

                        <div class="mt-1">
                            <span class="text-xs px-2 py-1 rounded-full {{ $appointment->is_complete ? 'bg-green-100 text-green-800 dark:bg-green-900/20 dark:text-green-400' : 'bg-red-100 text-red-800 dark:bg-red-900/20 dark:text-red-400' }}">
                                {{ $appointment->is_complete ? 'Tamamlandı' : 'Tamamlanmadı' }}
                            </span>
                        </div>
                    </div>

                    <div class="flex space-x-2">
                        <button wire:click="start({{$appointment->id}})" wire:confirm="Görüntülü Aramaya katılmak istiyor musunuz?"
                                class="p-1.5 rounded-md bg-green-100 text-green-700 hover:bg-green-200 dark:bg-green-900/30 dark:text-green-400 dark:hover:bg-green-900/50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </button>

                        <a href="{{ auth()->user()->role == 0 ? '/user/reschedule' : (auth()->user()->role == 1 ? '/doctor/reschedule' : '/admin/reschedule') }}/{{$appointment->id}}"
                           class="p-1.5 rounded-md bg-blue-100 text-blue-700 hover:bg-blue-200 dark:bg-blue-900/30 dark:text-blue-400 dark:hover:bg-blue-900/50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </a>

                        <button wire:click="cancel({{$appointment->id}})" wire:confirm="İptal etmek isteginine emin misin?"
                                class="p-1.5 rounded-md bg-red-100 text-red-700 hover:bg-red-200 dark:bg-red-900/30 dark:text-red-400 dark:hover:bg-red-900/50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            @empty
            <div class="px-6 py-8 text-center">
                <svg class="mx-auto size-12 text-gray-400 dark:text-neutral-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">Randevu bulunamadı</h3>
                <p class="mt-1 text-sm text-gray-500 dark:text-neutral-400">Yeni randevu oluşturmayı deneyebilirsiniz.</p>
            </div>
            @endforelse
        </div>

        <!-- Desktop Table View -->
        <div class="hidden sm:block overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                <thead class="bg-gray-50 dark:bg-neutral-800">
                    <tr>
                        @unless (auth()->user() && auth()->user()->role == 0)
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-neutral-400 uppercase tracking-wider">
                            Kullanıcı
                        </th>
                        @endunless

                        @unless (auth()->user() && auth()->user()->role == 1)
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text
