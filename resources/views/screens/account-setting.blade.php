@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@extends('common.navbar')

@section('content')
<section id="subscription-section" class="common-section">
    <div class="side-bar">
    <button class="open-sidebar"><i class="fa fa-arrow-left" aria-hidden="true"></i></i></button>
    <ul class="nav nav-pills" role="tablist">
               <li class="nav-item">
                  <a class="nav-link "  href="{{url('subscription')}}"><img src="assets/img/Icons/Icon feather-home - off.png" alt="" class="img-fluid"><span><i class="fa fa-money" aria-hidden="true"></i> My Subscription</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('account')}}" class="nav-link active my-project " > <img src="assets/img/Icons/Icon feather-search - off.png" alt="" class="img-fluid"><span><i class="fa fa-user" aria-hidden="true"></i> Account Setting</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('history')}}" class="nav-link " > <img src="assets/img/Icons/Icon material-favorite-border - off.png" alt="" class="img-fluid"><span><i class="fa fa-history" aria-hidden="true"></i> Renewal & History Billing</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('payment')}}" class="nav-link " > <img src="assets/img/Icons/Icon material-history - off.png" alt="" class="img-fluid"><span><i class="fa fa-id-card-o" aria-hidden="true"></i> Add Payment Method</span> </a>
               </li>
            </ul>
    </div>
    <div class="tab-content main-admin-content">
     
      <div id="account" class="home container-fluid tab-pane active">
         <div class="content-div">
            <button class="open-sidebar"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <h3>My Profile</h3>
            <div class="form-div">
               <form method="post" action="{{route('update_account')}}">
               @csrf
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control" name="company_name" value="{{ $users->company_name }}" placeholder="Company Name">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control" name="name" value="{{ $users->name }}"  placeholder="Full Name">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control"  name="email" value="{{ $users->email }}" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control" name="address" value="{{ $users->address }}" placeholder="Address">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <select class="form-control" name="country">
                           
                                 @foreach($countries as $country)
                                    <option @if($users->country == $country->id) {{"selected"}} @endif value="{{$country->id}}">{{$country->country_name}}</option>
                                 @endforeach
                                 </select>
                              <!-- <input type="text" class="form-control" value=""  placeholder="Country"> -->
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control"  name="mobile" value="{{ $users->mobile }}" placeholder="Mobile Number">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control" name="password" value="{{ $users->office }}" placeholder="Password">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control" name="confirm_password"  value="{{ $users->company_name }}" placeholder="Confrim Password">
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