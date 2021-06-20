<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\quality_item;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class quality_itemEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $quality_item;

    /**
     * Create a new event instance.
     *
     * @param quality_item $quality_item
     * @return void
     */
    public function __construct(quality_item $quality_item)
    {
        $this->quality_item = $quality_item;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.quality_item");
    }
}
