<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MenuList extends Component
{

    public $menuItems = [
        "Items",
        "users"
    ];
    public function render()
    {
        return view('livewire.menu-list');
    }
}
