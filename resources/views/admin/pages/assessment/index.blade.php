<?php
    $sidebar['assess'] = 'active';
    $sidebar['course-parent'] = 'active';
?>
@extends('admin.layouts.main')

@section('content')

    <div class="st-content-inner padding-none">

        <div class="container-fluid">

            <div class="page-section">
                <h1 class="text-display-1">Assessments</h1>
            </div>

            <div class="row" data-toggle="isotope">
                <div class="item col-xs-12 col-lg-12">
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-heading">
                            <p class="text-subhead text-light mb-5">
                                List of Assessments
                                <a href="{{ route('assess.create') }}" class="btn btn-primary pull-right">New Assessment</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-info">
                                    <tr>
                                        
                                        <th scope="col">Title</th>
                                        <th scope="col">Mode</th>
                                        <th scope="col">Attempts</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($assessments as $assessment)
                                        <tr>
                                            <td>{{ $assessment->title }}</td>
                                            <td>{{ $assessment->modeInfo() }}</td>
                                            <td>{{ $assessment->attempts() }}</td>
                                            <td>
                                                <a href="{{ route('manage.assessment', $assessment->unid) }}" class="btn btn-primary">Manage <i class="fa fa-gears"></i></a>
                                                <a href="#" class="btn btn-danger">Trash <i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">No Assessments Found</td>
                                        </tr>
                                    @endforelse
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
