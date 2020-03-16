@component('mail::message')
# Activatin Email

Hi {{$user->name}}

Berikut kode OTP anda <b> {{$user->token_activation}} </b> <br>
silahakan masukan kode OTP tersebut
untuk verifikasi akun anda.

<!-- @component('mail::button', ['url' => ``]) -->
<a href="http://127.0.0.1:8000/resend/direct/{{$user->token_activation}}" class="button button-primary" target="_blank" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; border-radius: 3px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16); color: #FFF; display: inline-block; text-decoration: none; -webkit-text-size-adjust: none; background-color: #2f3292; border-top: 10px solid #2f3292; border-right: 18px solid #2f3292; border-bottom: 10px solid #2f3292; border-left: 18px solid #2f3292;">KLIK DISINI</a>


Active
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent