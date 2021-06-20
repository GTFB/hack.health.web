<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\diagnostic;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class diagnosticEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $diagnostic;

    /**
     * Create a new event instance.
     *
     * @param diagnostic $diagnostic
     * @return void
     */
    public function __construct(diagnostic $diagnostic)
    {
        $this->diagnostic = $diagnostic;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.diagnostic");
    }
}
