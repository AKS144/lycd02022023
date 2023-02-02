<?php $page="freelancer-project-proposals";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Page Content -->			
			<div class="content">
				<div class="container-fluid">
					<div class="row">

					<!-- sidebar -->
						@include('artist.sidebar')
					<!-- sidebar -->

						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<h3>Projects</h3>
							</div>
							<!-- <nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
								 <li class="nav-item">
										<a class="nav-link active" href="project_list">All Project</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="project_pending">Pending Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="project_ongoing">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="project_completed">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="project_cancel">Cancelled Projects</a>
									</li>
								</ul>
							</nav>  -->


							<div class="row">
								<div class="col-sm-12">
									<div class="card">
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-center table-hover mb-0 datatable">
													<thead>
														<tr>
															<th>
																Id
															</th>
															
															<th>
																Start Date
															</th>
															<th>
																End Date
															</th>
															 
															<th class="text-end">Actions</th>
														</tr>
													</thead>
													<tbody>
														@foreach ($contracts as $key => $job)
															<tr>
																<td>
																	{{ $job->id ?? '' }}
																</td>
															

																<td>
																	{{ $job->start_date ?? '' }}
																</td>
																
																<td>
																	{{ $job->end_date ?? '' }}
																</td>

															
																<td class="text-end">
																	<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2"
																		data-bs-toggle="modal"
																		data-bs-target="#add-job{{ $job->id }}"><i
																			class="far fa-edit"></i></a>
																	<div class="modal fade custom-modal" id="add-job{{ $job->id }}">
																		<div class="modal-dialog modal-dialog-centered">
																			<div class="modal-content">

																				<!-- Modal Header -->
																				<div class="modal-header flex-wrap">
																					<h4 class="modal-title">Edit Package</h4>
																					<button type="button" class="close"
																						data-bs-dismiss="modal"><span>&times;</span></button>
																				</div>

																				<!-- Modal body -->
																				<div class="modal-body">       
																						<form action="{{ route('admin.jobs.update', $job->id) }}" method="POST" id="jobedit">
																						@csrf
																						@method('put')

																						<div class="row filter-row">
																							<div class="col-sm-6 col-md-6">
																								<div class="form-group">
																									<label for="name">Name</label>
																									<input type="text" name="name" id="name" class="form-control" value="{{ $job->name }}" required>
																									@if ($errors->has('name'))
																										<span class="text-danger">{{ $errors->first('name') }}</span>
																									@endif
																								</div>
																							
																								
																								<div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
																									<label for="location">Location</label>
																									<select name="location_id" id="location" value="{{ $job->location }}" class="form-select" required>
																										<option>Select Location</option>                                                                                       
																										@foreach (App\City::all()->pluck('name', 'id') as $key => $val)
																											@if($job->location_id == $key)
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


																								<div class="form-group">
																									<label>Address</label>
																										<textarea name="address" id="address" class="form-control" col="8" required>{{ $job->address }}	                                           			
																										</textarea>													
																								</div>

																							</div>
																							
																							<div class="col-sm-6 col-md-6">
																							<!-- <input class="form-control" type="radio" name="type" value="Single"> -->
																							<!-- <input class="form-control" type="radio" name="type" value="Multiple"> -->
																							<div>
																									<label for="">
																										<input type="radio" id="radio_3" name="start_date" value="" checked>
																										One-Day
																									</label> &nbsp;
																									<label for="">
																										<input type="radio" id="radio_4" name="start_date" value="">
																										Multiple-day
																									</label> 
																								</div>
																								<div class="form-group">
																									<label for="star_date">Start-Date</label>
																									<input type="date" name="start_date" id="date3" class="form-control" value="{{ $job->start_date }}" required>
																									@if ($errors->has('Start-Date'))
																										<em class="invalid-feedback">
																											{{ $errors->first('Start-Date') }}
																										</em>
																									@endif
																								</div>

																								<div class="form-group" id="input2">
																									<label for="end_date">End-Date</label>
																									<input type="date" name="end_date" id="date4" class="form-control" value="{{ $job->end_date ?? ''}}" required>
																									@if ($errors->has('End-Date'))
																										<em class="invalid-feedback">
																											{{ $errors->first('End-Date') }}
																										</em>
																									@endif
																								</div>

																								<div class="form-group">
																									<label>Job Type</label>
																										<select name="jobtype" id="jobtype" class="form-select" required>
																											<option >Select Job Type</option>	
																											<option {{ $job->jobtype == 'Part-Time' ? 'selected' : '' }} value="Part-Time">Part-Time</option>	
																											<option {{ $job->jobtype == 'Full-Time' ? 'selected' : '' }} value="Full-Time">Full-Time</option>				
																										</select>		

																								</div>

																								<div class="form-group">
																									<label>Price Type</label>
																										<select name="price_type" id="price_type" class="form-select" required>
																											<option>Select Price Type</option>	
																											<option {{ $job->price_type == 'Flexible' ? 'selected' : '' }} value="Flexible">Flexible</option>	
																											<option {{ $job->price_type == 'Fixed' ? 'selected' : '' }} value="Fixed">Fixed</option>				
																										</select>													
																								</div>


																								<div class="form-group">
																									<label>Requirements</label>
																										<textarea name="requirements" id="requirements" class="form-control" col="8" required>{{old('requirements', $job->requirements) }}
																										</textarea>													
																								</div>

																								<div class="form-group">
																									<button class="btn btn-primary btn-block" type="submit">Submit</button>
																								</div>
																							</div>
																						</div>
																					</form>

																				</div>

																			</div>
																		</div>
																	</div>
																	<a href="javascript:void(0);" class="btn btn-sm btn-danger"
																		data-bs-toggle="modal"
																		data-bs-target="#delete_job{{ $job->id }}"><i
																			class="far fa-trash-alt"></i></a> 
																	<!-- Delete Modal -->
																	<div class="modal custom-modal fade"
																		id="delete_job{{ $job->id }}" role="dialog">
																		<div class="modal-dialog modal-dialog-centered">
																			<div class="modal-content">
																				<div class="modal-body">
																					<div class="form-header">
																						<form
																							action="{{ route('admin.jobs.destroy', $job->id) }}"
																							method="POST">
																							@csrf
																							@method('DELETE')

																							<h3>Delete</h3>
																							<p>Are you sure want to delete?</p>
																					</div>
																					<div class="modal-btn delete-action">
																						<div class="row">
																							<div class="col-6">
																								<button type="submit" style="width: 100%;"
																									href="javascript:void(0);"
																									class="btn btn-primary continue-btn">Delete</button>
																							</div>
																							<div class="col-6">
																								<a href="javascript:void(0);"
																									data-bs-dismiss="modal"
																									class="btn btn-primary cancel-btn">Cancel</a>
																							</div>
																						</div>
																					</div>
																					</form>
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- /Delete Modal -->
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
							
							<!-- Proposals list -->
							<div class="proposals-section">
								<h3 class="page-subtitle">All Projects</h3>
								@foreach($contracts as $contract)
								<!-- Proposals -->
								<div class="freelancer-proposals">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposals-info">
											<div class="proposals-detail">
												<h3 class="proposals-title">{{$contract->name}}</h3>
												<div class="proposals-content">
													<div class="proposal-img">
														<div class="text-md-center">
															<img src="assets/img/developer/developer-01.jpg" alt="" class="img-fluid">
															<h4>John Doe</h4>
															<span class="info-btn">client</span>
														</div>
													</div>
													<div class="proposal-client">
														<h4 class="title-info">Client Price</h4>
														<h2 class="client-price">$599.00</h2>
														<span class="price-type">( FIXED )</span>
													</div>
													<div class="proposal-type">
														<h4 class="title-info">Job Type</h4>
														<h3>Hourly</h3>
													</div>
												</div>
											</div>
											<div class="project-hire-info">
												<div class="content-divider-1"></div>
												<div class="projects-amount">
													<p>Your Price</p>
													<h3>$500.00</h3>
													<h5>in 12 Days</h5>
												</div>
												<div class="content-divider-1"></div>
												<div class="projects-action text-center">
													<a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals </a>
													<a href="freelancer-view-project-detail" class="projects-btn">View Project</a>
													<a href="#" class="proposal-delete">Delete Proposal</a>
												</div>
											</div> 
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Description</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus sed cum....<a href="#" class="text-primary font-bold">Readmore</a></p>
										</div>
									</div>
								</div>
								<!-- Proposals --> 
								@endforeach
								
								
								
						
								
							</div>
							<!-- /Proposals list -->
							
							<!-- pagination -->
							<div class="row">
								<div class="col-md-12">
									<ul class="paginations freelancer">
										<li><a href="#"> <i class="fas fa-angle-left"></i> Previous</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#" class="active">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- /pagination -->
							
						</div>
					</div>
				</div>
			</div>	
			
			<!-- /Page Content -->

			<!-- The Modal -->
			<div class="modal fade" id="file">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">EDIT PROPOSAL</h4>
							<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle"></i></a></span>
						</div>
						<div class="modal-body">		
							<form action="#">
								<div class="modal-info">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Cost</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Days</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control summernote" rows="5"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="submit-section text-end">
									<button type="submit" class="btn btn-primary submit-btn">Save Proposal</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
		

        </div>
		<!-- /Main Wrapper -->
@endsection