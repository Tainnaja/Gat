<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answerdew;
use App\Article;
use App\Exam;
use Auth;
use Carbon\Carbon;
use App\History;
class FulltestController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['only' =>
        ['index','show','sendanswer']]);
     }
    public function index() {  
        try   
        {
            $fulltests = Exam::get();
            return view('Gat.fulltest', compact('fulltests'));        
        } catch (Exception $e) {
            return view('Gat.index');
        }
        
    }



    public function show($id){
        try   
        {
            // dd($id);
            $articles = Article::where( 'exam_id', '=', $id )->get();   
            $exam = Exam::find($id);
            
            $answers1 = Answerdew::where( 'article_id', '=', $articles[0]->id )->get(); 
            // dd($exam);
            $answers2 = Answerdew::where( 'article_id', '=', $articles[1]->id)->get();  

            if(empty($articles))
                abort(404);
            return view('Gat.exam', compact('articles','exam','answers1','answers2'));
        } catch (Exception $e) {
            return view('Gat.index');
        }
    }


    public function sendanswer(Request $request){
        $ans1 = 0;
        $ans2 = 0;
        $correct1 = 0;
        $correct2 = 0;
        $worng1 = 0;
        $worng2 = 0;
        $input = $request->all();
        // $exam = Exam::find($input['examID']);
        $articles = Article::where( 'exam_id', '=', $input['examID'] )->get(); 
        $answers1 = Answerdew::where( 'article_id', '=', $articles[0]->id )->get(); 
        $answers2 = Answerdew::where( 'article_id', '=', $articles[1]->id )->get();
        // dd($answers1[0]['text1_1']);
        for($i = 1 ; $i <11 ;$i++){
            for($j = 1 ; $j <5 ;$j++){
                if(!empty($input['set1_' . strval($i) .'_' . strval($j) . ''][0])){
                    if($input['set1_' . strval($i) .'_' . strval($j) . ''][0] == $answers1[0]['set1_' . strval($i) .'_' . strval($j) . '']){
                        $correct1 ++;
                    }
                    else {
                        $worng1 ++;
                    }
                }
                if(!empty($answers1[0]['set1_' . strval($i) .'_' . strval($j) . ''])){
                    $ans1 ++;
                }
                // dd($input['set1_' . strval($i) .'_' . strval($j) . '']);
            }
        }
        for($i = 1 ; $i <11 ;$i++){
            for($j = 1 ; $j <5 ;$j++){
                if(!empty($input['set1_' . strval($i) .'_' . strval($j) . ''][1])){
                    if($input['set1_' . strval($i) .'_' . strval($j) . ''][1] == $answers2[0]['set1_' . strval($i) .'_' . strval($j) . '']){
                        $correct2 ++;
                    }
                    else {
                        $worng2 ++;
                    }
                }
                if(!empty($answers2[0]['set1_' . strval($i) .'_' . strval($j) . ''])){
                    $ans2 ++;
                }
                // dd($input['set1_' . strval($i) .'_' . strval($j) . '']);
            }
        }
        $score1 = ((75/$ans1) * $correct1) - ($worng1 *3);
        $score2 = ((75/$ans2) * $correct2) - ($worng2 *3);
        $sumScore = $score1 + $score2;

        if($score1 < 0)
            $score1 = 0;
        if($score2 < 0)
            $score2 = 0;
        if($sumScore < 0)
            $sumScore = 0;
        // dd(Auth::user()->id);
        $history = new History;
        $history->score_1 = $score1;
        $history->score_2 = $score2;
        $history->total_score = $sumScore;
        $history->exam_id = $input['examID'];
        $history->exam_id = $input['examID'];
        $history->updated_at = Carbon::now();
        $history->created_at = Carbon::now();
        // $history->created_at = Carbon::createFromFormat('Y-m-d H', '1975-05-21 22');
        $history->user_id = Auth::user()->id;
        $history->save();

        return redirect('learn');
        // dd($worng1);
        // dd($input);

    }
}
