<?php $page="jobpost";?>
@extends('layout.mainlayout')
@section('content')
<style>
    label.error {
        color: #dc3545;
        font-size: 14px;
    }
</style>

<!-- Page Content -->
<div class="content bookmark">
    <div class="container-fluid">
        <div class="row">

            <!-- sidebar -->
            @include('artist.sidebar')
            <!-- /sidebar -->

            <div class="col-xl-9 col-md-8">
               
                <!-- project list -->
                <div class="my-projects-view">
                    <div class="card-header">
                        <h3 class="card-title">Jobs Applied List </h3>
                    </div>
                    <div class="row">
                        <div class="freelancer-proposals">
                            <div class="project-proposals align-items-center freelancer">
                                <div class="proposals-info">
                                    <div class="proposals-detail">
                                        <h3 class="proposals-title">3D Renders and Amazon Product Store images/Video
                                        </h3>
                                        <div class="proposals-content">
                                            <div class="proposal-img">
                                                <div class="text-md-center">
                                                    <img src="assets/img/developer/developer-01.jpg" alt=""
                                                        class="img-fluid">
                                                    <h4>John Doe</h4>
                                                    <span class="info-btn">client</span>
                                                </div>
                                            </div>
                                            <div class="proposal-client">
                                                <h4 class="title-info">Client Price</h4>
                                                <h2 class="client-price">$599.00</h2>
                                                <span class="price-type">( FIXED )</span>
                                            </div>
                                            <div class="proposal-type">
                                                <h4 class="title-info">Job Type</h4>
                                                <h3>Hourly</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-hire-info">
                                        <div class="content-divider-1"></div>
                                        <div class="projects-amount">
                                            <p>Your Price</p>
                                            <h3>$500.00</h3>
                                            <h5>in 12 Days</h5>
                                        </div>
                                        <div class="content-divider-1"></div>
                                        <div class="projects-action text-center">
                                            <a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals
                                            </a>
                                            <a href="freelancer-view-project-detail.html" class="projects-btn">View
                                                Project</a>
                                            <a href="#" class="proposal-delete">Delete Proposal</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="description-proposal">
                                    <h5 class="desc-title">Description</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et
                                        eros. Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget
                                        eleifend. Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis
                                        quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent
                                        porttitor cursus sed cum....<a href="#"
                                            class="text-primary font-bold">Readmore</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- project list -->
                </div>
            </div>
        </div>
    </div>


    <!-- /Page Content -->


</div>

@endsection