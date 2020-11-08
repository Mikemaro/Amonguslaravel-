<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aLobbyController extends Controller
{
    //
    public function lobby() {
      return view('posts.lobby');
    }
}
