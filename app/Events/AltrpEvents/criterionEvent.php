<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\criterion;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class criterionEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $criterion;

    /**
     * Create a new event instance.
     *
     * @param criterion $criterion
     * @return void
     */
    public function __construct(criterion $criterion)
    {
        $this->criterion = $criterion;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.criterion");
    }
}
