<?php $page = 'developer'; ?>
@extends('layout.mainlayout')
@section('content')
<style>
    .proposal-img img {
        width: 112px;
        height: 112px;
        border-radius: 50%;
    }

    .proposals-img img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
    }

    .fa-star:before {
        content: "\f005";
        color: #e9b011;
    }
 </style>
<style>
    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rate:not(:checked)>input {
        position: absolute;
        display: none;
    }

    .rate:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
        margin-top: -14px;
        padding: 0px 3px;
    }

    .rate:not(:checked)>label:before {
        content: '★ ';
    }

    .rate>input:checked~label {
        color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
        color: #c59b08;
    }

    .rating-container .form-control:hover,
    .rating-container .form-control:focus {
        background: #fff;
        border: 1px solid #ced4da;
    }

    .rating-container textarea:focus,
    .rating-container input:focus {
        color: #000;
    }

    label.error {
        color: #dc3545;
        font-size: 14px;
    }

    i.fa:hover {
        opacity: 0.7;
    }

    .fa-facebook {
        background: #3b5998;
    }

    .fa-twitter {
        background: #2595ea;
    }

    .fa-whatsapp {
        background: #58b109;
    }


    .fa-envelope {
        background: #088aec;
    }

    .social_icon {

        justify-content: space-between;
        align-items: center;
        margin: 15px 0;
    }

    .icons {
        padding: 7px;
        margin: 15px;
        width: 47px;
        font-size: 28px;
        text-align: center;
        text-decoration: none;
        border-radius: 10px;
        color: #fff;
    }


    .badge {
        display: inline-block;
        padding: 0.35em 0.65em;
        font-size: 15px;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 1.25rem;
        background: #F79533;
    }

    .view-image i {
        width: 28px;
        height: 28px;
        background: #FF5B37;
        color: #fff;
        border-radius: 50px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .view-image {
        margin-left: auto;
    }

    .badge-skills:hover {
        background-color: #000000;
    }

    .album-img {
        width: 202px;
        height: 197px;
        border-radius: 12px;
    }

    @media only screen and (max-width: 600px) {
        .album-img {
            width: 100%;
            border-radius: 12px;
        }
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<!-- <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center inner-banner">
                <div class="col-md-12 col-12 text-center">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Blank Page</h2>
                </div>
            </div>
        </div>
    </div> -->
<div class="content" style="min-height: 50px;">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <h1>I will search and apply remote job applications or find online jobs</h2>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="proposals-img">

                                <img src="{{ asset('assets/img/avatar-artist.jpg') }}" alt="" class="img-fluid">
                                <b>{{ $profile->name ?? '' }}</b> | <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> (23) 1 Order in Queue
                            </div>
                        </div>

                    </div>
                    <br>

                    <div class="fotorama" data-nav="thumbs">
                        @foreach ($albums as $album)
                        <img src="{{ asset('cover_image/' . $album->cover_image) }}" height="300" width="100%">
                        @endforeach
                    </div>
                    <h3>About Gigs</h3>
                    <div class="description-wrapper"><span style="font-size: 0px;"></span>
                        <div class="description-content" data-impression-collected="true">

                            <p><br></p>
                            <p><strong>{{ $profile->overview ?? '' }}</strong></p>
                            <p><br></p>
                            <p>If you don't have time to search or having trouble to find a new job, do you get
                                frustrated
                                with the application process? Looking for a<strong>&nbsp;Search and apply job
                                    applications
                                    Expert</strong>&nbsp;to find&nbsp;<strong>Online Remote jobs&nbsp;</strong>for your
                                career growth,&nbsp;then you are in the right place.</p>
                            <p><br></p>
                            <p><strong>✪&nbsp;FREE&nbsp;Job search and apply for 2 job applications of your choice as a
                                    sample Career Service Provider.</strong></p>
                            <p><br></p>
                            <p><strong>WHY ME!!</strong></p>
                            <ul>
                                <li>A professional Career Counselor and job search assistant. I have knowledge of many
                                    job
                                    search techniques.</li>
                                <li>Will search for all the new jobs according to your requirements. If you liked the
                                    jobs
                                    then I will start applications.</li>
                                <li>Provide candidate profile with list of&nbsp;jobs I applied for you</li>
                                <li>Complete Excel Datasheet with Job apply status, job search links, company details
                                    and
                                    Post applied</li>
                                <li>Fully Responsive system you will notify via email that you applied on this remote
                                    job
                                </li>
                                <li>Fast Career Service</li>
                                <li>100% Satisfaction</li>
                                <li>Advanced 24/7 Support</li>
                            </ul>

                            <p>Please contact me before placing the order.</p>
                            <p>Thanks</p>
                        </div>

                    </div>
                    <h3>About Photographer</h3>
                    <div class="row">
                        <div class="col-6">

                            <div class="proposal-img">
                                <div class="text-md-center">
                                    <img src="{{ asset('assets/img/avatar-artist.jpg') }}" alt="" class="img-fluid">
                                </div>
                            </div>

                        </div>
                        <div class="col-6">
                            <h4>{{ $profile->name ?? '' }}</h4>
                            <p>Client satisfaction is our firsr priority</p>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i> (23)


                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="pro-title">Basic info.</h4>
                            </div>
                            <div class="col-6">
                                From <br><b>{{ $profile->location ?? '' }}</b>
                            </div>
                            <div class="col-6">
                                Member since <br>
                                <b>May 2022</b>
                            </div>
                            <div class="col-6">
                                Avg. response time <br><b>1 hour</b>
                            </div>
                            <div class="col-6">
                                Last delivery <br>
                                <b>5 days</b>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <p align="justify">Hello, welcome to our Studio!! We are experienced with multi-talented
                                    and
                                    well equipped
                                    with several skills and specialties. Our skillset and intention working with our
                                    clients
                                    spin around the business and job growth. The fact which makes us unique from others
                                    is
                                    we have a versatile service offering to our clients and help them to grow their
                                    business. We have great taste for quality work and our past clients can testify
                                    that...
                                    We'll be looking forward to working with you!</p>
                            </div>

                        </div>
                        <div class="pro-post project-widget widget-box project-gallery" id="project">
                            <h3 class="pro-title">Genre</h3>
                            <div class="pro-content">
                                <div class="row">
                                    @foreach ($albums as $album)
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="project-widget">
                                            <div class="pro-image">

                                                <img class="img-fluid album-img" alt="User Image" src="{{ asset('cover_image/' . $album->cover_image) }}">

                                            </div>
                                            <div class="project-footer">
                                                <div class="d-flex align-items-center">
                                                    <div class="pro-detail">
                                                        <h3 class="pro-name">
                                                            <a class="" data-bs-toggle="modal" href="#gallery{{ $album->id }}">{{ $album->name ?? '' }}</a>
                                                        </h3>
                                                        <p class="pro-designation"> <a class="" data-bs-toggle="modal" href="#gallery{{ $album->id }}">{{ $album->name ?? '' }}</a></p>
                                                    </div>
                                                    <div class="view-image">
                                                        <a class="" data-bs-toggle="modal" href="#gallery{{ $album->id }}"><i class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal fade custom-modal" id="gallery{{ $album->id }}">
                                        <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;">
                                            <div class="modal-content bg-modal">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <style>
                                                        .bg-modal:before {
                                                            content: "";
                                                            position: absolute;
                                                            margin: -32px;
                                                            width: 100px;
                                                            top: 0;
                                                            left: 0;
                                                            height: 100px;
                                                            border-radius: 50%;
                                                            background-color: transparent;
                                                            overflow: hidden;
                                                        }

                                                        @media (min-width: 576px) {
                                                            .col-sm-3 {
                                                                flex: 0 0 auto;
                                                                width: 33%;
                                                            }
                                                        }
                                                    </style>
                                                    <div class="text-center pt-0 mb-4">
                                                        <!-- <img src="assets/img/logo-01.png" alt="logo" class="img-fluid mb-1"> -->
                                                        <!-- <h2>LYTAA</h2>
                                                    <h5 class="modal-title">Discuss your project with {{ $profile->name ?? '' }}</h5> -->
                                                    </div>

                                                    <div class="modal-info">
                                                        <div class="row">
                                                            @foreach ($album->photos as $photo)
                                                            <div class="col-sm-3 text-center loadMore" style=" padding-bottom: 42px;">
                                                                <img class="lightboxed" rel="group1" src="{{ asset('photo/' . "$photo->photo") }}" data-link="{{ asset('photo/' . "$photo->photo") }}" alt="Image Alt 2" width="300" />
                                                            </div>
                                                            <br>
                                                            <br>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="submit-section text-center">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-md-12">
                                        <a href="project.html" id="load_more" class="btn more-btn">View more </a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="pro-post project-widget widget-box technical-skill" id="skill">
                            <h3 class="pro-title">Equipement </h3>
                            <div class="pro-content">
                                <div class="tags">
                                    @foreach($items as $items)
                                    <span class="badge badge-pill badge-skills"> + {{ $items->name ?? '' }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pro-post project-widget widget-box">
                                    <h3 class="pro-title mb-3">Feedbacks</h3>

                                    <div class="">
                                        @foreach ($profile->reviews as $review)
                                        <div class="about-author">
                                            <div class="about-author-img">
                                                <div class="author-img-wrap">
                                                    <a href="review">
                                                        <!-- <img class="img-fluid" alt="" src="{{ asset('assets/img/img-01.png') }}"> -->
                                                        <div class="avatar">
                                                            <img class="avatar-img rounded-circle" alt="User Image" src="https://kofejob.dreamguystech.com/template/admin/assets/img/profiles/avatar-02.jpg">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="author-details">
                                                <a href="review" class="blog-author-name">
                                                    {{ $review->name ?? '' }}</a>
                                                <h5>Techline Oct 25, 2021 - Nov 18, 2021</h5>
                                                @for ($i = 1; $i <= $review->star_rating; $i++)
                                                    <i class="fa fa-star text-warning"></i>
                                                @endfor
                                                    <p class="mb-0">{{ $review->comments ?? '' }}</p>
                                            </div>
                                        </div>
                                        @endforeach


                                        <div class="card-body">
                                            <div class="payment-list">
                                                <!-- <h3>Write Review</h3> -->
                                                <form action="{{ route('review.store') }}" method="POST" class="review-form">
                                                    @method('post')
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            
                                                        </div>
                                            
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- Feedback Tab Content -->


                            </div>
                        </div>
                    </div>
            </div>

        </div>
        <div class="col-md-4 theiaStickySidebar">

            <!-- <div class="pro-post widget-box about-widget">
                        <div class="row">
                            <div class="col-12 ">
                                <h4 class="pro-title">Hire Me</h4>
                            </div>
                            <div class="col-12 text-center">
                            <h1>₹423
                               </h1>
                            </div>
                            <div class="col-6 text-center">
                            <button class="btn btn-primary">Hire Me</button>
                             
                            </div>
                            <div class="col-6 text-center">
                          
                                <button class="btn btn-primary">Shortlist</button>
                            </div>

                        </div>
                      
                    </div> -->
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                    <li class="nav-item"><a class="nav-link active" href="#bottom-justified-tab1" data-bs-toggle="tab">Basic</a></li>
                    <li class="nav-item"><a class="nav-link" href="#bottom-justified-tab2" data-bs-toggle="tab">Standard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#bottom-justified-tab3" data-bs-toggle="tab">Premium</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="bottom-justified-tab1">
                        <div class="row">
                            <br>
                            <br>
                            <div class="col-md-6 text-center">
                                <h4> <b>A 6 sec Gif </b></h4>
                            </div>
                            <div class="col-md-6 text-center">
                                <h4> <b>₹14,786</b></h4>
                            </div>
                            <br>
                            <br>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="">This package includes a 2 seconds hand drawn frame by frame
                                    2d gif.</p>
                            </div>
                            <div class="col-md-6"><i class="far fa-clock"></i> 4 Days Delivery</div>
                            <div class="col-md-6"><i class="fas fa-sync"></i> 4 Days Delivery</div>
                            <br>
                            <br>
                            <div class="col-md-12">
                                <ul class="list-unstyled mb-0">
                                    <li><i class="fas fa-check"></i> 2-second running time</li>
                                    <li><i class="fas fa-check"></i> Consectetur adipiscing elit</li>
                                    <li><i class="fas fa-check"></i> Integer molestie lorem at massa</li>
                                    <li><i class="fas fa-check"></i> Facilisis in pretium nisl aliquet</li>
                                </ul>
                                <br>
                                <a class="btn w-100 btn-outline-primary active" data-bs-toggle="modal" href="#hire">Hire Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="bottom-justified-tab2">
                        <div class="row">
                            <br>
                            <br>
                            <div class="col-md-6 text-center">
                                <h4> <b>A 8 sec Gif </b></h4>
                            </div>
                            <div class="col-md-6 text-center">
                                <h4> <b>₹16,786</b></h4>
                            </div>
                            <br>
                            <br>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="">This package includes a 2 seconds hand drawn frame by frame
                                    2d gif.</p>
                            </div>
                            <div class="col-md-6"><i class="far fa-clock"></i> 4 Days Delivery</div>
                            <div class="col-md-6"><i class="fas fa-sync"></i> 4 Days Delivery</div>
                            <br>
                            <br>
                            <div class="col-md-12">
                                <ul class="list-unstyled mb-0">
                                    <li><i class="fas fa-check"></i> 2-second running time</li>
                                    <li><i class="fas fa-check"></i> Consectetur adipiscing elit</li>
                                    <li><i class="fas fa-check"></i> Integer molestie lorem at massa</li>
                                    <li><i class="fas fa-check"></i> Facilisis in pretium nisl aliquet</li>
                                </ul>
                                <br>


                                <button type="button" class="btn w-100 btn-outline-primary active">Hire Me</button>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="bottom-justified-tab3">
                        <div class="row">
                            <br>
                            <br>
                            <div class="col-md-6 text-center">
                                <h4> <b>A 10 sec Gif </b></h4>
                            </div>
                            <div class="col-md-6 text-center">
                                <h4> <b>₹18,786</b></h4>
                            </div>
                            <br>
                            <br>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="">This package includes a 2 seconds hand drawn frame by frame
                                    2d gif.</p>
                            </div>
                            <div class="col-md-6"><i class="far fa-clock"></i> 4 Days Delivery</div>
                            <div class="col-md-6"><i class="fas fa-sync"></i> 4 Days Delivery</div>
                            <br>
                            <br>
                            <div class="col-md-12">
                                <ul class="list-unstyled mb-0">
                                    <li><i class="fas fa-check"></i> 2-second running time</li>
                                    <li><i class="fas fa-check"></i> Consectetur adipiscing elit</li>
                                    <li><i class="fas fa-check"></i> Integer molestie lorem at massa</li>
                                    <li><i class="fas fa-check"></i> Facilisis in pretium nisl aliquet</li>
                                </ul>
                                <br>


                                <button type="button" class="btn w-100 btn-outline-primary active">Hire Me</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="pro-post widget-box post-widget profile-link">
                <h3 class="pro-title">Profile Link</h3>
                <div class="pro-content">
                    <div class="form-group profile-group mb-0">
                        <div class="input-group">
                            <!-- <input type="text" class="form-control" id="share_url" value="https://www.kofejob.com/developer/daren/12454687" > -->
                            <input type="text" value="https://lytaa.com/profshow/{{ $profile->id ?? '' }}" class="filter form-control" id="share_url" placeholder="Filter Posts" readonly>

                            <div class="input-group-append">
                                <button class="btn ctoCb" id="clipboard">
                                    <i class="far fa-clipboard"></i>
                                </button>
                            </div>

                        </div>
                        <div class="social_icons">
                            <div class="social_icon">
                                <a id="shareWithFb"><i class="fab fa-facebook icons"></i></a>
                                <a id="shareWithTwitter"><i class="fab fa-twitter icons"></i></a>
                                <a id="shareWithWhatsapp"><i class="fab fa-whatsapp icons"></i></a>
                                <a id="shareWithMail"><i class="fas fa-envelope icons"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>


<!-- The Modal -->
<div class="modal fade custom-modal" id="hire">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center pt-0 mb-4">                  
                    <h2>LYTAA</h2>
                    <h5 class="modal-title">Discuss your project with <a style="color:orangered">{{ $profile->name ?? '' }}</a></h5>
                </div>

                <div class="modal-info">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <form action="{{ route('quotes.store') }}" method="POST" id="quotes">
                                @csrf
                            
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                                </div>

                                <input type="hidden" name="profile_id" class="form-control" value="{{ $profile->id ?? '' }}">
                                <input type="hidden" name="artist_id" class="form-control" value="{{ $profile->userid ?? '' }}">
                                <input type="hidden" name="artist_name" class="form-control" value="{{ $profile->name ?? '' }}">
                                <input type="hidden" name="artist_email" class="form-control" value="{{ $profile->email ?? '' }}">


                                <div class="form-group">
                                    <label for="">
                                        <input type="radio" id="hideChecked" name="end_date" value="hide">
                                        One-Day
                                    </label> &nbsp;
                                    <label for="">
                                        <input type="radio" id="showChecked" name="end_date" value="show" selected>
                                        Multiple-day
                                    </label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Start Date</label>
                                            <input type="date" id="start_date" name="start_date" class="form-control" value="{{ old('start_date', isset($job) ? $job->start_date : '') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">                                 
                                    <label for="client_price">Your estimate price</label>
                                    <input type="text" name="client_price" id="client_price" class="form-control" value="{{ old('client_price') }}" required>
                                    @if ($errors->has('Client_price'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('Client_price') }}
                                    </em>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Price Type</label>
                                    <select name="price_type" id="price_type" class="form-select" value="{{ old('price_type') }}" required>
                                        <option value="">Select Price Type</option>
                                        <option value="Flexible">Flexible</option>
                                        <option value="Fixed">Fixed</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Location</label>
                                    <select name="location_id" id="location_id" class="form-select" value="{{ old('location_id') }}" required>
                                        <option value="">Select Location</option>
                                        @foreach($city as $id => $city)
                                            <option value="{{ $id }}">{{ $city }}</option>
                                        @endforeach                                     
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" id="category_id" class="form-select" value="{{ old('category_id') }}" required>
                                        <option value="">Select Category</option>
                                        @foreach($category as $id => $category)
                                            <option value="{{ $id }}">{{ $category }}</option>
                                        @endforeach                                     
                                    </select>
                                </div>
                            <!-- </div>
                        <div class="col-6 col-md-6">                           -->
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" placeholder="Email Address">
                            </div>               

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12" id="input1">
                                        <br>
                                        <label>End Date</label>
                                        <input type="date" id="end_date" name="end_date" class="form-control" value="{{ old('end_date', isset($job) ? $job->end_date : '') }}">
                                    </div>
                                </div>
                                <br>
                                <label>Project Budget</label>
                                <select name="projected_budget" id="projected_budget" class="form-select" required>
                                    <option value="">Select your Budget</option>
                                    @foreach ($rewards as $budget => $reward)
                                    <option value="{{ $budget }}" {{ (isset($job) && $job->reward ? $job->reward->budget : old('rewards')) == $budget ? 'selected' : '' }}>
                                        {{ $reward }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Job Type</label>
                                <select name="job_type" id="jobtype" class="form-select" value="{{ old('jobtype') }}" required>
                                    <option value="">Select Job Type</option>
                                    <option value="Part-Time">Part-Time</option>
                                    <option value="Full-Time">Full-Time</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Project Details</label>
                                <textarea class="form-control" name="project_details" id="project_details" rows="4" placeholder="Project Details"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Address</label>                               
                                <textarea class="form-control" name="address" id="address" rows="5" placeholder="Address">{{ old('address') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit-section text-center">
                    <button type="submit" class="btn btn-primary btn-block submit-btn">Hire Now</button>
                </div>
                </form>
            </div>    
            </div>
        </div>
    </div>
</div>
<!-- /The Modal -->
@endsection