@include('layouts.header')

<style type="text/css">
    .spad {
    padding-top: 36px;
    padding-bottom: 19px;
    padding-left: 47px;
}
b, sup, sub, u, del {
    color: #000000;
}
.fa, .far, .fas {
    font-family: "Font Awesome 5 Free";
    color: red;
}
.card-body {
    padding: 0.9rem;
}
a {
    color: #ff0000;
    text-decoration: none;
    background-color: transparent;
}
</style>

<section class="breadcrumb-section spad set-bg" data-setbg="{{asset('assets/img/bg.jpg')}}">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="breadcrumb-text">

                    <h4>Job </h4>

                    <div class="bt-option">

                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>

                        <span>Job Details</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<br>



<section class="property-section latest-property-section spad">

    <div class="container">



        <div class="row">

            <div class="col-sm-8">

                <div class="card">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-lg-8">

                                <h5 class="card-title"><b>Required Freelancer Photographer in Panaji</b></h5>

                                <p class="card-text">

                                    <i class="fa fa-map-marker"></i> Panjim <i class="fa fa-clock-o"></i> {{ $job->created_at->diffForHumans() }}

                                    <b>₹ 34,000</b>

                                </p>



                            </div>

                            {{-- @if(Auth::check() != NULL) --}}
                            <div class="col-lg-4 text-right">
                                {{-- <a href="#" class="primary-btn">Apply Now</a> --}}
                                <form action="{{ route('jobapply.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="artist_id" type="text" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="artist_name" type="text" value="{{ Auth::user()->name }}">
                                    <input type="hidden" name="artist_email" type="text" value="{{ Auth::user()->email }}">
                                    <input type="hidden" name="artist_mobile" type="text" value="{{ Auth::user()->mobile }}">
                                    <input type="hidden" name="job_id" type="text" value="{{ $job->id }}">   
                                      <input type="hidden" name="coins" type="text" value="{{ $job->coins }}">   
                                    {{-- <input type="hidden" name="coins" type="text" value="{{ $job->coins }}">                    --}}
                                    <button class="btn btn-primary " onclick="alert('Are you sure you want to continue?')">Apply Now  <img src="{{asset('assets/img/coin.png')}}" style="    width: 34px;
    height: 17px;">{{ $job->coins }} </button>                                  
                                </form>
                            </div>
                            {{-- @endif --}}
                        </div>

                    </div>

                </div>

            </div>



            <div class="col-lg-4">



                <div class="card" style="width: 18rem;">

                    <div class="card-body">

                        <h5 class="card-title"><b>Related Jobs</b></h5>

                        <h6 class="card-subtitle mb-2 text-muted" style="font-size: 15px;font-weight: 600;">Required Freelancer Photographer in Ponda</h6>

                        <p class="card-text">Some quick example text to build on the card title and make up the

                            bulk of the card's content.</p>

                        <a href="#" class="card-link">Apply Now</a>

                        <a href="#" class="card-link">Show</a>

                    </div>

                </div><br>

            </div>





        </div><br>

        <div class="row">



            <div class="col-lg-8" style="margin-top: -92px;">

                <h6 class="card-title"><b>Job Role</b></h6>

                <p align="justify">{{ $job->name }}</p>


                <b>Requirements:</b><br>

              
                <p align="justify">{{ $job->requirements }}</p>



                <b>Location:</b></br>

                <p align="justify">{{ $job->location->name }}</p>


            </div>

            <div class="col-lg-4">

                <div class="card" style="width: 18rem;">

                     <div class="card-body">

                      

                        <h6 class="card-subtitle mb-2 text-muted" style="font-size: 15px;font-weight: 600;">Required Photographer in Ponda</h6>

                        <p class="card-text">Some quick example text to build on the card title and make up the

                            bulk of the card's content.</p>

                        <a href="#" class="card-link">Apply Now</a>

                        <a href="#" class="card-link">Show</a>

                    </div>

                </div> <br>

                <div class="card" style="width: 18rem;">

                    <div class="card-body">

                       

                        <h6 class="card-subtitle mb-2 text-muted" style="font-size: 15px;font-weight: 600;">Required Full Time Photographer in Ponda</h6>

                        <p class="card-text">Some quick example text to build on the card title and make up the

                            bulk of the card's content.</p>

                        <a href="#" class="card-link">Apply Now</a>

                        <a href="#" class="card-link">Show</a>

                    </div>

                </div><br>

            </div>

        </div>

    </div>

</section>

</div>



@include('layouts.footer')