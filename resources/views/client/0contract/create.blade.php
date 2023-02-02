@include('layouts.header')

<!-- Header End -->



<link rel="stylesheet" type="text/css"

    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"

    rel="stylesheet">

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<style>

    .kbw-signature {

        width: 100%;

        height: 180px;

    }



    #signaturePad canvas {

        width: 100% !important;

        height: auto;

    }


</style>

<!-- Breadcrumb Section Begin -->

<section class="breadcrumb-section spad set-bg" data-setbg="img/bg.jpg">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="breadcrumb-text">

                    <h4>Contract </h4>

                    <div class="bt-option">

                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>

                        <span>Contract</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<section class="about-section spad">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">



                <form action="{{ route('contract.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <label>Client Name</label>

                    <input type="client_name" name="name" class="form-control"><br>

                    <input type="hidden" name="profile_id" class="form-control" value="{{ $profile->id }}">

                    <input type="hidden" name="u_id" class="form-control" value="{{ $profile->userid }}">

                   
                    <label>Mobile</label>

                    <input type="text" name="mobile" class="form-control"><br>



                    <label>Job Date</label>

                    <input type="date" name="job_date" class="form-control"><br>



                    <label>Job Completion Date</label>

                    <input type="date" name="end_date" class="form-control"><br>



                    <label>Job Details</label>

                    <textarea name="job_details" class="form-control "></textarea> <br>



                    <label>Address</label>

                    <textarea name="address" class="form-control "></textarea> <br>

                     <div>

                    <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">

                </div>

            </div>

            <div class="col-lg-6">

                <label>Client Email</label>

                <input type="email" name="email" class="form-control"><br>



                <label>Cost</label>

                <input type="number" name="cost" class="form-control"><br>



                <label>Requirements</label>

                <textarea name="requirements" class="form-control "></textarea> <br>



                <label>Description</label>

                <textarea name="description" class="form-control "></textarea> <br>

         



                <div class="col-md-12">

                    <label class="" for="">Signature:</label>


                    <div id="signaturePad"></div>

            
                    <button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>

                    <textarea id="signature64" name="signed" style="display: none"></textarea>

                </div>

               

            </div>

        </div><br>

        </form>

    </div>

</section>

<script type="text/javascript" src="{{asset('assets/js/jquery.signature.js')}}"></script>

<link rel="stylesheet" type="text/css" href="{{asset('assets/js/jquery.signature.css')}}">

<script type="text/javascript">

    var signaturePad = $('#signaturePad').signature({

        syncField: '#signature64',

        syncFormat: 'PNG'

    });

    $('#clear').click(function(e) {

        e.preventDefault();

        signaturePad.signature('clear');

        $("#signature64").val('');

    });

</script>



@include('layouts.footer')

