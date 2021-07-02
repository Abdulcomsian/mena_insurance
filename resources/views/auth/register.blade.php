<?php
use Illuminate\Support\Facades\DB;

?>

@extends('common.header')
@section('content')

<section id="comon-div" class="register-page"> 
    <div class="left-side">
    </div>
    <div class="right-side">
        <div class="right-side-content">
            <img src="assets/img/logo.png" alt="">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-div">
                            <h2>Sign Up</h2>
                            <div class="inputDiv">
                                <input class="form-control @error('companyname') is-invalid @enderror"  type="text" name="companyname" value="{{ old('companyname') }}" required autocomplete="companyname" autofocus placeholder="Company Name">
                                @error('companyname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="inputDiv">
                                <input class="form-control @error('name') is-invalid @enderror"  type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
                                @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="inputDiv">
                                <input class="form-control @error('email') is-invalid @enderror"  type="text" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="inputDiv">
                                <input class="form-control @error('address') is-invalid @enderror"  type="text" name="address" value="{{ old('address') }}"   placeholder="Address">
                                @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="inputDiv">
                            <select class="form-control">
                            @php
                            // $countries = Countries::all();
                            $countries = DB::table('countries')->select(DB::raw('country_name'))->get();
                           
                           dd($countries);
                            @endphp
                            @foreach($countries as $country)
                                <option>{{$country}}</option>
                            @endforeach
                            </select>
                                <input class="form-control @error('address') is-invalid @enderror"  type="text" name="country" value="{{ old('address') }}"   placeholder="Address">
                                @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="inputDiv">
                                <input class="form-control @error('address') is-invalid @enderror"  type="text" name="mobile" value="{{ old('address') }}"   placeholder="Mobile Number">
                                @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="inputDiv">
                                <input class="form-control @error('office') is-invalid @enderror"  type="text" name="office" value="{{ old('office') }}"   placeholder="Office Number">
                                @error('office')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
    </div>
</section>
@endsection
