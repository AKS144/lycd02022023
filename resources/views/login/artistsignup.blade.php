<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Sign Up - LYTAA</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        label.error {
            color: #dc3545;
            font-size: 14px;
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

        .sign-width {
            max-width: 40%;
        }

        @media only screen and (max-width: 600px) {
            .sign-width {
                max-width: 93%;
            }
        }
    </style>
</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Page Wrapper -->
        <div class="page-wrapper board-screen">
            <div class="content container-fluid">
                <div class="acc-content">

                    <div class="row">
                        <div class="col-sm-12"
                            style="background: url(https://lytaa.com/public/search_assets/img/LYTAAFinal.png) center / cover no-repeat;">
                            <div class="">


                                <!-- Personal Info -->
                                <div class="on-board field-card select-account select-btn">

                                    <div class="field-item personal-info space-info sign-width">
                                        <div class="text-center onboard-head">

                                            <img src="https://lytaa.com/public/assets/logo/logo.png">
                                            </br>
                                            </br>
                                            <h2>Create Account </h2>

                                        </div>
                                        <br>
                                        <form action="{{ route('artist.store') }}" method="POST" id="client">
                                            @csrf
                                            <div class="row ">
                                                <div class="text-center">
                                                    <a href="{{ route('google') }}">
                                                        <button type="button"
                                                            class="icon-button social-signing-button google-signing-button"><span
                                                                class="lFICM06 provider-icon" aria-hidden="true"
                                                                style="width: 18px; height: 18px;"><svg width="18"
                                                                    height="19" viewBox="0 0 18 19"
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
                                                            <span>Continue with Google</span></a>
                                                    </button>

                                                    <br>
                                                    <br>

                                                    <a href="{{ route('facebook') }}">
                                                        <button type="button"
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
                                                        </button></a> <br>
                                                    <br>

                                                    <p>---------------------- OR ---------------------- </p>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="focus-label" for="name">Name
                                                            <span>*</span></label>
                                                        <input type="text" name="name" class="form-control"
                                                            id="name" placeholder="Please enter Name"
                                                            value="{{ old('name') }}">
                                                        @if ($errors->has('name'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                {{-- profile image to be implemented --}}
                                                {{-- <img style="margin-left: 34px;" id="preview_img"  width="200" height="150" alt="User Image">
														<div class="pro-form-img">								 
															<label class="file-upload image-upbtn ">
																Upload												
																<input type="file" name="avtar" onchange="loadPreview(this);" class="form-control" required>	
															</label> 	
														</div> --}}

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Phone Number<span>*</span></label>
                                                            <input type="text" name="mobile" class="form-control"
                                                                id="mobile" placeholder="Phone Number"
                                                                value="{{ old('mobile') }}">
                                                            @if ($errors->has('mobile'))
                                                                <span
                                                                    class="text-danger">{{ $errors->first('mobile') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email Address<span>*</span></label>
                                                            <input type="email" name="email" class="form-control"
                                                                placeholder="Enter email" value="{{ old('email') }}">
                                                            @if ($errors->has('email'))
                                                                <span
                                                                    class="text-danger">{{ $errors->first('email') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 text-center">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Location<span>*</span></label>
                                                            <select name="location_id" id=""
                                                                class="form-select" required>
                                                                <option>Select Location</option>
                                                                @foreach ($locations as $id => $locations)
                                                                    <option value="{{ $id }}"
                                                                        {{ (isset($user) && $user->location ? $user->location->id : old('location_id')) == $id ? 'selected' : '' }}>
                                                                        {{ $locations ?? '' }}</option>
                                                                @endforeach
                                                            </select>
                                                            @if ($errors->has('location'))
                                                                <span
                                                                    class="text-danger">{{ $errors->first('location') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">


                                                        <div class="form-group">
                                                            <label>{{ __('Gender') }}</label><br>
                                                            <select class="form-select" name="gender" required>
                                                                <option
                                                                    {{ old('gender') === 'Male' ? 'selected' : '' }}
                                                                    value="Male">Male</option>
                                                                <option
                                                                    {{ old('gender') === 'Female' ? 'selected' : '' }}value="Female">
                                                                    Female</option>
                                                                <option
                                                                    {{ old('gender') === 'Others' ? 'selected' : '' }}
                                                                    value="Others">Others</option>
                                                            </select>
                                                            @if ($errors->has('gender'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label>Password<span>*</span></label>
                                                            {{-- <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" value="{{ old('name') }}"> --}}
                                                            <input placeholder="Password" id="password"
                                                                type="password"
                                                                class="form-control @error('password') is-invalid @enderror"
                                                                name="password" required
                                                                autocomplete="current-password">
                                                            @if ($errors->has('password'))
                                                                <span
                                                                    class="text-danger">{{ $errors->first('password') }}</span>
                                                            @endif
                                                            {{-- @error('password')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <label>Confirm Password<span>*</span></label>
                                                        {{-- <input type="password" name="password_confirmation" id="password" class="form-control" placeholder="Confirm password" required autocomplete="current-password"> --}}
                                                        <input placeholder=" Confirm Password" id="confirmPassword"
                                                            type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password_confirmation" required
                                                            autocomplete="current-password">
                                                        @if ($errors->has('password'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-center">
                                                        <a href="{{ url()->previous() }}"
                                                            class="btn btn-default"><button
                                                                class="btn btn-prev prev_btn btn-back" name=""
                                                                type="button"> Back</button></a>
                                                        {{-- <input
                                                            class="btn next_btn btn-primary btn-get btn-next"
                                                            type="submit" value="Submit"> --}}															
															<button
                                                                class="btn btn-primary" 
                                                                type="submit"> Submit</button>
                                                        {{-- <input class="" type="submit" value="Submit"> --}}
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center text-end dont-have">Already Have Account
                                                    ? <a href="{{ url('/login') }}">Click here</a></div>
                                            </div>
										</form>	
                                    </div>
                                    <!-- /Personal Info -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Wrapper -->

        </div>
        <!-- /Main Wrapper -->

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

        <!-- jQuery -->
        {{-- <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script> --}}

        <!-- Bootstrap Bundle JS -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Progress JS -->
        <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>

        <!-- Select2 JS -->
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

        <!-- Custom JS -->
        <script src="{{ asset('js/script.js') }}"></script>


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script>
            function loadPreview(input, id) {
                id = id || '#preview_img';
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $(id)
                            .attr('src', e.target.result)
                            .width(200)
                            .height(150);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>


        <script>
            $(document).ready(function() {
                $("#client").validate({
                    rules: {
                        name: {
                            required: true,
                            maxlength: 200,
                            minlength: 2,
                            //lettersonly: true,
                        },
                        mobile: {
                            required: true,
                            number: true,
                            maxlength: 10,
                            minlength: 10,
                        },
                        gender: {
                            required: true,
                        },
                        location: {
                            required: true,
                        },
                        password: {
                            required: true,
                            maxlength: 16,
                            minlength: 8,
                        },
                        confirmPassword: {
                            required: true,
                            equalTo: "#password"
                        },
                        email: {
                            required: true,
                            email: true,
                            maxlength: 50
                        },
                    },
                    messages: {
                        name: {
                            required: "Field is requried",
                            minlength: "Not less than length 2",
                            maxlength: "Not more than 200 ",
                            lettersonly: "Letters only"
                        },
                        gender: {
                            required: "Field is requried",
                        },
                        location: {
                            required: "Field is requried",
                        },
                        mobile: {
                            required: "Field is requried",
                            number: "Field should be number",
                            maxlength: "Phone number should be 10 digit",
                            minlength: "Phone number should be 10 digit",
                        },
                        password: {
                            required: "Field is required",
                            minlength: "Password must be at least 8 characters must include one capital and one small letter, one number and one special character ",
                            maxlength: "Password should not be more than 16 characters"
                        },
                        confirmPassword: {
                          //  required: "Confirm password is required",
                            equalTo: "Password and confirm password should be same",
                        },
                        email: {
                            required: "Email is required",
                            email: "Email must be a valid email address",
                            maxlength: "Email cannot be more than 50 characters",
                        },
                    }
                });
            });
        </script>
</body>

</html>
