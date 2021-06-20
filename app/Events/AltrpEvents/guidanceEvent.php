<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\guidance;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class guidanceEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $guidance;

    /**
     * Create a new event instance.
     *
     * @param guidance $guidance
     * @return void
     */
    public function __construct(guidance $guidance)
    {
        $this->guidance = $guidance;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.guidance");
    }
}
