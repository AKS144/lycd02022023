<?php $page="membership";?>
@extends('layout.mainlayout')
@section('content')

<style>

.current-btn {
    background: #F79533;
    border: 1px solid #F79533;
    border-radius: 5px;
    font-weight: 500;
    color: #fff;
    padding: 12px 20px;
}
</style>
<!-- Page Content -->
<div class="content">
	<div class="container-fluid">
		<div class="row">

			<!-- sidebar -->
			@include('artist.sidebar')

			<!-- /sidebar -->

			<div class="col-xl-9 col-md-8 mx-auto">
				<div class="freelance-title" id="plan">
					<h3>Employer Packages</h3>
					<p> Choose the best pricing that suites your requirements</p>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="package-detail">
							<h4>{{ $packone->name }}</h4>
							<p>{{ $packone->message }}</p>
							<h3 class="package-price">₹{{ $packone->amount }}</h3>
							<input type="hidden" name="amount" class="form-control amount rzp_platinum"
								placeholder="Enter Amount" value="1000">
							<div class="package-feature">
								<ul>
									<li>{{ $packone->genre1 }} Genre {{ $packone->pics1 }} Pictures each</li>
									<li>{{ $packone->genre2 }} Genre {{ $packone->pics2 }} Pictures each</li>
									<li>{{ $packone->coins }} Coins in wallet</li>
									<li>{{ $packone->duration }} Subscription</li>		
								</ul>
							</div>
							
							@if($user->package == 1)							
								<a class="btn btn-primary current-btn btn-block">Current Plan</a>
							@else
								<a href="#" class="btn btn-primary price-btn btn-block" id="rzp_platinum">Upgrade Plan</a>
							@endif	
						</div>
					</div>

					<div class="col-lg-4">
						<div class="package-detail">
							<h4>{{ $packtwo->name }}</h4>
							<p>{{ $packtwo->message }}</p>
							<h3 class="package-price">₹{{ $packtwo->amount }}</h3>
							<input type="hidden" name="amount" class="form-control package rzp_sliver"
								placeholder="Enter Amount" value="2000">
							<div class="package-feature">
								<ul>
								<li>{{ $packtwo->genre1 }} Genre {{ $packtwo->pics1 }} Pictures each</li>
									<li>{{ $packtwo->genre2 }} Genre {{ $packtwo->pics2 }} Pictures each</li>
									<li>{{ $packtwo->coins }} Coins in wallet</li>
									<li>{{ $packtwo->duration }} Subscription</li>	
								</ul>
							</div>
							<!-- @if($user->exp_date < now())
								<a href="#" class="btn btn-primary price-btn btn-block" id="rzp_sliver">Select Plan</a>
							@endif -->

							@if($user->exp_date < now())	
								<a href="#" class="btn btn-primary price-btn btn-block" id="rzp_sliver">Select Plan</a>
							@elseif($user->package == 2)							
								<a class="btn btn-primary current-btn btn-block">Current Plan</a>
							@else
								<a href="#" class="btn btn-primary price-btn btn-block" id="rzp_sliver">Upgrade Plan</a>
							@endif	
							
						</div>
					</div>

					<div class="col-lg-4">
						<div class="package-detail">
							<h4>{{ $packthree->name }}</h4>
							<p>{{ $packthree->message }}</p>
							<h3 class="package-price">₹{{ $packthree->amount }}</h3>
							<input type="hidden" name="amount" class="form-control package rzp_gold"
								placeholder="Enter Amount" value="3000">
							<div class="package-feature">
								<ul>
								<li>{{ $packthree->genre1 }} Genre {{ $packthree->pics1 }} Pictures each</li>
								<li>{{ $packthree->genre2 }} Genre {{ $packthree->pics2 }} Pictures each</li>
								<li>{{ $packthree->coins }} Coins in wallet</li>
								<li>{{ $packthree->duration }} Subscription</li>	
								</ul>
							</div>
							<!-- @if($user->exp_date < now())
								<a href="#" class="btn btn-primary price-btn btn-block" id="rzp_gold">Select Plan</a>
							@endif -->
							@if($user->exp_date < now())	
								<a href="#" class="btn btn-primary price-btn btn-block" id="rzp_gold">Select Plan</a>
							@elseif($user->package == 3)							
								<a class="btn btn-primary current-btn btn-block">Current Plan</a>
							@else
								<a href="#" class="btn btn-primary price-btn btn-block" id="rzp_gold">Upgrade Plan</a>
							@endif	
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="member-plan pro-box">
							<div class="pro-head">
								<h2><i class="fa fa-check-circle orange-text" aria-hidden="true"></i> Plan Details</h2>
							</div>
							<div class="pro-body member-detail">
								<div class="row">
									<div class="col-6">
										<h4 class="mb-0">{{ $package->name }}</h4>
										<div class="yr-amt">Anually Price </div>
										<div class="expiry-on">Expiry On</div>
										<div class="expiry">{{ date('d-m-Y', strtotime($user->exp_date)) }}</div>										
									</div>
									<div class="col-6 change-plan">
										<h3>₹{{ $package->amount }}</h3>
										<div class="yr-duration">Duration: One Year</div>
										<!-- <a href="#plan" class="btn btn-primary btn-plan black-btn " >Change Plan</a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Statement</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive table-box">
									<table class="table table-center table-hover datatable">
										<thead class="thead-pink">
											<tr>
												<th>Purchased Date</th>
												<th>Details</th>
												<th>Expiry Date</th>
												<th>Type</th>
												<th>Status</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>15 July 2021</td>
												<td>
													<p class="mb-0">The Unlimita</p>
													<a href="#" class="read-text">Invoice : IVIP12023598</a>
												</td>
												<td>15th July 2022</td>
												<td>Yearly</td>
												<td class="text-danger">Inactive</td>
												<td>$200.00</td>
											</tr>
											<tr>
												<td>15 July 2022</td>
												<td>
													<p class="mb-0">The Unlimita</p>
													<a href="#" class="read-text">Invoice : IVIP12023598</a>
												</td>
												<td>15th July 2023</td>
												<td>Yearly</td>
												<td class="text-success">Active</td>
												<td>$200.00</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="text-end mt-3">
									<ul class="paginations">
										<li><a href="#"> <i class="fas fa-angle-left"></i> Previous</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#" class="active">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>

<!-- /Page Content -->


</div>
<!-- /Main Wrapper -->
@endsection