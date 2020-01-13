@component('mail::message')
# Hello from Laravel ;)

Welcome to our cool app

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
