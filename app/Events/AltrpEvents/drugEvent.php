<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\drug;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class drugEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $drug;

    /**
     * Create a new event instance.
     *
     * @param drug $drug
     * @return void
     */
    public function __construct(drug $drug)
    {
        $this->drug = $drug;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.drug");
    }
}
