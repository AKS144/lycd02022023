<?php $page="artist";?>
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
             		@include('artist.sidebar')
					<!-- /sidebar -->
						
						<div class="col-xl-9 col-md-8">
							<div class="dashboard-sec">
								<div class="row">
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Projects</div>
												<div class="dash-widget-count">{{ $proj }}</div>
											</div>
											<!-- <div class="dash-widget-more">
												<a href="{{ route('proj_list') }}" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
											</div> -->
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Ongoing Projects</div>
												<div class="dash-widget-count">{{ $proj_ongoing }}</div>
											</div>
											<!-- <div class="dash-widget-more">
												<a href="{{ route('proj_ongoing') }}" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
											</div> -->
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Completed Projects</div>
												<div class="dash-widget-count">{{ $proj_completed }}</div>
											</div>
											<!-- <div class="dash-widget-more">
												<a href="{{ route('proj_completed') }}" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
											</div> -->
										</div>
									</div>
								</div>
								
								<!-- Chart Content -->
								{{-- <div class="row">
									<div class="col-xl-8 d-flex">
										<div class="card flex-fill">
											<div class="card-header">
												<div class="d-flex justify-content-between align-items-center">
													<h5 class="card-title">Profile Views</h5>
													<div class="dropdown">
														<button class="btn btn-white btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Monthly
														</button>
														<div class="dropdown-menu dropdown-menu-start">
															<a href="javascript:void(0);" class="dropdown-item">Weekly</a>
															<a href="javascript:void(0);" class="dropdown-item">Monthly</a>
															<a href="javascript:void(0);" class="dropdown-item">Yearly</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body">									
												<div id="chartprofile"></div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 d-flex">
										<div class="card flex-fill">
											<div class="card-header">
												<div class="d-flex justify-content-between align-items-center">
													<h5 class="card-title">Static Analytics</h5>
													<div class="dropdown">
														<button class="btn btn-white btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Monthly
														</button>
														<div class="dropdown-menu dropdown-menu-start">
															<a href="javascript:void(0);" class="dropdown-item">Weekly</a>
															<a href="javascript:void(0);" class="dropdown-item">Monthly</a>
															<a href="javascript:void(0);" class="dropdown-item">Yearly</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body">									
												<div id="chartradial"></div>
												<ul class="static-list">
													<li><span><i class="fas fa-circle text-violet me-1"></i> Applied Jobs</span> <span class="sta-count">30</span></li>
													<li><span><i class="fas fa-circle text-pink me-1"></i> Active Proposals</span> <span class="sta-count">30</span></li>
													<li><span><i class="fas fa-circle text-yellow me-1"></i> Applied Proposals</span> <span class="sta-count">30</span></li>
													<li><span><i class="fas fa-circle text-blue me-1"></i> Bookmarked Projects</span> <span class="sta-count">30</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div> --}}
								<!-- /Chart Content -->
								
								<!-- Past Earnings -->
								<div class="row">
									<div class="col-md-12">
										<div class="card card-table">
											<div class="card-header">
												<div class="row">
													<div class="col">
														<h4 class="card-title">Recently Posted Jobs</h4>
													</div>
													<div class="col-auto">
														<a href="" class="btn-right btn btn-sm fund-btn">
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
														@foreach($job as $job)
															<tr>
																<td>
																	<span class="detail-text">{{ $job->name }}</span>
																	
																</td>
																<td><span class="badge rounded-pill bg-primary">{{ $job->jobtype }}</span></td>
																<td><span class="d-block text-danger">{{ $job->budget }}</span></td>
																<td>{{ date('d-M-Y', strtotime($job->created_at)) }}</td>
																<td><span class="badge rounded-pill bg-info">{{ $job->proposal }}</span></td>																
																<td class="text-end"><a href="{{ route('jobs.show', $job->id) }}" class="btn btn-primary btn-plan">View</a></td>
															</tr>
														@endforeach																
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Past Earnings -->


									<!-- Past Earnings -->
									<div class="row">
									@if($quotes->count() > 0)
									<div class="col-md-12">
										<div class="card card-table">
											<div class="card-header">
												<div class="row">
													<div class="col">
														<h4 class="card-title">Quotation</h4>
													</div>
													<div class="col-auto">
														<a href="" class="btn-right btn btn-sm fund-btn">
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
																<th>Client name</th>
																<th>Budget</th>
															
																<th>Quotation Status</th>
																<th class="text-end">Action</th>
															</tr>
														</thead>
														<tbody>
														@foreach($quotes as $job)
															<tr>
																<td>
																	<span class="detail-text">{{ $job->	project_details }}</span>
															
																</td>
																<td><span class="detail-text">{{ $job->user_name }}</span></td>
																<td><span class="d-block text-success">{{ date('d M', strtotime($job->projected_budget)) }}</span></td>
														
																<td>
																	@if($job->status == 0)
																		<span class="d-block text-warning">Pending</span>
																	@elseif($job->status == 1)
																		<span class="d-block text-info">Ongoing</span>
																	@elseif($job->status == 2)
																		<span class="d-block text-success">Completed</span>
																	@elseif($job->status == 2)
																		<span class="d-block text-danger">Canceled</span>
																	@endif
																</td>																
																<td class="text-end"><a href="" class="btn btn-primary btn-plan">View</a></td>
															</tr>
														@endforeach																
														</tbody>
													</table>
												</div>
											</div>			
										</div>
									</div>
									@endif
								</div>
								<!-- /Past Earnings -->
								
								<div class="row">
									<!-- Plan  Details-->
									<div class="col-xl-6 d-flex">					
										<div class="card flex-fill">
											<div class="card-header">
												<div class="row justify-content-between align-items-center">
													<div class="col">
														<h5 class="card-title">Membership Plan Details</h5>
													</div>
													<div class="col-auto">
														<a href="membership" class="btn-right btn btn-sm fund-btn">
															View 
														</a>
													</div>
												</div>
											</div>
											<div class="card-body">
												<div class="row">
													<div class="col-md-6 col-sm-12">
														<div class="plan-details">
															<h4>{{ $package->pack_name }}</h4>
															<div class="yr-amt">Anually Price</div>
															<h4>₹{{ $package->amount }}</h4>
															<div class="yr-duration">Duration: One Year</div>
												
															<a href="{{ route('membership') }}" class="btn btn-primary btn-plan">Change Plan</a>
														</div>
													</div>
													{{-- <div class="col-md-6 col-sm-6">
														<div class="plan-feature">
															<ul>
																<li>12 Project Credits</li>
																<li>10 Allowed Services</li>
																<li>20 Days visibility</li>
																<li>5 Featured Services</li>
																<li>20 Days visibility</li>
																<li>30 Days Package Expiry</li>
																<li>Profile Featured</li>
															</ul>
														</div>
													</div> --}}
												</div>
											</div>
										</div>
									</div>
									<!-- /Plan  Details -->
									
									<!-- Notifications -->
									@if(Auth::user()->notifications()->count() > 0)
									<div class="col-xl-6 d-flex">					
										<div class="card flex-fill">
											<div class="card-header">
												<div class="row justify-content-between align-items-center">
													<div class="col">
														<h5 class="card-title">Notifications</h5>
													</div>
													<div class="col-auto">
														<a href="{{ route('artist.notification') }}" class="btn-right btn btn-sm fund-btn">
															View &nbsp; @if(auth()->user()->unreadNotifications->count() != 0) <span class="badge badge-pill"> {{ auth()->user()->unreadNotifications->count() }} </span>@endif
														</a>
													</div>
													
												</div>
											</div>
											<div class="pro-body p-0">
											@foreach(Auth::user()->notifications()->limit(5)->get() as $notification)
												<div class="news-feature">												
													{{-- <p>{{ $notification->data['data']}} -{{ $notification->created_at->diffForHumans() }}</p> --}}
											        <p class="mb-0">{{ $notification->data['data']}}, &nbsp;<span style="color:orange">{{ $notification->created_at->diffForHumans() }}</span></p>
												</div>
										    @endforeach
											</div>
										</div> 
									</div>
									@endif
									<!-- /Notifications -->
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