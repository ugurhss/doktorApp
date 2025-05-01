@component('mail::message')
# Appointment Confirmation

Dear {{ $appointmentData['recipient_name'] }},

Aşağıdaki ayrıntılarla bir randevu başarıyla oluşturuldu:

### randevu detayi:
- **Date:** {{ $appointmentData['date'] }}
- **Time:** {{ $appointmentData['time'] }}
- **Location:** {{ $appointmentData['location'] }}

### Kullanıcı detayi:
- **Name:** {{ $appointmentData['patient_name'] }}
- **Email:** {{ $appointmentData['patient_email'] }}

### uzman detayi:
- **Name:** {{ $appointmentData['doctor_name'] }}
- **Specialization:** {{ $appointmentData['doctor_specialization'] }}

### Randevuyu İptal Eden:
- **Name:** {{ $appointmentData['cancelled_by'] }}
@if ($appointmentData['cancelled_by'] == 1)
- **Role:** Uzman
@elseif($appointmentData['cancelled_by'] == 2)
- **Role:** Admin
@else
- **Role:** User
@endif


@if($appointmentData['role'] == 2)
## Yönetici Bildirimi
Bu e-postayı, sisteminizde bir randevu planlandığı için alıyorsunuz.
@endif

@if($appointmentData['role'] == 1)
## Uzman Bildirimi
Randevunuz iptal edildi.
@endif

@if($appointmentData['role'] == 0)
## Kullanıcı Bildirimi
Randevunuz başarıyla iptal edildi. Yine de başka bir randevu alabilirsiniz.
@endif

Thanks,<br>
{{ config('app.name') }}
@endcomponent
