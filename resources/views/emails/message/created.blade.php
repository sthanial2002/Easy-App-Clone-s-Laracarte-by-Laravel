@component('mail::message')
# Hi Admin

- {{$msg->name}}
- {{$msg->email}}

@component('mail::panel')
        {{$msg->message}}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
