<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\drug_kind;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class drug_kindEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $drug_kind;

    /**
     * Create a new event instance.
     *
     * @param drug_kind $drug_kind
     * @return void
     */
    public function __construct(drug_kind $drug_kind)
    {
        $this->drug_kind = $drug_kind;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.drug_kind");
    }
}
