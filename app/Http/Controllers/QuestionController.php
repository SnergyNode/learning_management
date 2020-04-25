<?php

namespace App\Http\Controllers;

use App\Model\Answer;
use App\Model\Question;
use Illuminate\Http\Request;

class QuestionController extends MyController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $question = new Question();
        $question->unid = $this->generateId('Qs', 28);
        $question->assessment_key = $request->input('assessment_key');
        $question->question = $request->input('question');
        $question->ans_input = $request->input('ans_input');

        //ensure there is a correct answer selected before submitting
        $none_right = true;
        foreach ($request->input('item_answer_is_correct') as $key=>$val){
            if($val==='yes'){
                $none_right = false;
            }
        }

        if($none_right){
            return back()->withErrors(['No correct answer selected']);
        }

        $answer_items = $request->input('item_answer_is_correct');
        foreach ($request->input('item_answer_option') as $key=>$val){
            $answer = new Answer();
            $answer->unid = $this->generateId('Ans', 27);
            $answer->assessment_key = $request->input('assessment_key');
            $answer->question_key = $question->unid;
            $answer->answer = $val;
            $answer->correct = $answer_items[$key]==="yes"?true:false;
            $answer->save();
        }

        $question->save();

        return back()->withMessage('Question saved successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
