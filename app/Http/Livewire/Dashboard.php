<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

    public $defaultSelectedMenu = "users";

    public function render()
    {
        return view('livewire.dashboard');
    }
}
