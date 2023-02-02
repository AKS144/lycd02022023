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
								<h3>Manage Your Estimate</h3>
							</div>											
							

							<div class="container" style="margin-top:50px;">
								<div class="row">
								        <input type="hidden" id="user_id" name="user_id" class="form-control" value="{{ $quotes->user_id }}">
										<input type="hidden" id="artist_id" name="artist_id" class="form-control" value="{{ $quotes->artist_id }}">
										<input type="hidden" id="quotes_id" name="quotes_id" class="form-control" value="{{ $quotes->id }}">
										<input type="hidden" id="contract_id" name="contract_id" class="form-control" value="{{ $quotes->contract_id }}">
									<div class="col-md-2">
										<label for="">Product Name</label>
										<input type="text" placeholder="Enter task" class="form-control form-control-sm" name="product_name"
											id="product_name" value="">
										<font style="color:red"> {{ $errors->has('product_name') ? $errors->first('product_name') : '' }} </font>
									</div>
									<div class="col-md-2">
										<label for="">Description</label>
										<input type="text" placeholder="Enter description" class="form-control form-control-sm"
											name="description" id="description" value="">
										<font style="color:red"> {{ $errors->has('description') ? $errors->first('description') : '' }} </font>
									</div>
									<div class="col-md-2">
										<label for="">Qty</label>
										<input type="number" placeholder="1" class="form-control form-control-sm" min="1" name="qty"
											id="qty" value="1">
										<font style="color:red"> {{ $errors->has('qty') ? $errors->first('qty') : '' }} </font>
									</div>
									<div class="col-md-2">
										<label for="">Price</label>
										<input type="number" placeholder="Enter price" class="form-control form-control-sm" name="unit_price"
											id="unit_price" value="">
										<font style="color:red"> {{ $errors->has('unit_price') ? $errors->first('unit_price') : '' }} </font>
									</div>
									<div class="col-md-2">
										<label for="">Total</label>
										<input type="number" placeholder="" class="form-control form-control-sm" name="price"
											id="price" value="">
										<font style="color:red"> {{ $errors->has('price') ? $errors->first('price') : '' }} </font>
									</div>
							
									<div class="col-md-2" style="margin-top:33px;">
										<button id="addMore" style="border-radius:0.3rem;" class="btn btn-outline-danger">Add More</button>
									</div>
								</div>
								<div class="row" style="margin-top:26px;">
									<div class="col-md-5">
										<form action="{{ route('addproduct') }}" method="post">
											@csrf
											<table class="table table-sm table-bordered" style="display: none; border: none;">
												<thead>
													<tr>
														<th>Name</th>
														<th>Description</th>
														<th>Qty</th>
														<th>Cost</th>
														<th>Total</th>                                
														<th>Action</th>
													</tr>
												</thead>

												<tbody id="addRow" class="addRow">
												</tbody>
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td colspan="1" class="text-right">
															<strong>SubTotal:</strong>
														</td>
														<td>
															<input style="border: 0px;" type="number" id="estimated_ammount"
																class="estimated_ammount" value="0" readonly>
														</td>
													</tr>
												</tbody>

											</table>
											<button type="submit" style="border-radius:0.3rem; font-size: 14px;" class="btn btn-outline-success">Submit</button>
										</form>

									</div>
								</div>

							</div>


							    <script id="document-template" type="text/x-handlebars-template">
									<tr class="delete_add_more_item" id="delete_add_more_item">
										<td>
											<input style="border: 0px;" type="text" name="product_name[]" value="@{{ product_name }}" readonly>
										</td>
										<td>
											<input style="border: 0px;" type="text" class="description" name="description[]" value="@{{ description }}" readonly>
										</td>
										<td>
											<input style="border: 0px;" id="qty" type="number" class="qty" name="qty[]" value="@{{ qty }}" readonly>
										</td>   
										<input type="hidden" id="user_id" name="user_id[]" class="form-control" value="@{{ user_id }}">
										<input type="hidden" id="artist_id" name="artist_id[]" class="form-control" value="@{{ artist_id }}">
										<input type="hidden" id="quotes_id" name="quotes_id[]" class="form-control" value="@{{ quotes_id }}">
										<input type="hidden" id="contract_id" name="contract_id[]" class="form-control" value="@{{ contract_id }}">
										<td>
											<input style="border: 0px;" id="unit_price" type="number" class="unit_price" name="unit_price[]" value="@{{ unit_price }}" readonly>
										</td>  
										<td>
											<input style="border: 0px;" id="price" type="number" class="price" name="price[]" value="@{{ price }}" readonly>
										</td>              
										<td>
											<i class="removeaddmore" style="cursor:pointer;color:red;" >Remove</i>            
										</td>
									</tr>
								</script>
								<br /><br />
								
							<!-- Overview -->
							@if($products->count() > 0)
							<div class="pro-post widget-box">								
								
								<div class="pro-head p-0 pb-4">
									<h3 class="mb-0">Invoice List</h3>
								
								
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
																														
																																<input type="hidden" id="price" name="artist_id" class="form-control" value="{{ $quotes->artist_id }}">
																																<input type="hidden" id="user_id" name="user_id" class="form-control" value="{{ $quotes->user_id }}">
																																<input type="hidden" id="quotes_id" name="quotes_id" class="form-control" value="{{ $quotes->id }}">

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
																															Total:<br>																				
																														</td>
																														<td style="font-size: medium">																					
																															<strong>₹{{ $total }}</strong>
																														</td>		
																														<td></td>
																																															
																													</tr>
																												
																													<tr>
																														<td></td>
																														<td></td>																				
																														<td></td>
																														<td></td>
																														<td></td>
																														
																														<td style="font-size: medium">	<br />
																														@if($quotes->invoice == 0)																				
																															<a href="{{ route('proposal.estimate', ['id' => $quotes->id, 'status' => 3]) }}" style="padding: 0.375rem 0.75rem; line-height: 1.2;" class="btn btn-outline-info">Send Estimate</a>         
																														@else
																															<span class="text-highlight">Estimate sent to client</span> 
																														@endif 
																														</td>																			
																													</tr>                                                                      
																												</tbody>
																											</table>
																										</div>
																									</div>
							</div>
							@endif
							<!-- /Overview -->				
                                                                         
                                               
						</div>							
					</div>
				</div>
			</div>				
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->

		<script id="document-template" type="text/x-handlebars-template">
  		<tr class="delete_add_more_item" id="delete_add_more_item">

      <td>
        <input type="text" name="task_name[]" id="task_name" value="@{{ task_name }}">
      </td>
      <td>
        <input type="number" class="cost" id="cost" name="cost[]" value="@{{ cost }}">
      </td>
  
      <td>
       <!-- <i class="removeaddmore" style="cursor:pointer;color:red;">Remove</i> -->
	   <i class="icon-remove removeaddmore"></i>
      </td>

  </tr>
 </script>
@endsection

