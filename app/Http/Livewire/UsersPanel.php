<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class UsersPanel extends Component
{

    public $users;
    public $searchString = "";

    public function mount()
    {
        $this->getUsers();
    }

    public function render()
    {
        return view('livewire.users-panel');
    }

    public function getUsers(): void
    {
        $this->users = User::where(['name', 'like', '%{{$searchString}}%'])
            ->orWhere(['username', 'like', '%{{$searchString}}%'])
            ->orWhere(['role', 'like', '%{{$searchString}}%'])
            ->orWhere(['status', 'like', '%{{$searchString}}%'])
            ->orWhere(['created_at', 'like', '%{{$searchString}}%'])
            ->orWhere(['updated_at', 'like', '%{{$searchString}}%'])->get();
    }

    public function searchFilter()
    {
        $this->getUsers();
    }

    public function clearSearchString()
    {
        $this->searchString = "";
        $this->getUsers();
    }
}
