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
                                <input class="form-control @error('company_name') is-invalid @enderror"  type="text" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" autofocus placeholder="Company Name">
                                @error('company_name')
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
                            <select class="form-control @error('address') is-invalid @enderror"  name="country_id" value="United Arab Emirates">

                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->country_name}}</option>
                            @endforeach
                            </select>
                                @error('country_id')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="inputDiv">
                                <input class="form-control @error('mobile_number') is-invalid @enderror"  type="text" name="mobile_number" value="{{ old('mobile_number') }}"   placeholder="Mobile Number">
                                @error('mobile_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="inputDiv">
                                <input class="form-control @error('office_number') is-invalid @enderror"  type="text" name="office_number" value="{{ old('office_number') }}"   placeholder="Office Number">
                                @error('office_number')
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(".register-page select option").each(function(){
    if ($(this).text() == "United Arab Emirates")
        $(this).attr("selected","selected");
    });
</script>
@endsection
