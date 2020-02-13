<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    // admin
    public function admin() {  
        return view('Gat.admin');
    }

    public function createTest() {  
        return view('Gat.createTest');
    }
}
