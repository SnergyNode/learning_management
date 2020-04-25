@extends('layouts.login')

@section('content')
    <div id="content">
        <div class="container-fluid">

            <div class="lock-container">
                @include('layouts.notice')
                <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                    <h5 class="text-display-1 text-center margin-bottom-none" style="font-size: 16px">Sign In</h5>
                    <p><small>For Demo Purpose</small></p>
                    <img src="{{ url('images/user.png') }}" class="img-circle width-80">
                    <form action="{{ route('sign_in') }}" method="post">
                        {{ csrf_field() }}
                        <div class="panel-body">
                            <div class="form-group">
                                <p class="text-left" style="color: #74787e">Email address</p>
                                <div class="form-control-material">
                                    <input class="form-control" id="username" type="email" name="email" placeholder="Email" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="text-left" style="color: #74787e">Password</p>
                                <div class="form-control-material">
                                    <input class="form-control" id="password" type="password" name="password" placeholder="Enter Password">
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">Login <i class="fa fa-fw fa-unlock-alt"></i></button>
                            <a href="{{ route('forgot.password') }}" class="forgot-password">Forgot password?</a>
                            <a href="{{ route('register') }}" class="link-text-color">Create account</a>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
