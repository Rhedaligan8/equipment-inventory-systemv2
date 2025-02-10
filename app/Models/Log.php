<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Log extends Model
{
    use HasFactory;

    public function create($description)
    {
        if (Auth::check()) {
            DB::table("logs")->insert([
                "user_id" => Auth::id(),
                "description" => $description
            ]);
        }
    }
}
