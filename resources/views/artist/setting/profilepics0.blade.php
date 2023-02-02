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
								<a class="nav-link" href="{{ route('basic') }}">Basic info</a>
							</li>
                            <li class="nav-item">
                                    <a class="nav-link active" href="#">Profile Pics</a>
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
						</ul>
					</nav>
					    <div class="setting-content">
						    <div class="card">
                                <!-- <div class="pro-head">
                                    <h3 class="pro-title without-border mb-0">Profile Basics </h3>
                                </div> -->
							
                                <form role="form" action="{{route('profile.profilepics',$profile->userid)}}" method="POST" enctype="multipart/form-data" id="">
                                    @method('PUT')
                                    @csrf
									<div class="pro-body p-0">
										<div class="form-row pro-pad">
											<div class="form-group col-md-6 pro-pic">
												<!-- <label>Profile Picture</label> -->
												<div class="d-flex align-items-center">													
													<div class="upload-images">
														@if(!empty($profile['profile_img']))
														<img style="margin-left: 34px; width:400px; height:400px" id="preview_img" src="{{ asset('profile_img/'."$profile->profile_img") }}"  id="profile_img">
														@elseif(empty($profile['profile_img']))
														<img style="margin-left: 34px;" id="preview_img">
														@endif
														<label style="margin-center;" class="file-upload image-upbtn ms-3">Upload<input type="file" name="profile_img" onchange="loadPreview(this);" class="form-control image"><br>
														@if ($errors->has('profile_img'))
														<span class="help-block">
															<strong>{{ $errors->first('profile_img') }}</strong>
														</span>
														@endif
													</label>														
													</div>
												</div>					
													<!-- <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
																	<button type="submit" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
																	<button type="submit" class="btn btn-outline-primary" id="crop">Crop</button>
																</div>
															</div>
														</div>
													</div> -->
											</div>
										</div>
									</div>
						        </div>
					    </div>
		
                        <div class="text-end">
                            <div class="pro-body">
                                <!-- <button class="btn btn-secondary click-btn btn-plan" type="submit">Cancel</button>
                                <button class="btn btn-primary click-btn btn-plan" type="submit">Update</button> -->
								<button type="submit" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-outline-primary">Update</button>
                            </div>
                        </div>
					</form>






					<div class="container">
						<div class="row">
						<div class="col-xs-12">
							<label class="cabinet center-block">
								<figure>
									<img src="" class="gambar img-responsive img-thumbnail" id="item-img-output" />
								  <figcaption><i class="fa fa-camera"></i></figcaption>
							</figure>
								<input type="file" class="item-img file center-block" name="file_photo"/>
							</label>
						</div>
					</div>
					</div>
					
					<!-- <div class="modal fade" id="cropImagePop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <h4 class="modal-title" id="myModalLabel">
								 </h4>
							</div>
							<div class="modal-body">
							<div id="upload-demo" class="center-block"></div>
										  </div>
												 <div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<button type="button" id="cropImageBtn" class="btn btn-primary">Crop</button>
												</div>
												</div>
											  </div>
					</div> -->




                
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



{{-- <script>
//preview image
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



</script> --}}