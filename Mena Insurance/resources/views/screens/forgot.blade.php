
@extends('common.header')
@section('content')

<section id="comon-div" class="forgot-page">
    <div class="left-side">
    </div>
    <div class="right-side">
        <div class="right-side-content">
            <img src="assets/img/logo.png" alt="">
            <form action="">
            <div class="form-div">
                <h2>Forgot Account</h2>
                <div class="inputDiv">
                    <input class="form-control" type="text" placeholder="Username or Email">
                </div>
                <button>Reset Account</button>
            </div>
           
            </form>
        </div>
    </div>
</section>
@endsection