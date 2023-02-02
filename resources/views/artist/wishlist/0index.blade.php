<?php $page="wishlist";?>
@extends('layout.mainlayout')
@section('content')		


	<!-- Page Content -->
			<div class="content bookmark">					
				<div class="container-fluid">					
					<div class="row">
						
						<!-- sidebar -->
						@include('artist.sidebar')

						<!-- /sidebar -->
						
						<div class="col-xl-9 col-md-8">
							<!-- <nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="favourites">Bookmarked Freelancers</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="invited-freelancer">Invited Freelancers</a>
									</li>
								</ul>
							</nav> -->
							<!-- project list -->
							<div class="my-projects-view">
								<div class="row">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-header">
												<h5 class="card-title">Bookmarked Freelancers</h5>
											</div>
											<div class="card-body">
												<div class="table-responsive table-box">
													<table class="table table-hover table-center mb-0 datatable">
														<thead class="thead-pink">
															<tr>
																<th></th>															
																<th>Job Date</th>
																<th>Location</th>
																<th>Budget</th>
																<th></th>
															</tr>
														</thead>
														<tbody>
														@foreach($jobapply as $jobapply)
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="freelancer-profile" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="{{asset('assets/img/img-02.jpg')}}" alt="User Image">
																		</a>
																		<a href="freelancer-profile"><span class="profile-name">{{ $jobapply->name }}</span><span>{{ $jobapply->jobtype }}</span>
																		
																		</a>
																	</h2>
																</td>
															
																<td>{{ date('d F', strtotime($jobapply->start_date)) }} to {{ date('d F Y', strtotime($jobapply->end_date)) }}</td>
																<td><h2 class="table-avatar"><img src="assets/img/flags/de.png" class="me-2" alt="" height="16"> {{ $jobapply->location }}</h2></td>
																<td><span class="badge bg-warning">{{ $jobapply->budget }}</span></td>															
																<td class="text-end">
																	<div class="table-action">
																		<a data-bs-toggle="modal" href="#bookmark" class="btn btn-primary btn-invite">Send
																		</a>
																	</div>
																</td>
															</tr>
														@endforeach    													
																								
														</tbody>
													</table>
												</div>
											</div>
										</div>	
									</div>
								</div>								
							</div>
							<!-- project list -->
						</div>
					</div>
				</div>
			</div>	
						
			
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
		<!-- The Modal -->
		<div class="modal fade" id="bookmark">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Contact Client</h4>
						<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">		
						<form action="invited-freelancer">
							<div class="modal-info">
								<div class="row">
									<div class="col-md-12">
										<div class="average-bids mb-4">
											<p>Contact <span class="text-highlight">{{ Auth::user()->name }} </span>  about your Project</p>
										</div>
										<div class="form-group">
											<label>Invite title</label>
											<input type="text" name="" class="form-control">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Send a private message</label>
											<textarea name="" class="form-control" rows="5">Hi  John Doe, I noticed your profile and would like to offer you my project. We can discuss any details over chat.</textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Hire for</label>
												<div class="radio">
													<label class="custom_radio me-2">
														<input type="radio" value="fix" checked>
														<span class="checkmark"></span>  Fixed Price
													</label>
													<label class="custom_radio">
														<input type="radio" value="fix">
														<span class="checkmark"></span>  Hourly Rate
													</label>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Hire for</label>
												<div class="radio">
													<label class="custom_radio me-2">
														<input type="radio" value="rate" checked>
														<span class="checkmark"></span>  Fixed Price
													</label>
													<label class="custom_radio">
														<input type="radio" value="rate">
														<span class="checkmark"></span>  Hourly Rate
													</label>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Budget</label>
												<div class="form-row">												
													<div class="col-7">
														<div class="input-group">
															<div class="input-group-prepend bg-pink d-flex">
																 <span class="input-group-text" id="basic-addon1">$</span>
															</div>
															<input type="text" class="form-control" placeholder="20.00">
														</div>
													</div>
													<div class="col-5">
														<select class="form-control select">
															<option value="0">USD</option>
															<option value="0">USD</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									
										<div class="col-md-12">
											<div class="form-group">
												<label>Project</label>
												<select class="form-control select form-select">
													<option value="0">3D Renders and Amazon Product Store images/Video</option>
													<option value="0">3D Renders and Amazon Product Store Video</option>
													<option value="0">3D Renders and Amazon Product Store images</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="submit-section text-end">
									<button type="submit" class="btn btn-primary submit-btn">Send Quotes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
@endsection