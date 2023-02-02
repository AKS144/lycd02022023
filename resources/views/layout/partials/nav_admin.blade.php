<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"><span>Main</span></li>
							<li class="{{ Request::is('admin') ? 'active' : '' }}">
								<a href="{{ url('admin') }}"><i data-feather="home"></i> <span>Dashboard</span></a>
							</li>
							<li class="{{ Request::is('admin/categories','admin/sub-category') ? 'active' : '' }}">
								<a href="{{ url('admin/categories') }}"><i data-feather="copy"></i> <span>Categories</span></a>
							</li>
							<li class="{{ Request::is('admin/projects') ? 'active' : '' }}">
								<a href="{{ url('admin/rewards') }}"><i data-feather="database"></i> <span>Credit/Coins</span></a>
							</li>
							<li class="{{ Request::is('admin/users') ? 'active' : '' }}" >
								<a href="{{ url('admin/users') }}"><i data-feather="users"></i> <span>Users</span></a>
							</li>
							<li class="{{ Request::is('admin/package') ? 'active' : '' }}">
								<a href="{{ url('admin/package') }}"><i data-feather="user-check"></i> <span>Package</span></a>
							</li>
							<li class="{{ Request::is('admin/contract') ? 'active' : '' }}">
								<a href="{{ url('admin/contract') }}"><i data-feather="pie-chart"></i> <span>Contract</span></a>
							</li>							
							<li class="{{ Request::is('admin/locations') ? 'active' : '' }}">
								<a href="{{ url('admin/locations') }}"><i data-feather="file-text"></i> <span>Location</span></a>
							</li>
							{{-- <li class="{{ Request::is('admin/roles','admin/roles-permission') ? 'active' : '' }}">
								<a href="{{ url('admin/roles') }}"><i data-feather="clipboard"></i> <span>Roles</span></a>
							</li> --}}
							<li class="{{ Request::is('admin/transaction') ? 'active' : '' }}">
								<a href="{{ url('admin/transaction') }}"><i data-feather="clipboard"></i> <span>Transaction</span></a>
							</li>
							<li class="{{ Request::is('admin/jobs') ? 'active' : '' }}">
								<a href="{{ url('admin/jobs') }}"><i data-feather="award"></i> <span>Jobs</span></a>
							</li>	
							<li class="{{ Request::is('admin/jobs') ? 'active' : '' }}">
								<a class="dropdown-item" href="{{ route('logout') }}"
                       							onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
												   <i data-feather="log-out" class="me-1"></i> <span>Logout</span></a>
												<form id="logout-form" action="{{ route('logout') }}" method="POST">
													@csrf
												</form>	
							</li>	
					
							{{-- <li class="{{ Request::is('admin/change-password','admin/delete-account','admin/email-settings','admin/localization-details','admin/others-settings','admin/payment-settings','admin/seo-settings','admin/settings','admin/social-links','admin/social-settings','admin/tax-types') ? 'active' : '' }}">
								<a href="{{ url('admin/settings') }}"><i data-feather="settings"></i> <span>Settings</span></a>
							</li> --}}
							{{-- <li class="menu-title"><span>UI Front-page</span></li>
							<li class="{{ Request::is('admin/imageset') ? 'active' : '' }}">
								<a href="{{ url('admin/imageset') }}"><i data-feather="pocket"></i> <span>Frontpage</span></a>
							</li>	
							<li class="{{ Request::is('admin/advertisement') ? 'active' : '' }}">
								<a href="{{ url('admin/advertisement') }}"><i data-feather="pocket"></i> <span>Advertisement</span></a>
							</li>					 --}}
							
						</ul>
					</div>
				</div>
			</div>
			<!-- /Sidebar -->