<?php

namespace App\Http\Controllers;

use App\Model\Assessment;
use App\Model\Question;
use App\User;
use Illuminate\Http\Request;

class UserController extends LogicController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('admin.pages.students.index')->with('users', $users);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //user private views.
    public function dashboard(Request $request){
        return view('pages.dashboard.index');
    }

    public function mycourses(){
        return view('pages.courses.my_courses');
    }
    public function showcourses(){
        return view('pages.courses.index');
    }

    public function curriculum(){
        return view('pages.courses.curriculum');
    }

    public function assessments(){
        $assessments = Assessment::get();
        return view('pages.assessment.index')
            ->with('assessments', $assessments);
    }

    public function take_assess($unid){
        $assessment = Assessment::where('unid', $unid)->first();
        if(!empty($assessment)){
            $questions = Question::where('assessment_key', $assessment->unid)->inRandomOrder()->get();
            return view('pages.assessment.take')
                ->with("questions",$questions)
                ->with("assessment",$assessment);
        }

        return back()->withErrors(['No resource found']);
    }

}
