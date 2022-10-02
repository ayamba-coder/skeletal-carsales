@component('mail::message')
# Introduction

Welcome {{ $user->name }}.

@component('mail::button', ['url' => ''])
Subscribe to our letters
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
