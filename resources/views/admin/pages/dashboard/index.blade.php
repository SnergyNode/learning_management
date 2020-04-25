<?php $sidebar['dashboard'] = 'active'; ?>
@extends('admin.layouts.main')

@section('content')

    <div class="st-content-inner padding-none">

        <div class="container-fluid">

            <div class="page-section">
                <h1 class="text-display-1">Dashboard</h1>
            </div>

            <div class="row" data-toggle="isotope">
                <div class="item col-xs-12 col-lg-6">
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-heading">
                            <h4 class="text-headline margin-none">Users Overview</h4>
                            <p class="text-subhead text-light">users statistics</p>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <h5 class="text-center">Admin</h5>
                                    <p class="text-center">1</p>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <h5 class="text-center">Students</h5>
                                    <p class="text-center">1</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item col-xs-12 col-lg-6">
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-heading">
                            <h4 class="text-headline margin-none">Study Overview</h4>
                            <p class="text-subhead text-light">courses and assessment statistics</p>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <h5 class="text-center">Courses</h5>
                                    <p class="text-center">1</p>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <h5 class="text-center">Assessments</h5>
                                    <p class="text-center">1</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item col-xs-12 col-lg-6">
                    <div class="s-container">
                        <h4 class="text-headline margin-none">Notification</h4>
                        <p class="text-subhead text-light">Latest Notifications</p>
                    </div>
                    <div class="panel panel-default">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="media v-middle margin-v-0-10">
                                    <div class="media-body">
                                        <p class="text-subhead">
                                            <a href="#">
                                                <img src="{{ url('images/people/110/guy-1.jpg') }}" alt="person" class="width-30 img-circle" />
                                            </a> &nbsp;
                                            <a href="#">mosaicpro</a>
                                            <span class="text-caption text-light">24 min ago</span>
                                        </p>
                                    </div>
                                    <div class="media-right">
                                        <div class="width-50 text-right">
                                            <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                {{--<p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>--}}
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="item col-xs-12 col-lg-6">
                    <!--
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-heading">
                            <div class="media v-middle">
                                <div class="media-body">
                                    <h4 class="text-headline margin-none">Transactions</h4>
                                    <p class="text-subhead text-light">Latest from statement</p>
                                </div>
                                <div class="media-right">
                                    <a class="btn btn-white btn-flat" href="app-instructor-statement.html">Statement</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-subhead v-middle">
                                <tbody>
                                <tr>
                                    <td class="width-100 text-caption">
                                        <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                                    </td>
                                    <td>Adrian Demian</td>
                                    <td class="width-80 text-center"><a href="#">#9936</a></td>
                                    <td class="width-50 text-center">&dollar;28</td>
                                </tr>
                                <tr>
                                    <td class="width-100 text-caption">
                                        <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                                    </td>
                                    <td>Adrian Demian</td>
                                    <td class="width-80 text-center"><a href="#">#880</a></td>
                                    <td class="width-50 text-center">&dollar;60</td>
                                </tr>
                                <tr>
                                    <td class="width-100 text-caption">
                                        <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                                    </td>
                                    <td>Adrian Demian</td>
                                    <td class="width-80 text-center"><a href="#">#1758</a></td>
                                    <td class="width-50 text-center">&dollar;54</td>
                                </tr>
                                <tr>
                                    <td class="width-100 text-caption">
                                        <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                                    </td>
                                    <td>Adrian Demian</td>
                                    <td class="width-80 text-center"><a href="app-instructor-dashboard.html#">#7983</a></td>
                                    <td class="width-50 text-center">&dollar;97</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    -->
                </div>
            </div>

        </div>

    </div>

@endsection
