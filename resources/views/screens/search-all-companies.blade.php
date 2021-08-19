@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@extends('common.navbar')

@section('content')
<section id="search-section" class="pad-100">
    <div class="container">
        <div class="search-result">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="filterDiv">
                        <h3>Filter</h3>
                        <ul>
                            <li class="companyType">Company Type <a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                <div class="companyDropDwown">
                                    <form action="">
                                        <ul>
                                            <li>
                                                <div class="inputDiv">
                                                    <p>Joint Stock Company</p>
                                                    <input type="checkbox" name="Joint Stock Company" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>Public Joint Stock Company</p>
                                                    <input type="checkbox" name="Public Joint Stock Company" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>Societe anonyme  libanaise (SAL)/ Joint Stock Company</p>
                                                    <input type="checkbox" name="Societe anonyme  libanaise (SAL)/ Joint Stock Company" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>Saudi joint stock Company</p>
                                                    <input type="checkbox" name="Saudi joint stock Company" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>Private Company</p>
                                                    <input type="checkbox" name="Private Company" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>Foreign Company Branch</p>
                                                    <input type="checkbox" name="Foreign Company Branch" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>Foreign Company Branch</p>
                                                    <input type="checkbox" name="Foreign Company Branch" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>NATIONAL COMPANY</p>
                                                    <input type="checkbox" name="NATIONAL COMPANY" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>PJSC</p>
                                                    <input type="checkbox" name="PJSC" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>Locally Incorporated Insurance Firm</p>
                                                    <input type="checkbox" name="Locally Incorporated Insurance Firm" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>A Public Shareholding Limited Company</p>
                                                    <input type="checkbox" name="A Public Shareholding Limited Company" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>Private Sector Company</p>
                                                    <input type="checkbox" name="Private Sector Company" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>Public Shareholding Company</p>
                                                    <input type="checkbox" name="Public Shareholding Company" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>Branch Office</p>
                                                    <input type="checkbox" name="Branch Office" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>Private  Company</p>
                                                    <input type="checkbox" name="Private  Company" id="">
                                                </div>
                                                <div class="inputDiv">
                                                    <p>PUBLIC JOINT STOCK COMPANY</p>
                                                    <input type="checkbox" name="PUBLIC JOINT STOCK COMPANY" id="">
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </li>
                            <li class="geographyType">Geography <a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                <div class="geographyDropDwown" @if(count($companies) > 0) style="display: block" @endif>
                                    <form action="{{route('companydetail.search.result')}}" id="form">
                                        <ul>
                                            <li>
                                                @foreach($countries as $item)
                                                    <div class="inputDiv">
                                                        <p>{{$item->country_name}}</p>
                                                        <input type="checkbox" @isset($request['country']) {{ in_array($item->country_name,$request['country']) ? 'checked' : '' }} @endisset name="country[]" class="checkbox" value="{{$item->country_name}}">
                                                    </div>
                                                @endforeach
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="companies-search-div">
                        <form action="" class="searchForm">
                            <div class="inputDiv">
                                <input type="text" placeholder="Search for an Insurance Organization or Key Executives">
                                <button>Search</button>
                            </div>
                        </form>
                        <div class="breadcrum">
                            <a href="/" class="backBtn"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
                            <span>Search result</span>
                        </div>
                        <div class="tabDiv">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#Companies"><span>Companies</span> </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#People" class="nav-link my-project" data-toggle="pill"><span>People</span> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-side commonDiv">
                        <div class="tab-content">
                            <div id="Companies" class="home container tab-pane active">
                                @if(count($companies) > 0 )
                                    @foreach($companies as $item)
                                    <div class="company-div">
                                        <a href="company_detail/{{$item->id}}">
                                            <h4>{{$item->company_name}}</h4>
                                            <p>{{$item->company_website ? $item->company_website . ' • ' : ''}}{{$item->company_type ? $item->company_type . ' • ' : '' }}{{$item->country ? $item->country . ' • ' : '' }}</p>
                                        </a>
                                    </div>
                                    @endforeach
                                @else
                                   <p>No Result Found</p>
                                @endif
                            </div>
                            <div id="People" class="home container tab-pane fade">
                            <div class="company-div">
                                        <a href="">
                                            <h4>Yemen General Insurance Co. (SYC)</h4>
                                            <p>http://www.yginsurance.com/ • Joint Stock Company • YEMEN</p>
                                        </a>
                                    </div>
                                    <div class="company-div">
                                        <a href="">
                                            <h4>Yemen General Insurance Co. (SYC)</h4>
                                            <p>http://www.yginsurance.com/ • Joint Stock Company • YEMEN</p>
                                        </a>
                                    </div>
                                    <div class="company-div">
                                        <a href="">
                                            <h4>Yemen General Insurance Co. (SYC)</h4>
                                            <p>http://www.yginsurance.com/ • Joint Stock Company • YEMEN</p>
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
    <script type="text/javascript">
        $(function(){
            $('.checkbox').on('change',function(){
                $('#form').submit();
            });
        });
    </script>
@endsection
