<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function homepage() {
        return view('homepage');
    }
}
