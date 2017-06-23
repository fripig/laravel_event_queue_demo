<?php

namespace App\Listeners;

use App\Events\PostDelete as PostDeleteEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostDelete
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
     * @param  PostDelete  $event
     * @return void
     */
    public function handle(PostDeleteEvent $event)
    {
        //
    }
}
