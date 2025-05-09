<div class="py-8">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-neutral-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-200 dark:border-neutral-700">
            <!-- Form Header -->
            <div class="px-6 py-4 border-b border-gray-200 dark:border-neutral-700">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                    Müsaitlik Zamanı Ekle
                </h2>
                <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                    Hasta randevuları için uygun olduğunuz zamanları belirtin
                </p>
            </div>

            <!-- Form Content -->
            <form wire:submit="save" class="p-6 space-y-6">
                <!-- Day Selection -->
                <div>
                    <x-input-label for="available_day" :value="__('Uygun Gün')" class="block text-sm font-medium text-gray-700 dark:text-neutral-300 mb-1" />
                    <select wire:model="available_day" id="available_day" class="py-3 px-4 block w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-100 dark:focus:ring-blue-600 transition-colors">
                        <option value="" disabled selected>Gün seçiniz</option>
                        @foreach ($daysOfweek as $key => $value)
                            <option value="{{$key}}" class="dark:bg-neutral-700">{{$value}}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('available_day')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
                </div>

                <!-- Time Range -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Start Time -->
                    <div>
                        <x-input-label for="from" :value="__('Başlangıç Saati')" class="block text-sm font-medium text-gray-700 dark:text-neutral-300 mb-1" />
                        <div class="relative">
                            <input type="time" wire:model="from" id="from" class="py-3 px-4 block w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-100 dark:focus:ring-blue-600 transition-colors">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('from')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
                    </div>

                    <!-- End Time -->
                    <div>
                        <x-input-label for="to" :value="__('Bitiş Saati')" class="block text-sm font-medium text-gray-700 dark:text-neutral-300 mb-1" />
                        <div class="relative">
                            <input type="time" wire:model="to" id="to" class="py-3 px-4 block w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-100 dark:focus:ring-blue-600 transition-colors">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('to')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex items-center justify-end gap-3 pt-6 border-t border-gray-200 dark:border-neutral-700">
                    <a href="/admin/specialities" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-neutral-600 text-sm font-medium rounded-lg shadow-sm text-gray-700 dark:text-neutral-200 bg-white dark:bg-neutral-700 hover:bg-gray-50 dark:hover:bg-neutral-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-blue-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        İptal
                    </a>

                    <x-primary-button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-blue-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Kaydet
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>
