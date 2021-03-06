<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\PostCreated' => [
        ],
        'App\Events\PostUpdate' => [
            'App\Listeners\PostCacheUpdate',
            'App\Listeners\PostCDNUpdate',
        ],
        'App\Events\PostDeleting' => [
            'App\Listeners\PostUnpublic',
            'App\Listeners\PostCacheUpdate',
            'App\Listeners\PostCDNUpdate',
            'App\Listeners\PostDelete',
        ],
        'App\Events\PostPublic' => [
            'App\Listeners\PostPublic',
            'App\Listeners\PostCDNUpdate',
            'App\Listeners\PostCacheUpdate',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
