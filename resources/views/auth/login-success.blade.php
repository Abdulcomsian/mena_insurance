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
                        <h2>Registration was Successufl!</h2>
                        <p>{{ __('Please Verify Your Email Address') }}</p>

                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
