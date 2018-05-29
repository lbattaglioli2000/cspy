@component('mail::message')
# You have a new notification!

Hi there!

The CSPY team has just made a new announcement!
<br><br>

@component('mail::panel')
## {!! $title !!}
{!! $body !!}
@endcomponent

To view all notifications, click the button below:

@component('mail::button', ['url' => $url])
See all notifications
@endcomponent

Have a lovely day,<br>
{{ config('app.name') }}
@endcomponent
