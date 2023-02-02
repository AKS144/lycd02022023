<?php $page="wishlist";?>
@extends('layout.mainlayout')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/js/jquery.signature.css') }}"> 
<style>
        .kbw-signature {
            width: 200px;
            height: 180px;
        }

        #sig canvas {
            width: 100% !important;
            height: auto;
        }

</style>


<!-- Page Content -->

<div class="content bookmark">

	<div class="container-fluid">

		<div class="row">

			<!-- sidebar -->

			@include('client.menu')

			<!-- /sidebar -->

			<div class="col-xl-9 col-md-8">

				<!-- <nav class="user-tabs mb-4">

					<ul class="nav nav-tabs nav-tabs-bottom nav-justified">

						<li class="nav-item">

							<a class="nav-link active" href="favourites">Bookmarked Freelancers</a>

						</li>

						<li class="nav-item">

							<a class="nav-link" href="invited-freelancer">Invited Freelancers</a>

						</li>

					</ul>

				</nav> -->

				<!-- project list -->

				<div class="my-projects-view">

					<div class="row">

						<div class="col-lg-12">

							<div class="card">

								<div class="card-header">

									<h5 class="card-title">Artist Quotation</h5>

								</div>

								<div class="card-body">

									<div class="table-responsive table-box">

										<table class="table table-hover table-center mb-0 datatable">

											<thead class="thead-pink">

												<tr>
													<th>Photographer Details</th>
													<th>Artist Price</th>
													<th>Your Price</th>																									
													<th>Action</th>
												</tr>
											</thead>
											<tbody>			
													@foreach($quotes as $quotes)
														<tr>
															<td>
																<h2 class="table-avatar">
																	<a href="freelancer-profile"
																		class="avatar avatar-md tab-imgcircle me-2">
																		<img class="avatar-img rounded-circle"
																			src="{{asset('img/artist.jpg')}}"
																			alt="User Image">
																	</a>
																	<a href="freelancer-profile"><span
																			class="profile-name">{{ $quotes->artist_name }}</span>
																	
																	</a>
																</h2>
															</td>
															<td>
																<h2 class="table-avatar"><img
																		src="assets/img/flags/de.png" class="me-2"
																		alt="" height="16"><b style="color: orangered">₹</b>{{ $quotes->artist_price ?? ''}}/-</h2>
															</td>
															<td>
																<h2 class="table-avatar"><img
																		src="assets/img/flags/de.png" class="me-2"
																		alt="" height="16"><b style="color: orangered">₹</b>{{ $quotes->client_price ?? ''}}/-</h2>
															</td>

															<!-- <td><a href="javascript:void(0);" class="fav"><i
																		class="fas fa-heart filled"></i></a></td> -->
															<td class="text-end">
																<div class="table-action text-center">
																
																<form action="{{ route('quotes.destroy',$quotes->id) }}" method="post">
																	@method('delete')
																	@csrf   
																	
																</form>

																		<!-- <a href="{{ route('quotes.client_status', ['id' => $quotes->id, 'status' => 1]) }}"
																				class="btn btn-primary btn-invite">Accept																			
																		</a> -->
																		@if($quotes->artist_status == 2 and $quotes->client_status == 3)
																		    <span class="text-highlight">Artist rejected your proposal</span>  <br><br>
																			<a data-bs-toggle="modal" data-bs-target="#edit-proposal{{ $quotes->id }}" class="btn btn-primary btn-invite">Send again</a>
																		  <!-- The Modal -->
																			<div class="modal fade" id="edit-proposal{{ $quotes->id }}">
																				<div class="modal-dialog modal-dialog-centered modal-sm">
																					<div class="modal-content">

																						<div class="modal-header">
																			                <span class="text-highlight">Rejected client proposal</span>  <br>
																							<h4 class="modal-title">Update Proposal</h4>
																							<span class="modal-close"><a href="#"
																									data-bs-dismiss="modal" aria-label="Close"><i
																										class="far fa-times-circle"></i></a></span>
																						</div>

																						<div class="modal-body">
																							<form action="{{ route('quotes.update', $quotes->id) }}" method="POST">
																								@csrf
																								@method('put')

																								<div class="modal-info">
																									<div class="row">
																										<div class="col-md-12">
																											<div class="form-group">
																												<label>Client Estimate price</label>
																												<input type="text" name="client_price"
																													class="form-control"
																													value="{{ $quotes->client_price ?? '' }}">
																											</div>
																										</div>
																										<div class="col-md-12">
																											<div class="form-group">
																												<label>Artist Estimate price</label>
																												<input type="text" name="artist_price"
																													class="form-control"
																													value="{{ $quotes->artist_price ?? '' }}" readonly>
																											</div>
																										</div>

																									</div>
																								</div>
																								<div class="submit-section text-first">
																									<button type="submit"
																										class="btn btn-primary submit-btn">Save
																										Proposal</button>
																								</div>
																							</form>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- /The Modal -->
																        </form>	
																		@elseif ($quotes->artist_status == 2 and $quotes->client_status == 0)
																			<span class="text-highlight">Artist rejected your proposal and sended his proposal</span>  <br>
																			<a href="{{ route('quotes.client_reject', ['id' => $quotes->id, 'status' => 1]) }}"
																				class="btn btn-primary btn-invite">	Accept</a><br>
																				<a href="{{ route('quotes.client_reject', ['id' => $quotes->id, 'status' => 2]) }}"
																				class="btn btn-primary btn-invite">	Reject</a>
																		@elseif($quotes->client_status == 2 and $quotes->artist_status == 0)		
																			<a data-bs-toggle="modal" data-bs-target="#edit-proposal{{ $quotes->id }}" class="btn btn-primary btn-invite">Update Proposal</a>
																		  <!-- The Modal -->
																			<div class="modal fade" id="edit-proposal{{ $quotes->id }}">
																				<div class="modal-dialog modal-dialog-centered modal-sm">
																					<div class="modal-content">

																						<div class="modal-header">
																			                <span class="text-highlight">Rejected client proposal</span>  <br>
																							<h4 class="modal-title">Update Proposal</h4>
																							<span class="modal-close"><a href="#"
																									data-bs-dismiss="modal" aria-label="Close"><i
																										class="far fa-times-circle"></i></a></span>
																						</div>

																						<div class="modal-body">
																							<form action="{{ route('quotes.update', $quotes->id) }}" method="POST">
																								@csrf
																								@method('put')

																								<div class="modal-info">
																									<div class="row">
																										<div class="col-md-12">
																											<div class="form-group">
																												<label>Client Estimate price</label>
																												<input type="text" name="client_price"
																													class="form-control"
																													value="{{ $quotes->client_price ?? '' }}">
																											</div>
																										</div>
																										<div class="col-md-12">
																											<div class="form-group">
																												<label>Artist Estimate price</label>
																												<input type="text" name="artist_price"
																													class="form-control"
																													value="{{ $quotes->artist_price ?? '' }}" readonly>
																											</div>
																										</div>

																									</div>
																								</div>
																								<div class="submit-section text-first">
																									<button type="submit"
																										class="btn btn-primary submit-btn">Save
																										Proposal</button>
																								</div>
																							</form>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- /The Modal -->
																        </form>	
																		@elseif($quotes->artist_status == 0 and $quotes->client_status == 0)
																			<span class="text-highlight">Please wait for artist confirmation</span> <br><br>																			
																			<!-- <a data-bs-toggle="modal" data-bs-target="#edit-proposal{{ $quotes->id }}" class="btn btn-primary btn-invite">Update Proposal</a> -->
																		
																		<!-- Edit Button -->									
																																				
																			<!-- The Modal -->
																			<div class="modal fade" id="edit-proposal{{ $quotes->id }}">
																				<div class="modal-dialog modal-dialog-centered modal-sm">
																					<div class="modal-content">

																						<div class="modal-header">
																							<h4 class="modal-title">Update Proposal</h4>
																							<span class="modal-close"><a href="#"
																									data-bs-dismiss="modal" aria-label="Close"><i
																										class="far fa-times-circle"></i></a></span>
																						</div>

																						<div class="modal-body">
																							<form action="{{ route('quotes.update', $quotes->id) }}" method="POST">
																								@csrf
																								@method('put')

																								<div class="modal-info">
																									<div class="row">
																										<div class="col-md-12">
																											<div class="form-group">
																												<label>Client Estimate price</label>
																												<input type="text" name="client_price"
																													class="form-control"
																													value="{{ $quotes->client_price ?? '' }}">
																											</div>
																										</div>
																										<div class="col-md-12">
																											<div class="form-group">
																												<label>Artist Estimate price</label>
																												<input type="text" name="artist_price"
																													class="form-control"
																													value="{{ $quotes->artist_price ?? '' }}" readonly>
																											</div>
																										</div>

																									</div>
																								</div>
																								<div class="submit-section text-first">
																									<button type="submit"
																										class="btn btn-primary submit-btn">Save
																										Proposal</button>
																								</div>
																							</form>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- /The Modal -->
																    </form>	
															
																@elseif($quotes->artist_status == 1 and $quotes->client_status == 0)
																		    <span class="text-highlight">Artist accepted your proposal</span> <br>
																		<a href="{{ route('quotes.client_status', ['id' => $quotes->id, 'status' => 1]) }}"	
																					class="btn btn-primary btn-invite " onclick="return confirm('Are you sure?');">
																			Accept</a>
																@elseif($quotes->artist_status == 3 and $quotes->client_status == 1)
																		    <span class="text-highlight">You accepted artist proposal awaiting for confirmation</span> <br>
																		<!-- <a href="{{ route('quotes.client_status', ['id' => $quotes->id, 'status' => 1]) }}"	class="btn btn-primary btn-invite">Accept</a>		 -->
																@elseif($quotes->artist_status == 0 and $quotes->client_status == 1)																		
																		@if($quotes->contract_id == NULL)
																		    <span class="text-highlight">You have accepted proposal</span> 
																			<a href="{{ route('quotes.client_reject', ['id' => $quotes->id, 'status' => 0]) }}"
																				class="btn btn-primary btn-invite" onclick="return confirm('Are you sure?');">	Reject																		
																			</a>
																		@elseif($quotes->contract_id != NULL)	
																		    @if($quotes->contract_client == 0)
																			<span class="text-highlight">Please sign contract</span>
																		       <a data-bs-toggle="modal" href="#sign{{ $quotes->contract_id }}" class="btn btn-primary btn-invite">Sign Contract</a> 
																			@elseif($quotes->contract_client == 1 and $quotes->contract_artist == 0)
																		       <span class="text-highlight">You have signed contract</span>
																			@elseif($quotes->contract_client == 1 and $quotes->contract_artist == 1)
																		       <span class="text-highlight">Artist have signed contract</span>
																		           <a href="" target="_blank" class="btn btn-primary btn-invite">View Contract</a>																			   
																			    @if($quotes->invoice == 1)
																		           <a href="{{ route('invoice',$quotes->contract_id) }}" target="_blank" class="projects-btn">Invoice</a>
																			    @endif
																			@endif    
																		@endif	
															    @elseif($quotes->artist_status == 3 and $quotes->client_status == 2)
																  <span class="text-highlight">You rejected Proposal</span>																																	

																@elseif($quotes->artist_status == 1 and $quotes->client_status == 1)																		 																	
																	@if($quotes->contract_id == NULL)	
																	    @if($quotes->invoice == 0)
																	        <span class="text-highlight">Proposal accepted by both</span><br>
																	        <span class="text-highlight">Please wait for estimate from artist</span><br>
																		@elseif($quotes->invoice == 3)		
																		    <span class="text-highlight">Give your review</span><br>																																															
																			<a href="{{ route('quotes.client_estrequest', ['id' => $quotes->id, 'status' => 2]) }}"
																					class="btn btn-primary btn-invite" onclick="return confirm('Are you sure?');">Reject</a><br><br>
																			<a href="{{ route('quotes.client_estrequest', ['id' => $quotes->id, 'status' => 1]) }}"
																					class="btn btn-primary btn-invite" onclick="return confirm('Are you sure?');">Accept</a><br><br>
																					<a data-bs-toggle="modal" data-bs-target="#estimate{{ $quotes->id }}"
                                                                                       class="projects-btn">See Estimate</a> 		
																						<!-- The Modal contract new-->
																						<div class="modal fade" id="estimate{{ $quotes->id }}">
																							<div class="modal-dialog modal-dialog-centered modal-lg">
																								<div class="modal-content">
																									<div class="modal-header">
																										<h4 class="modal-title">Artist Estimate</h4>
																										<span class="modal-close"><a href="#"
																												data-bs-dismiss="modal" aria-label="Close"><i
																													class="far fa-times-circle orange-text"></i></a></span>
																									</div>

																									<div class="modal-body">
																									   <div class="row">
                                                                                                           <div class="col-12 table-responsive">
																										   <table class="table table-striped">
																												<thead>
																													<tr>
																														<th>Product</th>
																														<th>Qty</th>
																														<th>Unit Price</th>
																														<th>Description</th>
																														<th>Subtotal</th>																													
																													</tr>
																												</thead>
																												<tbody>
																													@foreach ($products as $products)
																														<tr>
																															<td>{{ $products->product_name }}</td>
																															<td>{{ $products->unit_price }}</td>
																															<td>{{ $products->qty }}</td>
																															<td>{{ $products->description }}</td>
																															<td>{{ $products->price }}</td>
																														</tr>
																													@endforeach
																												</tbody>	
																												<tr>
																													<td></td>
																													<td></td>
																													<td></td>
																													<td style="font-size: medium">
																														Subtotal:<br>
																													</td>
																													<td style="font-size: medium">
																														<strong>₹{{ $sum }}</strong>
																													</td>
																												</tr>
																												<tr>
																													<td></td>
																													<td></td>
																													<td></td>
																													<td style="font-size: medium">
																														Tax (18%):<br>
																													</td>
																													<td style="font-size: medium">
																														<strong>₹{{ $tax }}</strong>
																													</td>
																												</tr>
																												<tr>
																													<td></td>
																													<td></td>
																													<td></td>
																													<td style="font-size: medium">
																														Total:<br>
																													</td>
																													<td style="font-size: medium">
																														<strong>₹{{ $total }}</strong>
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
																						<!-- /The Modal -->																																										

																		@elseif($quotes->invoice == 2)
																		    <span class="text-highlight">You have rejected artist estimate</span><br>
																				<!-- <span class="text-highlight">Please wait for Estimate from artist</span><br> -->
																		    <!-- <a href="" class="btn btn-primary btn-invite">Request Estimate</a>	 -->
																		@elseif($quotes->invoice == 1)	
																		    <span class="text-highlight">Accepted estimate please wait for contract</span><br>
																		@endif
																	@elseif($quotes->contract_id != NULL)
																	        @if($quotes->contract_client == 0)
																			<span class="text-highlight">Please sign contract</span><br>
																		       <a data-bs-toggle="modal" href="#sign{{ $quotes->contract_id }}" class="btn btn-primary btn-invite">Sign Contract</a> 
																			@elseif($quotes->contract_client == 1 and $quotes->contract_artist == 0)
																		       <span class="text-highlight">You have signed contract</span>
																			@elseif($quotes->contract_client == 1 and $quotes->contract_artist == 1)
																		       <!-- <span class="text-highlight">Artist signed contract</span>  -->
																			   <a href="{{ route('projectcont',$quotes->contract_id) }}" target="_blank"
																				class="projects-btn">See Contract </a>  
																			   @if($quotes->invoice == 1)
																			   		<a href="{{ route('invoice',$quotes->contract_id) }}" class="projects-btn">Invoice</a> 	
																			   @endif																	      																	
																			@endif   												
																	@endif	
																@endif		
																	<!-- The Modal -->
																	<div class="modal fade" id="sign{{ $quotes->contract_id }}">
																	<div class="modal-dialog modal-dialog-centered modal-lg">
																		<div class="modal-content">
																			<div class="modal-header">
																				<h4 class="modal-title">Contract</h4>
																				<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i
																							class="far fa-times-circle orange-text"></i></a></span>
																			</div>
																			<!-- The Modal -->		
																			<div class="modal-body">
																				<!-- <form action="invited-freelancer"> -->
																				@if($quotes->contract_id != NULL)	 
																				<form action="{{ route('client.sign', $quotes->contract_id) }}" method="POST" enctype="multipart/form-data">
																					@csrf
																					@method('put')																					
																					<div class="modal-info">
																						<div class="row">
																							<div class="col-md-12">
																								<div class="average-bids mb-4">
																									<p>Hi <span class="text-highlight">{{ $quotes->user_name ?? ''}}</span> about your Project</p>
																								</div>
																								<div class="form-group">
																									<label></label>
																									<input type="text" class="form-control" value="{{ $quotes->user_name }}">
																								</div>
																							</div>

																							<div class="col-md-6">
																								<label class=""
																									for="">Signature:</label>
																								<br />
																								<div id="sig"></div>
																								<br><br>
																								<button id="clear"
																									class="btn btn-danger">Clear
																									Signature</button>																								
																								<textarea id="signature" name="user_sign" style="display: none"></textarea>
																							</div>
																						</div>
																					</div>

																					<div class="submit-section text-end">
																						<button type="submit" class="btn btn-primary submit-btn">Send</button>
																					</div>
																				</form>																				
																			</div>
																		</div>
																	</div>
																	</div>

																	<!-- /The Modal -->		
											
																@endif   
																</div>
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

				<!-- project list -->

			</div>

		</div>

	</div>

</div>





<!-- /Page Content -->





</div>

<!-- /Main Wrapper -->



@endsection