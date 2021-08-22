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
                  <a class="nav-link active"  href="{{url('subscription')}}"><img src="assets/img/Icons/Icon feather-home - off.png" alt="" class="img-fluid"><span><i class="fa fa-money" aria-hidden="true"></i> My Packages</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('account')}}" class="nav-link my-project" > <img src="assets/img/Icons/Icon feather-search - off.png" alt="" class="img-fluid"><span><i class="fa fa-user" aria-hidden="true"></i> Account Setting</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('history')}}" class="nav-link" > <img src="assets/img/Icons/Icon material-favorite-border - off.png" alt="" class="img-fluid"><span><i class="fa fa-history" aria-hidden="true"></i> Billing History</span> </a>
               </li>
               <li class="nav-item">
                  <a href="{{url('payment')}}" class="nav-link" > <img src="assets/img/Icons/Icon material-history - off.png" alt="" class="img-fluid"><span><i class="fa fa-id-card-o" aria-hidden="true"></i> Payment Method</span> </a>
               </li>
            </ul>
    </div>
    <div class="tab-content main-admin-content">
      <div id="subscription" class="home container-fluid tab-pane active">
         <div class="content-div">
            <button class="open-sidebar"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <div class="headerBtn">
               <h3>My Packages</h3>
               <a href="/"><button>Purchase Package</button></a>
            </div>

            <div class="table-div table-responsive">
               <table id="subscription_table" class="display">
                  <thead>
                     <tr>
                           <th>S.No</th>
                           <th>Date</th>
                           <th>Package Name</th>
                           <th>Amount</th>
                           <th>Status</th>
                           <th>Used Sanctions</th>
                           <th>Remaining Sanctions</th>
                           <th>Total Sanctions</th>
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
                         <td>{{$subscription->used_sanctions ?: '0'}}</td>
                         <td>{{$subscription->remaining_sanctions ?: '0'}}</td>
                         <td>{{$subscription->total_sanctions ?: '0'}}</td>
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
