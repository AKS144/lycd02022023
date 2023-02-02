<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_search/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_search/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_search/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_search/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_search/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_search/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_search/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_search/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_search/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_search/css/main.css')}}">
<!--===============================================================================================-->
<style>
    	#imageChange{

width: 100% !important;
height: 100% !important;
background-size: cover !important;
background-repeat: no-repeat !important;



}
.wrap-login100{
	background: transparent;
}
.login100-form{
	background: transparent;
}
.login100-form-title{
	color: white !important;
}
.limiter{
	background:linear-gradient(0deg, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%));
}
.login100-form-btn{
	background: red;
}
.input100:focus{
	height: 78px !important;
}
.has-val{
	height: 78px !important;
}
.input100{
	background: #fff;
	border-radius: 8px;
}
.txt1 {
    font-family: Montserrat-Regular;
    font-size: 15px;
    line-height: 1.4;
    color: #ffffff;
}
.label-checkbox100 {
    font-family: Poppins-Regular;
    font-size: 13px;
    color: #e3e3e3;
    line-height: 1.4;
    display: block;
    position: relative;
    padding-left: 26px;
    cursor: pointer;
}


.txt2 {
    font-family: Montserrat-Regular;
    font-size: 13px;
    line-height: 1.4;
    color: #ffffff;
}
</style>
   


</head>
<body  id="imageChange" >
	
	<div class="limiter">
		<div class=""><!-- container-login100 -->
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-google" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				
				<!-- <div class="login100-more" style="background-image: url(https://images.unsplash.com/photo-1542038784456-1ea8e935640e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);">
				</div> -->
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{ asset('assets_search/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets_search/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets_search/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('assets_search/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets_search/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets_search/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('assets_search/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets_search/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets_search/js/main.js')}}"></script>
	<script type = "text/javascript">
      

    $(function() {
      var body = $('body');
      var backgrounds = ['url(https://images.unsplash.com/photo-1542038784456-1ea8e935640e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)',
	   'url(https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80)',
	   'url(https://images.unsplash.com/photo-1541515929569-1771522cbaa9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)',
	  'url(https://images.unsplash.com/photo-1615075650468-4e8e293d4989?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)'];
    var current = 0;
    
    function nextBackground() {
      body.css(
       'background',
        backgrounds[current = ++current % backgrounds.length]
     );
    
     setTimeout(nextBackground, 2000);
     }
     setTimeout(nextBackground, 2000);
       body.css('background', backgrounds[0]  );
     });
      </script>	

</body>
</html>  
