<?php $page = 'proposals'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/jquery.signature.css') }}">
        <link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
            rel="stylesheet"> -->


    <!--Below two were hided-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/jquery.signature.css') }}">    
    <link rel="stylesheet" href="alert/dist/sweetalert.css">
    <style>
        .kbw-signature {
            width: 200px;
            height: 180px;
        }

        #sig canvas {
            width: 100% !important;
            height: auto;
        }


        label.error {
            color: #FF0000;
            font-size: 16px;
        }

  
    </style>

     

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- sidebar -->
                @include('artist.sidebar')
                <!-- sidebar -->

                <div class="col-xl-9 col-md-8">
                    <div class="page-title">
                        <h3>Proposals</h3>
                    </div>

                    <!-- Proposals list -->
                    <div class="proposals-section">
                       
                        <!-- Proposals -->
                        @if($proposal->count())                           
                                @foreach ($proposal as $key => $proposal)                                  
                                    <div class="freelancer-proposals">
                                        <div class="project-proposals align-items-center freelancer">
                                            <div class="proposals-info">
                                                <div class="proposals-detail">                                                
                                                    <div class="proposals-content">
                                                        <div class="proposal-img">
                                                            <div class="text-md-center">
                                                                <img src="{{asset('assets/img/avatar-artist.jpg')}}" alt=""
                                                                    class="img-fluid">
                                                                <h4>{{ $proposal->user_name }}</h4>
                                                                <span class="info-btn">Client</span>
                                                                <div class="proposal-type">                                                                  
                                                                    <br />
                                                                    @if($proposal->status == 'Ongoing')                                                           
                                                                        <span class="btn btn-warning btn-sm">{{ $proposal->status ?? '' }}</span>
                                                                    @elseif($proposal->status == 'Completed')    
                                                                        <span class="btn btn-info btn-sm">{{ $proposal->status ?? '' }}</span>
                                                                    @elseif($proposal->status == 'Cancelled')    
                                                                        <span class="btn btn-danger btn-sm">{{ $proposal->status ?? '' }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="proposal-client">
                                                            <h5 class="title-info">Client Price</h4>
                                                            <h3 class="client-price">₹{{ $proposal->client_price ?? '' }}</h2>                                                           
                                                        </div> 
                                                        <!-- <div class="content-divider-1"></div>   -->
                                                        <div class="proposal-client">
                                                            <h4 class="title-info">Your Price</h4>
                                                            <h2 class="client-price">₹{{ $proposal->artist_price ?? '' }}</h2>                                                                                          
                                                        </div>                                                     
                                                    </div>
                                                </div>
                                                <div class="project-hire-info">
                                                    <div class="content-divider-1"></div>                                                   
                                                    <!-- <div class="proposal-client">
                                                            <h4 class="title-info">Your Price</h4>
                                                            <h2 class="client-price">₹{{ $proposal->artist_price ?? '' }}</h2>                                                                                          
                                                    </div> -->
                                                    
                                                    <!-- <div class="proposal-type">
                                                        <h4 class="title-info">Job Type</h4>
                                                        <h3>{{ $proposal->job_type ?? '' }}</h3>
                                                    </div> -->
                                                    <div >
                                                    </div>    
                                                    <div class="proposal-client">
                                                    </div>
                                                    <!-- <div class="content-divider-1"></div> -->
                                                    <div class="projects-action text-center justify-content-end">

                                                        <!-- Edit Button -->
                                                        {{-- @if($proposal->artist_accept == 1) --}}
                                                        @if($proposal->artist_status == 2 and $proposal->client_status == 0)
                                                            @if($proposal->job_id == NULL)
                                                            <span class="proposal-delete">You rejected client proposal wait for client approval</span>                                                             
                                                            <!-- The Modal -->
                                                            <div class="modal fade" id="edit-proposal{{ $proposal->id }}">
                                                                <div class="modal-dialog modal-dialog-centered modal-sm">
                                                                    <div class="modal-content">

                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Edit Proposal</h4>
                                                                            <span class="modal-close"><a href="#"
                                                                                    data-bs-dismiss="modal" aria-label="Close"><i
                                                                                        class="far fa-times-circle"></i></a>
                                                                            </span>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                            <form
                                                                                action="{{ route('artist_price.update', $proposal->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('put')

                                                                                <div class="modal-info">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label>Client Estimate price</label>
                                                                                                <input type="text"
                                                                                                    name="client_price"
                                                                                                    class="form-control"
                                                                                                    value="{{ $proposal->client_price ?? '' }}"
                                                                                                    readonly>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label>Your Estimate</label>
                                                                                                <input type="text"
                                                                                                    name="artist_price"
                                                                                                    class="form-control"
                                                                                                    value="{{ $proposal->artist_price ?? '' }}">
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="submit-section text-first">
                                                                                    <button type="submit" class="btn btn-outline-primary">Save Proposal </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @else
                                                            <span class="proposal-delete">Please wait for client approval</span>  
                                                            @endif
                                                            <!-- /The Modal -->
                                                        @elseif($proposal->client_status == 3 and $proposal->artist_status == 2)
                                                            <span class="proposal-delete">You rejected client proposal</span>  <br>
                                                            <a data-bs-toggle="modal" data-bs-target="#edit-proposal{{ $proposal->id }}" class="projects-btn">Send again</a>
                                                            <!-- The Modal -->
                                                            <div class="modal fade" id="edit-proposal{{ $proposal->id }}">
                                                                <div class="modal-dialog modal-dialog-centered modal-sm">
                                                                    <div class="modal-content">

                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Edit Proposal</h4>
                                                                            <span class="modal-close"><a href="#"
                                                                                    data-bs-dismiss="modal" aria-label="Close"><i
                                                                                        class="far fa-times-circle"></i></a></span>
                                                                        </div>
                            
                                                                        <div class="modal-body">
                                                                            <form action="{{ route('artist_price.update', $proposal->id) }}" method="POST">
                                                                                @csrf
                                                                                @method('put')

                                                                                <div class="modal-info">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label>Client Estimate price</label>
                                                                                                <input type="text"
                                                                                                    name="client_price"
                                                                                                    class="form-control"
                                                                                                    value="{{ $proposal->client_price ?? '' }}"
                                                                                                    readonly>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label>Your Estimate</label>
                                                                                                <input type="text"
                                                                                                    name="artist_price"
                                                                                                    class="form-control"
                                                                                                    value="{{ $proposal->artist_price ?? '' }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="submit-section text-first">
                                                                                    <!-- <button type="submit" class="btn btn-primary submit-btn">Save Proposal</button> -->
                                                                                    <button type="submit" class="btn btn-outline-primary">Save Proposal</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /The Modal -->
                                                            
                                                        @elseif($proposal->artist_status == 3 and $proposal->client_status == 2)
                                                                <span class="proposal-delete">Client rejected your Proposal</span>		    
                                                        @elseif($proposal->client_status == 2 and $proposal->artist_status == 0)
                                                                <span class="proposal-delete">Client have sent his proposal and rejected yours</span>  <br>
                                                                <a href="{{ route('artist_reject', ['id' => $proposal->id, 'status' => 2]) }}" class="btn btn-outline-danger">Reject</a>  
                                                        @elseif($proposal->artist_status == 2 and $proposal->client_status == 4)																			
                                                                <span class="proposal-delete">{{ $proposal->user_name }} aborted this proposal</span>  <br>
                                                        @elseif($proposal->artist_status == 4 and $proposal->client_status == 0)
                                                                <span class="proposal-delete">You aborted this Proposal</span>	
                                                        @elseif ($proposal->artist_status == 0 and $proposal->client_status == 0)                                                           
                                                            @if($proposal->job_id == NULL)
                                                                <a data-bs-toggle="modal" data-bs-target="#edit-proposal{{ $proposal->id }}" style="border-radius: 0.3rem; font-size: 0.8rem;" class="btn btn-outline-info">Recode</a>   <br /><br />                                                      
                                                                <a data-bs-toggle="modal" data-bs-target="#reject-proposal{{ $proposal->id }}" style="border-radius: 0.3rem; font-size: 0.8rem;" class="btn btn-outline-danger">Reject</a>
                                                                <a href="{{ route('proposal.artist_status', ['id' => $proposal->id, 'status' => 1]) }}" style="border-radius: 0.3rem; font-size: 0.8rem;" class="btn btn-outline-success">Accept</a>         
                                                                                                    
                                                                <!-- The Modal -->
                                                                <div class="modal fade" id="edit-proposal{{ $proposal->id }}">
                                                                    <div class="modal-dialog modal-dialog-centered modal-sm">
                                                                        <div class="modal-content">

                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Your Proposal</h4>
                                                                                <span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle"></i></a></span>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <form
                                                                                    action="{{ route('artist_price_reject.update', $proposal->id) }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    @method('put')

                                                                                    <div class="modal-info">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label>Client Estimate price</label>
                                                                                                    <input type="text"
                                                                                                        name="client_price"
                                                                                                        class="form-control"
                                                                                                        value="{{ $proposal->client_price ?? '' }}"
                                                                                                        readonly>
                                                                                                </div>
                                                                                            </div><br />
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label>Artist Estimate price</label>
                                                                                                    <input type="text"
                                                                                                        name="artist_price"
                                                                                                        class="form-control"
                                                                                                        value="{{ $proposal->artist_price ?? '' }}">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br />                                                                                    
                                                                                    <div class="submit-section text-first">
                                                                                        <!-- <button type="submit" class="btn btn-primary submit-btn">Save Proposal</button> -->
                                                                                        <button type="submit" class="btn btn-outline-primary">Save Proposal</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /The Modal -->

                                                                <!-- The Modal for rejecting/aborting proposal -->
                                                                <div class="modal fade" id="reject-proposal{{ $proposal->id }}">
                                                                    <div class="modal-dialog modal-dialog-centered modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Give reason why ?</h4>
                                                                                <span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle"></i></a></span>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <form action="{{ route('abort_proposal.update', $proposal->id) }}" method="POST" id="artreason">
                                                                                    @csrf
                                                                                    @method('put')

                                                                                    <div class="modal-info">
                                                                                        <div class="row">                                                                                
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">                                                                                            
                                                                                                    <textarea type="text"
                                                                                                        name="artist_reason" rows="5" cols="20"
                                                                                                        class="form-control"
                                                                                                        value="{{ $proposal->artist_reason ?? '' }}">
                                                                                                    </textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="submit-section text-first">
                                                                                        <button type="submit" class="btn btn-primary submit-btn">Save Proposal</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /The Modal -->

                                                            @else
                                                            <span class="proposal-delete">Please wait for client approval</span>  
                                                            @endif 
                                                        @elseif ($proposal->artist_status == 1 and $proposal->client_status == 0)
                                                            <span class="proposal-delete">You have accepted wait for client confirmation</span>                                                          
                                                            <br />     
                                                        @elseif ($proposal->artist_status == 3 and $proposal->client_status == 0)
                                                            <span class="proposal-delete">??</span>
                                                        @elseif ($proposal->artist_status == 3 and $proposal->client_status == 1)
                                                            <span class="proposal-delete">Client accepted waiting for your confirmation</span><br>                                                
                                                            <a href="{{ route('proposal.artist_status', ['id' => $proposal->id, 'status' => 1]) }}" class="btn btn-outline-success">Accept</a><br>  
                                                                <span class="proposal-delete">Please accept</span><br>    
                                                            <br />   

                                                        @elseif($proposal->artist_status == 0 and $proposal->client_status == 1)                                                  
                                                            @if($proposal->contract_id == null)
                                                                <span class="proposal-delete">Proposal Accepted by client</span>
                                                                <a href="{{ route('proposal.artist_status', ['id' => $proposal->id, 'status' => 1]) }}" class="btn btn-outline-success">Accept</a>  
                                                            @elseif ($proposal->contract_id != null)        
                                                                @if ($proposal->contract_client == 0 and $proposal->contract_artist == 0)
                                                                    <span class="proposal-delete">Contract Sent to Client for signature</span>
                                                                @elseif($proposal->contract_client == 1 and $proposal->contract_artist == 0)
                                                                    <span class="proposal-delete">Client have signed Contract</span>                                                          
                                                                    <a data-bs-toggle="modal" data-bs-target="#bookmark{{ $proposal->id }}"
                                                                    class="projects-btn">Sign Contract</a> 
                                                                @elseif($proposal->contract_artist == 1 and $proposal->contract_client == 1)
                                                                    <a class="projects-btn">See Contract</a>                                                            
                                                                    @if($proposal->invoice == 0)
                                                                        <a href="{{ route('project.view',$proposal->contract_id) }}" class="projects-btn">Create Invoice</a>
                                                                    @elseif($proposal->invoice == 1)
                                                                        <a href="{{ route('project.view',$proposal->id) }}" class="projects-btn">View Invoice</a>
                                                                    @endif   	                                                       	
                                                                @endif                                                                                                                
                                                            @endif
                                                        @elseif($proposal->artist_status == 1 and $proposal->client_status == 1)    
                                                            @if($proposal->contract_id == null)                                                          
                                                                @if($proposal->invoice == 0)   
                                                                    @php 
                                                                        $products = App\Product::where('quotes_id','=',$proposal->id)->first(); 
                                                                    @endphp
                                                                    @if($products)
                                                                        <span class="proposal-delete">Estimated created</span><br />
                                                                        <span class="proposal-delete">Please send to client</span><br /><br />
                                                                        <a href="{{ route('project.estimate',$proposal->id) }}" style="color:green;" class="proposal-button">Edit Estimate</a> |
                                                                        <a href="{{ route('proposal.estimate', ['id' => $proposal->id, 'status' => 3]) }}" style="color:blue;" class="proposal-button">Send Estimate</a>  
                                                                    @else
                                                                        <span class="proposal-delete">Both have accepted Proposal</span><br />
                                                                        <span class="proposal-delete">Please send estimate to client</span> <br /><br /> 
                                                                        <a href="{{ route('project.estimate',$proposal->id) }}" style="color:green;" class="proposal-button">Send Estimate</a>                                                                          
                                                                    @endif

                                                                    <!-- @php 
                                                                        $quo = App\Product::where('quotes_id','=',$proposal->id)->get(); 
                                                                    @endphp
                                                                    @if($quo)
																        <a href="{{ route('proposal.estimate', ['id' => $proposal->id, 'status' => 3]) }}" style="padding: 0.375rem 0.75rem; line-height: 1.2;" class="btn btn-outline-info">Send Estimate</a>   
                                                                    @else
                                                                        <a href="{{ route('project.estimate',$proposal->id) }}" style="color:green;" class="proposal-button">Send Estimate</a>           
                                                                    @endif -->
                                                                           
                                                                <!--Pending after estimate accepted -->      
                                                                @elseif($proposal->invoice == 1)  
                                                                    <span class="proposal-delete">Client Accepted Your estimate</span>  <br/>
                                                                    <span class="proposal-delete">Please send contract</span> <br/>
                                                                    <a data-bs-toggle="modal" data-bs-target="#contract{{ $proposal->id }}" class="btn btn-link">Send Contract</a>   
                                                                @elseif($proposal->invoice == 2)        
                                                                    <span class="proposal-delete">Client Rejected Your estimate</span>  
                                                                @elseif($proposal->invoice == 3)   
                                                                    <span class="proposal-delete">Estimate sucessfully sent to client</span>  
                                                                @endif    
                                                            @elseif ($proposal->contract_id != null)        
                                                                @if ($proposal->contract_client == 0 and $proposal->contract_artist == 0)
                                                                    <span class="proposal-delete">Contract Sent to Client</span>
                                                                @elseif($proposal->contract_client == 1 and $proposal->contract_artist == 0)
                                                                    <span class="proposal-delete">Client have signed Contract</span>                                                          
                                                                    <a data-bs-toggle="modal" data-bs-target="#bookmark{{ $proposal->id }}"
                                                                    class="projects-btn">Sign Contract</a> 
                                                                @elseif($proposal->contract_client == 0 and $proposal->contract_artist == 1)                                                                  
                                                                    <span class="proposal-delete">Please wait for client to sign contract</span> 
                                                                @elseif($proposal->contract_artist == 1 and $proposal->contract_client == 1)
                                                                    @php																									
                                                                        $contract = App\Contract::where('quotes_id','=',$proposal->id)->first();
                                                                    @endphp                                                                                                   
                                                           
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <span class="proposal-button" style="color:blue;">Update Project Status</span>   
                                                                        </div>
                                                                        <div class="w-100"></div>
                                                                        <div class="col">
                                                                            <div class="row">
                                                                            <div class="col-2"></div>
                                                                                <div class="col-8">
											                                        <input type="hidden" class="hidd" value="{{$contract->id}}">
                                                                                    <select class="form-select form-select-sm updatestatus" name="status" style="padding-left: 3.5px;">
                                                                                        <option>Please Select</option>
                                                                                        <option {{ $contract->status == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                                                                                        <option {{ $contract->status == 'Completed' ? 'selected' : '' }} value="Completed">Completed</option>													
                                                                                        <option {{ $contract->status == 'Cancelled' ? 'selected' : '' }} value="Cancelled">Cancelled</option>
                                                                                    </select>
                                                                                </div> 
                                                                                <div class="col-2"></div>
                                                                            </div>                                                                             
                                                                        </div>                                                                    
                                                                    </div>

                                                                    <br />                                                                     
                                                                        @if($proposal->client_feedback == 'No')  
                                                                            <span class="btn btn-warning btn-sm">Client have complaint against you</span><br />
                                                                        @elseif($proposal->client_feedback == 'Yes')  
                                                                            <span class="btn btn-warning btn-sm">Client have complaint against you</span><br />
                                                                        @endif
                                                                    <br />
                                                                    <a href="{{ route('project.contract', $proposal->contract_id) }}" onmouseover="style='text-decoration:underline'" onmouseout="style='text-decoration:none'" class="proposal-button">See Contract</a>  
                                                                    @if($proposal->invoice == 0)
                                                                        | <a href="{{ route('project.view',$proposal->contract_id) }}" conmouseover="style='text-decoration:underline'" onmouseout="style='text-decoration:none'" class="proposal-button">Create Invoice</a>
                                                                    @elseif($proposal->invoice == 1)
                                                                        @if($proposal->client_feedback == '' or $proposal->client_feedback == 'Yes')  
                                                                        | <a href="{{ route('project.view',$proposal->id) }}" onmouseover="style='text-decoration:underline'" onmouseout="style='text-decoration:none'" class="proposal-button">Edit Invoice</a>
                                                                        @endif
                                                                    @endif                    
                                                                @endif                                                                                                        
                                                            @endif
                                                            @php																											
																$products = App\Product::where('quotes_id','=',$proposal->id)->get();
																$total = $products->sum('price');																												
																$contracts = App\Contract::where('quotes_id','=',$proposal->id)->first();
															@endphp	
                                                         
                                                            <!-- The Modal contract new-->
                                                            <div class="modal fade" id="contract{{ $proposal->id }}">
                                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Send Contract</h4>
                                                                            <span class="modal-close"><a href="#"
                                                                                    data-bs-dismiss="modal" aria-label="Close"><i
                                                                                        class="far fa-times-circle orange-text"></i></a></span>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                            <!-- <form action="invited-freelancer"> -->
                                                                            <!-- @if( $proposal->contract_id == NULL) -->
                                                                            <form action="{{ route('contract.store') }}"
                                                                                method="POST" enctype="multipart/form-data" id="contract">
                                                                                @csrf
                                                                            <!-- @elseif( $proposal->contract_id != NULL)
                                                                            <form action="{{ route('contract.update',$proposal->contract_id ) }}"
                                                                                method="POST"  enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('put')
                                                                            @endif     -->
                                                                                <div class="modal-info">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="average-bids mb-4">
                                                                                                <p>Hi, <span
                                                                                                        class="text-highlight">{{ $proposal->user_name ?? '' }}</span>
                                                                                                    <input type="hidden"
                                                                                                        name="quotes_id"
                                                                                                        class="form-control"
                                                                                                        value="{{ $proposal->id ?? '' }}">
                                                                                                    <input type="hidden"
                                                                                                        name="user_id"
                                                                                                        class="form-control"
                                                                                                        value="{{ $proposal->user_id ?? '' }}">
                                                                                                    <input type="hidden"
                                                                                                        name="user_name"
                                                                                                        class="form-control"
                                                                                                        value="{{ $proposal->user_name ?? '' }}">
                                                                                                    <input type="hidden"
                                                                                                        name="user_email"
                                                                                                        class="form-control"
                                                                                                        value="{{ $proposal->user_email ?? '' }}">
                                                                                                    @if($proposal->job_id == NULL)
                                                                                                    <input type="hidden"
                                                                                                        name="profile_id"
                                                                                                        class="form-control"
                                                                                                        value="{{ $proposal->profile_id ?? '' }}">
                                                                                                    @elseif($proposal->job_id !=NULL)
                                                                                                    <input type="hidden"
                                                                                                        name="profile_id"
                                                                                                        class="form-control"
                                                                                                        value="{{ Auth::user()->profile()->first()->id ?? '' }}">
                                                                                                    @endif
                                                                                                    <input type="hidden"
                                                                                                        name="artist_price"
                                                                                                        class="form-control"
                                                                                                        value="{{ $proposal->artist_price ?? '' }}">
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>


                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <span class="text-highlight">Job
                                                                                                        Start Date</span>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        name="start_date"
                                                                                                        value="{{ date('d-m-Y', strtotime($proposal->start_date)) ?? '' }}"
                                                                                                        readonly>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <span class="text-highlight">Job
                                                                                                        End Date</label>
                                                                                                        <input type="text"
                                                                                                            class="form-control"
                                                                                                            name="end_date"
                                                                                                            value="{{ date('d-m-Y', strtotime($proposal->end_date)) ?? '' }}"
                                                                                                            readonly>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <span
                                                                                                        class="text-highlight">Projected
                                                                                                        Budget</label>
                                                                                                        <div
                                                                                                            class="input-group form-inline mb-2">
                                                                                                            <div
                                                                                                                class="input-group-prepend bg-pink d-flex">
                                                                                                                <span
                                                                                                                    class="input-group-text"
                                                                                                                    id="basic-add">₹</span>
                                                                                                            </div>
                                                                                                            <input type="text"
                                                                                                                class="form-control me-1"
                                                                                                                name="projected_budget"
                                                                                                                value="{{ $proposal->projected_budget ?? '' }}">
                                                                                                        </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <span
                                                                                                        class="text-highlight">Final  
                                                                                                        Budget</label>
                                                                                                        <div
                                                                                                            class="input-group form-inline mb-2">
                                                                                                            <div
                                                                                                                class="input-group-prepend bg-pink d-flex">
                                                                                                                <span
                                                                                                                    class="input-group-text"
                                                                                                                    id="basic-add">₹</span>
                                                                                                            </div>                                                                                                          
                                                                                                            <input type="text"
                                                                                                                class="form-control me-1"
                                                                                                                name="final_price" id="final_price"
                                                                                                                Value="{{ $total }}">                                                                                                 
                                                                                                        </div>
                                                                                                </div>
                                                                                            </div>     
                                                                                        </div> -->

                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <span class="text-highlight">Job
                                                                                                        Location</span>
                                                                                                        <textarea class="form-control" rows="5" name="address">{{ $proposal->address ?? '' }}</textarea>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <span class="text-highlight">Job
                                                                                                        Details</span>
                                                                                                        <textarea class="form-control" rows="5" name="project_details">{{ $proposal->project_details ?? '' }}</textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>   
                                                                                        
                                                                                        <div class="row">  
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <span class="text-highlight">Upload
                                                                                                        Sign</span>
                                                                                                        <input name="artist_sign" type="file" class="form-control" required>
                                                                                                </div>
                                                                                            </div> 
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <span
                                                                                                        class="text-highlight">Final  
                                                                                                        Budget</label>
                                                                                                        <div
                                                                                                            class="input-group form-inline mb-2">
                                                                                                            <div
                                                                                                                class="input-group-prepend bg-pink d-flex">
                                                                                                                <span
                                                                                                                    class="input-group-text"
                                                                                                                    id="basic-add">₹</span>
                                                                                                            </div>                                                                                                          
                                                                                                            <input type="text"
                                                                                                                class="form-control me-1"
                                                                                                                name="final_price" id="final_price"
                                                                                                                Value="{{ $total }}">                                                                                                 
                                                                                                        </div>
                                                                                                </div>
                                                                                            </div> 
                                                                                        </div>                                                                     
                                                                                    </div>
                                                                                </div>
                                                                                <br/><br/>
                                                                                <div class="text-end">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Save
                                                                                        Contract</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /The Modal -->
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                    
                                            <div class="show-more" style="margin-right: 0;"><a href="javascript:void(0)" style="color:blue;">View more...</a></div>
                                            <div class="description-proposal show-more-content">
                                                <h5 class="desc-title">Description</h5>
                                                <p>{{ $proposal->project_details }}</p><br />
                                                <div class="float-end show-less"><a href="javascript:void(0)" style="color:red;">View less..</a></div>
                                            </div> <br />
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="float-start" style="font-size: 12px;">Posted on: {{ $proposal->created_at->format('d/m/Y') }}</div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="float-end" style="font-size: 12px">Last update: {{ $proposal->updated_at->format('d/m/Y') }}</div>
                                                </div>
                                            </div>                                                                                                                             
                                        </div>
                                    </div>                                    
                                @endforeach                            
                            @endif


                        <!-- Proposals -->

                    </div>
                    <!-- /Proposals list -->

                    <!-- pagination -->
                    <div class="row">
                        <div class="col-md-12">
                            {{-- <ul class="paginations freelancer">
                                <li><a href="#"> <i class="fas fa-angle-left"></i> Previous</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
                            </ul> --}}

                            {{-- {{ $proposal->links() }} --}}
                        </div>
                    </div>
                    <!-- /pagination -->


                </div>
            </div>
        </div>
    </div>

    <!-- /Page Content -->



    </div>
    <!-- /Main Wrapper -->
    <script src="alert/dist/sweetalert-dev.js"></script>
@endsection

