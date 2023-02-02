<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LYTAA - Photography</title>
    <meta name="title" content="Lytaa — Photography">
 <meta name="description" Lytaa is your platform to find clients, showcase your work and reach  the world. This 
  platform connects photographers with clients who want to hire them. Photographers can search  and apply for jobs.
  Customers can search for photographers and find the best photographers. Lytaa is designed to meet the needs of 
   photographers and their clients. Our platform is easy to use and intuitive, so you can focus on your work."> 
    <link rel="stylesheet" href="{{asset('search_assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="{{asset('search_assets//fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('search_assets/css/untitled-1.css')}}">
    <link rel="stylesheet" href="{{asset('search_assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<style>
    @media (min-width: 1200px)
    {
      .desktop{
        margin-left: -5px !important;
      }
      .desktop-view{
        margin-top:-110px !important;
      }
      .desktop-bg-image{
        background: url('https://lytaa.com/public/search_assets/img/LYTAAFinal.png') center / cover no-repeat;
        height: 100%;
        width: 100%;

      }
    }
    @media (max-width: 600px)
    {

        .desktop-bg-image{
        background: url('https://images.pexels.com/photos/598917/pexels-photo-598917.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') center / cover repeat;
        height: auto !important;
        width: 100%;

      }


    }

    .nav-tabs {
    border-bottom: 1px solid transparent !important;
}

.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
    color: #000;
    background-color: #fff;
    border-color: #fff #fff #fff;
   
}
.nav-tabs .nav-link {
    margin-bottom: -1px;
    color:#fff;
  
    border: 1px solid #ef9434;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
    background: #ef9434;
    padding: 0px 22px;
}
.facebook-signing-button {
    background: #4267b2;
    border: 1px solid #4267b2;
    color: #fff;
    fill: #fff;
    width: 65%;
    border-radius: 10px;
    padding: 11px;
}

.google-signing-button {
    background: #e5e5e5;
    border: 1px solid #b1b1b1;
    color: #505050;
    fill: #fff;
    width: 65%;
    border-radius: 10px;
    padding: 11px;
}
.tab-content {
    padding-top: 0px;
}

.nav-text-white{
    border-color: rgb(255,255,255);
    color: rgb(255,255,255);
}



</style>
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57" style="overflow-y: hidden;">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container-fluid"><a class="navbar-brand" href="{{url('/')}}" style="border-color: rgb(255,255,255);color: rgb(255,255,255);font-size: 30px;font-family: Roboto, sans-serif;"><img src="https://lytaa.com/public/assets/logo/logo.png" /></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <!-- <li class="nav-item"><a class="nav-link text-capitalize" href="#portfolio" style="border-color: rgb(255,255,255);color: rgb(255,255,255);">About</a></li>
                    <li class="nav-item"><a class="nav-link text-capitalize" href="#portfolio" style="border-color: rgb(255,255,255);color: rgb(255,255,255);">Help</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link text-capitalize" href="#portfolio" style="border-color: rgb(255,255,255);color: rgb(255,255,255);">Login</a></li>
                    <li class="nav-item"><a class="nav-link text-capitalize" href="#contact" style="color: rgb(0,0,0);background: #fcfcfc;border-radius: 26px;">Register</a></li> -->

                     @guest
                            <li class="nav-item"><a class="nav-link text-capitalize nav-text-white" href="https://www.lytaa.com/beforesignup" >Register</a></li>
                            <li class="nav-item"><a class="nav-link text-capitalize" data-bs-toggle="modal" href="#login" style="color: rgb(0,0,0);background: #fcfcfc;border-radius: 26px;">Login</a></li>
                        @else
                        
                        @if(Auth::user()->isArtist)
                        <li class="nav-item"><a class="nav-link text-capitalize nav-text-white" href="{{url('artist')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-capitalize" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link text-capitalize" href="#">Contact Us</a></li>
                        @else 
                        <li class="nav-item"><a class="nav-link text-capitalize" href="{{url('client')}}">Home</a></li>
                        @endif
                            <li class="nav-item ">                             
                                 <a class="nav-link text-capitalize" style="color: rgb(0,0,0);background: #fcfcfc;border-radius: 26px;" href="javascript:void"
                                        onclick="$('#logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        @endguest  
                </ul>
            </div>
        </div>
    </nav>
    <!-- <header class="text-center text-white d-flex masthead" id="bg-img" style=""> -->
    <header class="text-center text-white d-flex masthead desktop-bg-image" >
<!--         <div class="container-fluid " style="padding-top: 204px;padding-left: 81px;">margin-top: 373px;margin-left: 81px; -->
        <div class="container-fluid searchbar " >
            <div class="row">
                <div class="col-md-5">
                    <div class="row padMar desktop-view">

                        <div class="col-xl-11 offset-xl-0 padMar">
                            <h2 class="display-5 text-start" style="color:#fff;">Find The Perfect</h2>
                            <h1 class="text-start" style="font-weight: bold;color: #ef9434;">PHOTO<span style="color: rgb(255,255,255);"><stroing>GRAPHER</strong><br></span></h1>
                               <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Job </button>
                                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Photographer</button>
                                     
                                    </div>
                                  </nav>
                                  <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <form method="GET" action="{{ url('jobs-search') }}">
                            <div class="input-group" style="margin-bottom: 14px;">
                            <span class="input-group-text" style="background: rgb(255,255,255);">
                            <i class="fa fa-search" style="color: rgb(147,147,147);"></i>
                           </span>
                         
                                <input class="form-control autocomplete" name="search" id="search_job" autocomplete="off" type="text"value="{{ old('search') }}" style="padding-bottom: 6px;">
                                <button class="btn btn-warning" type="submit" style="background: #ef9434;border-radius: 3px;">
                                <span class="text-capitalize" style="color: rgb(255,255,255);font-size: 14px;">Search</span>
                              </button>
                        </div>
                                <span class="text-center hide-mobile desktop" style="color: #ef9434;font-size: 12px;margin-left: -221px;">Popular:&nbsp;&nbsp;
                                <a href="#" class="btn-suget">Food</a><a href="#" class="btn-suget">Fashion</a><a href="#" class="btn-suget">Wedding</a><a href="#" class="btn-suget">Nature</a>&nbsp;&nbsp;</span>
                            </div>
                             </form> 
                             </div>
                             <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <form method="GET" action="{{ url('profile-search') }}">
                            <div class="input-group" style="margin-bottom: 14px;">
                            <span class="input-group-text" style="background: rgb(255,255,255);">
                            <i class="fa fa-search" style="color: rgb(147,147,147);"></i>
                           </span>                         
                                <input class="form-control autocomplete" name="search" autocomplete="off" type="text" id="search" value="{{ old('search') }}" style="padding-bottom: 6px;">
                                <button class="btn btn-warning" type="submit" style="background: #ef9434;border-radius: 3px;">
                                <span class="text-capitalize" style="color: rgb(255,255,255);font-size: 14px;">Search</span>
                              </button>
                        </div>
                                <span class="text-center hide-mobile desktop" style="color: #ef9434;font-size: 12px;margin-left: -221px;">Popular:&nbsp;&nbsp;
                                <a href="#" class="btn-suget">Food</a><a href="#" class="btn-suget">Fashion</a><a href="#" class="btn-suget">Wedding</a><a href="#" class="btn-suget">Nature</a>&nbsp;&nbsp;</span>
                            </div>
                             </form> 
                             </div>

                    </div>
                </div>
                <div class="col-md-7"></div>
            </div>
        </div>
    </header>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{asset('search_assets/js/creative.js')}}"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</body>

                                <div class="modal fade custom-modal" id="login">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content bg-modal">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-info text-center">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                        <a href="{{ route('facebook') }}"><button type="button"
                                                                class="icon-button social-signing-button facebook-signing-button"><span
                                                                    class="lFICM06 provider-icon" aria-hidden="true"
                                                                    style="width: 18px; height: 18px;"><svg width="20"
                                                                        height="20" viewBox="0 0 20 20"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M20 10.0022C20.0004 8.09104 19.4532 6.2198 18.4231 4.61003C17.393 3.00026 15.9232 1.71938 14.1877 0.919062C12.4522 0.118741 10.5237 -0.167503 8.63053 0.0942223C6.73739 0.355948 4.9589 1.15468 3.50564 2.39585C2.05237 3.63701 0.985206 5.26863 0.430495 7.0975C-0.124217 8.92636 -0.143239 10.8759 0.37568 12.7152C0.894599 14.5546 1.92973 16.2067 3.35849 17.476C4.78726 18.7453 6.54983 19.5786 8.4375 19.8772V12.8922H5.89875V10.0022H8.4375V7.79843C8.38284 7.28399 8.44199 6.76382 8.61078 6.2748C8.77957 5.78577 9.05386 5.33986 9.4142 4.96866C9.77455 4.59746 10.2121 4.31007 10.6959 4.12684C11.1797 3.94362 11.6979 3.86905 12.2137 3.90843C12.9638 3.91828 13.7121 3.98346 14.4525 4.10343V6.56718H13.1925C12.9779 6.53911 12.7597 6.55967 12.554 6.62733C12.3484 6.69498 12.1607 6.80801 12.0046 6.95804C11.8486 7.10807 11.7283 7.29127 11.6526 7.49408C11.577 7.69689 11.5479 7.91411 11.5675 8.12968V10.0047H14.3412L13.8975 12.8947H11.5625V19.8834C13.9153 19.5112 16.058 18.3114 17.6048 16.4999C19.1516 14.6884 20.001 12.3842 20 10.0022Z">
                                                                        </path>
                                                                    </svg></span>
                                                                <span>Continue with Facebook</span>
                                                            </button></a>
                                                            <br>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <a href="{{ route('google') }}"><button type="button"
                                                                    class="icon-button social-signing-button google-signing-button"><span
                                                                        class="lFICM06 provider-icon" aria-hidden="true"
                                                                        style="width: 18px; height: 18px;"><svg
                                                                            width="18" height="19"
                                                                            viewBox="0 0 18 19"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9 7.84363V11.307H13.8438C13.6365 12.428 12.9994 13.373 12.0489 14.0064V16.2534H14.9562C16.6601 14.6951 17.641 12.4029 17.641 9.67839C17.641 9.04502 17.5854 8.43176 17.4792 7.84865H9V7.84363Z"
                                                                                fill="#3E82F1"></path>
                                                                            <path
                                                                                d="M9.00001 14.861C6.65394 14.861 4.67192 13.2876 3.96406 11.1714H0.955627V13.4937C2.43709 16.4142 5.48091 18.4198 9.00001 18.4198C11.432 18.4198 13.4697 17.6206 14.9562 16.2533L12.0489 14.0064C11.245 14.5443 10.2135 14.861 9.00001 14.861Z"
                                                                                fill="#32A753"></path>
                                                                            <path
                                                                                d="M3.96404 5.45605H0.955617C0.348876 6.66246 0 8.02972 0 9.47238C0 10.915 0.348876 12.2823 0.955617 13.4887L3.96404 11.1714C3.78202 10.6335 3.6809 10.0605 3.6809 9.47238C3.6809 8.88426 3.78202 8.31122 3.96404 7.77336V5.45605Z"
                                                                                fill="#F9BB00"></path>
                                                                            <path
                                                                                d="M0.955627 5.45597L3.96406 7.77327C4.67192 5.65703 6.65394 4.08368 9.00001 4.08368C10.3197 4.08368 11.5079 4.53608 12.4382 5.42078L15.0219 2.85214C13.4646 1.40948 11.427 0.52478 9.00001 0.52478C5.48091 0.52478 2.43709 2.53043 0.955627 5.45597Z"
                                                                                fill="#E74133"></path>
                                                                        </svg> </span>
                                                                    <span>Continue with Google</span>
                                                                </button></a>
                                                            <div class="form-separator"><span>or</span></div>

                                                            <form method="POST" action="{{ route('login') }}"
                                                                style="padding:28px;">
                                                                @csrf <div class="form-group form-focus">
                                                                    <input type="text" class="form-control floating"
                                                                        name="email">
                                                                    <label class="focus-label">Email</label>
                                                                </div>
                                                                <div class="form-group form-focus">
                                                                    <input name="password" type="password"
                                                                        class="form-control floating">
                                                                    <label class="focus-label">Password</label>
                                                                </div>
                                                                <div class="form-group form-focus">
                                                                    <label class="custom_check">
                                                                        <!-- <input type="checkbox" name="remember" value="1"> -->
													                    <input type="checkbox" name="remember">		
                                                                        <span class="checkmark"></span> Remember Me
                                                                    </label>
                                                                </div>
                                                                                    
                                                                <div class="text-center">
                                                                    <button
                                                                        class="btn btn-primary btn-block-login btn-sm login-btn"
                                                                        type="submit">Login</button>
                                                                </div>

                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-6 ">
                                                                        <a href="{{ route('password.request') }}">Forgot Password ?</a>
                                                                    </div>
                                                                    <div class="col-md-6 ">New to LYTAA? <a
                                                                            href="beforesignup">Click here</a></div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
  <script type="text/javascript">
        var route = "{{ url('autocomplete-search') }}";
        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });

        var routejob = "{{ url('autocomplete-search-job') }}";
        $('#search_job').typeahead({
            source: function (query, process) {
                return $.get(routejob, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    </script>

</html>