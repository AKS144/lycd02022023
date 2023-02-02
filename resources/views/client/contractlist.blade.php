<?php $page="freelancer-project-proposals";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Page Content -->			
			<div class="content">
				<div class="container-fluid">
					<div class="row">
					 <!-- sidebar -->
                     @include('client.menu')
                <!-- sidebar -->
						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<h3>Contarct</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="freelancer-project-proposals">My Proposals</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-ongoing-projects">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-completed-projects">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-cancelled-projects">Cancelled Projects</a>
									</li>
								</ul>
							</nav> 
							
							<!-- Proposals list -->
							<div class="proposals-section">
								<h3 class="page-subtitle">My Contract</h3>
								
								<!-- Proposals -->
                                @foreach($contract as $contracts )
								<div class="freelancer-proposals">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposals-info">
											<div class="proposals-detail">
												<h3 class="proposals-title">{{ $contracts->user_name }}</h3>
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