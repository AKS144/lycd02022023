<?php $page = "payment"; ?>
@extends('layout.mainlayout')
@section('content')

<style>
	.wallet,
	.payment-process {
		padding: 30px;
		background: #fff;
		box-shadow: 0px 4px 14px rgb(198 198 198 / 0%);
		border-radius: 0px 0px 10px 10px;
	}
</style>

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
							<a class="nav-link active" href="payment">Deposit Funds</a>
						</li>
						<!-- <li class="nav-item">
										<a class="nav-link" href="withdraw-money">Withdraw Money</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="payment_list">Transaction History</a>
						</li>
					</ul>
				</nav>

				<div class="row">
					<div class="success-message">
					</div>
					<div class="alert alert-success alert-dismissible fade show" role="alert">

						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="payment-list wallet card-body">
							<h3>Add Photons</h3>
							<div class="form-group profile-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<button class="btn dol-btn">₹</button>
									</div>
									<input name="amount" type="text" class="form-control amount">
								</div><br>
								<div class="row">
									<div class="col-md-4">
										<button type="submit" id="rzp-button1" class="btn btn-primary click-btn btn-plan">Pay</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="card">
							<div class="wallet-detail card-body">
								<div class="wallet-title pt-0 ps-0">
									<h3 class="mb-0">Photons</h3>
								</div>
								<div class="wallet-bal">
									<span class="dol-circle">₹</span>
									<div class="wallet-amt">
										<p>Available Balance</p>
										<h3 class="mb-0">{{ $wallet->amount ?? '' }}</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-12">
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