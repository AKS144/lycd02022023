		@include('layouts.login.header')

		<div class="wrapper">
			<div class="inner">
				<form action="">
					<h3>Login with number</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Mobile Number *</label>
							<input type="text" class="form-control" placeholder="Mobile No.">
						</div>						
					</div>	
					<button data-text="Login">
						<span>Login</span>
					</button>
				</form>
			</div>
		</div>
		
		@include('layouts.login.footer')
