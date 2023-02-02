@extends('layouts.header')
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="img/bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Job  </h4>
                        <div class="bt-option">
                            <a href=""><i class="fa fa-home"></i> Home</a>
                            <span>Job Post</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Breadcrumb Section End -->

    <!-- About Section Begin -->
    <section class="about-section spad">
         
      
        <div class="container">
    <div class="section-title">
                        <h4 >Job Post</h4>
                    </div>
            {{-- <div class="row"> --}}
                {{-- <div class="col-lg-6"> --}}
                <form class="forms-sample" action="{{ route("jobpost.store") }}" method="POST" enctype="multipart/form-data">
                   @method('POST')
                    @csrf
                     <div class="col-md-4 {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">Job Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($job) ? $job->name : '') }}" required>
                        @if($errors->has('name'))
                            <em class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </em>
                        @endif             
                    </div> 

                    <div class="col-md-4 {{ $errors->has('description') ? 'has-error' : '' }}">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control ">{{ old('description', isset($job) ? $job->description : '') }}</textarea>
                        @if($errors->has('description'))
                            <em class="invalid-feedback">
                                {{ $errors->first('description') }}
                            </em>
                        @endif                
                    </div>


                    <div class="col-md-4 {{ $errors->has('requirements') ? 'has-error' : '' }}">
                        <label for="requirements">Requirements</label>
                        <textarea id="requirements" name="requirements" class="form-control ">{{ old('requirements', isset($job) ? $job->requirements : '') }}</textarea>
                        @if($errors->has('requirements'))
                            <em class="invalid-feedback">
                                {{ $errors->first('requirements') }}
                            </em>
                        @endif                
                    </div>

                 

                    <div class="col-md-4 {{ $errors->has('address') ? 'has-error' : '' }}">
                        <label for="address">Address</label>
                        {{-- <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($job) ? $job->address : '') }}"> --}}
                        <textarea id="address" name="address" class="form-control ">{{ old('address', isset($job) ? $job->address : '') }}</textarea>
                        @if($errors->has('address'))
                            <em class="invalid-feedback">
                                {{ $errors->first('address') }}
                            </em>
                        @endif                
                    </div>                
                  </div>
                  {{-- <div class="col-lg-6">  --}}
                        <div class="col-md-4">
                            <label for="title">From</label>
                            <input type="date" id="start_date" name="start_date" class="form-control"
                                value="{{ old('start_date', isset($job) ? $job->start_date : '') }}" style="width:350px" required>
                            @if ($errors->has('start_date'))
                                <span class="text-danger">{{ $errors->first('start_date') }}</span>
                            @endif
                        </div>
            
                        <div class="col-md-4">
                            <label for="title">To</label>
                            <input type="date" id="end_date" name="end_date" class="form-control"
                                value="{{ old('end_date', isset($job) ? $job->end_date : '') }}" style="width:350px" required>
                            @if ($errors->has('end_date'))
                                <span class="text-danger">{{ $errors->first('end_date') }}</span>
                            @endif
                        </div>

                        <div class="col-md-4 {{ $errors->has('rewards') ? 'has-error' : '' }}">
                            <label for="rewards">Budget</label>
                            <select name="rewards" id="rewards" class="form-control select2" required>
                                @foreach($rewards as $coins => $reward)
                                    <option value="{{ $coins }}" {{ (isset($job) && $job->reward ? $job->reward->coins : old('rewards')) == $coins ? 'selected' : '' }}>{{ $reward }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('rewards'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('rewards') }}
                                </em>
                            @endif
                        </div>

                           <div class="col-md-4 {{ $errors->has('location') ? 'has-error' : '' }}">
                                <label for="location">Location*</label>
                                <select name="location_id" id="location" class="form-control select2" required>
                                    @foreach($locations as $id => $location)
                                        <option value="{{ $id }}" {{ (isset($job) && $job->location ? $job->location->id : old('location_id')) == $id ? 'selected' : '' }}>{{ $location }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('location_id'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('location_id') }}
                                    </em>
                                @endif
                            </div>


                        <div class="col-md-4 {{ $errors->has('categories') ? 'has-error' : '' }}">
                            <label for="location">Category</label>
                            <select name="categories" id="" class="form-control select2" required>
                                @foreach($categories as $id => $categories)
                                    <option value="{{ $id }}" {{ (isset($job) && $job->categories ? $job->categories->id : old('categories')) == $id ? 'selected' : '' }}>{{ $categories }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('categories'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('categories') }}
                                </em>
                            @endif
                        </div>                       
                    
                       <button type="submit" class="primary-btn" style="color:#fff;">save</button>
                     </div>  
                </form>
            {{-- </div> --}}
        
               
               
            </div>
    </section>
    <!-- About Section End -->

    
@extends('layouts.footer')