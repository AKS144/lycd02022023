<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		<title>KofeJob</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
				
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Fancybox CSS -->
		<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
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
										
									<!-- Freelancer Multistep -->
									<div class="multistep-progress" id="freelance_step">
										<div class="first-progress" >
											<div class="board-logo">
												<a href="index.html"><img src="assets/img/logo-01.png" alt="" class="img-fluid" ></a>
											</div>
											<ul id="progressbar" class="progressbar">
												<li class="progress-active">
													<div class="multi-step">1</div>										
													<h5>Account Type</h5>
												</li>
												<li class="">
													<div class="multi-step">2</div>		
													<h5>Personal info</h5>
												</li>
												<li class="">
													<div class="multi-step">3</div>		
													<h5>Professional info</h5>
												</li>
												<li class="">
													<div class="multi-step">4</div>		
													<h5>Other Info</h5>
												</li>
											</ul>
											<div class="progress-info">
												<h5>Completion rate</h5>
												<div class="progress-25">
													<div class="d-flex align-items-center">
														<div class="progress">
															  <div class="progress-bar" role="progressbar" aria-valuenow="25"
															  aria-valuemin="0" aria-valuemax="100" >
															  </div>
														</div>
														<p>25%</p>
													</div>
												</div>
												<div class="progress-50">
													<div class="d-flex align-items-center">
														<div class="progress">
															  <div class="progress-bar" role="progressbar" aria-valuenow="50"
															  aria-valuemin="0" aria-valuemax="100" >
															  </div>
														</div>
														<p>50%</p>
													</div>
												</div>
												<div class="progress-75">
													<div class="d-flex align-items-center">
														<div class="progress">
															  <div class="progress-bar" role="progressbar" aria-valuenow="75"
															  aria-valuemin="0" aria-valuemax="100" >
															  </div>
														</div>
														<p>75%</p>
													</div>
												</div>
												<div class="progress-100">
													<div class="d-flex align-items-center">
														<div class="progress">
															  <div class="progress-bar" role="progressbar" aria-valuenow="100"
															  aria-valuemin="0" aria-valuemax="100" >
															  </div>
														</div>
														<p>100%</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Freelancer Multistep -->
									
									<!-- Accounting Onboard -->
									<div  class="text-center on-board select-account group-select">
										<div class="select-type">
											<div class="account-onborad onboard-head">
												<h2>Select Account Type</h2>
												<p>Don�t worry, this can be changed later.</p>
												<div class="select-box d-flex justify-content-center">
													<input checked="checked" id="freelance"   type="radio" name="credit-card" value="visa" />
													<label class="employee-level free-lance-img accounts_type" data-id="freelance" for="freelance"><a href="onboard-screen.html"  ><img src="assets/img/select-04.png" alt="" class="img-fluid" ><span>Freelancer</span></a></label>
													<input id="employee" class="accounts_type"  type="radio" name="credit-card" value="mastercard" />
													<label class="employee-level employee-img accounts_type" data-id="employee" for="employee"><a href="onboard-screen-employer.html"  ><img src="assets/img/select-05.png" alt="" class="img-fluid" ><span>Employer</span></a></label>
												</div>
											</div>
											<input class="btn next_btn btn-primary btn-get" name="next" type="button" value="Next">
										</div>
									</div>
									<!-- /Accounting Onboard -->
									
									
									<!-- Personal Info -->
									<div class="on-board field-card select-account select-btn">
										<div class="text-center onboard-head">
											<h2>Personal Info</h2>
											<p>Tell a bit about yourself. This information will appear on your public profile, so that potential buyers can get to know you better.</p>
										</div>
										<div class="field-item personal-info space-info">
											<form>
												<div class="row">
													<div class="col-md-12 col-lg-2 col-xl-2">
														<label class="focus-label">Name <span>*</span></label>
													</div>
													<div class="col-md-6 col-lg-5 col-xl-5">
														<div class="form-group">
															<label>First Name</label>
															<input type="text" class="form-control" value="Eugene">
														</div>
													</div>
													<div class="col-md-6 col-lg-5 col-xl-5">
														<div class="form-group">
															<label>Last Name</label>
															<input type="text" class="form-control" value="Forest">
														</div>
													</div>
													<div class="col-md-12 col-lg-2 col-xl-2">
														<label class="focus-label">Profile picture <span>*</span></label>
													</div>
													<div class="col-md-12 col-lg-10 col-xl-10">
														<div class="pro-form-img">
															<img src="assets/img/user/avatar-3.jpg" alt="User Image">
															<label class="file-upload image-upbtn ">
																Upload Avator <input type="file">
															</label>
														</div>
													</div>
													<div class="col-md-12 col-lg-2 col-xl-2">
														<label class="focus-label">Contact Details <span>*</span></label>
													</div>
													<div class="col-md-6 col-lg-5 col-xl-5">
														<div class="form-group">
															<label>Phone Number</label>
															<input type="text" class="form-control" value="+33 43685825" >
														</div>
													</div>
													<div class="col-md-6 col-lg-5 col-xl-5">
														<div class="form-group">
															<label>Email Address</label>
															<input type="text" class="form-control" value="eugeneforest@example.com">
														</div>
													</div>
													<div class="col-md-12 col-lg-2 col-xl-2">
														<label class="focus-label">Description <span>*</span></label>
													</div>
													<div class="col-md-12 col-lg-10 col-xl-10">
														<div class="form-group min-characters">
															<textarea class="form-control" rows="5" ></textarea>
															<p>Min 150 character</p>
														</div>
													</div>
													
													
												</div>
											</form>
										</div>
										<div class="text-center">
											<input class="btn btn-prev prev_btn btn-back" name="next" type="button" value="Back">									
											<input class="btn next_btn btn-primary btn-get btn-next" name="next" type="submit" value="Next">
										</div>
									</div>
									<!-- /Personal Info -->
									
																		
									<!-- Completeing Register -->
									<div class="on-board field-card">
										<div class="account-onborad complte-board back-home">
											<img src="assets/img/select-03.png" class="img-fluid" alt="icon">
											<h2>Hi, Eugene Forest</h2>
											<p>Your onboarding process has been successfully completed. Please check your registered email for other information.</p>
											<a href="onboard-screen.html" class="btn btn-primary"> Back to Home</a>
										</div>
									</div>
									<!-- /Completeing Register -->
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
		<script src="assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Bundle JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Progress JS -->
		<script src="assets/js/circle-progress.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>		
		
	</body>
</html>