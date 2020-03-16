@component('mail::message')
# Activatin Email

Berikut kode OTP anda XXXXXXXX,
silahakan masukan kode OTP tersebut untuk verifikasi

@component('mail::button', ['url' => ''])
Active
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent