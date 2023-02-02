<?php $page = 'profile'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <style>
        .toggle-on {
            color: #fff;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index_admin">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="profile-cover">
                <div class="profile-cover-wrap">
                    <img class="profile-cover-img"
                        src="https://images.pexels.com/photos/4737484/pexels-photo-4737484.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Profile Cover">
                  

                    <!-- Custom File Cover -->
                    {{-- <div class="cover-content">
								<div class="custom-file-btn">
									<input type="file" class="custom-file-btn-input" id="cover_upload">
									<label class="custom-file-btn-label btn btn-sm btn-white" for="cover_upload">
										<i class="fas fa-camera"></i>
										<span class="d-none d-sm-inline-block ms-1">Update Cover</span>
									</label>
								</div>
							</div> --}}
                    <!-- /Custom File Cover -->
                </div>
            </div>

            <div class="text-center mb-5">
                <label class="avatar avatar-xxl profile-cover-avatar" for="avatar_upload">
                    <img class="avatar-img"
                        src="https://avatarairlines.com/wp-content/uploads/2020/05/Male-placeholder.jpeg"
                        alt="Profile Image">
                    {{-- <input type="file" id="avatar_upload">
							<span class="avatar-edit">
								<i data-feather="edit-2" class="avatar-uploader-icon shadow-soft"></i>
							</span> --}}
                </label>
                <h2>{{ $profile->name ?? ''}} </h2>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <i class="far fa-building"></i> <span></span>
                    </li>
                    <li class="list-inline-item">
                        <i class="fas fa-map-marker-alt"></i> {{ $profile->location->name ?? '' }}
                    </li>
                    <li class="list-inline-item">
                        <i class="far fa-calendar-alt"></i> <span>Member Since
                            <b>{{ date('d-m-Y', strtotime($users->created_at)) ?? ''}}</b></span>
                    </li>
                    <li class="list-inline-item">

                    </li>
                </ul>
                <br>
                <ul class="list-inline">
                    @if($users->verify == 0)
                    <li class="list-inline-item">           
                        <input type="checkbox" data-id="{{ $users->id }}" class="verify-class" data-toggle="toggle"
                            data-on="Verify" data-off="Un-Verified" data-onstyle="info" data-offstyle="light"
                            {{ $users->verify ? 'checked' : '' }}>                    
                    </li>
                    @endif
                    <li class="list-inline-item">
                        <input data-id="{{ $users->id }}" class="toggle-class" type="checkbox" data-onstyle="success"
                            data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"
                            {{ $users->status ? 'checked' : '' }}>
                    </li>
                    <li class="list-inline-item">
						<input type="hidden" id="user" value="{{$users->id}}">
                        <select class="form-control select" id="rating" name="status">
							<option>Select Rating</option>
							<option {{ $users->ratings == '1' ? 'selected' : '' }} value="1">1 Rating</option>
							<option {{ $users->ratings == '2' ? 'selected' : '' }} value="2">2 Rating</option>													
							<option {{ $users->ratings == '3' ? 'selected' : '' }} value="3">3 Rating</option>
							<option {{ $users->ratings == '4' ? 'selected' : '' }} value="4">4 Rating</option>
							<option {{ $users->ratings == '5' ? 'selected' : '' }} value="5">5 Rating</option>
						</select>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body pt-0">
                            <div class="card-header mb-4">
                                <h5 class="card-title">Profile Status</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="progress progress-md flex-grow-1">
                                    <div class="progress-bar bg-primary" role="progressbar"
                                        style="width: {{ $percentage }}%" aria-valuenow="30" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="ms-4">{{ $percentage }}%</span>
                                {{-- <span class="ms-4">{{ $percent }}</span> --}}
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body pt-0">
                            <div class="card-header mb-4">
                                <h5 class="card-title d-flex justify-content-between">
                                    <span>Profile</span>
                                    {{-- <a class="btn btn-sm btn-white" href="settings">Edit</a> --}}
                                </h5>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="py-0">
                                    <small class="text-dark">About</small>
                                </li>
                                <li>
                                    <b>{{ $profile->name ?? '' }}</b>
                                </li>
                                <hr>
                                <li>
                                    Versatile Workforce
                                </li>
                                <li class="pt-2 pb-0">
                                    <small class="text-dark">Contacts</small>
                                </li>
                                <li> {{ $profile->email ?? '' }} </li>
                                <li> {{ $profile->mobile ?? '' }} </li>
                                @if ($profile->studio_address ?? '')
                                    <li class="pt-2 pb-0">
                                        <small class="text-dark">Studio address</small>
                                    </li>
                                    <li>
                                        {{ $profile->studio_address ?? '' }}
                                    </li>
                                @endif
                                <hr>
                                <li>
                                    <b>Wallet Balance Left</b> 
                                    </br>
                                    <span style="color:green"><b>₹</b>{{ $wallet->amount ?? '' }}/-</span>
                                </li>
                                <hr>
                                <li>
                                    <b>Expire Date</b> 
                                    </br>
                                    <span style="color:red">{{ date('d F Y', strtotime($users->exp_date)) }}</span>
                                </li>
                                <hr>
                                 <li>
                                    <b>Current Package</b> 
                                    </br>
                                    <span style="color:orange">{{ $packages->pack_name ?? '' }}</span>
                                </li>
                            </ul>
                           {{-- <hr>
                            <div class="card-header mb-4">
                                <h5 class="card-title d-flex justify-content-between">
                                    <span>Profile</span>                                   
                                </h5>
                            </div> --}}
                        </div>
                    </div>
                </div>



                <div class="col-lg-8 d-flex">
                    <div class="card w-100">
                        <div class="card-body pt-0">
                            <div class="card-header mb-4">
                                <h5 class="card-title">Work Experience</h5>
                            </div>
                            <ul class="activity-feed">
                                <li class="feed-item">
                                    <div class="feed-date"></div>
                                    <span class="feed-text"><a href="profile">Brian Johnson</a> has paid the invoice <a
                                            href="view-invoice">"#CD41544"</a></span>
                                </li>
                                <li class="feed-item">
                                    <div class="feed-date">Nov 7</div>
                                    <span class="feed-text"><a href="profile">Marie Canales</a> has accepted your
                                        estimate <a href="view-estimate">#GTR14544</a></span>
                                </li>
                                <li class="feed-item">
                                    <div class="feed-date">Jan 05</div>
                                    <span class="feed-text"><a href="profile">Brian Johnson</a> has paid the invoice <a
                                            href="view-invoice">"#CD42565"</a></span>
                                </li>
                                <li class="feed-item">
                                    <div class="feed-date">Feb 10</div>
                                    <span class="feed-text"><a href="profile">Marie Canales</a> has accepted your
                                        estimate <a href="view-estimate">#GTR422385</a></span>
                                </li>
                                <li class="feed-item">
                                    <div class="feed-date">Mar 25</div>
                                    <span class="feed-text"><a href="profile">Brian Johnson</a> has paid the invoice <a
                                            href="view-invoice">"#CD6988"</a></span>
                                </li>
                                <li class="feed-item">
                                    <div class="feed-date">Mar 5</div>
                                    <span class="feed-text"><a href="profile">Marie Canales</a> has accepted your
                                        estimate <a href="view-estimate">#GTR569231</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 d-flex">
                 
                    <div class="row">
                        @foreach ($albums as $album)
                            <div class=" col-md-3 ">

                                <div class="card flex-fill">
                                <a class="" data-bs-toggle="modal"
                                                href="#gallery{{ $album->id }}">
                                    <img alt="Card Image" src="{{ asset('cover_image/' . $album->cover_image) }}"
                                        height="250" width="100%" class="card-img-top"></a>
                                    <div class="card-header">

                                        <h5 class="card-title mb-0 text-center">
                                            <a class="" data-bs-toggle="modal"
                                                href="#gallery{{ $album->id }}">{{ $album->name ?? '' }}</a>
                                        </h5>
                                        <!-- The Modal -->
                                        <div class="modal fade custom-modal" id="gallery{{ $album->id }}">
                                            <div class="modal-dialog modal-dialog-centered" style="max-width: 50%;">
                                                <div class="modal-content bg-modal">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
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
                                                        </style>

                                                        <div class="modal-info text-center">
                                                            <div class="row">                                                          
                                                            <div class="col-md-9" style="margin-right: auto;margin-left: auto;">
                                                                <div class="fotorama" data-nav="thumbs">
                                                                    @foreach ($album->photos as $photo)																    
                                                                        <img src="{{ asset('photo/'."$photo->photo") }}"
                                                                            width="200" height="200">
                                                                    @endforeach
                                                                </div>
                                                           

                                                            </div></div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

			   <div class="col-lg-6 d-flex">
                    <div class="card w-100">
                        <div class="card-body pt-0">
                            <div class="card-header mb-4">
                                <h5 class="card-title">Artist Contract</h5>
                            </div>
                            <ul class="activity-feed">
							@foreach($contracts as $contract)
                                <li class="feed-item">
                                    <div class="feed-date"><b>On</b>  <span style="color:red">{{ date('d F Y', strtotime($contract->start_date)) }}</span><b> To</b>  <span style="color:red">{{ date('d F Y', strtotime($contract->end_date)) }}</span></div>
                                    <span class="feed-text"><a href="profile">{{ $contract->user_name }}</a> has signed the contract <a
                                            href="view-invoice">"#CN{{ $contract->id }}#"</a></span>
                                </li>
							@endforeach	 
                            {{-- {!! $contracts->links() !!}                               --}}
                            </ul>     
                                            
                        </div>
                        {{-- <div class="d-flex justify-content-center">
                            {!! $contract->links() !!}
                        </div> --}}
                    </div>
                </div>

				<div class="col-lg-6 d-flex">
                    <div class="card w-100">
                        <div class="card-body pt-0">
                            <div class="card-header mb-4">
                                <h5 class="card-title">Artist Transaction</h5>
                            </div>
                            <ul class="activity-feed">	
							@foreach($transactions as $transaction)					
                                <li class="feed-item">
                                    <div class="feed-date">{{ date('d F Y', strtotime($transaction->created_at)) }}</div>
                                    <span class="feed-text"><a href="">Coins</a> "{{ $transaction->coins }}" paid for <b>Job</b> applied at location <b>{{ $transaction->location }} </b></span>
                                </li>
							@endforeach   
                                                     
                            {{-- </ul>  {!! $transactions->links() !!}   --}}
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
@endsection
