<?php $page="client";?>
@extends('layout.mainlayout')
@section('content')		

<br>
<br>
<br>
<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<!-- sidebar -->
						@include('client.menu')
						<!-- /sidebar -->

						<div class="col-xl-9 col-md-8">
							<div class="dashboard-sec">
								<div class="row">
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Proposal</div>
												<div class="dash-widget-count">{{ $quotes }}</div>
											</div>
											<!-- <div class="dash-widget-more">
												<a href="freelancer-completed-projects" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
											</div> -->
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Job Posted</div>
												<div class="dash-widget-count">{{ $job }}</div>
											</div>
											<!-- <div class="dash-widget-more">
												<a href="freelancer-completed-projects" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
											</div> -->
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Contracts</div>
												<div class="dash-widget-count">{{ $contracts }}</div>
											</div>
											<!-- <div class="dash-widget-more">
												<a href="freelancer-review" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
											</div> -->
										</div>
									</div>
								</div>
								
								<!-- Chart Content -->
								<div class="row">
									<!-- <div class="col-xl-8 d-flex">
										<div class="card flex-fill">
											<div class="pro-head">	
												<h5 class="card-title mb-0">Your Profile View</h5> 
												<div class="month-detail">	
													<select class="form-control">
														<option value="0">Last 6 months</option>
														<option value="1" >Last 2 months</option>
													</select>
												</div>
											</div>
											<div class="pro-body">									
												<div id="chartprofile"></div>
											</div>
										</div>
									</div> -->
									<!-- <div class="col-xl-4 d-flex">
										<div class="flex-fill card">
											<div class="pro-head b-0">	
												<h5 class="card-title mb-0">Static Analytics</h5> 
											</div>
											<div class="pro-body">									
												<div id="chartradial"></div>
												<ul class="static-list">
													<li><span><i class="fas fa-circle text-violet me-1"></i> Applied Jobs</span> <span class="sta-count">30</span></li>
													<li><span><i class="fas fa-circle text-pink me-1"></i> Active Proposals</span> <span class="sta-count">30</span></li>
													<li><span><i class="fas fa-circle text-yellow me-1"></i> Applied Proposals</span> <span class="sta-count">30</span></li>
													<li><span><i class="fas fa-circle text-blue me-1"></i> Bookmarked Projects</span> <span class="sta-count">30</span></li>
												</ul>
											</div>
										</div>
									</div> -->
								</div>
								<!-- /Chart Content -->

								

								<!-- <div class="row">
									<div class="col-md-12">
										<div class="card card-table">
											<div class="card-header">
												<div class="row">
													<div class="col">
														<h4 class="card-title">Recently Posted Jobs</h4>
													</div>
													<div class="col-auto">
														<a href="{{ url('profile-search') }}" class="btn-right btn btn-sm fund-btn">
															View All 
														</a>
													</div>
												</div>
											</div>
											<div class="card-body">
												<div class="table-responsive table-job">	
													<table class="table table-hover table-center mb-0">
														<thead class="thead-pink">
															<tr>
																<th>Details</th>
																<th>Job Type</th>
																<th>Budget</th>
																<th>Posted on</th>
																<th>Proposals</th>
																<th class="text-end">Action</th>
															</tr>
														</thead>
														<tbody>
														@foreach($profiles as $profiles)
															<tr>
																<td>
																	<span class="detail-text">{{ $profiles->name }}</span>
																	<span class="d-block text-expiry">{{ $profiles->location }}</span>
																</td>
																<td><span class="badge rounded-pill bg-primary"></span></td>
																<td><span class="d-block text-danger"></span></td>
																<td><a href="profile"><img class="avatar-img rounded-circle me-2" src="{{ asset('profile_img/'.$profiles->profile_img) }}" width="50"> </td>
																<td><span class="badge rounded-pill bg-info"></span></td>																
																<td class="text-end"><a href="" class="btn btn-primary btn-plan">View</a></td>
															</tr>
														@endforeach											
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div> -->


								
								<div class="row">
									<!-- Plan  Details-->
									<!-- <div class="col-xl-6 d-flex">					
										<div class="card flex-fill">
											<div class="pro-head">
												<h2>Notification</h2>
												<div><i class="fas fa-check-circle verified orange-text fa-2x"></i></div>
											</div>
											@foreach(Auth::user()->notifications()->limit(7)->get() as $notification)
												<div class="news-feature">	
											        <p class="mb-0">{{ $notification->data['data']}}, &nbsp;<span style="color:orange">{{ $notification->created_at->diffForHumans() }}</span></p>
												</div>
										    @endforeach
										</div>
									</div> -->									
									@if(Auth::user()->notifications()->count() > 0)
									<div class="col-xl-6 d-flex">					
										<div class="card flex-fill">
											<div class="pro-head">
												<h2>Notifications</h2>
												<a href="{{ route('client.notification') }}" class="btn fund-btn">View</a>
											</div>
											<div class="pro-body p-0">
												<div class="on-project">													
													<div class="pro-info">
														@foreach(Auth::user()->notifications()->limit(5)->get() as $notification)
															<div class="news-feature">	
																<p class="mb-0">{{ $notification->data['data']}}, &nbsp;<span style="color:orange">{{ $notification->created_at->diffForHumans() }}</span></p>
															</div>
														@endforeach
													</div>
												</div>	
											</div>
										</div>
									</div>
									@endif
									<!-- /Plan  Details -->
									
									<!-- Ongoing Projects -->
									@if($jobs->count() > 0)
									<div class="col-xl-6 d-flex">					
										<div class="card flex-fill">
											<div class="pro-head">
												<h2>Lastest Projects</h2>
												<a href="{{ route('jobpost.index') }}" class="btn fund-btn">View All</a>
											</div>
											<div class="pro-body p-0">
												@foreach($jobs as $jobs)
												<div class="on-project">
													<h5>{{$jobs->name}}</h5>
													<!-- <p>I need some data to be scraped from various social media....</p> -->
													<div class="pro-info">
														<ul class="list-details">
															<li>
																<div class="slot">
																	<p>Job Type</p>
																	<h5>{{ $jobs->jobtype }}</h5>
																</div>
															</li>
															<li>
																<div class="slot">
																	<p>Project Budget</p>
																	<h5>{{ $jobs->budget }}</h5>
																</div>
															</li>
															<li>
																<div class="slot">
																	<p>Location</p>
																	<h5><img src="{{asset('assets/img/location.png')}}" height="13" alt="Lang">{{ $jobs->location }}</h5>
																</div>
															</li>
															<li>
																<div class="slot">
																	<p>Post Date</p>																	
																	<h6>{{ date('d/M/Y', strtotime($jobs->created_at)) }}</h6>
																</div>
															</li>
														</ul>
													</div>
												</div>	
												@endforeach							
										
											</div>
										</div>
									</div>
									@endif
									<!-- /Ongoing Projects -->
								</div>
								

								
							</div>								
						</div>								
					</div>					
				</div>
			</div>				
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection