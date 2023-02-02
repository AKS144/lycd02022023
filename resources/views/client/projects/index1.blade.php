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
								<div class="row">
									<div class="col-md-6">
										<h3>Manage Projects</h3>
									</div>
									<div class="col-md-6 text-end">
										<a href="post-project" class="btn btn-primary back-btn mb-4">Post a Project</a>
									</div>
								</div>
							</div>
							<!-- <nav class="user-tabs project-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
									    <a class="nav-link active" href="client-project_list">All Projects </a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="client-project_pending">Pending Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="client-project_ongoing">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="client-project_completed">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="client-project_cancel">Cancelled Projects</a>
									</li>
								</ul>
							</nav> -->
							
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
														<span>Dreamguystech</span>
														<h2>Website Designer Required For Directory Theme</h2>
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
															<h3>$500.00</h3>
															<h5>in 12 Days</h5>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center">
															<a href="view-project-detail" class="projects-btn">View Details </a>
															<a href="#" class="hired-detail">Hired on 19 JUN 2021</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 d-flex flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body p-2">
												<div class="prj-proposal-count text-center hired">
													<h3>Hired</h3>
													<img src="assets/img/developer/developer-01.jpg" alt="" class="img-fluid">
													<p class="mb-0">Hannah Finn</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							
							@endif
							<!-- /project list -->
						
						
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