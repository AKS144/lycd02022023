<?php $page="login";?>
@extends('layout.mainlayout')
@section('content')		
<style>
	.btn-block-login {
    width: 34%;
}

.padding-form{
	padding: 12px 85px 40px 86px;
}

@media only screen and (max-width: 600px) {
	.padding-form{
	padding: 0px;
}
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
											<a href="index"><!-- <img src="assets/img/logo-01.png" alt="logo" class="img-fluid"> --></a>
											<h3>Welcome Back</h3>
											<p>Don't miss your next opportunity. Sign in to stay updated on your professional world.</p>
										</div>
										<form method="POST" action="{{ route('login') }}" class="padding-form" >
											@csrf
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="email">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input name="password" type="password" class="form-control floating">
												<label class="focus-label">Password</label>
											</div>											
											<div class="form-group">
												<label class="custom_check">
													<input type="checkbox" name="remember">												
													<span class="checkmark"></span> Remember Me
												</label>
											</div>
											<div class="text-center">
											<button class="btn btn-primary btn-block-login btn-sm login-btn" type="submit">Login</button>
										   </div>
											<div class="login-or">
												<p>Or login with</p>
											</div>
											<div class="row social-login">
												<div class="col-4" style="display: block; margin-left:auto;margin-right:auto;text-align: center;">
													<a href="{{ route('otplogin') }}" > 
													<button type="button" class="icon-button social-signing-button google-signing-button"><span class="lFICM06 provider-icon" aria-hidden="true" style="width: 18px; height: 18px;"> </span>
                            <span><i class="fa fa-phone" aria-hidden="true"></i>
</span>
                        </button></a>
												</div>
												<div class="col-4" style="display: block; margin-left:auto;margin-right:auto;text-align: center;">
												<button type="button" class="icon-button social-signing-button facebook-signing-button"><span class="lFICM06 provider-icon" aria-hidden="true" style="width: 18px; height: 18px;"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 10.0022C20.0004 8.09104 19.4532 6.2198 18.4231 4.61003C17.393 3.00026 15.9232 1.71938 14.1877 0.919062C12.4522 0.118741 10.5237 -0.167503 8.63053 0.0942223C6.73739 0.355948 4.9589 1.15468 3.50564 2.39585C2.05237 3.63701 0.985206 5.26863 0.430495 7.0975C-0.124217 8.92636 -0.143239 10.8759 0.37568 12.7152C0.894599 14.5546 1.92973 16.2067 3.35849 17.476C4.78726 18.7453 6.54983 19.5786 8.4375 19.8772V12.8922H5.89875V10.0022H8.4375V7.79843C8.38284 7.28399 8.44199 6.76382 8.61078 6.2748C8.77957 5.78577 9.05386 5.33986 9.4142 4.96866C9.77455 4.59746 10.2121 4.31007 10.6959 4.12684C11.1797 3.94362 11.6979 3.86905 12.2137 3.90843C12.9638 3.91828 13.7121 3.98346 14.4525 4.10343V6.56718H13.1925C12.9779 6.53911 12.7597 6.55967 12.554 6.62733C12.3484 6.69498 12.1607 6.80801 12.0046 6.95804C11.8486 7.10807 11.7283 7.29127 11.6526 7.49408C11.577 7.69689 11.5479 7.91411 11.5675 8.12968V10.0047H14.3412L13.8975 12.8947H11.5625V19.8834C13.9153 19.5112 16.058 18.3114 17.6048 16.4999C19.1516 14.6884 20.001 12.3842 20 10.0022Z">
                                    </path>
                                </svg></span>
                          
                        </button>
												</div>
												<div class="col-4 " style="display: block; margin-left:auto;margin-right:auto;text-align: center;">
												<button type="button" class="icon-button social-signing-button google-signing-button"><span class="lFICM06 provider-icon" aria-hidden="true" style="width: 18px; height: 18px;"><svg width="18" height="19" viewBox="0 0 18 19" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 7.84363V11.307H13.8438C13.6365 12.428 12.9994 13.373 12.0489 14.0064V16.2534H14.9562C16.6601 14.6951 17.641 12.4029 17.641 9.67839C17.641 9.04502 17.5854 8.43176 17.4792 7.84865H9V7.84363Z" fill="#3E82F1"></path>
                                    <path d="M9.00001 14.861C6.65394 14.861 4.67192 13.2876 3.96406 11.1714H0.955627V13.4937C2.43709 16.4142 5.48091 18.4198 9.00001 18.4198C11.432 18.4198 13.4697 17.6206 14.9562 16.2533L12.0489 14.0064C11.245 14.5443 10.2135 14.861 9.00001 14.861Z" fill="#32A753"></path>
                                    <path d="M3.96404 5.45605H0.955617C0.348876 6.66246 0 8.02972 0 9.47238C0 10.915 0.348876 12.2823 0.955617 13.4887L3.96404 11.1714C3.78202 10.6335 3.6809 10.0605 3.6809 9.47238C3.6809 8.88426 3.78202 8.31122 3.96404 7.77336V5.45605Z" fill="#F9BB00"></path>
                                    <path d="M0.955627 5.45597L3.96406 7.77327C4.67192 5.65703 6.65394 4.08368 9.00001 4.08368C10.3197 4.08368 11.5079 4.53608 12.4382 5.42078L15.0219 2.85214C13.4646 1.40948 11.427 0.52478 9.00001 0.52478C5.48091 0.52478 2.43709 2.53043 0.955627 5.45597Z" fill="#E74133"></path>
                                </svg> </span>
                            
                        </button>
												</div>
											</div>
											<div class="row">
											<div class="col-6 text-start">
												<a class="forgot-link" href="forgot-password">Forgot Password ?</a>
											</div>
											<div class="col-6 text-end dont-have">New to LYTAA? <a href="beforesignup">Click here</a></div>
											</div>
										</form>
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