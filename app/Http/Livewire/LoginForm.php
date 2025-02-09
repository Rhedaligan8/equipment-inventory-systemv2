<?php

namespace App\Http\Livewire;

use Livewire\Component;


class LoginForm extends Component
{

    public $username, $password;

    protected $rules = [
        "username" => "required",
        "password" => "required"
    ];

    protected $messages = [
        "username.required" => "*Username is required.",
        "password.required" => "*Password is required."
    ];

    public function render()
    {
        return view('livewire.login-form');
    }
    public function login()
    {
        $this->validate();

    }
}
