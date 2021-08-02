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
                  <a class="nav-link active"  href="{{url('subscription')}}"><img src="assets/img/Icons/Icon feather-home - off.png" alt="" class="img-fluid"><span><i class="fa fa-money" aria-hidden="true"></i> My Subscription</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('account')}}" class="nav-link my-project" > <img src="assets/img/Icons/Icon feather-search - off.png" alt="" class="img-fluid"><span><i class="fa fa-user" aria-hidden="true"></i> Account Setting</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('history')}}" class="nav-link" > <img src="assets/img/Icons/Icon material-favorite-border - off.png" alt="" class="img-fluid"><span><i class="fa fa-history" aria-hidden="true"></i> Renewal & History Billing</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('payment')}}" class="nav-link" > <img src="assets/img/Icons/Icon material-history - off.png" alt="" class="img-fluid"><span><i class="fa fa-id-card-o" aria-hidden="true"></i> Add Payment Method</span> </a>
               </li>
            </ul>
    </div>
    <div class="tab-content main-admin-content">
      <div id="subscription" class="home container-fluid tab-pane active">
         <div class="content-div">
            <button class="open-sidebar"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <h3>My Subscription</h3>
            <div class="table-div table-responsive">
               <table id="subscription_table" class="display">
                  <thead>
                     <tr>
                           <th>S.No</th>
                           <th>Date</th>
                           <th>Package Name</th>
                           <th>Amount</th>
                           <th>Status</th>
                           <th>Balance Available</th>
                     </tr>
                  </thead>
                  <tbody>
                  @if(isset($subscription))
                     <tr>
                           <td>1</td>
                           <td>{{date("d-M-Y",strtotime($subscription->created_at))  ?: '-'}}</td>
                           <td>{{$subscription->package_name ?: '-'}}</td>
                           <td>{{$subscription->price ?: '-'}}</td>
                           <td>
                                <span class="{{strtolower($subscription->status)}}  ?: ''">{{$subscription->status  ?: '-'}}</span>
                           </td>
                           <td>{{$subscription->sanctions_balance ?: '-'}}</td>
                     </tr>
                  @else
                      <tr><td>No Subscription Found</td></tr>
                  @endif
                  </tbody>
               </table>
            </div>
         </div>
      </div>

    </div>

</section>
@endsection
