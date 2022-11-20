<?php

namespace App\View\Components;

use App\Models\Broker as brokerModel;
use Illuminate\View\Component;


class broker extends Component
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
        $brokers = brokerModel::all();
        return view('components.broker',compact('brokers'));
    }
}
