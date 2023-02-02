<?php $page = 'proposals'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/jquery.signature.css') }}">
        <link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
            rel="stylesheet"> -->


    <!--Below two were hided-->  
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


        label.error {
            color: #dc3545;
            font-size: 16px;
        }

		.proposal-delete {
			font-weight: 500;
			font-size: 15px;
			color: #f56b36;
			cursor: pointer;
		}
		#blink {
            font-size: 20px;
            font-weight: bold;
            font-family: sans-serif;
        }

		.rate {
				float: left;
				height: 46px;
				padding: 0 10px;
			}

		.rate:not(:checked)>input {
			position: absolute;
			display: none;
		}

		.rate:not(:checked)>label {
			float: right;
			width: 1em;
			overflow: hidden;
			white-space: nowrap;
			cursor: pointer;
			font-size: 30px;
			color: #ccc;
			margin-top: -14px;
			padding: 0px 3px;
		}

		.rate:not(:checked)>label:before {
			content: '★ ';
		}

		.rate>input:checked~label {
			color: #ffc700;
		}

		.rate:not(:checked)>label:hover,
		.rate:not(:checked)>label:hover~label {
			color: #deb217;
		}

		.rate>input:checked+label:hover,
		.rate>input:checked+label:hover~label,
		.rate>input:checked~label:hover,
		.rate>input:checked~label:hover~label,
		.rate>label:hover~input:checked~label {
			color: #c59b08;
		}

		.rating-container .form-control:hover,
		.rating-container .form-control:focus {
			background: #fff;
			border: 1px solid #ced4da;
		}

		.rating-container textarea:focus,
		.rating-container input:focus {
			color: #000;
		}

    </style>



    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- sidebar -->
               @include('client.menu')
                <!-- sidebar -->

                <div class="col-xl-9 col-md-8">
                    <div class="page-title">
                        <h3>Quotation</h3>
                    </div>

                    <!-- Proposals list -->
                    <div class="proposals-section">                     

                        <!-- Proposals -->
                        @if($quotes->count() >0)
                        @foreach ($quotes as $key => $quotes)
                            <div class="freelancer-proposals">
                                <div class="project-proposals align-items-center freelancer">
                                    <div class="proposals-info">
                                        <div class="proposals-detail">
                                            <!-- <h3 class="proposals-title">{{ $quotes->user_name ?? '' }}</h3> -->
                                            <div class="proposals-content">
                                                <div class="proposal-img">
                                                    <div class="text-md-center">
                                                        <img src="{{asset('assets/img/avatar-artist.jpg')}}" alt=""
                                                            class="img-fluid">
                                                        <h4>{{ $quotes->artist_name }}</h4>
                                                        <span class="info-btn">Artist</span>
                                                        <div class="proposal-type">
                                                            <!-- <h4 class="title-info">Project Status</h4> -->
                                                            <br />
                                                            @if($quotes->status == 'Ongoing')                                                           
                                                                <span class="btn btn-warning btn-sm">{{ $quotes->status ?? '' }}</span>
                                                            @elseif($quotes->status == 'Completed')    
                                                                <span class="btn btn-success btn-sm">{{ $quotes->status ?? '' }}</span>
                                                            @elseif($quotes->status == 'Cancelled')    
                                                                <span class="btn btn-success btn-sm">{{ $quotes->status ?? '' }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
												<div class="proposal-client">
                                                    <h5 class="title-info">Your Price</h4>
                                                    <h3 class="client-price">₹{{ $quotes->client_price ?? '' }}</h2>                                                           
                                                </div> 
                                                    <div class="proposal-client">
                                                    <h4 class="title-info">Artist Price</h4>
                                                    <h2 class="client-price">₹{{ $quotes->artist_price ?? '' }}</h2>                                                                                          
                                                </div>  
                                            </div>
                                        </div>
                                        <!-- <div class="row">
											<div class="col-12"></div>
										</div> -->
									

                                        <div class="project-hire-info ">
                                            <div class="content-divider-1"></div>
                                            <!-- <div class="projects-amount">
                                                <p>Your Price</p>
                                                <h3>₹{{ $quotes->artist_price ?? '' }}</h3>
                                                <h5>in 12 Days</h5>
                                            </div> -->
                                            <!-- <div class="proposal-client" style="margin-top: 1px; padding-left: 27px;">
                                                    <h4 class="title-info">Artist Estimate</h4>
                                                    <h2 class="client-price">₹{{ $quotes->artist_price ?? '' }}</h2>                                                                                          
                                            </div> -->
                                            <!-- <div class="content-divider-1"></div> -->
                                            <div class="projects-action text-center">
										
											<form action="{{ route('quotes.destroy',$quotes->id) }}" method="post">
												@method('delete')
												@csrf  
											</form>
											<!-- <a href="{{ route('quotes.client_status', ['id' => $quotes->id, 'status' => 1]) }}" class="btn btn-primary btn-invite">Accept																			
											</a> -->

																@if($quotes->artist_status == 2 and $quotes->client_status == 3)
																		    <span class="proposal-delete">Artist rejected your proposal</span>  <br><br>
																			<a data-bs-toggle="modal" data-bs-target="#edit-proposal{{ $quotes->id }}" class="btn-primary projects-btn">Send again</a>
																		  	<!-- The Modal -->
																			<div class="modal fade" id="edit-proposal{{ $quotes->id }}">
																				<div class="modal-dialog modal-dialog-centered modal-sm">
																					<div class="modal-content">

																						<div class="modal-header">
																			                <span class="proposal-delete">Rejected client proposal</span>  <br>
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
																		<!-- 17/09/2022 -->
																@elseif ($quotes->artist_status == 3 and $quotes->client_status == 0)
                                                    					<span class="proposal-delete">??</span>		
																@elseif($quotes->artist_status == 4 and $quotes->client_status == 0)
																		<span class="proposal-delete">{{ $quotes->artist_name }} aborted your proposal</span>  <br>
																		<span class="proposal-delete">{{ $quotes->artist_reason }}</span>  <br>
																@elseif($quotes->artist_status == 2 and $quotes->client_status == 4)																			
																		<span class="proposal-delete">You aborted this proposal</span>  <br>
																@elseif($quotes->artist_status == 2 and $quotes->client_status == 0)																			
																			<span class="proposal-delete">Artist didn't like your proposal</span>  <br /> <br />
																			<a href="{{ route('client.accept', ['id' => $quotes->id, 'status' => 1]) }}"
																				class="btn btn-outline-success" style="border-radius: 0.3rem; font-size: 0.8rem;">Accept</a> &nbsp;																	
																				
																			<a data-bs-toggle="modal" data-bs-target="#reject-quotes{{ $quotes->id }}" style="border-radius: 0.3rem; font-size: 0.8rem;" class="btn btn-outline-danger">Reject</a>
																			    <!-- The Modal for rejecting/aborting proposal -->
																				<div class="modal fade" id="reject-quotes{{ $quotes->id }}">
																					<div class="modal-dialog modal-dialog-centered modal-sm">
																						<div class="modal-content">

																							<div class="modal-header">
																								<h4 class="modal-title">Give reason why ?</h4>
																								<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle"></i></a></span>
																							</div>

																							<div class="modal-body">
																								<form
																									action="{{ route('clientproposal.update', $quotes->id) }}"
																									method="POST" id="artreason">
																									@csrf
																									@method('put')

																									<div class="modal-info">
																										<div class="row">                                                                                
																											<div class="col-md-12">
																												<div class="form-group">
																												
																													<textarea type="text"
																														name="client_reason"
																														class="form-control"
																														value="{{ $quotes->client_reason ?? '' }}"></textarea>
																												</div>
																											</div>

																										</div>
																									</div>
																									<div class="submit-section text-first">
																										<button type="submit"
																											class="btn btn-primary submit-btn">Save Proposal</button>
																									</div>
																								</form>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!-- /The Modal -->	
																@elseif($quotes->client_status == 2 and $quotes->artist_status == 0)		
																			<a data-bs-toggle="modal" data-bs-target="#edit-proposal{{ $quotes->id }}" class="btn btn-primary btn-invite">Update Proposal</a>
																		  <!-- The Modal -->
																			<div class="modal fade" id="edit-proposal{{ $quotes->id }}">
																				<div class="modal-dialog modal-dialog-centered modal-sm">
																					<div class="modal-content">

																						<div class="modal-header">
																			                <span class="proposal-delete">Rejected client proposal</span>  <br>
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
																			<span class="proposal-delete">Please wait for artist confirmation</span> <br><br>																			
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
																		@if($quotes->artist_accept == 0)
																			<span class="proposal-delete">Artist accepted your proposal</span> <br/>																		
																			<a href="{{ route('quotes.client_status', ['id' => $quotes->id ]) }}"	
																				class="btn  btn-outline-success" onclick="return confirm('Are you sure?');">
																			Accept</a>
																		@elseif($quotes->artist_accept == 2)
																			<span class="proposal-delete">I am Interested in your proposal</span> <br/>
																			<a href="{{ route('quotes.client_status', ['id' => $quotes->id ]) }}"	
																				class="btn  btn-outline-success" onclick="return confirm('Are you sure?');">
																			Accept</a>
																		@elseif($quotes->artist_accept == 3)
																			<span class="proposal-delete">You have selected other artist for this job</span> <br/>																			
																		@endif	
																													
																@elseif($quotes->artist_status == 3 and $quotes->client_status == 1)
																		    <span class="proposal-delete">You accepted artist proposal awaiting for confirmation</span> <br>
																		<!-- <a href="{{ route('quotes.client_status', ['id' => $quotes->id, 'status' => 1]) }}" class="btn  btn-outline-success">Accept</a> -->
																@elseif($quotes->artist_status == 0 and $quotes->client_status == 1)																		
																		@if($quotes->contract_id == NULL)
																		    <span class="proposal-delete">You have accepted proposal</span> 
																			<a href="{{ route('quotes.client_reject', ['id' => $quotes->id, 'status' => 0]) }}"
																				class="btn btn-outline-danger" onclick="return confirm('Are you sure?');">Reject																		
																			</a>
																		@elseif($quotes->contract_id != NULL)	
																		    @if($quotes->contract_client == 0 and $quotes->contract_artist == 1)
																			<span class="proposal-delete">Please sign contract</span>
																			<a data-bs-toggle="modal" href="#sign{{ $quotes->contract_id }}" class="btn-primary projects-btn">Sign Contract</a> <br />
																				<a href="{{ route('projectcont',$quotes->contract_id) }}" target="_blank"
																			   			style="text-decoration:none" onmouseover="style='text-decoration:underline'" onmouseout="style='text-decoration:none'" class="proposal-delete">See Contract </a> 																		        
																			   
																			@elseif($quotes->contract_client == 1 and $quotes->contract_artist == 0)
																		       <span class="proposal-delete">You have signed contract</span>
																			@elseif($quotes->contract_client == 1 and $quotes->contract_artist == 1)
																		       <span class="text-highlight">Artist have signed contract</span>																		          
																				   <a href="{{ route('projectcont',$quotes->contract_id) }}"
																				class="projects-btn">See Contract </a>  
																			    @if($quotes->invoice == 1)
																		           <a href="{{ route('invoice',$quotes->contract_id) }}" target="_blank" class="btn-primary projects-btn">Invoice</a>
																			    @endif
																			@endif  
																		@endif	
																@elseif($quotes->artist_status == 3 and $quotes->client_status == 2)
																  <span class="proposal-delete">You rejected Proposal</span>
																@elseif($quotes->artist_status == 1 and $quotes->client_status == 1)
																	@if($quotes->status == 'Completed')
																		<!-- <a href="#" target="" data-bs-toggle="modal" data-bs-target="#edit-proposal" class="btn-primary projects-btn">Give Feedback</a> -->
																		<!-- <a href="#" target="" data-bs-toggle="modal"  data-bs-target="#edit-proposal{{ $quotes->id }}" class="proposal-delete">Feedback</a> -->
																		@if($quotes->client_feedback == '')
																		<a>is Your Project Completed?</a><br />
																		<a id="show-hidden-menu" class="proposal-delete" style="text-decoration:none; color:#F9A305;" onmouseover="style='text-decoration:underline'" onmouseout="style='text-decoration:none'">Give feedback</a>	<br />																		
																		<div class="hidden-menu" style="display: none;">																			
																			<input type="radio" data-bs-toggle="modal" data-bs-target="#yes-feedback" name="ddd" class="ans" value="yes" /><label style="color: green">Yes</label> &nbsp;
																			<input type="radio" data-bs-toggle="modal" data-bs-target="#no-feedback" name="ddd" class="ans" value="no"/><label style="color: red">No</label>
																		</div><br />
																		@elseif($quotes->client_feedback == 'No')
																		<span class="proposal-delete">We will get you soon</span><br />
																		<span class="proposal-delete">Your complain is registered</span><br /><br />

																		@elseif($quotes->client_feedback == 'Yes')
																			<span class="proposal-delete">Thank You for your feedback</span><br /><br />
																		@endif																		

																		<!--Modal for yes-->
																		<div class="modal fade" id="yes-feedback">
																			<div class="modal-dialog modal-dialog-centered modal-lg">
																				<div class="modal-content">
																					<div class="modal-header">
																						<h4 class="modal-title">Feedback</h4>
																						<span class="modal-close"><a href="#"
																								data-bs-dismiss="modal" aria-label="Close"><i
																									class="far fa-times-circle"></i></a></span>
																					</div>

																					<div class="modal-body">
																					<form action="{{ route('yesfeedback') }}" method="POST" class="review-form">																					
																							@csrf
																							
																							<div class="modal-info">
																									<input type="hidden" name="artist_id" value="35">
																									<input type="hidden" placeholder="Name" name="user_id" value="3">
																								
																							<div id="feedback">
																								<div class="row">
																									<div class="col-md-6">
																										<div class="form-group">	
																											<label>First Name</label>
																											<input class="form-control" id="name" type="text" value="Client">
																										</div>
																									</div>
																									<div class="col-md-6">
																										<div class="form-group">
																											<label>Email</label>
																											<input class="form-control" id="last_name" type="text" value="client@client.com">
																										</div>
																									</div>
																									<input class="form-control" id="" type="hidden" name="contract_id" value="{{ $quotes->contract_id }}">
																									

																									<div class="col-md-6">
																										<div class="form-group">
																											<div class="rate">
																												<span>Rate</span>
																												<label for="star5" title="text">5
																													stars</label>
																												<input type="radio" checked="" id="star4" class="rate" name="rating" value="4">
																												<label for="star4" title="text">4
																													stars</label>
																												<input type="radio" id="star3" class="rate" name="rating" value="3">
																												<label for="star3" title="text">3
																													stars</label>
																												<input type="radio" id="star2" class="rate" name="rating" value="2">
																												<label for="star2" title="text">2
																													stars</label>
																												<input type="radio" id="star1" class="rate" name="rating" value="1">
																												<label for="star1" title="text">1
																													star</label>
																											</div>
																										</div>
																									</div>
																									<div class="col-md-12">
																										<div class="form-group">
																											<label for="cvv"> Review</label>
																											<textarea class="form-control" rows="6" name="comment"></textarea>
																											<!-- <input class="form-control" id="cvv" type="text"> -->
																										</div>
																									</div>
																								</div>
																							</div>
																							</div>
																								<div class="submit-section text-first">
																									<button type="submit"
																										class="btn btn-primary submit-btn">Submit
																									</button>
																								</div>
																						</form>
																					</div>
																				</div>
																			</div>
                                                            			</div>
																		<!-- Modal end -->

																		<!--Modal for No-->
																		<div class="modal fade" id="no-feedback">
																			<div class="modal-dialog modal-dialog-centered modal-md">
																				<div class="modal-content">
																					<div class="modal-header">
																						<h4 class="modal-title">What artist said?</h4>
																						<span class="modal-close"><a href="#"
																								data-bs-dismiss="modal" aria-label="Close"><i
																									class="far fa-times-circle"></i></a></span>
																					</div>

																					<div class="modal-body">
																						<form action="{{ route('feedback',$quotes->contract_id) }}" method="POST">																					
																							@csrf
																							@method('put')

																							<div class="modal-info">
																								<input type="hidden" name="profile_id" value="35">
																								<input type="hidden" placeholder="Name" name="user_id" value="3">
																									
																								<div id="feedback">
																									<!-- <div class="row"> -->
																										<div class="col-md-12 ">
																											<div class="form-group align-center">	
																												<label>First Name</label>
																												<input class="form-control" id="name" type="text" value="Client">
																											</div>
																										</div>
																										<div class="col-md-12">
																											<div class="form-group">
																												<label>Email</label>
																												<input class="form-control" id="last_name" type="text" value="client@client.com">
																											</div>
																										</div>
																									
																										<div class="col-md-12">
																											<div class="form-group">
																												<label for="cvv">Reason </label>
																												<textarea class="form-control" rows="8" name="client_reason">{{ $quotes->client_reason }}</textarea>
																												<!-- <input class="form-control" id="cvv" type="text"> -->
																											</div>
																										</div>
																									<!-- </div> -->
																								</div>
																							</div>
																							<div class="submit-section text-first">
																								<button type="submit"
																									class="btn btn-primary submit-btn">Submit
																								</button>
																							</div>
																						</form>
																					</div>
																				</div>
																			</div>
                                                            			</div>
																		<!-- Modal end -->
																	@endif	
	
																	@if($quotes->contract_id == NULL)	
																	    @if($quotes->invoice == 0)
																	        <span class="proposal-delete">Proposal accepted by both</span><br>
																	        <span class="proposal-delete">Please wait for estimate from artist</span><br>
																	
																		@elseif($quotes->invoice == 3)	
																		@php 
																			$products = App\Product::where('quotes_id',$quotes->id)->get();
																			$total= $products->sum('price');
																		@endphp
																		<a data-bs-toggle="modal" data-bs-target="#estimate{{ $quotes->id }}">
																			<span class="proposal-delete"><u>See Estimate</u></span></a><br><br>
																		<a href="{{ route('quotes.client_estrequest', ['id' => $quotes->id, 'status' => 2]) }}"
																				class="btn btn-outline-danger " onclick="return confirm('Are you sure?');">Reject</a>
																			<a href="{{ route('quotes.client_estrequest', ['id' => $quotes->id, 'status' => 1]) }}"
																				class="btn btn-outline-success" onclick="return confirm('Are you sure?');">Accept</a><br>	
																						<!-- The Modal contract new-->
																						<div class="modal fade" id="estimate{{ $quotes->id }}">
																							<div class="modal-dialog modal-dialog-centered modal-lg">
																								<div class="modal-content">
																									<div class="modal-header">
																										<h4 class="modal-title">Artist Estimate</h4>
																										<span class="modal-close"><a href="#"
																												data-bs-dismiss="modal" aria-label="Close"><i
																													class="far fa-times-circle orange-text"></i></a>
																												</span>
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
																													@if($products->count() > 0)
																													@foreach ($products as $products)
																														<tr>
																															<td>{{ $products->product_name }}</td>
																															<td>{{ $products->unit_price }}</td>
																															<td>{{ $products->qty }}</td>
																															<td>{{ $products->description }}</td>
																															<td>{{ $products->price }}</td>
																														</tr>
																													@endforeach
																													@endif
																												</tbody>																																																							
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
																		    <span class="proposal-delete">You have rejected artist estimate</span><br>
																				<!-- <span class="text-highlight">Please wait for Estimate from artist</span><br> -->
																		    <!-- <a href="" class="btn btn-primary btn-invite">Request Estimate</a>	 -->
																		@elseif($quotes->invoice == 1)	
																		    <span class="proposal-delete">Accepted estimate please wait for contract</span><br>
																		@endif
																	@elseif($quotes->contract_id != NULL)
																	        @if($quotes->contract_client == 0 and $quotes->contract_artist == 1)
																			   <span class="proposal-delete">Please sign contract</span><br />
																		       <a data-bs-toggle="modal" href="#sign{{ $quotes->contract_id }}" class="btn btn-link">View Contract</a>
																			   
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
																									<div class="row">
																										<div class="col-md-6">
																											<h5>To<br>
																												Naresh Shetti</h5>
																											<p>KONDIVITA VILLAGE, J. B. NAGAR, ANDHERI (EAST), MUMBAI - 400059</p>
																										</div>
																										<div class="col-md-6"></div>
																										<p>Lorem Ipsum <b>{{ $quotes->user_name }}</b> is simply dummy text of the printing and typesetting
																											industry. between <b>{{ $quotes->artist_name }}</b> Lorem
																											Ipsum has
																											been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
																											galley of type and
																											scrambled it to make a type specimen book. It has survived not only five centuries, but also the
																											leap into electronic
																											typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
																											of Letraset sheets containing Lorem
																											Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
																											including versions of Lorem Ipsum.</p>
																										<h4>Term and Conditions</h4>
																										<p>Lorem Ipsumis simply dummy text of the printing and typesetting
																											industry. Lorem
																											Ipsum has
																											been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
																											galley of type and
																											scrambled it to make a type specimen book. It has survived not only five centuries, but also the
																											leap into electronic
																											typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
																											of Letraset sheets containing Lorem
																											Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
																											including versions of Lorem Ipsum.</p>
																										<p>Lorem Ipsumis simply dummy text of the printing and typesetting
																											industry. Lorem
																											Ipsum has
																											been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
																											galley of type and
																											scrambled it to make a type specimen book. It has survived not only five centuries, but also the
																											leap into electronic
																											typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
																											of Letraset sheets containing Lorem
																											Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
																											including versions of Lorem Ipsum.</p>
																										@php																											
																											$products = App\Product::where('quotes_id','=',$quotes->id)->get();
																											$sum = $products->sum('price');																												
																											$contracts = App\Contract::where('quotes_id','=',$quotes->id)->first();
																										@endphp	

																										<table class="table table-hover">
																											<thead>
																												<tr>
																													<th scope="col">S.No.</th>
																													<th scope="col">Product</th>
																													<th scope="col">Qty</th>
																													<th scope="col">Unit Price</th>
																													<th scope="col">Description</th>
																													<th scope="col">Price</th>
																												</tr>
																											</thead>
																											<tbody>
																												@foreach($products as $key => $products)
																												<tr>
																													<th scope="row">{{ ++$key }}</th>
																													<td>{{ $products->product_name }}</td>
																													<td>{{ $products->qty }}</td>
																													<td>{{ $products->unit_price }}</td>
																													<td>{{ $products->description }}</td>
																													<td>{{ $products->price }}</td>
																												</tr>
																												@endforeach	
																											</tbody>
																											<tr>	
																													<td></td>
																													<td></td>
																													<td></td>
																													<td></td>
																													<td style="font-size: medium">
																														Total:<br>
																													</td>
																													<td style="font-size: medium">
																														<strong>₹{{ $sum }}</strong>
																													</td>
																												</tr>
																										</table>
																										<p>Lorem Ipsumis simply dummy text of the printing and typesetting
																											industry. Lorem
																											Ipsum has
																											been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
																											galley of type and
																											scrambled it to make a type specimen book. It has survived not only five centuries, but also the
																											leap into electronic
																											typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
																											of Letraset sheets containing Lorem
																											Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
																											including versions of Lorem Ipsum.</p>
																									</div><br /> <br />

																									@if($quotes->contract_id != NULL)	 
																									<form action="{{ route('client.sign', $quotes->contract_id) }}" method="POST" enctype="multipart/form-data">
																										@csrf
																										@method('put')																					
																										<div class="modal-info">
																											<div class="row">
																												<div class="col-md-6">	
																													<div class="form-group" style="height:150px">	
																														<label style="color:red; float:left;">Upload Your Signature</label>																																																																																						
																														<input type="file" name="user_sign" class="form-control">																																																												
																													</div>
																												</div>
																												<!-- <div class="col-md-3">	
																												</div>
																												<div class="col-md-3">	
																												</div> -->
																												<div class="col-md-6" style="float:right;">	
																													<div class="form-group">		
																														<label style="color:red;">Photographer Sign</label>	<br />																																																						
																														<img src="{{ asset('upload/'."$contracts->artist_sign") ?? ''}}" width="150" height="150"> 																														
																														
																													</div>
																												</div>
																												<!-- please dont delete this required -->
																												<!-- <div class="col-md-6">
																													<label class=""
																														for="">Signature:</label>
																													<br />
																													<div id="sig"></div>
																													<br><br>
																													<button id="clear"
																														class="btn btn-danger">Clear
																														Signature</button>																								
																													<textarea id="signature" name="user_sign" style="display: none"></textarea>
																												</div> -->
																											</div>
																										</div>

																										<div class="submit-section text-end">
																											<button type="submit" class="btn btn-primary" style="width:100px; height:40px;">Save</button>
																										</div>
																									</form>	
																									@endif																			
																								</div>
																							</div>
																						</div>
																						</div>
																						<!-- /The Modal -->

																			@elseif($quotes->contract_client == 1 and $quotes->contract_artist == 0)
																		       <span class="proposal-delete">You have signed contract</span>
																			@elseif($quotes->contract_client == 1 and $quotes->contract_artist == 1)
																		       <!-- <span class="text-highlight">Artist signed contract</span>  -->
																			   <a href="{{ route('projectcont',$quotes->contract_id) }}" target="_blank" style="text-decoration:none" onmouseover="style='text-decoration:underline'" onmouseout="style='text-decoration:none'" class="proposal-delete">See Contract </a> 																			   																					  
																			   @if($quotes->status == 'Completed')
																			   		|| <a href="{{ route('invoice',$quotes->contract_id) }}" style="text-decoration:none" onmouseover="style='text-decoration:underline'" onmouseout="style='text-decoration:none'" class="proposal-delete">Invoice</a> 
																			   		<!-- <a href="{{ route('invoice',$quotes->contract_id) }}" class="btn-primary projects-btn">Invoice</a>  -->
																			   @endif		
																			@endif   
																	@endif									
																@endif	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="description-proposal">
                                        <h5 class="desc-title">Description</h5>
                                        <p>{{ $quotes->project_details }}</p>
                                    </div>
									<div class="row">
                                        <div class="col-6">
                                            <div class="float-start" style="font-size: 12px;">Posted on: {{ $quotes->created_at->format('d/m/Y') }}</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="float-end" style="font-size: 12px">Last update: {{ $quotes->updated_at->format('d/m/Y') }}</div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        @endforeach
                        @endif


                     


                        <!-- Proposals -->

                    </div>
                    <!-- /Proposals list -->

                    <!-- pagination -->
                    <div class="row">
                        <div class="col-md-12">
                            {{-- <ul class="paginations freelancer">
                                <li><a href="#"> <i class="fas fa-angle-left"></i> Previous</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
                            </ul> --}}

                            {{-- {{ $proposal->links() }} --}}
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
	<!-- <script>
    $("#feedback").show();
	var checkBox =$(".ans").val();
$(".ans").click(function(){
	if (checkBox.checked == 'yes'){
$("#feedback").hide();
	}else{

	}
});
</script> -->
<script type="text/javascript">
   

	$(document).ready(function(){
            $('input[name="ans"]').on('click',function(){
                if($('.ans') == 'yes'){
                    $('#feedback').show();
                }else{
                    $('#feedback').hide();
                }
            });
    });
</script>
@endsection

