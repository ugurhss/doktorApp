<!-- Dashboard Stats Section -->
<div class="max-w-[85rem] px-4 py-5 sm:px-6 lg:px-8 lg:py-7 mx-auto">
    <!-- Grid Layout -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        @if (auth()->user() && auth()->user()->role == 2)
            <!-- Total Users Card -->
            <a href="#" class="group">
                <div class="h-full flex flex-col p-5 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-blue-500 dark:group-hover:border-blue-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="w-3 h-3 bg-orange-500 rounded-full me-2"></span>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Toplam Kullanıcı</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-2">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $users_count }}
                        </h3>
                    </div>

                    <div class="flex justify-between text-sm">
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_month_users_count }}</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                        </div>
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_week_users_count }}</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Total Users Card -->

            <!-- Doctors Card -->
            <a href="/admin/doctors" class="group">
                <div class="h-full flex flex-col p-5 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-green-500 dark:group-hover:border-green-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="w-3 h-3 bg-green-500 rounded-full me-2"></span>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Uzman Doktorlar</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-2">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $doctors_count }}
                        </h3>
                    </div>

                    <div class="flex justify-between text-sm">
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_month_doctor_count }}</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                        </div>
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_week_doctor_count }}</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Doctors Card -->

            <!-- Patients Card -->
            <a href="#" class="group">
                <div class="h-full flex flex-col p-5 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-yellow-500 dark:group-hover:border-yellow-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="w-3 h-3 bg-yellow-500 rounded-full me-2"></span>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Hastalar</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-2">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $patients_count }}
                        </h3>
                    </div>

                    <div class="flex justify-between text-sm">
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_month_patient_count }}</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                        </div>
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_week_patient_count }}</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Patients Card -->

            <!-- Appointments Card -->
            <a href="/admin/appointments" class="group">
                <div class="h-full flex flex-col p-5 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-blue-500 dark:group-hover:border-blue-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="w-3 h-3 bg-blue-500 rounded-full me-2"></span>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Randevular</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-2">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $appointments_count }}
                        </h3>
                    </div>

                    <div class="flex justify-between text-sm">
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_month_appointments_count }}</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                        </div>
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_week_appointments_count }}</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Appointments Card -->

            <!-- Specialities Card -->
            <a href="/admin/specialities" class="group">
                <div class="h-full flex flex-col p-5 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-violet-500 dark:group-hover:border-violet-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="w-3 h-3 bg-violet-500 rounded-full me-2"></span>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Uzmanlık Alanları</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-violet-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-2">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $specialities_count }}
                        </h3>
                    </div>

                    <div class="flex justify-between text-sm">
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">0</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                        </div>
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">0</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Specialities Card -->
        @endif

        @if (auth()->user() && auth()->user()->role == 1)
            <!-- Doctor's Appointments Card -->
            <a href="/doctor/appointments" class="group">
                <div class="h-full flex flex-col p-5 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-blue-500 dark:group-hover:border-blue-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="w-3 h-3 bg-blue-500 rounded-full me-2"></span>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Tüm Randevular</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-2">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $doctor_appointments_count }}
                        </h3>
                    </div>

                    <div class="flex justify-between text-sm">
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_month_appointments_count }}</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                        </div>
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_week_appointments_count }}</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Doctor's Appointments Card -->

            <!-- Upcoming Appointments Card -->
            <a href="/doctor/appointments" class="group">
                <div class="h-full flex flex-col p-5 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-yellow-500 dark:group-hover:border-yellow-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="w-3 h-3 bg-yellow-500 rounded-full me-2"></span>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Yaklaşan Randevular</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-2">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $upcoming_appointments_count }}
                        </h3>
                    </div>

                    <div class="flex justify-between text-sm">
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">0</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                        </div>
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">0</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Upcoming Appointments Card -->

            <!-- Completed Appointments Card -->
            <a href="/doctor/appointments" class="group">
                <div class="h-full flex flex-col p-5 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-green-500 dark:group-hover:border-green-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="w-3 h-3 bg-green-500 rounded-full me-2"></span>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Tamamlanan Randevular</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-2">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $complete_appointments_count }}
                        </h3>
                    </div>

                    <div class="flex justify-between text-sm">
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">0</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                        </div>
                        <div class="text-center">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">0</span>
                            <span class="block text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Completed Appointments Card -->
        @endif
    </div>
    <!-- End Grid Layout -->
</div>
<!-- End Dashboard Stats Section -->
