
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		<title>KofeJob</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
				
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
		
		<!-- Fancybox CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fancybox/jquery.fancybox.min.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	</head>		
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
					
			<!-- Start Navigation -->
			<!-- Header -->
			<header class="header header-bg ">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.html" class="navbar-brand logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.html" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="has-submenu">
								<a href="index.html">Home <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li ><a href="index.html">Home</a></li>
									<li><a href="index-two.html">Home 2</a></li>
									<li><a href="index-three.html">Home 3</a></li>
									<li><a href="index-four.html">Home 4</a></li>
									<li><a href="index-five.html">Home 5</a></li>
								</ul>
							</li>
							<li class="has-submenu active">
								<a href="">For Employers<i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu active">
										<a href="#">Freelancer</a>
										<ul class="submenu">
											<li><a href="developer.html">Freelancer</a></li>
											<li class="active"><a href="developer-details.html">Freelancer Details</a></li>
										</ul>
									</li>
									<li><a href="dashboard.html">Dashboard</a></li>	
									<li><a href="company-profile.html">My Profile</a></li>	
									<li><a href="company-details.html">Company Details</a></li>
									<li><a href="manage-projects.html">Projects</a></li>
									<li><a href="favourites.html">Favourites</a></li>
									<li><a href="membership-plans.html">Membership</a></li>
									<li><a href="milestones.html">Milestones</a></li>
									<li><a href="chats.html">Chats</a></li>
									<li><a href="review.html">Review</a></li>			
									<li><a href="deposit-funds.html">Payments</a></li>							
									<li><a href="verify-identity.html">Verify Identity</a></li>								
									<li><a href="profile-settings.html">Settings</a></li>								
								</ul>
							</li>
							<li class="has-submenu">
								<a href="">For Freelancer<i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu">
										<a href="#">Projects</a>
										<ul class="submenu">
											<li><a href="project.html">Projects</a></li>
											<li><a href="project-details.html">Project Details</a></li>
										</ul>
									</li>
									<li><a href="freelancer-dashboard.html">Dashboard</a></li>	
									<li><a href="developer-profile.html">My Profile</a></li>	
									<li><a href="developer-details.html">Freelancer Details</a></li>	
									<li><a href="freelancer-project-proposals.html">Projects</a></li>
									<li><a href="freelancer-favourites.html">Favourites</a></li>
									<li><a href="freelancer-membership.html">Membership</a></li>
									<li><a href="freelancer-change-password.html">Change Password</a></li>
									<li><a href="freelancer-chats.html">Chats</a></li>
									<li><a href="freelancer-review.html">Review</a></li>			
									<li><a href="freelancer-withdraw-money.html">Payments</a></li>							
									<li><a href="freelancer-verify-identity.html">Verify Identity</a></li>				
									<li><a href="freelancer-profile-settings.html">Settings</a></li>				
								</ul>
							</li>
							<li class="has-submenu">
								<a href="">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="about.html">About us</a></li>
									<li><a href="blank-page.html">Starter Page</a></li>
									<li><a href="404-page.html">404 Page</a></li>
									<li class="has-submenu">
										<a href="invoices.html">Invoices</a>
										<ul class="submenu">
											<li><a href="freelancer-invoices.html">Invoices</a></li>
											<li><a href="view-invoice.html">Invoice View</a></li>
										</ul>
									</li>
									<li><a href="login.html">Login</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="onboard-screen.html">Onboard Screen</a></li>
									<li><a href="forgot-password.html">Forgot Password</a></li>
									<li><a href="change-password.html">Change Password</a></li>									
								</ul>
							</li>
							<li class="has-submenu">
								<a href="">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
								</ul>
							</li>
							<li>
								<a href="admin/index.html" target="_blank">Admin</a>
							</li>
						</ul>
					</div>		 
					<ul class="nav header-navbar-rht">	
						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow main-drop account-item">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<span class="user-img">
									<img src="assets/img/img-04.jpg" alt="">
								</span>
								<span>John</span>
							</a>
							<div class="dropdown-menu emp">
								<div class="drop-head">Account Details</div>	
								<a class="dropdown-item" href="developer-details.html"><i class="material-icons">verified_user</i> View profile</a>
								<div class="drop-head">Projects Settings</div>	
								<a class="dropdown-item" href="manage-projects.html"><i class="material-icons">business_center</i> Projects</a>
								<a class="dropdown-item" href="favourites.html"><i class="material-icons">local_play</i> Favourites</a>
								<a class="dropdown-item" href="review.html"><i class="material-icons">pie_chart</i> Reviews</a>
								<div class="drop-head">Account Details</div>
								<a class="dropdown-item" href="profile-settings.html"> <i class="material-icons">settings</i> Profile Settings</a>
								<a class="dropdown-item" href="index.html"><i class="material-icons">power_settings_new</i> Logout</a>
							</div>
						</li>
						<!-- /User Menu -->
						<li><a href="post-project.html" class="login-btn">Post a Project </a></li>
					</ul>
				</nav>
			</header>
			<!-- /Header -->	
			
			<!-- Breadcrumb -->
			<div class="bread-crumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<div class="breadcrumb-list">
								<nav aria-label="breadcrumb" class="page-breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html"><img src="assets/img/home-icon.svg" alt=""> Home</a></li>
										<li class="breadcrumb-item" aria-current="page">Developer details</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">	
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="developer-box head-develop">
								<div class="developer-profile-img">
									<img src="assets/img/profile-bg.jpg" alt="" class="img-fluid" >
									<div class="img-profile">
										<img src="assets/img/img-04.jpg" alt="" class="img-fluid" >
									</div>
								</div>
								<h2>John Danie S <i class="fas fa-check-circle"></i></h2>
								<p>iOS Expert + Node Dev <span>Full time</span></p>
								<ul class="develope-list-rate">
									<li>
										<div class="rating">	
											<span class="average-rating">4.6 </span>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
										</div>
									</li>
									<li>Member Since,Aug 5, 2018</li>
									<li class="bl-0"><img src="assets/img/flags/pl.png" alt="" height="16"> Poland</li>
								</ul>
								<div class="proposal-box">
									<div class="proposal-value">
										<h4>$20.00</h4>
										<span>( Per Hour )</span>
									</div>
									<a data-bs-toggle="modal" href="#hire" class="btn favourites-btn btn-primary favour-border">Favourite <i class="fas fa-heart"></i></a>
									<a data-bs-toggle="modal" href="#file" class="btn proposal-btn btn-primary">Send Invite </a>
								</div>
								<ul class="feed-back-detail">
									<li>Recommended<span>89%</span></li>
									<li>Completed Projects<span>22</span></li>
									<li>Clients<span>48</span></li>
									<li>Ongoing Projects<span>2</span></li>
									<li>Feedbacks<span>5</span></li>
									<li>Rehired<span>12</span></li>
								</ul>
							</div>
							<div class="pro-view develop-view">
								<!-- Tab Detail -->
								<nav class="provider-tabs mb-4 abouts-view">
									<ul class="nav nav-tabs nav-tabs-solid nav-justified">
										<li class="nav-item">
											<a class="nav-link active-about" href="#overview">
												<img src="assets/img/icon/tab-icon-21.svg"  alt="User Image">
												<p class="bg-red">Overview</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#project">
												<img src="assets/img/icon/tab-icon-16.svg"  alt="User Image">
												<p class="bg-blue">Projects</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#experience">
												<img src="assets/img/icon/tab-icon-17.svg"  alt="User Image">
												<p class="bg-violet">Experience</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#education">
												<img src="assets/img/icon/tab-icon-18.svg"  alt="User Image">
												<p class="bg-yellow">Education</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#skill">
												<img src="assets/img/icon/tab-icon-19.svg"  alt="User Image">
												<p class="bg-pink">Skills</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#feedback">
												<img src="assets/img/icon/tab-icon-20.svg"  alt="User Image">
												<p class="bg-green">Feedbacks</p>
											</a>
										</li>
									</ul>
								</nav>
								<!-- /Tab Detail -->
								
								<!-- Overview Tab Content -->
								<div class="pro-post widget-box" id="overview">
									<h3 class="pro-title">Overview</h3>
									<div class="pro-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus.</p>
										<div class="mt-4">
											<h4 class="widget-title">My services include:</h4>
											<ul class="pro-list">
												<li>Cross-platform games</li>
												<li>Game concept and level designing</li>
												<li>Multiplayer integration</li>
												<li>Re-skin</li>
												<li>Ads and in-app purchase (Maximize your Revenue)</li>
												<li>Game Optimisations</li>
												<li>2D/3D Animation</li>
											</ul>
										</div>
										<p>Graphic DesigningSocial Network IntegrationVirtual Reality (VR)Augmented Reality (AR)Game con promotional graphics and video app store and Playstore publishing </p>
									</div>
								</div>
								<!-- /Overview Tab Content -->
								
								<!-- Project Tab Content -->								
								<div class="pro-post project-widget widget-box project-gallery" id="project">
									<h3 class="pro-title">PROJECTS</h3>
									<div class="pro-content">
										<div class="row">
											<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
												<div class="project-widget">
													<div class="pro-image">		
														<a href="assets/img/project-8.jpg" data-fancybox="gallery2">
															<img class="img-fluid" alt="User Image" src="assets/img/project-8.jpg">
														</a>
													</div>
													<div class="project-footer">
														<div class="d-flex align-items-center">
															<div class="pro-detail">
																<h3 class="pro-name">
																	Education
																</h3>
																<p class="pro-designation">Web design</p>
															</div>
															<div class="view-image">
																<a href="project.html"><i class="fas fa-arrow-right"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
												<div class="project-widget">
													<div class="pro-image">		
														<a href="assets/img/project-9.jpg" data-fancybox="gallery2">
															<img class="img-fluid" alt="User Image" src="assets/img/project-9.jpg">
														</a>
													</div>
													<div class="project-footer">
														<div class="d-flex align-items-center">
															<div class="pro-detail">
																<h3 class="pro-name">
																	Photoshoot 
																</h3>
																<p class="pro-designation">Web design</p>
															</div>
															<div class="view-image">
																<a href="project.html"><i class="fas fa-arrow-right"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
												<div class="project-widget">
													<div class="pro-image">		
														<a href="assets/img/project-10.jpg" data-fancybox="gallery2">
															<img class="img-fluid" alt="User Image" src="assets/img/project-10.jpg">
														</a>
													</div>
													<div class="project-footer">
														<div class="d-flex align-items-center">
															<div class="pro-detail">
																<h3 class="pro-name">
																	Electrical 
																</h3>
																<p class="pro-designation">Web design</p>
															</div>
															<div class="view-image">
																<a href="project.html"><i class="fas fa-arrow-right"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
												<div class="project-widget">
													<div class="pro-image">		
														<a href="assets/img/project-11.jpg" data-fancybox="gallery2">
															<img class="img-fluid" alt="User Image" src="assets/img/project-11.jpg">
														</a>
													</div>
													<div class="project-footer">
														<div class="d-flex align-items-center">
															<div class="pro-detail">
																<h3 class="pro-name">
																	Project name 
																</h3>
																<p class="pro-designation">Web design</p>
															</div>
															<div class="view-image">
																<a href="project.html"><i class="fas fa-arrow-right"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<a href="project.html" class="btn more-btn">View more </a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Project Tab Content -->
								
								<!-- Experience Tab Content -->
								<div class="pro-post project-widget widget-box develop-experiance" id="experience">
									<h3 class="pro-title">Experience</h3>
									<div class="pro-content">
										<div class="row">
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="experiance-list">
													<div class="experiance-logo d-flex align-items-center justify-content-center">
														<img class="img-fluid" alt="" src="assets/img/icon/icon-10.png">
													</div>
													<h4>Logo Designer</h4>
													<h5>Techline <br> July 9, 2018 - March 18, 2021</h5>
													<p>I am a professional graphic designer. I have more than 10-years of experience in graphics design. If you are looking for any graphic related work, contact me, I'll glad to help you.</p>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="experiance-list">
													<div class="experiance-logo d-flex align-items-center justify-content-center">
														<img class="img-fluid" alt="" src="assets/img/icon/icon-10.png">
													</div>
													<h4>UI Designer</h4>
													<h5>Techline <br> May 10, 2020 - March 10, 2022</h5>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis</p>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="experiance-list">
													<div class="experiance-logo d-flex align-items-center justify-content-center">
														<img class="img-fluid" alt="" src="assets/img/icon/icon-10.png">
													</div>
													<h4>UX Designer</h4>
													<h5>Techline <br> Sep 10, 2018 - Jan 18, 2020</h5>
													<p>Lorem ipsum dolor sit amet ,nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Experience Tab Content -->
								
								<!-- Educational Tab Content -->
								<div class="pro-post project-widget widget-box" id="education">
									<h3 class="pro-title">Educational Details</h3>
									<div class="pro-content">
										<div class="row">
											<div class="col-lg-6 col-md-6 d-flex">
												<div class="experiance-list">
													<div class="experiance-logo logo-bg d-flex align-items-center justify-content-center">
														<img class="img-fluid" alt="" src="assets/img/icon/icon-11.png">
													</div>
													<h4>Bachelor of Science in Game Programming & Development</h4>
													<h5>Hampshire University January 12, 2015 - January 19, 2019</h5>
													<p>Graphic Designing artworks through making plans and utilizing the helpful analysis of companions, educators, and bosses to improve those plans. Careful discipline brings about promising results, and the capacity to acknowledge and gain from analysis from peers and even the purchaser everywhere is pivotal for accomplishment in this field.</p>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 d-flex">
												<div class="experiance-list">
													<div class="experiance-logo logo-bg d-flex align-items-center justify-content-center">
														<img class="img-fluid" alt="" src="assets/img/icon/icon-11.png">
													</div>
													<h4>Master in Gaming STudi Design</h4>
													<h5>Techline  July 9, 2018 - March 18, 2021</h5>
													<p>I am a professional graphic designer. I have more than 10-years of experience in graphics design. If you are looking for any graphic related work, contact me, I'll glad to help you.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Educational Tab Content -->
								
								<!-- Technical Tab Content -->
								<div class="pro-post project-widget widget-box technical-skill" id="skill">
									<h3 class="pro-title">Technical Skills</h3>
									<div class="pro-content">
										<div class="tags">
										<span class="badge badge-pill badge-skills">+ Web Design</span>
										<span class="badge badge-pill badge-skills">+ UI Design</span>
										<span class="badge badge-pill badge-skills">+ Node Js</span>
										<span class="badge badge-pill badge-skills">+ Javascript</span>
										</div>
									</div>
								</div>								
								<!-- /Technical Tab Content -->
								
								<!-- Feedback Tab Content -->
								<div class="pro-post author-widget clearfix develop-feedback" id="feedback">
									<div class="widget-title-box clearfix d-flex">
										<h3 class="pro-title mb-0">Feedbacks</h3>
										<a href="review.html" class="feedback-view">View All</a>
									</div>
									<div class="about-author">
										<div class="about-author-img">
											<div class="author-img-wrap">
												<a href="company-profile.html"><img class="img-fluid" alt="" src="assets/img/img-03.jpg"></a>
											</div>
										</div>
										<div class="author-details">
											<a href="company-profile.html" class="blog-author-name">Logo Designer</a>
											<h6>Techline  July 9, 2018 - March 18, 2021</h6>
											<p class="mb-0">I am a professional graphic designer. I have more than 10-years of experience in graphics design. If you are looking for any graphic related work, contact me, I'll glad to help you.</p>
										</div>
									</div>
									<div class="about-author">
										<div class="about-author-img">
											<div class="author-img-wrap">
												<a href="company-profile.html"><img class="img-fluid" alt="" src="assets/img/img-02.jpg"></a>
											</div>
										</div>
										<div class="author-details">
											<a href="company-profile.html" class="blog-author-name">Web Designer</a>
											<h6>Techline  July 9, 2018 - March 18, 2021</h6>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis</p>
										</div>
									</div>
									<div class="about-author">
										<div class="about-author-img">
											<div class="author-img-wrap">
												<a href="company-profile.html"><img class="img-fluid" alt="" src="assets/img/img-03.jpg"></a>
											</div>
										</div>
										<div class="author-details">
											<a href="company-profile.html" class="blog-author-name">UX Designer</a>
											<h6>Techline  July 9, 2018 - March 18, 2021</h6>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis</p>
										</div>
									</div>
									<div class="about-author">
										<div class="about-author-img">
											<div class="author-img-wrap">
												<a href="company-profile.html"><img class="img-fluid" alt="" src="assets/img/img-04.jpg"></a>
											</div>
										</div>
										<div class="author-details">
											<a href="company-profile.html" class="blog-author-name">Php Developer</a>
											<h6>Techline  July 9, 2018 - March 18, 2021</h6>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis</p>
										</div>
									</div>
								</div>								
								<!-- /Feedback Tab Content -->
								
							</div>
						</div>
					
						<!-- Blog Sidebar -->
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar developer-view">		
						
							<!-- About Widget -->	
							<div class="pro-post widget-box about-widget about-field">
								<h4 class="pro-title ">About Me</h4>
								<table class="table">
									<tbody>
									  <tr>
										<td>Gender</td>
										<td>Male</td>
									  </tr>
									  <tr>
										<td>Experience</td>
										<td>5 Years</td>
									  </tr>
									  <tr>
										<td>Location</td>
										<td>Istanbul/Turkey</td>
									  </tr>
									</tbody>
								</table>
							</div>
							<!-- /About Widget -->
							
							<!-- Language Widget -->
							<div class="pro-post widget-box language-widget">
								<h4 class="pro-title mb-0">Language Skills</h4>
								<ul class="latest-posts pro-content">
									<li><p>English</p>
										<div class="progress progress-md mb-0">
											<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</li>
									<li><p>Russian</p>
										<div class="progress progress-md mb-0">
											<div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div></li>
									<li><p>German</p>
										<div class="progress progress-md mb-0">
											<div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</li>
								</ul>
							</div>
							<!-- /Language Widget -->
							
							<!-- Follow Widget -->
							<div class="pro-post widget-box follow-widget">
								<ul class="follow-posts pro-post">
									<li><p>Following</p><h6>49</h6></li>	
									<li><p>Followers</p><h6>422</h6></li>	
								</ul>
								<div class="text-center">
									<a href="#" class="btn follow-btn">+ Follow</a>
								</div>
							</div>
							<!-- /Follow Widget -->

							<!-- Categories -->
							<div class="pro-post category-widget link-box">
								<div class="widget-title-box">
									<h4 class="pro-title">Social Links</h4>
								</div>
								<ul class="latest-posts pro-content mb-3">
									<li><a href="#">http://www.facebook.com/john...</a></li>
									<li><a href="#">http://www.Twitter.com/john...</a></li>
									<li><a href="#">Http://www.googleplus.com/john... </a></li>
									<li><a href="#"> Http://www.behance.com/john...</a></li>
									<li><a href="#"> Http://www.pinterest.com/john...</a></li>
								</ul>
							</div>
							<!-- /Categories -->
							
							<!-- LInk Widget -->	
							<div class="pro-post widget-box post-widget profile-link">
								<h3 class="pro-title">Profile Link</h3>
								<div class="pro-content">
									<div class="form-group profile-group mb-0">
									<div class="input-group">
										<input type="text" class="form-control" value="https://www.kofejob.com/developer/daren/12454687">
										<div class="input-group-append">
											<button class="btn btn-success sub-btn" type="submit"><i class="fa fa-clone"></i></button>
										</div>
									</div>
									</div>
								</div>
							</div>
							<!-- /Link Widget -->		
							
							<!-- Social Widget -->	
							<div class="pro-post widget-box social-widget develop-social-link">
								<div class="profile-head">
									<h4 class="pro-title">SOCIAL LINKS</h4>
								</div>
								<ul class="social-link-profile">
									<li><a href="#"><i class="fas fa-share-alt"></i></a></li>
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fab fa-telegram"></i></a></li>
								</ul>
							</div>
							<!-- /Social Widget -->
						
						</div>
						<!-- /Blog Sidebar -->
						
					</div>
				</div>
			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->	
			<footer class="footer">
				<div class="footer-top">
					<div class="container">

						<div class="row">
							<div class="col-md-3">
								<h2 class="footer-title">Office Address</h2>
								<div class="footer-address">
									<div class="off-address">
										<p class="mb-2">New York, USA (HQ)</p>
										<address class="mb-0">750 Sing Sing Rd, Horseheads, NY, 14845</address>
										<p>Call: <a href="#"><u>469-537-2410</u> (Toll-free)</a> </p>
									</div>
									<div class="off-address">
										<p class="mb-2">Sydney, Australia </p>
										<address class="mb-0">24 Farrar Parade COOROW WA 6515</address>
										<p>Call: <a href="#"><u>(08) 9064 9807</u> (Toll-free)</a> </p>
									</div>
								</div>
							</div>
							<div class="col-lg-2">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Useful Links</h2>
									<ul>
										<li><a href="about.html">About Us</a></li>
										<li><a href="blog-list.html">Blog</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="register.html">Register</a></li>
										<li><a href="forgot-password.html">Forgot Password</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Help & Support</h2>
									<ul>
										<li><a href="chats.html">Chat</a></li>
										<li><a href="faq.html">Faq</a></li>
										<li><a href="review.html">Reviews</a></li>
										<li><a href="privacy-policy.html">Privacy Policy</a></li>
										<li><a href="term-condition.html">Terms of use</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Other Links</h2>
									<ul>
										<li><a href="freelancer-dashboard.html">Freelancers</a></li>
										<li><a href="freelancer-portfolio.html">Freelancer Details</a></li>
										<li><a href="project.html">Project</a></li>
										<li><a href="project-details.html">Project Details</a></li>
										<li><a href="post-project.html">Post Project</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Mobile Application</h2>
									<p>Download our App and get the latest Breaking News Alerts and latest headlines and daily articles near you.</p>
									<div class="row g-2">
										<div class="col">
											<a href="#"><img class="img-fluid" src="assets/img/app-store.svg" alt="app-store"></a>
										</div>
										<div class="col">
											<a href="#"><img class="img-fluid" src="assets/img/google-play.svg" alt="google-play"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0">&copy; 2021 All Rights Reserved</p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 right-text">
									<div class="social-icon">
										<ul>
											<li><a href="#" class="icon" target="_blank"><i class="fab fa-instagram"></i> </a></li>
											<li><a href="#" class="icon" target="_blank"><i class="fab fa-linkedin-in"></i> </a></li>
											<li><a href="#" class="icon" target="_blank"><i class="fab fa-twitter"></i> </a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /Copyright -->						
					</div>
				</div>
				<!-- /Footer Bottom -->				
			</footer>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
		
		<!-- The Modal -->
		<div class="modal fade custom-modal" id="hire">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content bg-modal">
					<div class="modal-header">
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="text-center pt-0 mb-4">
							<img src="assets/img/logo-01.png" alt="logo" class="img-fluid mb-1">
							<h5 class="modal-title">Discuss your project with David</h5>
						</div>
						<form action="dashboard.html">
							<div class="modal-info">
								<div class="row">
									<div class="col-12 col-md-12">
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="First name & Lastname">
										</div> 
										<div class="form-group">
											<input type="email" name="name" class="form-control" placeholder="Email Address">
										</div> 
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="Phone Number">
										</div> 
										<div class="form-group">
											<textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
										</div> 
										<div class="form-group row">
											<div class="col-12 col-md-4 pr-0">
												<label class="file-upload">
													Add Attachment <input type="file" />
												</label>
											</div>											
											<div class="col-12 col-md-8">
												<p class="mb-1">Allowed file types: zip, pdf, png, jpg</p>
												<p>Max file size: 50 MB</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary btn-block submit-btn">Hire Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /The Modal -->
		
		<!-- The Modal -->
		<div class="modal fade" id="file">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">SEND PROPOSALS</h4>
						<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">	
						<div class="modal-info">
							<form action="freelancer-project-proposals.html">
								<div class="feedback-form">
									<div class="row">
										<div class="col-md-6 form-group">
											<input type="text" class="form-control" placeholder="Your Price">
										</div>
										<div class="col-md-6 form-group">
											<input type="email" class="form-control" placeholder="Estimated Hours">
										</div>
										<div class="col-md-12 form-group">
											<textarea rows="5" class="form-control" placeholder="Cover Letter"></textarea>
										</div>
									</div>
								</div>
								<div class="proposal-features">
									<div class="proposal-widget proposal-success">
										<label class="custom_check">
											<input type="checkbox" name="select_time"><span class="checkmark"></span>
											<span class="proposal-text">Stick this Proposal to the Top</span>
											<span class="proposal-text float-end">$12.00</span>
										</label>
										<p>The sticky proposal will always be displayed on top of all the proposals.</p>
									</div>
									<div class="proposal-widget proposal-light">
										<label class="custom_check">
											<input type="checkbox" name="select_time"><span class="checkmark"></span>
											<span class="proposal-text">$ Make Sealed Proposal</span>
											<span class="proposal-text float-end">$7.00</span>
										</label>
										<p>The sealed proposal will be sent to the project author only it will not be visible publically.</p>
									</div>
									<div class="proposal-widget proposal-danger">
										<label class="custom_check">
											<input type="checkbox" name="select_time"><span class="checkmark"></span>
											<span class="proposal-text">$ Make Sealed Proposal</span>
											<span class="proposal-text float-end">$15.00</span>								
										</label>
										<p>The featured proposal will have a distinctive color and popped up between other proposals to get the author's attention.</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 submit-section">
										<label class="custom_check">
											<input type="checkbox" name="select_time">
											<span class="checkmark"></span> I agree to the Terms And Conditions
										</label>
									</div>
									<div class="col-md-12 submit-section text-end">
										<button class="btn btn-primary submit-btn" type="submit">SUBMIT PROPOSAL</button>
									</div>
								</div>											
							</form>		
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /The Modal -->
	  
		<!-- jQuery -->
		<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
		
		<!-- Bootstrap Bundle JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
		
		<!-- Fancybox JS -->
		<script src="{{asset('assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}"></script>		
		
	</body>
</html>