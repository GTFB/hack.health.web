<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\training_diagnostic;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class training_diagnosticEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $training_diagnostic;

    /**
     * Create a new event instance.
     *
     * @param training_diagnostic $training_diagnostic
     * @return void
     */
    public function __construct(training_diagnostic $training_diagnostic)
    {
        $this->training_diagnostic = $training_diagnostic;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.training_diagnostic");
    }
}
