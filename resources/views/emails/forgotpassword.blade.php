@component('mail::message')
    
Hello, {{$user->name}}.forgot password


@component('mail::button , ['url' => route('reset-password'. $user->email_verification_token)])')
reset your password password    
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent