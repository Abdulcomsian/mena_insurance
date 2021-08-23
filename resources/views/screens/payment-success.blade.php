@extends('common.header')
@section('content')
<section id="payment-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="payment-content">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <h2>Payment Successfully!</h2>
                    <p>Your payment was Successfull. You have subscribed to the package.</p>
                    <a class="btn btn-success" href="{{route('subscription')}}">View Package</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
