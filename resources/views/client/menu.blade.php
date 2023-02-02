<div class="col-xl-3 col-md-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
									<a href="user-account-details"><img alt="profile image" src="{{asset('assets/img/avatar.jpg')}}" class="avatar-lg rounded-circle"></a>
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
										<p class="mb-2">Welcome,</p>
										<a href="user-account-details"><h3 class="mb-0">Client</h3></a>
										<p class="mb-0">@client</p>
									</div>
								</div>
								<div class="settings-menu">
									<ul>
										<li class="nav-item">
											<a href="{{url('client')}}" class="nav-link">
											<i class="fas fa-tachometer-alt"></i> Dashboard
											</a>
										</li>
										@if(App\Models\Quotes::where('artist_id', Auth::user()->id)->first())
										<li class="nav-item">
											<a href="{{url('client-project_list')}}" class="nav-link">
											<i class="fas fa-briefcase"></i> Projects
											</a>
										</li>
										@endif
										
										<li class="nav-item">
											@if($page=="wishlist")
											<a href="{{url('client_wishlist')}}" class="nav-link active">
											<i class="fas fa-heart"></i> Wishlist
											</a>
											@else
											<a href="{{url('client_wishlist')}}" class="nav-link">
											<i class="fas fa-heart"></i> Wishlist
											</a>
											@endif
										</li>
										
										<!-- <li class="nav-item">
											<a href="{{url('contractlist')}}" class="nav-link">
											<i class="fas fa-file-signature"></i> Contract
											</a>
										</li> -->
										@if(App\Models\Quotes::where('user_id', Auth::user()->id)->first())	
										<li class="nav-item">
											<a href="{{route('quotation')}}" class="nav-link">
											<i class="fas fa-file-invoice"></i>Quotation
											</a>
										</li>
										@endif
										<!-- <li class="nav-item">
											<a href="chats" class="nav-link">
												<i class="material-icons">chat</i> Messages
											</a>
										</li> -->
										<!-- <li class="nav-item">
											<a href="membership-plans" class="nav-link">
												<i class="material-icons">person_add</i> Membership
											</a>
										</li>
										<li class="nav-item">
											<a href="milestones" class="nav-link">
												<i class="material-icons">pie_chart</i> Milestones
											</a>
										</li>
										<li class="nav-item">
											<a href="verify-identity" class="nav-link">
												<i class="material-icons">person_pin</i> Verify Identity
											</a>
										</li> -->
										<li class="nav-item">
											@if($page=="addjobpost" || $page=="jobpost" )
											<a href="{{url('jobpost')}}" class="nav-link active">
											<i class="fas fa-briefcase"></i> Job List
											</a>
											@else
											<a href="{{url('jobpost')}}" class="nav-link ">
											<i class="fas fa-briefcase"></i> Job List
											</a>
											@endif
										</li>
										
										<li class="nav-item">
										@if($page=="setting")
											<a href="{{url('setting')}}" class="nav-link active">
											<i class="fas fa-cogs"></i> Settings
											</a>
											@else
											<a href="{{url('setting')}}" class="nav-link ">
											<i class="fas fa-cogs"></i> Settings
											</a>
											@endif
										</li>
										<li class="nav-item">
										<a class="nav-link" href="{{ route('logout') }}"
											onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">
												<i class="fas fa-power-off"></i>{{ __('Logout') }}
											</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST">
											@csrf
										</form>
										</li>
									</ul>
								</div>
							</div>					
						</div>