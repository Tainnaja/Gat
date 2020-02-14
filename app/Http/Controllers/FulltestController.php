<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answerdew;
use App\Article;
use App\Exam;
class FulltestController extends Controller
{
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
        // dd($id);
        $articles = Article::where( 'exam_id', '=', $id )->get();   
        $exam = Exam::find($id);
        $i=0;
        $answers1 = Answerdew::where( 'article_id', '=', $articles[0]->id )->get(); 
        $answers2 = Answerdew::where( 'article_id', '=', $articles[1]->id)->get();  
        // foreach($articles as $article){
        //     $i +=1;
            
        //     if($i = 1){
        //         $answers1 = Answerdew::where( 'article_id', '=', $article->id )->get();  
        //     }   
        //     else{
        //         dd($i);
        //         $answers2 = Answerdew::where( 'article_id', '=', $article->id)->get();  
        //     }         
            
        // }        
        // dd($answers1)  ;
        if(empty($articles))
            abort(404);
        return view('Gat.exam', compact('articles','exam','answers1','answers2'));
    }
}
