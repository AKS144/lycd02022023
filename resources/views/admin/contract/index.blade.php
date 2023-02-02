<?php $page = "users"; ?>
@extends('layout.mainlayout_admin')
@section('content')


<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Contract</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index_admin">Home</a></li>

						<li class="breadcrumb-item active">Contract</li>
					</ul>
				</div>
				{{-- <div class="col-auto">
					<a href="#" class="btn add-button me-2" data-bs-toggle="modal" data-bs-target="#add-category">
						<i class="fas fa-plus"></i>
					</a>
					<a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
						<i class="fas fa-filter"></i>
					</a>
				</div> --}}
			</div>
		</div>
		<!-- /Page Header -->


		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-center table-hover mb-0 datatable">
								<thead>
									<tr>
										<th>
											ID
										</th>
										<th>
											Artist
										</th>
										<th>
											Client
										</th>
									
										<th>
											Job Date
										</th>

										<th>
											Job End Date
										</th>
										<th>
											Project Budget
										</th>
										<th>
											Project Status
										</th>
										<th>
											Client Feedback<br />
											(Completed/Not-Completed)
										</th>										
										<th class="text-end">Actions</th>
									</tr>
								</thead>
								<tbody>
									@if($contract->count() > 0)										
											@foreach($contract as $key => $contract)	
											@if($contract->client_feedback == 'No')										
											<tr style="background-color: #fae1e1;">
											@else
											<tr>
											@endif	
												<td>{{ $contract->id ?? '' }}</td>
												<td>{{ $contract->artist_name ?? '' }}</td>
												<td>{{ $contract->user_name ?? '' }}</td>									
												<td>{{ $contract->start_date ?? '' }}</td>
												<td>{{ $contract->end_date ?? '' }}</td>
												<td>₹{{ $contract->projected_budget ?? '' }}/-</td>
												
												@if($contract->status == 'Ongoing')
													<td>
														<p class="text-success"><i class="fas fa-medal me-2"></i>{{ $contract->status ?? '' }}</p>
													</td>
												@elseif($contract->status == 'Pending')
													<td>
														<p class="text-primary"><i class="fas fa-medal me-2"></i>{{ $contract->status ?? '' }}</p>
													</td>
												@elseif($contract->status == 'Completed')
													<td>
														<p class="text-info"><i class="fas fa-medal me-2"></i>{{ $contract->status ?? '' }}</p>
													</td>
												@elseif($contract->status == 'Cancelled')
													<td>
														<p class="text-danger"><i class="fas fa-medal me-2"></i>{{ $contract->status ?? '' }}</p>
													</td>	
												@endif
												<td>
													@if($contract->client_reason == '')
														<p class="text-info">Pending</p>
													@else
														{{ $contract->client_reason ?? '' }}
													@endif
												</td>

												<td class="text-end">								
													<a href="javascript:void(0);"  class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#contract{{ $contract->id }}"><i class="far fa-eye"></i></a>

																<div class="modal fade custom-modal" id="contract{{ $contract->id }}">
																	<div class="modal-dialog modal-dialog-centered">
																		<div class="modal-content">

																		<!-- Modal Header -->
																		<div class="modal-header flex-wrap">
																			<h4 class="modal-title">Contract</h4>
																			<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
																		</div>

																		<!-- Modal body -->
																		<div class="modal-body">
																			<form >
																				<div class="form-group">                                                                      
																					<span class="text-highlight">Artist Name</span>	
																					<input type="text" class="form-control" value="{{ $contract->artist_name ?? '' }}" readonly>
																				</div>
																				<div class="form-group">
																					<span class="text-highlight">Client Name</span>
																					<input type="text" class="form-control" value="{{ $contract->user_name ?? '' }}" readonly>
																				</div>
																				<div class="form-group">
																					<span class="text-highlight">Job date</span>	
																					<input type="text" class="form-control" value="{{ $contract->start_date ?? '' }}" readonly>                                                                        	
																				</div>
																				<div class="form-group">
																					<span class="text-highlight">End date</span>	
																					<input type="text" class="form-control" value="{{ $contract->end_date ?? '' }}" readonly>
																				</div>
																				<div class="form-group">
																					<span class="text-highlight">Project details</span>	
																					<input type="text" class="form-control" value="{{ $contract->project_details ?? '' }}" readonly>                                                                        	
																				</div>

																				<div class="form-group">
																					<span class="text-highlight">Address</span>	
																					<input type="text" class="form-control" value="{{ $contract->address ?? '' }}" readonly>                                                                        	
																				</div>
																				<div class="form-group">
																					<span class="text-highlight">Projected budget</span>	
																					<input type="text" class="form-control" value="{{ $contract->projected_budget ?? '' }}" readonly>                                                                        
																				</div>
																				<div class="form-group">
																					<span class="text-highlight">Project Cost</span>	
																					<input type="text" class="form-control" value="{{ $contract->final_price ?? '' }}" readonly>                                                                        	
																				</div>																		
																			</form>
																		</div>
																	</div>
																</div>
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
</div>
<!-- /Page Wrapper -->
</div>
<!-- /Main Wrapper -->

@endsection

