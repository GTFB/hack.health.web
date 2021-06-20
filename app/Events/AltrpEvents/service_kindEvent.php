<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\service_kind;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class service_kindEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $service_kind;

    /**
     * Create a new event instance.
     *
     * @param service_kind $service_kind
     * @return void
     */
    public function __construct(service_kind $service_kind)
    {
        $this->service_kind = $service_kind;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.service_kind");
    }
}
