<?php $page="pagee";?>
@extends('layout.mainlayout')
@section('content')
<style>
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

	.partner-logo{
		padding: 15px 30px;
	}
	@media only screen and (max-width: 600px) {
	.subscribe {
    padding: 25px 7px 7px 4px;

}
}




</style>


<!-- Home Banner -->
<section class="section home-banner row-middle">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-lg-8">
				<div class="banner-content">
					<div class="rating d-flex">
						<i class="fas fa-star checked"></i>
						<i class="fas fa-star checked"></i>
						<i class="fas fa-star checked"></i>
						<i class="fas fa-star checked"></i>
						<i class="fas fa-star checked"></i>
						<h5>Trused by over 2M+ users</h5>
					</div>

					<h1>Find the perfect <i>freelance</i> <br>services for your business</h1>
					<p>With the world's #1 Developers marketplace</p>
					<form class="form" name="store" id="store" action="project">
						<div class="form-inner">
							<div class="input-group">

								<input type="email" class="form-control" placeholder="Search here">
								<button class="btn btn-primary sub-btn" type="submit">Search Now</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<!-- <div class="banner-img">
								<img src="assets/img/banner-img.png" class="img-fluid" alt="banner">
							</div> -->
			</div>
		</div>
	</div>
</section>
<!-- /Home Banner -->

<section class="section">
	<div class="container">
  <div class="row">
	  <div class="col-md-12 col-lg-12 text-center">
	  <h3 style="color:#D1D1D1;">Trusted by:<span><img class="partner-logo" src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/facebook.31d5f92.png"></span>
	  <span><img class="partner-logo"  src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/google.517da09.png"></span>
	  <!-- <span><img class="partner-logo" src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/netflix.e3ad953.png"></span>
	  <span><img class="partner-logo" src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/pandg.8b7310b.png"></span>
	  <span><img class="partner-logo" src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/paypal.ec56157.png"></span></h3>  -->
	  </div>
  </div>
  </div>
</section>

<!-- Our Feature -->
<section class="section feature section-padding" >
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6" style="padding-right: 11%;">
				<h1>A whole world of freelance talent at your fingertips</h1>

				<ul>
					<li>
						<h3>
							<i class="far fa-check-circle"></i> The best for every budget</h3>
						<p class="tbody-4">Find high-quality services at every price point. No hourly rates, just
							project-based pricing.</p>
					</li>
					<li>
						<h3> <i class="far fa-check-circle"></i> Quality work done quickly</h3>
						<p class="tbody-4">Find the right freelancer to begin working on your project within minutes.
						</p>
					</li>
					<li>
						<h3> <i class="far fa-check-circle"></i> Protected payments, every time</h3>
						<p class="tbody-4">Always know what you'll pay upfront. Your payment isn't released until you
							approve the work.</p>
					</li>
					<li>
						<h3> <i class="far fa-check-circle"></i> 24/7 support</h3>
						<p class="tbody-4">Questions? Our round-the-clock support team is available to help anytime,
							anywhere.</p>
					</li>
				</ul>


			</div>
			<div class="col-md-6 col-lg-6">
				<img class="home-img" src="{{ asset('img/businesslytaa.jpg') }}" width="600">
			</div>
		</div>
	</div>
</section>


