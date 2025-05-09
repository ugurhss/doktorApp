<!-- Specialities Section -->
<div class="max-w-7xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
    <!-- Title -->
    <div class="max-w-3xl mx-auto text-center mb-12 lg:mb-16">
        <h2 class="text-3xl font-bold md:text-4xl md:leading-tight text-gray-900 dark:text-white">
            Uzmanlık Alanlarımız
        </h2>
        <p class="mt-3 text-lg text-gray-600 dark:text-neutral-400">
            Sağlık alanındaki uzmanlıklarımızla hizmetinizdeyiz
        </p>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6">
        @if (count($specialities) > 0)
            @foreach ($specialities as $item)
                <!-- Card -->
                <div class="group relative flex flex-col bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 dark:bg-neutral-900 dark:border-neutral-700 dark:hover:border-neutral-600 overflow-hidden">
                    <a href="/filter-by-speciality/{{$item->id}}" class="absolute inset-0 z-10"></a>

                    <!-- Card Body -->
                    <div class="p-5 flex flex-col h-full">
                        <!-- Icon -->
                        <div class="mb-4 flex justify-center">
                            <div class="inline-flex items-center justify-center w-12 h-12 bg-blue-50 rounded-full dark:bg-blue-900/20">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                {{$item->speciality_name}}
                            </h3>
                            <p class="mt-2 text-gray-600 dark:text-neutral-400">
                                Uzman doktorlarımızla hizmet veriyoruz
                            </p>
                        </div>

                        <!-- Arrow -->
                        <div class="mt-5 inline-flex items-center gap-x-2 text-sm font-semibold text-blue-600 dark:text-blue-400">
                            Detaylı bilgi
                            <svg class="w-2.5 h-2.5 transition-transform group-hover:translate-x-1" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                    <!-- End Card Body -->
                </div>
                <!-- End Card -->
            @endforeach
        @else
            <!-- Empty State -->
            <div class="sm:col-span-2 lg:col-span-3 xl:col-span-4 py-12 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400 dark:text-neutral-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="mt-2 text-lg font-medium text-gray-900 dark:text-white">Uzmanlık bulunamadı</h3>
                <p class="mt-1 text-gray-500 dark:text-neutral-400">Henüz eklenmiş bir uzmanlık alanı yok.</p>
            </div>
        @endif
    </div>
    <!-- End Grid -->
</div>
<!-- End Specialities Section -->
