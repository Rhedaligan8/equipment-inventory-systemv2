<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use App\Models\Log;
use Livewire\WithPagination;

class UsersPanel extends Component
{
    use WithPagination;
    public $searchString = '';
    public $itemPerPage = 10;
    public $totalUsers;

    public $orderByString = 'id';
    public $orderBySort = 'desc';
    public $userIdToDelete = 1;

    public function mount()
    {
        $this->totalUsers = User::count();
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user->delete()) {
            $log = new Log(['description' => "Removed (Name: $user->name, Username: $user->username, Role: $user->role) from the database."]);
            Auth::user()->logs()->save($log);
            $this->totalUsers = User::count();
        }

    }

    public function setOrderBy($field)
    {
        $this->orderByString = $field;
    }

    public function setOrderBySort()
    {
        if ($this->orderBySort == "asc") {

            $this->orderBySort = "desc";
        } elseif ($this->orderBySort == "desc") {
            $this->orderBySort = "asc";

        }
    }

    public function updatedItemPerPage()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.users-panel', [
            'users' => User::where(function ($query) {
                $query->where('name', 'like', '%' . $this->searchString . '%')
                    ->orWhere('username', 'like', '%' . $this->searchString . '%')
                    ->orWhere('role', 'like', '%' . $this->searchString . '%')
                    ->orWhere('status', 'like', '%' . $this->searchString . '%')
                    ->orWhere('created_at', 'like', '%' . $this->searchString . '%')
                    ->orWhere('updated_at', 'like', '%' . $this->searchString . '%');
            })->orderBy($this->orderByString, $this->orderBySort)->paginate($this->itemPerPage)
        ]);
    }

    public function refreshTable(): void
    {
        $this->resetPage();
    }

    public function searchFilter()
    {
        $this->resetPage();
        $this->refreshTable();
    }

    public function clearSearchString()
    {
        $this->searchString = "";
        $this->refreshTable();
    }
}
