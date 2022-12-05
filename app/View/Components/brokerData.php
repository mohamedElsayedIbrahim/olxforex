<?php

namespace App\View\Components;

use App\Models\Broker;
use Illuminate\View\Component;

class brokerData extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $brokers = Broker::all();
        return view('components.broker-data', compact('brokers'));
    }
}
