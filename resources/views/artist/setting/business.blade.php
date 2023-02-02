<?php $page="settings";?>
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
										<a class="nav-link" href="{{ route('basic') }}">Basic info</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{ route('profilepics') }}">Profile Pics</a>
									</li>									

									<!-- location_id is just only to unhide Equipment form any other attribute can also be used-->
									
										<li class="nav-item">
											<a class="nav-link active" href="{{ route('business') }}">Business info</a>
										</li>
									@if(!empty($profile['location_id']))    
										<li class="nav-item">
											<a class="nav-link" href="{{ route('equipments') }}">Equipments</a>
										</li>
									@endif
									</ul>
								</nav>
								<div class="setting-content">
									<div class="card">
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0" style="color:#F79533;">Business info</h3>
										</div>	
										
										{{-- @if ($errors->any())
											<div class="alert alert-danger">
												<ul>
													@foreach ($errors->all() as $message)
														<li>{{ $message }}</li>
													@endforeach
												</ul>
											</div>
										@endif --}}
									
                   						<form role="form" action="{{route('profile.businessinfo',$profile->userid)}}" method="POST" enctype="multipart/form-data" id="business">                   					
											@method('PUT')
                                            @csrf
											<div class="pro-body p-0">
												<div class="form-row pro-pad">															
													
													<div class="col-md-6">
														<label for="location">Location</label>
														<select name="location_id" id="location" value="{{ $profile->location }}" class="form-select" required>
															<option value="">Select Location</option>                                                                                       
															@foreach (App\City::all()->pluck('name', 'id') as $key => $val)
																@if($profile->location_id == $key)
																	<option value="{{ $key }}" selected>{{ $val }}</option>
																@else
																	<option value="{{ $key }}">{{ $val }}</option>
																@endif
															@endforeach	                                                                                       	
														</select>
														@if ($errors->has('location'))
															<span class="text-danger">{{ $errors->first('location') }}</span>
														@endif
													</div> 

													<div class="form-group col-md-6">
														<label for="categories">Categories</label>	
														@foreach($profile->categories as $key => $item)
															<span class="badge badge-info">{{ $item->name }}</span>
														@endforeach	
																									
														<select name="categories[]" id="categories" class="select form-control" multiple="multiple">																	
                                                            @foreach($categories as $id => $categories)
                                                                <option value="{{ $id }}" {{ (in_array($id, old('categories', [])) || isset($profile) && $profile->categories->contains($id)) ? 'selected' : '' }}>{{ $categories }}</option>                        									
                                                            @endforeach															
														</select>
														@if ($errors->has('categories'))
															<span class="text-danger">{{ $errors->first('categories') }}</span>
														@endif             
													</div>      

												</div>													
											</div>
										{{-- </form> --}}
									{{-- </div> --}}

                                    {{-- <div class="card"> --}}
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0" style="color:#F79533;">Bank Account details</h3>
										</div>
										<div class="pro-body">
											<div class="row">
												<div class="form-group col-md-6">	
													<label for="">Account Holder name</label>			
													<input name="acc_holder" id="holder" value="{{ $profile->acc_holder ?? '' }}" type="text" class="form-control">
													@if ($errors->has('acc_holder'))
														<span class="text-danger">{{ $errors->first('acc_holder') }}</span>
													@endif
												</div>		
                                                 <div class="form-group col-md-6">	
													<label for="">Bank name</label>			
													<input name="bank_name" id="bank" value="{{ $profile->bank_name ?? '' }}" type="text" class="form-control">
													@if ($errors->has('acc_holder'))
														<span class="text-danger">{{ $errors->first('acc_holder') }}</span>
													@endif
												</div>		
                                                <div class="form-group col-md-6">	
													<label for="">Account No.</label>			
													<input name="acc_no" id="account" value="{{ $profile->acc_no ?? '' }}" type="text" class="form-control">
													@if ($errors->has('acc_holder'))
														<span class="text-danger">{{ $errors->first('acc_holder') }}</span>
													@endif
												</div>	
                                                <div class="form-group col-md-6">	
													<label for="">IFSC Code</label>			
													<input name="ifsc" id="ifsc" value="{{ $profile->ifsc ?? '' }}" type="text" class="form-control">
													@if ($errors->has('ifsc'))
														<span class="text-danger">{{ $errors->first('ifsc') }}</span>
													@endif
												</div>	
                                                <div class="form-group col-md-6">	
													<label for="">Branch Name</label>			
													<input name="branch" id="branch" value="{{ $profile->branch ?? '' }}" type="text" class="form-control">
													@if ($errors->has('branch'))
														<span class="text-danger">{{ $errors->first('branch') }}</span>
													@endif
												</div>			
												<div class="form-group col-md-6">	
													<label for="gst">GST No.</label>			
													<input name="gst" id="gst" value="{{ $profile->gst ?? '' }}" type="text" class="form-control">
													@if ($errors->has('gst'))
														<span class="text-danger">{{ $errors->first('gst') }}</span>
													@endif
												</div>							
											</div>
										</div>
									{{-- </div> --}}
									
									{{-- <div class="card"> --}}
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0" style="color:#F79533;">Studio Address</h3>
										</div>
										<div class="pro-body">
											<div class="row">
												<div class="form-group col-md-6">	
													<label for="">House/Locality</label>			
													<input name="locality" id="locality" value="{{ $profile->locality ?? '' }}" type="text" class="form-control">
													@if ($errors->has('locality'))
														<span class="text-danger">{{ $errors->first('locality') }}</span>
													@endif
												</div>		
                                                <div class="form-group col-md-6">	
													<label for="">Street</label>			
													<input name="street" id="street" value="{{ $profile->street ?? '' }}" type="text" class="form-control">
													@if ($errors->has('street'))
														<span class="text-danger">{{ $errors->first('street') }}</span>
													@endif
												</div>		
                                                <div class="form-group col-md-5">	
													<label for="">City</label>			
													<input name="city" id="city" value="{{ $profile->city ?? '' }}" type="text" class="form-control">
													@if ($errors->has('city'))
														<span class="text-danger">{{ $errors->first('city') }}</span>
													@endif
												</div>	
                                                 <div class="form-group col-md-4">	
													<label for="">State</label>			
													<input name="state" id="state" value="{{ $profile->state ?? '' }}" type="text" class="form-control">
													@if ($errors->has('state'))
														<span class="text-danger">{{ $errors->first('state') }}</span>
													@endif
												</div>	
                                                <div class="form-group col-md-3">	
													<label for="">zip</label>			
													<input name="zip" id="zip" value="{{ $profile->zip ?? '' }}" type="text" class="form-control">
													@if ($errors->has('zip'))
														<span class="text-danger">{{ $errors->first('zip') }}</span>
													@endif
												</div>	
                                               								
											</div>
										</div>
									{{-- </div> --}}
									
									{{-- <div class="card"> --}}
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0" style="color:#F79533;">Overview/About Yourself</h3>
										</div>
										<div class="pro-body" id="summernote">
											<div class="row">
												<div class="form-group col-md-12" >
													<textarea name="overview" id="overview" class="form-control summernote" rows="5">{{ $profile->overview }}</textarea>
												</div>
											</div>
										</div>
									{{-- </div> --}}

									{{-- <div class="card"> --}}
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0" style="color:#F79533;">Qualification/Experience</h3>
										</div>
										<div class="pro-body">
											<div class="row">
												<div class="form-group col-md-6">
													<label>{{ __('Degree') }}</label><br>
													<input type="text" name="degree" value="{{ $profile->degree }}" id="degree" class="form-control" placeholder="Degree" required><br>
													@if ($errors->has('degree'))
														<span class="help-block">
															<strong>{{ $errors->first('degree') }}</strong>
														</span>
													@endif
												</div>
                                                <div class="form-group col-md-6">
													<label>{{ __('Institute') }}</label><br>
													<input type="text" name="institute" value="{{ $profile->institute }}" id="institute" class="form-control" placeholder="Institute" required><br>
													@if ($errors->has('Institute'))
														<span class="help-block">
															<strong>{{ $errors->first('Institute') }}</strong>
														</span>
													@endif
												</div>
                                                <div class="form-group col-md-6 {{ $errors->has('skills') ? 'has-error' : '' }}">
													<label for="">{{ __('Skills') }}</label>
													<input type="text" name="skills" value="{{ $profile->skills }}" id="skills" class="form-control" placeholder="Skills" required><br>
													@if ($errors->has('skills'))
														<span class="help-block">
															<strong>{{ $errors->first('skills') }}</strong>
														</span>
													@endif
												</div>		
                                                <div class="form-group col-md-6">
													<label>{{ __('Courses') }}</label><br>
                                                    
													<input type="text" name="courses" value="{{ $profile->courses }}" id="courses" class="form-control" placeholder="List any relevant course work you have completed..." required><br>
													@if ($errors->has('courses'))
														<span class="help-block">
															<strong>{{ $errors->first('courses') }}</strong>
														</span>
													@endif
												</div>
																						
												<div class="form-group col-md-6">
													<label>{{ __('Years of Experience') }}</label><br>
													<input type="text" name="exp_yrs" value="{{ $profile->exp_yrs }}" id="expyrs" class="form-control" placeholder="Years of Experience" required><br>
													@if ($errors->has('exp_yrs'))
														<span class="help-block">
															<strong>{{ $errors->first('exp_yrs') }}</strong>
														</span>
													@endif
												</div>
												<div class="form-group col-md-6">
													<label>{{ __('Location worked') }}</label><br>
													<input type="text" name="worked_loc" id="workedloc" value="{{ $profile->worked_loc }}" class="form-control" placeholder="Location worked" required><br>
													@if ($errors->has('worked_loc'))
														<span class="help-block">
															<strong>{{ $errors->first('worked_loc') }}</strong>
														</span>
													@endif
												</div>											
											</div>
										</div>
									{{-- </div> --}}
									{{-- <div class="card"> --}}
										{{-- <div class="pro-post billing-method">
											<p class="mb-0">Add Equipments<a href="javascript:void(0);" class="add-bill float-end"><i class="fa fa-plus-circle orange-text"></i></a></p>
										</div> --}}

										{{-- Equipments --}}
													{{-- <div class="pro-head">
														<h3 class="pro-title without-border mb-0">Equipments</h3>
														<a href="#" class="btn fund-btn skill-add">Add More</a>
													</div>
													<div class="pro-body skill-info">														
														<div class="form-row align-items-center skill-cont">
															<div class="form-group col-md-10">
																<input type="text" class="form-control" value="">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
													</div> --}}


									{{-- </div>	 --}}
									
								
									
									{{-- <div class="card"> --}}
										<div class="text-end">
											<div class="pro-body">
												<button class="btn btn-secondary click-btn btn-plan" type="submit">Cancel</button>
												<button class="btn btn-primary click-btn btn-plan" type="submit">Update</button>
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


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script>
  function loadPreview(input, id) {
    id = id || '#preview_img';
    if (input.files && input.files[0]) {
        var reader = new FileReader();
 
        reader.onload = function (e) {
            $(id)
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
        };
 
        reader.readAsDataURL(input.files[0]);
    }
 }




 $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>

