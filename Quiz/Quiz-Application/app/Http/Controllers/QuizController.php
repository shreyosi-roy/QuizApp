<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizRequest;
use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\Support\Facades\Session;


class QuizController extends Controller
{
   public $data= [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Quiz::all();
        $i=0;

        return view('quiz.quizquestion',compact('data','i'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuizRequest $request)
    {
        $quiz = $request->all();

        if (Quiz::create($quiz))
        {
            Session::flash('message','New question created');
        }

        return redirect()->to('quiz');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['quiz'] = Quiz::find($id);
        return view('quiz.show',$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['quiz'] =Quiz::findOrFail($id);
       

        return view('quiz.form',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $quiz = Quiz::find($id);
        $quiz->Question = $data['Question'];
        $quiz->Option_one = $data['Option_one'];
        $quiz->Option_two = $data['Option_two'];
        $quiz->Option_three = $data['Option_three'];
        $quiz->Option_four = $data['Option_four'];
        $quiz->correct_answer = $data['correct_answer'];

        if($quiz->save())
        {
            Session::flash('message','Quiz updated successfully');

        }

        return redirect()->to('quiz');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Quiz::find($id)->delete())
        {
            Session::flash('message','Question Deleted');
        }
        return redirect()->to('quiz');
    }
}
