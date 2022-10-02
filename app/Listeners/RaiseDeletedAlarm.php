<?php

namespace App\Listeners;

use App\Events\OrderDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RaiseDeletedAlarm
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
     * @param  \App\Events\OrderDeleted  $event
     * @return void
     */
    public function handle(OrderDeleted $event)
    {
        print($event->cart);
    }
}
