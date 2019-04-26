@extends('layouts.auth')

@section('title')
    Login 
@endsection

@section('content')
<!-- Authentication card start -->
<div class="login-card card-block auth-body">
    <form class="md-float-material" method="POST"  action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="text-center">
            <img src="assets/images/auth/logo.png" alt="logo.png">
        </div>
        <div class="auth-box">
            <div class="row m-b-20">
                <div class="col-md-12">
                    <h3 class="text-left txt-primary">Sign In</h3>
                </div>
                @include('partials._errors')
            </div>
            <hr/>
            <div class="input-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email Address" value="{{ old('email') }}" required>
                <span class="md-line"></span>
            </div>
            <div class="input-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <span class="md-line"></span>
            </div>
            <div class="row m-t-25 text-left">
                <div class="col-sm-7 col-xs-12">
                    <div class="checkbox-fade fade-in-primary">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                            <span class="text-inverse">Remember me</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                    <a href="" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="Sign in">
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-10">
                    <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
                    <p class="text-inverse text-left"><b>Your Autentification Team</b></p>
                </div>
                <div class="col-md-2">
                    <img src="assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                </div>
            </div>

        </div>
    </form>
    <!-- end of form -->
</div>
<!-- Authentication card end -->


<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
