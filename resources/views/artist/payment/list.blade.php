<?php $page="payment_list";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						
						<!-- sidebar -->
					             @include('artist.sidebar')

						<!-- /sidebar -->
						
						<div class="col-xl-9 col-md-8">
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="payment">Deposit Funds</a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link active" href="payment_list">Transaction History</a>
									</li>
								</ul>
							</nav>
							<div class="transaction-table card">
								<div class="card-header">
									<div class="row justify-content-between align-items-center">
										<div class="col">
											<h5 class="card-title">All Invoices</h5>
										</div>
								
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive table-box">
										<!-- <table class="table"> -->
										<!-- <table class="table table-center table-hover datatable"> -->
										<table class="table table-center table-hover mb-0 datatable">
											<thead>
												<tr class="thead-pink">
													<th>Invoice Number</th>																							
													<th>Coins</th>	
													<th>Description</th>																							
													<th>Paid On</th>
													<th>Paid At (Hrs)</th>
												</tr>
											</thead>
											<tbody>
											@foreach($trans as $trans)
												<tr>
													<td><a href="">IN_LT-{{ $trans->id }}</a></td>			
													<td><span class="badge bg-success-light">{{ $trans->coins }}</span></td>
													<td>{{ $trans->description }}</td>		
													<td>{{ date("d-m-Y", strtotime( $trans->created_at) ) }}</td>		
													<td>{{ date("H:i:s", strtotime( $trans->created_at) ) }}</td>											
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
			</div>	
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection