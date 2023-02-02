@include('layouts.header')
<!-- Header End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section spad set-bg" data-setbg="img/bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h4>Contract </h4>
                    <div class="bt-option">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Contract</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section spad">
    <div class="container">
        <div class="section-title">
            <h4>Contract</h4>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form  action="{{ url('contract-store') }}" method="POST" enctype="multipart/form-data">
                    
                    <div class="col-md-4 {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="">{{ __('Name') }}</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="name"><br>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-4">
                        <input type="hidden" name="profile_id" class="form-control" value="{{ $profile_id }}"><br>
                    </div>
                   

                    <div class="col-md-4 {{ $errors->has('mobile') ? 'has-error' : '' }}">
                        <label for="">{{ __('Mobile') }}</label>
                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Phone"><br>
                        @if ($errors->has('mobile'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-4 {{ $errors->has('Job Date') ? 'has-error' : '' }}">
                        <label for="">{{ __('Job Date') }}</label>
                        <input type="text" name="job_date" id="job_date" class="form-control" placeholder="job_date"><br>
                        @if ($errors->has('jJob Date'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Job Date') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-4 {{ $errors->has('Job End Date') ? 'has-error' : '' }}">
                        <label for="">{{ __('Job End Date') }}</label>
                        <input type="text" name="end_date" id="end_date" class="form-control" placeholder="Job End Date"><br>
                        @if ($errors->has('Job End Date'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Job End Date') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-4 {{ $errors->has('Address') ? 'has-error' : '' }}">
                        <label for="">{{ __('Address') }}</label>
                        <textarea type="text" name="address" id="address" class="form-control" placeholder="Address"></textarea><br>
                        {{-- @if ($errors->has('Job End Date'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Job End Date') }}</strong>
                            </span>
                        @endif --}}
                    </div>


                    <div class="col-md-4 {{ $errors->has('Requirements') ? 'has-error' : '' }}">
                        <label for="">{{ __('Requirements') }}</label>
                        <textarea type="text" name="requirements" id="requirements" class="form-control" placeholder="Requirements"></textarea><br>
                        {{-- @if ($errors->has('Job End Date'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Job End Date') }}</strong>
                            </span>
                        @endif --}}
                    </div>


                    <div class="col-md-4 {{ $errors->has('Description') ? 'has-error' : '' }}">
                        <label for="">{{ __('decription') }}</label>
                        <textarea type="text" name="description" id="description" class="form-control" placeholder="Description"></textarea><br>
                        {{-- @if ($errors->has('Job End Date'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Job End Date') }}</strong>
                            </span>
                        @endif --}}
                    </div>

                    <div class="col-md-4 {{ $errors->has('Budget') ? 'has-error' : '' }}">
                        <label for="">{{ __('Budget') }}</label>
                        <input type="text" name="cost" id="cost" class="form-control" placeholder="Budget"><br>
                        @if ($errors->has('Budget'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Budget') }}</strong>
                            </span>
                        @endif
                    </div>
                    

                    {{-- <label>Client Name</label>
                    <input type="client_name" name="name" class="form-control"><br>


                    <input type="hidden" name="profile_id" class="form-control" value="{{ $profile_id }}"><br>

                    <label>Mobile</label>
                    <input type="text" name="mobile" class="form-control"><br>

                    <label>Job Date</label>
                    <input type="date" name="job_date" class="form-control"><br>

                    <label>Job Completion Date</label>
                    <input type="date" name="end_date" class="form-control"><br>

                    <label>Job Details</label>
                    <textarea name="job_details" class="form-control "></textarea> <br>

                    <label>Address</label>
                    <textarea name="address" class="form-control "></textarea> <br>
             </div>
            <div class="col-lg-6"> 
                <label>Client Email</label>
                <input type="email" name="email" class="form-control"><br>

                <label>Cost</label>
                <input type="number" name="cost" class="form-control"><br>

                <label>Requirements</label>
                <textarea name="requirements" class="form-control "></textarea> <br>

                <label>Description</label>
                <textarea name="description" class="form-control "></textarea> <br>
                <br> 
                <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>--}}
            </div>          
        </div><br>
        </form>
    </div>
</section>


@include('layouts.footer')

{{-- <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
<link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
<script type="text/javascript">
    var signaturePad = $('#signaturePad').signature({
        syncField: '#signature64',
        syncFormat: 'PNG'
    });
    $('#clear').click(function(e) {
        e.preventDefault();
        signaturePad.signature('clear');
        $("#signature64").val('');
    });
</script>

<style>
    .kbw-signature {
        width: 100%;
        height: 180px;
    }

    #signaturePad canvas {
        width: 100% !important;
        height: auto;
    }

</style> --}}
