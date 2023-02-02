  @include('layouts.login.header')



  <div class="wrapper">

      <div class="inner">

        

          <form action="{{ route('profsearch') }}">

              {{ csrf_field() }}

              <h3>What Are You Looking For?</h3>

              <div class="row">



                 <div class="col-md-12"><br>

                      

                   
              <input class="form-control" id="choices-text-preset-values" name="profsearch" type="text" placeholder="Search Here..." required />


                  </div>


              </div><br>

              <button data-text="Search">

                  <span>Search</span>

              </button>

          </form>

      </div>

  </div>



  @include('layouts.login.footer')

