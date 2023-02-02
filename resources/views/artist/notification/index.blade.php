<?php $page="review";?>
@extends('layout.mainlayout')
@section('content')		

<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						
						<!-- sidebar -->
						@include('artist.sidebar')
						<!-- /sidebar -->					
						
						<div class="col-xl-9 col-md-8">
							<div class="card">
								<div class="card-header">
									<div class="pro-head p-0 pb-4">
										<h3 class="mb-0">Notification</h3>										
									</div>								
								</div>
								<div class="card-body">
									<div class="reviews">
									@foreach($notifications as $notification)
										<div class="review-content no-padding">	
											<p class="mb-0">{{ $notification->data['data']}}, &nbsp;<span class="notification-time">{{ $notification->created_at->diffForHumans() }}</span>,</p>
										</div>	
									@endforeach																		
									</div>
								</div>
							</div>							
						</div>
						<div>{{ $notifications->links('vendor.pagination.custom') }}</div> 
						
					</div>

				</div>

			</div>					
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
		
@endsection