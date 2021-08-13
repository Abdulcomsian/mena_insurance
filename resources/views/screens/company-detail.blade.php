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
                    <a href="/" class="backBtn"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
                    <span>Search result for <span class="current-text"><b>“{{$company_detail->company_name ?: '-'}}”</b></span></span>
                </div>
            </div>
        </div>
        <div class="search-result">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="location-div commonDiv">
                        <h3>{{$company_detail->company_name ?: '-'}}</h3>
                        <p>{{$company_detail->country ?: '-'}} </p>
                    </div>
                    <div class="accordians">
                        <div class="accordion" id="accordionExample">
                            @auth
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
                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                       <div class="row">
                                           <div class="col-lg-4 col-md-4">
                                               <div class="insights-div">
                                                   <h3>Country of Origin / Nationality</h3>
                                                   <p>{{$company_detail->country ?: ''}}</p>
                                               </div>
                                           </div>
                                           <div class="col-lg-4 col-md-4">
                                               <div class="insights-div">
                                                   <h3>Incorporation year/ Registration year</h3>
                                                   <p>{{$company_detail->incorporated_year ?: '-'}}</p>
                                               </div>
                                           </div>
                                           <div class="col-lg-4 col-md-4">
                                               <div class="insights-div">
                                                   <h3>External Auditor</h3>
                                                   <p>{{$company_detail->auditor ?: ''}}</p>
                                               </div>
                                           </div>
                                       </div>
                                       <h3 class="title">Senior Management / Board of Directors</h3>
                                        <div class="row">
                                            @if(count($company_detail->board_of_directors) > 0)
                                                @foreach($company_detail->board_of_directors as $item)
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="insights-div">
                                                           <h3>{{$item->name ?: '-'}}</h3>
                                                           <p>{{$item->designation ?: '-'}}</p>
                                                       </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="insights-div">
                                                       <p>-</p>
                                                    </div>
                                                </div>
                                            @endif
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
                                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                        <h3 class="title">AM Best Ratings</h3>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="insights-div">
                                                        <h3>Financial Strength Rating</h3>
                                                        <p>{{ $company_detail->company_accounting->financial_strength_rating  ?: '-' }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="insights-div">
                                                        <h3>Issuer Credit Rating</h3>
                                                        <p>{{ $company_detail->company_accounting->issue_credit_rating  ?: '-' }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="insights-div">
                                                        <h3>S&P Rating</h3>
                                                        <p>{{ $company_detail->company_accounting->s_andprating  ?: '-' }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="insights-div">
                                                        <h3>Moody's Rating</h3>
                                                        <p>{{ $company_detail->company_accounting->moody_rating  ?: '-' }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="insights-div">
                                                        <h3>Other Rating</h3>
                                                        <p>{{ $company_detail->company_accounting->other_rating  ?: '-' }}</p>
                                                    </div>
                                                </div>

                                            </div>
                                            <button style="color:#fff;">Sanction Status</button>
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
                                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="insights-div">
                                                    <h3>Gross Written Premium</h3>
                                                    <p>{{ $company_detail->company_accounting->gross_written_premium  ?: '-' }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="insights-div">
                                                    <h3>Year</h3>
                                                    <p>{{ $company_detail->company_accounting->gross_written_premium_year  ?: '-' }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="insights-div">
                                                        <h3>Paid Up Capital</h3>
                                                        <p>{{ $company_detail->market_share->paid_up_shares  ?: '-' }}</p>
                                                        <p>${{ $dollar_rate  ?: '-' }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="insights-div">
                                                    <h3>Financial Report</h3>
                                                    <p><a href="{{ $company_detail->financial_report ?: '' }}" target="_blank">{{ $company_detail->financial_report ?: '-' }}</a></p>
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
                                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="insights-div">
                                                    <h3>Publicly Listed Company</h3>
                                                    <p>{{ $company_detail->company_accounting->public_listed_company  ?: '-' }}</p>
                                                </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="insights-div">
                                                    <h3>Regulatory Authority</h3>
                                                        <p>{{ $company_detail->company_accounting->regulatory_authority ?: '-' }}</p>
                                                </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="insights-div">
                                                    <h3>Last Updated</h3>
                                                    <p>{{ $company_detail->last_modified_date->diffForHumans() }}</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="card loginCard" style="padding: .75rem 1.25rem;">
                                    <h3>Please Logged in to view the Information </h3>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="right-side commonDiv">
                        <img src="{{asset('assets/img/logo.png')}}" alt="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="insights-div">
                                    <h3>Trade name / Also known as (AKA)</h3>
                                    <p>{{$company_detail->trade_name ?: '-'}}</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="insights-div">
                                    <h3>Address</h3>
                                    <p>{{$company_detail->about ?: '-'}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="insights-div">
                                    <h3>Company Type</h3>
                                    <p>{{$company_detail->company_type ?: '-'}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="insights-div">
                                    <h3>Website</h3>
                                    <p>{{$company_detail->company_website ?: '-'}}</p>
                                    <!-- <a href="{{ $company_detail->company_website ?: '-' }}" target="_blank"><p>{{$company_detail->company_website ?: '-'}}</p></a> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="insights-div">
                                    <h3>Toll Free</h3>
                                    <p>{{$company_detail->toll_free_number ?: '-'}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="insights-div">
                                    <h3>Fax</h3>
                                    <p>{{$company_detail->fax_detail ?: '-'}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="insights-div">
                                    <h3>Email ID</h3>
                                    <p>{{$company_detail->company_email_id ?: '-'}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="insights-div">
                                    <h3>Telephone</h3>
                                    <p>{{$company_detail->contact_number ?: '-'}}</p>
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
