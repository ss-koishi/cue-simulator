<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    // パス hostname の表示
    public function get_home()
    {
        // server/resources/views/home.blade.php
        return view('home');
    }
}
