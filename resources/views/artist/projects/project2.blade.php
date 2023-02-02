<?php $page="freelancer-project-proposals";?>
@extends('layout.mainlayout')
@section('content')		

<style>
	.custom-modal .modal-body {
    padding: 2rem;
    text-align: center;
}
</style>
<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						
						@include('artist.sidebar')

						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<h3>Manage Projects</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="freelancer-view-project-detail">Overview </a>
									</li>							
								</ul>
							</nav>
							
							<!-- project list -->
							<div class="my-projects">
								<div class="row">
									<div class="col-lg-9 d-flex">
										<div class="pro-post w-100">
											<div class="card-body">
												<div class="projects-list">
													<h2>{{$contract->id}}</h2>
													<ul class="prolist-details">
														<li>
															<div class="list-slot">
																<h5>Client Final Price</h5>
																<p class="price">₹{{ $contract->final_price }}/-</p>
																
															</div>
														</li>
														<li>
															<div class="list-slot">
																<h5>Job Type</h5>
																<p class="red-text">Hourly</p>
															</div>
														</li>
														<li>
															<div class="list-slot">
																<h5>Location</h5>
																<p> {{ $contract->address }}</p>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>										
									<div class="col-lg-3 mb-3 d-flex flex-wrap">
										<div class="pro-post mb-3 w-100">
											<div class="card-body">
												<div class="hire-box text-center">
												<img alt="profile image" src="https://lytaa.com/public//assets/img/avatar-artist.jpg" class="avatar-lg rounded-circle"><br>
													<h6>Hired By</h6>
													{{-- <img alt="profile image" src="assets/img/img-04.jpg" class="avatar-lg rounded-circle"> --}}
													<p>{{ $contract->user_name }}</p>
													<p>{{ $contract->email }}</p>
													{{-- <a href="freelancer-chats" class="btn btn-chat">Chat Now</a> --}}
												</div>
											</div>
										</div>
															
											<div class="hire-select w-100">
											<input type="hidden" id="hid" value="{{$contract->id}}">
												<select class="form-control select" id="status" name="status">
												    <option>Select value</option>
													<option {{ $contract->status == '1' ? 'selected' : '' }} value="1">Ongoing</option>
													<option {{ $contract->status == '2' ? 'selected' : '' }} value="2">Completed</option>													
													<option {{ $contract->status == '3' ? 'selected' : '' }} value="3">Canceled</option>
												</select>
											</div>
									
									</div>
								</div>
							</div>
							<!-- /project list -->
								
							<!-- Overview -->
							<div class="pro-post widget-box">								
								{{-- <h3 class="pro-title">Overview</h3>
								<a class="btn btn-primary back-btn br-0" data-bs-toggle="modal" href="#portfolio">+ Products</a> --}}
								<div class="pro-head p-0 pb-4">
									<h3 class="mb-0">Invoice List</h3>								
									<!-- <a class="btn btn-primary back-btn br-0" data-bs-toggle="modal" href="#portfolio">
									<i class="fa fa-plus" aria-hidden="true"></i></a> -->
									<!-- The Modal -->
										<div class="modal fade" id="portfolio">
											<div class="modal-dialog modal-dialog-centered modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<h4>Add Portfolio</h4>
														<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
													</div>
													<div class="modal-body">																				
														<form method="POST" action="{{ route('addproduct') }}">
														@csrf
																								
															<div class="modal-info">
																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group">
																		<label for="name">Product name</label>
																			<input type="text" id="product_name" name="product_name" class="form-control" value="" required>
																		</div>
																		<div class="form-group">
																		<label for="name">Unit Price</label>
																			<input type="text" id="unit_price" name="unit_price" class="form-control" value="" required>
																		</div>
																	
																			<input type="hidden" id="price" name="artist_id" class="form-control" value="{{ $contract->artist_id }}">
																			<input type="hidden" id="user_id" name="user_id" class="form-control" value="{{ $contract->user_id }}">
																			<input type="hidden" id="contract_id" name="contract_id" class="form-control" value="{{ $contract->id }}">

																		<div class="form-group">
																		<label for="name">Qunatity</label>
																			<input type="number" id="qty" name="qty" min="0" max="10" class="form-control" value="" required>
																		</div>
																		<div class="form-group">
																		<label for="name">Description</label>
																			<input type="text" id="description" name="description" class="form-control" value="" required>
																		</div>
																		
																	</div>
																</div>
															</div>
															<div class="submit-section text-right">
																<a data-bs-dismiss="modal" class="btn btn-primary black-btn submit-btn">Cancel</a>
																<button type="submit" class="btn btn-primary submit-btn">Submit</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
										
										<!-- The Modal -->
											</div>
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
																				<th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
																			@foreach($products as $products)
																				<tr>
																					<td>{{ $products->product_name }}</td>
																					<td>{{ $products->unit_price}}</td>
																					<td>{{ $products->qty}}</td>
																					<td>{{ $products->description}}</td>  
																					<td>{{ $products->price}}</td>   
																					<td>
																						{{-- <a href="{{ route('editproduct', $products->id) }}" class="btn btn-sm btn-info">Edit</a> --}}
																						{{-- <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-sm btn-danger">Edit</a> --}}
																						<!-- The Modal -->
																						<a class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" href="#portfolio" data-bs-target="#edit-product{{ $products->id }}">
																						<i class="fas fa-edit"></i></a>
																							<div class="modal fade" id="edit-product{{ $products->id }}">
																								<div class="modal-dialog modal-dialog-centered modal-lg">
																									<div class="modal-content">
																										<div class="modal-header">
																											<h4>Add Portfolio</h4>
																											<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></a></span>
																										</div>
																										<div class="modal-body">																				
																											<form action="{{ route('editproduct',$products->id) }}" method="POST">
																											@csrf
																											@method('put')
																																					
																												<div class="modal-info">
																													<div class="row">
																														<div class="col-md-12">
																															<div class="form-group">
																															<label for="name">Product name</label>
																																<input type="text" id="product_name" name="product_name" class="form-control" value="{{ $products->product_name }}" required>
																															</div>
																															<div class="form-group">
																															<label for="name">Unit Price</label>
																																<input type="text" id="unit_price" name="unit_price" class="form-control" value="{{ $products->unit_price }}" required>
																															</div>
																														
																																<input type="hidden" id="price" name="artist_id" class="form-control" value="{{ $contract->artist_id }}">
																																<input type="hidden" id="user_id" name="user_id" class="form-control" value="{{ $contract->user_id }}">
																																<input type="hidden" id="contract_id" name="contract_id" class="form-control" value="{{ $contract->id }}">

																															<div class="form-group">
																															<label for="name">Qunatity</label>
																																<input type="number" id="qty" name="qty" min="0" max="10" class="form-control" value="{{ $products->qty }}" required>
																															</div>
																															<div class="form-group">
																															<label for="name">Description</label>
																																<input type="text" id="description" name="description" class="form-control" value="{{ $products->description }}" required>
																															</div>
																															
																														</div>
																													</div>
																												</div>
																												<div class="submit-section text-right">
																													<a data-bs-dismiss="modal" class="btn btn-primary black-btn submit-btn">Cancel</a>
																													<button type="submit" class="btn btn-primary submit-btn">Submit</button>
																												</div>
																											</form>
																										</div>
																									</div>
																								</div>
																							</div>
																							
																							<!-- The Modal -->
																				
																						
													<a class="btn btn-sm btn-danger me-2" data-bs-toggle="modal" href="#portfolio" data-bs-target="#delete_category{{ $products->id }}">
													<i class="far fa-trash-alt"></i></a>
																																			
																																			
														<!-- Delete Modal -->
														<div class="modal custom-modal fade" id="delete_category{{ $products->id }}" role="dialog">
																				<div class="modal-dialog modal-dialog-centered">
																					<div class="modal-content">
																						<div class="modal-body">
																							<div class="form-header">
																								<h3>Delete</h3>
																								<p>Are you sure want to delete?</p>
																							</div>
																							<div class="modal-btn delete-action">
																							<form method="POST" action="{{route('deleteproduct', $products->id)}}">
																							@csrf
																							{{method_field('DELETE')}}
																								<div class="row">
																									<div class="col-6">
																									<button type="submit" class="btn btn-primary continue-btn">Delete</button>
																									</div>
								                                                                  </form>
																									<div class="col-6">
																										<a href="javascript:void(0);" data-bs-dismiss="modal"
																											class="btn btn-primary continue-btn">Cancel</a>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- /Delete Modal -->
																					</td>                                                                       
																				</tr>
																			@endforeach                                                                           
                                                                            {{-- <a href="" target="_blank" class="btn btn-sm btn-info">Add Item</a> --}}
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
							<!-- /Overview -->							
												
						</div>							
					</div>
				</div>
			</div>				
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->

		 <!-- Script -->
		 <script type='text/javascript'>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $(document).ready(function() {

            // Fetch records
            fetchRecords();

            // Add record
            $('#adduser').click(function() {

                var username = $('#username').val();
                var name = $('#name').val();
                var email = $('#email').val();

                if (username != '' && name != '' && email != '') {
                    $.ajax({
                        //url: 'addUser',
                        url:"{{ url('addUser') }}",
                        type: 'POST',
                        data: {
                            _token: CSRF_TOKEN,
                            username: username,
                            name: name,
                            email: email
                        },
                        success: function(response) {
                            if (response > 0) {
                                var id = response;
                                var findnorecord = $('#userTable tr.norecord').length;

                                if (findnorecord > 0) {
                                    $('#userTable tr.norecord').remove();
                                }
                                var tr_str = "<tr>" +
                                    "<td align='center'><input type='text' value='" + username +
                                    "' id='username_" + id + "' disabled ></td>" +
                                    "<td align='center'><input type='text' value='" + name +
                                    "' id='name_" + id + "'></td>" +
                                    "<td align='center'><input type='email' value='" + email +
                                    "' id='email_" + id + "'></td>" +
                                    "<td align='center'><input type='button' value='Update' class='update' data-id='" +
                                    id +
                                    "' ><input type='button' value='Delete' class='delete' data-id='" +
                                    id + "' ></td>" +
                                    "</tr>";

                                $("#userTable tbody").append(tr_str);
                            } else if (response == 0) {
                                alert('Username already in use.');
                            } else {
                                alert(response);
                            }

                            // Empty the input fields
                            $('#username').val('');
                            $('#name').val('');
                            $('#email').val('');
                        }
                    });
                } else {
                    alert('Fill all fields');
                }
            });

        });


    </script>
@endsection