<?php $page="jobpost";?>
@extends('layout.mainlayout')
@section('content')		


	<!-- Page Content -->
			<div class="content bookmark">					
				<div class="container-fluid">					
					<div class="row">
						
						<!-- sidebar -->
						@include('client.menu')
						<!-- /sidebar -->
						
						<div class="col-xl-9 col-md-8">
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link " href="jobpost">List job</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="addjobpost">Add Job </a>
									</li>
								</ul>
							</nav>
							<!-- project list -->
							<div class="my-projects-view">
								<div class="row">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-header">
												<h5 class="card-title">Add Job</h5>
											</div>
											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
													<label>Job Name</label>

														<input class="form-control" placeholder="job name">

													</div>
													<div class="col-md-6">
													<label>Location</label>
													<select class="form-select" name="location">
													<option>-- Select --</option>
													@foreach($locations as $location)
													<option>{{$location->name}}</option>
													
													@endforeach
												</select>

											


													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-md-6">
														<label>Start Date</label>
														<input type="date" class="form-control" placeholder="">

													</div>
													<div class="col-md-6">
													<label>End Date</label>

													<input type="date" class="form-control" placeholder="">


													</div>
												</div>
												<br>
											
													<div class="row">
													<div class="col-md-6">
														<label>Requirement </label>
														<textarea name="" rows="8" class="form-control"></textarea>

													</div>
													<div class="col-md-6">
													<label>Description</label>
													<textarea name="" rows="8" class="form-control"></textarea>

													</div>
												</div>
												<br>
												

												<div class="row">
													<div class="col-md-6">
													
														<button class="btn btn-primary click-btn btn-plan" type="submit">Submit</button>

													</div>
													<div class="col-md-6">
													
													</div>
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
						<h4 class="modal-title">INVITE FREELANCER</h4>
						<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">		
						<form action="invited-freelancer">
							<div class="modal-info">
								<div class="row">
									<div class="col-md-12">
										<div class="average-bids mb-4">
											<p>Contact <span class="text-highlight">John Doe </span>  about your Project</p>
										</div>
										<div class="form-group">
											<label>Invite title</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Send a private message</label>
											<textarea class="form-control" rows="5">Hi  John Doe, I noticed your profile and would like to offer you my project. We can discuss any details over chat.</textarea>
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
										<div class="col-md-6">
											<div class="form-group">
												<label>Budget</label>
												<div class="form-row">												
													<div class="col-sm-7">
														<div class="input-group form-inline mb-2">
															<div class="input-group-prepend bg-pink d-flex">
																 <span class="input-group-text" id="basic-add">$</span>
															</div>
															<input type="text" class="form-control me-1" placeholder="20.00"> 
															<label class="invited-freelancer-label">/ hr</label>
														</div>
													</div>
													<div class="col-sm-5">
														<select class="form-control select form-select">
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
									<button type="submit" class="btn btn-primary submit-btn">Send Invite</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
@endsection