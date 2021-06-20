<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\drug_diagnostic;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class drug_diagnosticEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $drug_diagnostic;

    /**
     * Create a new event instance.
     *
     * @param drug_diagnostic $drug_diagnostic
     * @return void
     */
    public function __construct(drug_diagnostic $drug_diagnostic)
    {
        $this->drug_diagnostic = $drug_diagnostic;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.drug_diagnostic");
    }
}
