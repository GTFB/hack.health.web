<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\condition;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class conditionEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $condition;

    /**
     * Create a new event instance.
     *
     * @param condition $condition
     * @return void
     */
    public function __construct(condition $condition)
    {
        $this->condition = $condition;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.condition");
    }
}
