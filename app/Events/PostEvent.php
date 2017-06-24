<?php
/**
 * Created by PhpStorm.
 * User: fripi
 * Date: 2017/6/25
 * Time: 上午 01:44
 */

namespace App\Events;

use Illuminate\Broadcasting\Channel;

interface PostEvent
{
    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn();
}