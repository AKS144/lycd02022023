<?php $page = "providers"; ?>
@extends('layout.mainlayout_admin')
@section('content')
<style>
    label.error {
         color: #FF0000;
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

                    <h3 class="page-title">Location</h3>

                    <ul class="breadcrumb">

                        <li class="breadcrumb-item"><a href="index_admin">Home</a></li>

                        <li class="breadcrumb-item active">Location</li>

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



                <form action="{{ route('admin.locations.store') }}" method="POST" id="location">
                    @csrf
                    <div class="row filter-row">

                        <div class="col-sm-6 col-md-6">

                            <div class="form-group">

                                <label for="name">Location</label>

                                <input type="text" id="name" name="name" class="form-control" value="">

                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif

                            </div>


                            <div class="form-group">

                            <label for="name">Latitude</label>

                            <input type="text" id="latitude" name="latitude" class="form-control" value="">

                                    @if ($errors->has('latitude'))
                                        <span class="text-danger">{{ $errors->first('latitude') }}</span>
                                    @endif

                            </div>


                            <div class="form-group">

                            <label for="name">Longtitude</label>

                            <input type="text" id="longitude" name="longitude" class="form-control" value="">

                            @if ($errors->has('longitude'))
                                <span class="text-danger">{{ $errors->first('longitude') }}</span>
                            @endif

                            </div>

                            <div class="form-group">

                                <button class="btn btn-primary btn-block" type="submit">Submit</button>

                            </div>

                        </div>


                        <!-- <div class="col-sm-6 col-md-6">

                            <div class="form-group">

                                <button class="btn btn-primary btn-block" type="submit">Submit</button>

                            </div>

                        </div> -->

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

                                            Location Name

                                        </th>


                                        <th>

                                            Latitude

                                        </th>

                                        <th>

                                            Longitude

                                        </th>


                                        <th class="text-end">Actions</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach($locations as $key => $location)

                                    <tr>

                                        <td>

                                            {{ $location->id ?? '' }}

                                        </td>

                                        <td>

                                            {{ $location->name ?? '' }}

                                        </td>

                                        <td>

                                            {{ $location->latitude ?? '' }}

                                        </td>

                                        <td>

                                            {{ $location->longitude ?? '' }}

                                        </td>


                                        <td class="text-end">


                                            <a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-location{{$location->id}}"><i class="far fa-edit"></i></a>

                                            <div class="modal fade custom-modal" id="add-location{{$location->id}}">

                                                <div class="modal-dialog modal-dialog-centered">

                                                    <div class="modal-content">

                                                        <!-- Modal Header -->

                                                        <div class="modal-header flex-wrap">

                                                            <h4 class="modal-title">Edit Budget</h4>

                                                            <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>

                                                        </div>

                                                        <!-- Modal body -->

                                                        <div class="modal-body">

                                                            <form action="{{ route('admin.locations.update', $location->id) }}" method="POST" id="locationedit">
                                                                @csrf
                                                                @method('put')

                                                                <div class="form-group">
                                                                    <label for="latitude">Name</label>
                                                                    <input type="text" id="name" name="name" class="form-control" value="{{ $location->name }}" required>
                                                                    @if($errors->has('Name'))
                                                                        <em class="invalid-feedback">
                                                                            {{ $errors->first('Name') }}
                                                                        </em>
                                                                    @endif
                                                                </div>
                                                               

                                                                <div class="form-group">
                                                                    <label for="">Latitude</label>
                                                                    <input type="text" id="latitude" name="latitude" class="form-control" value="{{ $location->latitude }}" required>

                                                                    @if($errors->has('Name'))
                                                                        <em class="invalid-feedback">
                                                                            {{ $errors->first('Name') }}
                                                                        </em>
                                                                    @endif

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="longitude">Longitude</label>
                                                                    <input type="text" id="longitude" name="longitude" class="form-control" value="{{ $location->longitude }}" required>
                                                                    @if($errors->has('longitude'))
                                                                        <em class="invalid-feedback">
                                                                            {{ $errors->first('longitude') }}
                                                                        </em>
                                                                    @endif

                                                                </div>


                                                                <div class="mt-4">

                                                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>

                                                                </div>

                                                            </form>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_location{{$location->id}}"><i class="far fa-trash-alt"></i></a>

                                            <!-- Delete Modal -->

                                            <div class="modal custom-modal fade" id="delete_location{{$location->id}}" role="dialog">

                                                <div class="modal-dialog modal-dialog-centered">

                                                    <div class="modal-content">

                                                        <div class="modal-body">

                                                            <div class="form-header">

                                                                <form action="{{ route('admin.locations.destroy', $location->id) }}" method="POST">

                                                                    @csrf

                                                                    @method('DELETE')



                                                                    <h3>Delete</h3>

                                                                    <p>Are you sure want to delete?</p>

                                                            </div>

                                                            <div class="modal-btn delete-action">

                                                                <div class="row">

                                                                    <div class="col-6">

                                                                        <button type="submit" style="width: 100%;" href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</button>

                                                                    </div>

                                                                    <div class="col-6">

                                                                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>

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