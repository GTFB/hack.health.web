<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\service_diagnostic;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class service_diagnosticEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $service_diagnostic;

    /**
     * Create a new event instance.
     *
     * @param service_diagnostic $service_diagnostic
     * @return void
     */
    public function __construct(service_diagnostic $service_diagnostic)
    {
        $this->service_diagnostic = $service_diagnostic;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.service_diagnostic");
    }
}
