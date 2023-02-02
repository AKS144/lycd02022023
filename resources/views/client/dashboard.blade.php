@include('layouts.header')

<style type="text/css">

       .table .thead-dark th {

    color: #fff;

    background-color: #FF0000;

    border-color: #FF0000;

}







.nav-link{

   color: #fff;

}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {

    color: #ffffff;

    background-color: #f00;

    border-color: #ff0000 #ff0000 #f00;

}

.btn-danger {

    color: #fff;

    background-color: #ff0000;

    border-color: #ff0000;

}

.spad {

    padding-top: 36px;

    padding-bottom: 19px;

    padding-left: 17px;

}

</style>

   <!-- Breadcrumb Section Begin -->

    <section class="breadcrumb-section spad set-bg" data-setbg="http://127.0.0.1:8000/assets/img/bg.jpg">

        <div class="container" style="padding-top: 65px; padding-bottom: 93px;">

            <div class="row">

                <div class="col-lg-12">

                    <div class="breadcrumb-text">

                        <h4>Dashboard </h4>

                        <div class="bt-option">

                            <a href="./index.html"><i class="fa fa-home"></i> Dashboard</a>

                            <span>Artist</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



  



<div class="container" ><br>

       

        

            <div class="row">

              <div class="col-5 col-sm-3">

                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical" style="background: black;">

                  <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">List Of Contracts</a>

                  <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Profile</a>

                  <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Messages</a>

                   <a class="nav-link" id="vert-tabs-wallet-tab" data-toggle="pill" href="#vert-tabs-wallet" role="tab" aria-controls="vert-tabs-wallet" aria-selected="false">Wallet</a>

                  <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Settings</a>

                </div>

              </div>

              <div class="col-7 col-sm-9">

                <div class="tab-content" id="vert-tabs-tabContent">

                  <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">

                    <table class="table table-bordered mb-5">

                      <thead>

                          <tr class="table-primary">

                              

                              <th scope="col">Name</th>

                              <th scope="col">Mobile</th>

                              <th scope="col">Email</th>

                              <th scope="col">Cost</th>

                              <th scope="col">Action</th>

                          </tr>

                      </thead>

                      <tbody>

                          @foreach($contract as $contract)

                          <tr>

                              <th scope="row">{{ $contract->user_name }}</th>

                              <td>{{ $contract->mobile }}</td>

                              <td>{{ $contract->email }}</td>

                              <td>{{ $contract->cost }}</td>

                             <td> <a href="{{ route('contract.edit', ['contract' => $contract->id]) }}"

                                class="btn btn-primary m-2">

                                <i class="fa fa-pen"></i>

                            </a></td>

                          </tr>

                          @endforeach

                      </tbody>

                  </table>

                  </div>

                  <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">

                     Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.

                  </div>

                  <div class="tab-pane fade" id="vert-tabs-wallet" role="tabpanel" aria-labelledby="vert-tabs-wallet-tab">

                     <a href="{{url('add-wallet')}}"><button class="btn btn-danger">+ Add E-Wallet</button></a><br><br>

                     <table class="table">

                             <thead>

                               <tr>

                                 <th scope="col">#</th>

                                 <th scope="col">First</th>

                                 <th scope="col">Last</th>

                                 <th scope="col">Handle</th>

                               </tr>

                             </thead>

                             <tbody>

                               <tr>

                                 <th scope="row">1</th>

                                 <td>Mark</td>

                                 <td>Otto</td>

                                 <td>@mdo</td>

                               </tr>

                               <tr>

                                 <th scope="row">2</th>

                                 <td>Jacob</td>

                                 <td>Thornton</td>

                                 <td>@fat</td>

                               </tr>

                               <tr>

                                 <th scope="row">3</th>

                                 <td>Larry</td>

                                 <td>the Bird</td>

                                 <td>@twitter</td>

                               </tr>

                             </tbody>

                           </table>

                  </div>

                    <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">

                     Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.

                  </div>

                  <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">

                    <div class="row">

                        <div class="col-md-6">

                            <label>Name</label>

                         <input type="tex" class="form-control" value="Abhishek" >

                        </div>

                        <div class="col-md-6">

                        <label>Mobile Number</label>



                        <input type="tex" class="form-control" value="9877665523" >



                        </div>

                    </div>

                    <br><br>

                        <a class="btn btn-primary">Update</a>   

                  </div>

                </div>

              </div>

            </div>

        </div>



        <br>

@include('layouts.footer')

