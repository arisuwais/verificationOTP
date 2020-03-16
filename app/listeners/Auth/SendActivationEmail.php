<?php

namespace App\listeners\Auth;

use app\Events\Auth\UserActivationEmail;
use App\Mail\Auth\ActivationEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendActivationEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserActivationEmail  $event
     * @return void
     */
    public function handle(UserActivationEmail $event)
    {
        if ($event->user->isverified) {
            return;
        }
        if (Mail::failures()) {
            return "gagal mengirim Email";
        }

        Mail::to($event->user->email)->send(new ActivationEmail($event->user));
    }
}
