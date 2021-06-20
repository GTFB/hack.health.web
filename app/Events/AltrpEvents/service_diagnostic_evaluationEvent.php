<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\service_diagnostic_evaluation;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class service_diagnostic_evaluationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $service_diagnostic_evaluation;

    /**
     * Create a new event instance.
     *
     * @param service_diagnostic_evaluation $service_diagnostic_evaluation
     * @return void
     */
    public function __construct(service_diagnostic_evaluation $service_diagnostic_evaluation)
    {
        $this->service_diagnostic_evaluation = $service_diagnostic_evaluation;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.service_diagnostic_evaluation");
    }
}
