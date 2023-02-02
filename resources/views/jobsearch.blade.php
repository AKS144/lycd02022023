<?php $page = 'project'; ?>
@extends('layout.mainlayout')
@section('content')
<style>
	ol,
	ul {
		list-style: none;
		list-style-image: none;
		margin: 0;
		padding: 0;
	}

	p.tbody-4 {
		font-size: 18px;
	}

	.fmFFGHM.RGte4qL.rv\+rROO {
		background: red;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		display: -webkit-inline-box;
		display: -ms-inline-flexbox;
		display: inline-flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
		padding: 3px 7px 2px;
		border-width: 0px;
		border-style: solid;
		text-decoration: none;
		text-align: center;
		color: #fff;
		font-size: 10px;
		font-weight: 700;
		border-radius: 9px;
		line-height: 100%;
	}

	.li-business {
		margin-bottom: -21px;
	}

	.subscribe {
		padding: 55px 77px 47px 64px;

	}

	.btn-expoler {
		background-color: #ffffff;
		border: 1px solid #FF5B37;
		color: #ff5b37;
		margin-top: 30px;
	}

	.btn-banner {
		background-color: #ffffff;
		border: 1px solid #446ee7;
		color: #446ee7;
		margin-top: 60px;
	}

	.freelance-img img {
		margin: auto;
		width: 40px;
		height: 40px;
		border-radius: 50%;
	}

	.freelance-img {
		position: relative;
		width: 100%;
		height: 56px;
		margin: -25px 0 0;
	}

	.freelance-img .verified {
		background-color: #fff;
		color: #38B653;
		font-size: 12px;
		position: absolute;
		right: 80px;
		bottom: 14px;
		border-radius: 100%;
		z-index: 2;
		width: 15px;
		height: 17px;
		display: flex;
		justify-content: center;
		align-items: center;
		text-align: center;
	}

	.slick-dots {
		display: none !important;
	}

	.banner-home {
		background: #446ee7;
		padding: 56px 5px;
		position: relative;
		color: #fff;
		background-image: url('https://fiverr-res.cloudinary.com/q_auto,f_auto,w_1160,dpr_1.0/v1/attachments/generic_asset/asset/b49b1963f5f9008f5ff88bd449ec18f7-1608035772453/logo-maker-banner-wide-desktop-1352-2x.png');
		background-repeat: no-repeat;
		background-position: top;
	}

	.partner-logo {
		padding: 15px 30px;
	}

	.slick-prev {
		left: auto;
		z-index: 1;
		right: auto;
		top: 81px;
		border-radius: 16px;
	}

	.slick-next {
		right: -1px;
		top: 82px;
		border-radius: 16px;
	}
