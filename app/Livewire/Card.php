<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $ticket;

    public function render()
    {
        return view('livewire.card');
    }
}
