<?php $page = "providers"; ?>

@extends('layout.mainlayout_admin')

@section('content')

<!-- Page Wrapper -->

<div class="page-wrapper">

    <div class="content container-fluid">

        <!-- Page Header -->

        <div class="page-header">

            <div class="row align-items-center">

                <div class="col">

                    <h3 class="page-title">Roles</h3>

                    <ul class="breadcrumb">

                        <li class="breadcrumb-item"><a href="index_admin">Home</a></li>

                        <li class="breadcrumb-item active">Budget</li>

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



                <form action="{{ route("admin.roles.store") }}" method="POST">

                    @csrf

                    <div class="row filter-row">

                        <div class="col-sm-6 col-md-6">

                            <div class="form-group">

                                <label for="name">Title</label>

                                <input type="text" id="title" name="title" class="form-control" value="" required>

                                @if($errors->has('title'))

                                <em class="invalid-feedback">

                                    {{ $errors->first('title') }}

                                </em>

                                @endif

                            </div>

                            <div class="form-group {{ $errors->has('permissions') ? 'has-error' : '' }}">
                                <label for="permissions">Permissions*
                                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                                <select name="permissions[]" id="permissions" class="form-control select2" multiple="multiple" required>
                                    @foreach($permissions as $id => $permissions)
                                        <option value="{{ $id }}" {{ (in_array($id, old('permissions', [])) || isset($role) && $role->permissions->contains($id)) ? 'selected' : '' }}>{{ $permissions }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('permissions'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('permissions') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.role.fields.permissions_helper') }}
                                </p>
                            </div>

                        </div>



                        <div class="col-sm-6 col-md-6">

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
                                            Ttile
                                        </th>
                                        <th>
                                            Permissions
                                        </th>
                                        <th class="text-end">Actions</th>

                                    </tr>

                                </thead>

                                <tbody>

                                @foreach($roles as $key => $role)

                                    <tr data-entry-id="{{ $role->id }}">

                                        <td>

                                        {{ $role->id ?? '' }}

                                        </td>

                                        <td>

                                        {{ $role->title ?? '' }}

                                        </td>

                                        <td>

                                        @foreach($role->permissions as $key => $item)
                                            <span class="badge badge-info">{{ $item->title }}</span>
                                        @endforeach

                                        </td>

                                        <td class="text-end">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-item{{ $item->id }}"><i class="far fa-edit"></i></a>

                                            <div class="modal fade custom-modal" id="add-item{{ $item->id }}">

                                                <div class="modal-dialog modal-dialog-centered">

                                                    <div class="modal-content">



                                                        <!-- Modal Header -->

                                                        <div class="modal-header flex-wrap">

                                                            <h4 class="modal-title">Edit Roles</h4>

                                                            <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>

                                                        </div>



                                                        <!-- Modal body -->

                                                        <div class="modal-body">

                                                            <form action="{{ route('admin.roles.update', $item->id) }}" method="POST">

                                                                @csrf

                                                                @method('put')

                                                                <div class="form-group">

                                                                    <label for="budget"></label>

                                                                    <input type="text" id="title" name="title" class="form-control" value="{{  $item->title  }}" required>

                                                                    @if($errors->has('Title'))

                                                                    <em class="invalid-feedback">

                                                                        {{ $errors->first('Title') }}

                                                                    </em>

                                                                    @endif

                                                                </div>


                                                                <!-- <div class="form-group">

                                                                    <label for="permissions"></label>

                                                                    <input type="text" id="permissions" name="permissions" class="form-control" value="{{ $rewards->permissions }}" required>

                                                                    @if($errors->has('permissions'))

                                                                    <em class="invalid-feedback">

                                                                        {{ $errors->first('permissions') }}

                                                                    </em>

                                                                    @endif

                                                                </div> -->


                                                                <div class="mt-4">

                                                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>

                                                                </div>

                                                            </form>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_reward{{$rewards->id}}"><i class="far fa-trash-alt"></i></a>

                                            <!-- Delete Modal -->

                                            <div class="modal custom-modal fade" id="delete_reward{{$rewards->id}}" role="dialog">

                                                <div class="modal-dialog modal-dialog-centered">

                                                    <div class="modal-content">

                                                        <div class="modal-body">

                                                            <div class="form-header">

                                                                <form action="{{ route('admin.rewards.destroy', $rewards->id) }}" method="POST">

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