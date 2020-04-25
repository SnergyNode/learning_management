@extends('layouts.main')

@section('content')

    <div class="st-content-inner padding-none">

        <div class="container-fluid">

            <div class="page-section">
                <h1 class="text-display-1 margin-none">Overview</h1>
            </div>

            @if(!$person->active)
                <div class="panel panel-default">
                    <div class="media v-middle">
                        <div class="media-left">
                            <div class="bg-red-400 text-white">
                                <div class="panel-body">
                                    <i class="fa fa-warning fa-fw fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="media-body">
                            Email not active. send activation link to <span class="text-body-2"> {{ $person->email }}. </span>
                        </div>
                        <div class="media-right media-padding">
                            <a class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated href="{{ route('re.activate.mail') }}">
                                Resend Link
                            </a>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row" data-toggle="isotope">
                <div class="item col-xs-12 col-lg-6">
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-heading">
                            <h4 class="text-headline margin-none">Courses</h4>
                            <p class="text-subhead text-light">Your recent courses</p>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item media v-middle">
                                <div class="media-body">
                                    <a href="#" class="text-subhead list-group-link">Introduction to Microsoft Office</a>
                                </div>
                                <div class="media-right">
                                    <div class="progress progress-mini width-100 margin-none">
                                        <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%;">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="panel-footer text-right">
                            <a href="#" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated > View all</a>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-12 col-lg-6">
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-heading">
                            <h4 class="text-headline margin-none">Quizzes</h4>
                            <p class="text-subhead text-light">Your recent performance</p>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item media v-middle">
                                <div class="media-body">
                                    <h4 class="text-subhead margin-none">
                                        <a href="#" class="list-group-link">Title of quiz goes here?</a>
                                    </h4>
                                    <div class="caption">
                                        <span class="text-light">Course:</span>
                                        <a href="#">Basics of HTML</a>
                                    </div>
                                </div>
                                <div class="media-right text-center">
                                    <div class="text-display-1">5.8</div>
                                    <span class="caption text-light">Good</span>
                                </div>
                            </li>
                            <li class="list-group-item media v-middle">
                                <div class="media-body">
                                    <h4 class="text-subhead margin-none">
                                        <a href="#" class="list-group-link">Directives & Routing</a>
                                    </h4>
                                    <div class="caption">
                                        <span class="text-light">Course:</span>
                                        <a href="#">Angular in Steps</a>
                                    </div>
                                </div>
                                <div class="media-right text-center">
                                    <div class="text-display-1 text-green-300">9.8</div>
                                    <span class="caption text-light">Great</span>
                                </div>
                            </li>
                            <li class="list-group-item media v-middle">
                                <div class="media-body">
                                    <h4 class="text-subhead margin-none">
                                        <a href="#" class="list-group-link">Responsive & Retina</a>
                                    </h4>
                                    <div class="caption">
                                        <span class="text-light">Course:</span>
                                        <a href="#">Bootstrap Foundations</a>
                                    </div>
                                </div>
                                <div class="media-right text-center">
                                    <div class="text-display-1 text-red-300">3.4</div>
                                    <span class="caption text-light">Failed</span>
                                </div>
                            </li>
                        </ul>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="#"> Go to Results</a>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-12 col-lg-6">
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-heading">
                            <h4 class="text-headline">Accomplishments</h4>
                        </div>
                        <div class="panel-body">
                            <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                <i class="fa fa-file-text"></i>
                            </a>
                            <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                <i class="fa fa-file-text"></i>
                            </a>
                            <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                <i class="fa fa-file-text"></i>
                            </a>
                            <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                <i class="fa fa-file-text"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--
                <div class="item col-xs-12 col-lg-6">
                    <h4 class="text-headline margin-none">Forum Activity</h4>
                    <p class="text-subhead text-light">Latest forum topics & comments</p>
                    <ul class="list-group relative paper-shadow" data-hover-z="0.5" data-animated>
                        <li class="list-group-item paper-shadow">
                            <div class="media v-middle">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="{{ url('images/user.png') }}" alt="person" class="img-circle width-40" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="app-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                    <div class="text-light">
                                        Topic: <a href="app-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                    </div>
                                </div>
                                <div class="media-right">
                                    <div class="width-60 text-right">
                                        <span class="text-caption text-light">1 hr ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item paper-shadow">
                            <div class="media v-middle">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="{{ url('images/user.png') }}" alt="person" class="img-circle width-40" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="app-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                    <div class="text-light">
                                        Topic: <a href="app-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                    </div>
                                </div>
                                <div class="media-right">
                                    <div class="width-60 text-right">
                                        <span class="text-caption text-light">2 hrs ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item paper-shadow">
                            <div class="media v-middle">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="{{ url('images/user.png') }}" alt="person" class="img-circle width-40" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="app-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                    <div class="text-light">
                                        Topic: <a href="app-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                    </div>
                                </div>
                                <div class="media-right">
                                    <div class="width-60 text-right">
                                        <span class="text-caption text-light">3 hr ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item paper-shadow">
                            <div class="media v-middle">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="{{ url('images/user.png') }}" alt="person" class="img-circle width-40" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="app-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                    <div class="text-light">
                                        Topic: <a href="app-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                    </div>
                                </div>
                                <div class="media-right">
                                    <div class="width-60 text-right">
                                        <span class="text-caption text-light">4 hr ago</span>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
                -->
            </div>

            <br/>

        </div>

    </div>


@endsection
