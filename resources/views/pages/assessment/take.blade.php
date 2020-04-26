<?php
    $injections = ['pages.assessment.logic'];
?>
@extends('layouts.main')

@section('content')



    <div class="st-content-inner padding-top-none">

        <div class="page-section half bg-white">
            <div class="container-fluid">
                <div class="section-toolbar">
                    <div class="cell">
                        <div class="media width-120 v-middle margin-none">
                            <div class="media-left">
                                <div class="icon-block bg-grey-200 s30"><i class="fa fa-question"></i></div>
                            </div>
                            <div class="media-body">
                                <p class="text-body-2 text-light margin-none">Questions</p>
                                <p class="text-title text-primary margin-none">{{ $questions->count() }}</p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <br>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-lg-3 col-xl-3 col-sm-12">
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-heading">
                            <h6 class="text-center text-muted" style="margin: 0; padding: 0;">Time Left</h6>
                            <div class="tk-countdown" data-val="{{ empty($assessment->duration)?0:$assessment->duration }}" style="border: transparent"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="page-section equal" style="padding-top: 0px;">
            <div class="container-fluid">
                <div class="text-subhead-2 text-light">Question <span class="current_index">1</span> of {{ $questions->count() }}</div>
                <div class="">
                    <div class="row">
                        @foreach($questions as $key=>$question)
                            <div class="col-md-12 show_{{ $key }}" style="display: {{ $key===0?'block':'none' }}">
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <div class="panel-heading">
                                        <h4 class="text-headline">Questions on {{ $assessment->title }}</h4>
                                    </div>
                                    <div class="panel-body">
                                        <p class="text-body-2">{{ $question->question }}</p>
                                    </div>
                                </div>

                                <div class="text-subhead-2 text-light">Your Answer</div>
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <div class="panel-body">
                                        @foreach($question->randomAnswers() as $akey=>$answer)
                                            <div class="{{ $question->ans_input }} {{ $question->ans_input }}-primary">
                                                <input id="{{ $question->ans_input.$key.$akey }}" type="{{ $question->ans_input }}" {{ $question->req() }} name="{{ $question->unid }}" value="{{ $answer->unid }}">
                                                <label for="{{ $question->ans_input.$key.$akey }}">{{ $answer->answer }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="panel-footer">
                                        <div class="">
                                            <a href="#" onclick="event.preventDefault(); prevQst('{{ $key }}', '{{ $questions->count() }}');" class="btn btn-primary btn_prev " style="display: none"><i class="fa fa-chevron-left fa-fw"></i> Back </a>

                                            <a href="#" onclick="event.preventDefault(); nextQst('{{ $key }}', '{{ $questions->count() }}');" class="btn btn-primary btn_next pull-right" style="display: {{ $question->count()===1?'none':'block' }}"> Next <i class="fa fa-chevron-right fa-fw"></i> </a>

                                            <a href="#" onclick="event.preventDefault()" class="btn btn-success pull-right btn_submit" style="display: {{ $question->count() !== 1?'none':'block' }}">Complete <i class="fa fa-check"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
