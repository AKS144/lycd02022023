<?php $page="index_admin_admin_admin";?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
                
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Dashboard</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index_admin_admin">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                        <div class="row">
                        <div class="col-md-8">
                            <!--/Wizard-->
                            <div class="row">
                                <div class="col-md-4 d-flex">
                                    <div class="card wizard-card flex-fill">
                                        <div class="card-body">
                                            <p class="text-primary mt-0 mb-2">Users</p>
                                            <h5>{{ $user }}</h5>
                                            <!-- <p><a href="users">view details</a></p> -->
                                            <span class="dash-widget-icon bg-1">
                                                <i class="fas fa-users"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex">
                                    <div class="card wizard-card flex-fill">
                                        <div class="card-body">
                                            <p class="text-primary mt-0 mb-2">Completed Projects</p>
                                            <h5>{{ $completed }}</h5>
                                            <!-- <p><a href="projects">view details</a></p> -->
                                            
                                            <span class="dash-widget-icon bg-1">
                                                <i class="fas fa-th-large"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex">
                                    <div class="card wizard-card flex-fill">
                                        <div class="card-body">
                                            <p class="text-primary mt-0 mb-2">Active Projects</p>
                                            <h5>{{ $ongoing }}</h5>
                                            <!-- <p><a href="projects">view details</a></p> -->
                                            
                                            <span class="dash-widget-icon bg-1">
                                                <i class="fas fa-bezier-curve"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/Wizard-->
                            <!-- <div class="row">
                                <div class="col-lg-12 d-flex">
                                    <div class="card w-100">
                                        <div class="card-body pt-0 pb-2">
                                            <div class="card-header">
                                                <h5 class="card-title">Overview</h5>
                                            </div>
                                            <div id="chart" class="mt-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>  
                        <div class="col-md-4 d-flex">
                            <div class="card w-100">
                                <div class="card-body pt-0">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-7">
                                                <p>Welcome back,</p>
                                                <h6 class="text-primary">{{ Auth::user()->name }}</h6>
                                            </div>
                                            <!-- <div class="col-5 text-end"> -->
                                                <span class="welcome-dash-icon bg-1">
                                                    <i class="fas fa-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="account-balance">
                                        <p>Account balance</p>
                                        <h6>$50,000,00</h6>
                                    </div> -->
                                    <!-- <div class="mt-3">
                                        <h6 class="text-primary">Payments</h6>
                                        <div class="table-responsive">
                                            <table class="table table-center table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-nowrap">Client or Freelancer</th>
                                                        <th>Role</th>
                                                        <th class="text-end">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($latest_user as $user)
                                                    <tr>
                                                        <td class="text-nowrap"></td>
                                                        <td>$2222</td>
                                                        <td class="text-end">Completed</td>
                                                    </tr>
                                                    @endforeach
                                                     <tr>
                                                        <td class="text-nowrap">Pixel Inc Ltd</td>
                                                        <td>$750</td>
                                                        <td class="text-end">
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-success me-2"><i class="far fa-edit"></i></a> 
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-danger me-2"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr> 
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>          
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card bg-white projects-card">
                                <div class="card-body pt-0">
                                    <div class="card-header">
                                        <h5 class="card-title">Projects</h5>
                                    </div>
                                    <div class="reviews-menu-links">
                                        <ul role="tablist" class="nav nav-pills card-header-pills nav-justified">
                                          
                                            <li class="nav-item">
                                                <a href="#tab-4" data-bs-toggle="tab" class="nav-link active">All ({{ $quotes }})</a>
                                            </li>
                                          
                                            <li class="nav-item">
                                                <a href="#tab-5" data-bs-toggle="tab" class="nav-link">Active ({{ $ongoing }})</a>
                                            </li>
                                         
                                            <li class="nav-item">
                                                <a href="#tab-6" data-bs-toggle="tab" class="nav-link"> Pending ({{ $pending }})
                                                </a>
                                            </li>
                                         
                                            <li class="nav-item">
                                                <a href="#tab-7" data-bs-toggle="tab" class="nav-link">Canceled ({{ $cancel }})</a>
                                            </li>
                                         
                                        </ul>
                                    </div>

                                    <div class="tab-content pt-0">
                                        <div role="tabpanel" id="tab-4" class="tab-pane fade active show">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0 datatable">
                                                    <thead>
                                                        <tr>  
                                                            <th>Id</th>                                                        
                                                            <th>Artist</th>    
                                                            <th>Client</th>    
                                                            <th>Final price</th>   
                                                            <th>Start date</th>  
                                                            <th>End date</th>
                                                            <!-- <th class="text-end">Actions</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($proj_quotes as $quotes)
                                                        <tr> 
                                                            <td>                                                          
                                                                {{ $quotes->id }}
                                                            </td>                                                         
                                                            <td>
                                                                <!-- <h2 class="table-avatar">     -->
                                                                    <a href="profile"><img class="avatar-img rounded-circle me-2" src="{{ asset('profile_img/'.$quotes->profiles->profile_img) }}" width="50">                                                                
                                                                    <!-- <a href="profile"><img class="avatar-img rounded-circle me-2" src="{{ Storage::disk('')->url('profile_img/'.$quotes->profiles->profile_img) }}" width="50"> -->
                                                                        {{ $quotes->profiles->name }}
                                                                    </a>
                                                                <!-- </h2> -->
                                                            </td>
                                                            <td>
                                                            {{ $quotes->user_name }}
                                                            </td>
                                                            <td>
                                                                <!-- <div class="desc-info"> -->
                                                                @if($quotes->final_price > 0)
                                                                    ₹{{ $quotes->final_price }}/-
                                                                @else 
                                                                     -   
                                                                @endif
                                                                <!-- </div> -->
                                                            </td>
                                                            <td style="color:green;">   
                                                                {{ date('d-m-Y', strtotime($quotes->start_date)) }}                                                                
                                                            </td>
                                                            <td style="color:red;">
                                                                {{ date('d-m-Y', strtotime($quotes->end_date)) }}
                                                            </td>
                                                            
                                                            <!-- <td class="text-end text-nowrap">
                                                                <a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Show</a>                                                             
                                                            </td> -->
                                                        </tr>
                                                        @endforeach                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div role="tabpanel" id="tab-5" class="tab-pane fade">
                                            <div class="table-responsive">
                                                <table class="table table-center table-bordered table-hover datatable">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>                                                        
                                                            <th>Artist</th>    
                                                            <th>Client</th>    
                                                            <th>Final price</th>   
                                                            <th>Start date</th>  
                                                            <th>End date</th>
                                                            <!-- <th class="text-end">Actions</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($proj_ongoing as $quotes)
                                                        <tr> 
                                                            <td>                                                          
                                                                {{ $quotes->id }}
                                                            </td>                                                         
                                                            <td>
                                                                <!-- <h2 class="table-avatar">     -->
                                                                    <a href="profile"><img class="avatar-img rounded-circle me-2" src="{{ asset('profile_img/'.$quotes->profiles->profile_img) }}" width="50">                                                                
                                                                    <!-- <a href="profile"><img class="avatar-img rounded-circle me-2" src="{{ Storage::disk('')->url('profile_img/'.$quotes->profiles->profile_img) }}" width="50"> -->
                                                                        {{ $quotes->profiles->name }}
                                                                    </a>
                                                                <!-- </h2> -->
                                                            </td>
                                                            <td>
                                                            {{ $quotes->user_name }}
                                                            </td>
                                                            <td>
                                                                <!-- <div class="desc-info"> -->
                                                                @if($quotes->final_price > 0)
                                                                      ₹{{ $quotes->final_price }}/-
                                                                @else 
                                                                     - 
                                                                @endif
                                                                <!-- </div> -->
                                                            </td>
                                                            <td style="color:green;">   
                                                                {{ date('d-m-Y', strtotime($quotes->start_date)) }}                                                                
                                                            </td>
                                                            <td style="color:red;">
                                                                {{ date('d-m-Y', strtotime($quotes->end_date)) }}
                                                            </td>
