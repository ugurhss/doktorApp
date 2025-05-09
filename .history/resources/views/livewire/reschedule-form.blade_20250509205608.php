<div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Doctor Profile Card -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-200 dark:border-gray-700">
        <div class="p-6 md:p-8">
            <!-- Doctor Info -->
            <div class="flex flex-col md:flex-row items-center gap-6 md:gap-8">
                <!-- Profile Image Placeholder -->
                <div class="w-24 h-24 rounded-full bg-gradient-to-br from-blue-100 to-indigo-200 dark:from-blue-900 dark:to-indigo-800 flex items-center justify-center">
                    <span class="text-2xl font-bold text-blue-600 dark:text-blue-300">
                        {{ substr($doctor_details->doctorUser->name, 0, 1) }}
                    </span>
                </div>

                <div class="text-center md:text-left">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-white">
                        {{ $doctor_details->doctorUser->name }}
                    </h2>
                    <p class="text-blue-600 dark:text-blue-400 font-medium">
                        {{ $doctor_details->speciality->speciality_name }}
                    </p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-1">
                        {{ $doctor_details->hospital_name }}
                    </p>
                </div>
            </div>

            <div class="border-t border-gray-200 dark:border-gray-700 my-6"></div>

            <!-- Current Appointment -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Mevcut Randevu</h3>
                <div class="flex items-center bg-blue-50 dark:bg-blue-900/30 rounded-lg p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 dark:text-blue-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="text-lg font-medium text-gray-800 dark:text-gray-200">
                        {{ date('d F Y', strtotime($appointment_details->appointment_date)) }},
                        {{ date('H:i', strtotime($appointment_details->appointment_time)) }}
                    </span>
                </div>
            </div>

            <!-- Date Picker -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Yeni Tarih Seçin</h3>
                <div class="relative">
                    <input type="text" id="datepicker" autocomplete="off"
                           class="w-full py-3 px-4 border border-gray-300 dark:border-gray-600 rounded-lg
                                  bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200
                                  focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                  transition-all duration-200"
                           placeholder="Uygun bir tarih seçin">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>

                @if($selectedDate)
                    <div class="mt-4 p-3 bg-green-50 dark:bg-green-900/20 rounded-lg">
                        <p class="text-green-700 dark:text-green-400 font-medium">
                            Seçilen tarih: {{ date('d F Y', strtotime($selectedDate)) }}
                        </p>
                    </div>
                @endif
            </div>

            <!-- Time Slots -->
            @if($selectedDate && count($timeSlots) > 0)
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Uygun Saatler</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
                        @foreach ($timeSlots as $slot)
                            <button
                                wire:click="updateAppointment('{{$slot}}')"
                                wire:confirm="Randevuyu güncellemek istediğinize emin misiniz?\n\nEski: {{ date('d F Y H:i', strtotime($appointment_details->appointment_date . ' ' . $appointment_details->appointment_time)) }}\nYeni: {{ date('d F Y', strtotime($selectedDate)) }}, {{ date('H:i', strtotime($slot)) }}"
                                class="py-2 px-3 bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800
                                       text-white rounded-lg font-medium transition-all duration-200
                                       focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                {{ date('H:i', strtotime($slot)) }}
                            </button>
                        @endforeach
                    </div>
                </div>
            @elseif($selectedDate)
                <div class="p-4 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg">
                    <p class="text-yellow-700 dark:text-yellow-400">
                        Seçtiğiniz tarih için uygun saat bulunmamaktadır.
                    </p>
                </div>
            @endif
        </div>
    </div>
</div>

<script src="pikaday.js"></script>
<script>
    var availableDates = @json($availableDates);

    var picker = new Pikaday({
        field: document.getElementById('datepicker'),
        format: 'YYYY-MM-DD',
        minDate: new Date(),
        i18n: {
            previousMonth: 'Önceki Ay',
            nextMonth: 'Sonraki Ay',
            months: ['Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'],
            weekdays: ['Pazar','Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi'],
            weekdaysShort: ['Pz','Pt','Sa','Ça','Pe','Cu','Ct']
        },
        onSelect: function(date) {
            var selectedDate = picker.toString();
            @this.call('selectDate', selectedDate);
        },
        disableDayFn: function(date) {
            var formattedDate = moment(date).format('YYYY-MM-DD');
            return !availableDates.includes(formattedDate);
        }
    });
</script>
