          				<div class="col-xl-3 col-md-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
								
									<div class="avatar avatar-online ava-status">									
									</div>
									
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
										 <p class="mb-2">Welcome, &nbsp;<a href="{{ route('basic') }}"><i class="fas fa-edit" style="font-size: 16px;"></i></p> 
										<h3 class="mb-0">{{ Auth::user()->name }} </h3></a>
										 
									</div>
								</div>
								<div class="settings-menu">
									<ul>
										<li class="nav-item">
											@if($page=='artist')
											<a href="{{url('artist')}}" class="nav-link active">
												<i class="material-icons">verified_user</i> Dashboard
											</a>
											@else
											<a href="{{url('artist')}}" class="nav-link ">
												<i class="material-icons">verified_user</i> Dashboard
											</a>

											@endif
										</li>
										@if(App\Models\Quotes::where('artist_id', Auth::user()->id)->first())	
										<li class="nav-item">																			
											@if($page=='project_list' || $page=='project_completed')
												<a href="{{url('project_list')}}" class="nav-link active">
													<i class="material-icons">business_center</i> Projects
												</a>
												@else
												<a href="{{url('project_list')}}" class="nav-link">
													<i class="material-icons">business_center</i> Projects
												</a>
											@endif										
										</li>
										@endif	
										<!-- <li class="nav-item">
										@if($page=='contract_list')
										<a href="{{url('contract_list')}}" class="nav-link active">
												<i class="material-icons">find_in_page</i> My Contract
											</a>
										
										@else
										<a href="{{url('contract_list')}}" class="nav-link ">
												<i class="material-icons">find_in_page</i> My Contract
											</a>

										@endif
										</li> -->
		  								@if(App\Models\Quotes::where('artist_id', Auth::user()->id)->first())
										<li class="nav-item">
											@if($page=='proposals' )										
											<a href="{{url('proposals')}}" class="nav-link active">
												<i class="material-icons">send</i>Proposals
											</a>
											@else
											<a href="{{url('proposals')}}" class="nav-link ">
												<i class="material-icons">send</i>Proposals
											</a>
											@endif
										</li>
										@endif

										<li class="nav-item">
											@if(App\JobApply::where('artist_id', Auth::user()->id)->first())	
												@if($page=='wishlist')
													<a href="{{url('wishlist')}}" class="nav-link active">
														<i class="material-icons">local_play</i> Job Applied
													</a>
													@else
													<a href="{{url('wishlist')}}" class="nav-link">
														<i class="material-icons">local_play</i> Job Applied
													</a>
												@endif
											@endif
										</li>
										
										</li> 
										<li class="nav-item">
										@if($page=='membership' )

											<a href="{{url('membership')}}" class="nav-link active">
												<i class="material-icons">person_add</i> Subscription
											</a>
											@else
											<a href="{{url('membership')}}" class="nav-link">
												<i class="material-icons">person_add</i> Subscription
											</a>

											@endif


										</li>

										<li class="nav-item">
										@if($page=='album_list' || $page=='upload' || $page=='albums')

										<a href="{{url('albums')}}" class="nav-link active">
												<i class="material-icons">collections</i> Album
											</a>
											@else
											<a href="{{url('albums')}}" class="nav-link ">
												<i class="material-icons">collections</i> Album
											</a>

											@endif



										</li>
										<!-- <li class="nav-item">
											<a href="milestones" class="nav-link">
												<i class="material-icons">pie_chart</i> Milestones
											</a>
										</li> -->
										<!-- <li class="nav-item">
											<a href="verify-identity" class="nav-link">
												<i class="material-icons">person_pin</i> Verify Identity
											</a>
										</li> -->
										<li class="nav-item">
										@if($page=='payment' || $page=='payment_list')

											<a href="{{url('payment')}}" class="nav-link active">
											&nbsp;&nbsp;<i class="fas fa-dollar-sign"></i> Wallet
											</a>
											@else
											<a href="{{url('payment')}}" class="nav-link">
											&nbsp;&nbsp;<i class="fas fa-dollar-sign"></i>Wallet
											</a>
											@endif
										</li>
										<li class="nav-item">
										@if($page=='settings' )

											<a href="{{url('basic')}}" class="nav-link active">
												<i class="material-icons">settings</i> Profile Settings
											</a>
											@else
											<a href="{{url('basic')}}" class="nav-link">
												<i class="material-icons">settings</i> Profile Settings
											</a>
											@endif


										</li>
										<li class="nav-item">
											<!-- <a href="index" class="nav-link">
												<i class="material-icons">power_settings_new</i> Logout
											</a> -->
											 <a class="nav-link" href="{{ route('logout') }}"
											onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">
												<i class="material-icons">power_settings_new</i>{{ __('Logout') }}
											</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST">
											@csrf
										</form>
										</li>
									</ul>
								</div>
							</div>					
						</div>