<!-- Card Section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Grid -->
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

      @if (auth()->user() && auth()->user()->role == 2)

        <!-- Single Card -->
        <a href="#" class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm hover:shadow-lg transition dark:bg-neutral-900 dark:border-neutral-800">
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <div class="size-2 bg-orange-500 rounded-full"></div>
              <p class="text-xs font-semibold uppercase text-gray-500 dark:text-gray-400">Users</p>
            </div>
            <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-500 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
          </div>

          <div class="mt-6 text-center">
            <h3 class="text-4xl font-bold text-gray-900 dark:text-white">{{$users_count}}</h3>
            <dl class="mt-4 flex justify-center space-x-6 text-sm text-gray-600 dark:text-gray-400">
              <div class="flex flex-col items-center">
                <dt>Last Month</dt>
                <dd class="font-semibold">{{$last_month_users_count}}</dd>
              </div>
              <div class="flex flex-col items-center">
                <dt>Last Week</dt>
                <dd class="font-semibold">{{$last_week_users_count}}</dd>
              </div>
            </dl>
          </div>
        </a>
        <!-- End Single Card -->

        <!-- Tekrarla diğer kartları aynı yapı ile -->
        <!-- Doktorlar Kartı -->
        <a href="/admin/doctors" class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm hover:shadow-lg transition dark:bg-neutral-900 dark:border-neutral-800">
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <div class="size-2 bg-green-500 rounded-full"></div>
              <p class="text-xs font-semibold uppercase text-gray-500 dark:text-gray-400">Doctors</p>
            </div>
            <svg class="w-5 h-5 text-gray-400 group-hover:text-green-500 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
          </div>

          <div class="mt-6 text-center">
            <h3 class="text-4xl font-bold text-gray-900 dark:text-white">{{$doctors_count}}</h3>
            <dl class="mt-4 flex justify-center space-x-6 text-sm text-gray-600 dark:text-gray-400">
              <div class="flex flex-col items-center">
                <dt>Last Month</dt>
                <dd class="font-semibold">{{$last_month_doctor_count}}</dd>
              </div>
              <div class="flex flex-col items-center">
                <dt>Last Week</dt>
                <dd class="font-semibold">{{$last_week_doctor_count}}</dd>
              </div>
            </dl>
          </div>
        </a>
        <!-- End Doctor Card -->

        <!-- Diğer kartlar için de aynı yapıyı tekrar uygula: Patients, Appointments, Specialities -->

      @endif

      @if (auth()->user() && auth()->user()->role == 1)
        <!-- Doctor's Appointments Card -->
        <a href="/doctor/appointments" class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm hover:shadow-lg transition dark:bg-neutral-900 dark:border-neutral-800">
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <div class="size-2 bg-blue-500 rounded-full"></div>
              <p class="text-xs font-semibold uppercase text-gray-500 dark:text-gray-400">All Appointments</p>
            </div>
            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-500 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
          </div>

          <div class="mt-6 text-center">
            <h3 class="text-4xl font-bold text-gray-900 dark:text-white">{{$doctor_appointments_count}}</h3>
            <dl class="mt-4 flex justify-center space-x-6 text-sm text-gray-600 dark:text-gray-400">
              <div class="flex flex-col items-center">
                <dt>Last Month</dt>
                <dd class="font-semibold">{{$last_month_appointments_count}}</dd>
              </div>
              <div class="flex flex-col items-center">
                <dt>Last Week</dt>
                <dd class="font-semibold">{{$last_week_appointments_count}}</dd>
              </div>
            </dl>
          </div>
        </a>
        <!-- End Doctor Card -->

        <!-- Upcoming ve Completed Appointment kartlarını aynı yapıda ekleyebilirsin -->

      @endif

    </div>
    <!-- End Grid -->
  </div>
  <!-- End Card Section -->
