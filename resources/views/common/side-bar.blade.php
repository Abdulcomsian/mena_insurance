<div class="side-bar">
    <button class="open-sidebar"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
    <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
            <a href="{{url('subscription')}}" class="nav-link  {{url('subscription') == url()->current() ? 'active' : ''}}"  ><img src="assets/img/Icons/Icon feather-home - off.png" alt="" class="img-fluid"><span><i class="fa fa-money" aria-hidden="true"></i> My Packages</span> </a>
        </li>
        <li class="nav-item">
            <a href="{{url('account')}}" class="nav-link {{url('account') == url()->current() ? 'active' : ''}} my-project " > <img src="assets/img/Icons/Icon feather-search - off.png" alt="" class="img-fluid"><span><i class="fa fa-user" aria-hidden="true"></i> Account Setting</span> </a>
        </li>
        <li class="nav-item">
            <a href="{{url('history')}}" class="nav-link  {{url('history') == url()->current() ? 'active' : ''}}" > <img src="assets/img/Icons/Icon material-favorite-border - off.png" alt="" class="img-fluid"><span><i class="fa fa-history" aria-hidden="true"></i> Billing History</span> </a>
        </li>
        <li class="nav-item">
            <a href="{{url('payment')}}" class="nav-link  {{url('payment') == url()->current() ? 'active' : ''}}" > <img src="assets/img/Icons/Icon material-history - off.png" alt="" class="img-fluid"><span><i class="fa fa-id-card-o" aria-hidden="true"></i> Payment Method</span> </a>
        </li>
        <li class="nav-item">
            <a href="{{url('sanction-status-history')}}" class="nav-link  {{url('sanction-status-history') == url()->current() ? 'active' : ''}}" > <img src="assets/img/Icons/Icon material-history - off.png" alt="" class="img-fluid"><span><i class="fa fa-id-card-o" aria-hidden="true"></i> Sanctions History</span> </a>
        </li>
    </ul>
</div>
