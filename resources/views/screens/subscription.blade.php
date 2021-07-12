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
                  @foreach ($subscription as $item)
                     <tr>
                           <td>{{$item->id}}</td>
                           <td>{{date("d-M-Y",strtotime($item->date_created))}}</td>
                           <td>{{$item->package_name}}</td>
                           <td>{{$item->amount}}</td>
                           <td>
                              @if($item->status==1)
                                 <span class="approved">Approved</span>
                              @elseif($item->status==2)
                                 <span class="pending">Pending</span>
                              @elseif($item->status==3)
                                 <span class="expired">Expired</span>
                              @endif
                           </td>
                           <td>{{date("d-M-Y",strtotime($item->expiry_date))}}</td>
                           <td>{{$item->balance}}</td>
                     </tr>
                     @endforeach
                     
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      
    </div>
   
</section>
@endsection