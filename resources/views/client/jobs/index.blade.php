<?php $page="jobpost";?>
@extends('layout.mainlayout')
@section('content')
   <style>
        label.error {
            color: #dc3545;
            font-size: 14px;
        }
    </style>

<!-- Page Content -->
<div class="content bookmark">
	<div class="container-fluid">
		<div class="row">

			<!-- sidebar -->
			@include('client.menu')
			<!-- /sidebar -->

			<div class="col-xl-9 col-md-8">
				<nav class="user-tabs mb-4">
					<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
						<li class="nav-item">
							<a class="nav-link active" href="{{url('jobpost')}}">List job</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('jobpost/create')}}">Add Job </a>
						</li>
					</ul>
				</nav>
				<!-- project list -->
				<div class="my-projects-view">
				<div class="card-header">
                    <h3 class="card-title">Job Post List </h3>
                </div>
					<div class="row">
					        @foreach($jobpost as $job)					
                                    <div class="col-lg-12 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info">                                                        
														<span>{{ $job->categories->name }}</span>
														<h2> {{ $job->name ?? '' }}</h2>
														<div class="customer-info">
															<ul class="list-details">
																<li>
																	<div class="slot">
																		<p>Price type</p>
																		<h5>Fixed</h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Location</p>
																		<h5><img src="{{asset('assets/img/location.png')}}" height="13" alt="Lang"><b style="color:voilet;">{{ $job->location ?? '' }}</b></h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Event date</p>																	
																		<h6>{{ date('d M', strtotime($job->start_date)) }} To {{ date('d M Y', strtotime($job->end_date)) }}</h6>                                                                       
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="project-hire-info">
														<div class="content-divider"></div>
														<div class="projects-amount">
															<h6>Budget</h6>
															<h4>{{ $job->budget }}</h4>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center">
															<a href="view-project-detail" class="projects-btn"  data-bs-toggle="modal" data-bs-target="#edit-proposal{{ $job->id }}"><i class="far fa-edit"></i> Edit</a>
															 <!-- The Modal -->
															 <div class="modal fade" id="edit-proposal{{ $job->id }}">
                                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                        <div class="modal-content">
            
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Your Proposal</h4>
                                                                                <span class="modal-close"><a href="#"
                                                                                        data-bs-dismiss="modal" aria-label="Close"><i
                                                                                            class="far fa-times-circle"></i></a></span>
                                                                            </div>
            
                                                                            <div class="modal-body">
                                                                                <form
                                                                                    action="{{ route('jobpost.update',$job->id) }}"
                                                                                    method="POST" id="jobpost">
                                                                                    @csrf
                                                                                    @method('put')
            
                                                                                    {{-- <div class="modal-info"> --}}
                                                                                        
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <label>Job Name</label>
                                                                                                <input class="form-control" id="name" placeholder="Job Name" name="name"
                                                                                                    value="{{  $job->name ?? '' }}">
                                                                                            </div>
                                                                                           
                                                                                            <div class="col-md-6">
                                                                                                <label for="location">Location*</label>
                                                                                                <select name="location_id" id="location" class="form-control select2" required>
                                                                                                    <option>Select Location</option>   
                                                                                                    @foreach($locations as $id => $location)
                                                                                                        <option value="{{ $id }}" {{ ($job->location) ? 'selected' : '' }}>{{$location}}</option>
                                                                                                    @endforeach   
                                                                                                </select>
                                                                                                    @if($errors->has('location_id'))
                                                                                                        <em class="invalid-feedback">
                                                                                                            {{ $errors->first('location_id') }}
                                                                                                        </em>
                                                                                                    @endif
                                                                                            </div>
                                                                                       </div>
                                                                                        <div class="row">  
                                                                                            <div class="col-md-6">
                                                                                                <label>{{ __('Budget Range') }}</label><br>
                                                                                                    <select name="coins" id="" class="form-select" required>
                                                                                                        <option>Select Budget</option>																
                                                                                                        @foreach($rewards as $coins => $reward)
                                                                                                            {{-- <option value="{{ $coins }}" {{ (isset($job) && $job->reward ? $job->reward->coins : old('coins')) == $coins ? 'selected' : '' }}>{{ $reward }}</option> --}}
                                                                                                            <option value="{{ $coins }}" {{ ($job->budget) ? 'selected' : '' }}>{{ $reward }}</option>																								
                                                                                                        @endforeach															
                                                                                                    </select>													
                                                                                            </div>
                                                                                            <div class="col-md-6 {{ $errors->has('categories') ? 'has-error' : '' }}">
                                                                                                <label for="categories">Categories</label>
                                                                                                <select name="category_id" id="categories" class="form-select" value="{{ $job->categories_id }}" required>
                                                                                                <option>Select Categories</option>       
                                                                                                    @foreach (App\Category::all()->pluck('name', 'id') as $key => $val)
                                                                                                        @if($job->category_id == $key)
                                                                                                            <option value="{{ $key }}" selected>{{ $val }}</option>
                                                                                                        @else
                                                                                                            <option value="{{ $key }}">{{ $val }}</option>
                                                                                                        @endif
                                                                                                    @endforeach	
                                                                                                </select>
                                                                                                @if($errors->has('categories'))
                                                                                                    <em class="invalid-feedback">
                                                                                                        {{ $errors->first('categories') }}
                                                                                                    </em>
                                                                                                @endif          
                                                                                            </div>             
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <label>Job Type</label>
                                                                                                    <select name="jobtype" id="" class="form-select" required>	
                                                                                                       <option value="">Select Job-Type</option>													
                                                                                                        <option {{ $job->jobtype == 'Part-Time' ? 'selected' : '' }} value="Part-Time">Part-Time</option>	
                                                                                                        <option {{ $job->jobtype == 'Full-Time' ? 'selected' : '' }} value="Full-Time">Full-Time</option>				
                                                                                                    </select>													
                                                                                            </div>
                                                            
                                                                                            <div class="col-md-6">
                                                                                                <label>Price Type</label>
                                                                                                    <select name="price_type" id="" class="form-select" required>
                                                                                                        <option value="">Select Price Type</option>															
                                                                                                        <option {{ $job->price_type == 'Flexible' ? 'selected' : '' }} value="Flexible">Flexible</option>	
                                                                                                        <option {{ $job->price_type == 'Fixed' ? 'selected' : '' }} value="Fixed">Fixed</option>				
                                                                                                    </select>													
                                                                                            </div>
                                                                                        </div>
                                                                                        <br>
                                                                                        {{-- @php
                                                                                            $date = $job->start_date->format('d/m')-$job->end_date->format('d/m');
                                                                                        @endphp --}}

                                                                                        @php
                                                                                        
                                                                                            $now = \Carbon\Carbon::now();
                                                                                            $end_date = $job->end_date;
                                                                                            $cDate = \Carbon\Carbon::parse($end_date);
                                                                                            $count = $now->diffInDays($cDate );

                                                                                            $date1 = $job->start_date;
                                                                                            $s = \Carbon\Carbon::parse($date1);
                                                                                            $date2 = $job->end_date;
                                                                                            $e = \Carbon\Carbon::parse($end_date);
                                                                                            $dur = $s->diffInDays($e);
                                                                                      
  
                                                                                        @endphp 

                                                                                        {{-- @if($date == 0) --}}
                                                                                        {{-- <div>
                                                                                            <label for="">
                                                                                                <input type="radio" id="radio_3" name="end_date2" value="hide" checked>
                                                                                                One-Day
                                                                                            </label> &nbsp;
                                                                                            <label for="">
                                                                                                <input type="radio" id="radio_4" name="end_date2" value="show">
                                                                                                Multiple-day
                                                                                            </label> 
                                                                                        </div> --}}
                                                                                        
                                                                                       
                                                                                  

                                                                                        @if($dur == 0)
                                                                                        <div>
                                                                                            <label for="">
                                                                                                <input type="radio" id="radio_5" name="end_date2" value="hide" checked>
                                                                                                One-Day
                                                                                            </label> &nbsp;
                                                                                            <label for="">
                                                                                                <input type="radio" id="radio_6" name="end_date2" value="show">
                                                                                                Multiple-day
                                                                                            </label> 
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6" id="date5">
                                                                                                <label>Start Date</label>
                                                                                                <input type="date" id="start_date" name="start_date" class="form-control"
                                                                                                    value="{{ old('start_date', isset($job) ? $job->start_date : '') }}">
                                                                                            </div>
                                                                                            <div class="col-md-6" id="date6">
                                                                                                <label>End Date</label>            
                                                                                                <input type="date" id="end_date" name="end_date" class="form-control"
                                                                                                    value="{{ old('end_date', isset($job) ? $job->end_date : '') }}">   
                                                                                            </div>
                                                                                        </div>
                                                                                        @else
                                                                                        <div>
                                                                                            <label for="">
                                                                                                <input type="radio" id="radio_7" name="end_date2" value="hide">
                                                                                                One-Day
                                                                                            </label> &nbsp;
                                                                                            <label for="">
                                                                                                <input type="radio" id="radio_8" name="end_date2" value="show" checked>
                                                                                                Multiple-day
                                                                                            </label> 
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6" id="date8">
                                                                                                <label>Start Date</label>
                                                                                                <input type="date" id="start_date" name="start_date" class="form-control"
                                                                                                    value="{{ old('start_date', isset($job) ? $job->start_date : '') }}">
                                                                                            </div>
                                                                                            <div class="col-md-6" id="date7">
                                                                                                <label>End Date</label>            
                                                                                                <input type="date" id="end_date" name="end_date" class="form-control"
                                                                                                    value="{{ old('end_date', isset($job) ? $job->end_date : '') }}">   
                                                                                            </div>
                                                                                        </div>
                                                                                        @endif
                                                                                    
                                                                                        <br>                                                                                    
                                                                                            
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <label>Requirement </label>
                                                                                                <textarea name="requirements" rows="8" class="form-control"
                                                                                                    value="">{{ old('requirements', isset($job) ? $job->requirements : '') }}</textarea>
            
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <label>Address</label>
                                                                                                <textarea name="address" rows="8" class="form-control"
                                                                                                    value="">{{ old('address', isset($job) ? $job->address : '') }}</textarea>
            
                                                                                            </div>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <!-- <button class="btn btn-primary click-btn btn-plan"
                                                                                                    type="submit">Submit</button> -->
                                                                                                <button class="btn btn-primary"
                                                                                                    type="submit">Submit</button>
                                                                                            </div>											
                                                                                        </div>
                                                                                    {{-- </div> --}}
                                                                                </div>	
                                                                                  
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /The Modal -->	
															<a href="#" class="hired-detail">Posted on <b style="color:orange;">{{ $job->created_at->format('d M Y') }}</b></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
                        @endforeach
                    </div>
                    <!-- project list -->                 
			</div>
		</div>       
	</div>
    <div>{{ $jobpost->links('vendor.pagination.custom') }}</div>
</div>


<!-- /Page Content -->


</div>

@endsection