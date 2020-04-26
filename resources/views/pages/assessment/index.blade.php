@extends('layouts.main')

@section('content')

    <div class="st-content-inner padding-none">

        <div class="container-fluid">

            <div class="page-section">
                <div class="media v-middle">
                    <div class="media-body">
                        <h1 class="text-display-1 margin-none">Available Assessments</h1>
                    </div>
                    <div class="media-right">
                        <a class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated href="#you_are_here">All Assessments</a>
                    </div>
                </div>
            </div>

            <div class="row" data-toggle="isotope">
                @forelse($assessments as $assessment)
                    <div class="item col-xs-3 col-sm-12 col-lg-4">
                        <div class="panel panel-default paper-shadow" data-z="0.5">
                            <div class="panel-heading">
                                <h4 class="text-headline margin-none">{{ $assessment->title }}</h4>
                                <p class="text-subhead text-light">{{ $assessment->type }}</p>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <h5 class="text-center">Questions</h5>
                                        <p class="text-center">{{ $assessment->questions->count() }}</p>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="text-center">
                                            <a href="{{ route('take.assessment', $assessment->unid) }}" class="btn btn-default">Take Assessment</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <h5 class="text-center">No Assessments</h5>
                @endforelse


            </div>

            <!--
            <ul class="pagination margin-top-none">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>

            -->

        </div>

    </div>

@endsection
