<?php

namespace App\Listeners;

use App\Events\PostDeleting;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostUnpublic
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
     * @param  PostDeleting  $event
     * @return void
     */
    public function handle(PostDeleting $event)
    {
        //
    }
}
