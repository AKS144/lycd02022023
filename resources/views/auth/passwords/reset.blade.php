<?php $page="forgot-password";?>
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
											<a href="index"><img src="assets/img/logo-01.png" alt="logo" class="img-fluid"></a>
											<h3>First, let's find your account</h3>
											<p>Please enter your email or phone Number</p>
										</div>
										<form method="POST" action="{{ route('password.request') }}">
										   {{ csrf_field() }}
										      <input name="token" value="{{ $token }}" type="hidden">
											<div class="form-group form-focus">
												<input type="email" name="email" class="form-control floating">
												<label class="focus-label">Email</label>
												@if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
											</div>
											<div class="form-group form-focus">
												<input type="password" name="password" class="form-control floating">
												<label class="focus-label">Password</label>
												@if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
											</div>
											<div class="form-group form-focus">
												<input type="password" name="password_confirmation" class="form-control floating">
												<label class="focus-label">Confirm password</label>
												@if ($errors->has('password_confirmation'))
                                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                                @endif
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Submit</button>
											<div class="row form-row">
											<div class="col-6 text-start">
												<a class="forgot-link" href="login">Remember your password?</a>
											</div>
											<div class="col-6 text-end dont-have">New to Kofejob? <a href="register">Click here</a></div>
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