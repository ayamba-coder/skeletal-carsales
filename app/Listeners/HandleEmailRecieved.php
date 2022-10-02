<?php

namespace App\Listeners;

use App\Events\ContactEmailSent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\customerSupport;

class HandleEmailRecieved
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
     * @param  object  $event
     * @return void
     */

    public function handle(ContactEmailSent $event)
    {
        $respons = false;
        if(has_Internet()){
            Mail::to($event->user->email)->send(new customerSupport($event->user));
             $respons = true;
        }
        return $respons;
    }
}
