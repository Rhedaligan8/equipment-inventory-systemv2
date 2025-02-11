<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tablist extends Component
{

    public $menuTabs = [
        "Items",
        "Equipment Type",
        "Person Accountable",
        "Division And Sections"
    ];


    public function render()
    {
        return view('livewire.tablist');
    }
}
