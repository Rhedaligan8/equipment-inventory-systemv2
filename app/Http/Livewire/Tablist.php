<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tablist extends Component
{

    public $menuTabs = [
        ['tabName' => 'Items', 'tabIcon' => 'clipboard-document-list'],
        ['tabName' => 'Equipment Type', 'tabIcon' => 'computer-desktop'],
        ['tabName' => 'Person Accountable', 'tabIcon' => 'user'],
        ['tabName' => 'Division And Sections', 'tabIcon' => 'building-office-2'],
        ['tabName' => 'Users', 'tabIcon' => 'user-group']
    ];


    public function render()
    {
        return view('livewire.tablist');
    }
}
