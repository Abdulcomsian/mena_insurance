@extends('common.header')
@section('content')
<section id="comon-div">
    <div class="left-side">
    </div>
    <div class="right-side">
        <div class="right-side-content">
            <img src="assets/img/logo.png" alt="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-div">
                            <h2>Login</h2>
                            <div class="inputDiv">
                           
                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Please enter your Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        
                            

                        <div class="inputDiv">
                                <input id="password" type="password" placeholder="Enter your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6" style="margin: 0 auto;">
                                <button type="submit" class="btn btn-primary" style="border:#2e953e; background:#2e953e;">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>
                        <div class="inputDiv">
                        <p><a href="/register">Don't Have a Account?</a></p>
                <p><a class="btn btn-link" href="{{ route('password.request') }}">Forgot Password</a></p>
                        </div>
                        </div>
                    </form>
                </div>
    </div>
</section>
@endsection
