@foreach ($doctors as $doctor)
    <div class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
        <div class="flex items-center gap-x-4">
            <img class="rounded-full size-20" src="{{ $doctor->profile_picture }}" alt="Image Description">
            <div class="grow">
                <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                    {{ $doctor->name }}
                </h3>
                <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                    {{ $doctor->specialty }} / {{ $doctor->hospital }}
                </p>
            </div>
        </div>

        <p class="mt-3 text-gray-500 dark:text-neutral-500">
            {{ $doctor->bio }}
        </p>

        <div class="flex justify-between mt-5">
            <!-- Social Media Links and Appointment Button -->
            <!-- Handle login state for the appointment button -->
            {{-- @if (auth()->check())
                <a href="{{ route('appointments.create') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Book Appointment
                </a>
            @else
                <a href="/login" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Book Appointment
                </a>
            @endif --}}
        </div>
    </div>
@endforeach
