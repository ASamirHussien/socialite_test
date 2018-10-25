@component('mail::message')
# Introduction

The body of your message.
{{$username}}
@component('mail::button', ['url' => ''])
Confirm
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
