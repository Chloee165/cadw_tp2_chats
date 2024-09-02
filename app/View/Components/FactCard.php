<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FactCard extends Component
{
    public $id;
    public $fact;

    public function __construct($id, $fact)
    {
        $this->id = $id;
        $this->fact = $fact;
    }

    public function render()
    {
        return view('components.fact-card');
    }
}