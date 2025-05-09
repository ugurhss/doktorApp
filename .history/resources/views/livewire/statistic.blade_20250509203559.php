<!-- Dashboard Stats Section -->
<div class="max-w-[85rem] px-4 py-5 sm:px-6 lg:px-8 lg:py-7 mx-auto">
    <!-- Grid Layout -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        @if (auth()->user() && auth()->user()->role == 2)
            <!-- Total Users Card -->
            <a href="#" class="group transform transition-all duration-300 hover:-translate-y-1">
                <div class="h-full flex flex-col p-6 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-orange-500 dark:group-hover:border-orange-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 rounded-lg bg-orange-100 dark:bg-orange-900/50">
                                <svg class="w-6 h-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Toplam Kullanıcı</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-500 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-3">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $users_count }}
                        </h3>
                    </div>

                    <div class="mt-auto pt-4 border-t border-gray-100 dark:border-neutral-800">
                        <div class="flex justify-between text-sm">
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_month_users_count }}</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                            </div>
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_week_users_count }}</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Total Users Card -->

            <!-- Doctors Card -->
            <a href="/admin/doctors" class="group transform transition-all duration-300 hover:-translate-y-1">
                <div class="h-full flex flex-col p-6 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-green-500 dark:group-hover:border-green-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 rounded-lg bg-green-100 dark:bg-green-900/50">
                                <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Uzman Doktorlar</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-green-500 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-3">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $doctors_count }}
                        </h3>
                    </div>

                    <div class="mt-auto pt-4 border-t border-gray-100 dark:border-neutral-800">
                        <div class="flex justify-between text-sm">
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_month_doctor_count }}</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                            </div>
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_week_doctor_count }}</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Doctors Card -->

            <!-- Patients Card -->
            <a href="#" class="group transform transition-all duration-300 hover:-translate-y-1">
                <div class="h-full flex flex-col p-6 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-yellow-500 dark:group-hover:border-yellow-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 rounded-lg bg-yellow-100 dark:bg-yellow-900/50">
                                <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Hastalar</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-yellow-500 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-3">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $patients_count }}
                        </h3>
                    </div>

                    <div class="mt-auto pt-4 border-t border-gray-100 dark:border-neutral-800">
                        <div class="flex justify-between text-sm">
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_month_patient_count }}</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                            </div>
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_week_patient_count }}</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Patients Card -->

            <!-- Appointments Card -->
            <a href="/admin/appointments" class="group transform transition-all duration-300 hover:-translate-y-1">
                <div class="h-full flex flex-col p-6 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-blue-500 dark:group-hover:border-blue-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 rounded-lg bg-blue-100 dark:bg-blue-900/50">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Randevular</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-500 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-3">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $appointments_count }}
                        </h3>
                    </div>

                    <div class="mt-auto pt-4 border-t border-gray-100 dark:border-neutral-800">
                        <div class="flex justify-between text-sm">
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_month_appointments_count }}</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                            </div>
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_week_appointments_count }}</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Appointments Card -->

            <!-- Specialities Card -->
            <a href="/admin/specialities" class="group transform transition-all duration-300 hover:-translate-y-1">
                <div class="h-full flex flex-col p-6 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-violet-500 dark:group-hover:border-violet-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 rounded-lg bg-violet-100 dark:bg-violet-900/50">
                                <svg class="w-6 h-6 text-violet-600 dark:text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Uzmanlık Alanları</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-violet-500 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-3">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $specialities_count }}
                        </h3>
                    </div>

                    <div class="mt-auto pt-4 border-t border-gray-100 dark:border-neutral-800">
                        <div class="flex justify-between text-sm">
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">0</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                            </div>
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">0</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Specialities Card -->
        @endif

        @if (auth()->user() && auth()->user()->role == 1)
            <!-- Doctor's Appointments Card -->
            <a href="/doctor/appointments" class="group transform transition-all duration-300 hover:-translate-y-1">
                <div class="h-full flex flex-col p-6 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-blue-500 dark:group-hover:border-blue-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 rounded-lg bg-blue-100 dark:bg-blue-900/50">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Tüm Randevular</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-500 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-3">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $doctor_appointments_count }}
                        </h3>
                    </div>

                    <div class="mt-auto pt-4 border-t border-gray-100 dark:border-neutral-800">
                        <div class="flex justify-between text-sm">
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_month_appointments_count }}</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                            </div>
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">{{ $last_week_appointments_count }}</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Doctor's Appointments Card -->

            <!-- Upcoming Appointments Card -->
            <a href="/doctor/appointments" class="group transform transition-all duration-300 hover:-translate-y-1">
                <div class="h-full flex flex-col p-6 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-yellow-500 dark:group-hover:border-yellow-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 rounded-lg bg-yellow-100 dark:bg-yellow-900/50">
                                <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Yaklaşan Randevular</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-yellow-500 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-3">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $upcoming_appointments_count }}
                        </h3>
                    </div>

                    <div class="mt-auto pt-4 border-t border-gray-100 dark:border-neutral-800">
                        <div class="flex justify-between text-sm">
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">0</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                            </div>
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">0</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Upcoming Appointments Card -->

            <!-- Completed Appointments Card -->
            <a href="/doctor/appointments" class="group transform transition-all duration-300 hover:-translate-y-1">
                <div class="h-full flex flex-col p-6 bg-white border border-gray-200 rounded-xl shadow-sm transition-all hover:shadow-lg dark:bg-neutral-900 dark:border-neutral-800 group-hover:border-green-500 dark:group-hover:border-green-500">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 rounded-lg bg-green-100 dark:bg-green-900/50">
                                <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider dark:text-neutral-400">Tamamlanan Randevular</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-green-500 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>

                    <div class="mb-3">
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">
                            {{ $complete_appointments_count }}
                        </h3>
                    </div>

                    <div class="mt-auto pt-4 border-t border-gray-100 dark:border-neutral-800">
                        <div class="flex justify-between text-sm">
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">0</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Ay</span>
                            </div>
                            <div class="text-center">
                                <span class="font-medium text-gray-800 dark:text-neutral-200">0</span>
                                <span class="block text-xs text-gray-500 dark:text-neutral-500">Geçen Hafta</span>
                            </div>
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
