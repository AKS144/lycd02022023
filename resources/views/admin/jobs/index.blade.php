<?php $page = 'providers'; ?>
@extends('layout.mainlayout_admin')
@section('content')
   <style>
        label.error {
            color: #dc3545;
            font-size: 14px;
        }

    </style>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">


            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                       {{-- @if(Session::has("success"))
                            <div class="alert alert-success">
                                {{Session::get("success")}}
                            </div>
                        @elseif(Session::has("failed")) 
                            {{Session::get("failed")}}
                        @endif --}}
                        
                        <h3 class="page-title">Create Job</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index_admin">Home</a></li>
                            <li class="breadcrumb-item active">Jobs</li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div class="card filter-card" id="filter_inputs">
                <div class="card-body pb-0">

                    <form action="{{ route('admin.jobs.store') }}" method="POST" id="job">
                        @csrf

                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>                                 
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                   
                                </div>
                               
                                <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                                    <label for="location">Location</label>
                                    <select name="location_id" id="location" class="form-select" required>
                                        <option value="" selected>Select Location</option>
                                        @foreach($locations as $id => $locations)
                                            <option value="{{ $id }}" {{ (isset($job) && $job->location ? $job->location->id : old('location_id')) == $id ? 'selected' : '' }}>{{ $locations ?? '' }}</option>
                                        @endforeach
                                    </select>
                                  
                                    @if ($errors->has('location'))
                                        <span class="text-danger">{{ $errors->first('location') }}</span>
                                    @endif
                                </div>  


                                <div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }}">
                                    <label for="categories">Categories</label>
                                    <select name="category_id" id="categories" class="form-select" required>
                                    <option value="" selected>Select Categories</option>        
                                        @foreach($categories as $id => $categories)
                                            <option value="{{ $id }}" {{ (isset($job) && $job->categories ? $job->categories->id : old('categories')) == $id ? 'selected' : '' }}>{{ $categories }}</option>
                                        @endforeach
                                    </select>
                                    <!-- @if($errors->has('categories'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('categories') }}
                                        </em>
                                    @endif   -->
                                    @if ($errors->has('categories'))
                                        <span class="text-danger">{{ $errors->first('categories') }}</span>
                                    @endif       
                                </div>

                                <div class="form-group">
									<label>Budget Range</label>
										<select name="reward_id" id="budget" class="form-select" required>	
                                            <option value="" selected>Select Budget</option>														
                                            @foreach (App\Rewards::all()->pluck('budget', 'id') as $key => $val)
                                                <option value="{{ $key }}">{{ $val }}</option>
                                			@endforeach		                                            
									    </select>													
								</div>

                              
                                <div class="form-group">
									<label>Address</label>
										<textarea name="address" id="address" class="form-control" col="8" required>{{ old('address') }}	                                           			
                                        </textarea>	
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif												
								</div>
                            </div>                        

                            
                            <div class="col-sm-6 col-md-6">
                                <div>                          
                                     <label><input type="radio" name="start_date" id="radio_1" checked> One-Day</label>
                                     <label><input type="radio" name="start_date" id="radio_2"> Multiple-day </label>
                                </div>

                                <div class="form-group">                                
                                    <label for="start_date">Start-Date</label>
                                    <input type="date" name="start_date" id="date1" class="form-control" value="{{ old('start_date') }}" required>                                    
                                    @if ($errors->has('Start-Date'))
                                        <span class="text-danger">{{ $errors->first('Start-Date') }}</span>
                                    @endif                                    
                                </div>

                                <div class="form-group" >
                                    <label for="end_date">End-Date</label>
                                    <input type="date" name="end_date" id="date2" class="form-control" value="{{ old('end_date') }}"  required>                                    
                                    @if ($errors->has('End-Date'))
                                        <span class="text-danger">{{ $errors->first('End-Date') }}</span>
                                    @endif
                                </div>                              

                                <div class="form-group">
									<label>Job Type</label>
										<select name="jobtype" id="jobtype" class="form-select" value="{{ old('jobtype') }}" required>
                                            <option value="" selected>Select Job Type</option>	
                                            <option value="Part-Time">Part-Time</option>	
                                            <option value="Full-Time">Full-Time</option>				
									    </select>													
								</div>

                                <div class="form-group">
									<label>Price Type</label>
										<select name="price_type" id="price_type" class="form-select" value="{{ old('price_type') }}" required>
                                            <option value="" selected>Select Price Type</option>	
                                            <option value="Negotiable">Negotiable</option>	
                                            <option value="Non-negotiable">Non-negotiable</option>				
									    </select>													
								</div>

                                <div class="form-group">
									<label>Requirements</label>
										<textarea name="requirements" id="requirements" class="form-control" col="8" required>{{ old('requirements') }}	                                           			
                                        </textarea>		
                                        @if ($errors->has('requirements'))
                                            <span class="text-danger">{{ $errors->first('requirements') }}</span>
                                        @endif													
								</div>


                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Search Filter -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>
                                                Id
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Location
                                            </th> 
                                            <th>
                                                Start Date
                                            </th>
                                            <th>
                                                End Date
                                            </th>
                                            <!-- <th>
                                                Address
                                            </th>
                                            <th>
                                               Requirement
                                            </th> -->
                                            <th>
                                                Proposal
                                            </th>
                                            <th>
                                                JobType
                                            </th>
                                            <th>
                                                Budget
                                            </th>

                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobs as $key => $job)
                                            <tr>
                                                <td>
                                                    {{ $job->id ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $job->name ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $job->location ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $job->start_date ?? '' }}
                                                </td>
                                                
                                                <td>
                                                    {{ $job->end_date ?? '' }}
                                                </td>

                                                <!-- <td>
                                                    {{ $job->address ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $job->requirements ?? '' }}
                                                </td> -->

                                                <td>
                                                    {{ $job->proposal ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $job->jobtype ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $job->budget ?? '' }}
                                                </td>

                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#add-job{{ $job->id }}"><i
                                                            class="far fa-edit"></i></a>
                                                    <div class="modal fade custom-modal" id="add-job{{ $job->id }}">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">

                                                                <!-- Modal Header -->
                                                                <div class="modal-header flex-wrap">
                                                                    <h4 class="modal-title">Edit Package</h4>
                                                                    <button type="button" class="close"
                                                                        data-bs-dismiss="modal"><span>&times;</span></button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <div class="modal-body">       
                                                                        <form action="{{ route('admin.jobs.update', $job->id) }}" method="POST" id="jobedit">
                                                                        @csrf
                                                                        @method('put')

                                                                        <div class="row filter-row">
                                                                            <div class="col-sm-6 col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="name">Name</label>
                                                                                    <input type="text" name="name" id="name" class="form-control" value="{{ $job->name }}" required>
                                                                                    @if ($errors->has('name'))
                                                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                                                    @endif
                                                                                </div>
                                                                            
                                                                                
                                                                                <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                                                                                    <label for="location">Location</label>
                                                                                    <select name="location_id" id="location" value="{{ $job->location }}" class="form-select" required>
                                                                                        <option>Select Location</option>                                                                                       
                                                                                        @foreach (App\City::all()->pluck('name', 'id') as $key => $val)
                                                                                            @if($job->location_id == $key)
                                                                                                <option value="{{ $key }}" selected>{{ $val }}</option>
                                                                                            @else
                                                                                                <option value="{{ $key }}">{{ $val }}</option>
                                                                                            @endif
                                                                                        @endforeach	                                                                                       	
                                                                                    </select>
                                                                                    @if ($errors->has('location'))
                                                                                        <span class="text-danger">{{ $errors->first('location') }}</span>
                                                                                    @endif
                                                                                </div> 


                                                                                <div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }}">
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

                                                                                <!-- <div class="form-group">
                                                                                    <label>Budget Range</label>
                                                                                        <select name="reward_id" id="" class="form-select" required>	
                                                                                            <option>Select Budget</option>														
                                                                                            @foreach (App\Rewards::all()->pluck('budget', 'id') as $key => $val)
                                                                                                @if($job->reward_id == $key)
                                                                                                    <option value="{{ $key }}" selected>{{ $val }}</option>
                                                                                                @else
                                                                                                    <option value="{{ $key }}">{{ $val }}</option>
                                                                                                @endif
                                                                                            @endforeach														
                                                                                        </select>											
                                                                                </div> -->

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

                                                                                    


                                                                                <div class="form-group">
                                                                                    <label>Address</label>
                                                                                        <textarea name="address" id="address" class="form-control" col="8" required>{{ $job->address }}	                                           			
                                                                                        </textarea>													
                                                                                </div>

                                                                            </div>
                                                                            
                                                                            <div class="col-sm-6 col-md-6">
                                                                            <!-- <input class="form-control" type="radio" name="type" value="Single"> -->
                                                                            <!-- <input class="form-control" type="radio" name="type" value="Multiple"> -->
                                                                            <div>
                                                                                    <label for="">
                                                                                        <input type="radio" id="radio_3" name="start_date" value="" checked>
                                                                                        One-Day
                                                                                    </label> &nbsp;
                                                                                    <label for="">
                                                                                        <input type="radio" id="radio_4" name="start_date" value="">
                                                                                        Multiple-day
                                                                                    </label> 
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="star_date">Start-Date</label>
                                                                                    <input type="date" name="start_date" id="date3" class="form-control" value="{{ $job->start_date }}" required>
                                                                                    @if ($errors->has('Start-Date'))
                                                                                        <em class="invalid-feedback">
                                                                                            {{ $errors->first('Start-Date') }}
                                                                                        </em>
                                                                                    @endif
                                                                                </div>

                                                                                <div class="form-group" id="input2">
                                                                                    <label for="end_date">End-Date</label>
                                                                                    <input type="date" name="end_date" id="date4" class="form-control" value="{{ $job->end_date ?? ''}}" required>
                                                                                    @if ($errors->has('End-Date'))
                                                                                        <em class="invalid-feedback">
                                                                                            {{ $errors->first('End-Date') }}
                                                                                        </em>
                                                                                    @endif
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label>Job Type</label>
                                                                                        <select name="jobtype" id="jobtype" class="form-select" required>
                                                                                            <option >Select Job Type</option>	
                                                                                            <option {{ $job->jobtype == 'Part-Time' ? 'selected' : '' }} value="Part-Time">Part-Time</option>	
                                                                                            <option {{ $job->jobtype == 'Full-Time' ? 'selected' : '' }} value="Full-Time">Full-Time</option>				
                                                                                        </select>		

                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label>Price Type</label>
                                                                                        <select name="price_type" id="price_type" class="form-select" required>
                                                                                            <option>Select Price Type</option>	
                                                                                            <option {{ $job->price_type == 'Flexible' ? 'selected' : '' }} value="Flexible">Flexible</option>	
                                                                                            <option {{ $job->price_type == 'Fixed' ? 'selected' : '' }} value="Fixed">Fixed</option>				
                                                                                        </select>													
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label>Requirements</label>
                                                                                        <textarea name="requirements" id="requirements" class="form-control" col="8" required>{{old('requirements', $job->requirements) }}
                                                                                        </textarea>													
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_job{{ $job->id }}"><i
                                                            class="far fa-trash-alt"></i></a> 
                                                    <!-- Delete Modal -->
                                                    <div class="modal custom-modal fade"
                                                        id="delete_job{{ $job->id }}" role="dialog">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div class="form-header">
                                                                        <form
                                                                            action="{{ route('admin.jobs.destroy', $job->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')

                                                                            <h3>Delete</h3>
                                                                            <p>Are you sure want to delete?</p>
                                                                    </div>
                                                                    <div class="modal-btn delete-action">
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <button type="submit" style="width: 100%;"
                                                                                    href="javascript:void(0);"
                                                                                    class="btn btn-primary continue-btn">Delete</button>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <a href="javascript:void(0);"
                                                                                    data-bs-dismiss="modal"
                                                                                    class="btn btn-primary cancel-btn">Cancel</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Delete Modal -->
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                 {!! $jobs->links() !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Page Wrapper -->
    </div>
    </div>
    <!-- /Main Wrapper -->
@endsection
<script>
$(document).ready(function(){
  

});
</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("input[name='chkPassPort']").click(function () {
            if ($("#chkYes").is(":checked")) {
                $("#txtPassportNumber").removeAttr("disabled");
                $("#txtPassportNumber").focus();
            } else {
                $("#txtPassportNumber").attr("disabled", "disabled");
            }
        });
    });
</script>

