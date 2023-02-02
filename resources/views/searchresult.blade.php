@include('layouts.header')


<!-- Header End -->

<!-- Hero Section Begin -->
<!--  <section class="hero-section">
        <div class="container">
          
        </div>
    </section> -->
<!-- Hero Section End -->

<!-- Search Section Begin -->
<section class="search-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title">
                    <h4 style="color:#fff ;">Search Here....!</h4>
                </div>
            </div>
        </div>
        <div class="search-form-content">
            <form action="{{ route('search') }}" class="filter-form">
                <div class="row">
                    
                <div class="col-md-4">
                <select name="location" class="form-select">
                    <option value="0">All Areas</option>
                    @foreach ($searchLocations as $id => $searchLocations)
                        <option value="{{ $id }}">{{ $searchLocations }}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-md-4">
                <select name="category" class="form-select">
                    <option value="0">Select Genre</option>
                    @foreach ($searchCategories as $id => $searchCategories)
                        <option value="{{ $id }}">{{ $searchCategories }}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-md-4">
                <button type="button" class="search-btn sm-width">Search</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>
<br>
<section class="categories-section">
    <div class="container">
        <div class="row">
        </div>
    </div>
</section>

<!-- Search Section End -->

<!-- Property Section Begin -->
<section class="property-section latest-property-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <div class="section-title">
                        <h3>Search Result</h3>
                    </div>
                </center>
            </div>
        </div>

        <div class="row">
            @foreach ($jobs as $job)
                <div class="col-md-6" style="margin-bottom: 12px;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><b><a href="{{ route('jobs.show', $job->id) }}">
                                        <h4>{{ $job->name }}</h4>
                                    </a></b></h5>
                            <p class="card-text">
                                <i class="fa fa-map-marker"></i> {{ $job->location->name }} <i
                                    class="fa fa-clock-o"></i> 1 Week
                            </p>
                            <h5><b>{{ $job->salary }}</b> </h5><br>
                            <a href="./job-details.php" class="primary-btn">Apply Now</a>
                        </div>
                    </div>
                </div><br>
            @endforeach
        </div>
    </div>
</section>

<style type="text/css">
    .fa {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        color: red;
    }

    p {
        font-size: 14px;
        font-family: "Montserrat", sans-serif;
        color: #000000;
        font-weight: 500;
        line-height: 24px;
        margin: 0 0 15px 0;
    }

    .spad {
        padding-top: 36px;
        padding-bottom: 19px;
        padding-left: 0px;
    }

    b,
    sup,
    sub,
    u,
    del {
        color: #ff0000;
    }

</style>


@include('layouts.footer')
