<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\criterion_evaluation;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class criterion_evaluationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $criterion_evaluation;

    /**
     * Create a new event instance.
     *
     * @param criterion_evaluation $criterion_evaluation
     * @return void
     */
    public function __construct(criterion_evaluation $criterion_evaluation)
    {
        $this->criterion_evaluation = $criterion_evaluation;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.criterion_evaluation");
    }
}
