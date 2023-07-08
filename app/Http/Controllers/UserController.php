<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function GetAll()
    {
        $user = User::all();
        return json_encode($user, JSON_UNESCAPED_UNICODE);
    }
}
