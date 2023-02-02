@include('layouts.header')
<style type="text/css">
/*	body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}*/
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                           
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       
                                    </h5>
                                    <h6>
                                       
                                    </h6>
                                    {{-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> --}}
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <!--<li class="nav-item">-->
                                <!--    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>-->
                                <!--</li>-->
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#album" role="tab" aria-controls="album" aria-selected="false">Album</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        {{-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> --}}
                        <a type="submit" class="btn-primary btn" href="{{ url('profile/create') }}">Edit Profile</a>
                    </div>
                </div>
                @foreach($profile as $profile)
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK Experience</p>
                            <a href="">{{ $profile->exp_yrs }}</a><br/>
                          
                            <p>SKILLS</p>
                            <a href="">{{ $profile->skills }}</a><br/>
                          
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                               
                                {{-- @if($profile->name != Null) --}}
                                <div class="row">                                    
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->name }}</p>
                                    </div>                                    
                                </div>
                                {{-- @endif

                                @if($profile->email != Null) --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->email }}</p>
                                    </div>
                                </div>
                                {{-- @endif

                                @if($profile->mobile != Null) --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->mobile }}</p>
                                    </div>
                                </div>
                                {{-- @endif

                                @if($profile->gender != Null) --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Gender</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->gender }}</p>
                                    </div>
                                </div>
                                {{-- @endif

                                @if($profile->skills != Null) --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Skills</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->skills }}</p>
                                    </div>
                                </div>
                                {{-- @endif

                                @if($profile->qualification != Null) --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Qualification</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->qualification }}</p>
                                    </div>
                                </div>
                                {{-- @endif

                                @if($profile->worked_loc != Null) --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Worked location</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->worked_loc }}</p>
                                    </div>
                                </div>
                                {{-- @endif --}}
                                @endforeach
                            </div>
                             {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Items</label>
                                            </div>
                                             <div class="col-md-6">
                                                <p>
                                                    @foreach ($items as $items)
                                                    <a>{{ $items->name }}</a>
                                                    @endforeach
                                                </p>
                                            </div> 
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div> --}}
                              <div class="tab-pane fade" id="album" role="tabpanel" aria-labelledby="album-tab">
                                        <a type="submit" class="btn-primary btn" href="{{ url('albums/create') }}">Add Genre </a>
                                        <div class="row">
                                           
                                            @foreach($album as $album)
                                            <div class="col-lg-6">
                                                <div class="test2 set-bg" data-setbg="{{ asset('cover_image/'.$album->cover_image) }}">
                                                    {{-- <p>ALBUMS 1</p> --}}
                                                     <a href="{{ route('albums.show',$album->id) }}"><p>{{ $album->name }}</p> </a>
                                                    {{-- <a href="{{ route('albumsclient.show',$album->id) }}">{{ $album->name }}</a> --}}
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

@include('layouts.footer')

