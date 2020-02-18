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
        ['admin','createTest'.'editarticle']]);
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
                $exam = Exam::create($request->all());
                // $quizs = Article::create($request->all());
                for ($i=0; $i < 2; ++$i) 
                {
                    $article = new Article;
                    $article->article_name = $input['article_name'][$i];
                    $article->article_detail = $input['article_detail'][$i];
                    $exam = Exam::where('exam_name', $_POST['exam_name'])->first();
                    $article->exam_id = $exam->id;
                    $article->save();

                    // dd($input['text1_1'][$i]);
                    $anwerdew = new Answerdew;
                    $anwerdew->text1_1	= $input['text1_1'][$i];
                    $anwerdew->text1_2	= $input['text1_2'][$i];
                    $anwerdew->text1_3	= $input['text1_3'][$i];
                    $anwerdew->text1_4	= $input['text1_4'][$i];
                    $anwerdew->text1_5	= $input['text1_5'][$i];
                    $anwerdew->text1_6	= $input['text1_6'][$i];
                    $anwerdew->text1_7	= $input['text1_7'][$i];
                    $anwerdew->text1_8	= $input['text1_8'][$i];
                    $anwerdew->text1_9	= $input['text1_9'][$i];
                    $anwerdew->text1_10	= $input['text1_10'][$i];                    
                    $anwerdew->set1_1_1	= $input['set1_1_1'][$i];
                    $anwerdew->set1_1_2	= $input['set1_1_2'][$i];
                    $anwerdew->set1_1_3	= $input['set1_1_3'][$i];
                    $anwerdew->set1_1_4	= $input['set1_1_4'][$i];
                    $anwerdew->set1_2_1	= $input['set1_2_1'][$i];
                    $anwerdew->set1_2_2	= $input['set1_2_2'][$i];
                    $anwerdew->set1_2_3	= $input['set1_2_3'][$i];
                    $anwerdew->set1_2_4	= $input['set1_2_4'][$i];
                    $anwerdew->set1_3_1	= $input['set1_3_1'][$i];
                    $anwerdew->set1_3_2	= $input['set1_3_2'][$i];
                    $anwerdew->set1_3_3	= $input['set1_3_3'][$i];
                    $anwerdew->set1_3_4	= $input['set1_3_4'][$i];
                    $anwerdew->set1_4_1	= $input['set1_4_1'][$i];
                    $anwerdew->set1_4_2	= $input['set1_4_2'][$i];
                    $anwerdew->set1_4_3	= $input['set1_4_3'][$i];
                    $anwerdew->set1_4_4	= $input['set1_4_4'][$i];
                    $anwerdew->set1_5_1	= $input['set1_5_1'][$i];
                    $anwerdew->set1_5_2	= $input['set1_5_2'][$i];
                    $anwerdew->set1_5_3	= $input['set1_5_3'][$i];
                    $anwerdew->set1_5_4	= $input['set1_5_4'][$i];
                    $anwerdew->set1_6_1	= $input['set1_6_1'][$i];
                    $anwerdew->set1_6_2	= $input['set1_6_2'][$i];
                    $anwerdew->set1_6_3	= $input['set1_6_3'][$i];
                    $anwerdew->set1_6_4	= $input['set1_6_4'][$i];
                    $anwerdew->set1_7_1	= $input['set1_7_1'][$i];
                    $anwerdew->set1_7_2	= $input['set1_7_2'][$i];
                    $anwerdew->set1_7_3	= $input['set1_7_3'][$i];
                    $anwerdew->set1_7_4	= $input['set1_7_4'][$i];
                    $anwerdew->set1_8_1	= $input['set1_8_1'][$i];
                    $anwerdew->set1_8_2	= $input['set1_8_2'][$i];
                    $anwerdew->set1_8_3	= $input['set1_8_3'][$i];
                    $anwerdew->set1_8_4	= $input['set1_8_4'][$i];
                    $anwerdew->set1_9_1	= $input['set1_9_1'][$i];
                    $anwerdew->set1_9_2	= $input['set1_9_2'][$i];
                    $anwerdew->set1_9_3	= $input['set1_9_3'][$i];
                    $anwerdew->set1_9_4	= $input['set1_9_4'][$i];
                    $anwerdew->set1_10_1	= $input['set1_10_1'][$i];
                    $anwerdew->set1_10_2	= $input['set1_10_2'][$i];
                    $anwerdew->set1_10_3	= $input['set1_10_3'][$i];
                    $anwerdew->set1_10_4	= $input['set1_10_4'][$i];
                    $article = Article::where('article_detail', $input['article_detail'][$i])->first();
                    $anwerdew->article_id = $article->id;
                    $anwerdew->save();
                }
                // $answerdew = Answerdew::create($request->all());


                // $andwerdew = new Answerdew;
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

    
    public function editarticle() {  
        if (Auth::user()->role_id===2) 
        {
            $exams = Exam::get();
            return view('Exam.editarticle', compact('exams'));
        }
        else{
            return view('Gat.index');
        }
    }
}
