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
                            @php
                                // $countries = Countries::all();
                                $countries = DB::table('countries')->select(DB::raw('country_name, id'))->get();
                               
                             //dd($countries );
                            @endphp
                            <select class="form-control">
                           
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->country_name}}</option>
                            @endforeach
                            </select>
                                
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
                            <div class="inputDiv">

                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="inputDiv">
                            
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6" style="margin: 0 auto;">
                                <button type="submit" class="btn btn-primary mt-3" style="border:#2e953e; background:#2e953e;">
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
