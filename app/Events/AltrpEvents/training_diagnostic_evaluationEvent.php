<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\training_diagnostic_evaluation;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class training_diagnostic_evaluationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $training_diagnostic_evaluation;

    /**
     * Create a new event instance.
     *
     * @param training_diagnostic_evaluation $training_diagnostic_evaluation
     * @return void
     */
    public function __construct(training_diagnostic_evaluation $training_diagnostic_evaluation)
    {
        $this->training_diagnostic_evaluation = $training_diagnostic_evaluation;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.training_diagnostic_evaluation");
    }
}
