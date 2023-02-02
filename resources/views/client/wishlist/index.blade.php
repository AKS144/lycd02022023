<?php $page="blank-page";?>
@extends('layout.mainlayout')
@section('content')
<style>
	ol,
	ul {
		list-style: none;
		list-style-image: none;
		margin: 0;
		padding: 0;
	}

	p.tbody-4 {
		font-size: 18px;
	}

	.fmFFGHM.RGte4qL.rv\+rROO {
		background: red;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		display: -webkit-inline-box;
		display: -ms-inline-flexbox;
		display: inline-flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
		padding: 3px 7px 2px;
		border-width: 0px;
		border-style: solid;
		text-decoration: none;
		text-align: center;
		color: #fff;
		font-size: 10px;
		font-weight: 700;
		border-radius: 9px;
		line-height: 100%;
	}

	.li-business {
		margin-bottom: -21px;
	}

	.subscribe {
		padding: 55px 77px 47px 64px;

	}

	.btn-expoler {
		background-color: #ffffff;
		border: 1px solid #FF5B37;
		color: #ff5b37;
		margin-top: 30px;
	}

	.btn-banner {
		background-color: #ffffff;
		border: 1px solid #446ee7;
		color: #446ee7;
		margin-top: 60px;
	}

	.freelance-img img {
		margin: auto;
		width: 40px;
		height: 40px;
		border-radius: 50%;
	}

	.freelance-img {
		position: relative;
		width: 120px;
		height: 56px;
		margin: -25px 0 0;
	}

	.freelance-img .verified {
		background-color: #fff;
		color: #38B653;
		font-size: 12px;
		position: absolute;
		right: 80px;
		bottom: 14px;
		border-radius: 100%;
		z-index: 2;
		width: 15px;
		height: 17px;
		display: flex;
		justify-content: center;
		align-items: center;
		text-align: center;
	}

	.slick-dots {
		display: none !important;
	}

	.banner-home {
		background: #446ee7;
		padding: 56px 5px;
		position: relative;
		color: #fff;
		background-image: url('https://fiverr-res.cloudinary.com/q_auto,f_auto,w_1160,dpr_1.0/v1/attachments/generic_asset/asset/b49b1963f5f9008f5ff88bd449ec18f7-1608035772453/logo-maker-banner-wide-desktop-1352-2x.png');
		background-repeat: no-repeat;
		background-position: top;
	}

	.partner-logo {
		padding: 15px 30px;
	}

	.slick-prev {
		left: auto;
		z-index: 1;
		right: auto;
		top: 81px;
		border-radius: 16px;
	}

	.slick-next {
		right: -1px;
		top: 82px;
		border-radius: 16px;
	}
</style>

<!-- Breadcrumb -->
<!-- <div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Wishlist</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Wishlist</h2>
						</div>
					</div>
				</div>
			</div> -->
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
	<div class="container">

		<div class="row">
			<h2 class="breadcrumb-title">Wishlist</h2>
			@if(Auth::user()->wishlist->count())

				@foreach($wishlists as $wishlist)
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="freelance-content">
						<div class="slideshow">
							<div class="slide">
								<img src="https://img.freepik.com/free-vector/vector-illustration-concept-ecological-clean-planet-against-pollution-environmental_1284-48023.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
									alt="" width="100%" height="200" />
							</div>
							<div class="slide">
								<img src="https://img.freepik.com/free-vector/environmental-protection-flat-set-two-compositions-with-polluted-factory-scenery-vs-clean-eco-city_1284-62776.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
									alt="" width="100%" height="200px" />
							</div>

						</div>
						<div class="freelance-img">
							<a href="#">
								<img src="{{ asset('assets/img/img-03.jpg') }}" alt="User Image">
								<a
									href="{{ route('jobs.show', $jobapply->id) }}">{{ $jobapply->name }}</a>

							</a>
						</div>
						<div class="freelance-info">
							I will make custom graphics for your blog, website and more<BR>

						</div>
						<div class="rating">
							<i class="fas fa-star filled"></i>
							<i class="fas fa-star filled"></i>
							<i class="fas fa-star filled"></i>
							<i class="fas fa-star filled"></i>
							<i class="fas fa-star"></i>
							<span class="average-rating">5.0 (4)</span>
						</div>
						<div class="row ">
							<div class="col-md-6 ">
								<i class="fas fa-heart">
								</i>

							</div>
							<div class="col-md-6 ">
								<h5 style="float: right;">₹ 3,400</h5>
							</div>
						</div>


					</div>
				</div>
				@endforeach
												@endif




		</div>
	</div>
</div>
<!-- /Page Content -->


</div>
<!-- /Main Wrapper -->
@endsection