<?php $page="jobpost";?>
@extends('layout.mainlayout')
@section('content')
<style>
   label.error {
            color: #dc3545;
            font-size: 14px;
        }
</style>

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
										<a class="nav-link " href="{{url('jobpost')}}">List job</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="{{url('jobpost/create')}}">Add Job </a>
									</li>
					</ul>
				</nav>
				<!-- project list -->
				<div class="my-projects-view">
					<div class="row">
						<form class="forms-sample" action="{{ route("jobpost.store") }}"
							method="POST" id="jobpost">
							@csrf
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Add Job</h5>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<label>Job Name</label>
												<input class="form-control" placeholder="Job Name" id="name" name="name"
													{{ old('name', isset($job) ? $job->name : '') }}>

											</div>
											{{-- <div class="col-md-6">
												<label>Location</label>
												<select class="form-select" name="location_id" required>
													<option>Select Location</option>	
													@foreach($locations as $id => $location)
														<option value="{{ $location->name }}">{{ $location->name }}</option>													
													@endforeach
												</select>
											</div>  --}}

											<div class="col-md-6 {{ $errors->has('location_id') ? 'has-error' : '' }}">
												<label for="location">Location</label>
												<select name="location_id" id="location" class="form-select" required>
													<option>Select Location</option>
													@foreach($locations as $id => $locations)
														<option value="{{ $id }}" {{ (isset($job) && $job->location ? $job->location->id : old('location_id')) == $id ? 'selected' : '' }}>{{ $locations ?? '' }}</option>
													@endforeach
												</select>
												@if($errors->has('location_id'))
													<em class="invalid-feedback">
														{{ $errors->first('location_id') }}
													</em>
												@endif
											</div>   

											 <div class="col-md-6 {{ $errors->has('categories') ? 'has-error' : '' }}">
												<label for="">Category</label>
												<select name="category_id" id="" class="form-select" required>
													<option>Select Category</option>	
													@foreach($categories as $id => $categories)
														<option value="{{ $id }}" {{ (isset($job) && $job->categories ? $job->categories->id : old('categories')) == $id ? 'selected' : '' }}>{{ $categories }}</option>
													@endforeach
												</select>
												@if($errors->has('categories'))
													<em class="invalid-feedback">
														{{ $errors->first('categories') }}
													</em>
												@endif
											</div>       
											
											<div class="form-group col-md-6">
												<label>{{ __('Budget Range') }}</label><br>
													<select name="coins" id="" class="form-select" required>
														<option>Select Budget</option>																
														@foreach($rewards as $coins => $reward)
                                    						<option value="{{ $coins }}" {{ (isset($job) && $job->reward ? $job->reward->coins : old('rewards')) == $coins ? 'selected' : '' }}>{{ $reward }}</option>
                                						@endforeach															
													</select>													
											</div>

										</div>
										<div class="row">
											<div class="col-md-6">
												<label>Job Type</label>
													<select name="jobtype" id="" class="form-select" required>														
														<option value="Part-Time">Part-Time</option>	
														<option value="Full-Time">Full-Time</option>				
													</select>													
											</div>
			
											<div class="col-md-6">
												<label>Price Type</label>
													<select name="price_type" id="" class="form-select" required>															
														<option value="Flexible">Flexible</option>	
														<option value="Fixed">Fixed</option>				
													</select>													
											</div>
									    </div>
										<br>
										<div>
	  									    <label for="">
                                                <input type="radio" id="radio_1" name="end_date" value="hide">
                                                One-Day
                                            </label> &nbsp;
                                            <label for="">
                                                <input type="radio" id="radio_2" name="end_date" value="show" checked>
                                                Multiple-day
                                            </label> 	
										<div class="row">
											<div class="col-md-6" id="date1">
												<label>Start Date</label>
												<input type="date" id="start_date" name="start_date" class="form-control"
													value="{{ old('start_date', isset($job) ? $job->start_date : '') }}">
											</div>
											<div class="col-md-6" id="date2">
												<label>End Date</label>
												<input type="date" id="end_date" name="end_date" class="form-control"
													value="{{ old('end_date', isset($job) ? $job->end_date : '') }}">
											</div>
										</div>
										<br>
										
										{{-- <div class="row"> --}}
											
										<div class="row">
											<div class="col-md-6">
												<label>Requirement </label>
												<textarea name="requirements" id="requirements" rows="8" class="form-control"
													value="{{ old('requirements', isset($job) ? $job->requirements : '') }}"></textarea>

											</div>
											<div class="col-md-6">
												<label>Address</label>
												<textarea name="address" id="address" rows="8" class="form-control"
													value="{{ old('address', isset($job) ? $job->address : '') }}"></textarea>

											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-6">
												<button class="btn btn-primary click-btn btn-plan"
													type="submit">Submit</button>
											</div>											
										</div>
									</div>
								</div>
							</div>
						</form>
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
				<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i
							class="far fa-times-circle orange-text"></i></a></span>
			</div>
			<div class="modal-body">
				<form action="invited-freelancer">
					<div class="modal-info">
						<div class="row">
							<div class="col-md-12">
								<div class="average-bids mb-4">
									<p>Contact <span class="text-highlight">John Doe </span> about your Project</p>
								</div>
								<div class="form-group">
									<label>Invite title</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Send a private message</label>
									<textarea class="form-control"
										rows="5">Hi  John Doe, I noticed your profile and would like to offer you my project. We can discuss any details over chat.</textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Hire for</label>
									<div class="radio">
										<label class="custom_radio me-2">
											<input type="radio" value="fix" checked>
											<span class="checkmark"></span> Fixed Price
										</label>
										<label class="custom_radio">
											<input type="radio" value="fix">
											<span class="checkmark"></span> Hourly Rate
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
											<span class="checkmark"></span> Fixed Price
										</label>
										<label class="custom_radio">
											<input type="radio" value="rate">
											<span class="checkmark"></span> Hourly Rate
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


