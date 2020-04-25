@extends('layouts.login')

@section('content')
    <div id="content">
        <div class="container-fluid">

            <div class="lock-container" style="margin-top: 50px">
                @include('layouts.notice')
                <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                    <h5 class="text-display-1 text-center margin-bottom-none" style="font-size: 16px">Register</h5>
                    <p><small>For Demo Purpose</small></p>
                    <img src="{{ url('images/user.png') }}" class="img-circle width-80">

                    <form action="{{ route('sign_up') }}" method="post">
                        {{ csrf_field() }}
                        <div class="panel-body">
                            <div class="form-group">
                                <p class="text-left" style="color: #74787e">First name</p>
                                <div class="form-control-material">

                                    <input id="firstName" type="text" class="form-control" name="first_name" placeholder="First Name" autocomplete="off" value="{{ old('first_name') }}" required>
                                    {{--<label for="firstName"></label>--}}
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="text-left" style="color: #74787e">Last name</p>
                                <div class="form-control-material">

                                    <input id="lastName" type="text" class="form-control" name="last_name" placeholder="Last Name" autocomplete="off" value="{{ old('last_name') }}" required>
                                    {{--<label for="lastName"></label>--}}
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="text-left" style="color: #74787e">Email address</p>
                                <div class="form-control-material">

                                    <input id="email" type="email" class="form-control" name="email" placeholder="Email" autocomplete="off" value="{{ old('email') }}" required>
                                    {{--<label for="email"></label>--}}
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="text-left" style="color: #74787e">Password</p>
                                <div class="form-control-material">

                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                                    {{--<label for="password"></label>--}}
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="text-left" style="color: #74787e">Re-type password</p>
                                <div class="form-control-material">

                                    <input id="passwordConfirmation" type="password" class="form-control" name="confirm_password" placeholder="Password Confirmation" required>
                                    {{--<label for="passwordConfirmation"></label>--}}
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <div class="checkbox">
                                    <input type="checkbox" name="terms" id="agree" required />
                                    <label for="agree">* I Agree with <a href="#">Terms &amp; Conditions!</a></label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit">Register </button>
                            </div>

                        </div>


                    </form>
                    <a href="{{ route('home') }}" class="forgot-password">I have an account</a>
                    <br>

                </div>
            </div>

        </div>
    </div>
@endsection
