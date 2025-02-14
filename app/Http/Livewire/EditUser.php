<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class EditUser extends Component
{

    public $user_id;

    public function mount($user_id)
    {
        $this->user_id = $user_id;
    }

    public function render()
    {
        $user = User::find($this->user_id);
        dd($user);
        return view('livewire.edit-user');
    }
}
