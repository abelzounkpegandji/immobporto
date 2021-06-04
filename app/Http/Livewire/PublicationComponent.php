<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PublicationComponent extends Component
{
    public function render()
    {
        return view('livewire.publication-component')->layout('layouts.base');
    }
}
