@include('layouts.header')



 <!-- Property Details Section Begin -->

    <section class="property-details-section">

        <div class="property-pic-slider owl-carousel">

            <div class="ps-item">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-6">

                            <div class="row">

                                <div class="col-lg-12 p-0">

                                    <div class="ps-item-inner large-item set-bg" data-setbg="http://127.0.0.1:8000/assets/img/slider/slider3.jpg"></div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="row">

                                <div class="col-sm-6 p-0">

                                    <div class="ps-item-inner set-bg" data-setbg="http://127.0.0.1:8000/assets/img/slider/slider4.jpg"></div>

                                </div>

                                <div class="col-sm-6 p-0">

                                    <div class="ps-item-inner set-bg" data-setbg="http://127.0.0.1:8000/assets/img/slider/slider5.jpg"></div>

                                </div>

                                <div class="col-sm-6 p-0">

                                    <div class="ps-item-inner set-bg" data-setbg="http://127.0.0.1:8000/assets/img/slider/slider3.jpg"></div>

                                </div>

                                <div class="col-sm-6 p-0">

                                    <div class="ps-item-inner set-bg" data-setbg="http://127.0.0.1:8000/assets/img/slider/slider5.jpg"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="ps-item">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-6">

                            <div class="row">

                                <div class="col-lg-12 p-0">

                                    <div class="ps-item-inner large-item set-bg" data-setbg="http://127.0.0.1:8000/assets/img/slider/slider1.jpg"></div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="row">

                                <div class="col-sm-6 p-0">

                                    <div class="ps-item-inner set-bg" data-setbg="http://127.0.0.1:8000/assets/img/slider/slider1.jpg"></div>

                                </div>

                                <div class="col-sm-6 p-0">

                                    <div class="ps-item-inner set-bg" data-setbg="http://127.0.0.1:8000/assets/img/slider/slider2.jpg"></div>

                                </div>

                                 <div class="col-sm-6 p-0">

                                    <div class="ps-item-inner set-bg" data-setbg="http://127.0.0.1:8000/assets/img/slider/slider1.jpg"></div>

                                </div>

                                <div class="col-sm-6 p-0">

                                    <div class="ps-item-inner set-bg" data-setbg="http://127.0.0.1:8000/assets/img/slider/slider2.jpg"></div>

                                </div>                               

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="container">

            <div class="row" >

                <div class="col-lg-12">

                    <div class="pd-text" style="z-index: 1;

    margin-top: -236px;

    position: relative;

    background: #fff;border-radius: 30px;">

                        <div class="row" style="padding:19px;">

                             <div class="col-lg-2">

                                <img src="{{asset('assets/img/profile/profile.png')}}"><br>

                             </div>

                            <div class="col-lg-5">

                                <div class="pd-title">

                                    <!-- <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> -->

                                    <div class="label">For Hire</div>

                                    <!-- <div class="pt-price">$ 289.0<span>/month</span></div> -->
                                    @foreach($profile as $profiles) 
                                        <h3> {{ $profiles->name }}</h3><img src="{{asset('assets/img/verify/verify.svg')}}" style="width: 22px;  height: 19px;  margin-left: 398px; margin-top: -71px;">
                                    @endforeach
                                   

                                   <p> Add Short List | <span class="fas fa-star"></span> 4.5/5 (35 reviews) </p>

                                </div>

                            </div>

                            <div class="col-lg-3">

                                <div class="pd-social">

                                    <a href="#"><i class="fa fa-mail-forward"></i></a>

                                    <a href="#"><i class="fa fa-send"></i></a>

                                    <a href="#"><i class="fa fa-heart"></i></a>

                                    <a href="#"><i class="fa fa-mail-forward"></i></a>

                                    <a href="#"><i class="fa fa-cloud-download"></i></a>

                                </div>

                            </div>

                        </div>

                        <div class="pd-board">

                            <div class="tab-board">

                                <ul class="nav nav-tabs" role="tablist">

                                    <li class="nav-item">

                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Overview</a>

                                    </li>

                                   <!--  <li class="nav-item">

                                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Description</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Equipment

