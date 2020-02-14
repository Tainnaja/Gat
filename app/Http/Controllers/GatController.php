<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answerdew;
use App\Article;
use App\Exam;
class GatController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['only' =>
        ['fulltest']]);
     }

    public function index() {  
        return view('Gat.index');
    }
    public function learn() {  
        return view('Gat.learn');
    }
    public function skillsGat() {  
        return view('Gat.skillsGat');
    }
    public function theory() {  
        return view('Gat.theory');
    }
    public function technique() {  
        return view('Gat.technique');
    }
    public function relationship() {  
        return view('Gat.relationship');
    }
    public function minitest() {  
        return view('Gat.minitest');
    }

    
}
