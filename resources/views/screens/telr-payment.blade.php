@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@section('css')
    <style>
        #telr {
            width: 100%;
            min-width: 600px;
            height: 600px;
            frameborder: 0;
        }
    </style>
@endsection
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
                    <div class="content-div">
                        <h2>How to Find Us</h2>
                        <p>If you have any questions, just fill in the contact form, and we will answer you shortly. If you are living nearby, come visit AllRisk at one of our comfortable offices.</p>
                        <div class="address-detail">
                            <h4>Headquarters</h4>
                            <p>9863 - 9867 MILL ROAD, CAMBRIDGE, MG09 99HT.</p>
                            <p>Telephone: +1 800 603 6035</p>
                            <p>Email: <a href="">mail@demolink.org</a></p>
                        </div>
                        <div class="address-detail">
                            <h4>Support Centre</h4>
                            <p>9863 - 9867 MILL ROAD, CAMBRIDGE, MG09 99HT.</p>
                            <p>Telephone: +1 800 603 6035</p>
                            <p>Email: <a href="">mail@demolink.org</a></p>
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
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
