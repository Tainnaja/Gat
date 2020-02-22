<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answerdew;
use App\Article;
use App\Exam;
use App\Skill;
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
            $exams = Exam::where( 'id', '=', $histories[$i]->exam_id )->get(); 
            // dd($exams );  
            $histories[$i]->exam_id =  $exams[0]->exam_name;
        }

        $skill = Skill::where( 'user_id', '=', Auth::user()->id )->get();
        // dd($skill);
        
                // dd($histories);        
        return view('Gat.yourskill', compact('histories','exams','skill'));
    }
    public function achievement() {  
        $histories = History::where( 'user_id', '=', Auth::user()->id )->get(); 
        $exam = 0;
        $achievement = 0;
        $score =0;
        for($i=0; $i< count($histories); $i++){
            $score += $histories[$i]->total_score;
            $exam ++;
        }

        if((($exam*150)/$score) == 1){
            $achievement = 1;
        }
        else if((($exam*150)/$score) >1 && (($exam*150)/$score) < 1.1 ){
            $achievement = 2;
        }
        else if((($exam*150)/$score) >1.1 && (($exam*150)/$score) < 1.4 ){
            $achievement = 3;
        }
        else if((($exam*150)/$score) >1.4 && (($exam*150)/$score) < 1.6 ){
            $achievement = 5;
        }
        else{
            $achievement = 6;
        }

        // dd( $achievement );
        return view('Gat.achievement', compact('achievement'));
    }

    

    
}
