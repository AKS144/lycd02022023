<?php $page="login";?>
@extends('layout.mainlayout')
@section('content')		
<style>
	.btn-block-login {
    width: 34%;
}
</style>

<!-- Page Content -->
			<div class="content">
				<div class="container">					
					<div class="row">
						<div class="col-md-6 offset-md-3">
							
							<!-- Login Content -->
							<div class="account-content">
								<div class="align-items-center justify-content-center">
									<div class="login-right">
										<div class="login-header text-center">
											<a href="index"><h2>LYTAA</h2><!-- <img src="assets/img/logo-01.png" alt="logo" class="img-fluid"> --></a>
											<!-- <h3>Welcome Back</h3>
											<p>Don't miss your next opportunity. Sign in to stay updated on your professional world.</p> -->
										</div>
										<form method="POST" action="{{ route('loginWithOtp') }}">
											@csrf
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="mobile" id="mobile">
												<label class="focus-label">Phone No.</label>
											</div>

											<div class="form-group form-focus">
											    <input id="otp" type="text" class="form-control floating" name="otp"> 	
												<label for="password" class="focus-label">otp</label>	
											</div>
																					
											<!-- <div class="form-group">
												<label class="custom_check">
													 Resend OTP
												</label>
											</div>  -->
											{{-- <div class="text-center">
											   <button class="btn btn-primary btn-block-login btn-sm login-btn" type="submit">Login</button>
										    </div>			 --}}

											<div class="form-group row mb-0 otp">
												<div class="col-md-8 offset-md-4">
													<button type="submit" class="btn btn-primary btn-block-login btn-sm login-btn">
														{{ __('Login') }}
													</button><a onclick="resendOtp()" href="">Resend</a>
												</div>
											</div>			
											
											
											
										</form>
										<div class="form-group row send-otp">
											<div class="col-md-8 offset-md-4">
												<button class="btn btn-primary btn-block-login btn-sm login-btn" onclick="sendOtp()">Send OTP</button>
											</div>
										</div>
										<div class="row">
												<div class="col-6 text-start">
													<a class="forgot-link" href="forgot-password">Forgot Password ?</a>
												</div>
											    <div class="col-6 text-end dont-have">New to LYTAA? <a href="register">Click here</a></div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Login Content -->
								
						</div>
					</div>
				</div>
			</div>					
			<!-- /Page Content -->

        </div>
		<!-- /Main Wrapper -->
@endsection

@section('script')

@stop