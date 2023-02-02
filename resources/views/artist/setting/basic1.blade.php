<?php $page = "settings"; ?>
@extends('layout.mainlayout')
@section('content')
<style>
	label.error {
		color: #ff0000;
		font-size: 14px;
	}
</style>

<!-- Page Content -->
<div class="content">
	<div class="container-fluid">
		<div class="row">

			<!-- sidebar -->
			@include('artist.sidebar')

			<!-- /sidebar -->

			<div class="col-xl-9 col-md-8">
				<div class="pro-pos">
					<nav class="user-tabs mb-4">
						<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
							<li class="nav-item">
								<a class="nav-link active" href="#">Basic info</a>
							</li>
							@if(!empty($profile['userid']))
							<li class="nav-item">
								<a class="nav-link" href="profilepics">Profile Pics</a>
							</li>
								@if(!empty($profile['profile_img']))
								<li class="nav-item">
									<a class="nav-link" href="business">Business info</a>
								</li>
									@if(!empty($profile['location_id']))
									<li class="nav-item">
										<a class="nav-link" href="equipments">Equipments</a>
									</li>
									@endif
								@endif	
							@endif
						</ul>
					</nav>
					<div class="setting-content">
						<div class="card">
							<!-- <div class="pro-head">
								<h3 class="pro-title without-border mb-0">Profile Basics </h3>
							</div> -->
							{{-- <form action="user-account-details"> --}}
							<form role="form" @if(empty($profile['userid'])) action="{{route('profile.store')}}" @else action="{{route('profile.store',$profile['userid'])}}" @endif method="POST" enctype="multipart/form-data" id="basic">
								{{-- @if(empty($profile['userid']))
										<form role="form" action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data">
								@else
								<form role="form" action="{{route('profile.store',$profile['userid'])}}" method="POST" enctype="multipart/form-data">
									@endif --}}
									@csrf
									<div class="pro-body p-0">
										<div class="form-row pro-pad">

											<input type="hidden" name="userid" class="form-control" value="{{ Auth::user()->id }}">

											<div class="form-group col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}">
												<label>Name</label>
												<input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ Auth::user()->name }}">
												@if ($errors->has('name'))
												<span class="help-block">
													<strong>{{ $errors->first('name') }}</strong>
												</span>
												@endif
											</div>

											<div class="form-group col-md-6">
												<label>{{ __('Email Address') }}</label>
												<input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ Auth::user()->email }}"><br>
												@if ($errors->has('email'))
												<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
												@endif
											</div>

											<div class="form-group col-md-6">
												<label>{{ __('Mobile') }}</label>
												<input type="text" name="mobile" class="form-control" id="phone" placeholder="Phone" value="{{ Auth::user()->mobile }}"><br>
												<!-- @if ($errors->has('mobile'))
												<span class="help-block">
													<strong>{{ $errors->first('mobile') }}</strong>
												</span>
												@endif -->
											</div>

											<div class="form-group col-md-6 {{ $errors->has('dob') ? 'has-error' : '' }}">
												<label>{{ __('Date of Birth') }}</label>
												<input type="date" value="{{ $profile->dob ?? '' }}" name="dob" class="form-control" id="dob">
											</div>



											<div class="form-group col-md-6 {{ $errors->has('id_type') ? 'has-error' : '' }}">
												<label>{{ __('ID Type') }}</label>
												@if(!empty($profile['id_type']))
												<select class="form-control" name="id_type" value="{{ $profile->id_type ?? '' }}">
													<option value="">Select option</option>
													<option {{ $profile->id_type == 'PAN Card' ? 'selected' : ''}} value="PAN Card">{{ __('PAN Card') }}</option>
													<option {{ $profile->id_type == 'Aadhar Card' ? 'selected' : ''}} value="Aadhar Card">{{ __('Aadhar Card') }}</option>
													<option {{ $profile->id_type == 'Passport' ? 'selected' : ''}} value="Passport">{{ __('Passport') }}</option>
													<option {{ $profile->id_type == 'Voter Card' ? 'selected' : ''}} value="Voter Card">{{ __('Voter Card') }}</option>
												</select>
												@else
												<select class="form-control" name="id_type" id="id_type" value="{{ $profile->id_type ?? '' }}">
													<option value="">Select option</option>
													<option value="PAN">{{ __('PAN Card') }}</option>
													<option value="Aadhar">{{ __('Aadhar Card') }}</option>
													<option value="Passport">{{ __('Passport') }}</option>
													<option value="Voter">{{ __('Voter Card') }}</option>
												</select>
												@endif
											</div>

										
										
											<div class="form-group col-md-6">	
												<div class="PAN box">
													<div {{ $errors->has('pan') ? 'has-error' : '' }}">
														<label for="">{{ __('PAN Card') }}</label>
														<input type="text" name="id_no" value="{{ $profile->id_no ?? '' }}" class="form-control" id="pan" placeholder="PAN Number">
														@if ($errors->has('id_no'))
														<span class="help-block">
															<strong>{{ $errors->first('pan') }}</strong>
														</span>
														@endif
													</div>
												</div>
												<div class="Aadhar box">
													<div {{ $errors->has('aadhar') ? 'has-error' : '' }}">
														<label for="">{{ __('Aadhar Card') }}</label>
														<input type="text" name="id_no" value="{{ $profile->id_no ?? '' }}" class="form-control" id="aadhar" placeholder="Aadhar Number">
														@if ($errors->has('id_no'))
														<span class="help-block">
															<strong>{{ $errors->first('aadhar') }}</strong>
														</span>
														@endif
													</div>
												</div>
												<div class="Passport box">
													<div {{ $errors->has('passport') ? 'has-error' : '' }}">
														<label for="">{{ __('Passport') }}</label>
														<input type="text" name="id_no" value="{{ $profile->id_no ?? '' }}" class="form-control" id="passport" placeholder="Passport Number">
														@if ($errors->has('id_no'))
														<span class="help-block">
															<strong>{{ $errors->first('passport') }}</strong>
														</span>
														@endif
													</div>
												</div>
												<div class="Voter box">
													<div {{ $errors->has('voter') ? 'has-error' : '' }}">
														<label for="">{{ __('Voter Card') }}</label>
														<input type="text" name="id_no" value="{{ $profile->id_no ?? '' }}" class="form-control" id="voter" placeholder="Voter Number">
														@if ($errors->has('id_no'))
														<span class="help-block">
															<strong>{{ $errors->first('voter') }}</strong>
														</span>
														@endif
													</div>
												</div>
											</div>											
										
											
											

											<div class="form-group col-md-6">
												<label>{{ __('Gender') }}</label><br>
												@if(!empty($profile['gender']))
												<select class="form-control select" name="gender">
													<option value="">Select option</option>
													<option {{ $profile->gender == 'Male' ? 'selected' : '' }} value="Male">Male</option>
													<option {{ $profile->gender == 'Female' ? 'selected' : '' }} value="Female">Female</option>
													<option {{ $profile->gender == 'Others' ? 'selected' : '' }} value="Others">Others</option>
												</select>
												@else
												<select class="form-control select" name="gender" id="gender">
													<option value="">Select option</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
													<option value="Others">Others</option>
												</select>
												@endif
												@if ($errors->has('gender'))
												<span class="help-block">
													<strong>{{ $errors->first('gender') }}</strong>
												</span>
												@endif
											</div>


											<!-- <div class="form-group col-md-6 pro-pic">
												<label>Profile Picture</label>
												<div class="d-flex align-items-center">
													<label class="file-upload image-upbtn ms-3">
														Upload Image <input type="file" name="profile_img" onchange="loadPreview(this);" class="form-control"><br>
														@if ($errors->has('profile_img'))
														<span class="help-block">
															<strong>{{ $errors->first('profile_img') }}</strong>
														</span>
														@endif
													</label>
													<div class="upload-images">

														@if(!empty($profile['profile_img']))
														<img style="margin-left: 34px;" id="preview_img" src="{{ asset('profile_img/'."$profile->profile_img") }}" width="200" height="150" id="profile_img">
														@elseif(empty($profile['profile_img']))
														<img style="margin-left: 34px;" id="preview_img">
														@endif
														{{-- <img src="assets/img/img-02.jpg" alt="Image">
																<a href="javascript:void(0);" class="btn btn-icon btn-danger btn-sm"><i class="far fa-trash-alt"></i></a> --}}
													</div>
												</div>
																							
													<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
														<div class="modal-dialog modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="modalLabel">Image upload</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="img-container">
																		<div class="row">
																			<div class="col-md-8">
																				<img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
																			</div>
																			<div class="col-md-4">
																				<div class="preview"></div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
																	<button type="button" class="btn btn-primary" id="crop">Crop</button>
																</div>
															</div>
														</div>
													</div>
											</div> -->
										</div>
									</div>
						</div>
					</div>

					<div class="text-end">
						<div class="pro-body">
							<button class="btn btn-secondary click-btn btn-plan" style="padding: 8px 28px; border-radius: 5px;" type="submit">Cancel</button>
							<button class="btn btn-primary click-btn btn-plan" style="padding: 8px 28px; border-radius: 5px;" type="submit">Update</button>
						</div>
					</div>
					</form>
				</div>
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


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
<script>
	function loadPreview(input, id) {
		id = id || '#preview_img';
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$(id)
					.attr('src', e.target.result)
					.width(200)
					.height(150);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>