<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Horizontal extends Component
{
    public function render()
    {
        return view('livewire.horizontal')
        ->layout('layouts.app1');
    }
}
