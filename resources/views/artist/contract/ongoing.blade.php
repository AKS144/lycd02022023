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
								<h3>Manage Projects</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="contract_list">All Contracts</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contract_pending">Pending Contracts</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="contract_ongoing">Ongoing Contracts</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contract_completed">Completed Contracts</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contract_cancel">Cancelled Contracts</a>
									</li>
								</ul>
							</nav> 
							
							

							<!-- project list -->
							@foreach($contract as $contract)
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-12 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info project">
														<span>Lytaa</span>
														<h2>Wedding Photographere</h2>
														<div class="proposal-client">
															<h4 class="title-info">Client Price</h4>
															<div class="d-flex">
																<h3 class="client-price me-2">₹{{ $contract->user_price ?? '' }}</h3>
																<p class="amnt-type">( {{ $contract->price_type ?? '' }} )</p>
															</div>
														</div>
													</div>
													<div class="project-hire-info project">
														<div class="content-divider"></div>
														<div class="proposer-info project">
															<div class="proposer-img">
																<img src="{{asset('assets/img/avatar-artist.jpg')}}" alt="" class="img-fluid">
															</div>
															<div class="proposer-detail">
																<h4>{{ $contract->user_name ?? '' }}</h4>
																<ul class="proposal-details">
																	<li> October 10, 2021</li>
																	<li><i class="fas fa-star text-primary"></i> 4 Reviews</li>
																</ul>
															</div>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-start project">
															<a href="freelancer-view-project-detail" class="projects-btn project">View Details </a>
															<p class="hired-detail">Project taken on</p>
															<p class="hired-date">28 October 2021</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							<!-- /project list -->
							
							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-12 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info project">
														<span>Lytaa</span>
														<h2>Wedding Photographer</h2>
														<div class="proposal-client">
															<h4 class="title-info">Client Price</h4>
															<div class="d-flex">
																<h3 class="client-price me-2">$300.00</h3>
																<p class="amnt-type">( FIXED )</p>
															</div>
														</div>
													</div>
													<div class="project-hire-info project">
														<div class="content-divider"></div>
														<div class="proposer-info project">
															<div class="proposer-img">
																<img src="{{asset('assets/img/avatar-artist.jpg')}}" alt="" class="img-fluid">
															</div>
															<div class="proposer-detail">
																<h4>James Douglas</h4>
																<ul class="proposal-details">
																	<li> October 24, 2021</li>
																	<li><i class="fas fa-star text-primary"></i> 4 Reviews</li>
																</ul>
															</div>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center project">
															<a href="freelancer-view-project-detail" class="projects-btn">View Details </a>
															<h4 class="completed-badge"><span><i class="fas fa-medal me-2"></i></span>Completed</h4>
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