<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\drug_measure;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class drug_measureEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $drug_measure;

    /**
     * Create a new event instance.
     *
     * @param drug_measure $drug_measure
     * @return void
     */
    public function __construct(drug_measure $drug_measure)
    {
        $this->drug_measure = $drug_measure;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.drug_measure");
    }
}
