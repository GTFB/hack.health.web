<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\aid_kind;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class aid_kindEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $aid_kind;

    /**
     * Create a new event instance.
     *
     * @param aid_kind $aid_kind
     * @return void
     */
    public function __construct(aid_kind $aid_kind)
    {
        $this->aid_kind = $aid_kind;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.aid_kind");
    }
}
