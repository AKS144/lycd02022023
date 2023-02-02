<?php $page = 'proposals'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/jquery.signature.css') }}">
        <link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
            rel="stylesheet"> -->


    <!--Below two were hided-->
    {{-- <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"
        integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ=="
        crossorigin="anonymous" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/jquery.signature.css') }}">

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
            color: #dc3545;
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
                        <h3 class="page-subtitle">My Proposals</h3>

                        <!-- Proposals -->
                        @foreach ($proposal as $key => $proposal)
                            <div class="freelancer-proposals">
                                <div class="project-proposals align-items-center freelancer">
                                    <div class="proposals-info">
                                        <div class="proposals-detail">
                                            <!-- <h3 class="proposals-title">{{ $proposal->user_name ?? '' }}</h3> -->
                                            <div class="proposals-content">
                                                <div class="proposal-img">
                                                    <div class="text-md-center">
                                                        <img src="{{asset('assets/img/avatar-artist.jpg')}}" alt=""
                                                            class="img-fluid">
                                                        <h4>{{ $proposal->user_name }}</h4>
                                                        <span class="info-btn">Client</span>
                                                    </div>
                                                </div>
                                                <div class="proposal-client">
                                                    <h4 class="title-info">Client Price</h4>
                                                    <h2 class="client-price">₹{{ $proposal->client_price ?? '' }}</h2>
                                                    <span class="price-type"> {{ $proposal->price_type ?? '' }}
                                                    </span>
                                                </div>
                                                <div class="proposal-type">
                                                    <!-- <h4 class="title-info">Job Type</h4> -->
                                                    <h3>{{ $proposal->job_type ?? '' }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-hire-info">
                                            <div class="content-divider-1"></div>
                                            <!-- <div class="projects-amount">
                                                <p>Your Price</p>
                                                <h3>₹{{ $proposal->artist_price ?? '' }}</h3>
                                                <h5>in 12 Days</h5>
                                            </div> -->
                                            <div class="proposal-client">
                                                    <h4 class="title-info">Your Price</h4>
                                                    <h2 class="client-price">₹{{ $proposal->artist_price ?? '' }}</h2>                                                                                          
                                            </div>
                                            <div class="content-divider-1"></div>
                                            <div class="projects-action text-center">


                                                {{-- <a href="{{route('project.view',$proposal->contract_id)}}" class="projects-btn">View Details</a> --}}
                                                <!-- Edit Button -->
                                                @if($proposal->artist_status == 2 and $proposal->client_status == 0)
                                                    <span class="text-highlight">You rejected client proposal</span>  
                                                    <a data-bs-toggle="modal" data-bs-target="#edit-proposal{{ $proposal->id }}" style="cursor:pointer;" class="btn-primary projects-btn">Your Proposal</a>
                                                    <!-- The Modal -->
                                                    <div class="modal fade" id="edit-proposal{{ $proposal->id }}">
                                                        <div class="modal-dialog modal-dialog-centered modal-sm">
                                                            <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Your Proposal</h4>
                                                                    <span class="modal-close"><a href="#"
                                                                            data-bs-dismiss="modal" aria-label="Close"><i
                                                                                class="far fa-times-circle"></i></a></span>
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
                                                                                        <label>Artist Estimate price</label>
                                                                                        <input type="text"
                                                                                            name="artist_price"
                                                                                            class="form-control"
                                                                                            value="{{ $proposal->artist_price ?? '' }}">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="submit-section text-first">
                                                                            <button type="submit"
                                                                                class="btn btn-primary submit-btn">Save
                                                                                Proposal</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /The Modal -->
                                                @elseif($proposal->client_status == 3 and $proposal->artist_status == 2)
                                                      <span class="text-highlight">You rejected client proposal</span>  <br>
                                                    <a data-bs-toggle="modal" data-bs-target="#edit-proposal{{ $proposal->id }}" class="projects-btn">Send again</a>
                                                      <!-- The Modal -->
                                                    <div class="modal fade" id="edit-proposal{{ $proposal->id }}">
                                                        <div class="modal-dialog modal-dialog-centered modal-sm">
                                                            <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Your Proposal</h4>
                                                                    <span class="modal-close"><a href="#"
                                                                            data-bs-dismiss="modal" aria-label="Close"><i
                                                                                class="far fa-times-circle"></i></a></span>
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
                                                                                        <label>Artist Estimate price</label>
                                                                                        <input type="text"
                                                                                            name="artist_price"
                                                                                            class="form-control"
                                                                                            value="{{ $proposal->artist_price ?? '' }}">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="submit-section text-first">
                                                                            <button type="submit"
                                                                                class="btn btn-primary submit-btn">Save
                                                                                Proposal</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /The Modal -->
                                                @elseif($proposal->artist_status == 3 and $proposal->client_status == 2)
																  <span class="text-highlight">Client rejected Proposal</span>		    
                                                @elseif($proposal->client_status == 2 and $proposal->artist_status == 0)
                                                      <span class="text-highlight">Client have sent his proposal and rejected yours</span>  <br>
                                                     <a href="{{ route('artist_reject', ['id' => $proposal->id, 'status' => 2]) }}" class="btn btn-primary btn-invite">Reject</a>          
                                                @elseif ($proposal->artist_status == 0 and $proposal->client_status == 0)
                                                    <!-- <a data-bs-toggle="modal" data-bs-target="#edit-proposal{{ $proposal->id }}" class=" btn btn-primary projects-btn">Your Proposal</a> -->
                                                     <a href="{{ route('artist_reject', ['id' => $proposal->id, 'status' => 2]) }}" class="btn btn-outline-danger ">Reject</a>         

                                                    <a href="{{ route('proposal.artist_status', ['id' => $proposal->id, 'status' => 1]) }}" class="btn  btn-outline-success">Accept</a>         
                                                                                          
                                                    <!-- The Modal -->
                                                    <div class="modal fade" id="edit-proposal{{ $proposal->id }}">
                                                        <div class="modal-dialog modal-dialog-centered modal-sm">
                                                            <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Your Proposal</h4>
                                                                    <span class="modal-close"><a href="#"
                                                                            data-bs-dismiss="modal" aria-label="Close"><i
                                                                                class="far fa-times-circle"></i></a></span>
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
                                                                                        <label>Artist Estimate price</label>
                                                                                        <input type="text"
                                                                                            name="artist_price"
                                                                                            class="form-control"
                                                                                            value="{{ $proposal->artist_price ?? '' }}">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="submit-section text-first">
                                                                            <button type="submit"
                                                                                class="btn btn-primary submit-btn">Save
                                                                                Proposal</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /The Modal -->
                                                @elseif ($proposal->artist_status == 1 and $proposal->client_status == 0)
                                                    <span class="text-highlight">You have accepted waiting client confirmation</span>
                                                    {{-- <a data-bs-toggle="modal" data-bs-target="#bookmark{{ $proposal->id }}" class="projects-btn">Send Contract</a>                                                      --}}
                                                    <br />     
                                                @elseif ($proposal->artist_status == 3 and $proposal->client_status == 1)
                                                    <span class="text-highlight">Client accepted waiting for your confirmation</span><br>                                                
                                                    <a href="{{ route('proposal.artist_status', ['id' => $proposal->id, 'status' => 1]) }}" class="btn btn-primary btn-invite">Accept</a>  <br>  
                                                        <span class="text-highlight">Please accept</span><br>     
                                                                                                   
                                                    <br />   

                                                @elseif($proposal->artist_status == 0 and $proposal->client_status == 1)                                                  
                                                    @if($proposal->contract_id == null)
                                                        <span class="text-highlight">Proposal Accepted by client</span>
                                                        <a href="{{ route('proposal.artist_status', ['id' => $proposal->id, 'status' => 1]) }}"
																				class="btn btn-primary btn-invite">	Accept																		
																			</a>                                                                           
                                                    
                                                    @elseif ($proposal->contract_id != null)        
                                                        @if ($proposal->contract_client == 0 and $proposal->contract_artist == 0)
                                                            <span class="text-highlight">Contract Sent to Client for signature</span>
                                                        @elseif($proposal->contract_client == 1 and $proposal->contract_artist == 0)
                                                            <span class="text-highlight">Client have signed Contract</span>                                                          
                                                            <a data-bs-toggle="modal" data-bs-target="#bookmark{{ $proposal->id }}"
                                                            class="projects-btn">Sign Contract</a> 
                                                        @elseif($proposal->contract_artist == 1 and $proposal->contract_client == 1)
                                                            <a class="projects-btn">See Contract</a>                                                            
                                                            @if($proposal->invoice == 0)
                                                                <a href="{{ route('project.view',$proposal->contract_id) }}" class="projects-btn">Create Invoice</a>
                                                            @elseif($proposal->invoice == 1)
                                                                <a href="{{ route('project.view',$proposal->contract_id) }}" class="projects-btn">View Invoice</a>
                                                            @endif   
                                                        @endif
                                                                                                        
                                                    @endif
                                                @elseif($proposal->artist_status == 1 and $proposal->client_status == 1)    
                                                    @if($proposal->contract_id == null)                                                          
                                                        @if($proposal->invoice == 0) 
                                                        <span class="text-highlight">Both have accepted Proposal</span> 
                                                         <span class="text-highlight">Please send extimate to client</span>   
                                                         <a data-bs-toggle="modal"
                                                                data-bs-target="#estimate{{ $proposal->id }}"
                                                                class="projects-btn">Send Estimate</a> 
                                                                    <!-- The Modal estimate -->
                                                                    <div class="modal fade" id="estimate{{ $proposal->id }}">
                                                                        <div class="modal-dialog modal-dialog-centered modal-xl">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">Send Estimate</h4>
                                                                                    <span class="modal-close"><a href="#"
                                                                                            data-bs-dismiss="modal" aria-label="Close"><i
                                                                                                class="far fa-times-circle orange-text"></i></a></span>
                                                                                </div>

                                                                                <div class="modal-body">                                                                  
                                                                                   <form method="POST" action="{{ route('addproduct') }}" id="addproduct">
                                                                                     @csrf
                                                                                                                            
                                                                                        <div class="modal-info">
                                                                                            <div class="row">
                                                                                                <div class="col-md-2">
                                                                                                    <div class="form-group">
                                                                                                    <label for="name">Product name</label>
                                                                                                        <input type="text" id="product_name" name="product_name" class="form-control" value="" required>
                                                                                                    </div>
                                                                                                </div>   
                                                                                                <div class="col-md-2">
                                                                                                    <div class="form-group">
                                                                                                    <label for="name">Unit Price</label>
                                                                                                        <input type="text" id="unit_price" name="unit_price" class="form-control" value="" required>
                                                                                                    </div>
                                                                                                </div>
                                                                                                        <input type="hidden" id="price" name="artist_id" class="form-control" value="{{ $proposal->artist_id }}">
                                                                                                        <input type="hidden" id="user_id" name="user_id" class="form-control" value="{{ $proposal->user_id }}">
                                                                                                        <input type="hidden" id="quotes_id" name="quotes_id" class="form-control" value="{{ $proposal->id }}">
                                                                                                <div class="col-md-2">
                                                                                                    <div class="form-group">
                                                                                                    <label for="name">Qunatity</label>
                                                                                                        <input type="number" id="qty" name="qty" min="0" max="10" class="form-control" value="" required>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">                                                                                                    
                                                                                                    <div class="form-group">
                                                                                                    <label for="name">Description</label>
                                                                                                        <input type="text" id="description" name="description" class="form-control" value="" required>
                                                                                                    </div>
                                                                                                </div>  
                                                                                                <div class="col-md-2">
                                                                                                   <div class="submit-section text-right"><br>
                                                                                                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>  
                                                                                                    </div>
                                                                                                </div>
                                                                                               {{-- <div class="col-md-2">
                                                                                                    <div class="submit-section text-right">
                                                                                                            <a data-bs-dismiss="modal" class="btn btn-primary black-btn submit-btn">Cancel</a>                                                                                                           
                                                                                                    </div>
                                                                                               </div> --}}
                                                                                            </div>
                                                                                        </div>                                                                                        
                                                                                    </form>
                                                                                    <hr>
                                                                                 <div class="row">
                                                                                    <div class="col-12 table-responsive">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Product</th>
                                                                                                    <th>Unit Price</th>
                                                                                                    <th>Qty</th>                                                                                                    
                                                                                                    <th>Description</th>
                                                                                                    <th>Subtotal</th>
                                                                                                    <th>Action</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                @foreach ($products as $products)
                                                                                                    <tr>
                                                                                                        <td>{{ $products->product_name }}</td>
                                                                                                        <td>{{ $products->unit_price }}</td>
                                                                                                        <td>{{ $products->qty }}</td>
                                                                                                        <td>{{ $products->description }}</td>
                                                                                                        <td>{{ $products->price }}</td>
                                                                                                        <td>
                                                                                                            {{-- <a href="{{ route('editproduct', $products->id) }}" class="btn btn-sm btn-info">Edit</a> --}}
                                                                                                            {{-- <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-sm btn-danger">Edit</a> --}}
                                                                                                            <!-- The Modal -->
                                                                                                            <a class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal"
                                                                                                                data-bs-target="#edit-product{{ $products->id }}">
                                                                                                                <i class="fas fa-edit"></i></a>                                                                                                       


                                                                                                            <div class="modal fade" id="edit-product{{ $products->id }}">
                                                                                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                                                                    <div class="modal-content">
                                                                                                                        <div class="modal-header">
                                                                                                                            <h4>Add Portfolio</h4>
                                                                                                                            <span class="modal-close"><a href="#"
                                                                                                                                    data-bs-dismiss="modal" aria-label="Close"><i
                                                                                                                                        class="fa fa-times"
                                                                                                                                        aria-hidden="true"></i></a></span>
                                                                                                                        </div>
                                                                                                                        <div class="modal-body">
                                                                                                                            <form
                                                                                                                                action="{{ route('editproduct', $products->id) }}"
                                                                                                                                method="POST">
                                                                                                                                @csrf
                                                                                                                                @method('put')

                                                                                                                                <div class="modal-info">
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-md-12">
                                                                                                                                            <div class="form-group">
                                                                                                                                                <label for="name">Product
                                                                                                                                                    name</label>
                                                                                                                                                <input type="text"
                                                                                                                                                    id="product_name"
                                                                                                                                                    name="product_name"
                                                                                                                                                    class="form-control"
                                                                                                                                                    value="{{ $products->product_name }}"
                                                                                                                                                    required>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group">
                                                                                                                                                <label for="name">Unit
                                                                                                                                                    Price</label>
                                                                                                                                                <input type="text"
                                                                                                                                                    id="unit_price"
                                                                                                                                                    name="unit_price"
                                                                                                                                                    class="form-control"
                                                                                                                                                    value="{{ $products->unit_price }}"
                                                                                                                                                    required>
                                                                                                                                            </div>

                                                                                                                                            <input type="hidden" id="price"
                                                                                                                                                name="artist_id"
                                                                                                                                                class="form-control"
                                                                                                                                                value="{{ $proposal->artist_id }}">
                                                                                                                                            <input type="hidden" id="user_id"
                                                                                                                                                name="user_id"
                                                                                                                                                class="form-control"
                                                                                                                                                value="{{ $proposal->user_id }}">
                                                                                                                                            <input type="hidden" id="contract_id"
                                                                                                                                                name="contract_id"
                                                                                                                                                class="form-control"
                                                                                                                                                value="{{ $proposal->id }}">

                                                                                                                                            <div class="form-group">
                                                                                                                                                <label
                                                                                                                                                    for="name">Qunatity</label>
                                                                                                                                                <input type="number"
                                                                                                                                                    id="qty" name="qty"
                                                                                                                                                    min="0" max="10"
                                                                                                                                                    class="form-control"
                                                                                                                                                    value="{{ $products->qty }}"
                                                                                                                                                    required>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group">
                                                                                                                                                <label
                                                                                                                                                    for="name">Description</label>
                                                                                                                                                <input type="text"
                                                                                                                                                    id="description"
                                                                                                                                                    name="description"
                                                                                                                                                    class="form-control"
                                                                                                                                                    value="{{ $products->description }}"
                                                                                                                                                    required>
                                                                                                                                            </div>

                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="submit-section text-right">
                                                                                                                                    <a data-bs-dismiss="modal"
                                                                                                                                        class="btn btn-primary black-btn submit-btn">Cancel</a>
                                                                                                                                    <button type="submit"
                                                                                                                                        class="btn btn-primary submit-btn">Submit</button>
                                                                                                                                </div>
                                                                                                                            </form>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                           
                                                                                                            <form method="POST" action="{{ route('deleteproduct', $products->id) }}">
                                                                                                                @csrf
                                                                                                                {{ method_field('DELETE') }}
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-6">
                                                                                                                            <button type="submit"
                                                                                                                                class="btn btn-primary continue-btn"><i class="far fa-trash-alt"></i></button>
                                                                                                                        </div>
                                                                                                                    <div>    
                                                                                                            </form>
                                                                                                            
                                                                                                        </td>
                                                                                                        </tr>
                                                                                                        @endforeach                                                                                
                                                                                                        </tbody>
                                                                                                    
                                                                                                        <tr>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td style="font-size: medium">
                                                                                                                Subtotal:<br>
                                                                                                            </td>
                                                                                                            <td style="font-size: medium">
                                                                                                                <strong>₹{{ $sum }}</strong>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td style="font-size: medium">
                                                                                                                Tax (18%):<br>
                                                                                                            </td>
                                                                                                            <td style="font-size: medium">
                                                                                                                <strong>₹{{ $tax }}</strong>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td style="font-size: medium">
                                                                                                                Total:<br>
                                                                                                            </td>
                                                                                                            <td style="font-size: medium">
                                                                                                                <strong>₹{{ $total }}</strong>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody>
                                                                                                        </table>
                                                                                                        <hr>
                                                                                                    </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- /The Modal estimate -->

                                                        <!--Pending after estimate accepted-->      
                                                        @elseif($proposal->invoice == 1)  
                                                            <span class="text-highlight">Client Accepted Your estimate</span>  
                                                            <span class="text-highlight">Please send contract</span> 
                                                            <a data-bs-toggle="modal"
                                                                data-bs-target="#bookmark{{ $proposal->id }}"
                                                                class="projects-btn">Send Contract</a>   
                                                        @elseif($proposal->invoice == 2)        
                                                            <span class="text-highlight">Client Rejected Your estimate</span>  
                                                        @elseif($proposal->invoice == 3)   
                                                            <span class="text-highlight">Estimate sucessfully sent to client</span>  
                                                        @endif    
                                                    @elseif ($proposal->contract_id != null)        
                                                        @if ($proposal->contract_client == 0 and $proposal->contract_artist == 0)
                                                            <span class="text-highlight">Contract Sent to Client</span>
                                                        @elseif($proposal->contract_client == 1 and $proposal->contract_artist == 0)
                                                            <span class="text-highlight">Client have signed Contract</span>                                                          
                                                            <a data-bs-toggle="modal" data-bs-target="#bookmark{{ $proposal->id }}"
                                                            class="projects-btn">Sign Contract</a> 
                                                        @elseif($proposal->contract_artist == 1 and $proposal->contract_client == 1)
                                                            {{-- <a class="projects-btn">See Contract</a> --}}
                                                            {{-- Pending see contract module --}}
                                                             <a href="{{ route('project.contract', $proposal->contract_id) }}"
																				class="projects-btn">See Contract </a>  
                                                            @if($proposal->invoice == 0)
                                                                <a href="{{ route('project.view',$proposal->contract_id) }}" class="projects-btn">Create Invoice</a>
                                                            @elseif($proposal->invoice == 1)
                                                                <a href="{{ route('project.view',$proposal->contract_id) }}" class="projects-btn">View Invoice</a>
                                                            @endif                    
                                                        @endif                                                                                                        
                                                    @endif

                                                    <!-- The Modal contract new-->
                                                    <div class="modal fade" id="bookmark{{ $proposal->id }}">
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
                                                                    @if( $proposal->contract_id == NULL)
                                                                    <form action="{{ route('contract.store') }}"
                                                                        method="POST" enctype="multipart/form-data" id="contract">
                                                                        @csrf
                                                                    @elseif( $proposal->contract_id != NULL)
                                                                    <form action="{{ route('contract.update',$proposal->contract_id ) }}"
                                                                        method="POST"  enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('put')
                                                                    @endif    
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
                                                                                            <input type="hidden"
                                                                                                name="profile_id"
                                                                                                class="form-control"
                                                                                                value="{{ $proposal->profile_id ?? '' }}">
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

                                                                                <div class="row">
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
                                                                                                    @if ($proposal->contract_client == 0)
                                                                                                    <input type="text"
                                                                                                        class="form-control me-1"
                                                                                                        name="final_price" id="final_price"
                                                                                                        placeholder="Enter final value">
                                                                                                    @elseif($proposal->contract_client == 1)    
                                                                                                    <input type="text"
                                                                                                        class="form-control me-1"
                                                                                                        name="final_price"
                                                                                                        placeholder="" value="{{ $proposal->final_price }}" readonly>
                                                                                                    @endif    
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>                                                                                 

                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <span class="text-highlight">Job
                                                                                            Location</label>
                                                                                            <textarea class="form-control" rows="5" name="address">{{ $proposal->address ?? '' }}</textarea>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <span class="text-highlight">Job
                                                                                            Details</label>
                                                                                            <textarea class="form-control" rows="5" name="project_details">{{ $proposal->project_details ?? '' }}</textarea>
                                                                                    </div>
                                                                                </div>

                                                                                @if ($proposal->contract_client == 1)
                                                                                    <div class="col-md-6">
                                                                                        <label class=""
                                                                                            for="">Signature:</label>
                                                                                        <br />
                                                                                        <div id="sig"></div>
                                                                                        <br><br>
                                                                                        <button id="clear"
                                                                                            class="btn btn-danger">Clear
                                                                                            Signature</button>
                                                                                        <textarea id="signature" name="artist_sign" style="display: none"></textarea>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="submit-section text-end">
                                                                            <button type="submit"
                                                                                class="btn btn-primary submit-btn">Send
                                                                                Contract</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /The Modal -->

                                                   <!--sign code-->


                                                    <!-- The Modal -->
                                                    <div class="modal fade" id="bookmark{{ $proposal->id }}">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Send Contract</h4>
                                                                    <span class="modal-close"><a href="#"
                                                                            data-bs-dismiss="modal" aria-label="Close"><i
                                                                                class="far fa-times-circle orange-text"></i></a></span>
                                                                </div>

                                                                <div class="modal-body">                                                                  
                                                                    <form action="{{ route('contract.store') }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                      
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
                                                                                                name="user_price"
                                                                                                class="form-control"
                                                                                                value="{{ $proposal->client_price ?? '' }}">
                                                                                            <input type="hidden"
                                                                                                name="user_name"
                                                                                                class="form-control"
                                                                                                value="{{ $proposal->user_name ?? '' }}">
                                                                                            <input type="hidden"
                                                                                                name="user_email"
                                                                                                class="form-control"
                                                                                                value="{{ $proposal->user_email ?? '' }}">
                                                                                            <input type="hidden"
                                                                                                name="profile_id"
                                                                                                class="form-control"
                                                                                                value="{{ $proposal->profile_id ?? '' }}">
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
                                                                                            <span
                                                                                                class="text-highlight">Job
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
                                                                                            <span
                                                                                                class="text-highlight">Job
                                                                                                End Date</label>
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    name="end_date"
                                                                                                    value="{{ date('d-m-Y', strtotime($proposal->end_date)) ?? '' }}"
                                                                                                    readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
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
                                                                                                        name="final_price"
                                                                                                        placeholder="{{ $proposal->final_price ?? '' }}" value="{{ $proposal->final_price ?? '' }}">
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <span class="text-highlight">Job
                                                                                            Location</label>
                                                                                            <textarea class="form-control" rows="5" name="address">{{ $proposal->address ?? '' }}</textarea>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <span class="text-highlight">Job
                                                                                            Details</label>
                                                                                            <textarea class="form-control" rows="5" name="project_details">{{ $proposal->project_details ?? '' }}</textarea>
                                                                                    </div>
                                                                                </div>

                                                                                {{-- @if ($proposal->contract == 1)
                                                                                    <div class="col-md-6">
                                                                                        <label for="">Signature:</label>
                                                                                        <br />
                                                                                        <div id="sig"></div>
                                                                                        <br><br>
                                                                                        <button id="clear"
                                                                                            class="btn btn-danger">Clear
                                                                                            Signature</button>
                                                                                        <textarea id="signature" name="artist_sign" style="display: none"></textarea>
                                                                                    </div>
                                                                                @endif --}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="submit-section text-end">
                                                                            <button type="submit"
                                                                                class="btn btn-primary submit-btn">Send
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
                                    <div class="description-proposal">
                                        <h5 class="desc-title">Description</h5>
                                        <p>{{ $proposal->project_details }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


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
@endsection
