
@extends('common.header')
@section('content')

<section id="comon-div" class="register-page"> 
    <div class="left-side">
    </div>
    <div class="right-side">
        <div class="right-side-content">
            <img src="assets/img/logo.png" alt="">
            <form action="">
            <div class="form-div">
                <h2>Sign Up</h2>
                <div class="inputDiv">
                    <input class="form-control" type="text" placeholder="Company Name">
                </div>
                <div class="inputDiv">
                    <input class="form-control" type="text" placeholder="Full Name">
                </div>
                <div class="inputDiv">
                    <input class="form-control" type="text" placeholder="Email">
                </div>
                <div class="inputDiv">
                    <input class="form-control" type="text" placeholder="Address">
                </div>
                <div class="inputDiv">
                    <input class="form-control" type="text" placeholder="Country">
                </div>
                <div class="inputDiv">
                    <input class="form-control" type="text" placeholder="Mobile Number">
                </div>
                <div class="inputDiv">
                    <input class="form-control" type="text" placeholder="Office Number">
                </div>
                <div class="inputDiv">
                    <input class="form-control" type="text" placeholder="Password">
                </div>
                <div class="inputDiv">
                    <input class="form-control" type="text" placeholder="Confrim Password">
                </div>
                <button>Register</button>
                <p><a href="/login">Already Have a Account?</a></p>
            </div>
           
            </form>
        </div>
    </div>
</section>
@endsection