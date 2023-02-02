<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		<title>LYTAA</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
				
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
		
		<!-- Fancybox CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fancybox/jquery.fancybox.min.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
	</head>		
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
			
			<!-- Page Wrapper -->
			<div class="page-wrapper board-screen">
				<div class="content container-fluid">
					<div class="acc-content">
						
						<div class="row">
							<div class="col-sm-12">
								<div class="multistep-form"> 	
									<!-- Accounting Onboard -->
									<div  class="text-center on-board select-account group-select">
										<div class="select-type">
											<div class="account-onborad onboard-head">
												<h2>Select Account Type</h2>
												<p>Don't worry, this can be changed later.</p>
												<div class="select-box d-flex justify-content-center">
												<input checked="checked" id="freelance"   type="radio" name="credit-card" value="visa" />
													<label class="employee-level free-lance-img accounts_type" for="freelance"><a href="{{ route('artist.create')}}"><img src="https://kofejob.dreamguystech.com/template/assets/img/select-04.png" alt="" class="img-fluid"><span>Photographer</span></a></label>
													<input id="employee" class="accounts_type"  type="radio" name="credit-card" value="mastercard" />
													<label class="employee-level employee-img accounts_type"  for="employee"><a href="{{ route('client.create')}}"><img src="https://kofejob.dreamguystech.com/template/assets/img/select-05.png" alt="" class="img-fluid"><span>Client</span></a></label>
												</div>
											</div>
											{{-- <input class="btn next_btn btn-primary btn-get" name="next" type="button" value="Next">  --}}
										</div>
									</div>
									<!-- /Accounting Onboard -->
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
		
		<!-- Bootstrap Bundle JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
		
		<!-- Progress JS -->
		<script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
		
		<!-- Select2 JS -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('js/script.js')}}"></script>		
		
	</body>
</html>