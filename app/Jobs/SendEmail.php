<?php

namespace App\Jobs;

use App\Mail\NewNotification;
use App\User;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

/**
 * Class SendEmail
 * @package App\Jobs
 */
class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $users, $mailable;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Mailable $mailable, $users)
    {
        $this->mailable = $mailable;
        $this->users = $users;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach($this->users as $user){
            Mail::bcc($user)->queue($this->mailable);
        }
    }

}
