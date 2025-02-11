<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;
use App\Models\User;

class UserController extends Controller
{
    public function logout()
    {
        if (Auth::check()) {

            $log = new Log(['description' => "User logged out."]);
            $savedLog = Auth::user()->logs()->save($log);
            // update: put alert if the saved log fails
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
            return redirect(to: "/");
        }

    }
}
