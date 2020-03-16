@component('mail::message')
# Activatin Email

Hi {{$user->name}}

Berikut kode OTP anda <b> {{$user->token_activation}} </b> <br>
silahakan masukan kode OTP tersebut
untuk verifikasi akun anda.

@component('mail::button', ['url' => ''])
Active
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent