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

                    <h3 class="page-title">Budget Range</h3>

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



                <form action="{{ route("admin.rewards.store") }}" method="POST" id="rewards">

                    @csrf


                    <div class="row filter-row">

                        <div class="col-sm-6 col-md-6">

                            <div class="form-group">

                                <label for="name">Budget</label>

                                <input type="text" id="budget" name="budget" class="form-control" value="" required>

                                @if($errors->has('budget'))

                                <em class="invalid-feedback">

                                    {{ $errors->first('budget') }}

                                </em>

                                @endif

                            </div>

                            <div class="form-group">

                                <label for="name">Coins</label>

                                <input type="text" id="coins" name="coins" class="form-control" value="" required>

                                @if($errors->has('coins'))

                                <em class="invalid-feedback">

                                    {{ $errors->first('coins') }}

                                </em>

                                @endif

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



                                            Budget



                                        </th>



                                        <th>



                                            Coins



                                        </th>


                                        <th class="text-end">Actions</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach($reward as $key => $rewards)

                                    <tr>

                                        <td>



                                            {{ $rewards->id ?? '' }}



                                        </td>



                                        <td>



                                            {{ $rewards->budget ?? '' }}



                                        </td>



                                        <td>



                                            {{ $rewards->coins ?? '' }}



                                        </td>

                                        <td class="text-end">


                                            <a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-reward{{ $rewards->id }}"><i class="far fa-edit"></i></a>

                                            <div class="modal fade custom-modal" id="add-reward{{ $rewards->id }}">

                                                <div class="modal-dialog modal-dialog-centered">

                                                    <div class="modal-content">



                                                        <!-- Modal Header -->

                                                        <div class="modal-header flex-wrap">

                                                            <h4 class="modal-title">Edit Budget</h4>

                                                            <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>

                                                        </div>



                                                        <!-- Modal body -->

                                                        <div class="modal-body">

                                                            <form action="{{ route('admin.rewards.update', $rewards->id) }}" method="POST" id="rewardsedit">

                                                                @csrf

                                                                @method('put')

                                                                <div class="form-group">

                                                                    <label for="budget">Budget Range</label>

                                                                    <input type="text" id="budget" name="budget" class="form-control" value="{{  $rewards->budget  }}" required>

                                                                    @if ($errors->has('Budget'))
                                                                        <span class="text-danger">{{ $errors->first('Budget') }}</span>
                                                                    @endif

                                                                </div>


                                                                <div class="form-group">


                                                                    <label for="coins">Coins</label>

                                                                    <input type="text" id="coins" name="coins" class="form-control" value="{{ $rewards->coins }}" required>                                          

                                                                    @if ($errors->has('coins'))
                                                                        <span class="text-danger">{{ $errors->first('coins') }}</span>
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