<?php $page="setting";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Page Content -->			
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						
						<!-- sidebar -->
						@include('client.menu')
						<!-- /sidebar -->
						
						<div class="col-xl-9 col-md-8">
							<div class="pro-pos">
								<nav class="user-tabs mb-4">
									<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
										<li class="nav-item">
											<a class="nav-link active" href="profile-settings">Basic Info</a>
										</li>
										{{-- <li class="nav-item">
											<a class="nav-link" href="change-password">Change Password</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="delete-account">Delete Account</a>
										</li> --}}
									</ul>
								</nav>
								<div class="setting-content">
									<div class="card">
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0">Profile Basics </h3>
										</div>										
										<form action="{{route('client.update',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
										@method('PUT')
										@csrf
											<div class="pro-body p-0">
												<div class="form-row pro-pad">
													<div class="form-group col-md-6">
														<label>Name</label>
														<input type="text" name="name" class="form-control" value={{ Auth::user()->name ?? '' }}>
													</div>
													<div class="form-group col-md-6">
														<label>Email Address</label>
														<input type="email" class="form-control" name="email" value={{ Auth::user()->email ?? '' }} readonly>
													</div>
										
													<div class="form-group col-md-6">
														<label>Contact Number</label>
														<input type="text" id="mobile" name="mobile" class="form-control" value={{ Auth::user()->mobile ?? '' }}>
													</div>
													<div class="form-group col-md-6">
														<label>Gender</label>
														<select class="form-control select" name="gender" value={{ Auth::user()->gender ?? '' }}>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
															<option value="Other">Other</option>
														</select>
													</div>													
													
												</div>												
												{{-- <div class="form-row pro-pad pt-0">
													<div class="form-group col-md-6 pro-pic">
														<label>Profile Picture</label>
														<div class="d-flex align-items-center">														
															<div class="upload-images">
																<img src="assets/img/img-02.jpg" alt="Image">
																<a href="javascript:void(0);" class="btn btn-icon btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
															</div>
															<label class="file-upload image-upbtn ms-3">
																Change Image <input type="file" name="">
															</label>
														</div>
														<p>Image size 300*300</p>
													</div>
												</div>												 --}}
											</div>
												<div class="text-end">
											<div class="pro-body">
												<button class="btn btn-secondary click-btn btn-plan" type="submit">Cancel</button>
												<button class="btn btn-primary click-btn btn-plan" type="submit">Update</button>
											</div>
										</div>
										</form>
									</div>
									
									{{-- <div class="card">
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0">Location</h3>
										</div>
										<div class="pro-body">
											<div class="row">
												<div class="form-group col-md-12">
													<label>Address</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>State</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Zipcode</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Country</label>
													<select class="form-control select">
														<option value="0">India</option>
														<option value="1" >China</option>
														<option value="2">Japan</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									 --}}
									{{-- <div class="card">
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0">Overview</h3>
										</div>
										<div class="pro-body">
											<div class="row">
												<div class="form-group col-md-12">
													<textarea class="form-control" rows="5"></textarea>
												</div>
											</div>
										</div>
									</div>
									
									<div class="card">
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0">Social Links</h3>
										</div>
										<div class="pro-body">
											<div class="row">
												<div class="form-group col-md-6">
													<label>Facebook</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Dribble</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Twitter</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>LinkedIn</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Behance</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Behance</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
									</div> --}}
									
									{{-- <div class="card">
										<div class="text-end">
											<div class="pro-body">
												<button class="btn btn-secondary click-btn btn-plan" type="submit">Cancel</button>
												<button class="btn btn-primary click-btn btn-plan" type="submit">Update</button>
											</div>
										</div>
									</div> --}}
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