<section class="section testimonial-section review  section-padding" style=" padding-top: 60px;">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12 col-12 mx-auto">
				<div class="section-header text-center">
					<div class="section-line"></div>
					<h2 class="header-title">Most Hired Photographer</h2>
					<p>Work with talented people at the most affordable price</p>
				</div>
			</div>
		</div>



		<div class="row">
			<div class="col-md-3">
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
							<span class="verified"><i class="fas fa-check-circle"></i></span>Rahul Naik
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
			<div class="col-md-3">
				<div class="freelance-content">
					<div class="slideshow">
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/fairytale-black-dragon-cliff-mountains-vector-cartoon-fantasy-illustration-spooky-magic-beast-with-wings-red-desert-landscape-with-rocks-night_107791-8768.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200" />
						</div>
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/illustration-weifang-kite-festival-china_107791-1263.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200px" />
						</div>
					</div>
					<div class="freelance-img">
						<a href="#">
							<img src="{{ asset('assets/img/img-03.jpg') }}" alt="User Image">
							<span class="verified"><i class="fas fa-check-circle"></i></span>Rahul Naik
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
							<i class="fas fa-heart"></i>

						</div>
						<div class="col-md-6 ">
							<h5 style="float: right;">₹ 3,400</h5>

						</div>
					</div>


				</div>
			</div>

			<div class="col-md-3">
				<div class="freelance-content">
					<div class="slideshow">
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/set-fire-fighters-male-female-characters-uniform-holding-ladder-water-hose-buckets-axe-group-firemen-team-working-fighting-with-blaze-save-kid-linear-people-vector-illustration_107791-11179.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200" />
						</div>
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/hand-drawn-flat-design-people-waving-illustration_23-2149207429.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200" />
						</div>

					</div>
					<div class="freelance-img">
						<a href="#">
							<img src="{{ asset('assets/img/img-03.jpg') }}" alt="User Image">
							<span class="verified"><i class="fas fa-check-circle"></i></span>Rahul Naik
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
							<i class="fas fa-heart"></i>

						</div>
						<div class="col-md-6 ">
							<h5 style="float: right;">₹ 3,400</h5>

						</div>
					</div>


				</div>
			</div>

			<div class="col-md-3">
				<div class="freelance-content">
					<div class="slideshow">
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/vector-illustration-mountain-landscape_1441-77.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200" />
						</div>
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/cartoon-character-motion-design_52683-6309.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200" />
						</div>
					</div>
					<div class="freelance-img">
						<a href="#">
							<img src="{{ asset('assets/img/img-03.jpg') }}" alt="User Image">
							<span class="verified"><i class="fas fa-check-circle"></i></span>Rahul Naik
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
							<i class="fas fa-heart"></i>

						</div>
						<div class="col-md-6 ">
							<h5 style="float: right;">₹ 3,400</h5>

						</div>
					</div>


				</div>
			</div>




		</div>

	</div>
</section>
<!-- /Our Feature -->

<section class="section testimonial-section review  section-padding" >
	<div class="container">
		<div class="row" style="padding-bottom: 33px;">
			<div class="col-12">
				<div class="section-header text-left">
					<!-- <div class="section-line"></div> -->
					<h2 class="header-title">Explore the marketplace</h2>

				</div>
			</div>
		</div>



		<div class="row">
			<div class="col-md-3 text-center">
				<img src="https://i.ibb.co/DM90s0k/graphics-design-d32a2f8-svg.png">
				<h4>Graphics & Design</h4>
			</div>
			<div class="col-md-3 text-center">
				<img src="https://i.ibb.co/DM90s0k/graphics-design-d32a2f8-svg.png">
				<h4>Graphics & Design</h4>
			</div>
			<div class="col-md-3 text-center">
				<img src="https://i.ibb.co/DM90s0k/graphics-design-d32a2f8-svg.png">
				<h4>Graphics & Design</h4>
			</div>
			<div class="col-md-3 text-center">
				<img src="https://i.ibb.co/DM90s0k/graphics-design-d32a2f8-svg.png">
				<h4>Graphics & Design</h4>
			</div>

		</div>
		<br>
		<br>

		<div class="row">
			<div class="col-md-3 text-center">
				<img src="https://i.ibb.co/DM90s0k/graphics-design-d32a2f8-svg.png">
				<h4>Graphics & Design</h4>
			</div>
			<div class="col-md-3 text-center">
				<img src="https://i.ibb.co/DM90s0k/graphics-design-d32a2f8-svg.png">
				<h4>Graphics & Design</h4>
			</div>
			<div class="col-md-3 text-center">
				<img src="https://i.ibb.co/DM90s0k/graphics-design-d32a2f8-svg.png">
				<h4>Graphics & Design</h4>
			</div>
			<div class="col-md-3 text-center">
				<img src="https://i.ibb.co/DM90s0k/graphics-design-d32a2f8-svg.png">
				<h4>Graphics & Design</h4>
			</div>
		</div>

	</div>
</section>




