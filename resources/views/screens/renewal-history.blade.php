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
                  <a href="{{url('account')}}" class="nav-link my-project " > <img src="assets/img/Icons/Icon feather-search - off.png" alt="" class="img-fluid"><span><i class="fa fa-user" aria-hidden="true"></i> Account Setting</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('history')}}" class="nav-link active" > <img src="assets/img/Icons/Icon material-favorite-border - off.png" alt="" class="img-fluid"><span><i class="fa fa-history" aria-hidden="true"></i> Renewal & History Billing</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('payment')}}" class="nav-link" > <img src="assets/img/Icons/Icon material-history - off.png" alt="" class="img-fluid"><span><i class="fa fa-id-card-o" aria-hidden="true"></i> Add Payment Method</span> </a>
               </li>
            </ul>
    </div>
    <div class="tab-content main-admin-content">
      <div id="subscription" class="home container-fluid tab-pane fade">
         <div class="content-div">
            <button class="open-sidebar"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <h3>My Subscription</h3>
            <div class="table-div table-responsive">
            <table id="subscription_table" class="display">
                  <thead>
                     <tr>
                           <th>ID</th>
                           <th>Date</th>
                           <th>Package Name</th>
                           <th>Amount</th>
                           <th>Status</th>
                           <th>Expire Date</th>
                           <th>Balance Available</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                           <td>001</td>
                           <td>1 - July - 2021</td>
                           <td>Gold</td>
                           <td>AED 10</td>
                           <td><span class="approved">Approved</span></td>
                           <td>30 - August - 2022</td>
                           <td>1235689</td>
                     </tr>
                     <tr>
                           <td>002</td>
                           <td>1 - July - 2021</td>
                           <td>Silver</td>
                           <td>AED 20</td>
                           <td><span class="pending">Pending</span></td>
                           <td>30 - August - 2022</td>
                           <td>1235689</td>
                     </tr>
                     <tr>
                           <td>002</td>
                           <td>1 - July - 2021</td>
                           <td>Silver</td>
                           <td>AED 30</td>
                           <td><span class="expired">Expired</span></td>
                           <td>30 - August - 2022</td>
                           <td>1235689</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <div id="account" class="home container-fluid tab-pane fade">
         <div class="content-div">
            <button class="open-sidebar"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <h3>My Profile</h3>
            <div class="form-div">
               <form action="">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control" placeholder="Company Name">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control" placeholder="Full Name">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control" placeholder="Eamil">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control" placeholder="Address">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control" placeholder="Country">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control" placeholder="Mobile Number">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control" placeholder="Password">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="inputDiv">
                              <input type="text" class="form-control" placeholder="Confrim Password">
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
      <div id="history" class="home container-fluid tab-pane active">
         <div class="content-div">
            <button class="open-sidebar"><i class="fa fa-bars" aria-hidden="true"></i></button>
               <h3>My Billing History</h3>
               <div class="table-div table-responsive">
                  <table id="history_table" class="display">
                      <thead>
                      <tr>
                          <th>S.No</th>
                          <th>Date</th>
                          <th>Package Name</th>
                          <th>Amount</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($transactions as $item)
                          <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{date("d-M-Y",strtotime($item->created_at))  ?: '-'}}</td>
                              <td>{{$item->package->name}}</td>
                              <td>{{$item->amount}}</td>
                              <td><span class="approved">{{$item->status}}</span></td>
                              <td><a href="{{$item->pdf}}" download=""><img width="50%" src="{{asset('assets/img/pdf-icon.png')}}"
                                                                                                                alt=""></a></td>
                          </tr>
                      @endforeach
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
