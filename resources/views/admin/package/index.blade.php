<?php $page = 'providers'; ?>
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
                        <h3 class="page-title">Package</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index_admin">Home</a></li>
                            <li class="breadcrumb-item active">Package</li>
                        </ul>
                    </div>
                    <!-- <div class="col-auto">
                        <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div> -->
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div class="card filter-card" id="filter_inputs">
                <div class="card-body pb-0">

                    <form action="{{ route('admin.package.store') }}" method="POST" id="package">
                        @csrf

                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="pack_name" id="name" class="form-control" value="" required>
                                    @if ($errors->has('name'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </em>
                                    @endif
                                </div>
                               

                                <div class="form-group">
                                    <label for="name">Genre type 1</label>
                                    <input type="text" name="genre1" id="genre1" class="form-control" value="" required>
                                    @if ($errors->has('genre1'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('genre1') }}
                                        </em>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="genre2">Genre type 2</label>
                                    <input type="text" name="genre2" id="genre2" class="form-control" value="" required>
                                    @if ($errors->has('genre2'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('genre2') }}
                                        </em>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="name">Coins</label>
                                    <input type="text" name="coins" id="coins" class="form-control" value="" required>
                                    @if ($errors->has('coins'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('coins') }}
                                        </em>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <input type="text" name="message" id="message" class="form-control" value="" required>
                                    @if ($errors->has('message'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('message') }}
                                        </em>
                                    @endif
                                </div>
                              
                                
                            </div>

                            <div class="col-sm-6 col-md-6">
                               
                                <div class="form-group">
                                    <label for="message">Amount</label>
                                    <input type="text" name="amount" id="amount" class="form-control" value="" required>
                                    @if ($errors->has('amount'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('amount') }}
                                        </em>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="pics1">Pics type 1</label>
                                    <input type="text" name="pics1" id="pics1" class="form-control" value="" required>
                                    @if ($errors->has('pics1'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('pics1') }}
                                        </em>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="pics2">Pics type 2</label>
                                    <input type="text" name="pics2" id="pics2" class="form-control" value="" required>
                                    @if ($errors->has('pics2'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('pics2') }}
                                        </em>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="duration">Duration</label>
                                    <input type="text" name="duration" id="duration" class="form-control" value="" required>
                                    @if ($errors->has('duration'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('duration') }}
                                        </em>
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
                                            {{-- <th>
                                                Message
                                            </th> --}}
                                            <th>
                                                Amount
                                            </th>
                                            <th>
                                                Genres(1)
                                            </th>
                                            <th>
                                                Pics(1)
                                            </th>
                                            <th>
                                                Genres(2)
                                            </th>
                                            <th>
                                                Pics(2)
                                            </th>
                                            <th>
                                                coins
                                            </th>

                                            <th>
                                                Duration
                                            </th>

                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($package as $key => $package)
                                            <tr>
                                                <td>
                                                    {{ $package->id ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $package->pack_name ?? '' }}
                                                </td>

                                                {{-- <td>
                                                    {{ $package->message ?? '' }}
                                                </td> --}}

                                                <td>
                                                    {{ $package->amount ?? '' }}
                                                </td>
                                                
                                                <td>
                                                    {{ $package->genre1 ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $package->pics1 ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $package->genre2 ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $package->pics2 ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $package->coins ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $package->duration ?? '' }}
                                                </td>

                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#add-package{{ $package->id }}"><i
                                                            class="far fa-edit"></i></a>
                                                    <div class="modal fade custom-modal" id="add-package{{ $package->id }}">
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
                                                                    <form action="{{ route('admin.package.update', $package->id) }}" method="POST" id="packageedit">
                                                                        @csrf
                                                                        @method('put')
                                                                        <div class="form-group">
                                                                            <label for="name">Name</label>
                                                                            <input type="text" name="pack_name" id="pack_name" class="form-control" value="{{ $package->pack_name }}" required>
                                                                            @if ($errors->has('name'))
                                                                                <em class="invalid-feedback">
                                                                                    {{ $errors->first('name') }}
                                                                                </em>
                                                                            @endif
                                                                        </div>
                                                                       
                                        
                                                                        <div class="form-group">
                                                                            <label for="name">Genre type 1</label>
                                                                            <input type="text" name="genre1" id="genre1" class="form-control" value="{{ $package->genre1 }}" required>
                                                                            @if ($errors->has('genre1'))
                                                                                <em class="invalid-feedback">
                                                                                    {{ $errors->first('genre1') }}
                                                                                </em>
                                                                            @endif
                                                                        </div>
                                        
                                        
                                                                        <div class="form-group">
                                                                            <label for="genre2">Genre type 2</label>
                                                                            <input type="text" name="genre2" id="genre2" class="form-control" value="{{ $package->genre2 }}" required>
                                                                            @if ($errors->has('genre2'))
                                                                                <em class="invalid-feedback">
                                                                                    {{ $errors->first('genre2') }}
                                                                                </em>
                                                                            @endif
                                                                        </div>
                                        
                                                                        <div class="form-group">
                                                                            <label for="name">Coins</label>
                                                                            <input type="text" name="coins" id="coins" class="form-control" value="{{ $package->coins }}" required>
                                                                            @if ($errors->has('coins'))
                                                                                <em class="invalid-feedback">
                                                                                    {{ $errors->first('coins') }}
                                                                                </em>
                                                                            @endif
                                                                        </div>
                                        
                                                                        <div class="form-group">
                                                                            <label for="message">Message</label>
                                                                            <input type="text" name="message" id="message" class="form-control" value="{{ $package->message }}" required>
                                                                            @if ($errors->has('message'))
                                                                                <em class="invalid-feedback">
                                                                                    {{ $errors->first('message') }}
                                                                                </em>
                                                                            @endif
                                                                        </div>
                                                                      
                                                                       
                                                                        <div class="form-group">
                                                                            <label for="message">Amount</label>
                                                                            <input type="text" name="amount" id="amount" class="form-control" value="{{ $package->amount }}" required>
                                                                            @if ($errors->has('amount'))
                                                                                <em class="invalid-feedback">
                                                                                    {{ $errors->first('amount') }}
                                                                                </em>
                                                                            @endif
                                                                        </div>
                                        
                                                                        <div class="form-group">
                                                                            <label for="pics1">Pics type 1</label>
                                                                            <input type="text" name="pics1" id="pics1" class="form-control" value="{{ $package->pics1 }}" required>
                                                                            @if ($errors->has('pics1'))
                                                                                <em class="invalid-feedback">
                                                                                    {{ $errors->first('pics1') }}
                                                                                </em>
                                                                            @endif
                                                                        </div>
                                        
                                                                        <div class="form-group">
                                                                            <label for="pics2">Pics type 2</label>
                                                                            <input type="text" name="pics2" id="pics2" class="form-control" value="{{ $package->pics2 }}" required>
                                                                            @if ($errors->has('pics2'))
                                                                                <em class="invalid-feedback">
                                                                                    {{ $errors->first('pics2') }}
                                                                                </em>
                                                                            @endif
                                                                        </div>
                                        
                                        
                                                                        <div class="form-group">
                                                                            <label for="duration">Duration</label>
                                                                            <input type="text" name="duration" id="duration" class="form-control" value="{{ $package->duration }}" required>
                                                                            @if ($errors->has('duration'))
                                                                                <em class="invalid-feedback">
                                                                                    {{ $errors->first('duration') }}
                                                                                </em>
                                                                            @endif
                                                                        </div>

                                                                        <div class="mt-4">
                                                                            <button type="submit"
                                                                                class="btn btn-primary btn-block">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <a href="javascript:void(0);" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_package{{ $package->id }}"><i
                                                            class="far fa-trash-alt"></i></a> --}}
                                                    <!-- Delete Modal -->
                                                    <div class="modal custom-modal fade"
                                                        id="delete_package{{ $package->id }}" role="dialog">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div class="form-header">
                                                                        <form
                                                                            action="{{ route('admin.package.destroy', $package->id) }}"
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