</a>

                                    </li> -->

                                </ul><!-- Tab panes -->

                                <div class="tab-content">

                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">

                                        <div class="tab-details">

                                            <ul class="left-table">

                                                <li>

                                                    <span class="type-name">Namea</span>

                                                     {{-- <span class="type-value">{{ $profile->user_id }}</span>  --}}

                                                </li>

                                                <li>

                                                    <span class="type-name">Last Name</span>

                                                    <span class="type-value">McWhirter</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Mobile</span>

                                                    <span class="type-value">+91 9977665546</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Gender</span>

                                                    <span class="type-value">Male</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Contract type</span>

                                                    <span class="type-value">Rent</span>

                                                </li>

                                                <!-- <li>

                                                    <span class="type-name">Agent</span>

                                                    <span class="type-value">Ashton Kutcher</span>

                                                </li> -->

                                            </ul>

                                            <ul class="right-table">

                                                <li>

                                                  
                                                    {{-- <span class="type-name">{{ $prof->items->name  }}</span> --}}
                                                  
                                                    <span class="type-value">Autel Robotics Drone</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Camera</span>

                                                    <span class="type-value">Canon, Nikon</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Studio</span>

                                                    <span class="type-value">1</span>

                                                </li>

                                                <!-- <li>

                                                    <span class="type-name">Skills</span>

                                                    <span class="type-value"></span>

                                                </li> -->

                                                <li>

                                                    <span class="type-name">Other equipments</span>

                                                    <span class="type-value">2</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Year Of Experience</span>

                                                    <span class="type-value">2</span>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="tab-pane" id="tabs-2" role="tabpanel">

                                        <div class="tab-desc">

                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolor itaque facere consequatur, dignissimos minus adipisci ipsam repudiandae nisi illum provident, natus quidem vero? Quaerat ducimus sequi praesentium commodi, consectetur corporis eos sit perspiciatis, quae sed officia error, iure quasi.</p>

                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolor itaque facere consequatur, dignissimos minus adipisci ipsam repudiandae nisi illum provident, natus quidem vero? Quaerat ducimus sequi praesentium commodi, consectetur corporis eos sit perspiciatis, quae sed officia error, iure quasi.</p>

                                        </div>

                                    </div>

                                    <div class="tab-pane" id="tabs-3" role="tabpanel">

                                        <div class="tab-details">

                                            <ul class="left-table">

                                                <li>

                                                    <span class="type-name">Property Type</span>

                                                    <span class="type-value">House</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Property ID</span>

                                                    <span class="type-value">#219</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Price</span>

                                                    <span class="type-value">$ 289.0/mounth</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Year Built</span>

                                                    <span class="type-value">2019</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Contract type</span>

                                                    <span class="type-value">Rent</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Agent</span>

                                                    <span class="type-value">Ashton Kutcher</span>

                                                </li>

                                            </ul>

                                            <ul class="right-table">

                                                <li>

                                                    <span class="type-name">Home Area</span>

                                                    <span class="type-value">1200 sqft</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Rooms</span>

                                                    <span class="type-value">9</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Bedrooms</span>

                                                    <span class="type-value">4</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Bathrooms</span>

                                                    <span class="type-value">3</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Garages</span>

                                                    <span class="type-value">2</span>

                                                </li>

                                                <li>

                                                    <span class="type-name">Parking lots</span>

                                                    <span class="type-value">2</span>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



<!-- 

                        <div class="pd-widget">

                               <h4> Albums</h4>

                            <div class="row">

                           

                            <div class="col-lg-4">

                                <div class="test2" >

                                  <p>ALBUMS 1</p>

                                </div>

                            </div>

                             <div class="col-lg-4">

                                <div class="test2">

                                 <p>ALBUMS 2</p>

                                </div>

                            </div>

                             <div class="col-lg-4" style="padding: 118px;">

                               <a class="primary-btn" style="color:#fff;">ALBUM<span style="font-size: 20px;"> +</span></a>

                            </div>



                        </div>

                        </div>

 -->

                        <!--  <div class="pd-widget">

                               <h4> Video</h4>

                            <div class="row">

                           

                            <div class="col-lg-4">

                                <iframe width="420" height="245" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1"></iframe>

                            </div>

                             <div class="col-lg-4">

                              <iframe width="420" height="245" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1"></iframe>

                            </div>

                             <div class="col-lg-4" style="padding: 118px;">

                               <a class="primary-btn" style="color:#fff;">Video<span style="font-size: 20px;"> +</span></a>

                            </div>



                        </div>

                        </div> -->

                        <div class="pd-board">

                           <div class="tab-board">

                                <ul class="nav nav-tabs" role="tablist">

                                    <li class="nav-item">

                                        <a class="nav-link active" data-toggle="tab" href="#portfolio" role="tab">Portfolio</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" data-toggle="tab" href="#albums" role="tab">Album</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" data-toggle="tab" href="#video" role="tab">Video

