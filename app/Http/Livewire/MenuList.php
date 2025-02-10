<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MenuList extends Component
{

    public $menuItems = [
        "items",
        "users",
    ];

    public $countries = [
        ['label' => 'Benin', 'value' => 'bj'],
        ['label' => 'Burkina Faso', 'value' => 'bf'],
        ['label' => 'Ghana', 'value' => 'gh'],
        ['label' => 'Nigeria', 'value' => 'ng'],
        ['label' => 'Kenya', 'value' => 'ke']
    ];

    public $defaultSelected = "items";
    public function render()
    {
        return view('livewire.menu-list');
    }
}
