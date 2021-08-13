@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@extends('common.navbar')

@section('content')
<section id="search-section" class="pad-100">
    <div class="container">
        <div class="search-result">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="filterDiv">
                        <h3>Filter</h3>
                        <ul>
                            <li>Company Type <a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                            <li>Geography <a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="right-side commonDiv">
                        <img src="assets/img/logo.png" alt="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="insights-div">
                                    <h3>Trade name / Also known as (AKA)</h3>
                                    <p>-</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="insights-div">
                                    <h3>Address</h3>
                                    <p>Kozyatagi Mahallesi Sarı Kanarya Sok, K2 Plaza No: 14 Kat: 8-9, Kadıkoy / Istanbul</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="insights-div">
                                    <h3>Company Type</h3>
                                    <p>Kozyatagi Mahallesi Sarı Kanarya Sok, K2 Plaza No: 14 Kat: 8-9, Kadıkoy / Istanbul</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="insights-div">
                                    <h3>Website</h3>
                                    <p>Kozyatagi Mahallesi Sarı Kanarya Sok, K2 Plaza No: 14 Kat: 8-9, Kadıkoy / Istanbul</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="insights-div">
                                    <h3>Toll Free</h3>
                                    <p>-</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="insights-div">
                                    <h3>Fax</h3>
                                    <p>902169121313</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="insights-div">
                                    <h3>Email ID</h3>
                                    <p>info@ankarasigorta.com.tr</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="insights-div">
                                    <h3>Telephone</h3>
                                    <p>902166658500</p>
                                </div>
                            </div>
                        </div>
                        <button style="color:#fff;">Sanction Status</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection