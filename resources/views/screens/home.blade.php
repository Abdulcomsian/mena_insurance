@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@extends('common.navbar')

@section('content')
    <section id="homeBanner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bannerContent">
                    <h1>MENA INSURANCE KYC</h1>
                    <p>Integrated KYC & Sanctions solution for MENA insurance market</p>
                </div>
            </div>
            <div class="col-lg-12">
                <form action="">
                    <div class="selectInput">
                        <div class="selectDiv">
                            <select id="country" name="country" onfocus='this.size=8;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                <option value="All">All Locations</option>
                                @foreach($countries as $item)
                                    <option value="{{$item->country_name}}">{{$item->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input id="search" type="text" autocomplete="off" placeholder="Search for an Insurance Organization or Key Executives">
                    </div>
                    <div>
                        <ul class="list-group" id="data">

                        </ul>
                    </div>
                    <a href="{{route('companydetail.search.result',['country'=>[0]])}}" class="btn btn-success mt-3">
                        <buttonw>Submit</buttonw>
                    </a>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="our-services" class="pad-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Our Services</h2>
            </div>
        </div>
        <div class="multi-services">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="services-box">
                        <img src="assets/img/eye.png" alt="">
                        <h3>
                            <a href="#">Market Research</a>
                        </h3>
                        <p>In the challenging Legal & Regulatory landscape, extensive research enable innovation in processes and services. We are responsive to the market needs in collecting, analyzing, and evaluating the Insurance/Reinsurance sector trends across MENA. We are keen to expand our reach globally. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="services-box">
                        <img src="assets/img/hand.png" alt="">
                        <h3>
                            <a href="#">Sanction Screening</a>
                        </h3>
                        <p>We can assist you in sanctions screening checks against watchlists and AML Sanctions list like OFAC, UN and EU, UAE to identify and report suspicious activities. Our reports are accurate optimizing your cost to comply.<p><br><br></p></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="services-box">
                        <img src="assets/img/user.png" alt="">
                        <h3>
                            <a href="#">KYC</a>
                        </h3>
                        <p>Our team of KYC professionals assist you in onboarding Individuals and Legal entities. Companies are aware that traditional audit methodologies are not sufficient to meet the increasing Regulatory requirements. To ensure seamless onboarding & ongoing monitoring you need expert advice from our MLROs. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="why-choose">
    <div class="img-div">
        <img src="assets/img/335003-P9WNIH-291-1.jpg" alt="" class="img-fluid">
    </div>
    <div class="content-div">
        <h1>Why Choose Us</h1>
        <div class="list-div">
            <ul>
                <li>
                    <div class="icon-div">
                        <img src="assets/img/mt-1421-home-icon04.png" alt="" class="img-fluid">
                    </div>
                    <div class="description-div">
                        <h3>
                        Dynamic Professionals
                        </h3>
                        <p>
                        Team of Highly trained subject matter experts in international sanctions and regulatory compliance will assist you in sanction check and KYC documentations on request. </p>

                        <p>Our professionals and act as outsourced compliance officers and Money Laundering Reporting Officers and experts in this field.

                        </p>company-detail.blade.php:282
                    </div>
                </li>

                <li>
                    <div class="icon-div">
                        <img src="assets/img/mt-1421-home-icon06.png" alt="" class="img-fluid">
                    </div>
                    <div class="description-div">
                        <h3>
                        Accurate Insights
                        </h3>
                        <p>
                        Research about various organizations with cross-verified data garnered from diverse trustworthy digital sources, functioning as a catalyst for compliance services.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="icon-div">
                        <img src="assets/img/mt-1421-home-icon05.png" alt="" class="img-fluid">
                    </div>
                    <div class="description-div">
                        <h3>
                        Up-to-date Information
                        </h3>
                        <p>
                        Periodical update of every organizational detail by a functional team would never allow your decision to be influenced by obsolete data</p>

<p>Considering the ever-changing nature of the legal and regulatory environment we perform research and analysis on a timely basis

                        </p>
                    </div>
                </li>
                <li>
                    <div class="icon-div">
                        <img src="assets/img/mt-1421-home-icon05.png" alt="" class="img-fluid">
                    </div>
                    <div class="description-div">
                        <h3>
                        One-stop solution
                        </h3>
                        <p>
                        An encyclopaedia of information ranging from company profile to sanction status to provide a holistic view of every insurance and insurance related businesses or professions
                    </div>
                </li>
            </ul>
            <!-- <a href="">
                Make An Appointment
            </a> -->
        </div>
    </div>
</section>
<section id="our-packages" class="pad-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Our Package</h2>
            </div>
        </div>
        <div class="multi-package">
            <div class="row">
                @foreach($packages as $item)
                    <div class="col-lg-4 col-md-4">
                    <div class="package-box">
                        <p class="price">
                            AED<br> {{$item->price ?: '-'}}
                        </p>
                        <div class="package-header">
                            <h3>{{$item->name ?: '-'}}</h3>
                        </div>
                        <div class="list-package">
                            <ul>
                                <li>{{$item->sanctions ?: '-'}} Sanctions Search</li>
                            </ul>
                        </div>
                        @guest
                            <button data-toggle="modal" data-target="#orderModal">Order Now</button>
                        @endguest

                        @auth
                            <a href="{{route('checkout',encrypt($item->id))}}">
                                <button>Order Now</button>
                            </a>
                        @endauth
                    </div>
                </div>
                @endforeach
{{--                <div class="col-lg-4 col-md-4">--}}
{{--                    <div class="package-box">--}}
{{--                        <p class="price">--}}
{{--                            AED 400--}}
{{--                        </p>--}}
{{--                        <div class="package-header">--}}
{{--                            <h3>Gold</h3>--}}
{{--                        </div>--}}
{{--                        <div class="list-package">--}}
{{--                            <ul>--}}
{{--                                <li>1 GB Storage Space</li>--}}
{{--                                <li>10 GB Monthly Bandwidth</li>--}}
{{--                                <li>10 Sub-domains</li>--}}
{{--                                <li>25 Email Accounts</li>--}}
{{--                                <li>Control panel</li>--}}
{{--                                <li>24/7 Support</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <button data-toggle="modal" data-target="#orderModal">Order Now</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-4">--}}
{{--                    <div class="package-box">--}}
{{--                        <p class="price">--}}
{{--                            AED 1000--}}
{{--                        </p>--}}
{{--                        <div class="package-header">--}}
{{--                            <h3>Platinum</h3>--}}
{{--                        </div>--}}
{{--                        <div class="list-package">--}}
{{--                            <ul>--}}
{{--                                <li>1 GB Storage Space</li>--}}
{{--                                <li>10 GB Monthly Bandwidth</li>--}}
{{--                                <li>10 Sub-domains</li>--}}
{{--                                <li>25 Email Accounts</li>--}}
{{--                                <li>Control panel</li>--}}
{{--                                <li>24/7 Support</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <button data-toggle="modal" data-target="#orderModal">Order Now</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</section>
<section id="our-company">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">
                    Our Company in Numbers
                </h1>
            </div>
        </div>
        <div class="number-div">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="number-icon-div">
                        <img src="assets/img/hand.png" alt="" class="img-fluid">
                        <p>26</p>
                        <span>Countries</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="number-icon-div">
                        <img src="assets/img/mt-1421-home-icon08.png" alt="" class="img-fluid">
                        <p>674</p>
                        <span>Insurance Products</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="number-icon-div">
                        <img src="assets/img/user.png" alt="" class="img-fluid">
                        <p>25000+</p>
                        <span>Unique Data</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section id="people-say" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>What People Say</h1>
            </div>
        </div>
        <div class="comment-section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="comment-slider">
                        <div class="comment-box">
                            <div class="comment">
                                <p>I wanted to take a moment and tell you what a
                                    fantastic employee you have. She treated me with
                                    the up most professionalism and was a calming voice that
                                    alleviated my stress during a stressful situation.
                                    She is an absolute pleasure to work with.
                                </p>
                            </div>
                            <div class="author-div">
                                <h5>Alan Smith</h5>
                                <span>Director</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="logo-div">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="img-div">
                    <img src="assets/img/mt-1421-clients-icon01.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="img-div">
                    <img src="assets/img/mt-1421-clients-icon02.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="img-div">
                    <img src="assets/img/mt-1421-clients-icon03.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="img-div">
                    <img src="assets/img/mt-1421-clients-icon04.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        <p>Mena Insurance,<br> Please sign up <b>or</b> Login to place an Order</p>
      </div>
      <div class="modal-footer">
        <a href="/login"><button type="button" class="btn btn-secondary">Login</button></a>
        <a href="/register"><button type="button" class="btn btn-secondary">Register</button></a>
      </div>
    </div>
  </div>
</div>
@endsection
