<?php

namespace App\Listeners;

use App\Events\PostEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostCDNUpdate implements ShouldQueue
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
     * @param  PostEvent $event
     * @return void
     */
    public function handle(PostEvent $event)
    {
        //
        echo "PostCDNUpdate\n";
    }
}
