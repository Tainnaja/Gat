<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
}
