@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@extends('common.navbar')
<style>
    .pagination-div{
        display: flex;
        justify-content: center;
        margin-top: 17px;
    }
</style>
@section('content')
<section id="search-section" class="pad-100">
    <div class="container">
        <div class="search-result">
            <form action="{{route('companydetail.search.result')}}" id="form">
                <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="filterDiv">
                                <h3>Filter</h3>
                                <ul>
                                    <li class="companyType">Company Type <a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                        <div class="companyDropDwown" @isset($request['company_type']) style="display: block" @endisset>
                                                <ul>
                                                    <li>
                                                        @foreach($companies_types->unique('company_type') as $company_type)
                                                            <div class="inputDiv">
                                                                <p>{{$company_type->company_type}}</p>
                                                                <input  @isset($request['company_type']) {{ in_array($company_type->company_type,$request['company_type']) ? 'checked' : '' }} @endisset type="checkbox" name="company_type[]" class="search" value="{{$company_type->company_type}}">
                                                            </div>
                                                        @endforeach
                                                    </li>
                                                </ul>
                                        </div>
                                    </li>
                                    <li class="geographyType">Geography <a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                        <div class="geographyDropDwown" @isset($request['country']) style="display: block" @endisset>
                                            <ul>
                                                <li>
                                                    @foreach($countries as $item)
                                                        <div class="inputDiv">
                                                            <p>{{$item->country_name}}</p>
                                                            <input type="checkbox" @isset($request['country']) {{ in_array($item->country_name,$request['country']) ? 'checked' : '' }} @endisset name="country[]" class="search" value="{{$item->country_name}}">
                                                        </div>
                                                    @endforeach
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="companies-search-div">
                                <div class="searchForm">
                                    <div class="inputDiv">
                                        <input type="text" name="company_name" value="{{$request['company_name'] ?? ''}}" placeholder="Search for an Insurance Organization ">
                                        <button class="search">Search</button>
                                    </div>
                                </div>
                                <div class="breadcrum">
                                    <a href="/" class="backBtn"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
                                    <span>Search result</span>
                                </div>
                                <div class="tabDiv">
                                    <ul class="nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link @if(str_contains(url()->full(),'people') == false) active @endif" data-toggle="pill" href="#Companies"><span>Companies</span> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#People" class="nav-link my-project @if(str_contains(url()->full(),'people') == true) active @endif" data-toggle="pill"><span>People</span> </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="right-side commonDiv">
                                <div class="tab-content">
                                    <div id="Companies" class="home container tab-pane @if(str_contains(url()->full(),'people') == false) active @endif">
                                        @if(count($companies) > 0)
                                            @foreach($companies as $item)
                                            <div class="company-div">
                                                <a href="company_detail/{{$item->id}}">
                                                    <h4>{{$item->company_name}}</h4>
                                                    <p>{{$item->company_website ? $item->company_website . ' • ' : ''}}{{$item->company_type ? $item->company_type . ' • ' : '' }}{{$item->country ? $item->country . ' • ' : '' }}</p>
                                                </a>
                                            </div>
                                            @endforeach
                                            <div class="pagination-div">
                                                {{$companies->links()}}
                                            </div>
                                        @else
                                           <p>No Result Found</p>
                                        @endif
                                    </div>

                                    <div id="People" class="home container tab-pane fade @if(str_contains(url()->full(),'people') == true) active show @endif">
                                        @if(count($peoples) > 0 )
                                            @foreach($peoples as $people)
                                                <div class="company-div">
                                                    <a href="company_detail/{{$people->company_id}}">
                                                        <h4>{{trim($people->name)}}</h4>
                                                        <p><b>{{$people->designation}}</b> <i> {{' at '. $people->company_name }} </i> <b>{{ $people->country}}</b></p>
                                                    </a>
                                                </div>
                                            @endforeach
                                            <div class="pagination-div">
                                                {{$peoples->links()}}
                                            </div>
                                        @else
                                            <p>No Result Found</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@section('script')
    <script type="text/javascript">
        $(function(){
            $('.search').on('change',function(){
                $('#form').submit();
            });
        });
    </script>

@endsection
