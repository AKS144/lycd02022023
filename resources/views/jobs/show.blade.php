<?php $page="project-details";?>
@extends('layout.mainlayout')
@section('content')		
<style>
	.badge-job{
    display: inline-block;
    padding: 0.15em 0.35em;
    font-size: .75em;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 1.25rem;
    background: #F79533;
}
.badge-job:hover{
    
    background: #F79533;
}
</style>

<!-- Breadcrumb -->
			<div class="breadcrumb-bar"></div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">	
					<div class="row">	
						<div class="col-md-12">	
							<div class="profile">			
								<div class="profile-box">			
									<div class="provider-widget row">
										<div class="pro-info-left col-md-8">
											<div class="profile-info">
												<h2 class="profile-title">{{ $job->name ?? '' }}</h2>
												<p class="profile-position"></p>
												<div></div>							
												<ul class="profile-preword align-items-center">
													{{-- <li><i class="fas fa-clock"></i> Posted on {{ $job->created_at->format('d-m-Y') }}</li> --}}
													<li><a href="#" class="btn full-btn">{{ $job->jobtype }}</a></li>
												</ul>
											</div>
										</div>
										<div class="pro-info-right profile-inf col-md-4">
											<ul class="profile-right">
												<li><div class="amt-hr">{{$job->budget ??''}}</div></li>
											</ul>
											{{-- <div class="d-flex align-items-center justify-content-md-end justify-content-center">
												<a href="javascript:void(0)"><i class="fas fa-heart heart fa-2x me-2 orange-text"></i></a>  --}}

											{{-- <a data-bs-toggle="modal" href="#file" class="btn bid-btn">Send Proposal <i class="fas fa-long-arrow-alt-right"></i></a> --}}
            								{{-- @if(count($categories) > 0) --}}
											@php
												    $jobapp = App\JobApply::where('artist_id','=', Auth::user()->id) 
																	->where('job_id','=',$job->id)      
																	->first()												
											@endphp
											@php
													$jobapplied = App\Models\Quotes::where('job_id','=', $job->id) 
																		->where('artist_accept','=', 1)      
																		->first()
											@endphp

											@if($jobapplied)	
												<a class="btn w-100 btn-outline-primary active" onclick="alert('Job have already been applied other artist?')" href="">Job Completed</a>												
											@else
												@if($jobapp)											
													<a class="btn w-100 btn-outline-primary active" onclick="alert('You have already applied?')" href="">Applied</a>
												@else		
													<a class="btn w-100 btn-outline-primary active" data-bs-toggle="modal" href="#file">Apply Now</a>
													
													<i class="fa fa-heart-o" aria-hidden="true"></i>
													<!-- The Modal -->
													<div class="modal fade" id="file">
														<div class="modal-dialog modal-dialog-centered modal-md">
															<div class="modal-content">
																<div class="modal-header">
																	<h4 class="modal-title">SEND PROPOSALS</h4>
																	<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
																</div>
																<div class="modal-body">	
																	<div class="modal-info">
																		<form action="{{ route('jobapply.store') }}" method="post"> 
																		@csrf	
																		
																			<!-- <div class="feedback-form"> -->
																				<div class="row">																					
																						<input type="hidden" name="job_id" type="text" value="{{ $job->id }}">   
																						<input type="hidden" name="coins" type="text" value="{{ $job->coins }}">   
																						<input type="hidden" name="artist_id" type="text" value="{{ Auth::user()->id }}">   												           
																						<input type="hidden" name="artist_name" type="text" value="{{ Auth::user()->name }}">   												           
																						<input type="hidden" name="artist_email" type="text" value="{{ Auth::user()->email }}">  
																						<input type="hidden" name="artist_mobile" type="text" value="{{ Auth::user()->mobile }}">
																					<div class="col-md-12 form-group">
																						<input type="text" name="artist_price" class="form-control" placeholder="Your Estimate Price">
																					</div>
																					{{-- <div class="col-md-6 form-group">
																						<input type="email" class="form-control" placeholder="">
																					</div> --}}
																					{{-- <div class="col-md-12 form-group">
																						<textarea rows="5" class="form-control" placeholder="Cover Letter"></textarea>
																					</div> --}}
																				</div>
																			<!-- </div> -->
																			<!-- <div class="proposal-features">
																				<div class="proposal-widget proposal-success">
																					<label class="custom_check">
																						<input type="checkbox" name="select_time"><span class="checkmark"></span>
																						<span class="proposal-text">Stick this Proposal to the Top</span>
																						<span class="proposal-text float-end">$12.00</span>
																					</label>
																					<p>The sticky proposal will always be displayed on top of all the proposals.</p>
																				</div>
																				<div class="proposal-widget proposal-light">
																					<label class="custom_check">
																						<input type="checkbox" name="select_time"><span class="checkmark"></span>
																						<span class="proposal-text">$ Make Sealed Proposal</span>
																						<span class="proposal-text float-end">$7.00</span>
																					</label>
																					<p>The sealed proposal will be sent to the project author only it will not be visible publically.</p>
																				</div>
																				<div class="proposal-widget proposal-danger">
																					<label class="custom_check">
																						<input type="checkbox" name="select_time"><span class="checkmark"></span>
																						<span class="proposal-text">$ Make Sealed Proposal</span>
																						<span class="proposal-text float-end">$15.00</span>								
																					</label>
																					<p>The featured proposal will have a distinctive color and popped up between other proposals to get the author's attention.</p>
																				</div>
																			</div> -->
																			<br/><br/>
																			<div class="row">
																			
																				<div class="col-md-12">
																					<label class="custom_check">
																						<input type="checkbox" name="select_time">
																						<span class="checkmark"></span> I agree to the Terms And Conditions photons {{ $job->coins }} will be deducted from wallet
																					</label>
																				</div>	
																				
																			</div><br/>
																			<div class="row">
																				<div class="col-md-12">
																						{{-- <button class="btn btn-primary submit-btn" type="submit">SUBMIT PROPOSAL</button> --}}
																						<button class="btn btn-primary"  type="submit" onclick="alert('Are you sure you want to continue ?')">Send <img src="{{asset('assets/img/coin.png')}}" style="  width: 34px; height: 17px;"></button>     
																					
																					</div>	
																				<div>
																			</div>		
																			</div> 										
																		</form>		
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- /The Modal -->	
												@endif
											@endif	
											</div>
										</div>
									</div>						
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-8 col-md-12">					
							<div class="pro-view">		
								<!-- Job Detail -->
								<div class="post-widget">
									<div class="pro-content">
										<div class="row">
											<div class="col-12 col-sm-6 col-md-3">
												<div class="pro-post job-type">
													<p>Job Duration </p>
													<h6>{{ $count }}</h6>
												</div>
												
											</div>
											<div class="col-12 col-sm-6 col-md-3">
												<div class="pro-post job-type">
													<p>Location</p>
													<h6>{{ $job->location }}</h6>
												</div>
											</div>
											<div class="col-12 col-sm-6 col-md-3">
												<div class="pro-post job-type">
													<p>Proposals</p>
													<h6>{{ $job->proposal }}</h6>
												</div>
											</div>
											<div class="col-12 col-sm-6 col-md-3">
												<div class="pro-post job-type">
													<p>Price type</p>
													<h6>{{ $job->price_type }}</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Job Detail -->
								
								<div class="pro-post widget-box exp-widget pb-0">
									<div class="pro-content pt-0">
										<div class="row">
											
											<div class="col-md-4">
												<div class="exp-detail">
													<img class="img-fluid" alt="" src="{{asset('assets/img/icon/exp-icon-02.png')}}">
												<div class="exp-info">
													<p>Project Duration</p>
													<h5>{{ $duration }}</h5>
												</div>
												</div>
											</div>
											
											<div class="col-md-4">
												<div class="exp-detail">
													<img class="img-fluid" alt="" src="{{asset('assets/img/icon/exp-icon-04.png')}}">
												<div class="exp-info">
													<p>Job Type</p>
													<h5>{{ $job->jobtype }}</h5>
												</div>
												</div>
											</div>
											
											<div class="col-md-4">
												<div class="exp-detail">
													<img class="img-fluid" alt="" src="{{asset('assets/img/icon/exp-icon-06.png')}}">
												<div class="exp-info">
													<p>Qualifications</p>
													<h5></h5>
												</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="pro-post widget-box">
									<h3 class="pro-title">Address</h3>
									<div class="pro-content">									
										<p>{{ $job->address }}</p>
									</div>
								</div>	

								<!-- Senior Animator  -->
								<div class="pro-post widget-box">
									<h3 class="pro-title">Requirements</h3>
									<div class="pro-content">									
										<p>{{ $job->requirements }}</p>
									</div>
								</div>	
								<!-- /Senior Animator  -->


								
								<!-- Job Activity  -->
								<div class="pro-post project-widget widget-box">
									<h3 class="pro-title">Activity of the Job</h3>
									<div class="pro-content">
										<div class="mb-0">
											<ul class="activity-list clearfix">
												<li>Proposals: <span>Less than 5 <i class="fas fa-question-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i></span></li>
												<li>Last viewed by client: <span>3 hours ago <i class="fas fa-question-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i></span></li>
												<li>Interviewing: <span>1</span></li>
												<li>Invites sent: <span>6</span></li>
												<li>Unanswered invites: <span>2</span></li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Job Activity  -->
								
								<!-- Skills Required  -->
								<!-- <div class="pro-post project-widget widget-box">
									<h3 class="pro-title">Skills Required</h3>
									<div class="pro-content">
										<div class="tags">
											<a href="javascript:void(0);"><span class="badge-job badge-pill badge-design">After Effects</span></a>
											<a href="javascript:void(0);"><span class="badge-job badge-pill badge-design">Illustrator</span></a>
											<a href="javascript:void(0);"><span class="badge-job badge-pill badge-design">HTML</span></a>
											<a href="javascript:void(0);"><span class="badge-job badge-pill badge-design">Whiteboard</span></a>
											<a href="javascript:void(0);"><span class="badge-job badge-pill badge-design">HTML</span></a>
											<a href="javascript:void(0);"><span class="badge-job badge-pill badge-design">Whiteboard</span></a>
										</div>
									</div>
								</div> -->
								<!-- /Skills Required  -->

							
								
							</div>
						</div>
					
						<!-- Blog Sidebar -->
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">	

							<div class="freelance-widget widget-author mt-2 pro-post">
								<div class="freelance-content">
								{{-- <a data-bs-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a> --}}
                                <div class="author-heading">
                                    <div class="profile-img">
                                        <a href="#">
                                            <img class="avatar-img rounded-circle" src="{{asset('assets/img/avatar-artist.jpg')}}" alt="author">
                                        </a>
                                    </div> 
                                    <div class="profile-name">
                                        <div class="author-location">{{ $users->name }} <i class="fas fa-check-circle text-success verified"></i></div>
                                    </div>
									<div class="freelance-info">
										<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Georgia, USA</div>
										
									</div>
									{{-- <button type="button" class="btn btn-lg btn-primary rounded-pill"><i class="fab fa-whatsapp me-2"></i>Follow</button> --}}
									<div class="follow-details">
									{{-- <div class="row">
				                      	<div class="col-6 py-4 text-center">

				                        <!-- Heading -->
				                        <h6 class="text-uppercase text-muted">
				                          	Following
				                        </h6>

				                        <!-- Value -->
				                        <h4 class="mb-0">49</h4>

				                      </div>
				                      <div class="col-6 py-4 text-center border-start">

				                        <!-- Heading -->
				                        <h6 class="text-uppercase text-muted">
				                          Followers
				                        </h6>

				                        <!-- Value -->
				                        <h4 class="mb-0">422</h4>

				                      </div>
                    				</div> --}}
                    			</div>
									
									<div class="">
						              	<div class="row align-items-center">
							                <div class="col">
							                  	<h6 class="text-sm text-start mb-0">
							                    	Member Since 
							                  	</h6>
							                </div>
							                <div class="col-auto">
							                  	{{-- <span class="text-sm">{{ $users->created_at->toDateString()->format('d-m-Y') ?? ''}}</span> --}}
												  
							                </div>
						              	</div>
						              	<hr class="my-3">
						              	<div class="row align-items-center">
							                <div class="col">
							                  	<h6 class="text-sm text-start mb-0">
							                    	Total Jobs
							                  	</h6>
							                </div>
							                <div class="col-auto">
							                  	<span class="text-sm">{{ $count_job }}</span>
							                </div>
						              	</div>
						              	<hr class="my-3">
							            <div class="row align-items-center">
							                <div class="col">
							                  	<h6 class="text-sm text-start mb-0">
							                    	<i class="fab fa-instagram me-2"></i>Instagram
							                  	</h6>
							                </div>
							                <div class="col-auto">
							                  	<span class="text-sm">@johnthedon</span>
							                </div>
							            </div>
						              	<hr class="my-3">
							            <div class="row align-items-center">
							                <div class="col">
							                  	<h6 class="text-sm text-start mb-0">
							                    	<i class="fab fa-linkedin me-2"></i>LinkedIn
							                  	</h6>
							                </div>
							                <div class="col-auto">
							                  	<span class="text-sm">johnsullivan</span>
							                </div>
							            </div>
						            </div>
                                </div>
                            </div>
                           </div>
												
						
													
						</div>
						<!-- /Blog Sidebar -->
						
					</div>
				</div>
			</div>		
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
		
@endsection