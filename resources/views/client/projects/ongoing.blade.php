<?php $page="manage-projects";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Page Content -->			
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						
						<!-- sidebar -->
						@include('client.menu')
						<!-- /sidebar -->
						
						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<h3>Manage Projects</h3>
							</div>
							<nav class="user-tabs project-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
									    <a class="nav-link" href="client-project_list">All Projects </a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="client-project_pending">Pending Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="client-project_ongoing">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="client-project_completed">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="client-project_cancel">Cancelled Projects</a>
									</li>
								</ul>
							</nav>
							
							<!-- Warning -->
							<div class="row">
								<div class="col-12">
									<div class="warning-card">
										<p><i class="fas fa-exclamation-triangle"></i> Pending for admin Approval.</p>
									</div>
								</div>
							</div>
							<!-- /Warning -->
							
							<!-- project list -->
							@if($quotes->count() > 0)
							@foreach($quotes as $quotes)
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-10 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info">
														<span>{{ $quotes->artist_name }}</span>
														<h2></h2>
														<div class="customer-info">
															<ul class="list-details">
																<li>
																	<div class="slot">
																		<p>Price type</p>
																		<h5>Fixed</h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Location</p>
																		<h5><img src="assets/img/en.png" height="13" alt="Lang"> UK</h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Expiry</p>
																		<h5>4 Days Left</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="project-hire-info">
														<div class="content-divider"></div>
														<div class="projects-amount">
															<h3>{{ $quotes->final_price ?? '' }}</h3>
															{{-- <h5>in 12 Days</h5> --}}
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center">
															<a href="project-proposals" class="projects-btn">View Proposals </a>
															<a href="edit-project" class="projects-btn">Edit Project</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 d-flex flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body p-2">
												<div class="prj-proposal-count text-center">
													<span>0</span>
													<h3 class="mb-0">Proposals</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							@endif
							<!-- project list -->
							
					
							<!-- pagination -->
							{{-- <div class="row">
								<div class="col-md-12">
									<ul class="paginations list-pagination">
										<li><a href="#"><i class="fas fa-angle-left"></i> Previous</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#" class="active">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
									</ul>
								</div>
							</div> --}}
							<!-- /pagination -->
							
						</div>
					</div>
				</div>
			</div>	
			
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection