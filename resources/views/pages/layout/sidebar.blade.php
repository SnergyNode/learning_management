<!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
{{--@if(!empty($rightSideBar))--}}
    {{--<div class="sidebar left sidebar-size-1 sidebar-mini-reveal sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">--}}
{{--@else--}}
    {{--<div class="sidebar left sidebar-size-3 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">--}}
{{--@endif--}}
        <div class="sidebar left sidebar-size-3 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
    <div data-scrollable>

        <div class="sidebar-block">
            <div class="profile">
                <a href="#">
                    <img src="{{ $person->image() }}" alt="people" class="img-circle width-80" />
                </a>
                <br>
                <br>
                <p class="fs-14 margin-none text-white">{{ $person->fullname() }}</p>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="active"><a href="{{ route('client.dashboard') }}"><i class="fa fa-bar-chart-o"></i><span>Dashboard</span></a></li>
            <li class="hasSubmenu">
                <a href="#course-menu"><i class="fa fa-mortar-board"></i><span>Courses</span></a>
                <ul id="course-menu">
                    <li><a href="{{ route('my-courses') }}"><span>My Courses</span></a></li>
                    <li><a href="#"><span>My Assessments</span></a></li>
                    <li><a href="{{ route('courses') }}"><span>Course List</span></a></li>
                    <li><a href="#"><span>Assessments</span></a></li>
                </ul>
            </li>
            <li class="hasSubmenu">
                <a href="#account-menu"><i class="fa fa-user"></i><span>Account</span></a>
                <ul id="account-menu">
                    <li><a href="#"><span>Manage Profile</span></a></li>
                    <li><a href="#"><span>Security</span></a></li>
                </ul>
            </li>
            <li><a href="#" onclick="event.preventDefault(); goto('{{ route('logout') }}')"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
        </ul>
    </div>
</div>

<!-- sidebar effects OUTSIDE of st-pusher: -->
<!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->