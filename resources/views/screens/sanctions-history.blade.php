@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@extends('common.navbar')

@section('content')
<section id="subscription-section" class="common-section">
    @include('common.side-bar')

    <div class="tab-content main-admin-content">>
      <div id="addCard" class="home container-fluid tab-pane active">
         <div class="content-div">
            <button class="open-sidebar"><i class="fa fa-bars" aria-hidden="true"></i></button>
               <h3>Sanctions History</h3>
             <div class="table-div table-responsive">
                 <table id="subscription_table" class="display">
                     <thead>
                        <tr>
                          <th>Company</th>
                          <th>Sanctions_type</th>
                          <th>Status</th>
                          <th>Consumed Sanctions Balance</th>
                        </tr>
                     </thead>
                     <tbody>
                         @foreach($sanctions as $sanction)
                            <tr>
                                <td><a href="company_detail/{{$sanction->company['id']}}">{{$sanction->company['company_name']}}</a></td>
                                <td>{{$sanction->sanctions_type}}</td>
                                <td>
                                    @if($sanction->status == \App\Utils\SanctionRequestStatus::Completed)
                                        <span class="badge badge-success">{{$sanction->status}}</span>
                                    @else
                                        <span class="badge badge-danger">{{$sanction->status}}</span>
                                    @endif
                                </td>
                                <td>{{$sanction->sanctions}}</td>
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
