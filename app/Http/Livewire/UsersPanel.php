<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class UsersPanel extends Component
{

    public $users;

    public $action_icons = [
        "icon:chat | tip:send message | color:green | click:sendMessage('{w}')",
        "icon:pencil | click:redirect('/user/{id}')",
        "icon:trash | color:red | click:deleteUser({id}, '{w}')",
    ];

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.users-panel');
    }
}
