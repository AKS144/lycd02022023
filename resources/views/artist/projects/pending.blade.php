<?php $page="freelancer-project-proposals";?>
@extends('layout.mainlayout')
@section('content')		

<style>
.pending-badge {
    font-size: 14px;
    color: #f5b004;
    font-weight: 700;
}
</style>
<!-- Page Content -->			
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<!-- sidebar -->
						@include('artist.sidebar')
					<!-- sidebar -->
						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<h3>Manage Projects</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link " href="project_list">All Project</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="project_pending">Pending Projects</a>
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
							</nav> 
							
							<!-- project list -->
						
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-12 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info project">													
														<h2>Name</h2>
														<div class="proposal-client">
															<h4 class="title-info">Client Price</h4>
															<div class="d-flex">
																<h3 class="client-price me-2">budget</h3>
																<p class="amnt-type">( price_type)</p>
															</div>
														</div>
													</div>
													<div class="project-hire-info project">
														<div class="content-divider"></div>
														<div class="proposer-info project">
															
															<div class="proposer-detail">
																<h4><i class="fas fa-star text-primary"></i> location </h4>
																<ul class="proposal-details">	
																	<li>Posted on</li>															
																	{{-- <li>{{ date('d-m-Y', strtotime($jobs->created_at)) }}</li>	 --}}
																</ul>
															</div>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center project">															
															{{-- <a href="{{ route('jobs.show', $jobs->id) }}" class="projects-btn">View Details </a> --}}
															<h4 class="pending-badge"><span><i class="fas fa-medal me-2"></i></span>Pending</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- /project list -->
							
						
							
							
							
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


        </div>
		<!-- /Main Wrapper -->
@endsection