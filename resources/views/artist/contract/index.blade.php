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
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
								 <li class="nav-item">
										<a class="nav-link active" href="contract_list">All Contracts</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="contract_pending">Pending Contracts</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contract_ongoing">Ongoing Contracts</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contract_completed">Completed Contracts</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contract_cancel">Cancelled Contracts</a>
									</li>
								</ul>
							</nav> 
							
							<!-- Proposals list -->
							<div class="proposals-section">
								<h3 class="page-subtitle">All Projects</h3>
								
								<!-- Proposals -->
								@foreach($contract as $contract)
								<div class="freelancer-proposals">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposals-info">
											<div class="proposals-detail">
												{{-- <h3 class="proposals-title">3D Renders and Amazon Product Store images/Video</h3> --}}
												<div class="proposals-content">
													<div class="proposal-img">
														<div class="text-md-center">
															<img src="{{asset('assets/img/avatar-artist.jpg')}}" alt="" class="img-fluid">
															<h4>{{ $contract->user_name }}</h4>
															<span class="info-btn">client</span>
														</div>
													</div>
													<div class="proposal-client">
														<h4 class="title-info">Client Price</h4>
														<h2 class="client-price" style="font-size:15px;">₹{{ $contract->user_price ?? '' }}</h2>
														<span class="price-type">( {{ $contract->price_type ?? '' }} )</span>
													</div>
													<div class="proposal-type">
														<h4 class="title-info">Job Type</h4>
														<h3>{{ $contract->job_type ?? '' }}</h3>
													</div>
												</div>
											</div>
											<div class="project-hire-info">
												<div class="content-divider-1"></div>
												<div class="projects-amount">
													<p>Your Price</p>
													<h3 style="font-size:15px;">₹{{ $contract->artist_price }}</h3>
													<h5>in 12 Days</h5>
												</div>
												<div class="content-divider-1"></div>
												<div class="projects-action text-center">
													{{-- <a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals </a> --}}
													<a href="freelancer-view-project-detail" class="projects-btn">View</a>
													{{-- <a href="#" class="proposal-delete">Delete Proposal</a> --}}
												</div>
											</div> 
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Description</h5>
											<p>{{ $contract->project_details }}</p>
										</div>
									</div>
								</div>
								@endforeach
								<!-- Proposals --> 
								
								
								
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