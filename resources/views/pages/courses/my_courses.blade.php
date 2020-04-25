@extends('layouts.main')

@section('content')

    <div class="st-content-inner padding-none">

        <div class="container-fluid">

            <div class="page-section">
                <div class="media v-middle">
                    <div class="media-body">
                        <h1 class="text-display-1 margin-none">My courses</h1>
                    </div>
                    <div class="media-right">
                        <a class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated href="#you_are_here">All Courses</a>
                    </div>
                </div>
            </div>

            <div class="row" data-toggle="isotope">
                <div class="item col-xs-12 col-sm-6 col-lg-4">
                    <div class="panel panel-default paper-shadow" data-z="0.5">

                        <div class="panel-heading">
                            <div class="media media-clearfix-xs-min v-middle">
                                <div class="media-body text-caption text-light">
                                    Lessons 3 of 20
                                </div>
                                <div class="media-right">
                                    <div class="progress progress-mini width-100 margin-none">
                                        <div class="progress-bar progress-bar-red-300" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cover overlay cover-image-full hover">
                            <span class="img icon-block height-100 bg-lightred"></span>
                            <a href="#" class="padding-none overlay overlay-full icon-block bg-lightred">
                      <span class="v-center">
                <i class="fa fa-windows"></i>
            </span>
                            </a>

                            <a href="#" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                <span class="btn btn-circle btn-red-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                      </span>
                            </a>

                        </div>

                        <div class="panel-body">
                            <h4 class="text-headline margin-v-0-10"><a href="#">Introduction to Microsoft Office</a></h4>

                        </div>
                        <hr class="margin-none" />
                        <div class="panel-body">

                            <a class="btn btn-white btn-flat paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="{{ route('take.course') }}">Go to course</a>

                        </div>

                    </div>
                </div>

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
