<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LocationComponent extends Component
{
    public function render()
    {
        return view('livewire.location-component')->layout('layouts.base');
    }
}
