@include('layouts.header')

<style>
    .spad {

        padding-top: 36px;

        padding-bottom: 19px;

        padding-left: 17px;

    }

</style>

<section class="breadcrumb-section spad set-bg" data-setbg="http://127.0.0.1:8000/assets/img/bg.jpg">

    <div class="container" style="padding-top: 65px; padding-bottom: 93px;">

        <div class="row">

            <div class="col-lg-12">

                <div class="breadcrumb-text">

                    <h4>Wishlist </h4>

                    <div class="bt-option">

                        <a href="./index.html"><i class="fa fa-home"></i> Dashboard</a>

                        <span>Wishlist</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<div class="container" style="padding-top: 65px; padding-bottom: 93px;">

    <div class="row">
        @if (Auth::user()->wishlist->count())

            @foreach ($wishlists as $wishlist)
                <div class="col-md-6">

                    <div class="card">

                        <div class="card-body">

                            <h5 class="card-title"><img class="rounded-circle" style="width: 40px; height: 40px;"
                                    alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                                    data-holder-rendered="true"> {{ $wishlist->profile->name }}</h5>

                            <p class="card-text"><span class="fas fa-star" style="color:#FFCE48;"></span> 4.5/5
                                (35 reviews) <br>With supporting text below as a natural lead-in to additional
                                content.With supporting text below as a natural lead-in to additional content.</p>

                            <!-- <a href="{{ route('') }}" class="btn btn-primary">Send Quote</a> <a href="#"
                                class="btn btn-primary">Remove</a> -->

                        </div>

                    </div>

                </div>
            @endforeach
        @endif

    </div>

</div>

@include('layouts.footer')
