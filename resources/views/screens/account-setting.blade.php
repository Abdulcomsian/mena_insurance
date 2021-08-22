@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@extends('common.navbar')

@section('content')
<section id="subscription-section" class="common-section">
    <div class="side-bar">
    <button class="open-sidebar"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
    <ul class="nav nav-pills" role="tablist">
               <li class="nav-item">
                  <a class="nav-link "  href="{{url('subscription')}}"><img src="assets/img/Icons/Icon feather-home - off.png" alt="" class="img-fluid"><span><i class="fa fa-money" aria-hidden="true"></i> My Packages</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('account')}}" class="nav-link active my-project " > <img src="assets/img/Icons/Icon feather-search - off.png" alt="" class="img-fluid"><span><i class="fa fa-user" aria-hidden="true"></i> Account Setting</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('history')}}" class="nav-link " > <img src="assets/img/Icons/Icon material-favorite-border - off.png" alt="" class="img-fluid"><span><i class="fa fa-history" aria-hidden="true"></i> Billing History</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('payment')}}" class="nav-link " > <img src="assets/img/Icons/Icon material-history - off.png" alt="" class="img-fluid"><span><i class="fa fa-id-card-o" aria-hidden="true"></i> Payment Method</span> </a>
               </li>
            </ul>
    </div>
    <div class="tab-content main-admin-content">

      <div id="account" class="home container-fluid tab-pane active">
         <div class="content-div">
             <button class="open-sidebar"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <h3>My Profile</h3>
             <div class="form-div">
                 <form method="post" action="{{route('update_account',encrypt(\Illuminate\Support\Facades\Auth::id()))}}">
               @csrf

                    <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ Auth::user()->company_name }}" placeholder="Company Name">
                               @error('company_name')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" required class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}"  placeholder="Full Name">
                               @error('name')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="email"  required class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ Auth::user()->email }}" placeholder="Email">
                               @error('email')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ Auth::user()->address }}" placeholder="Address">
                               @error('address')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <select class="form-control @error('country_id') is-invalid @enderror" name="country_id">

                                 @foreach($countries as $country)
                                    <option @if(Auth::user()->country_id == $country->id) selected @endif value="{{$country->id}}">{{$country->country_name}}</option>
                                 @endforeach
                                 </select>
                               @error('country_id')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control @error('mobile_number') is-invalid @enderror"  name="mobile_number" value="{{ Auth::user()->mobile_number }}" placeholder="Mobile Number">
                               @error('mobile_number')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                        </div>
                         <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control @error('office_number') is-invalid @enderror"  name="office_number" value="{{ Auth::user()->office_number }}" placeholder="Office Number">
                               @error('office_number')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                        </div>
                     </div>
                      <div  class="row">
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">

                              <input type="password" required autocomplete="off" class="form-control  @error('password') is-invalid @enderror"  name="password" placeholder="Password">
                               @error('password')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="password" required autocomplete="off" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <button>Update Profile</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div id="history" class="home container-fluid tab-pane fade">
         <div class="content-div">
            <button class="open-sidebar"><i class="fa fa-bars" aria-hidden="true"></i></button>
               <h3>My Billing History</h3>
               <div class="table-div table-responsive">
               <table id="history_table" class="display">
                     <thead>
                        <tr>
                              <th>ID</th>
                              <th>Transaction ID</th>
                              <th>Date</th>
                              <th>Product Name</th>
                              <th>Amount</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                              <td>001</td>
                              <td>669855</td>
                              <td>1 - July - 2021</td>
                              <td>Gold</td>
                              <td>AED 10</td>

                        </tr>
                        <tr>
                              <td>002</td>
                              <td>657425</td>
                              <td>1 - July - 2021</td>
                              <td>Gold</td>
                              <td>AED 10</td>
                        </tr>
                        <tr>
                              <td>002</td>
                              <td>985315</td>
                              <td>1 - July - 2021</td>
                              <td>Gold</td>
                              <td>AED 10</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
      </div>
      <div id="addCard" class="home container-fluid tab-pane fade">
         <div class="content-div">
            <button class="open-sidebar"><i class="fa fa-bars" aria-hidden="true"></i></button>
               <h3>Payment Method</h3>
               <button data-toggle="modal" data-target="#addCardModal" class="addCadBtn">Add Card</button>
               <div class="table-div table-responsive">
                    <table id="payment_table" class="display">
                     <thead>
                        <tr>
                              <th>Bank Name</th>
                              <th>Card Number</th>
                              <th>Date</th>
                              <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                              <td>Bank Islami</td>
                              <td>**** **** **** 1157</td>
                              <td>1 - July - 2021</td>
                              <td data-toggle="modal" data-target="#deleteCard" class="removeText">Remove</td>
                        </tr>
                        <tr>
                              <td>Alfalah Bank</td>
                              <td>**** **** **** 1157</td>
                              <td>1 - July - 2021</td>
                              <td data-toggle="modal" data-target="#deleteCard" class="removeText">Remove</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
      </div>
    </div>
</section>
@endsection
