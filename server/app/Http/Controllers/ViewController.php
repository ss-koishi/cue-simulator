<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recording;
use App\Models\Character;

class ViewController extends Controller
{
    // パス hostname の表示
    public function get_home()
    {
        return view('home', [
            'recordings' => Recording::get(['id', 'name']),
            'characters' => Character::orderBy('id')->get(['id', 'name']),
        ]);
    }
}