<!-- Subscribe -->
<section class="section subscribe">
	<div class="container">
		<div class="row ">
			<div class="col-md-6" style="padding-right:7% ;">
				<h4 style="color:#fff;">LYTAA Business <span
						class="fmFFGHM text-upper nsPGwjV rv+rROO RGte4qL h18IWLb">New</span></h4>
				<h3>A business solution designed for teams</h3>
				<p>Upgrade to a curated experience packed with tools and benefits, dedicated to businesses</p>
				<ul>
					<li class="li-business">
						<p class="tbody-4"><i class="far fa-check-circle"></i> Connect to freelancers with proven
							business experience</p>
					</li>
					<li class="li-business">

						<p class="tbody-4"><i class="far fa-check-circle"></i> Get matched with the perfect talent by a
							customer success manager
						</p>
					</li>
					<li class="li-business">

						<p class="tbody-4"><i class="far fa-check-circle"></i> Manage teamwork and boost productivity
							with one powerful workspace</p>
					</li>

				</ul>
				<button class="btn  btn-expoler">Expoler LYTAA Business</button>

			</div>
			<div class="col-md-6">
				<img  class="home-img" src="{{ asset('img/businesslytaa.png') }}" width="600">

			</div>

		</div>
</section>
<!-- End Subscribe -->

<section class="section testimonial-section review section-padding" style=" padding-top: 60px;">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12 col-12 mx-auto">
				<div class="section-header text-center">
					<div class="section-line"></div>
					<h2 class="header-title">Most Hired Photographer</h2>
					<p>Work with talented people at the most affordable price</p>
				</div>
			</div>
		</div>



		<div class="row">
			<div class="col-md-3">
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
							<span class="verified"><i class="fas fa-check-circle"></i></span>Rahul Naik
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
			<div class="col-md-3">
				<div class="freelance-content">
					<div class="slideshow">
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/fairytale-black-dragon-cliff-mountains-vector-cartoon-fantasy-illustration-spooky-magic-beast-with-wings-red-desert-landscape-with-rocks-night_107791-8768.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200" />
						</div>
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/illustration-weifang-kite-festival-china_107791-1263.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200px" />
						</div>
					</div>
					<div class="freelance-img">
						<a href="#">
							<img src="{{ asset('assets/img/img-03.jpg') }}" alt="User Image">
							<span class="verified"><i class="fas fa-check-circle"></i></span>Rahul Naik
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
							<i class="fas fa-heart"></i>

						</div>
						<div class="col-md-6 ">
							<h5 style="float: right;">₹ 3,400</h5>

						</div>
					</div>


				</div>
			</div>

			<div class="col-md-3">
				<div class="freelance-content">
					<div class="slideshow">
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/set-fire-fighters-male-female-characters-uniform-holding-ladder-water-hose-buckets-axe-group-firemen-team-working-fighting-with-blaze-save-kid-linear-people-vector-illustration_107791-11179.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200" />
						</div>
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/hand-drawn-flat-design-people-waving-illustration_23-2149207429.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200" />
						</div>

					</div>
					<div class="freelance-img">
						<a href="#">
							<img src="{{ asset('assets/img/img-03.jpg') }}" alt="User Image">
							<span class="verified"><i class="fas fa-check-circle"></i></span>Rahul Naik
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
							<i class="fas fa-heart"></i>

						</div>
						<div class="col-md-6 ">
							<h5 style="float: right;">₹ 3,400</h5>

						</div>
					</div>


				</div>
			</div>

			<div class="col-md-3">
				<div class="freelance-content">
					<div class="slideshow">
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/vector-illustration-mountain-landscape_1441-77.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200" />
						</div>
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/cartoon-character-motion-design_52683-6309.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200" />
						</div>
					</div>
					<div class="freelance-img">
						<a href="#">
							<img src="{{ asset('assets/img/img-03.jpg') }}" alt="User Image">
							<span class="verified"><i class="fas fa-check-circle"></i></span>Rahul Naik
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
							<i class="fas fa-heart"></i>

						</div>
						<div class="col-md-6 ">
							<h5 style="float: right;">₹ 3,400</h5>

						</div>
					</div>


				</div>
			</div>




		</div>

	</div>
</section>


<!-- Review -->
<!-- Subscribe -->
<div class="container" style="padding:40px 0">
	<section class="section banner-home">
		<div class="container">
			<div class="row ">
				<div class="col-md-6" style="padding-left:7% ;">
					<h2 style="color:#fff;">LYTAA logo Maker</h2>
					<h2 style="color:#fff;">Make an incredible logo <br>
						<i>in minutes</i></h2>
					<p>Pre-designed by top talent. Just add your touch.</p>
					<button class="btn btn-banner" style="margin-top:27px;">Try Fiverr Logo Maker</button>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- End Subscribe -->


</div>
<!-- /Main Wrapper -->
@endsection