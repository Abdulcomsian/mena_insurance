@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@extends('common.navbar')

@section('content')
<section id="search-section" class="pad-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrum">
                    <a href="" class="backBtn"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
                    <span>Search result for <span class="current-text"><b>“Ankara Sigorta A.S”</b></span></span>
                </div>
            </div>
        </div>
        <div class="search-result">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="location-div commonDiv">
                        <h3>Ankara Sigorta A.S</h3>
                        <p>TURKEY</p>
                    </div>
                    <div class="accordians">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Market Share Statistics
                                    </button>
                                </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="chartDiv">
                                    <div class="row">
                                        <div class="col-md-6">
                                                <canvas width="500" id="myChart"></canvas>
                                            </div>
                                            <div class=col-md-6>
                                                <ul style="margin-top: 20px;">
                                                    <li style="position: relative; margin-bottom:20px;">
                                                        <span style="top: 5px; position: absolute; width: 15px; height: 15px; margin-right: 10px; background-color: rgb(0, 97, 254); border-radius: 5px;"></span>
                                                        <p style="margin-left: 20px; font-size: 14px;">International Oilfield Inspection Services Ltd</p>
                                                    </li>
                                                    <li style="position: relative; margin-bottom:20px;">
                                                        <span style="top: 5px; position: absolute; width: 15px; height: 15px; margin-right: 10px; background-color: rgb(63, 213, 150); border-radius: 5px;"></span>
                                                        <p style="margin-left: 20px; font-size: 14px;">Yemen Drilling</p>
                                                    </li>
                                                    <li style="position: relative; margin-bottom:20px;">
                                                        <span style="top: 5px; position: absolute; width: 15px; height: 15px; margin-right: 10px; background-color: rgb(255, 196, 66); border-radius: 5px;"></span>
                                                        <p style="margin-left: 20px; font-size: 14px;">Saddam AL-Hashdi</p>
                                                    </li>
                                                    <li style="position: relative; margin-bottom:20px;">
                                                        <span style="top: 5px; position: absolute; width: 15px; height: 15px; margin-right: 10px; background-color: rgb(255, 128, 33); border-radius: 5px;"></span>
                                                        <p style="margin-left: 20px; font-size: 14px;">Hussain AL-Hashdi</p>
                                                    </li>
                                                    <li style="position: relative; margin-bottom:20px;">
                                                        <span style="top: 5px; position: absolute; width: 15px; height: 15px; margin-right: 10px; background-color: rgb(76, 175, 80); border-radius: 5px;"></span>
                                                        <p style="margin-left: 20px; font-size: 14px;">International Oilfield Services</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Company Insights
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                   <div class="row">
                                       <div class="col-lg-4 col-md-4">
                                           <div class="insights-div">
                                               <h3>Country of Origin / Nationality</h3>
                                               <p>TURKEY</p>
                                           </div>
                                       </div>
                                       <div class="col-lg-4 col-md-4">
                                           <div class="insights-div">
                                               <h3>Incorporation year/ Registration year</h3>
                                               <p>1936</p>
                                           </div>
                                       </div>
                                       <div class="col-lg-4 col-md-4">
                                           <div class="insights-div">
                                               <h3>External Auditor</h3>
                                               <p>Gureli Independent Audit Services A.S</p>
                                           </div>
                                       </div>
                                   </div>
                                   <h3 class="title">Senior Management / Board of Directors</h3>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="insights-div">
                                               <h3>Rifat Vefa MURTEZA</h3>
                                               <p>Gureli Independent Audit Services A.S</p>
                                           </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="insights-div">
                                               <h3>Resul HOLOĞLU</h3>
                                               <p>Chairman of the Board</p>
                                           </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="insights-div">
                                               <h3>Kayhan AY</h3>
                                               <p>Vice Chairman of the Board of Directors</p>
                                           </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="insights-div">
                                               <h3>Ahmet OĞAN</h3>
                                               <p>MEMBER</p>
                                           </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="insights-div">
                                               <h3>Omer Faruk ERGIN</h3>
                                               <p>MEMBER</p>
                                           </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="insights-div">
                                               <h3>Ahmet ŞENGÜN</h3>
                                               <p>MEMBER</p>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Sanction Status & Rating
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                    <h3 class="title">AM Best Ratings</h3>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="insights-div">
                                                <h3>Financial Strength Rating</h3>
                                                <p>-</p>
                                            </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="insights-div">
                                                <h3>Issuer Credit Rating</h3>
                                                <p>-</p>
                                            </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="insights-div">
                                                <h3>S&P Rating</h3>
                                                <p>-</p>
                                            </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="insights-div">
                                                <h3>Moody's Rating</h3>
                                                <p>-</p>
                                            </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="insights-div">
                                                <h3>Other Rating</h3>
                                                <p>IFS - BB</p>
                                            </div>
                                            </div>
                                            <button style="color:#fff;">Sanction Status</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Financial Information
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="insights-div">
                                                <h3>Gross Written Premium</h3>
                                                <p>TL 440649032</p>
                                            </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="insights-div">
                                                <h3>Year</h3>
                                                <p>2019</p>
                                            </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="insights-div">
                                                <h3>Paid Up Capital</h3>
                                                <p>TL 148.500.000</p>
                                            </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="insights-div">
                                                <h3>Financial Report</h3>
                                                <p><a href="">https://www.ankarasigorta.com.tr/hakkimizda/finansal-bilgiler</a></p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Others
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="insights-div">
                                                <h3>Publicly Listed Company</h3>
                                                <p>-</p>
                                            </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="insights-div">
                                                <h3>Regulatory Authority</h3>
                                                <p>Ministry of Treasury and finance - Insurance and Private Pension Regulation and Supervision Agency</p>
                                            </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="insights-div">
                                                <h3>Last Updated</h3>
                                                <p>Thu Oct 08 2020 13:15:00 GMT+0500 (Pakistan Standard Time)</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
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