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
                        <h3 class="page-title">Transaction</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index_admin">Home</a></li>
                            <li class="breadcrumb-item active">Transaction</li>
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
                                            {{-- <th>
                                                Id
                                            </th> --}}
                                            <th>
                                                Artist ID
                                            </th>

                                            <th>
                                                Artist Name
                                            </th>
                                           
                                            <th>
                                                Job Location
                                            </th>
                                           
                                            <th>
                                                Budget
                                            </th>

                                            <th>
                                                coins
                                            </th>

                                            <th>
                                                Location
                                            </th>

                                            <th>
                                                Job Type
                                            </th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction as $key => $transaction)
                                            <tr>
                                                {{-- <td>
                                                    {{ $transaction->id ?? '' }}
                                                </td> --}}

                                                <td>
                                                    {{ $transaction->artist_id ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $transaction->user_name ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $transaction->name ?? '' }}
                                                </td>


                                                <td>
                                                    {{ $transaction->budget ?? '' }}
                                                </td>
                                               
                                                <td>
                                                    {{ $transaction->coins ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $transaction->location ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $transaction->jobtype ?? '' }}
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