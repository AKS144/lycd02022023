<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Packages</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!------ Include the above in your HEAD tag ---------->
    <style type="text/css">
        .bg-gradient {
            background: #C9D6FF;
            background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);
            background: linear-gradient(to right, #E2E2E2, #C9D6FF);
        }

        ul li {
            margin-bottom: 1.4rem;
        }

        .pricing-divider {
            border-radius: 20px;
            background: #C64545;
            padding: 1em 0 4em;
            position: relative;
        }

        .blue .pricing-divider {
            background: #2D5772;
        }

        .green .pricing-divider {
            background: #1AA85C;
        }

        .red b {
            color: #ff0000
        }

        .blue b {
            color: #ff0000
        }

        .green b {
            color: #ff0000
        }

        .pricing-divider-img {
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 80px;
        }

        .deco-layer {
            -webkit-transition: -webkit-transform 0.5s;
            transition: transform 0.5s;
        }

        .btn-custom {
            background: #C64545;
            color: #fff;
            border-radius: 20px
        }

        .img-float {
            width: 50px;
            position: absolute;
            top: -3.5rem;
            right: 1rem
        }

        .princing-item {
            transition: all 150ms ease-out;
        }

        .princing-item:hover {
            transform: scale(1.05);
        }

        .princing-item:hover .deco-layer--1 {
            -webkit-transform: translate3d(15px, 0, 0);
            transform: translate3d(15px, 0, 0);
        }

        .princing-item:hover .deco-layer--2 {
            -webkit-transform: translate3d(-15px, 0, 0);
            transform: translate3d(-15px, 0, 0);
        }

        .btn-custom {
            background: #ff0000;
            color: #fff;
            border-radius: 20px;
        }

        @media only screen and (max-width: 600px) {
            .p-5 {
                padding: 0rem !important;
            }
        }

    </style>
</head>

<body>

    <div class="container-fluid  p-5">
        <h2 class="text-center">Select Package</h2><br>
        <div class="row m-auto text-center w-75">

            <div class="col-md-4 princing-item red">
                <div class="pricing-divider ">
                    <h3 class="text-light">START-UP</h3>
                    <h4 class="my-0 display-4 text-light font-weight-normal mb-3"><span class="h3">$</span>
                        120 <span class="h5">/mo</span></h4>
                    <input type="hidden" name="amount" class="form-control amount rzp_platinum" placeholder="Enter Amount"
                        value="120">

                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1'
                        preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px'
                        xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink'
                        xmlns='http://www.w3.org/2000/svg' y='0px'>
                        <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
    c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
    c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
    H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
    c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                    </svg>
                </div>
                <div class="card-body bg-white mt-0 shadow">
                    <ul class="list-unstyled mb-5 position-relative">
                        <li><b>10</b> users included</li>
                        <li><b>2 GB</b> of storage</li>
                        <li><b>Free </b> Email support</li>
                        <li><b>Help center access</b></li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block  btn-custom paynow " id="rzp_platinum">Pay Now</button>
                </div>
            </div>




            <div class="col-md-4 princing-item blue">
                <div class="pricing-divider ">
                    <h3 class="text-light">BUSINESS</h3>
                    <h4 class="my-0 display-4 text-light font-weight-normal mb-3"><span class="h3">$</span>
                        250 <span class="h5">/mo</span></h4>
                    <input type="hidden" name="amount" class="form-control package rzp_sliver" placeholder="Enter Amount"
                        value="250">

                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1'
                        preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px'
                        xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink'
                        xmlns='http://www.w3.org/2000/svg' y='0px'>
                        <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
    c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
    c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
    H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
    c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                    </svg>
                </div>

                <div class="card-body bg-white mt-0 shadow">
                    <ul class="list-unstyled mb-5 position-relative">
                        <li><b>100 </b>users included</li>
                        <li><b>10 GB</b> of storage</li>
                        <li><b>Free</b>Email support</li>
                        <li><b>Help center access</b></li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block paynow  btn-custom rzp-button1 " id="rzp_sliver">Pay
                        Now</button>
                </div>
            </div>






            <div class="col-md-4 princing-item green">
                <div class="pricing-divider ">
                    <h3 class="text-light">PRO</h3>
                    <h4 class="my-0 display-4 text-light font-weight-normal mb-3"><span class="h3">$</span>
                        450 <span class="h5">/mo</span></h4>
                    <input type="hidden" name="amount" class="form-control package rzp_gold" placeholder="Enter Amount"
                        value="450">

                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1'
                        preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px'
                        xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink'
                        xmlns='http://www.w3.org/2000/svg' y='0px'>
                        <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
    c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
    c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
    H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
    c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                    </svg>
                </div>

                <div class="card-body bg-white mt-0 shadow">
                    <ul class="list-unstyled mb-5 position-relative">
                        <li><b>300</b> users included</li>
                        <li><b>20 GB</b> of storage</li>
                        <li><b>Free</b> Email support</li>
                        <li><b>Help center access</b></li>
                    </ul>
                    <button type="button" value="120" class="btn btn-lg btn-block paynow  btn-custom rzp-button1" id="rzp_gold">Pay
                        Now</button>
                </div>
            </div>






        </div>
    </div>


