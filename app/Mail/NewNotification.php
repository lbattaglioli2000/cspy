<?php

namespace App\Mail;

use App\Notification;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Support\Facades\URL;

class NewNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $notification;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@codegeek.org')
                    ->markdown('emails.new.notification')
                    ->with([
                      'title' => $this->notification->title,
                      'body' => $this->notification->body,
                      'url' => URL::to(route('student.notifications'))
                    ]);
    }
}