<!--                                                             
                                                            <td class="text-end text-nowrap">
                                                                <a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Show</a>                                                            
                                                            </td> -->
                                                        </tr>
                                                        @endforeach                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div role="tabpanel" id="tab-6" class="tab-pane fade">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover datatable">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>                                                        
                                                            <th>Artist</th>    
                                                            <th>Client</th>    
                                                            <th>Final price</th>   
                                                            <th>Start date</th>  
                                                            <th>End date</th>
                                                            <!-- <th class="text-end">Actions</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($proj_pending as $quotes)
                                                        <tr> 
                                                            <td>                                                          
                                                                {{ $quotes->id }}
                                                            </td>                                                         
                                                            <td>
                                                                <!-- <h2 class="table-avatar">     -->
                                                                    <a href="profile"><img class="avatar-img rounded-circle me-2" src="{{ asset('profile_img/'.$quotes->profiles->profile_img) }}" width="50">                                                                
                                                                    <!-- <a href="profile"><img class="avatar-img rounded-circle me-2" src="{{ Storage::disk('')->url('profile_img/'.$quotes->profiles->profile_img) }}" width="50"> -->
                                                                        {{ $quotes->profiles->name }}
                                                                    </a>
                                                                <!-- </h2> -->
                                                            </td>
                                                            <td>
                                                            {{ $quotes->user_name }}
                                                            </td>
                                                            <td>
                                                                <!-- <div class="desc-info"> -->
                                                                @if($quotes->final_price > 0)
                                                                    ₹{{ $quotes->final_price }}/-
                                                                @else 
                                                                     - 
                                                                @endif
                                                                <!-- </div> -->
                                                            </td>
                                                            <td style="color:green;">   
                                                                {{ date('d-m-Y', strtotime($quotes->start_date)) }}                                                                
                                                            </td>
                                                            <td style="color:red;">
                                                                {{ date('d-m-Y', strtotime($quotes->end_date)) }}
                                                            </td>
                                                            
                                                            <!-- <td class="text-end text-nowrap">
                                                                <a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Show</a>                                                              
                                                            </td> -->
                                                        </tr>
                                                        @endforeach                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                        <div role="tabpanel" id="tab-7" class="tab-pane fade">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover datatable">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>                                                        
                                                            <th>Artist</th>    
                                                            <th>Client</th>    
                                                            <th>Final price</th>   
                                                            <th>Start date</th>  
                                                            <th>End date</th>
                                                            <!-- <th class="text-end">Actions</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($proj_cancel as $quotes)
                                                        <tr> 
                                                            <td>                                                          
                                                                {{ $quotes->id }}
                                                            </td>                                                         
                                                            <td>
                                                                <!-- <h2 class="table-avatar">     -->
                                                                    <a href="profile"><img class="avatar-img rounded-circle me-2" src="{{ asset('profile_img/'.$quotes->profiles->profile_img) }}" width="50">                                                                
                                                                    <!-- <a href="profile"><img class="avatar-img rounded-circle me-2" src="{{ Storage::disk('')->url('profile_img/'.$quotes->profiles->profile_img) }}" width="50"> -->
                                                                        {{ $quotes->profiles->name }}
                                                                    </a>
                                                                <!-- </h2> -->
                                                            </td>
                                                            <td>
                                                            {{ $quotes->user_name }}
                                                            </td>
                                                            <td>
                                                                <!-- <div class="desc-info"> -->
                                                                    @if($quotes->final_price > 0)
                                                                       ₹{{ $quotes->final_price }}/-
                                                                    @else 
                                                                         -      
                                                                    @endif
                                                                <!-- </div> -->
                                                            </td>
                                                            <td style="color:green;">   
                                                                {{ date('d-m-Y', strtotime($quotes->start_date)) }}                                                                
                                                            </td>
                                                            <td style="color:red;">
                                                                {{ date('d-m-Y', strtotime($quotes->end_date)) }}
                                                            </td>
                                                            
                                                            <!-- <td class="text-end text-nowrap">
                                                                <a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Show</a>                                                              
                                                            </td> -->
                                                        </tr>
                                                        @endforeach                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            <!-- /Page Wrapper -->
        
            </div>
        <!-- /Main Wrapper -->
        </div>
@endsection