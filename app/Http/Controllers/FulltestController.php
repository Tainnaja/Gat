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
        ['index','show','sendanswer','edit','update']]);
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

    public function edit($id)
    {
        if (Auth::user()->role_id===2) 
        {           
            $exam = Exam::find($id);
            $article = Article::where( 'exam_id', '=', $id )->get();  
            $answers1 = Answerdew::where( 'article_id', '=', $article[0]->id )->get(); 
            $answers2 = Answerdew::where( 'article_id', '=', $article[1]->id)->get(); 
            // dd($article);
            if (empty($exam))
                abort(404);
            return view('Exam.edit' ,compact('article','exam','answers1','answers2'));
        }
        else{
            return view('Gat.index');
        }
    }

    public function update($id, Request $request)
    {
        if (Auth::user()->role_id===2) 
        {   
            $input = $request->all();
            // dd($input);
            $exam = Exam::findOrFail($id);
            $exam->exam_name = $input['exam_name'];
            $exam->save();

            $article = Article::findOrFail( $input['article1ID']);  
            $article->article_name = $input['article_name'][0];
            $article->article_detail = $input['article_detail'][0];
            //  dd($article);
            $article->save();

            $anwerdew = Answerdew::findOrFail( $input['answerdew1ID']);  
            $anwerdew->text1_1	= $input['text1_1'][0];
            $anwerdew->text1_2	= $input['text1_2'][0];
            $anwerdew->text1_3	= $input['text1_3'][0];
            $anwerdew->text1_4	= $input['text1_4'][0];
            $anwerdew->text1_5	= $input['text1_5'][0];
            $anwerdew->text1_6	= $input['text1_6'][0];
            $anwerdew->text1_7	= $input['text1_7'][0];
            $anwerdew->text1_8	= $input['text1_8'][0];
            $anwerdew->text1_9	= $input['text1_9'][0];
            $anwerdew->text1_10	= $input['text1_10'][0];            
            $anwerdew->set1_1_1	= $input['set1_1_1'][0];
            $anwerdew->set1_1_2	= $input['set1_1_2'][0];
            $anwerdew->set1_1_3	= $input['set1_1_3'][0];
            $anwerdew->set1_1_4	= $input['set1_1_4'][0];
            $anwerdew->set1_2_1	= $input['set1_2_1'][0];
            $anwerdew->set1_2_2	= $input['set1_2_2'][0];
            $anwerdew->set1_2_3	= $input['set1_2_3'][0];
            $anwerdew->set1_2_4	= $input['set1_2_4'][0];
            $anwerdew->set1_3_1	= $input['set1_3_1'][0];
            $anwerdew->set1_3_2	= $input['set1_3_2'][0];
            $anwerdew->set1_3_3	= $input['set1_3_3'][0];
            $anwerdew->set1_3_4	= $input['set1_3_4'][0];
            $anwerdew->set1_4_1	= $input['set1_4_1'][0];
            $anwerdew->set1_4_2	= $input['set1_4_2'][0];
            $anwerdew->set1_4_3	= $input['set1_4_3'][0];
            $anwerdew->set1_4_4	= $input['set1_4_4'][0];
            $anwerdew->set1_5_1	= $input['set1_5_1'][0];
            $anwerdew->set1_5_2	= $input['set1_5_2'][0];
            $anwerdew->set1_5_3	= $input['set1_5_3'][0];
            $anwerdew->set1_5_4	= $input['set1_5_4'][0];
            $anwerdew->set1_6_1	= $input['set1_6_1'][0];
            $anwerdew->set1_6_2	= $input['set1_6_2'][0];
            $anwerdew->set1_6_3	= $input['set1_6_3'][0];
            $anwerdew->set1_6_4	= $input['set1_6_4'][0];
            $anwerdew->set1_7_1	= $input['set1_7_1'][0];
            $anwerdew->set1_7_2	= $input['set1_7_2'][0];
            $anwerdew->set1_7_3	= $input['set1_7_3'][0];
            $anwerdew->set1_7_4	= $input['set1_7_4'][0];
            $anwerdew->set1_8_1	= $input['set1_8_1'][0];
            $anwerdew->set1_8_2	= $input['set1_8_2'][0];
            $anwerdew->set1_8_3	= $input['set1_8_3'][0];
            $anwerdew->set1_8_4	= $input['set1_8_4'][0];
            $anwerdew->set1_9_1	= $input['set1_9_1'][0];
            $anwerdew->set1_9_2	= $input['set1_9_2'][0];
            $anwerdew->set1_9_3	= $input['set1_9_3'][0];
            $anwerdew->set1_9_4	= $input['set1_9_4'][0];
            $anwerdew->set1_10_1	= $input['set1_10_1'][0];
            $anwerdew->set1_10_2	= $input['set1_10_2'][0];
            $anwerdew->set1_10_3	= $input['set1_10_3'][0];
            $anwerdew->set1_10_4	= $input['set1_10_4'][0];
            $anwerdew->save();




            $article = Article::findOrFail( $input['article2ID']);  
            $article->article_name = $input['article_name'][1];
            $article->article_detail = $input['article_detail'][1];
            //  dd($article);
            $article->save();
            $anwerdew = Answerdew::findOrFail( $input['answerdew2ID']);  
            $anwerdew->text1_1	= $input['text1_1'][1];
            $anwerdew->text1_2	= $input['text1_2'][1];
            $anwerdew->text1_3	= $input['text1_3'][1];
            $anwerdew->text1_4	= $input['text1_4'][1];
            $anwerdew->text1_5	= $input['text1_5'][1];
            $anwerdew->text1_6	= $input['text1_6'][1];
            $anwerdew->text1_7	= $input['text1_7'][1];
            $anwerdew->text1_8	= $input['text1_8'][1];
            $anwerdew->text1_9	= $input['text1_9'][1];
            $anwerdew->text1_10	= $input['text1_10'][1];            
            $anwerdew->set1_1_1	= $input['set1_1_1'][1];
            $anwerdew->set1_1_2	= $input['set1_1_2'][1];
            $anwerdew->set1_1_3	= $input['set1_1_3'][1];
            $anwerdew->set1_1_4	= $input['set1_1_4'][1];
            $anwerdew->set1_2_1	= $input['set1_2_1'][1];
            $anwerdew->set1_2_2	= $input['set1_2_2'][1];
            $anwerdew->set1_2_3	= $input['set1_2_3'][1];
            $anwerdew->set1_2_4	= $input['set1_2_4'][1];
            $anwerdew->set1_3_1	= $input['set1_3_1'][1];
            $anwerdew->set1_3_2	= $input['set1_3_2'][1];
            $anwerdew->set1_3_3	= $input['set1_3_3'][1];
            $anwerdew->set1_3_4	= $input['set1_3_4'][1];
            $anwerdew->set1_4_1	= $input['set1_4_1'][1];
            $anwerdew->set1_4_2	= $input['set1_4_2'][1];
            $anwerdew->set1_4_3	= $input['set1_4_3'][1];
            $anwerdew->set1_4_4	= $input['set1_4_4'][1];
            $anwerdew->set1_5_1	= $input['set1_5_1'][1];
            $anwerdew->set1_5_2	= $input['set1_5_2'][1];
            $anwerdew->set1_5_3	= $input['set1_5_3'][1];
            $anwerdew->set1_5_4	= $input['set1_5_4'][1];
            $anwerdew->set1_6_1	= $input['set1_6_1'][1];
            $anwerdew->set1_6_2	= $input['set1_6_2'][1];
            $anwerdew->set1_6_3	= $input['set1_6_3'][1];
            $anwerdew->set1_6_4	= $input['set1_6_4'][1];
            $anwerdew->set1_7_1	= $input['set1_7_1'][1];
            $anwerdew->set1_7_2	= $input['set1_7_2'][1];
            $anwerdew->set1_7_3	= $input['set1_7_3'][1];
            $anwerdew->set1_7_4	= $input['set1_7_4'][1];
            $anwerdew->set1_8_1	= $input['set1_8_1'][1];
            $anwerdew->set1_8_2	= $input['set1_8_2'][1];
            $anwerdew->set1_8_3	= $input['set1_8_3'][1];
            $anwerdew->set1_8_4	= $input['set1_8_4'][1];
            $anwerdew->set1_9_1	= $input['set1_9_1'][1];
            $anwerdew->set1_9_2	= $input['set1_9_2'][1];
            $anwerdew->set1_9_3	= $input['set1_9_3'][1];
            $anwerdew->set1_9_4	= $input['set1_9_4'][1];
            $anwerdew->set1_10_1	= $input['set1_10_1'][1];
            $anwerdew->set1_10_2	= $input['set1_10_2'][1];
            $anwerdew->set1_10_3	= $input['set1_10_3'][1];
            $anwerdew->set1_10_4	= $input['set1_10_4'][1];
            $anwerdew->save();

            return view('Exam.admin');
        }
        else{
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
