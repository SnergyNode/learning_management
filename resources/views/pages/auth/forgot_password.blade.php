@extends('layouts.login')

@section('content')
    <div id="content">
        <div class="container-fluid">

            <div class="lock-container">
                @include('layouts.notice')
                <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                    <h5 class="text-display-1 text-center margin-bottom-none" style="font-size: 16px">Forgot Password?</h5>
                    <img src="{{ url('images/user.png') }}" class="img-circle width-80">
                    <form action="{{ route('forgot_password') }}" method="post">
                        {{ csrf_field() }}
                        <div class="panel-body">
                            <div class="form-group mb-5">
                                <p class="text-left" style="color: #74787e">Email Address</p>
                                <div class="form-control-material">
                                    <input class="form-control" id="username" type="email" name="email" placeholder="Email" autocomplete="off">

                                </div>
                            </div>


                            <button class="btn btn-primary mt-5" type="submit">Send Reset Link <i class="fa fa-fw fa-envelope"></i></button>
                            <a href="{{ route('home') }}" class="forgot-password">Login</a>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