</style>
    <br>
    <br>
    <br>

    <!-- Breadcrumb -->
    {{-- <div class="breadcrumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">Projects</h2>
						    <nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Projects</li>
								</ol>
							</nav> 
						</div>
					</div>
				</div>
			</div> --}}
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content" >
        <div class="container">
            <div class="row">

			<div class="col-md-12 col-lg-8 col-xl-12">
				<div class="sort-tab" style="display: none;">
					<div class="row align-items-center">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
							<div class="d-flex align-items-center">
							<div class="sort-by">
									<select class="custom-select" id="category">
										<option>Category</option>
										
                                    </select> 
								</div>
								&nbsp;&nbsp;&nbsp;
								<div class="sort-by">									
									<select class="custom-select" id="reward">
										<option>Budget</option>
									
                                    </select>
									
								</div>
								&nbsp;&nbsp;&nbsp;
								
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
							<div class="d-flex justify-content-sm-end">
								<div class="sort-by">
									<select class="custom-select form-select">
										<option>Relevance</option>
										<option>Rating</option>
										<option>Popular</option>
										<option>Latest</option>
										<option>Free</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>


                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar" style="display: none;">

                    <!-- Search Filter -->
                    {{-- <div class="card search-filter">
								<div class="card-header d-flex justify-content-between">
									<h4 class="card-title mb-0">FILTERS</h4>
									<a href="javascript:void(0);">Clear All</a>
								</div>
								<div class="card-body">
								<div class="filter-widget">
									<h4>Category</h4>
									<div class="form-group">
										<select class="form-control select">
											@foreach ($searchCategories as $id => $searchCategories)
												<option value="{{ $id }}">{{ $searchCategories }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Search</h4>
									<div class="form-group">
										<input type="text" class="form-control" >
									</div>
								</div>
								<div class="filter-widget">
									<h4>Location</h4>
									<div class="form-group">
										<select class="form-control select">
											@foreach ($searchLocations as $id => $searchLocations)
												<option value="{{ $id }}">{{ $searchLocations }}</option>
											@endforeach
										</select>
									</div>
								</div> --}}
                    {{-- <div class="filter-widget">
									<h4>Completed Projects</h4>
									<div class="form-group">
										<select class="form-control select">
											<option>Select Projects</option>
											<option>Node Projects</option>
											<option>UI Projects</option>
										</select>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Pricing Type</h4>
									<div class="form-group">
										<select class="form-control select">
											<option>Hourly Rate</option>
											<option>Full Day Rate</option>
											<option>Half Day Rate</option>
										</select>
									</div>
								</div> --}}
                    {{-- <div class="filter-widget">
									<h4>Add Skills</h4>
									<div class="form-group">
										<span class="badge badge-pill badge-skill">+ Web Design</span>
										<span class="badge badge-pill badge-skill">+ UI Design</span>
										<span class="badge badge-pill badge-skill">+ Node Js</span>									
										<input type="text" class="form-control">
									</div>
								</div> --}}
                    {{-- <div class="filter-widget">
									<h4>Avalability</h4>
								    <div>
										<label class="custom_check">
											<input type="checkbox" name="select_time" checked>
											<span class="checkmark"></span> Hourly 
										</label>
									</div>									
								</div>
								<div class="filter-widget">
									<h4>Experience</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span>  0-1 years
										</label>
									</div>
									
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_exp">
											<span class="checkmark"></span>  Mastered
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_exp">
											<span class="checkmark"></span> Professional
										</label>
									</div>
								</div> --}}
                    <div class="filter-widget">
                        <h4>Budget Range</h4>
                        <div id="slider-range"></div>
                        <div class="row slider-labels">
                            <div class="col-xs-12 caption">
                                <span id="slider-range-value1"></span> - <span id="slider-range-value2"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <form>
                                    <input type="hidden" name="min-value" value="10">
                                    <input type="hidden" name="max-value" value="1000">
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="filter-widget">
									<h4>Keywords</h4>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Enter Keywords">
									</div>
								</div> --}}
                    {{-- <div class="filter-widget">
									<h4>Currency</h4>
									<div class="form-group">
										<select class="form-control select">
											<option>USD</option>
											<option>Euro</option>
										</select>
									</div>
								</div> --}}
                    <div class="btn-search">
                        <button type="button" class="btn btn-block">Search</button>
                    </div>
                </div>
            </div>
            <!-- /Search Filter -->

        </div>

        <div class="col-md-12 col-lg-12 col-xl-12">

            <div class="sort-tab" style="display:none;">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center">
                            <!-- <div class="freelance-view">
               <h4>Showing 1 - 12 of 455</h4>
              </div> -->
                            <div class="sort-by">
                                {{-- @if (is_array($searchCategories) || is_object($searchCategories)) --}}
                                <!-- <select class="custom-select">
                                    <option>Category</option>
                                    @foreach ($Categories as $id => $Categories)
                                        <option value="{{ $id }}">{{ $Categories }}</option>
                                    @endforeach

                                </select> {{-- @endif --}} -->
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="sort-by">
                                <select class="custom-select">
                                    <option>Location</option>
                                    @foreach ($Locations as $id => $Locations)
                                        <option value="{{ $id }}">{{ $Locations }}</option>
                                    @endforeach
                                </select>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="sort-by">
                                <select class="custom-select">
                                    <option>Budget</option>
                                    @foreach ($rewards as $id => $rewards)
                                        <option value="{{ $id }}">{{ $rewards }}</option>
                                    @endforeach
                                </select>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							<div class="sort-by">
							<label></label>
                                <input class="form-control" placeholder="Search Here">
                                    
                                
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            {{-- <div class="sort-by">
											 <button class="btn btn-primary">Search</button>
										   </div> --}}
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="d-flex justify-content-sm-end">
                            <div class="sort-by">
                                <select class="custom-select">
                                    <option>Relevance</option>
                                    <option>Rating</option>
                                    <option>Popular</option>
                                    <option>Latest</option>
                                    <option>Free</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				
				{{-- code working for search --}}
				{{-- @if(Auth::check() != NULL) --}}
			    <!-- <form action="{{ url('jobs-search') }}" class="serach-form-area">
                    <div class="row justify-content-center form-wrap">
                        <div class="col-lg-4 form-cols">
                            <input type="text" class="form-control" name="search" placeholder="What are you looking for?">
                        </div>
                        <div class="col-lg-2 form-cols">
                            <button type="submit" class="btn btn-info">
                              <span class="lnr lnr-magnifier"></span> Search
                            </button>
                        </div>								
                    </div>
                </form>	 -->
				{{-- @endif --}}
				{{-- code working for search --}}


 		@if(Auth::check() == NULL)
		<form method="GET" action="{{ url('jobs-search') }}">		
			<div class="input-group hide-search-mobile" style="margin-bottom: 14px;">						
						<!-- <div class="disable-mobile"> -->
						<input class="form-control autocomplete" type="text" name="search" placeholder="Search Here...." style="padding:17px; width:846px;border: #cfcfcf 2px solid; border-radius:11px 0px 0px 11px;">
					    <button class="btn btn-warning" type="submit" style="background: #F79533;border-radius: 0px 11px 11px 0px;">
					    <span class="text-capitalize" style="color: rgb(255,255,255);font-size: 14px;">Search</span></button>
					   <!-- </div> -->
			</div>
		</form>
		@endif


            <!-- <div class="bootstrap-tags text-start pl-0">
            <span class="badge badge-pill badge-skills">UI/UX Developer <span class="tag-close" data-role="remove"><i class="fas fa-times"></i></span></span>
            <span class="badge badge-pill badge-skills">USA <span class="tag-close" data-role="remove"><i class="fas fa-times"></i></span></span>
            <span class="badge badge-pill badge-skills">Hourly <span class="tag-close" data-role="remove"><i class="fas fa-times"></i></span></span>
            <span class="badge badge-pill badge-skills">0-1 years <span class="tag-close" data-role="remove"><i class="fas fa-times"></i></span></span>
            <span class="badge badge-pill badge-skills">USD <span class="tag-close" data-role="remove"><i class="fas fa-times"></i></span></span>
           </div> -->
		   <br>
		   <br>
		   <br>

            <div class="row">
                <!-- Project Content -->
				@if($jobs->count() > 0)
                @foreach ($jobs as $job)
                <div class="col-md-6 col-lg-6 col-xl-3">
					<div class="freelance-content">
						<div class="slideshowjob">
							<div class="slide">
								<img src="https://img.freepik.com/free-vector/employment-agency-searching-job-candidates_1262-19774.jpg?t=st=1656651732~exp=1656652332~hmac=b133a92d00e2f54144b71e9bcfb12acd454ebd19308fe3bbbec2bd73e2e5cb70&w=1380"
									alt=""  style="max-width:100%;" height="200" />
							</div>		
						</div>
						<br>
						<div class="freelance-img">
							<a href="#">
								<img src="{{ asset('assets/img/img-03.jpg') }}" alt="User Image">
								@if(Auth::check() != NULL)
									{{-- <a href="{{ route('profshow', $profile->id) }}">{{ $profile->name }} </a>  --}}
									<a href="{{ route('jobs.show', $job->id) }}">{{ $job->name }}</a>
								@else
                   				    <a data-bs-toggle="modal" href="#login">{{ $job->name }}</a>
								@endif
								{{-- <a href="{{ route('jobs.show', $job->id) }}">{{ $job->name }}</a> --}}
							</a>
						</div>
						<div class="freelance-info">
							I will make custom graphics for your blog, website and more<BR>
						</div>
						<div class="rating">
							<i class="fas fa-star filled"></i>
							<i class="fas fa-star filled"></i>
							<i class="fas fa-star filled"></i>
							<i class="fas fa-star filled"></i>
							<i class="fas fa-star"></i>
							<span class="average-rating">5.0 (4)</span>
						</div>
						<div class="row ">
							<div class="col-md-6 ">
								<i class="fas fa-heart">
								</i>
							</div>
							<div class="col-md-6 "><i class="fa fa-map-marker"></i>{{$job->location}}</h5>
							</div>
						</div>
					</div>
				</div>                    
                @endforeach
				@else
				<div class="text-center">
				<img class="no-search-found" src="{{asset('img/noresultfound.jpg')}}" >
				</div>
				
				@endif
				<div>				
				</div>			
            </div>
			
        </div>
    </div>
    </div>
    </div>
    <!-- /Page Content -->
    <style>
        .btn-view {
            width: 30%;
            display: inline-block;
            border-radius: 12px;
            border: 1px solid #ff5b37;
            text-transform: capitalize;
            background: #fff;
            color: #ff5b37;
            padding: 5px 15px;
        }

        .btn-view:hover,
        .btn-view:focus {
            background: #fb451d;
            color: #fff;
        }

        .sort-by select {
            border: none;
            outline: none;
            width: 150px;
            padding: 0 20px;
            font-size: 15px;
            color: #53545b;
            font-weight: 500;
            height: 36px;
            border-radius: 6px;
        }

    </style>

    </div>
    <!-- /Main Wrapper -->

    <!-- The Modal -->
    <div class="modal fade" id="rating">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header d-block b-0 pb-0">
                    <span class="modal-close float-end"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i
                                class="far fa-times-circle orange-text"></i></a></span>
                </div>
                <div class="modal-body">
                    <form action="project">
                        <div class="modal-info">
                            <div class="text-center pt-0 mb-5">
                                <h3>Please login to Favourite Project</h3>
                            </div>
                            <div class="submit-section text-center">
                                <a data-bs-dismiss="modal" href="#" class="btn btn-primary black-btn click-btn">Cancel</a>
                                <button type="submit" class="btn btn-primary click-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /The Modal -->






								<!-- Modal for  -->
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
                                                        <div class="col-md-12"><button type="button"
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
                                                            </button>
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
@endsection