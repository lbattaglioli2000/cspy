@component('mail::message')
# Welcome to CSPY

Hi there, {{ $name }}!

Your account has been created! You may login to your student dashboard with the email:
<br>
{{ $email }}
<br>
To get started, click the button below!

@component('mail::button', ['url' => $url])
Go to student dashboard!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
