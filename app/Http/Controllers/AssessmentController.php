<?php

namespace App\Http\Controllers;

use App\Model\Assessment;
use Illuminate\Http\Request;

class AssessmentController extends MyController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assessments = Assessment::get();
        return view('admin.pages.assessment.index')->with('assessments', $assessments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.assessment.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assessment = new Assessment();
        $assessment->unid = $this->generateId('Ass', 27);
        $assessment->title = $request->input('title');
        $assessment->photo = $this->uploadImage();
        $assessment->course_id = $request->input('course_id');
        $assessment->mode = $request->input('mode');
        $assessment->duration = $request->input('duration');
        $assessment->active_from = $request->input('active_from');
        $assessment->expire_at = $request->input('expire_at');
        $assessment->type = $request->input('type');
        $assessment->ans_num_mode = $request->input('ans_num_mode');
        $assessment->active = true;
        $assessment->save();

        return redirect()->route('manage.assessment', $assessment->unid)->withMessage('Assessment Created, Add Questions and Answers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function show(Assessment $assessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assessment $assessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assessment $assessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assessment $assessment)
    {
        //
    }

    public function manage($unid){
        $assess = Assessment::whereUnid($unid)->first();
        if(!empty($assess)){
            return view('admin.pages.assessment.build')->with('assessment', $assess);
        }

        return redirect()->route('assess.index')->with('Resources not found');
    }
}
