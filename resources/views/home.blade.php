<?php $page="pagee";?>
@extends('layout.mainlayout')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/slider.scss')}}">


<style>
	  i.fa-heart:hover {
        cursor: help;
        position: relative;
      }
	i .heart{
		display:none;
	}
	i.fa-heart:hover span {
        border: #666 2px ;
        padding: 5px 20px 5px 5px;
        display: block;
        z-index: 100;
        background: #404145;
        left: 0px;
        margin: -47px 0px 0px -66px;
       
		color:#FFF8F8;
        position: absolute;
		border-radius: 6px;
		padding: 12px;
        top: 15px;
        text-decoration: none;
		width: 148px;
		
      }
	.review {
		background: #FFF8F8;
		padding: 27px 0;
	}

	.settings-header {
		background: #ffff;
		padding: 30px 41px;
	}

	.settings-header h3,
	.settings-header h3 a {
		color: #FF431A;
	}

	.settings-header p {
		color: #FF431A;
	}

	.btn-outline-primary {
		color: #FF431A;
		border-color: #FF431A;
	}

	.btn-outline-primary:hover {
		background-color: #FF431A;
		border-color: #ffffff;
		color: #fff;
	}


			/* .freelance-img img {
    margin: -18px 0px 0px -26px;
    width: 75px;
    height: 76px;
    border-radius: 50%;
}
.freelance-img .verified {
    background-color: #fff;
    color: #38B653;
    font-size: 18px;
    position: absolute;
    right: 34px;
    bottom: 59px;
    border-radius: 100%;
    z-index: 2;
    width: 25px;
    height: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.freelance-content {
    padding: 27px;
}
.favourite {
    color: #c4c4c4;
    font-weight: bold;
    background: #fafafa;
    border: 1px solid #c4c4c4;
    border-radius: 50px;
    font-size: 12px;
    width: 32px;
    height: 32px;
    padding: 0;
    display: inline-flex;
    position: absolute;
    right: 15px;
    top: 15px;
    justify-content: center;
    align-items: center;
    z-index: 1;
} */
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

			.hh{
				background: #404145;
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #fff;
    font-size: 14px;
    line-height: 21px;
    padding: 12px;
    text-align: left;
			}
	.testimonial-section{
		background: #fff;
	}
	.section-header {
    margin-bottom: 3px;
    padding-top: 50px;
}

.homepage-padding{
	padding: 100px 65px 0px 65px;
}

.artist-padding{
	padding: 0px 65px 0px 65px;
	margin-top: -60px;
}
@media only screen and (max-width: 600px) {
	.homepage-padding{
	padding: 100px 0px 0px 0px;
}
.artist-padding{
	padding: 0px 0px 0px 0px;
	margin-top: -60px;
}
}

			
		
</style>


<!-- Our Feature -->
<!-- <section class="section feature">
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<div class="feature-item freelance-count">
					<div class="feature-icon">
						<img src="{{ asset('assets/img/icon/icon-01.png') }}" class="img-fluid"
							alt="">
					</div>
					<div class="feature-content">
						<h3>919,207</h3>
						<p>freelance Developers</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="feature-item">
					<div class="feature-icon">
						<img src="{{ asset('assets/img/icon/icon-02.png') }}" class="img-fluid"
							alt="">
					</div>
					<div class="feature-content">
						<h3>25 - 100+</h3>
						<p>Developers per project</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="feature-item comp-project">
					<div class="feature-icon">
						<img src="{{ asset('assets/img/icon/icon-03.png') }}" class="img-fluid"
							alt="">
					</div>
					<div class="feature-content">
						<h3>388,615</h3>
						<p>completed projects</p>
					</div>
				</div>
			</div>
			

		</div>
	</div>
</section> -->
<!-- /Our Feature -->

<!--- Developed Project  -->
<!-- <section class="section work">
	<div class="container-fluid">
		<div class="row">

		
			<div class="col-md-6 work-box bg1">
				<div class="work-content">
					<h2>I need a Developed <span>Project</span></h2>
					<p>Get the perfect Developed project for your budget from our creative community.</p>
					<a href="project"><i class="fas fa-long-arrow-alt-right long-arrow"></i></a>
				</div>
			</div>
		

			<div class="col-md-6 work-box bg2">
				<div class="work-content">
					<h2>I want to <span>work</span></h2>
					<p>Do you want to earn money, find unlimited clients and build your freelance career?</p>
					<a href="developer"><i class="fas fa-long-arrow-alt-right long-arrow"></i></a>
				</div>
			</div>
		</div>
	</div>
</section> -->


<section class="section testimonial-section review homepage-padding" >
	<div class="container">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
		<div class="row">
			<div class="col-md-3 ">
				<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">

					<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0 text-center">
						@if(Auth::check())
							<h3 class="mb-2">Welcome, {{ Auth::user()->name }}</h3>					
						<!-- <a href="user-account-details"><h3 class="mb-0"></h3></a> -->
						<p class="mb-0">Get offers from employeer for your project</p>
						<br>
						<button type="button" class="btn w-100 btn-outline-primary">Search Project</button>
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="your-class">
					<div style=" background:url('https://i.ibb.co/S6wqNWc/slide4.jpg'); padding:100px; color:#fff;">
					</div>
					<div style=" background:url('https://i.ibb.co/98cMFmG/slider3-1.jpg'); padding:100px; color:#fff;">
						<h4 style="color:#fff;"></h4>
					</div>
					<div style=" background:url('https://i.ibb.co/S6wqNWc/slide4.jpg'); padding:100px; color:#fff;">
					</div>

				</div>
			</div>
		</div>
