<?php
    $sidebar['assess'] = 'active';
    $sidebar['course-parent'] = 'active';
?>
@extends('admin.layouts.main')

@section('content')

    <div class="st-content-inner padding-none">

        <div class="container-fluid">

            <div class="page-section">
                <h4 class="fs-14">New Assessments</h4>
            </div>

            <div class="row" data-toggle="isotope">
                <div class="item col-xs-12 col-lg-12">
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-heading">
                            <p class="text-subhead text-light mb-5">
                                Create New Assessment

                            </p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form action="{{ route('assess.store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}



                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
