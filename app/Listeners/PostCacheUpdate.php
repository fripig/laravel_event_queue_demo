<?php

namespace App\Listeners;

use App\Events\PostEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostCacheUpdate implements ShouldQueue
{
    public $queue = 'high';
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
    public function handle($event)
    {
        //
        echo "PostCacheUpdate\n";
    }
}