</section>


<section class="section testimonial-section review" style=" padding: 0px 65px 0px 65px;">
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
<br>
<br>
<br>
<!-- Review -->
<section class="section testimonial-section review artist-padding" >
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-header text-left">
					<!-- <div class="section-line"></div> -->
					<h2 class="header-title">Verified Pro services in <span style="color:#FF431A;">Singers & Vocalists</span></h2>
					<p style="font-size:13px;">Hand-vetted talent for all your professional needs. </p>
				</div>
			</div>
		</div>
	


		<div class="row">
			<div class="col-md-3">
				<div class="freelance-content">
					<div class="slideshow">
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/vector-illustration-concept-ecological-clean-planet-against-pollution-environmental_1284-48023.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%"  height="200" />
						</div>
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/environmental-protection-flat-set-two-compositions-with-polluted-factory-scenery-vs-clean-eco-city_1284-62776.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%"  height="200px" />
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
					<i class="fas fa-heart" >
					<span class="heart text-center" >Save to Wishlist</span></i>

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
								alt="" width="100%"  height="200" />
						</div>
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/illustration-weifang-kite-festival-china_107791-1263.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%"  height="200px" />
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
					<i class="fas fa-heart"><span class="heart">Add to Wishlist</span></i>

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
					<i class="fas fa-heart"><span class="heart">Add to Wishlist</span></i>

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
					<i class="fas fa-heart"><span class="heart">Add to Wishlist</span></i>

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


<section class="section testimonial-section review artist-padding"  >
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-header text-left">
					<!-- <div class="section-line"></div> -->
					<h2 class="header-title">Verified Pro services in <span style="color:#FF431A;">Singers & Vocalists</span></h2>
					<p style="font-size:13px;">Hand-vetted talent for all your professional needs. </p>
				</div>
			</div>
		</div>
	


		<div class="row">
			<div class="col-md-3">
				<div class="freelance-content">
					<div class="slideshow">
					<div class="slide">
							<img src="https://img.freepik.com/free-vector/environmental-protection-flat-set-two-compositions-with-polluted-factory-scenery-vs-clean-eco-city_1284-62776.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%"  height="200px" />
						</div>
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/vector-illustration-concept-ecological-clean-planet-against-pollution-environmental_1284-48023.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%"  height="200" />
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
							<img src="https://img.freepik.com/free-vector/illustration-weifang-kite-festival-china_107791-1263.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%"  height="200px" />
						</div>
					<div class="slide">
							<img src="https://img.freepik.com/free-vector/fairytale-black-dragon-cliff-mountains-vector-cartoon-fantasy-illustration-spooky-magic-beast-with-wings-red-desert-landscape-with-rocks-night_107791-8768.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%"  height="200" />
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
							<img src="https://img.freepik.com/free-vector/hand-drawn-flat-design-people-waving-illustration_23-2149207429.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200" />
						</div>
						
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/set-fire-fighters-male-female-characters-uniform-holding-ladder-water-hose-buckets-axe-group-firemen-team-working-fighting-with-blaze-save-kid-linear-people-vector-illustration_107791-11179.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
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
							<img src="https://img.freepik.com/free-vector/cartoon-character-motion-design_52683-6309.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%" height="200" />
						</div>
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/vector-illustration-mountain-landscape_1441-77.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
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
<br>
<br>
<section class="section testimonial-section review artist-padding" >
	<div class="container">
		<div class="row">
			<div class="col-12">

				<div class="your-class">
					<div style=" background:url('https://i.ibb.co/S6wqNWc/slide4.jpg'); padding:150px; color:#fff; background-size:cover;">
					</div>
					<div style=" background:url('https://i.ibb.co/98cMFmG/slider3-1.jpg'); padding:150px; color:#fff; background-size:cover;">
						<h4 style="color:#fff;"></h4>
					</div>
					<div style=" background:url('https://i.ibb.co/S6wqNWc/slide4.jpg'); padding:150px; color:#fff; background-size:cover;">
					</div>

				</div>
			
			</div>
			</div>
			</div>
</section>


<section class="section testimonial-section review artist-padding" >
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-header text-left">
					<!-- <div class="section-line"></div> -->
					<h2 class="header-title">Verified Pro services in <span style="color:#FF431A;">Singers & Vocalists</span></h2>
					<p style="font-size:13px;">Hand-vetted talent for all your professional needs. </p>
				</div>
			</div>
		</div>
		<div class="row" >
			<div class="col-md-3">
				<div class="freelance-content">
					<div class="slideshow">
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/vector-illustration-concept-ecological-clean-planet-against-pollution-environmental_1284-48023.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%"  height="200" />
						</div>
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/environmental-protection-flat-set-two-compositions-with-polluted-factory-scenery-vs-clean-eco-city_1284-62776.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%"  height="200px" />
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
							<img src="https://img.freepik.com/free-vector/fairytale-black-dragon-cliff-mountains-vector-cartoon-fantasy-illustration-spooky-magic-beast-with-wings-red-desert-landscape-with-rocks-night_107791-8768.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%"  height="200" />
						</div>
						<div class="slide">
							<img src="https://img.freepik.com/free-vector/illustration-weifang-kite-festival-china_107791-1263.jpg?size=626&ext=jpg&ga=GA1.2.849385969.1643863109"
								alt="" width="100%"  height="200px" />
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


<!-- / Review -->



</div>


<!-- /Main Wrapper -->
@endsection