<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\drug_diagnostic_evaluation;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class drug_diagnostic_evaluationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $drug_diagnostic_evaluation;

    /**
     * Create a new event instance.
     *
     * @param drug_diagnostic_evaluation $drug_diagnostic_evaluation
     * @return void
     */
    public function __construct(drug_diagnostic_evaluation $drug_diagnostic_evaluation)
    {
        $this->drug_diagnostic_evaluation = $drug_diagnostic_evaluation;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.drug_diagnostic_evaluation");
    }
}
