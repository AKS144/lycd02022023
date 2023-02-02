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
							<!-- <div class="page-title">
								<h3>Projects</h3>
							</div>
							<nav class="user-tabs mb-4">
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
													<thead class="thead-dark">
														<tr>
															<th>
																Id
															</th>															
															<th>
																Date
															</th>
															<th>
																Client Name
															</th>															
															<th>
																Project Status
															</th>
															<th>
																Final Price
															</th>															 
															<th class="text-end">Action</th>
														</tr>
													</thead>
													<tbody>
														@foreach ($quotes as $key => $contracts)
															<tr>
																<td>
																	{{ $contracts->id ?? '' }}
																</td>
																<td>
																	<!-- {{ $contracts->start_date ?? '' }} - {{ $contracts->end_date ?? '' }} -->
																	<p class="text-danger">{{ date('d', strtotime($contracts->start_date)) }}-{{ date('d/M Y', strtotime($contracts->end_date)) }}</p>
																</td>
																<td>
																	<p>{{ $contracts->user_name }}</p>
																</td>															
																@if($contracts->status == 'Ongoing')
																	<td>
																		<p class="text-success"><i class="fas fa-medal me-2"></i>{{ $contracts->status ?? '' }}</p>
																	</td>
																@elseif($contracts->status == 'Pending')
																	<td>
																		<p class="text-primary"><i class="fas fa-medal me-2"></i>{{ $contracts->status ?? '' }}</p>
																	</td>
																@elseif($contracts->status == 'Completed')
																	<td>
																		<p class="text-info"><i class="fas fa-medal me-2"></i>{{ $contracts->status ?? '' }}</p>
																	</td>
																@elseif($contracts->status == 'Cancelled')
																	<td>
																		<p class="text-danger"><i class="fas fa-medal me-2"></i>{{ $contracts->status ?? '' }}</p>
																	</td>	
																@endif


																@if(empty($contracts->final_price))
																	<td>
																		<p class="text-primary">Pending</p>
																	</td>
																@else	
																	<td>
																	<p class="text-success"><b>₹</b>{{ $contracts->final_price ?? '' }}/-</p>
																	</td>
																@endif
															
																<td class="text-end">																	
																	<a href="javascript:void(0);" style="color:orange;" data-bs-toggle="modal" data-bs-target="#show{{ $contracts->id }}">View</a>															

																			<!-- The Modal -->
																			<div class="modal fade" id="show{{ $contracts->id }}">
																				<div class="modal-dialog modal-dialog-centered modal-xl">
																					<div class="modal-content">
																						<div class="modal-header">
																							<h4 class="modal-title">Projects</h4>
																							<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle"></i></a></span>
																						</div>
																						<!-- <div class="modal-body">		 -->
																							<div class="freelancer-proposals">
																								<div class="project-proposals align-items-center freelancer">
																									<div class="proposals-info">
																										<div class="proposals-detail">
																											<h3 class="proposals-title">{{$contracts->name}}</h3>
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
																												<!-- <a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals </a>
																												<a href="freelancer-view-project-detail" class="projects-btn">View Project</a>
																												<a href="#" class="proposal-delete">Delete Proposal</a> -->
																											</div>
																										</div> 
																									</div>
																									<div class="description-proposal">
																										<!-- <h5 class="desc-title">Description</h5> -->
																										<p>{{ $contracts->description ?? '' }}</p>
																										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus sed cum....<a href="#" class="text-primary font-bold">Readmore</a></p> -->
																									</div>
																								</div>
																							</div>
																						<!-- </div> -->
																					</div>
																				</div>
																			</div>
																			<!-- /The Modal -->	
																			
																			@if($contracts->contract_id !== NULL)
																				<b style="color:grey;">|</b> <a href="{{ route('project.contract', $contracts->contract_id) }}" style="color:orange;" onmouseover="style='text-decoration:underline'" onmouseout="style='text-decoration:none'" class="proposal-button">Contract </a>  
																			@endif

																			@if($contracts->invoice == 1)
																				<b style="color:grey;">|</b> <a href="{{ route('project.view',$contracts->id) }}" style="color:orange;" onmouseover="style='text-decoration:underline'" onmouseout="style='text-decoration:none'" class="proposal-button">Invoice</a>																		
																			@endif
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
						</div>
					</div>
				</div>
			</div>	
        </div>
		<!-- /Main Wrapper -->
@endsection