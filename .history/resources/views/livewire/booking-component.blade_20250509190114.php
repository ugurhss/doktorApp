<div class="max-w-4xl mx-auto">
    <!-- Card -->
    <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
        <!-- Card Header -->
        <div class="p-6 border-b border-gray-100 bg-gradient-to-r from-blue-50 to-blue-100">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <!-- Doctor Avatar -->
                <div class="shrink-0">
                    <img class="size-20 md:size-24 rounded-full border-4 border-white shadow-sm"
                         src="{{ $doctor_details->doctorUser->profile_photo_url ?? 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&h=500&q=80' }}"
                         alt="Doctor Photo">
                </div>

                <!-- Doctor Info -->
                <div class="text-center md:text-left">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800">Dr. {{ $doctor_details->doctorUser->name }}</h2>
                    <p class="text-blue-600 font-medium">{{ $doctor_details->speciality->speciality_name }}</p>
                    <p class="text-sm text-gray-600 mt-1">
                        <svg class="inline-block size-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        {{ $doctor_details->hospital_name }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Card Body -->
        <div class="p-6 md:p-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Appointment Type Selection -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Randevu Türünü Seçin</label>
                    <div class="grid grid-cols-2 gap-3">
                        <button wire:click="$set('appointment_type', '0')"
                                class="py-3 px-4 rounded-lg border transition-all flex items-center justify-center
                                       {{ $appointment_type === '0' ? 'bg-blue-100 border-blue-500 text-blue-700' : 'bg-white border-gray-200 hover:border-blue-300' }}">
                            <svg class="size-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                            Yüz Yüze
                        </button>
                        <button wire:click="$set('appointment_type', '1')"
                                class="py-3 px-4 rounded-lg border transition-all flex items-center justify-center
                                       {{ $appointment_type === '1' ? 'bg-blue-100 border-blue-500 text-blue-700' : 'bg-white border-gray-200 hover:border-blue-300' }}">
                            <svg class="size-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                            Online Görüşme
                        </button>
                    </div>
                </div>

                <!-- Date Selection -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tarih Seçin</label>
                    <div class="relative">
                        <input type="text" id="datepicker" autocomplete="off"
                               class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 bg-gray-50"
                               placeholder="Randevu tarihi seçin">
                        <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                            <svg class="size-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>

                    @if($selectedDate)
                        <div class="mt-3 px-4 py-2 bg-blue-50 text-blue-700 rounded-lg inline-block">
                            <svg class="inline-block size-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm font-medium">{{ \Carbon\Carbon::parse($selectedDate)->isoFormat('dddd, D MMMM YYYY') }}</span>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Time Slots -->
            @if($selectedDate && count($timeSlots) > 0)
                <div class="mt-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Uygun Saatler</h3>
                    <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-3">
                        @foreach ($timeSlots as $slot)
                            <button wire:click="bookAppointment('{{$slot}}')"
                                    wire:confirm="Randevu oluşturulsun mu?\n\nDoktor: Dr. {{ $doctor_details->doctorUser->name }}\nTarih: {{ \Carbon\Carbon::parse($selectedDate)->isoFormat('D MMMM YYYY') }}\nSaat: {{ date('H:i',strtotime($slot)) }}"
                                    class="py-2 px-3 bg-white border border-gray-200 rounded-lg text-sm font-medium hover:bg-blue-50 hover:border-blue-300 transition-all focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                {{ date('H:i',strtotime($slot)) }}
                            </button>
                        @endforeach
                    </div>
                </div>
            @elseif($selectedDate)
                <div class="mt-8 p-4 bg-yellow-50 text-yellow-700 rounded-lg text-center">
                    <svg class="inline-block size-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Seçtiğiniz tarihte uygun randevu saati bulunamadı.
                </div>
            @endif
        </div>
    </div>
    <!-- End Card -->
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
