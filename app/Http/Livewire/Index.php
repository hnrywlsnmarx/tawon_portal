<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class Index extends Component
{
    use AuthorizesRequests;

    public function render()
    {
        return view('livewire.index');
    }
}
