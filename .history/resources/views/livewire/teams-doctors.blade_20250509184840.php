<!-- Team Section -->
<div class="max-w-[85rem] px-4 py-16 sm:px-6 lg:px-8 lg:py-20 mx-auto bg-gradient-to-b from-gray-50 to-white dark:from-neutral-900 dark:to-neutral-900">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-16">
      <h2 class="text-3xl font-bold text-gray-800 md:text-4xl md:leading-tight dark:text-white">Uzman Ekibimiz</h2>
      <p class="mt-3 text-lg text-gray-600 dark:text-neutral-400">Alanında uzman doktorlarımızla sağlığınızı emanet edebilirsiniz</p>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-6">

        @if (count($doctors) > 0)
        @foreach ($doctors as $item)
            <!-- Card -->
            <div class="group flex flex-col h-full rounded-xl bg-white border border-gray-200 shadow-sm hover:shadow-md transition-all dark:bg-neutral-900 dark:border-neutral-700 dark:hover:border-neutral-600 overflow-hidden">
              <div class="relative pt-[50%] overflow-hidden">
                <img class="absolute top-0 left-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="{{$item->photo_url ?? 'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80'}}" alt="Doctor Image">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                <div class="absolute bottom-4 left-4">
                  <h3 class="text-xl font-semibold text-white">
                    DGN. {{$item->doctorUser->name}}
                  </h3>
                  <p class="text-sm text-white/80">
                    {{$item->speciality->speciality_name}}
                  </p>
                </div>
              </div>

              <div class="p-6">
                <div class="flex items-center mb-4">
                  <svg class="flex-shrink-0 size-5 text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                  </svg>
                  <span class="ml-2 text-sm text-gray-600 dark:text-neutral-400">{{$item->hospital_name}}</span>
                </div>

                <p class="text-gray-600 dark:text-neutral-400 line-clamp-3 mb-5">
                  {{$item->bio}}
                </p>

                <div class="flex justify-between items-center pt-4 border-t border-gray-200 dark:border-neutral-700">
                  <!-- Social Icons -->
                  <div class="flex space-x-2">
                    @if($item->twitter)
                    <a href="{{$item->twitter}}" target="_blank" class="inline-flex justify-center items-center size-8 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-200 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:bg-neutral-700">
                      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                      </svg>
                    </a>
                    @endif
                    @if($item->instagram)
                    <a href="{{$item->instagram}}" target="_blank" class="inline-flex justify-center items-center size-8 rounded-lg bg-gray-100 text-gray-500 hover:bg-gray-200 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:bg-neutral-700">
                      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                      </svg>
                    </a>
                    @endif
                  </div>

                  <!-- Appointment Button -->
                  @if (auth()->user() != null)
                    <a href="/booking/page/{{$item->id}}" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 transition-colors">
                      Randevu Al
                      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                    </a>
                  @else
                    <a href="/login" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 transition-colors">
                      Randevu Al
                      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                    </a>
                  @endif
                </div>
              </div>
            </div>
            <!-- End Card -->
        @endforeach
        @endif

        <!-- View All Card -->
        <a class="col-span-full lg:col-span-1 group flex flex-col justify-center items-center text-center rounded-xl p-8 md:p-10 border-2 border-dashed border-gray-300 hover:border-blue-500 hover:bg-blue-50/50 transition-all dark:border-neutral-700 dark:hover:border-blue-500 dark:hover:bg-blue-900/10" href="/">
          <div class="size-16 bg-blue-100 rounded-full flex items-center justify-center mb-4 dark:bg-blue-900/20">
            <svg class="size-8 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-1">
            Tüm Ekibimiz
          </h3>
          <p class="text-sm text-gray-600 dark:text-neutral-400 mb-4">
            Diğer uzman doktorlarımızı keşfedin
          </p>
          <span class="inline-flex items-center gap-x-2 text-blue-600 group-hover:text-blue-700 dark:text-blue-400 dark:group-hover:text-blue-300 font-medium">
            Tümünü görüntüle
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </span>
        </a>
        <!-- End View All Card -->
    </div>
    <!-- End Grid -->
</div>
<!-- End Team Section -->
