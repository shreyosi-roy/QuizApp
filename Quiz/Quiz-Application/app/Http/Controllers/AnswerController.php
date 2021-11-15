<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\Support\Facades\Session;

class AnswerController extends Controller
{

   public $point;
    
    public function index()
    {
        $data=Quiz::all();
        $i=0;

        return view('answer.index',compact('data','i'));
    }

    public function calculate(Request $req)
    {
        $quiz = Quiz::all();
        $point =0;

        foreach($quiz As $qz)
        {
            $a="correct$qz->id";
            if($qz->correct_answer == $req->$a)
            {
                $point++;
            }
        }

        return view("answer.view")->with(compact('point'));
 
    }

   

   
}

