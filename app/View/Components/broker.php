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

    public $items;
    public function __construct()
    {
        $this->items = brokerModel::all();
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.broker',['items']);
    }
}
