<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\criterion_list;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class criterion_listEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $criterion_list;

    /**
     * Create a new event instance.
     *
     * @param criterion_list $criterion_list
     * @return void
     */
    public function __construct(criterion_list $criterion_list)
    {
        $this->criterion_list = $criterion_list;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.criterion_list");
    }
}
