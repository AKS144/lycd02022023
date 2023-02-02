<!DOCTYPE html>

<html lang="zxx">



<head>

    <meta charset="UTF-8">

    <meta name="description" content="Aler Template">

    <meta name="keywords" content="Aler, unica, creative, html">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Photography</title>



    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"

        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">



    <!-- Css Styles -->

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}" type="text/css">

    {{--  <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" type="text/css">  --}}

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/headermain.css') }}" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">



    



    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"

        rel="stylesheet">

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" /> 

    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css"> --}}




<style type="text/css">
    @media only screen and (max-width: 600px) {
  .spad {
   padding-top: 30px;
     padding-bottom: 20px; 
     padding-left: 0px;
  }
  .section-title {
    padding-bottom: 3px;
}
.text-left {
    text-align: center;
    margin-top: 32px;
}
}
</style>
</head>



<body>

    <!-- Page Preloder -->

    <!--  <div id="preloder">

        <div class="loader"></div>

    </div> -->



    <!-- Offcanvas Menu Wrapper Begin -->

    <div class="offcanvas-menu-overlay"></div>

    <div class="offcanvas-menu-wrapper">

        <div class="canvas-close">

            <span class="icon_close"></span>

        </div>

        <div class="logo">

                <a href="{{url('/')}}">

               <h3 style="color: #EF9434;">Lytaa</h3>

            </a>

        </div>

        <div id="mobile-menu-wrap"></div>

        <div class="om-widget">

            <ul>

                <li><i class="icon_mail_alt"></i> info.support@lytaa.com</li>

                <li><i class="fa fa-mobile-phone"></i> 125-711-811 </li>

            </ul>

            <a href="{{url('/')}}" class="hw-btn">Search</a>

        </div>

        <div class="om-social">

            <a href="#"><i class="fa fa-facebook"></i></a>

            <a href="#"><i class="fa fa-twitter"></i></a>

            <a href="#"><i class="fa fa-youtube-play"></i></a>

            <a href="#"><i class="fa fa-instagram"></i></a>

            <a href="#"><i class="fa fa-pinterest-p"></i></a>

        </div>

    </div>

    <!-- Offcanvas Menu Wrapper End -->



    <!-- Header Section Begin -->

    <header class="header-section">

        <div class="hs-top">

            <div class="container">

                <div class="row">

                    <div class="col-lg-2">

                        <div class="logo">

                            <a href="{{url('/')}}"><h3 style="color: #EF9434;font-weight: 600;">LYTAA</h3></a>

                        </div>

                    </div>

                    <div class="col-lg-10">

                        <div class="ht-widget">

                            <ul>

                                <li><i class="icon_mail_alt"></i> info.support@lytaa.com</li>

                                <li><i class="fa fa-mobile-phone"></i> 125-711-811 <span>125-668-886</span></li>

                            </ul>



                            <a href="#" class="hw-btn" onclick="openNav()">☰ Menu</a>



                        </div>

                    </div>

                </div>

                <div class="canvas-open">

                    <span class="icon_menu"></span>

                </div>

            </div>

        </div>

        <div id="mySidebar" class="sidebar">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                @if(Auth::check() != NULL)
                  <a href="{{route('artist.home')}}" class="hw-btn">Dashboard</a>
                  <a href="{{route('login')}}" class="hw-btn">My Profile</a>
                  <a href="{{url('albums/create')}}" class="hw-btn">Create Albums</a>
                  <a href="{{route('login')}}" class="hw-btn">Wallet</a>
               
                  <div>
                    <a class="hw-btn" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>
        
            @else
              <a href="{{url('/login')}}" class="hw-btn">Login</a>

            <a href="{{url('/signin')}}" class="hw-btn">Sign Up</a>

            @endif
        </div>

        <!-- <div class="hs-nav">

            <div class="container">

                <div class="row">

                    <div class="col-lg-9">

                        <nav class="nav-menu">

                            <ul>

                                <li><a href="./">Home</a></li>

                                <li class=""><a href="/property-details.php">Artist</a>

                                    <ul class="dropdown">

                                     

                                        <li><a href="./property-details.php">Artist Detail</a></li>

                                        <li><a href="./album.php">Artist Album</a></li>

                                    </ul>

                                </li>

                                <li class=""><a href="./jobsearch.php">Job</a>

                                    <ul class="dropdown">

                                 



                                        <li><a href="./job-details.php">Job Detail</a></li>

                                        <li><a href="./jobsearch.php">Job Search</a></li>

                                    </ul>

                                </li>

                               

                                <li><a href="./about.html">Dashboards </a>

                                 <ul class="dropdown">

                                        <li><a href="./dashboarduser.php">User Dashboards</a></li>

                                        <li><a href="./dashboardartist.php">Artist Dashboards</a></li>



                                 </ul>

                                 </li>

                               

                                <li><a href="./contract.php">Contract</a></li>

                            </ul>

                        </nav>

                    </div>

                    <div class="col-lg-3">

                        <div class="hn-social">

                            <a href="#"><i class="fa fa-facebook"></i></a>

                            <a href="#"><i class="fa fa-twitter"></i></a>

                            <a href="#"><i class="fa fa-youtube-play"></i></a>

                            <a href="#"><i class="fa fa-instagram"></i></a>

                            <a href="#"><i class="fa fa-pinterest-p"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div> -->
      <?php $bg_img= 'https://demo.rixhost.in/literature/public/assets/img/bg.jpg'; ?>
 <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;"> 
{{ csrf_field() }} 
</form>

    </header>

    <script>

        function openNav() {

            document.getElementById("mySidebar").style.width = "250px";

            document.getElementById("main").style.marginLeft = "250px";

        }



        function closeNav() {

            document.getElementById("mySidebar").style.width = "0";

            document.getElementById("main").style.marginLeft = "0";

        }

    </script>

    <!-- Header End -->

