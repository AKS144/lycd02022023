@include('layouts.login.header')

<div class="wrapper">
    <div class="inner">
        <form method="POST" action="{{ route('login') }}">
            <h3>Login</h3>
            <div class="form-row">                
                <div class="form-wrapper">
                    <label for="">Email *</label>
                    <input name="email" type="email" class="form-control" placeholder="Email">
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-wrapper">
                    <label for="">Password *</label>
                    <input type="text" class="form-control" placeholder="Password">
                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>
            </div>        
    
            {{-- <div class="checkbox">
                <label>
                    <input type="checkbox"> No one rejects, dislikes, or avoids pleasure itself.
                    <span class="checkmark"></span>
                </label>
            </div> --}}
            <button data-text="Login">
                <span>Login</span>
            </button>
        </form>
    </div>
</div>

@include('layouts.login.footer')