<!-- Featured Doctors Section -->
<div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-12 lg:mb-16">
        <h2 class="text-3xl font-bold md:text-4xl md:leading-tight dark:text-white">Öne Çıkan Uzmanlar</h2>
        <p class="mt-2 text-gray-600 dark:text-neutral-400">Alanlarında uzman doktorlarımızla tanışın</p>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @forelse ($featuredDoctors as $item)
            <!-- Doctor Card -->
            <div class="group flex flex-col h-full rounded-xl p-5 bg-white border border-gray-200 shadow-sm hover:shadow-md transition-shadow dark:bg-neutral-900 dark:border-neutral-700 dark:hover:border-neutral-600">
                <div class="flex items-center gap-x-4 mb-4">
                    <img class="rounded-full size-20 object-cover border-2 border-gray-200 dark:border-neutral-600"
                         src="{{ $item->doctorUser->profile_photo_url ?? 'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80' }}"
                         alt="{{ $item->doctorUser->name }}">
                    <div class="grow">
                        <h3 class="font-semibold text-lg text-gray-800 dark:text-neutral-200">
                            Dr. {{ $item->doctorUser->name }}
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                            {{ $item->speciality->speciality_name }}
                        </p>
                        <p class="text-xs text-gray-500 dark:text-neutral-500 mt-1">
                            {{ $item->hospital_name }}
                        </p>
                    </div>
                </div>

                <p class="text-gray-600 dark:text-neutral-300 line-clamp-3 mb-5">
                    {{ $item->bio ?? 'Uzman doktorumuz hastalarına en iyi hizmeti sunmaktadır.' }}
                </p>

                <div class="mt-auto flex items-center justify-between">
                    <!-- Social Links -->
                    <div class="flex space-x-2">
                        @if($item->twitter)
                        <a href="{{ $item->twitter }}" target="_blank" class="inline-flex justify-center items-center size-8 rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 transition-colors dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700">
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                            </svg>
                        </a>
                        @endif

                        @if($item->instagram)
                        <a href="{{ $item->instagram }}" target="_blank" class="inline-flex justify-center items-center size-8 rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 transition-colors dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700">
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                        @endif
                    </div>

                    <!-- Appointment Button -->
                    <a href="{{ auth()->user() ? '/booking/page/'.$item->id : '/login' }}"
                       class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                        Randevu Al
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"/>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- End Doctor Card -->
        @empty
            <!-- Empty State -->
            <div class="col-span-full text-center py-12">
                <svg class="mx-auto size-12 text-gray-400 dark:text-neutral-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.665 3.318-1.248 3.318H4.042c-1.913 0-2.48-2.086-1.248-3.318L4.2 15.3" />
                </svg>
                <h3 class="mt-2 text-lg font-medium text-gray-800 dark:text-neutral-200">Öne çıkan uzman bulunamadı</h3>
                <p class="mt-1 text-gray-600 dark:text-neutral-400">Şu anda öne çıkan uzman listesi boş görünüyor.</p>
            </div>
        @endforelse

        <!-- View All CTA -->
        <a class="col-span-full sm:col-span-1 lg:col-span-1 group flex flex-col justify-center items-center text-center rounded-xl p-6 border-2 border-dashed border-gray-200 hover:border-blue-500 transition-colors dark:border-neutral-700 dark:hover:border-blue-500" href="/doctors">
            <div class="size-12 bg-blue-50 rounded-full flex items-center justify-center mb-3 dark:bg-blue-900/20">
                <svg class="size-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"/>
                    <path d="M12 5v14"/>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-800 dark:text-neutral-200 mb-1">
                Daha Fazlasını Keşfedin
            </h3>
            <p class="text-sm text-blue-600 group-hover:text-blue-700 dark:text-blue-500 dark:group-hover:text-blue-400">
                Tüm uzmanları görüntüleyin
                <svg class="inline-flex ml-1 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"/>
                </svg>
            </p>
        </a>
        <!-- End View All CTA -->
    </div>
    <!-- End Grid -->
</div>
<!-- End Featured Doctors Section -->
