  @include('layouts.login.header')



  <div class="wrapper">

      <div class="inner">

          @if (session()->has('message'))

              <p class="alert alert-info">

                  {{ session()->get('message') }}

              </p>

          @endif

          <form method="POST" action="{{ route('login') }}">

              {{ csrf_field() }}

              <h3>Login</h3>

              <div class="row">



                 <div class="col-md-6"><br>

                      <label for="">Email *</label>

                      <input name="email" type="text"

                          class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus

                          placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">

                      @if ($errors->has('email'))

                          <div class="invalid-feedback">

                              {{ $errors->first('email') }}

                          </div>

                      @endif

                  </div>

                  <div class="col-md-6"><br>

                      <label for="">Password *</label>

                      <input name="password" type="password"

                          class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required

                          placeholder="{{ trans('global.login_password') }}">

                      @if ($errors->has('password'))

                          <div class="invalid-feedback">

                              {{ $errors->first('password') }}

                          </div>

                      @endif

                  </div>

              </div><br>



              <div class="checkbox">

                  <label>

                      <input type="checkbox"> No one rejects, dislikes, or avoids pleasure itself.

                      <span class="checkmark"></span>

                  </label>

              </div><br>

              <button data-text="Login">

                  <span>Login</span>

              </button>

          </form>

      </div>

  </div>



  @include('layouts.login.footer')

