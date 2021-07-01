
@extends('common.header')
@section('content')

<section id="comon-div">
    <div class="left-side">
    </div>
    <div class="right-side">
        <div class="right-side-content">
            <img src="assets/img/logo.png" alt="">
            <form action="">
            <div class="form-div">
                <h2>Login</h2>
                <div class="inputDiv">
                    <input class="form-control" type="text" placeholder="Username or Email">
                </div>
                <div class="inputDiv">
                    <input class="form-control" type="text" placeholder="Password">
                </div>
                <button>Login</button>
                <p><a href="/register">Don't Have a Account?</a></p>
                <p><a href="/forgot">Forgot Password</a></p>
            </div>
           
            </form>
        </div>
    </div>
</section>
@endsection