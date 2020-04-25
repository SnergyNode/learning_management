<?php
    $sidebar['assess'] = 'active';
    $sidebar['course-parent'] = 'active';
?>
@extends('admin.layouts.main')

@section('content')

    <div class="st-content-inner padding-none">

        <div class="container-fluid">

            <div class="page-section">
                <h4 class="fs-14">Manage Assessment | {{ $assessment->title }}</h4>
            </div>

            <div class="row" data-toggle="isotope">
                <div class="item col-xs-12 col-lg-12">
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-heading">
                            <p class="text-subhead text-light mb-5">
                                Assessment Manager

                            </p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="">
                                <h5 class="">Assessment Info</h5>
                                <form action="{{ route('assess.update', $assessment->unid) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <lable>Title *</lable>
                                                <input type="text" name="title" class="form-control" autocomplete="off" placeholder="Assessment Title" value="{{ $assessment->title }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <lable>Course</lable>
                                                <select name="course_id" class="form-control" autocomplete="off" >
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <lable>Mode *</lable>
                                                <select required name="mode" class="form-control" autocomplete="off" >
                                                    <option value="timed" {{ $assessment->mode==='timed'?'selected':'' }}>Timed</option>
                                                    <option value="not_timed" {{ $assessment->mode==='not_timed'?'selected':'' }}>Not Timed</option>
                                                    <option value="timed_expire" {{ $assessment->mode==='timed_expire'?'selected':'' }}>Timed and Expiration</option>
                                                    <option value="timed_begin" {{ $assessment->mode==='timed_begin'?'selected':'' }}>Timed and Entry Hour</option>
                                                    <option value="timed_begin_expire" {{ $assessment->mode==='timed_begin_expire'?'selected':'' }}>Timed, Entry Hour and Expiration</option>
                                                    <option value="begin_expire" {{ $assessment->mode==='begin_expire'?'selected':'' }}>Entry Hour and Expiration</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <lable>Duration | Minutes <small> (ignore if mode is not timed, numbers only)</small></lable>
                                                <input type="text" name="duration" class="form-control" autocomplete="off" placeholder="Duration in minutes">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <lable>Active From<small> (ignore if mode is does not contain Entry Hour)</small></lable>
                                                <input type="time" name="active_from" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <lable>Expire Time<small> (ignore if mode is does not contain Expiration)</small></lable>
                                                <input type="time" name="expire_at" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <lable>Answer Numbering Mode</lable>
                                                <select required name="ans_num_mode" class="form-control" autocomplete="off" >
                                                    <option value="numeric">Numbers</option>
                                                    <option value="alphabet">Alphabet</option>
                                                    <option value="roman">Roman Numerals</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <lable>Update </lable>
                                                <button class="btn btn-primary btn-block" type="submit">Update Assessment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <hr>
                                <h5 class="">Question Input</h5>
                                <form action="{{ route('quest.store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <lable>Title *</lable>
                                                <input type="text" name="title" class="form-control" autocomplete="off" placeholder="Assessment Title" value="{{ $assessment->title }}">
                                            </div>
                                        </div>
                                    </div>



                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
