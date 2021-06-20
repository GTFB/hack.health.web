<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\food_diagnostic;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class food_diagnosticEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $food_diagnostic;

    /**
     * Create a new event instance.
     *
     * @param food_diagnostic $food_diagnostic
     * @return void
     */
    public function __construct(food_diagnostic $food_diagnostic)
    {
        $this->food_diagnostic = $food_diagnostic;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.food_diagnostic");
    }
}
