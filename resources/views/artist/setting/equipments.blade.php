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
				<nav class="user-tabs mb-4">
					<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
						<li class="nav-item">
							<a class="nav-link" href="{{ route('basic') }}">Basic info</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('profilepics') }}">Profile Pics</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('business') }}">Business info</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="{{ route('equipments') }}">Equipments</a>
						</li>
					</ul>
				</nav>
				<div class="setting-content">
					<div class="pro-card">
						<div class="pro-head">
							<h3 class="pro-title without-border mb-0">Equipments You have</h3>
						</div>

						<div class="card-body pb-0">
							<div class="row filter-row">
											{{-- <form action="{{ route('item.store') }}" method="POST">
												@csrf
													<div class="pro-head">
														<h3 class="pro-title without-border mb-0">Equipments</h3>
														<a href="#" class="btn fund-btn skill-add">Add More</a>
													</div>
													<div class="pro-body skill-info">														
														<div class="form-row align-items-center skill-cont">
															<div class="form-group col-md-10">
																<input type="text" id="" name="addmore[]" class="form-control" value="">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
													</div> --}}



								
														{{-- <div id="inputFormRowadditional">
															<div class="row">
																<div class="col-md-6">
																	<h4>Add Equipment</h4><br>
																	<input type="text" name="add_Equipment[]" class="form-control m-input" placeholder="Enter Equipment"
																		autocomplete="off" required>
																</div>
															</div>
															<div id="newadditionalRow"></div>
															<br>
															<button id="addadditional" type="button" class="btn btn-info">+ Add More </button>
															<br>        
															<br>
															<button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
														</div> --}}


													{{-- <div class="mt-4">
													<button type="submit"
														class="btn btn-primary btn-block">Submit</button>
												</div> --}}
											{{-- </form> --}}

								<div class="col-sm-6 col-md-6">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">													
											<a href="javascript:void(0);" class="btn btn-sm btn-primary me-2"
												data-bs-toggle="modal" data-bs-target="#add-equip"><button
													class="btn btn-primary btn-block" type="button">Add
													Equipment</button></a>
										</div>
									</div>
								</div>

							</div>
							<div class="modal fade custom-modal" id="add-equip">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<!-- Modal Header -->
										<div class="modal-header flex-wrap">
											<h4 class="modal-title">Item Add</h4>
											<button type="button" class="close"
												data-bs-dismiss="modal"><span>&times;</span></button>
										</div>

										<!-- Modal body -->
										<div class="modal-body">
											<form action="{{ route("item.store") }}" method="POST" id="equipments2">
												@csrf
												<div class="form-group">
													<label for="name">Name</label>
													<input type="text" id="name" name="name" class="form-control"
														value="" placeholder="Name" required>
													@if($errors->has('name'))
													<em class="invalid-feedback">
														{{ $errors->first('name') }}
													</em>
													@endif
												</div>
												<div class="mt-4">
													<button type="submit"
														class="btn btn-primary btn-block">Submit</button>
												</div>
											</form>
										</div>

									</div>
								</div>
							</div>

							<div class="transaction-table card">
								<div class="card-header">
									<div class="row justify-content-between align-items-center">
										<div class="col">
											<h5 class="card-title">All Equipment</h5>
										</div>
										<div class="col-auto d-flex align-items-center flex-wrap transaction-shortby">
											<!-- <div class="sort-by sort-show">
												<span class="sort-title">Show</span>
												<span class="sortby-fliter">
													<select class="select">
														<option>5</option>
														<option class="sorting">4</option>
														<option class="sorting">3</option>
														<option class="sorting">6</option>
														<option class="sorting">3</option>
													</select>
												</span>
											</div> -->
											<!-- <div class="export-item sort-show sort-by"><i class="fas fa-download"></i> Export</div> -->
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive table-box">
										<table class="table">
											<thead>
												<tr class="thead-pink">

													<th>Name</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody class="table table-hover table-center">
											@if(App\Item::where('user_id',Auth::user()->id)->first())												
												@foreach($items as $items)
												<tr>
													<td>{{$items->name}}</td>
													<td class="text-end">
														<a style="background: gray;" href="javascript:void(0);"
															class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal"
															data-bs-target="#update-items{{$items->id}}"><i
																class="far fa-edit"></i></a>
														<div class="modal fade custom-modal"
															id="update-items{{$items->id}}">
															<div class="modal-dialog modal-dialog-centered">
																<div class="modal-content">

																	<!-- Modal Header -->
																	<div class="modal-header flex-wrap">
																		<h4 class="modal-title">Item Edit</h4>
																		<button type="button" class="close"
																			data-bs-dismiss="modal"><span>&times;</span></button>
																	</div>

																	<!-- Modal body -->
																	<div class="modal-body">
																		<form role="form" action="{{ route('item.update',$items->id) }}" method="POST" id="equipments">
																			@method('PUT')
																			@csrf
																			
																			<div class="form-group">
																				<label for="name">Name</label>
																				<input type="text" id="name" name="name" class="form-control" value="{{ $items->name }}" required>
																				{{-- @if($errors->has('name'))
																				<em class="invalid-feedback">
																					{{ $errors->first('name') }}
																				</em>
																				@endif --}}
																			</div>
																			<div class="mt-4">
																				<button type="submit" class="btn btn-primary btn-block">Submit</button>
																			</div>																		
																		</form>
																	</div>
																</div>
															</div>
														</div>
														<a style=" background:red;" href="javascript:void(0);"
															class="btn btn-sm btn-danger" data-bs-toggle="modal"
															data-bs-target="#delete_items{{$items->id}}"><i
																class="far fa-trash-alt"></i></a>
														<!-- Delete Modal -->
														<div class="modal custom-modal fade"
															id="delete_items{{$items->id}}" role="dialog">
															<div class="modal-dialog modal-dialog-centered">
																<div class="modal-content">
																	<div class="modal-body">
																		<div class="form-header">
																			<form
																				action="{{ route('item.delete', $items->id) }}"
																				method="POST">
																				@csrf
																				@method('DELETE')
																				<div class="text-center">
																					<h3>Delete</h3>
																					<p>Are you sure want to delete?</p>
																				</div>
																				<div class="modal-btn delete-action">
																					<div class="row">
																						<div class="col-6">
																							<button type="submit"
																								style="width: 100%;"
																								href="javascript:void(0);"
																								class="btn btn-primary ">Delete</button>
																						</div>
																						<div class="col-6">
																							<a href="javascript:void(0);"
																								style="width: 100%;"
																								data-bs-dismiss="modal"
																								class="btn btn-primary ">Cancel</a>
																						</div>
																					</div>
																				</div>
																			</form>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- /Delete Modal -->
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
			</div>
		</div>
	</div>
	<!-- /Page Content -->


</div>

@endsection
