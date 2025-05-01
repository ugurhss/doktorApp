@component('mail::message')
# Randevu Notification

Dear {{ $appointmentData['recipient_name'] }},

Randevu aşağıdaki bilgilerle güncellendi:
### Yeni Randevu Details:
- **Date:** {{ $appointmentData['date'] }}
- **Time:** {{ $appointmentData['time'] }}
- **Location:** {{ $appointmentData['location'] }}

### Eski Randevu Details:
- **Date:** {{ $appointmentData['old_date'] }}
- **Time:** {{ $appointmentData['old_time'] }}
- **Location:** {{ $appointmentData['location'] }}

### User Details:
- **Name:** {{ $appointmentData['patient_name'] }}
- **Email:** {{ $appointmentData['patient_email'] }}

### Uzman Details:
- **Name:** {{ $appointmentData['doctor_name'] }}
- **Specialization:** {{ $appointmentData['doctor_specialization'] }}


@if($appointmentData['recipient_role'] == 'admin')
## Admin Bildirimi
Bu e-postayı, sisteminizde bir randevu planlandığı için alıyorsunuz.
@endif

@if($appointmentData['recipient_role'] == 'doctor')
## Uzman Bildirimi
Randevu yukarıdaki detaylarla güncellendi.
@endif

@if($appointmentData['recipient_role'] == 'patient')
## User Notification
Randevunuz başarıyla yeniden planlandı. Yukarıdaki ayrıntılara bakın.
@endif

Thanks,<br>
{{ config('app.name') }}
@endcomponent
