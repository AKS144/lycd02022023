<?php $page="client_wishlist";?>
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
									<h5 class="card-title">Bookmarked Artist</h5>
								</div>
								<div class="card-body">
									<div class="table-responsive table-box">
										<table class="table table-hover table-center mb-0 datatable">
											<thead class="thead-pink">
												<tr>
													<th>Freelancer Detail</th>

													<th>Location</th>
													<!-- <th>Remove</th> -->
													<th>Action</th>

												</tr>
											</thead>
											<tbody>
												@if(Auth::user()->wishlist->count())

													@foreach($wishlists as $wishlist)
														<tr>
															<td>
																<h2 class="table-avatar">
																	{{-- <a href="freelancer-profile"
																		class="avatar avatar-md tab-imgcircle me-2">
																		<img class="avatar-img rounded-circle"
																			src="{{asset('img/artist.jpg')}}"
																			alt="User Image">
																	</a> --}}
																	<a href="freelancer-profile"><span
																			class="profile-name">{{ $wishlist->id }}{{ $wishlist->profile->name }}</span><span>Software
																			Developer</span>
																		{{-- <span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span> --}}
																	</a>
																</h2>
															</td>

															<td>
																<h2 class="table-avatar"><img
																		src="assets/img/flags/de.png" class="me-2"
																		alt="" height="16"> Germany</h2>
															</td>
															<!-- <td><a href="javascript:void(0);" class="fav"><i
																		class="fas fa-heart filled"></i></a></td> -->
															<td class="text-end">
																<div class="table-action text-center">
																<form action="{{ route('wishlist.destroy',$wishlist->id) }}" method="post">
																	@method('delete')
																	@csrf                          
																		<button type="submit"class="btn btn-primary btn-invite">Remove</button> 
																		<a data-bs-toggle="modal" href="#bookmark"
																		class="btn btn-primary btn-invite">Hire
																	</a>                           
																	</form>
																	
																	
																</div>
															</td>
														</tr>
													@endforeach
												@endif

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