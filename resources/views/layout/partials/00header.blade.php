<?php error_reporting(0);?>
<style>
	
	@media only screen and (max-width: 600px) {
		.disable-mobile{
		display: none;
	}
}

	.badge { 
	display: inline-block; 
	padding: 0.15em 0.35em;
	font-size: .75em; 
	font-weight: 700; 
	line-height: 1; 
	color: #fff; 
	text-align: center; 
	white-space: nowrap; 
	vertical-align: baseline; 
	border-radius: 1.25rem; 
	background: red; 
	}
	@media only screen and (max-width: 600px) {
  .hide-search-mobile {
   display: none;
  }
  .mobile-logo{
	display: block !important;
}
.hide-desktop{
	display: block !important;

}

	
}
.mobile-logo{
	display: none;
}
.hide-desktop{
	display: none;

}
.facebook-signing-button{
	background: #4267b2;
    border: 1px solid #4267b2;
    color: #fff;
    fill: #fff;
    width: 65%;
    border-radius: 10px;
    padding: 11px;
}

.google-signing-button{
	background: #e5e5e5;
    border: 1px solid #b1b1b1;
    color: #505050;
    fill: #fff;
	width: 65%;
    border-radius: 10px;
	padding: 11px;
}
.user-session-package .icon-button {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 12px 30px 12px 16px;
    margin: 12px 0;
    background: #fff;
    border: 1px solid #e4e5e7;
    border-radius: 4px;
    width: 100%;
}

	
</style>
<!-- Main Wrapper -->
<div class="main-wrapper">
<!-- Header -->

			<header class="header ">
				<div class="container">
				<nav class="navbar navbar-expand-lg header-nav" style="padding:10px;">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{url('/')}}" class="navbar-brand logo mobile-logo">

							<img src="{{asset('assets/logo/logo.png')}}" class="img-fluid" alt="Logo" > 
							<!-- <h3 style="    padding-right: 61px;">LYTAA</h3> -->

						</a>
						
						@if(Auth::user()->isArtist)
                        <form method="GET" action="{{ url('jobs-search') }}">
							<div class="input-group hide-search-mobile" style="margin-bottom: 14px;">
								<a href="{{url('/')}}" class="navbar-brand logo">
									<img src="{{asset('assets/logo/logo.png')}}" class="img-fluid" alt="Logo" style="padding-right: 50px;">								
								</a>
								<!-- <div class="disable-mobile"> -->
								<input class="form-control autocomplete" name="search" type="text" placeholder="Search Here...." style="padding-bottom: 6px; width:846px;border: #cfcfcf 2px solid; border-radius:11px 0px 0px 11px;">
								<button class="btn btn-warning" type="submit" style="background: #F79533;border-radius: 0px 11px 11px 0px;">
								<span class="text-capitalize" style="color: rgb(255,255,255);font-size: 14px;">Search</span></button>
															<!-- </div> -->
							</div>
						</form>	
						@elseif(Auth::user()->isClient)
                        <form method="GET" action="{{ url('profile-search') }}">
							<div class="input-group hide-search-mobile" style="margin-bottom: 14px;">
								<a href="{{url('/')}}" class="navbar-brand logo">
									<img src="{{asset('assets/logo/logo.png')}}" class="img-fluid" alt="Logo" style="padding-right: 50px;">								
								</a>
								<!-- <div class="disable-mobile"> -->
								<input class="form-control autocomplete" name="search" type="text" placeholder="Search Here...." style="padding-bottom: 6px; width:846px;border: #cfcfcf 2px solid; border-radius:11px 0px 0px 11px;">
								<button class="btn btn-warning" type="submit" style="background: #F79533;border-radius: 0px 11px 11px 0px;">
								<span class="text-capitalize" style="color: rgb(255,255,255);font-size: 14px;">Search</span></button>
															<!-- </div> -->
							</div>
						</form>	
						@else
						<div class="input-group hide-search-mobile" style="margin-bottom: 14px;">
						<a href="{{url('/')}}" class="navbar-brand logo">
								<img src="{{asset('assets/logo/logo.png')}}" class="img-fluid" alt="Logo" style="padding-right: 50px;">								
							</a>
						</div>
						@endif


					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{url('/')}}" class="menu-logo">
								<!-- <img src="assets/img/logo.png" class="img-fluid" alt="Logo"> -->
								<h3>LYTAA</h3>
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
							
						</div>
						<!-- <ul class="main-nav" > -->
                       
					
					   <!-- </ul> -->
						<ul class="main-nav hide-desktop" >
							<li class="{{ Request::is('index') ? 'active' : '' }}">
								<a href="index">Home</a>
							</li>
							<li class="has-submenu <?php if($page=="dashboard" || $page=="manage-projects"  || $page=="developer"  || $page=="developer-details" || $page=="favourites" || $page=="membership-plans" || $page=="milestones" || $page=="chats" || $page=="review" || $page=="deposit-funds" || $page=="verify-identity" || $page=="profile-settings") { echo 'active'; } ?>">
								<a href="">For Employers<i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu <?php if($page=="developer"  || $page=="developer-details") { echo 'active'; } ?>">
										<a href="#">Freelancer</a>
										<ul class="submenu">
											<li class="<?php if($page=="developer") { echo 'active'; } ?>"><a href="developer">Freelancer</a></li>
											<li class="<?php if($page=="developer-details") { echo 'active'; } ?>"><a href="developer-details">Freelancer Details</a></li>
										</ul>
									</li>
									<li class="<?php if($page=="dashboard") { echo 'active'; } ?>"><a href="dashboard">Dashboard</a></li>	
									<li class="<?php if($page=="manage-projects") { echo 'active'; } ?>"><a href="manage-projects">Projects</a></li>
									<li class="<?php if($page=="favourites") { echo 'active'; } ?>"><a href="favourites">Favourites</a></li>
									<li class="<?php if($page=="membership-plans") { echo 'active'; } ?>"><a href="membership-plans">Membership</a></li>
									<li class="<?php if($page=="milestones") { echo 'active'; } ?>"><a href="milestones">Milestones</a></li>
									<li class="<?php if($page=="chats") { echo 'active'; } ?>"><a href="chats">Chats</a></li>
									<li class="<?php if($page=="review") { echo 'active'; } ?>"><a href="review">Review</a></li>			
									<li class="<?php if($page=="deposit-funds") { echo 'active'; } ?>"><a href="deposit-funds">Payments</a></li>							
									<li class="<?php if($page=="verify-identity") { echo 'active'; } ?>"><a href="verify-identity">Verify Identity</a></li>								
									<li class="<?php if($page=="profile-settings") { echo 'active'; } ?>"><a href="profile-settings">Settings</a></li>								
								</ul>
							</li>
							@if(!Route::is(['freelancer-portfolio']))
							<li class="has-submenu <?php if($page=="project" || $page=="project-details"  || $page=="freelancer-dashboard"  || $page=="freelancer-project-proposals" || $page=="freelancer-favourites" || $page=="freelancer-membership" || $page=="freelancer-change-password" || $page=="freelancer-chats" || $page=="freelancer-review" || $page=="freelancer-withdraw-money" || $page=="freelancer-verify-identity" || $page=="freelancer-profile-settings" || $page=="freelancer-portfolio" || $page=="freelancer-profile") { echo 'active'; } ?>">
								<a href="">For Freelancer<i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu <?php if($page=="project"  || $page=="project-details") { echo 'active'; } ?>">
										<a href="#">Projects</a>
										<ul class="submenu">
											<li class="<?php if($page=="project") { echo 'active'; } ?>"><a href="project">Projects</a></li>
											<li class="<?php if($page=="project-details") { echo 'active'; } ?>"><a href="project-details">Project Details</a></li>
										</ul>
									</li>
									<li class="<?php if($page=="freelancer-dashboard") { echo 'active'; } ?>"><a href="freelancer-dashboard">Dashboard</a></li>	
									<li class="<?php if($page=="freelancer-project-proposals") { echo 'active'; } ?>"><a href="freelancer-project-proposals">Projects</a></li>
									<li class="<?php if($page=="freelancer-favourites") { echo 'active'; } ?>"><a href="freelancer-favourites">Favourites</a></li>
									<li class="<?php if($page=="freelancer-membership") { echo 'active'; } ?>"><a href="freelancer-membership">Membership</a></li>
									<li class="<?php if($page=="freelancer-change-password") { echo 'active'; } ?>"><a href="freelancer-change-password">Change Password</a></li>
									<li class="<?php if($page=="freelancer-chats") { echo 'active'; } ?>"><a href="freelancer-chats">Chats</a></li>
									<li class="<?php if($page=="freelancer-review") { echo 'active'; } ?>"><a href="freelancer-review">Review</a></li>			
									<li class="<?php if($page=="freelancer-withdraw-money") { echo 'active'; } ?>"><a href="freelancer-withdraw-money">Payments</a></li>							
									<li class="<?php if($page=="freelancer-verify-identity") { echo 'active'; } ?>"><a href="freelancer-verify-identity">Verify Identity</a></li>				
									<li class="<?php if($page=="freelancer-profile-settings") { echo 'active'; } ?>"><a href="freelancer-profile-settings">Settings</a></li>				
								</ul>
							</li>
							@endif
							@if(Route::is(['freelancer-portfolio']))
							<li class="has-submenu <?php if($page=="project" || $page=="project-details"  || $page=="freelancer-dashboard"  || $page=="freelancer-project-proposals" || $page=="freelancer-favourites" || $page=="freelancer-membership" || $page=="freelancer-change-password" || $page=="freelancer-chats" || $page=="freelancer-review" || $page=="freelancer-withdraw-money" || $page=="freelancer-verify-identity" || $page=="freelancer-profile-settings" || $page=="freelancer-portfolio") { echo 'active'; } ?>">
								<a href="">For Freelancer<i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu <?php if($page=="project"  || $page=="project-details") { echo 'active'; } ?>">
										<a href="#">Projects</a>
										<ul class="submenu">
											<li class="<?php if($page=="project") { echo 'active'; } ?>"><a href="project">Projects</a></li>
											<li class="<?php if($page=="project-details") { echo 'active'; } ?>"><a href="project-details">Project Details</a></li>
										</ul>
									</li>
									<li class="<?php if($page=="freelancer-dashboard") { echo 'active'; } ?>"><a href="freelancer-dashboard">Dashboard</a></li>	
									<li class="<?php if($page=="freelancer-project-proposals") { echo 'active'; } ?>"><a href="freelancer-project-proposals">Projects</a></li>
									<li class="<?php if($page=="freelancer-favourites") { echo 'active'; } ?>"><a href="freelancer-favourites">Favourites</a></li>
									<li class="<?php if($page=="freelancer-membership") { echo 'active'; } ?>"><a href="freelancer-membership">Membership</a></li>
									<li class="<?php if($page=="freelancer-change-password") { echo 'active'; } ?>"><a href="freelancer-change-password">Change Password</a></li>
									<li class="<?php if($page=="freelancer-chats") { echo 'active'; } ?>"><a href="freelancer-chats">Chats</a></li>
									<li class="<?php if($page=="freelancer-review") { echo 'active'; } ?>"><a href="freelancer-review">Review</a></li>	
									<li class="<?php if($page=="freelancer-portfolio") { echo 'active'; } ?>"><a href="freelancer-portfolio">Portfolio</a></li>		
									<li class="<?php if($page=="freelancer-withdraw-money") { echo 'active'; } ?>"><a href="freelancer-withdraw-money">Payments</a></li>							
									<li class="<?php if($page=="freelancer-verify-identity") { echo 'active'; } ?>"><a href="freelancer-verify-identity">Verify Identity</a></li>				
									<li class="<?php if($page=="freelancer-profile-settings") { echo 'active'; } ?>"><a href="freelancer-profile-settings">Settings</a></li>				
								</ul>
							</li>
							@endif
							<li class="has-submenu <?php if($page=="about" || $page=="blank-page"  || $page=="404-page"  || $page=="user-account-details" || $page=="login" || $page=="register" || $page=="forgot-password" || $page=="change-password"  || $page=="freelancer-invoices"  || $page=="view-invoice") { echo 'active'; } ?>">
								<a href="">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="<?php if($page=="about") { echo 'active'; } ?>"><a href="about">About us</a></li>
									<li class="<?php if($page=="blank-page") { echo 'active'; } ?>"><a href="blank-page">Starter Page</a></li>
									<li class="<?php if($page=="404-page") { echo 'active'; } ?>"><a href="404-page">404 Page</a></li>
									<li class="<?php if($page=="user-account-details") { echo 'active'; } ?>"><a href="user-account-details">User Details</a></li>
									<li class="has-submenu <?php if($page=="freelancer-invoices"  || $page=="view-invoice") { echo 'active'; } ?>">
										<a href="#">Invoices</a>
										<ul class="submenu">
											<li class="<?php if($page=="freelancer-invoices") { echo 'active'; } ?>"><a href="freelancer-invoices">Invoices</a></li>
											<li class="<?php if($page=="view-invoice") { echo 'active'; } ?>"><a href="view-invoice">Invoice View</a></li>
										</ul>
									</li>
									<li class="<?php if($page=="login") { echo 'active'; } ?>"><a href="login">Login</a></li>
									<li class="<?php if($page=="register") { echo 'active'; } ?>"><a href="register">Register</a></li>
									<li class="<?php if($page=="forgot-password") { echo 'active'; } ?>"><a href="forgot-password">Forgot Password</a></li>
									<li class="<?php if($page=="change-password") { echo 'active'; } ?>"><a href="change-password">Change Password</a></li>									
								</ul>
							</li>
							<li class="has-submenu <?php if($page=="blog-list" || $page=="blog-grid"  || $page=="blog-details") { echo 'active'; } ?>">
								<a href="">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="<?php if($page=="blog-list") { echo 'active'; } ?>"><a href="blog-list">Blog List</a></li>
									<li class="<?php if($page=="blog-grid") { echo 'active'; } ?>"><a href="blog-grid">Blog Grid</a></li>
									<li class="<?php if($page=="blog-details") { echo 'active'; } ?>"><a href="blog-details">Blog Details</a></li>
								</ul>
							</li>
							<li>
								<a href="admin/index_admin" target="_blank">Admin</a>
							</li>
						</ul>
					</div>		 
					<ul class="nav header-navbar-rht">		
					 @if(!Route::is(['cancelled-projects','change-password','chats','completed-projects','dashboard','delete-account','deposit-funds','edit-project','favourites','files','freelancer-cancelled-projects','freelancer-change-password','freelancer-chats','freelancer-completed-projects','freelancer-dashboard','freelancer-delete-account','freelancer-favourites','freelancer-files','freelancer-invitations','freelancer-invoices','freelancer-membership','freelancer-milestones','freelancer-ongoing-projects','freelancer-payment','freelancer-portfolio','freelancer-profile-settings','freelancer-profile','freelancer-project-proposals','freelancer-review','freelancer-task','freelancer-transaction-history','freelancer-verify-identity','freelancer-view-project-detail','freelancer-withdraw-money','invited-freelancer','manage-projects','membership-plans','milestones','ongoing-projects','pending-projects','post-job','post-project','profile-settings','project-payment','project-proposals','review','tasks','transaction-history','verify-identity','view-invoice','view-project-detail','withdraw-money','user-account-details']))											
						{{-- <li><a href="register" class="reg-btn"><i class="fas fa-user"></i> Register</a></li>
						<li><a href="login" class="log-btn"><i class="fas fa-lock"></i> Login</a></li> --}}

					<!--Start-->
						@guest							
							<li><a class="reg-btn" href="beforesignup"><i class="fas fa-user"></i> Register</a></li>
							<!-- <li><a class="reg-btn" href="login"><i class="fas fa-lock"></i> Login</a></li> -->
							<li><a class="reg-btn"  data-bs-toggle="modal"  href="#login"><i class="fas fa-lock"></i> Login</a></li>
						@else
						
							{{-- <li><a class="reg-btn" href="javascript:void" onclick="$('#logout-form').submit();"><i class="fa fa-sign-out"></i>
								Logout
							</a></li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form> --}}

							<li class="nav-item dropdown account-item">
							<a href="{{url('/wishlist')}}" class=" nav-link" >
							<i class="far fa-heart"></i>
							</a>
							
							@if(Auth::user() != NULL)
								<a href="{{url('notification')}}" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								{{-- <i class="far fa-bell"></i>@if(auth()->user()->unreadNotifications->count() != 0) <span class="badge badge-pill"> {{ auth()->user()->unreadNotifications->count() }} </span>@endif --}}
								<i class="far fa-bell"></i> @if(auth()->user()->unreadNotifications->count() != 0) <span class="badge badge-pill"> {{ auth()->user()->unreadNotifications->count() }}</span>@endif
								</a>
								<div class="dropdown-menu emp">
								Lorem Ipsum is simply dummy text of the printing and typesetting<br>						
									<div class="drop-head"><a href="{{url('notification')}}">View All </a></div>
								</div>
							@endif

							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<span class="user-img">
									<img src="{{ asset('profile_img/'.Auth::user()->profile()->first()->profile_img) }}" alt="">
								</span>
								{{-- <span>{{ Auth::user()->name }}</span> --}}
							</a>
							<div class="dropdown-menu emp">
								<div class="drop-head">Account Details</div>
								@if(Auth::user()->isArtist)
								<a class="dropdown-item" href="{{url('artist') }}"><i class="material-icons">verified_user</i> Dashboard</a>
								@else
								<a class="dropdown-item" href="{{url('client') }}"><i class="material-icons">verified_user</i> Dashboard</a>
								@endif
								
								@if(Auth::user()->isArtist)
									@if(Auth::user()->profile()->first()->id != NULL)
										<a class="dropdown-item" href="{{route('profshow',Auth::user()->profile()->first()->id) }}"><i class="material-icons">verified_user</i> View profile</a>
								    @endif
								@endif	
								{{-- <a href="{{ route('profshow', $profile->id) }}">{{ $profile->name }} </a> --}}

								<div class="drop-head">Projects Settings</div>	
								<a class="dropdown-item" href="{{url('project_list')}}"><i class="material-icons">business_center</i> Projects</a>
								{{-- dont delete below code temporary hided --}}
								{{-- @if(Auth::user() != NULL)  
									<a class="dropdown-item" href="notification"><i class="fa fa-bell"></i> Notification  &nbsp; @if(auth()->user()->unreadNotifications->count() != 0) <span class="badge badge-pill"> {{ auth()->user()->unreadNotifications->count() }} </span>@endif</a>
								@endif --}}

								@if(Auth::user()->isArtist)
								<a class="dropdown-item" href="{{url('albums')}}"><i class="material-icons">collections</i> Albums</a>
								<div class="drop-head">Financial Settings</div>
								<a class="dropdown-item bal" href="{{url('payment')}}"> <i class="fas fa-dollar-sign"></i>Wallet <span class="amt"></span></a>
								@endif

								<div class="drop-head">Account Details</div>
								<a class="dropdown-item" href="{{url('basic')}}"> <i class="material-icons">settings</i> Profile Settings</a>


								<a class="dropdown-item" href="javascript:void" onclick="$('#logout-form').submit();"><i class="material-icons">power_settings_new</i> Logout</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
						<!-- <li><a href="{{url('jobsearch')}}" class="login-btn">Search Job </a></li> -->
						{{-- @else --}}
							@if(Auth::user()->isClient)
									<!-- <li><a href="post-project" class="login-btn">Post a Project </a></li> -->
							@endif
							
						@endguest
					<!--End-->
							

					@endif
						<!-- User Menu -->
						 @if(Route::is(['cancelled-projects','change-password','completed-projects','dashboard','delete-account','deposit-funds','favourites','files','invited-freelancer','manage-projects','membership-plans','milestones','ongoing-projects','pending-projects','profile-settings','project-payment','review','tasks','transaction-history','view-project-detail','withdraw-money','user-account-details']))
						<li class="nav-item dropdown has-arrow main-drop account-item">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<span class="user-img">
									<img src="assets/img/img-04.jpg" alt="">
								</span>
								<span>John</span>
							</a>
							<div class="dropdown-menu emp">
								<div class="drop-head">Account Details</div>	
								<a class="dropdown-item" href="user-account-details"><i class="material-icons">verified_user</i> View profile</a>
								<div class="drop-head">Projects Settings</div>	
								<a class="dropdown-item" href="manage-projects"><i class="material-icons">business_center</i> Projects</a>
								<a class="dropdown-item" href="favourites"><i class="material-icons">local_play</i> Favourites</a>
								<a class="dropdown-item" href="review"><i class="material-icons">pie_chart</i> Reviews</a>
								<div class="drop-head">Account Details</div>
								<a class="dropdown-item" href="profile-settings"> <i class="material-icons">settings</i> Profile Settings</a>
								
								<a class="dropdown-item" href="index"><i class="material-icons">power_settings_new</i> Logout</a>
							</div>
						</li>
						@endif
						 {{-- @if(Route::is(['albums','payment','settings','membership','wishlist','project_list','edit-project','freelancer-cancelled-projects','freelancer-change-password','freelancer-chats','freelancer-completed-projects','freelancer-dashboard','freelancer-delete-account','freelancer-favourites','freelancer-files','freelancer-invitations','freelancer-invoices','freelancer-membership','freelancer-milestones','freelancer-ongoing-projects','freelancer-payment','freelancer-portfolio','freelancer-profile-settings','freelancer-profile','freelancer-project-proposals','freelancer-review','freelancer-task','freelancer-transaction-history','freelancer-verify-identity','freelancer-view-project-detail','freelancer-withdraw-money','post-job','post-project','project-proposals','verify-identity','view-invoice'])) --}}
						
						{{-- @endif  --}}
						<!-- /User Menu -->
						

					</ul>
				</nav>
				</div>
			</header>



			    <div class="modal fade custom-modal" id="login">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content bg-modal">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <div class="modal-info text-center">
                                                    <div class="row">
                                                        <div class="col-md-12">
														<a href="{{ route('facebook') }}"><button type="button"
                                                                class="icon-button social-signing-button facebook-signing-button"><span
                                                                    class="lFICM06 provider-icon" aria-hidden="true"
                                                                    style="width: 18px; height: 18px;"><svg width="20"
                                                                        height="20" viewBox="0 0 20 20"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M20 10.0022C20.0004 8.09104 19.4532 6.2198 18.4231 4.61003C17.393 3.00026 15.9232 1.71938 14.1877 0.919062C12.4522 0.118741 10.5237 -0.167503 8.63053 0.0942223C6.73739 0.355948 4.9589 1.15468 3.50564 2.39585C2.05237 3.63701 0.985206 5.26863 0.430495 7.0975C-0.124217 8.92636 -0.143239 10.8759 0.37568 12.7152C0.894599 14.5546 1.92973 16.2067 3.35849 17.476C4.78726 18.7453 6.54983 19.5786 8.4375 19.8772V12.8922H5.89875V10.0022H8.4375V7.79843C8.38284 7.28399 8.44199 6.76382 8.61078 6.2748C8.77957 5.78577 9.05386 5.33986 9.4142 4.96866C9.77455 4.59746 10.2121 4.31007 10.6959 4.12684C11.1797 3.94362 11.6979 3.86905 12.2137 3.90843C12.9638 3.91828 13.7121 3.98346 14.4525 4.10343V6.56718H13.1925C12.9779 6.53911 12.7597 6.55967 12.554 6.62733C12.3484 6.69498 12.1607 6.80801 12.0046 6.95804C11.8486 7.10807 11.7283 7.29127 11.6526 7.49408C11.577 7.69689 11.5479 7.91411 11.5675 8.12968V10.0047H14.3412L13.8975 12.8947H11.5625V19.8834C13.9153 19.5112 16.058 18.3114 17.6048 16.4999C19.1516 14.6884 20.001 12.3842 20 10.0022Z">
                                                                        </path>
                                                                    </svg></span>
                                                                <span>Continue with Facebook</span>
                                                            </button></a>
                                                            <br>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <a href="{{ route('google') }}"><button type="button"
                                                                    class="icon-button social-signing-button google-signing-button"><span
                                                                        class="lFICM06 provider-icon" aria-hidden="true"
                                                                        style="width: 18px; height: 18px;"><svg
                                                                            width="18" height="19"
                                                                            viewBox="0 0 18 19"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9 7.84363V11.307H13.8438C13.6365 12.428 12.9994 13.373 12.0489 14.0064V16.2534H14.9562C16.6601 14.6951 17.641 12.4029 17.641 9.67839C17.641 9.04502 17.5854 8.43176 17.4792 7.84865H9V7.84363Z"
                                                                                fill="#3E82F1"></path>
                                                                            <path
                                                                                d="M9.00001 14.861C6.65394 14.861 4.67192 13.2876 3.96406 11.1714H0.955627V13.4937C2.43709 16.4142 5.48091 18.4198 9.00001 18.4198C11.432 18.4198 13.4697 17.6206 14.9562 16.2533L12.0489 14.0064C11.245 14.5443 10.2135 14.861 9.00001 14.861Z"
                                                                                fill="#32A753"></path>
                                                                            <path
                                                                                d="M3.96404 5.45605H0.955617C0.348876 6.66246 0 8.02972 0 9.47238C0 10.915 0.348876 12.2823 0.955617 13.4887L3.96404 11.1714C3.78202 10.6335 3.6809 10.0605 3.6809 9.47238C3.6809 8.88426 3.78202 8.31122 3.96404 7.77336V5.45605Z"
                                                                                fill="#F9BB00"></path>
                                                                            <path
                                                                                d="M0.955627 5.45597L3.96406 7.77327C4.67192 5.65703 6.65394 4.08368 9.00001 4.08368C10.3197 4.08368 11.5079 4.53608 12.4382 5.42078L15.0219 2.85214C13.4646 1.40948 11.427 0.52478 9.00001 0.52478C5.48091 0.52478 2.43709 2.53043 0.955627 5.45597Z"
                                                                                fill="#E74133"></path>
                                                                        </svg> </span>
                                                                    <span>Continue with Google</span>
                                                                </button></a>
                                                            <div class="form-separator"><span>or</span></div>

                                                            <form method="POST" action="{{ route('login') }}"
                                                                style="padding:28px;">
                                                                @csrf <div class="form-group form-focus">
                                                                    <input type="text" class="form-control floating"
                                                                        name="email">
                                                                    <label class="focus-label">Email</label>
                                                                </div>
                                                                <div class="form-group form-focus">
                                                                    <input name="password" type="password"
                                                                        class="form-control floating">
                                                                    <label class="focus-label">Password</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="custom_check">
                                                                        <input type="checkbox" name="rem_password">
                                                                        <span class="checkmark"></span> Remember password
                                                                    </label>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button
                                                                        class="btn btn-primary btn-block-login btn-sm login-btn"
                                                                        type="submit">Login</button>
                                                                </div>

                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-6 ">
                                                                        <a href="forgot-password">Forgot Password ?</a>
                                                                    </div>
                                                                    <div class="col-md-6 ">New to LYTAA? <a
                                                                            href="beforesignup">Click here</a></div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

			<!-- /Header -->