@component('mail::message')
# Bonjour

Vous avez reçu un mail de {{ $data['nom'] }} ({{ $data['email'] }}).

Subject: {{ $data['subject'] }}

Message: 
{{ $data['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
