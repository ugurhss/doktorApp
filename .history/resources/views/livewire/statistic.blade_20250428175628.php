<!-- Card Section -->
<div class="max-w-[85rem] px-4 py-5 sm:px-6 lg:px-8 lg:py-7 mx-auto">
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
      @if (auth()->user() && auth()->user()->role == 2)
           <!-- Card -->
           <div class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
            <div class="p-4 md:p-5 flex gap-x-4">
              <div class="shrink-0 flex justify-center items-center size-11 bg-gray-100 rounded-lg dark:bg-neutral-800">
                <svg class="shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                  <circle cx="9" cy="7" r="4"/>
                  <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
              </div>

              <div class="grow">
                <div class="flex items-center gap-x-2">
                  <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                    Total users
                  </p>
                  <div class="hs-tooltip">
                    <div class="hs-tooltip-toggle">
                      <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                        <path d="M12 17h.01"/>
                      </svg>
                      <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-2xs dark:bg-neutral-700" role="tooltip">
                        The number of daily users
                      </span>
                    </div>
                  </div>
                </div>

                <div class="mt-1 flex items-center gap-x-2">
                  <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                    {{$users_count}}
                  </h3>
                  <span class="inline-flex items-center gap-x-1 py-0.5 px-2 rounded-full
                    {{ $growth_rate > 0 ? 'bg-green-100 text-green-900 dark:bg-green-800 dark:text-green-100' : 'bg-red-100 text-red-900 dark:bg-red-800 dark:text-red-100' }}">

                    <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      @if($growth_rate > 0)
                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/>
                        <polyline points="16 7 22 7 22 13"/>
                      @else
                        <polyline points="2 7 10.5 15.5 15.5 10.5 22 17"/>
                        <polyline points="2 13 2 7 8 7"/>
                      @endif
                    </svg>

                    <span class="inline-block text-xs font-medium">
                      {{ $growth_rate }}%
                    </span>
                  </span>
                </div>

                <div class="mt-3 flex justify-between text-xs text-gray-500 dark:text-neutral-500">
                  <div>Last month: <span class="text-gray-800 dark:text-neutral-200 font-medium">{{$last_month_users_count}}</span></div>
                  <div>Last week: <span class="text-gray-800 dark:text-neutral-200 font-medium">{{$last_week_users_count}}</span></div>
                </div>

              </div>
            </div>
          </div>

          <!-- End Card -->

      <!-- Card -->
      <a href="/admin/doctors">
      <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="inline-flex justify-center items-center">
          <span class="size-2 inline-block bg-green-500 rounded-full me-2"></span>
          <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Doctors</span>
        </div>

        <div class="text-center">
          <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
            {{$doctors_count}}
          </h3>
        </div>

        <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
          <dt class="pe-3 text-center">
            <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_month_doctor_count}}</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
          </dt>
          <dd class="text-start ps-3">
            <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_week_doctor_count}}</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
          </dd>
        </dl>
      </div>
      </a>
      <!-- End Card -->

      <!-- Card -->
      <a href="">
      <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="inline-flex justify-center items-center">
          <span class="size-2 inline-block bg-yellow-500 rounded-full me-2"></span>
          <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Patients</span>
        </div>

        <div class="text-center">
          <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
            {{$patients_count}}
          </h3>
        </div>

        <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
          <dt class="pe-3 text-center">
            <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_month_patient_count}}</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
          </dt>
          <dd class="text-start ps-3">
            <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_week_patient_count}}</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
          </dd>
        </dl>
      </div>
      </a>
      <!-- End Card -->

      <!-- Card -->
      <a href="/admin/appointments">
      <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white hover:shadow-md border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="inline-flex justify-center items-center">
          <span class="size-2 inline-block bg-blue-500 rounded-full me-2"></span>
          <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Appointments</span>
        </div>

        <div class="text-center">
          <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
            {{$appointments_count}}
          </h3>
        </div>

        <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
          <dt class="pe-3 text-center">
            <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_month_appointments_count}}</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
          </dt>
          <dd class="text-start ps-3">
            <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_week_appointments_count}}</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
          </dd>
        </dl>
      </div>
      </a>
      <!-- End Card -->

      <!-- Card -->
      <a href="/admin/specialities">
      <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="inline-flex justify-center items-center">
          <span class="size-2 inline-block bg-violet-500 rounded-full me-2"></span>
          <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Specialities</span>
        </div>

        <div class="text-center">
          <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
            {{$specialities_count}}
          </h3>
        </div>
        <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
                <dt class="pe-3 text-center">
                  <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">0</span>
                  <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
                </dt>
                <dd class="text-start ps-3">
                  <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">0</span>
                  <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
                </dd>
              </dl>
      </div>
      </a>
      <!-- End Card -->
      @endif

      @if (auth()->user() && auth()->user()->role == 1)
           <!-- Card -->
           <a href="/doctor/appointments">
              <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
                <div class="inline-flex justify-center items-center">
                  <span class="size-2 inline-block bg-blue-500 rounded-full me-2"></span>
                  <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">All Appointments</span>
                </div>

                <div class="text-center">
                  <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
                    {{$doctor_appointments_count}}
                  </h3>
                </div>

                <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
                  <dt class="pe-3 text-center">
                    <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_month_appointments_count}}</span>
                    <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
                  </dt>
                  <dd class="text-start ps-3">
                    <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_week_appointments_count}}</span>
                    <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
                  </dd>
                </dl>
              </div>
           </a>
      <!-- End Card -->

      <!-- Card -->
      <a href="/doctor/appointments">
      <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="inline-flex justify-center items-center">
          <span class="size-2 inline-block bg-yellow-500 rounded-full me-2"></span>
          <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Upcoming Appointments</span>
        </div>

        <div class="text-center">
          <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
            {{$upcoming_appointments_count}}
          </h3>
        </div>
        <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
                <dt class="pe-3 text-center">
                  <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">0</span>
                  <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
                </dt>
                <dd class="text-start ps-3">
                  <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">0</span>
                  <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
                </dd>
              </dl>

      </div>
      </a>
      <!-- End Card -->

      <!-- Card -->
      <a href="/doctor/appointments">
      <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="inline-flex justify-center items-center">
          <span class="size-2 inline-block bg-green-500 rounded-full me-2"></span>
          <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Complete Appointments</span>
        </div>

        <div class="text-center">
          <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
            {{$complete_appointments_count}}
          </h3>
        </div>
        <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
            <dt class="pe-3 text-center">
              <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">0</span>
              <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
            </dt>
            <dd class="text-start ps-3">
              <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">0</span>
              <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
            </dd>
          </dl>
      </div>
      </a>
      <!-- End Card -->


      @endif

    </div>
    <!-- End Grid -->
  </div>
  <!-- End Card Section -->
