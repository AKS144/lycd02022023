<?php $page = 'users'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Users</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin')}}">Home</a></li>

                            <li class="breadcrumb-item active">Users</li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        {{-- <a href="#" class="btn add-button me-2" data-bs-toggle="modal" data-bs-target="#add-category">
                            <i class="fas fa-plus"></i>
                        </a> --}}
                        {{-- <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a> --}}
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div class="card filter-card" id="filter_inputs">
                <div class="card-body pb-0">
                    <form action="#" method="post">
                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Expertise</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Search Filter -->
            <div class=" alert alert-success" id="status" role="alert">

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Expiry date
                                            </th>
                                            <th>
                                                Status
                                            </th>

                                            <th>
                                                Verification
                                            </th>

                                            <th>
                                                Roles
                                            </th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <td>
                                                    {{ $user->id ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $user->name ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $user->email ?? '' }}
                                                </td>

                                               

                                                @foreach ($user->roles as $key => $item)
                                                    <td>
                                                        @if ($item->title == 'Artist')
                                                            {{ date('d-M-Y', strtotime($user->exp_date)) }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <!-- <input type="checkbox" class="custom-control-input"{{ $user->status ? 'checked' : '' }}
                                           onclick="changeUserStatus(event.target, {{ $user->id }});"> -->
                                                        @if ($item->title != 'Admin')
                                                            {{-- <input data-id="{{ $user->id }}" class="toggle-class" type="checkbox"
													data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
													data-on="Active" data-off="InActive"
													{{ $user->status ? 'checked' : '' }}> --}}
                                                        @endif
                                                        @if ($item->title == 'Artist')
                                                            @if ($user->status == '0')                                                            
                                                                    <span class="badge badge-danger">De-Active</span>                                                           
                                                            @elseif($user->status == '1')
                                                                <span class="badge badge-success">Active</span>
                                                            @endif
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->title == 'Artist')
                                                            @if ($user->verify == '0')                                                            
                                                                    <span class="badge badge-danger">Not-Done</span>                                                           
                                                            @elseif($user->verify == '1')
                                                                <span class="badge badge-success">Done</span>
                                                            @endif
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if ($item->title == 'Admin')
                                                            <span class="badge badge-danger">{{ $item->title }}</span>
                                                        @elseif($item->title == 'Artist')
                                                            <span class="badge badge-info">{{ $item->title }}</span>
                                                        @elseif($item->title == 'Client')
                                                            <span class="badge badge-warning">{{ $item->title }}</span>
                                                        @endif
                                                    </td>
                                                    @if ($item->title == 'Artist')
                                                        <td class="text-end">                                                          
                                                            {{-- @if($item->title == 'Artist')     --}}
                                                            <a href="{{ url('admin/users/profile', $user->id) }}"
                                                                class="btn btn-sm btn-dark me-2">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                            {{-- @endif --}}

                                                            {{-- <a href="javascript:void(0);"
                                                                class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal"
                                                                data-bs-target="#edit-category{{ $user->id }}">
                                                                <i class="far fa-edit"></i></a> --}}
                                                            <div class="modal fade custom-modal"
                                                                id="edit-category{{ $user->id }}">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">

                                                                        <div class="modal-header flex-wrap">
                                                                            <div class="text-center w-100 mb-3">
                                                                                <img src="../assets_admin/img/logo-small.png"
                                                                                    alt="">
                                                                            </div>
                                                                            <h4 class="modal-title ">Edit User</h4>
                                                                            <button type="button" class="close"
                                                                                data-bs-dismiss="modal"><span>&times;</span></button>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                            <form
                                                                                action="{{ route('admin.users.update', $user->id) }}"
                                                                                method="POST">
                                                                                @method('put')
                                                                                <div
                                                                                    class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                                                    <label for="name"
                                                                                        class="text-left">Name</label>
                                                                                    <input type="text" id="name"
                                                                                        name="name" class="form-control"
                                                                                        value="{{ old('name', isset($user) ? $user->name : '') }}"
                                                                                        required>
                                                                                    @if ($errors->has('name'))
                                                                                        <em class="invalid-feedback">
                                                                                            {{ $errors->first('name') }}
                                                                                        </em>
                                                                                    @endif

                                                                                </div>
                                                                                <div
                                                                                    class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                                                                    <label for="email"
                                                                                        class="text-left">Email</label>
                                                                                    <input type="email" id="email"
                                                                                        name="email"
                                                                                        class="form-control"
                                                                                        value="{{ old('email', isset($user) ? $user->email : '') }}"
                                                                                        required>
                                                                                    @if ($errors->has('email'))
                                                                                        <em class="invalid-feedback">
                                                                                            {{ $errors->first('email') }}
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
                                                                data-bs-target="#delete_category"><i
                                                                    class="far fa-trash-alt"></i></a> --}}
                                                        </td>
                                                    @endif
                                                @endforeach
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
    <!-- /Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->



    <!-- Add Modal -->
    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header flex-wrap">
                    <div class="text-center w-100 mb-3">
                        <img src="../assets_admin/img/logo-small.png" alt="">
                    </div>
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value=" George Wells">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="georgewells@example.com">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" value="*******">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" value="********">
                        </div>
                        <div class="form-group">
                            <label>User Type</label>
                            <select class="form-control form-select">
                                <option>Select</option>
                                <option selected>Frontend Developer</option>
                                <option>Graphic Designer</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal -->

    <!-- Delete Modal -->
    <div class="modal custom-modal fade" id="delete_category" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endsection
