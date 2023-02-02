<?php $page="jobpost";?>
@extends('layout.mainlayout')
@section('content')		


	<!-- Page Content -->
			<div class="content bookmark">					
				<div class="container-fluid">					
					<div class="row">
						
						<!-- sidebar -->
						@include('client.menu')
						<!-- /sidebar -->
						
						<div class="col-xl-9 col-md-8">
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="jobpost">List job</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="addjobpost">Add Job </a>
									</li>
								</ul>
							</nav>
							<!-- project list -->
							<div class="my-projects-view">
								<div class="row">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-header">
												<h5 class="card-title">Bookmarked Freelancers</h5>
											</div>
											<div class="card-body">
												<div class="table-responsive table-box">
													<table class="table table-hover table-center mb-0 datatable">
														<thead class="thead-pink">
															<tr>
																<th>Freelancer Detail</th>
																<th>Hourly Rate</th>
																<th>Projects Completed</th>
																<th>Location</th>
																<th>Status</th>
																<th></th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="freelancer-profile" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="assets/img/img-02.jpg" alt="User Image">
																		</a>
																		<a href="freelancer-profile"><span class="profile-name">Andrew Glover</span><span>Software Developer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td>300 /Hr</td>
																<td>40</td>
																<td><h2 class="table-avatar"><img src="assets/img/flags/de.png" class="me-2" alt="" height="16"> Germany</h2></td>
																<td><a href="javascript:void(0);" class="fav"><i class="fas fa-heart filled"></i></a></td>
																<td class="text-end">
																	<div class="table-action">
																		<a data-bs-toggle="modal" href="#bookmark" class="btn btn-primary btn-invite">Invite Project
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="freelancer-profile" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="assets/img/img-03.jpg" alt="User Image">
																		</a>
																		<a href="freelancer-profile"><span class="profile-name">Mickey Bernier</span>  <span>QA Engineer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td>150 /Hr</td>
																<td>20</td>
																<td>
																	<h2 class="table-avatar">
																		<img src="assets/img/flags/us.png" class="me-2" alt="" height="16"> USA
																	</h2>
																</td>
																<td><a href="javascript:void(0);" class="fav"><i class="far fa-heart"></i></a></td>
																<td class="text-end">
																	<div class="table-action">
																		<a data-bs-toggle="modal" href="#bookmark" class="btn btn-primary btn-invite">Invite Project
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="freelancer-profile" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="assets/img/img-04.jpg" alt="User Image">
																		</a>
																		<a href="freelancer-profile"><span class="profile-name">Tony Ingle</span> <span>Business Analyst</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td>220 /Hr</td>
																<td>35</td>
																<td>
																	<h2 class="table-avatar">
																		<img src="assets/img/flags/de.png" class="me-2" alt="" height="16"> Germany
																	</h2>
																</td>
																<td><a href="javascript:void(0);" class="fav"><i class="fas fa-heart filled"></i></a></td>
																<td class="text-end">
																	<div class="table-action">
																		<a data-bs-toggle="modal" href="#bookmark" class="btn btn-primary btn-invite">Invite Project
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="freelancer-profile" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="assets/img/img-05.jpg" alt="User Image">
																		</a>
																		<a href="freelancer-profile"><span class="profile-name">Timothy Smith</span> <span>PHP Developer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td>420 /Hr</td>
																<td>60</td>
																<td>
																	<h2 class="table-avatar">
																		<img src="assets/img/flags/us.png" class="me-2" alt="" height="16"> USA
																	</h2>
																</td>
																<td><a href="javascript:void(0);" class="fav"><i class="far fa-heart"></i></a></td>
																<td class="text-end">
																	<div class="table-action">
																		<a data-bs-toggle="modal" href="#bookmark" class="btn btn-primary btn-invite">Invite Project
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="freelancer-profile" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="assets/img/img-01.png" alt="User Image">
																		</a>
																		<a href="freelancer-profile"><span class="profile-name">David Peterson</span> <span>UI/UX Designer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td>200 /Hr</td>
																<td>25</td>
																<td>
																	<h2 class="table-avatar">
																		<img src="assets/img/flags/de.png" class="me-2" alt="" height="16"> Germany
																	</h2>
																</td>
																<td><a href="javascript:void(0);" class="fav"><i class="far fa-heart"></i></a></td>
																<td class="text-end">
																	<div class="table-action">
																		<a data-bs-toggle="modal" href="#bookmark" class="btn btn-primary btn-invite">Invite Project
																		</a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>	
									</div>
								</div>								
							</div>
							<!-- project list -->
						</div>
					</div>
				</div>
			</div>	
						
			
			<!-- /Page Content -->


        </div>

@endsection