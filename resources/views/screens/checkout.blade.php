@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@extends('common.navbar')
@section('content')
<section id="checkout_banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2>CheckOut</h2>
            </div>
        </div>
    </div>
</section>
<section id="checkout_detail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="product-detil">
                    <h2>Package Details</h2>
                    <table>
                        <thead>
                            <th>Package</th>
                            <th>Package Size</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Silver</td>
                                <td>10 Sanctions Search</td>
                                <td>AED 100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="summary-detil">
                    <h2>Summary</h2>
                    <ul>
                        <li>
                            <p>1 product</p>
                        </li>
                        <li>
                            <span>Product Total:</span>
                            <span>AED 100</span>
                        </li>
                        <li>
                            <span>Delivery:</span>
                            <span>FREE</span>
                        </li>
                        <li class="totalDiv">
                            <span>Total:</span>
                            <span>AED 100</span>
                        </li>
                    </ul>
                    <a href="">
                        <button>Proceed to Checkout</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection