{{-- @include('layouts.header') --}}
@extends('layout.mainlayout')



<!-- JS & CSS library of MultiSelect plugin -->

<!-- Select2 -->

<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap4.min.css') }}">





<style>

    label.error {

        color: #dc3545;

        font-size: 14px;

    }

</style>



<!-- Header End -->

<!-- Breadcrumb Section End -->

<!-- About Section Begin -->



<section class="about-section spad">

    <div class="container">

        <div class="section-title">

            <h4>My Profile</h4>

        </div>

        <form class="forms-sample" id="form" action="{{ route("profile.store") }}" method="POST" enctype="multipart/form-data">

            @csrf

        <div class="row">

            <div class="col-md-4 {{ $errors->has('name') ? ' has-error' : '' }}">

                <label>{{ __('Name') }}</label>

                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ Auth::user()->name }}" required>

                @if ($errors->has('name'))

                    <span class="help-block">

                        <strong>{{ $errors->first('name') }}</strong>

                    </span>

                @endif

            </div>



            <div class="col-md-4 {{ $errors->has('mobile') ? 'has-error' : '' }}">

                <label>{{ __('Mobile') }}</label>

                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Phone" value="{{ Auth::user()->mobile }}" required><br>

                @if ($errors->has('mobile'))

                    <span class="help-block">

                        <strong>{{ $errors->first('mobile') }}</strong>

                    </span>

                @endif

            </div>



            <div class="col-md-4 {{ $errors->has('dob') ? 'has-error' : '' }}">

                <label>{{ __('Date of Birth') }}</label>

                <input type="date" name="dob" class="form-control" id="dob" required>

            </div>

        </div>



        <div class="row">

            <div class="col-md-4 {{ $errors->has('username') ? 'has-error' : '' }}">

                <label>{{ __('Username') }}</label>

                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>

                @if ($errors->has('username'))

                    <span class="help-block">

                        <strong>{{ $errors->first('username') }}</strong>

                    </span>

                @endif

            </div>



            <div class="col-md-4 {{ $errors->has('email') ? 'has-error' : '' }}">

                <label>Email</label>

                <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ Auth::user()->email }}" required><br>

                @if ($errors->has('email'))

                    <span class="help-block">

                        <strong>{{ $errors->first('email') }}</strong>

                    </span>

                @endif

            </div>



            <div class="col-md-4">

                <label>{{ __('Gender') }}</label><br>

                <select class="form-control" name="gender" id="" required>

                    <option>{{ __('Male') }}</option>

                    <option>{{ __('Female') }}</option>

                    <option>{{ __('Others') }}</option>

                </select>

                @if ($errors->has('gender'))

                    <span class="help-block">

                        <strong>{{ $errors->first('gender') }}</strong>

                    </span>

                @endif

            </div>

        </div>



        <div class="row">

            <div class="col-md-4 {{ $errors->has('id_type') ? 'has-error' : '' }}">

                <label>{{ __('ID Type') }}</label>

                <select class="form-control" id="" name="id_type" required>

                    <option>{{ __('PAN Card') }}</option>

                    <option>{{ __('Aadhar Card') }}</option>

                    <option>{{ __('Passport') }}</option>

                    <option>{{ __('Voter Card') }}</option>

                </select>

            </div>

            

            <div class="col-md-4">

                <div {{ $errors->has('id_no') ? 'has-error' : '' }}">

                    <label for="">{{ __('ID Number') }}</label>

                    <input type="text" name="id_no" class="form-control" id="id_no" placeholder="ID Number" required>

                    @if ($errors->has('id_no'))

                        <span class="help-block">

                            <strong>{{ $errors->first('id_no') }}</strong>

                        </span>

                    @endif

                </div>

            </div>


       

            <div class="col-md-4">

                <label> Category</label><br>

                <select name="categories" id="" class="form-control select2" required>

                    @foreach ($categories as $id => $categories)

                        <option value="{{ $id }}"

                            {{ (isset($job) && $job->categories ? $job->categories->id : old('categories')) == $id ? 'selected' : '' }}>

                            {{ $categories }}</option>

                    @endforeach

                </select>

                @if ($errors->has('categories'))

                    <em class="invalid-feedback">

                        {{ $errors->first('categories') }}

                    </em>

                @endif

            </div>
        </div>

        <div class="row">

            <div class="col-md-4">

                <label> Location</label><br>

                <select name="location_id" id="location" class="form-control select2" required>

                    @foreach ($locations as $id => $location)

                        <option value="{{ $id }}"

                            {{ (isset($job) && $job->location ? $job->location->id : old('location')) == $id ? 'selected' : '' }}>

                            {{ $location }}</option>

                    @endforeach

                </select>

                @if ($errors->has('location'))

                    <em class="invalid-feedback">

                        {{ $errors->first('location') }}

                    </em>

                @endif

            </div>



            <div class="col-md-4 {{ $errors->has('skills') ? 'has-error' : '' }}">

                <label for="">{{ __('Skills') }}</label>

                <input type="text" name="skills" id="skills" class="form-control" placeholder="Skills" required><br>

                @if ($errors->has('skills'))

                    <span class="help-block">

                        <strong>{{ $errors->first('skills') }}</strong>

                    </span>

                @endif

            </div>



            {{-- <div class="form-group {{ $errors->has('skills') ? 'has-error' : '' }}">

                <label for="">{{ __('Skills')}}</label>

                <input type="text" name="skills" class="form-control" id="skills" placeholder="Skills" required>

                @if ($errors->has('skills'))

                    <span class="help-block">

                        <strong>{{ $errors->first('skills') }}</strong>

                    </span>

                @endif

            </div> --}}





            <div class="col-md-4">

                <label>{{ __('Years of Experience') }}</label><br>

                <input type="text" name="exp_yrs" id="exp_yrs" class="form-control" required><br>

                @if ($errors->has('exp_yrs'))

                    <span class="help-block">

                        <strong>{{ $errors->first('exp_yrs') }}</strong>

                    </span>

                @endif

            </div>

        </div>



        <div class="row">

            <div class="col-md-4">

                <label>{{ __('Location worked') }}</label><br>

                <input type="text" name="worked_loc" id="worked_loc" class="form-control" required><br>

                @if ($errors->has('worked_loc'))

                    <span class="help-block">

                        <strong>{{ $errors->first('worked_loc') }}</strong>

                    </span>

                @endif

            </div>





            <div class="col-md-4">

                <label>Course Name</label>

                <input type="text" name="course_name" class="form-control" required><br>

                @if ($errors->has('course_name'))

                    <span class="help-block">

                        <strong>{{ $errors->first('course_name') }}</strong>

                    </span>

                @endif

            </div>





            <div class="col-md-4">

                <label> Qualification</label><br>

                <input type="text" name="qualification" id="qualification" class="form-control" required><br>

                @if ($errors->has('qualification'))

                    <span class="help-block">

                        <strong>{{ $errors->first('qualification') }}</strong>

                    </span>

                @endif

            </div>

        </div>



        <div class="row">

            <div class="col-md-4">

                <label> Profile</label><br>

                <input type="file" name="" class="form-control" required><br>

                @if ($errors->has('profile_img'))

                    <span class="help-block">

                        <strong>{{ $errors->first('course_cert_img') }}</strong>

                    </span>

                @endif

            </div>

        </div>



        <div class="row">

            <div class="col-md-4">

                <label> Course Certificate</label><br>

                <input type="file" name="" class="form-control" required><br>

                @if ($errors->has('course_cert_img'))

                    <span class="help-block">

                        <strong>{{ $errors->first('course_cert_img') }}</strong>

                    </span>

                @endif

            </div>

        </div>



        <div id="inputFormRowadditional">
            <div class="row">
                <div class="col-md-6">
                    <h4>Add Equipment</h4><br>
                    <input type="text" name="add_Equipment[]" class="form-control m-input" placeholder="Enter Equipment"
                        autocomplete="off" required>
                </div>
            </div>
            <div id="newadditionalRow"></div>
            <br>
            <button id="addadditional" type="button" class="btn btn-info">+ Add More </button>
            <br>        
            <br>
            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
        </div>

    </form>

</section>

<!-- About Section End -->

{{-- 

@include('layouts.footer') --}}







<script src="{{ asset('assets/js/select2.full.min.js') }}"></script>

<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->

<script src="js/demo.js"></script>

<script type="text/javascript">

   


    $("#addadditional").click(function() {
        var html = '';
        html += '<div id="inputFormRowadditional">';
        html += '<div class="row">';
        html += '<div class="col-md-6">';
        html += '<label>&nbsp;</label>';
        html += '<input type="text" name="add_Equipment[]" class="form-control m-input" placeholder="Enter Equipment" autocomplete="off">';
        html += '</div >';
        html += '<div class="col-md-1" style="margin-top: -21px;">';
        html += '<label style="padding-bottom: 21px;">&nbsp;</label>';
        html += '<button id="removeadditionalRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        $('#newadditionalRow').append(html);
    });

    // remove row



    $(document).on('click', '#removeadditionalRow', function() {

        $(this).closest('#inputFormRowadditional').remove();

    });

    $(document).ready(function() {

        $('.select2').select2({

            minimumResultsForSearch: -1,

            dropdownCssClass: 'no-search'

        })

        //Initialize Select2 Elements

        $('.select2bs4').select2({

            theme: 'bootstrap4'

        })

    });

</script>





<!--Frontend validation-->

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>





    <script>

        $(document).ready(function($) {

            $("#regForm").validate({

                rules: {

                    name: {

                        required : true,

                        minlength : 2,

                        maxlength : 50

                    },                   

                    username: {

                        required: true,

                        minlength: 2,

                        maxlength: 20,

                    },

                    mobile: {

                        required: true,

                        minlength: 10,

                        maxlength: 10,

                        number: true

                    },

                    email: {

                        required: true,

                        email: true,

                        maxlength: 50,

                        uniqueEmail: true

                    },

                    dob: {

                        required: true,

                        date: true

                    },

                    id_type: {

                        required: true,

                    },

                    id_no: {

                        required: true,

                        number: true,

                        minlength: 6,

                        maxlength: 12,

                    },

                    gender: {

                        required: true

                    },

                    profile_img: {

                        required:true,

                        accept: "image/jpg,image/jpeg,image/png,image/gif",

                        filesize : 2,

                    },

                    exp_yrs: {

                        required: true,

                        minlength: 1,

                        maxlength: 2,

                        number: true,

                    },

                    worked_loc:{

                        minlength: 3,

                        maxlength: 255,

                    },

                    course_name: {

                        required: true,

                        maxlength: 255,

                    },

                    course_cert_img:{

                        required:true,

                        accept: "image/jpg,image/jpeg,image/png,image/gif",

                        filesize : 5,

                    },

                    qualification:{

                        required: true,

                    },                    

                    studio_address: {

                        minlength: 5,

                        maxlength: 255,

                    },                    

                },

                messages: {

                    name: {

                        required: "First name is required",

                        minlength: "First name cannot be less than 2 characters",

                        maxlength: "First name cannot be more than 20 characters"

                    },

                    username: {

                        required: "Username is required",

                        minlength: "Username cannot be less than 2 characters",

                        maxlength: "Username cannot be more than 20 characters",

                    },

                    mobile: {

                        required: "Phone number is required",

                        minlength: "Number should be more than 10",

                        maxlength: "Number should be less than 10",

                        number: "Please fill only number",

                    },

                    email: {

                        required: "e-Mail is required",

                        email: "e-Mail must be an email",

                        maxlength: "e-mail length should not exceed more than 50 characters",

                    },

                    id_no: {

                        required: "Id number is required",

                        number: "Only number is valid",

                        minlength: "Id number should not be less than 6",

                        maxlength: "Id number should not be more than 12",

                    },

                    gender: {

                        required: "Please enter gender"

                    },

                    profile_img: {

                        required:"Profile image is required",

                        accept: "Only image type in format jpg,jpeg,png allowed",

                        filesize : "Size should be less than 2MB",

                    },

                    exp_yrs: {

                        required: "Years of experience is required",

                        minlength: "Please enter valid years of experience",

                        maxlength: "Please enter valid years of experience",

                        number: "Only numbers are allowed"

                    },

                    worked_loc:{

                        minlength: "Please enter valid worked location",

                        maxlength: "Length should be less than 255",

                    },

                    course_name: {

                        //required: true,

                        minlength: "Course name should be of proper name",

                        maxlength: "Course name should not exceed more than 255",

                    },

                    cour_cert_img:{

                        //required:true,

                        accept: "Image should be of type jpg,jpeg,png",

                        filesize : "Size should be less than 5MB",

                    },

                    qualification:{

                        required: "Qualification is required",

                    },                   

                    studio_address: {

                        minlength: "Length should be more than 2 character",

                        maxlength: "Length should be less than 255 character",

                    },

                    skills:{

                        minlength: "Length should be more than 2 character",

                        maxlength:"Length should be less than 255 character",

                    },                    

                }

            });

        });

    </script>

