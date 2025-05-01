
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
## Doctor Notification
You have a new appointment scheduled. Please review the details and prepare accordingly.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
View Appointment
@endcomponent
@endif

@if($appointmentData['recipient_role'] == 'patient')
## Patient Notification
Your appointment has been successfully scheduled. Please make sure to arrive on time and bring any necessary documents.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
View Appointment
@endcomponent
@endif

Thanks,<br>
{{ config('app.name') }}
@endcomponent
