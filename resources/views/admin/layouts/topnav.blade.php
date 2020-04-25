<!-- Fixed navbar -->
<div class="navbar navbar-size-large navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand navbar-brand-primary navbar-brand-logo navbar-nav-padding-left">
                <a class="svg" href="app-student-dashboard.html">
                    {{--@include('pages.dashboard.svg')--}}
                    LEARN MGT
                </a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav">
                <!--

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Instructor <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="app-instructor-dashboard.html">Dashboard</a></li>
                        <li><a href="app-instructor-courses.html">My Courses</a></li>
                        <li><a href="app-instructor-course-edit-course.html">Edit Course</a></li>
                        <li><a href="app-instructor-earnings.html">Earnings</a></li>
                        <li><a href="app-instructor-statement.html">Statement</a></li>
                        <li><a href="app-instructor-profile.html">Edit Profile</a></li>
                        <li><a href="app-instructor-billing.html">Edit Billing</a></li>
                        <li><a href="app-instructor-messages.html">Messages</a></li>
                    </ul>
                </li>
                -->
            </ul>
            <ul class="nav navbar-nav navbar-nav-bordered navbar-right">
                <!-- notifications -->
                <li class="dropdown notifications updates">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge badge-primary">1</span>
                    </a>
                    <ul class="dropdown-menu" role="notification">
                        <li class="dropdown-header">Notifications</li>
                        <li class="media">
                            <div class="pull-right">
                                <span class="label label-success">New</span>
                            </div>
                            <div class="media-left">
                                <i class="fa fa-info-circle" style="font-size: 30px"></i>
                            </div>
                            <div class="media-body">
                                New Course Available <a href="#">Course Title.</a>
                                <br/>
                                <span class="text-caption text-muted">5 mins ago</span>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- // END notifications -->
                <!-- User -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                        <img src="{{ $person->image() }}" alt="Bill" class="img-circle" width="40" /> {{ $person->first_name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#" onclick="event.preventDefault(); goto('{{ route('admin.logout') }}')">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->

    </div>
</div>