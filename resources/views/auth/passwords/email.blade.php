<?php $page = 'forgot-password'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-md-6 offset-md-3">

                    <!-- Forgot Password Content -->
                    <div class="account-content">
                        <div class="align-items-center justify-content-center">
                            <div class="login-right">
                                <div class="login-header text-center">
                                    <a href="index"><img src="{{ asset('assets/logo/logo.png') }}" alt="logo"
                                            class="img-fluid"></a>
                                    <h3>First, let's find your account</h3>
                                    <p>Please enter your email or phone Number</p>
                                </div>
                                <form method="POST" action="{{ route('password.email') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group form-focus">
                                        <input type="email" name="email" class="form-control" required="autofocus"
                                            placeholder="{{ trans('global.login_email') }}">
                                        {{-- @if ($errors->has('email'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </em>
                                        @endif --}}
                                        <label class="focus-label">Email</label>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">FIND OUT
                                        PASSWORD</button>
                                    <div class="row form-row">
                                        <div class="col-6 text-start">
                                            <a class="forgot-link" href="{{ url('login') }}">Remember your password?</a>
                                        </div>
                                        <div class="col-6 text-end dont-have">New to Kofejob? <a
                                                href="{{ url('beforesignup') }}">Click here</a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Forgot Password Content -->

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->


    </div>
    <!-- /Main Wrapper -->
@endsection
