<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\service_type;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class service_typeEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $service_type;

    /**
     * Create a new event instance.
     *
     * @param service_type $service_type
     * @return void
     */
    public function __construct(service_type $service_type)
    {
        $this->service_type = $service_type;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.service_type");
    }
}
