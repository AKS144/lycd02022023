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
			    background: #ff0000;
			    color: #fff;
			    text-transform: uppercase;
			    font-family: "Muli-SemiBold";
			    font-size: 15px;
			    position: relative;
			    transition: all 0.3s ease;
			}
			button:hover {
			    background: #fd0000;
			}
			h3 {
			    text-transform: uppercase;
			    font-size: 35px;
			    font-family: "Poppins-Medium";
			    color: #ff0000;
			    letter-spacing: 3px;
			    margin-bottom: 22px;
			    font-weight: 500;
			}
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
		    
		     setTimeout(nextBackground, 2000);
		     }
		     setTimeout(nextBackground, 2000);
		       body.css('background', backgrounds[0]);
		     });
		      </script>
	</head>

	<body id="imageChange">