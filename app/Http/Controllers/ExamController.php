<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Answerdew;
use App\Article;
use App\Exam;

class ExamController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['only' =>
        ['admin','createTest']]);
     }
    // admin
    public function admin() {  
        try   
        {
            if (Auth::user()->role_id===2) 
            {
                return view('Exam.admin');
            }
            else
            {
               return view('Gat.index');
            }
        
         } catch (Exception $e) {
            return view('Gat.index');
        }
        
    }

    public function createTest() {  
        try   
        {
            if (Auth::user()->role_id===2) 
            {
                return view('Exam.createTest');
            }
            else
            {
               return view('Gat.index');
            }
        
         } catch (Exception $e) {
            return view('Gat.index');
        }
        
    }

    public function saveArticle(Request $request) {  
        try   
        {
            if (Auth::user()->role_id===2) 
            {
                $input = $request->all();
                // dd(count($input['set1-1-1']));
                // dd($input);
                $quizs = Exam::create($request->all());
                // $quizs = Article::create($request->all());
                for ($i=0; $i < count($input['set1-1-1']); ++$i) 
                {
                    $article = new Article;

                    $article->article_name = $input['set1-1-1'][$i];
                    $article->article_detail = $input['set1-1-2'][$i];
                }
                $quizs = Answerdew::create($request->all());


                $andwerdew = new Answerdew;
                // $andwerdew->text1-1 = $request->get('text1-1');
                // $andwerdew->text1-2 = $request->get('text1-2');
                // $andwerdew->save();
                // dd($request);
                return redirect('admin');
            }
            else
            {
               return view('Gat.index');
            }
        
         } catch (Exception $e) {
            return view('Gat.index');
        }
        
    }
}
