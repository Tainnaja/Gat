<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answerdew;
use App\Article;
use App\Exam;
use App\History;
use Auth;
class GatController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['only' =>
        ['fulltest','yourskill']]);
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

    public function yourskill(){
        $histories = History::where( 'user_id', '=', Auth::user()->id )->get(); 
        for($i=0; $i< count($histories); $i++){
            $articles = Article::where( 'exam_id', '=', $histories[$i]->exam_id )->get(); 
            // dd($articles );  
            $histories[$i]->exam_id =  $articles[0]->article_name;
        }
        
                // dd($histories);        
        return view('Gat.yourskill', compact('histories','articles'));
    }

    
}
