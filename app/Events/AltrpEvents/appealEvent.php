<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\appeal;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class appealEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $appeal;

    /**
     * Create a new event instance.
     *
     * @param appeal $appeal
     * @return void
     */
    public function __construct(appeal $appeal)
    {
        $this->appeal = $appeal;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.appeal");
    }
}