</a>

                                    </li>

                                </ul><!-- Tab panes -->

                                <div class="tab-content">

                                    <div class="tab-pane active" id="portfolio" role="tabpanel">

                                        <div class="tab-desc">

                                           <div class="row">

                                             <div class="col-lg-3">

                                                 <a class="example-image-link" href="http://localhost/front-end-photo/img/slider/slider1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img src="{{asset('assets/img/slider/slider1.jpg') }}" class="example-image"></a>

                                             </div>

                                              <div class="col-lg-3">

                                                 <img src="{{asset('assets/img/slider/slider2.jpg') }}">

                                                 

                                             </div>

                                              <div class="col-lg-3">

                                                 <img src="{{asset('assets/img/slider/slider3.jpg') }}">

                                                 

                                             </div>

                                              <div class="col-lg-3">

                                                 <img src="{{asset('assets/img/slider/slider4.jpg') }}">

                                                 

                                             </div>



                                           </div> <br>

                                           <div class="row">

                                             <div class="col-lg-3">

                                                 <img src="{{asset('assets/img/slider/slider1.jpg') }}">

                                             </div>

                                              <div class="col-lg-3">

                                                 <img src="{{asset('assets/img/slider/slider2.jpg') }}">

                                                 

                                             </div>

                                              <div class="col-lg-3">

                                                 <img src="{{asset('assets/img/slider/slider3.jpg') }}">

                                                 

                                             </div>

                                              <div class="col-lg-3">

                                                 <img src="{{asset('assets/img/slider/slider4.jpg') }}">

                                                 

                                             </div>

                                             

                                           </div> 

                                        </div>

                                    </div>

                                    <div class="tab-pane" id="albums" role="tabpanel">

                                        <div class="tab-desc">

                                            <div class="row">

                           

                            <div class="col-lg-4">

                                <div class="test2" >

                                  <p>ALBUMS 1</p>

                                </div>

                            </div>

                             <div class="col-lg-4">

                                <div class="test2">

                                 <p>ALBUMS 2</p>

                                </div>

                            </div>

                             <div class="col-lg-4" style="padding: 118px;">

                               <a class="primary-btn" style="color:#fff;">ALBUM<span style="font-size: 20px;"> +</span></a>

                            </div>



                        </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane" id="video" role="tabpanel">

                                       <div class="tab-desc">

                                        <div class="row">

                           

                            <div class="col-lg-4">  

                                <iframe width="100%" height="245" src="https://www.youtube.com/embed/ugQuUigKSwg?autoplay=0&mute=1" ></iframe>

                            </div>

                             <div class="col-lg-4">

                              <iframe width="100%" height="245" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0&mute=1"></iframe>

                            </div>

                             <div class="col-lg-4" style="padding: 118px;">

                               <a class="primary-btn" style="color:#fff;">Video<span style="font-size: 20px;"> +</span></a>

                            </div>



                        </div>

                                        </div>

                                    </div>

                                </div>

                            </div>



                        </div>

                     

                        <!-- <div class="pd-widget">

                            <h4>Related Artist</h4>

                            <div class="pd-agent">

                                <div class="agent-pic">

                                    <img src="img/property/details/agent.jpg" alt="">

                                </div>

                                <div class="agent-text">

                                    <div class="at-title">

                                        <h6>Ashton Kutcher</h6>

                                        <span>Founder & CEO</span>

                                        <a href="#" class="primary-btn">VIew profile</a>

                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, eiusmod tempor incididunt</p>

                                    <div class="at-option">

                                        <div class="at-number">123-455-688</div>

                                        <div class="at-social">

                                            <a href="#"><i class="fa fa-facebook"></i></a>

                                            <a href="#"><i class="fa fa-twitter"></i></a>

                                            <a href="#"><i class="fa fa-envelope-o"></i></a>

                                        </div>

                                    </div>



                                </div>

                            </div>



                        </div> -->

                        <div class="pd-widget">

                            <h4>02 reviews</h4>

                            <div class="pd-review">

                                <div class="pr-item">

                                    <div class="pr-avatar">

                                        <div class="pr-pic">

                                            <img src="{{ asset('assets/img/property/details/review/review-1.jpg')}}" alt="">

                                        </div>

                                        <div class="pr-text">

                                            <h6>Brandon Kelley</h6>

                                            <span>15 Aug 2017</span>

                                            <div class="pr-rating">

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                            </div>

                                        </div>

                                    </div>

                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>

                                </div>

                                <div class="pr-item">

                                    <div class="pr-avatar">

                                        <div class="pr-pic">

                                            <img src="img/property/details/review/review-2.jpg" alt="">

                                        </div>

                                        <div class="pr-text">

                                            <h6>Matthew Nelson</h6>

                                            <span>15 Aug 2017</span>

                                            <div class="pr-rating">

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                            </div>

                                        </div>

                                    </div>

                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>

                                </div>

                            </div>

                        </div>

                        <div class="pd-widget">

                            <h4>YOur Rating</h4>

                            <form action="#" class="review-form">

                                <div class="group-input">

                                    <input type="text" placeholder="Name">

                                    <input type="text" placeholder="Email">

                                    <input type="text" placeholder="Website">

                                </div>

                                <textarea placeholder="Messages"></textarea>

                                <div class="rating">

                                    <span>Your Rating:</span>

                                    <i class="fa fa-star"></i>

                                    <i class="fa fa-star"></i>

                                    <i class="fa fa-star"></i>

                                    <i class="fa fa-star"></i>

                                    <i class="fa fa-star"></i>

                                </div>

                                <button type="submit" class="site-btn">send messages</button>

                            </form>

                        </div>

                    </div>

                </div>

            

            </div>

        </div>



        @include('layouts.footer')