{{-- 
<script>
    $(document).ready(function() {
        $("#form").validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 50,
                },
                message:{
                    required: true,
                    maxlength: 50,
                },
                coins: {
                    required: true,
                    minlength: 1,
                    maxlength: 3,
                    number: true
                },
                genre1: {
                    required: true,
                    minlength: 1,
                    maxlength: 2,
                    number: true
                },
                pics1: {
                    required: true,
                    minlength: 1,
                    maxlength: 2,
                    number: true
                },
                genre2: {
                    required: true,
                    minlength: 1,
                    maxlength: 2,
                    number: true
                },
                pics2: {
                    required: true,
                    minlength: 1,
                    maxlength: 2,
                    number: true
                },
                amount: {
                    required: true,
                    minlength: 1,
                    maxlength: 4,
                    number: true
                },
                duration: {
                    required: true,
                    minlength: 1,
                    maxlength: 3,
                    number: true
                }
               
            },
            messages: {
                name: {
                    required: "Package name is required",
                    maxlength: "Package name should not be more than 50 characters"
                },
                message: {
                    required: "Message is required",
                    maxlength: "Message cannot be more than 50 characters",
                    maxlength: "Message cannot be more than 50 characters"
                },
                coins: {
                    required: "Please fill Coins in digits",
                    minlength: "Coins cannot be less than 1 digits",
                    maxlength: "Coins cannot be more than 3 digits"
                },
                genre1: {
                    required: "Please fill Genre in digits",
                    minlength: "Genre value must be of 1 digits",
                    maxlength: "Genre value must be of 2 digits"
                },
                genre2: {
                    required: "Please fill Genre in digits",
                    minlength: "Genre value must be of 1 digits",
                    maxlength: "Genre value must be of 2 digits"
                },
                pics1: {
                    required: "Please fill Pics in digits",
                    minlength: "Pics value must be of 1 digits",
                    maxlength: "Pics value must be of 2 digits"
                },
                pics2: {
                    required: "Please fill Pics in digits",
                    minlength: "Pics value must be of 1 digits",
                    maxlength: "Pics value must be of 2 digits"
                },
                amount: {
                    required:  "Please fill amount in digits",
                    minlength: "Amount value must be of 1 digits",
                    maxlength: "Amount value must be of 4 digits"
                },
                duration: {
                    required:  "Please fill duration in digits",
                    minlength: "Amount value must be of 1 digits",
                    maxlength: "Amount value must be of 3 digits"
                }
               
            }
        });
    });
</script> --}}