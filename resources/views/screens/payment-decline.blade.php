@extends('common.header')
@section('content')
<section id="payment-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="payment-content">
                    <i class="fa fa-times" style="color: red !important;" aria-hidden="true"></i>
                    <h2>Payment Declined!</h2>
                    <p>Your payment was declined. You have not subscribed to the package.</p>
                    <a class="btn btn-success" href="{{route('home')}}">Go To Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
