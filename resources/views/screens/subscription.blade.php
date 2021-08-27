@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@extends('common.navbar')

@section('content')
<section id="subscription-section" class="common-section">
    @include('common.side-bar')

    <div class="tab-content main-admin-content">
      <div id="subscription" class="home container-fluid tab-pane active">
         <div class="content-div">
            <button class="open-sidebar"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <div class="headerBtn">
               <h3>My Packages</h3>
               <a href="/#our-packages"><button>Purchase Package</button></a>
            </div>
             <div class="table-div table-responsive">
                 <table class="display">
                     <thead>
                     <tr>
                         <th>Consumed Sanctions Search Count</th>
                         <th>Balanced Sanctions Search Count</th>
                         <th>Total Sanctions</th>
                     </tr>
                     </thead>
                     <tbody>
                     @if(isset($subscription))
                         <tr>
                             <td>{{$subscription->used_sanctions ?: '0'}}</td>
                             <td>{{$subscription->remaining_sanctions ?: '0'}}</td>
                             <td>{{$subscription->total_sanctions ?: '0'}}</td>
                         </tr>
                     @else
                         <tr class="odd"><td valign="top" colspan="8" class="text-center dataTables_empty">No data available in table</td></tr>
                     @endif
                     </tbody>
                 </table>
             </div>
             <hr>
            <div class="table-div table-responsive">
               <table id="subscription_table" class="display">
                  <thead>
                     <tr>
                        <th>Invoice #</th>
                        <th>Date</th>
                        <th>Package Name</th>
                        <th>Package Price</th>
                        <th>VAT</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Sanctions</th>
                        <th>Card #</th>
                        <th>Card Type</th>
                     </tr>
                  </thead>
                  <tbody>
                  @if(isset($transactions))
                      @foreach($transactions as $item)
                     <tr>
                           <td>{{$item->invoice_id  ?: '-'}}</td>
                           <td>{{$item->created_at  ?: '-'}}</td>
                           <td>{{$item->package_name ?: '-'}}</td>
                           <td>{{$item->package_amount .' AED' ?: '-'}}</td>
                           <td>{{$item->vat_amount .' AED' ?: '-'}}</td>
                           <td>{{$item->total_amount .' AED' ?: '-'}}</td>
                           <td>
                                <span class="{{strtolower($item->status)}}  ?: ''">{{$item->status  ?: '-'}}</span>
                           </td>
                         <td>{{$item->package_sanctions ?: '-'}}</td>
                         <td>{{$item->card_first6 .'******'. $item->card_last4}}</td>
                         <td>{{$item->card_type ?: '-'}}</td>
                     </tr>
                      @endforeach
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
