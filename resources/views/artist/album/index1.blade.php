<?php $page="albums";?>
@extends('layout.mainlayout')
@section('content')		



<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						@include('artist.sidebar')	
						<div class="col-xl-9 col-md-8">
							
							<div class="portfolio-item">
								<div class="pro-head p-0 pb-4">
									<h3 class="mb-0">Genre</h3>
									<a class="btn btn-primary back-btn br-0" style="border-radius:7px !important;" data-bs-toggle="modal" href="#portfolio">Add</a>    							
								</div>
                              
								<div class="pro-content pt-4 pb-4">
									<div class="row">
										@if($albums->count() > 0)
											@foreach($albums as $album)
												<div class="col-sm-6 col-lg-4">
													<div class="project-widget">
														<div class="portfolio-img">
															<img class="img-fluid" alt="User Image" src="{{asset('cover_image/'.$album->cover_image)}}" style="height:250px;width:100%;">
															<div class="portfolio-live">
															<div class="portfolio-content">
																<!-- <a data-bs-toggle="modal" href="#portfolio-edit{{$album->id}}" class="port-icon"><i class="fas fa-pen"></i></a>																 -->
																<!-- <a href="#" class="port-icon"><i class="fas fa-trash-alt"></i></a> -->
																<a href="{{url('/albums/'.$album->id)}}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<b>Add Pics</b></a>

															</div>
															</div>
														</div>
														<div class="portfolio-detail " style="text-align: left;">
														<!-- <a href="albums/{{$album->id}}"><h3 class="pro-name">{{$album->name}}</h3></a>  -->
													<!-- <br> -->
														<a href="albums/{{$album->id}}">{{$album->name}}</a> 
														<span style="float:right; color:black;">&nbsp;&nbsp;<a data-bs-toggle="modal" href="#portfolio-edit{{$album->id}}" ><i class="fas fa-pen"></i> </a> 
														&nbsp;&nbsp;&nbsp;&nbsp; 														
														<a href="{{url('/albums/'.$album->id)}}"><i class="fa fa-plus" aria-hidden="true"></i>  </a>
														</span>
														</div>
													</div>
												</div>
												<div class="modal fade" id="portfolio-edit{{$album->id}}">
													<div class="modal-dialog modal-dialog-centered modal-lg">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title">Edit Album</h4>
																<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
															</div>
															<div class="modal-body">
																<div class="port-title">
															
																</div>						
																<form  method="POST" action="{{ route('albums.update') }}" enctype="multipart/form-data">
																		@csrf
																		@method('post')
																	<div class="modal-info">
																		<div class="row">
																			<div class="col-md-12">
																				<div class="form-group">
																					<label>Title</label>
																					<input type="text" name="name" class="form-control" value="{{$album->name}}">
																					<input type="hidden" name="id" class="form-control" value="{{$album->id}}">
																				</div>

																				<div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }}">
																					<label for="categories">Categories</label>
																					<select name="category" id="categories" class="form-select" required>
																					<option>Select Categories</option> 
																					@php 
																						$albs = App\Album::where('user_id','=',Auth::user()->id)->pluck('category');																					
																					@endphp 
																						@foreach (App\Category::all()->pluck('name', 'id') as $key => $val)
																							@if($album->category == $key)
																								<option value="{{ $key }}" selected>{{ $val }}</option>
																							@else
																								<option value="{{ $key }}">{{ $val }}</option>
																							@endif
																						@endforeach	
																					</select>                                  
																					@if ($errors->has('categories'))
																						<span class="text-danger">{{ $errors->first('categories') }}</span>
																					@endif       
																				</div>

																				<div class="form-group">
																					<img src="{{asset('cover_image/'.$album->cover_image)}}" width="200">                                                                   
																				</div>
																			
																				<input class="form-control" type="file" name="cover_image">
																			</div>
																		</div>
																	</div>
																	<div class="submit-section text-right">
																	
																	<button type="submit" class="btn btn-primary submit-btn">Update</button>

																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											@endforeach
										@endif										
									</div>						
								</div>														
							</div>		
							<div>{{ $albums->links('vendor.pagination.custom') }}</div> 
								<!-- <div class="col-md-12">
									<ul class="paginations">
										<li><a href="#"> <i class="fas fa-angle-left"></i> Previous</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#" class="active">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li> 
										<li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
									</ul>
								</div>		 -->
						</div>		
					</div>
				</div>
			</div>	
							
			<!-- /Page Content -->

        </div>
		<!-- /Main Wrapper -->
	
	<!-- The Modal -->
		<div class="modal fade" id="portfolio">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4>Add Portfolio</h4>
						<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">
						<div class="port-title">
						
						</div>	
						@if($error == '' )					
						<form method="POST" action="{{ route('albums.store') }}" enctype="multipart/form-data">
                         @csrf
                                                                   
							<div class="modal-info">
								<div class="row">
									<div class="col-md-12">

								
										<div class="form-group">
                                        <label for="name">Name*</label>
											<input type="text" id="name" name="name" class="form-control" value="" required>
										</div>

										<div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }}">
											<label for="categories">Categories</label>
											<select name="category" id="categories" class="form-select" required>
											<option>Select Categories</option>      
											@foreach($categories as $id => $categories)												
												<option value="{{ $id }}" {{ (isset($album) && $album->categories ? $job->categories->id : old('categories')) == $id ? 'selected' : '' }}>{{ $categories }}</option>
											@endforeach
											</select>                                  
											@if ($errors->has('categories'))
												<span class="text-danger">{{ $errors->first('categories') }}</span>
											@endif       
										</div>

										<div class="form-group">
                                        <label>Upload Cover Image</label>
										
										</div>
										<label class="br-0 file-upload image-upbtn">
											upload Files  <input type="file" class="form-control" onchange="loadPreview(this);" name="cover_image">
										</label>
										<div class="upload-images">	
											<img style="margin-left: 34px;" id="preview_img">  
										</div>
									</div>
								</div>
							</div>
							<div class="submit-section text-right">
								<a data-bs-dismiss="modal" class="btn btn-primary black-btn submit-btn">Cancel</a>
								<button type="submit" class="btn btn-primary submit-btn">Submit</button>
							</div>
						</form>
						@else
						<p style="color:red;" class="text-center">{{ $error ?? '' }}</p>
						@endif
					</div>
				</div>
			</div>
		</div>
		
		<!-- The Modal -->
	
@if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
<script>
$(function() {
    $('#myModal').modal('show');
});
</script>
@endif
@endsection

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
  </script>
  