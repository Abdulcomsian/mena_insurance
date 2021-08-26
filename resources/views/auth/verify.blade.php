@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@extends('common.navbar')
@section('content')
    <section id="payment-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-content">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        @if($message = Session::has('message'))
                            <h3>Please Verify Your Email Address</h3>
                        @else
                            <h2>Registration was Completed!</h2>
                            <p>{{ __('Please Verify Your Email Address') }}</p>
                        @endif

                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
