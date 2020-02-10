<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GatController extends Controller
{
    public function index() {  
        return view('Gat.index');
    }

    public function learn() {  
        return view('Gat.learn');
    }
}
