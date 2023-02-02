@include('layouts.header')



<section class="property-section latest-property-section spad">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <center>

                    <div class="section-title">

                        <h3>Latest Job</h3>

                    </div>

                </center>

            </div>

        </div>



        <div class="row">

            @foreach ($jobs as $job)

                <div class="col-sm-6">

                    <div class="card">

                        <div class="card-body">

                            <h5 class="card-title"><b><a href="{{ route('jobs.show', $job->id) }}">

                                        <h4>{{ $job->name }}</h4>

                                    </a></b></h5>

                            <p class="card-text">

                                <i class="fa fa-map-marker"></i> {{ $job->location->name }} <i

                                    class="fa fa-clock-o"></i> {{ $job->created_at->diffForHumans() }}

                            </p>

                            <h5><b>{{ $job->salary }}</b> </h5><br>

                            <a href="{{ route('jobs.show',['job' => $job->id]) }}" class="primary-btn">Job Show</a>

                        </div>

                    </div>

                </div><br>

            @endforeach

        </div>

    </div>

</section>





@include('layouts.footer')