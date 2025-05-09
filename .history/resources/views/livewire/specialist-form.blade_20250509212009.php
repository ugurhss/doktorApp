<div class="py-8">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-neutral-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-200 dark:border-neutral-700">
            <!-- Form Header -->
            <div class="px-6 py-4 border-b border-gray-200 dark:border-neutral-700">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                    {{-- @if($specialityId)
                        Uzmanlık Düzenle
                    @else --}}
                        Yeni Uzmanlık Ekle
                    {{-- @endif --}}
                </h2>
                <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                    Lütfen uzmanlık bilgilerini giriniz
                </p>
            </div>

            <!-- Form Content -->
            <form wire:submit="save" class="p-6 space-y-6">
                <!-- Name Field -->
                <div>
                    <div class="flex items-center justify-between">
                        <x-input-label for="name" :value="__('Uzmanlık Adı')" class="block text-sm font-medium text-gray-700 dark:text-neutral-300" />
                        <span class="text-xs text-gray-500 dark:text-neutral-400">Zorunlu Alan</span>
                    </div>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <x-text-input
                            wire:model="name"
                            id="name"
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-100 dark:focus:ring-blue-600"
                            type="text"
                            name="name"
                            placeholder="Örn: Kardiyoloji"
                            autofocus
                            autocomplete="off"
                        />
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
                </div>

                <!-- Form Actions -->
                <div class="flex items-center justify-end gap-3 pt-6 border-t border-gray-200 dark:border-neutral-700">
                    <a href="/admin/specialities" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-neutral-600 text-sm font-medium rounded-md shadow-sm text-gray-700 dark:text-neutral-200 bg-white dark:bg-neutral-700 hover:bg-gray-50 dark:hover:bg-neutral-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-blue-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        İptal
                    </a>

                    <x-primary-button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-blue-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        @if($specialityId)
                            Güncelle
                        @else
                            Kaydet
                        @endif
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>
