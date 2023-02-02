<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Photography - Sign Up</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">



		<!-- LINEARICONS -->

		<link rel="stylesheet" href="{{asset('assets_login/fonts/linearicons/style.css')}}">



		<!-- MATERIAL DESIGN ICONIC FONT -->

		<link rel="stylesheet" href="{{asset('assets_login/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">



		<!-- DATE-PICKER -->

		<link rel="stylesheet" href="{{asset('assets_login/vendor/date-picker/css/datepicker.min.css')}}">

		

		<!-- STYLE CSS -->

		<link rel="stylesheet" href="{{asset('assets_login/css/style.css')}}">

		<style>
			:root {
  --org: #ef9434;
  --white: #ffffff;
}
					form {
		   
		    border-radius: 17px;
		}
		.inner {
		    
		    border-radius: 20px;
		}

    	#imageChange{



		width: 100% !important;

		height: 100% !important;

		background-size: cover !important;

		background-repeat: no-repeat !important;



			}

			button {

			    border: none;

			    width: 173px;

			    height: 42px;

			    margin-top: 30px;

			    cursor: pointer;

			    display: flex;

			    align-items: center;

			    justify-content: center;

			    padding: 0;

			    background: var(--org);

			    color: #fff;

			    text-transform: uppercase;

			    font-family: "Muli-SemiBold";

			    font-size: 15px;

			    position: relative;

			    transition: all 0.3s ease;

			}

			button:hover {

			    background: var(--org);

			}
			button:focus {
    outline: 0px dotted;
    outline: 0px auto -webkit-focus-ring-color !important;
}

			h3 {

			    text-transform: uppercase;

			    font-size: 35px;

			    font-family: "Poppins-Medium";

			    color: var(--org);

			    letter-spacing: 3px;

			    margin-bottom: 22px;

			    font-weight: 500;

			}
			.navbar-dark .navbar-nav .nav-link {
    color: rgb(0 0 0) !important;
}
/*.custom-navbar{box-shadow: 10px 10px 10px #eee; z-index:;background-color: #fff;}*/

.custom-toggler.navbar-toggler {border-color: rgb(247,32,78);}
.custom-toggler .navbar-toggler-icon {background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(247,32,78, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");}
.custom-toggler .navbar-toggler-icon{width: 18px!important;}
.custom-toggler:hover{border-color: rgb(255,255,255); background-color: #f76a88;}
.navbar-toggler-icon:hover{background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");}#logo_custom{margin-top: -6px;}
@media only screen and (max-width: 760px) { #logo_custom{width: 40%;} #imageChange{

		width: 100% !important;

		height: 100% !important;

		background-size:  !important;

		background-repeat: no-repeat !important;



			}}

		</style>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>



		<script type = "text/javascript">

		      



		    $(function() {

		      var body = $('body');

		      var backgrounds = ['url(https://images.unsplash.com/photo-1542038784456-1ea8e935640e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)', 'url(https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80)','url(https://images.unsplash.com/photo-1541515929569-1771522cbaa9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)','url(https://images.unsplash.com/photo-1615075650468-4e8e293d4989?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)'];

		    var current = 0;

		    

		    function nextBackground() {

		      body.css(

		       'background',

		        backgrounds[current = ++current % backgrounds.length]

		     );

		    

		     setTimeout(nextBackground, 10000);

		     }

		     setTimeout(nextBackground, 10000);

		       body.css('background', backgrounds[0]);

		     });

		      </script>

	</head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<body id="imageChange">
<nav class="navbar fixed-top navbar-expand-md custom-navbar navbar-dark">
                         <!-- <img class="navbar-brand" src="{{ asset('assets/img/logoweb.png') }}"  style="width: 104px !important; height: 58px; " id="logo_custom"   alt="logo"> -->
                         <h3 style="color:#fff;">Lytaa</h3>
                            <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon "></span>
                            </button>
                              <div class="collapse navbar-collapse " id="collapsibleNavbar">
                                  <ul class="navbar-nav ml-auto ">
                                  @guest
                                    <li class="nav-item">
                                      <a class="nav-link" href="{{ route('login') }}" style="background: #fff;border-radius: 6px 0px 0px 6px;"><b>Login</b></a>
                                    </li>
                                    <!-- <li class="nav-item">
                                      <a class="nav-link" href="{{ route('signupasartist') }}" style="background: #fff;border-radius: 0px 6px 6px 0px;"><b>Sign Up as Artist</b></a>
                                    </li>
                                     <li class="nav-item">
                                      <a class="nav-link" href="{{ route('signupasclient') }}" style="background: #fff;border-radius: 0px 6px 6px 0px;"><b>Sign Up as Client</b></a>
                                    </li> -->
                                    <li class="nav-item dropdown" style="margin-top: 9px;">
												<a id="navbarDropdown nav-link" style="background: #fff;border-radius: 0px 6px 6px 0px; padding: 0.62em 0.55em 0.55em 0.55em;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
													<b style="color:black;">Sign Up</b>
												</a>

												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
													 <a class="nav-link" href="{{ route('signupasclient') }}" style="background: #fff;border-radius: 0px 6px 6px 0px;"><b> Client</b></a>
													 <a class="nav-link" href="{{ route('signupasartist') }}" style="background: #fff;border-radius: 0px 6px 6px 0px;"><b> Artist</b></a>

													
												</div>
											</li>
                                    @else



									
											<li class="nav-item">
                                      <a class="nav-link" href="{{ route('login') }}" onclick="event.preventDefault();
																		document.getElementById('logout-form').submit();"  style="background: #fff;border-radius: 6px 0px 0px 6px;"><b>Logout</b></a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														@csrf
													</form>
                                    </li>
                                  
                    				@endguest 
                                  </ul>
                              </div>  
</nav>