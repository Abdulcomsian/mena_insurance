@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@extends('common.navbar')
@section('content')
<section id="contact-banner" class="pad-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
</section>
<section id="how-to-find" class="pad-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="content-div" style="padding-top:0px;">
                    <h2>How to Find Us</h2>
                    <p>If you have any questions, just fill in the contact form, and we will answer you shortly. If you are living nearby, come visit us at one of our comfortable offices.</p>
                    <div class="address-detail">
                        <h4>Headquarters</h4>
                        <p>PO Box 121361, Business Venue Bldg <br>Opp. Al Nasr Club,Umm Hurair Road <br>Bur Dubai, UAE</p>
                        <p>Telephone: +971 4 396 9097</p>
                        <p>Website: www.callidusmena.com</p>
                        <p>Email: <a href="#">solutions@callidusmena.com</a></p>
                    </div>
                     <div class="address-detail">

                        <!-- <h4>Support Centre</h4>
                        <p>9863 - 9867 MILL ROAD, CAMBRIDGE, MG09 99HT.</p>
                        <p>Telephone: +1 800 603 6035</p>
                        <p>Email: <a href="">mail@demolink.org</a></p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-div">
                    <h2>Get in Touch</h2>
                    <div class="form">
                        <form action="">
                            <div class="inputDiv">
                                <input type="text" class="form-control" placeholder="Name*">
                            </div>
                            <div class="inputDiv">
                                <input type="text" class="form-control" placeholder="Email*">
                            </div>
                            <div class="inputDiv">
                                <input type="text" class="form-control" placeholder="Date*">
                            </div>
                            <div class="inputDiv">
                                <input type="text" class="form-control" placeholder="Time Interval*">
                            </div>
                            <div class="inputDiv">
                                <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Message"></textarea>
                            </div>
                            <button>Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1254.0088657785177!2d55.30935268042448!3d25.241266255786798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43b8396c3275%3A0x848b111341f5fb48!2sCallidus%20Consulting!5e0!3m2!1sen!2s!4v1630059592718!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
