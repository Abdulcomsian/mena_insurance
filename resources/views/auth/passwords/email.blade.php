@extends('common.header')
@section('content')

<section id="comon-div" class="forgot-page">
    <div class="left-side">
    </div>
    <div class="right-side">
        <div class="right-side-content">
        <img src="../../../assets/img/logo.png" alt="">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-div">
                        <div class="inputDiv">
                        
                                <input id="email" type="email" placeholder="Enter your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                       

                        <div class="inputDiv">
                                <button type="submit" class="btn btn-primary" style="border:#2e953e; background:#2e953e;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                        </div>
                        </div>
                    </form>
            </div>
    </div>
</section>
@endsection