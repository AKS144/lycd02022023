@include('layouts.login.header')

		<div class="wrapper">
			<div class="inner">
				<form action="">
					<h3>Sign Up As Client</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Name *</label>
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-wrapper">
							<label for="">Email *</label>
							<input type="email" class="form-control" placeholder="Email">
						</div>
					</div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Password *</label>
							
							<input type="Password" class="form-control " placeholder="Password" >
						</div>
						<div class="form-wrapper">
							<label for="">Confirm Password *</label>
							<input type="Password" class="form-control " placeholder="Confirm Password" >
						</div>
					</div>
					<div class="form-row last">
						<div class="form-wrapper">
							<label for="">Phone No. *</label>
							<input type="email" class="form-control" placeholder="Phone">
						</div>
					
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Agree to Terms and Conditions.
							<span class="checkmark"></span>
						</label>
					</div>
					<button data-text="Sign Up">
						<span>Sign Up</span>
					</button><br>
					<h4 style="color:black;">Sign Up With</h4>
				<div class="form-row">
					<div class="form-wrapper">
				<img src="{{asset('assets_login/images/fbtn.jpg')}}">
			</div>
			<div class="form-wrapper">
				<img src="{{asset('assets_login/images/googlesign.jpg')}}" >
			</div>
			</div>
			
				
				</form>
				
			</div>
		</div>
		
		@include('layouts.login.footer')