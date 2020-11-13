<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aLobbyController extends Controller
{
    //
    public function lobby()
    {
      return view('posts.lobby');
    }

    public function store()
    {
      $data = request()->validate([
        'title' => 'required',
        'region' => 'required',
        'language' => 'required',
        'players' => ['required', 'integer'],
        'map' => 'required',
        'competitive' => 'required',
        'imposter' => ['required', 'integer' ],


      ]);
      dd(request()->all());
    }
}
