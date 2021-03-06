@extends('layouts.main')

@section('content')

    <div class="st-content-inner padding-none">

        <div class="container-fluid">

            <div class="page-section">
                <div class="media v-middle">
                    <div class="media-body">
                        <h1 class="text-display-1 margin-none">Course Library</h1>
                        <p class="text-subhead">Browse through available courses.</p>
                    </div>

                </div>
            </div>

            <div class="row" data-toggle="isotope">
                <div class="item col-xs-12 col-sm-6 col-lg-4">
                    <div class="panel panel-default paper-shadow" data-z="0.5">

                        <div class="cover overlay cover-image-full hover">
                            <span class="img icon-block height-150 bg-lightred"></span>
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


                            <p class="small margin-none">
                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                            </p>

                        </div>
                        <hr class="margin-none" />
                        <div class="panel-body">

                            <p>Microsoft Office introduction which covers basic use of word, excel, power point etc. </p>

                            <div class="media v-middle">
                                <div class="media-left">
                                    <img src="{{ url('images/user.png') }}" alt="People" class="img-circle width-40" />
                                </div>
                                <div class="media-body">
                                    <h4><a href="">Organizer Name</a>
                                        <br/>
                                    </h4>
                                    Instructor
                                </div>
                            </div>

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
