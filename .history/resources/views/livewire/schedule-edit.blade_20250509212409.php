<div class="py-8">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Update Schedule</h2>

                <form wire:submit="update" class="space-y-6">
                    <!-- Available Day -->
                    <div>
                        <x-input-label for="available_day" :value="__('Available Day')" class="mb-2" />

                        <select wire:model="available_day" id="available_day"
                            class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 shadow-sm transition duration-200">
                            <option value="{{ $schedules->available_day }}">
                                {{ $daysOfweek[$schedules->available_day] }}
                            </option>
                            @foreach ($daysOfweek as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>

                        <x-input-error :messages="$errors->get('available_day')" class="mt-2" />
                    </div>

                    <!-- Available From -->
                    <div>
                        <x-input-label for="from" :value="__('Available From')" class="mb-2" />

                        <input type="time" wire:model="from" id="from"
                            class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 shadow-sm transition duration-200">

                        <x-input-error :messages="$errors->get('from')" class="mt-2" />
                    </div>

                    <!-- Available To -->
                    <div>
                        <x-input-label for="to" :value="__('Available To')" class="mb-2" />

                        <input type="time" wire:model="to" id="to"
                            class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 shadow-sm transition duration-200">

                        <x-input-error :messages="$errors->get('to')" class="mt-2" />
                    </div>

                    <!-- Buttons -->
                    <div class="flex items-center justify-end gap-4 pt-4">
                        <a href="/admin/specialities"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-600 hover:bg-red-700 rounded-lg transition duration-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                            Cancel
                        </a>

                        <x-primary-button type="submit" class="px-4 py-2">
                            {{ __('Save Changes') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
