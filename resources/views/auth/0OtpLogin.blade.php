		@include('layouts.login.header')

		 <div class="wrapper">
			<div class="inner">
				<form method="POST" action="{{ route('loginWithOtp') }}">

					<h3>Login with number</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Mobile Number *</label>
							<input type="text" class="form-control" placeholder="Mobile No.">
						</div>						
					</div>	
					<button type="submit" class="btn btn-primary otp">
						{{ __('Login') }}
					</button>


				<button class="btn btn-primary" onclick="sendOtp()">Send OTP</button>
					<div class="col-md-6">
						<input id="otp" type="text" class="form-control otp" name="otp" >
					</div>
				</div>
				</form>
			</div>
		</div> 


	 <script>
        $('.otp').hide();
        function sendOtp() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // alert($('#mobile').val());
            $.ajax( {
                url:'sendOtp',
                type:'post',
                data: {'mobile': $('#mobile').val()},
                success:function(data) {
                    // alert(data);
                    if(data != 0){
                        $('.otp').show();
                        $('.send-otp').hide();
                    }else{
                        alert('Mobile No not found');
                    }

                },
                error:function () {
                    console.log('error');
                }
            });
        }
    </script>
		
		@include('layouts.login.footer')