</body>

</html>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>


<script type="text/javascript">
    $('body').on('click', '#rzp_gold', function(e) {

        e.preventDefault();

        var amount = $('.rzp_gold').val();

        var total_amount = amount * 100;

        var options = {

            "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard

            "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise

            "currency": "INR",

            "name": "Lighterature",

            "description": "Test Transaction",

            "image": "{{ asset('assets/img/logoweb.png') }}",

            "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1

            "handler": function(response) {

                $.ajaxSetup({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    }

                });

                $.ajax({

                    type: 'POST',

                    url: "{{ route('package') }}",

                    data: {
                        razorpay_payment_id: response.razorpay_payment_id,
                        amount: amount
                    },

                    success: function(data) {

                        $('.success-message').text(data.success);

                        $('.success-alert').fadeIn('slow', function() {

                            $('.success-alert').delay(5000).fadeOut();

                        });

                        $('.amount').val('');

                    }

                });

            },

            "prefill": {

                "name": "Rahul Naik",

                "email": "rahul@coderix.io",

                "contact": "9877665523"

            },

            "notes": {

                "address": "test test"

            },

            "theme": {

                "color": "#FF0D0D"

            }

        };

        var rzp1 = new Razorpay(options);

        rzp1.open();

    });

     $('body').on('click', '#rzp_sliver', function(e) {

        e.preventDefault();

        var amount = $('.rzp_sliver').val();

        var total_amount = amount * 100;

        var options = {

            "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard

            "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise

            "currency": "INR",

            "name": "Lighterature",

            "description": "Test Transaction",

            "image": "{{ asset('assets/img/logoweb.png') }}",

            "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1

            "handler": function(response) {

                $.ajaxSetup({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    }

                });

                $.ajax({

                    type: 'POST',

                    url: "{{ route('package') }}",

                    data: {
                        razorpay_payment_id: response.razorpay_payment_id,
                        amount: amount
                    },

                    success: function(data) {

                        $('.success-message').text(data.success);

                        $('.success-alert').fadeIn('slow', function() {

                            $('.success-alert').delay(5000).fadeOut();

                        });

                        $('.amount').val('');

                    }

                });

            },

            "prefill": {

                "name": "Rahul Naik",

                "email": "rahul@coderix.io",

                "contact": "9877665523"

            },

            "notes": {

                "address": "test test"

            },

            "theme": {

                "color": "#FF0D0D"

            }

        };

        var rzp1 = new Razorpay(options);

        rzp1.open();

    });

     $('body').on('click', '#rzp_platinum', function(e) {

        e.preventDefault();

        var amount = $('.rzp_platinum').val();

        var total_amount = amount * 100;

        var options = {

            "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard

            "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise

            "currency": "INR",

            "name": "Lighterature",

            "description": "Test Transaction",

            "image": "{{ asset('assets/img/logoweb.png') }}",

            "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1

            "handler": function(response) {

                $.ajaxSetup({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    }

                });

                $.ajax({

                    type: 'POST',

                    url: "{{ route('package') }}",

                    data: {
                        razorpay_payment_id: response.razorpay_payment_id,
                        amount: amount
                    },

                    success: function(data) {

                        $('.success-message').text(data.success);

                        $('.success-alert').fadeIn('slow', function() {

                            $('.success-alert').delay(5000).fadeOut();

                        });

                        $('.amount').val('');

                    }

                });

            },

            "prefill": {

                "name": "Rahul Naik",

                "email": "rahul@coderix.io",

                "contact": "9877665523"

            },

            "notes": {

                "address": "test test"

            },

            "theme": {

                "color": "#FF0D0D"

            }

        };

        var rzp1 = new Razorpay(options);

        rzp1.open();

    });



</script>
