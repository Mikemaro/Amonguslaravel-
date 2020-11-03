<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LobbyController extends Controller
{
       public function index($username)
        {
            $user = User::find($username);
            return view('home', ['username' => $username,]);
        }
}
