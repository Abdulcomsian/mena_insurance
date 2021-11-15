@extends('common.footer')
@extends('common.footer-script')
@extends('common.header')
@extends('common.navbar')
@section('css')
    <style>
        #telr {
            width: 100%;
            min-width: 600px;
            height: 600px;
            frameborder: 0;
            border: none;
        }
    </style>
@endsection
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
                                <td>{{$package->name ?: '-'}}</td>
                                <td>{{$package->sanctions ? $package->sanctions. ' Sanctions Search' : '-'}}</td>
                                <td>{{$package->price .' AED' ?: '-'}}</td>
                            </tr>
                            <tr colspan="3" >
                                <td style="border:none;"></td>
                                <td style="border:none;"></td>
                                <td style="border:none;float:right;">
                                    <span style=""><img  style="width:200px;" src="{{asset("assets/img/creditcard2.png")}}" alt="" class="img-fluid" /></span>
                                </td>
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
                                <span>{{$package->price ? $package->price.' AED' : '-'}}</span>
                            </li>
                            <li>
                                <span>VAT (5%):</span>
                                <span>{{$vat ? $vat.' AED' : '-'}}</span>
                            </li>
                            <li class="totalDiv">
                                <span>Total:</span>
                                <span>{{ $total ? $total.' AED' : '-'}}</span>
                            </li>
                        </ul>

                        <p>
                            <input type="checkbox" id="privacy">
                            I Agree to <a href="/terms-condition">Term & Condition Privacy,</a>
                            <a href="/refund-policy">Privacy Settings and Refund Policy</a>
                        </p>
                        <p class="checkbox-validation">
                            I Agree to the Terms & Conditions, Privacy Settings and Refund Policy
                        </p>
                        <button id="checkout">Proceed to Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" data-keyboard="false" data-backdrop="static" id="payment_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe id="telr" sandbox="allow-forms allow-modals allow-popups-to-escape-sandbox allow-popups allow-scripts allow-top-navigation allow-same-origin" src=""></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.checkbox-validation').hide();
        $('#checkout').click(function () {
            console.log('Here in click function');
            if($('#privacy').prop("checked") == true){
                $('.checkbox-validation').hide();
                //$(this).attr('disabled','true');
                $.ajax({
                    url: "{{route('transaction.create',encrypt($package->id))}}",
                    method: 'GET',
                    // data: {query: query, country: country},
                    dataType: 'json',
                    success: function (data) {
                        // console.log(data);
                        $(this).removeAttr('disabled');
                        if(data.success == true) {
                            $('#telr').attr('src',data.order_url);
                            $('#payment_modal').modal('show');
                            $(this).removeAttr('disabled');
                        }
                        else{
                            alert('Something went wrong, try again');
                            window.location.reload();
                        }
                    },
                    error:function (data){
                        console.log(data);
                        $(this).removeAttr('disabled');

                        // alert('errorr in ajax. Server is busy,try again');
                        window.location.reload();
                    }
                });
            }else {
                $('.checkbox-validation').show();
                console.log('Unchecked privacy');
            }

        });
    </script>
@endsection
