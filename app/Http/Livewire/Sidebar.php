<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sidebar extends Component
{

    public $defaultSelectedMenu = "users";

    public function render()
    {
        return view('livewire.sidebar');
    }
}
