@component('mail::message')
# You have a new notification!

Hi there!

The CSPY team has just made a new announcement!
<br><br>

@component('mail::panel')
## {!! $notification->title !!}
{!! $notification->body !!}
@endcomponent

To view all notifications, click the button below:

@component('mail::button', ['url' => 'https://learn.codegeek.org/student/notifications'])
See all notifications
@endcomponent

Have a lovely day,<br>
{{ config('app.name') }}
@endcomponent
