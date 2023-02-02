@include('layouts.header')

<!-- Header End -->



<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
    rel="stylesheet">

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<style>
    .spad {
        padding-top: 36px;
        padding-bottom: 19px;
        padding-left: 109px;
    }

    label {
        padding-top: 23px;
    }

</style>

<!-- Breadcrumb Section Begin -->

<section class="breadcrumb-section spad set-bg" data-setbg="img/bg.jpg">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="breadcrumb-text">

                    <h4>Get Quote </h4>

                    <div class="bt-option">

                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>

                        <span>Get Quote</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="about-section spad">

    <div class="container">

        <form action="{{ route('quotes.store') }}" method="POST" enctype="multipart/form-data">
            @method('post')
            @csrf

            <input type="hidden" name="wishlist_id"  value="{{ $wishlist->id }}" class="form-control">
            <input type="hidden" name="user_id"  value="{{ $wishlist->user_id }}" class="form-control">
            <input type="hidden" name="profile_id"  value="{{ $wishlist->profile_id }}" class="form-control">
            <input type="hidden" name="artist_id"  value="{{ $wishlist->artist_id }}" class="form-control">
            
            <div class="row">
                <div class="col-lg-6">
                    <label>Client Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                {{-- <div class="col-lg-6">
                    <label>Client Phone </label>
                    <input type="tel" name="" class="form-control">
                </div> --}}
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label>Client Email</label>
                    <input type="email" name="email" class="form-control">

                </div>
                <div class="col-lg-6">
                    <label>Client Address</label>  
                        <textarea name="address" rows="4" class="form-control"></textarea>  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label>Project Start Date </label>
                    <input type="date" name="start_date" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label>Project End Date</label>
                    <input type="date" name="end_date" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label>Select Project Budget</label>
                    <select name="quotes" class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label>Project Details</label>
                    <textarea name="project_details" rows="4" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    {{-- <a href="#" class="btn btn-primary">Submit</a> --}}
                    <button class="btn btn-primary">Submit</button>
                </div>

            </div>

        </form>

    </div>

</section>

<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>

<link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">





@include('layouts.footer')
