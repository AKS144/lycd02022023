@include('layouts.header')

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha512-M5KW3ztuIICmVIhjSqXe01oV2bpe248gOxqmlcYrEzAvws7Pw3z6BK0iGbrwvdrUQUhi3eXgtxp5I8PDo9YfjQ==" crossorigin="anonymous"></script>



    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



    <!-- Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

   <!-- Breadcrumb Section Begin -->

<style>
 label.error {
            color: #dc3545;
            font-size: 16px;
        }
</style>
    <section class="breadcrumb-section spad set-bg" data-setbg="http://127.0.0.1:8000/assets/img/bg.jpg">

        <div class="container" style="padding-top: 65px; padding-bottom: 93px;">

            <div class="row">

                <div class="col-lg-12">

                    <div class="breadcrumb-text">

                        <h4>Add Wallet </h4>

                        <div class="bt-option">

                            <a href="./index.html"><i class="fa fa-home"></i> Add Wallet</a>

                            <span>Artist</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <div id="app">

        <main class="py-4">

            <div class="container">

                <div class="row">

                    <div class="col-md-6 offset-3 col-md-offset-6">

                        @if($message = Session::get('error'))

                            <div class="alert alert-danger alert-dismissible fade in" role="alert">

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                                    <span aria-hidden="true">×</span>

                                </button>

                                <strong>Error!</strong> {{ $message }}

                            </div>

                        @endif

                            <div class="alert alert-success success-alert alert-dismissible fade show" role="alert" style="display: none;">

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                                    <span aria-hidden="true">×</span>

                                </button>

                                <strong>Success!</strong> <span class="success-message"></span>

                            </div>

                        {{ Session::forget('success') }}

                        <div class="card card-default">

                            <div class="card-header">

                                Add Wallet Coins

                            </div>



                            <div class="card-body text-center">

                                <div class="form-group mt-1 mb-1">

                                    <input type="text" name="amount" class="form-control amount" placeholder="Enter Amount">

                                </div>

                                {{--  <button id="rzp-button1" class="btn btn-success btn-lg">Pay</button>

                                <a href="" ></a>  --}}

                                <button id="rzp-button1"  class="site-btn">Pay</button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </main>

    </div>



    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>

        $('body').on('click','#rzp-button1',function(e){

            e.preventDefault();

            var amount = $('.amount').val();

            var total_amount = amount * 100;

            var options = {

                "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard

                "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise

                "currency": "INR",

                "name": "Lighterature",

                "description": "Test Transaction",

                "image": "{{ asset('assets/img/logoweb.png') }}",

                "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1

                "handler": function (response){

                    $.ajaxSetup({

                        headers: {

                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                        }

                    });

                    $.ajax({

                        type:'POST',

                        url:"{{ route('payment') }}",

                        data:{razorpay_payment_id:response.razorpay_payment_id,amount:amount},

                        success:function(data){

                            $('.success-message').text(data.success);

                            $('.success-alert').fadeIn('slow', function(){

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

    @include('layouts.footer')