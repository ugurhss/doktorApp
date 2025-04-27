{{-- <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <a class="flex items-center gap-x-2 mb-4" href="/admin/specialities/create">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
            Specialities Oluştur
        </h2>
    </a> --}}

    <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3 sm:gap-6">
        @foreach($specialities as $speciality)
        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#">
            <div class="p-4 md:p-5">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                            {{ $speciality->name }} <!-- Burada modelden gelen veriyi gösteriyoruz -->
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">
                            {{ $speciality->doctor_count }} Doctors <!-- Örnek bir field, bunu modelinize göre değiştirin -->
                        </p>
                    </div>
                    <div class="ps-3">
                        <svg class="flex-shrink-0 size-5 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"/>
                        </svg>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
<hr>
