<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\food_diagnostic_evaluation;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class food_diagnostic_evaluationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $food_diagnostic_evaluation;

    /**
     * Create a new event instance.
     *
     * @param food_diagnostic_evaluation $food_diagnostic_evaluation
     * @return void
     */
    public function __construct(food_diagnostic_evaluation $food_diagnostic_evaluation)
    {
        $this->food_diagnostic_evaluation = $food_diagnostic_evaluation;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.food_diagnostic_evaluation");
    }
}
