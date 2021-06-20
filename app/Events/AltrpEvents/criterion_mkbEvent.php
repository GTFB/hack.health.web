<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\criterion_mkb;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class criterion_mkbEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $criterion_mkb;

    /**
     * Create a new event instance.
     *
     * @param criterion_mkb $criterion_mkb
     * @return void
     */
    public function __construct(criterion_mkb $criterion_mkb)
    {
        $this->criterion_mkb = $criterion_mkb;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.criterion_mkb");
    }
}
