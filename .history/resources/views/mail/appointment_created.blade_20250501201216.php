
@component('mail::message')
# Appointment Confirmation

Dear {{ $appointmentData['recipient_name'] }},

Aşağıdaki bilgilerle randevu başarıyla oluşturuldu:
### randevu Details:
- **Date:** {{ $appointmentData['date'] }}
- **Time:** {{ $appointmentData['time'] }}
- **Location:** {{ $appointmentData['location'] }}
- **Appointment Type:** {{ $appointmentData['appointment_type'] }}

### User Details:
- **Name:** {{ $appointmentData['patient_name'] }}
- **Email:** {{ $appointmentData['patient_email'] }}

### uzman Details:
- **Name:** {{ $appointmentData['doctor_name'] }}
- **Specialization:** {{ $appointmentData['doctor_specialization'] }}

@if($appointmentData['recipient_role'] == 'admin')
## Admin Notification
Bu e-postayı almanızın nedeni sisteminizde bir randevunun planlanmış olmasıdır.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Randevuyu Görüntüle
@endcomponent
@endif

@if($appointmentData['recipient_role'] == 'doctor')
## Uzman Notification
Yeni bir randevunuz planlandı. Lütfen detayları inceleyin ve buna göre hazırlık yapın.
@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Randevuyu Görüntüle
@endcomponent
@endif

@if($appointmentData['recipient_role'] == 'patient')
## User Notification
Randevunuz başarıyla planlandı. Lütfen zamanında geldiğinizden ve gerekli belgeleri getirdiğinizden emin olun.
@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Randevuyu Görüntüle
@endcomponent
@endif

Thanks,<br>
{{ config('app.name') }}
@endcomponent
