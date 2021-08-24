<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-----<link href="style.css" rel="stylesheet">-->
    <title>Document</title>
    <style>
        @font-face {
            font-family: "myFirstFont";
            src: url("/public/fonts/Calibri.ttf")format("truetype");
        }
        body{
            font-family:"myFirstFont";
        }
        #healthform img{
            width: auto;
            height: 150px;
        }
        .entrytable{
            width: 100%;
        }
        .entrytable,.entrytable th,.entrytable td{
            border: 1px solid black;
            border-collapse: collapse;
        }

        table tr td input {
            border: none;
            border-bottom: 1px solid;
            width: 60%;
        }
        .displayFlex{
            display: flex;
        }
        table {
            width: 100%;
            max-width: 55%;
            margin: auto;
        }
        .hr{
            width: 100%;
            max-width: 100%;
            color: black;

        }
        h4{
            margin: 0px;
        }
        .footer{
            padding-top: 20px;
        }
        .footer p{
            color: gray;
        }
        .footer p a{
            color: blue;
            text-decoration: underline;
            padding-right: 5px;
            padding-left: 5px;
        }
        .footer p strong{
            color: black;
        }
        .footerh4{

        }

        span.width56{
            width: 100%;
            max-width: 100%;

        }
        span .width70{

            width: 100%;
        }
        table tr td input.width70{
            width: 100%;
        }
        table tr td input.width83{
            width: 100%;
        }
        table tr td input.width90{
            width: 100%;
        }
        table tr td input.width86{
            width: 100%;
        }
        table tr td input.width59{
            width: 100%;
        }
        table tr td input.width68{
            width: 100%;
        }
        table tr td input.width69{
            width: 100%;
        }
        table tr td input.width72{
            width: 100%;
        }
        table tr td input.width53{
            width: 100%;
        }
        table tr td input.width82{
            width: 100%;
        }
        .para{
            padding-left: 0px;
            margin-left: 0px
        }
        .paragra{
            padding-left: 0px;
            margin-left: 0px
        }

        #footersection{
            width: 100%;
            max-width: 100%;
            margin: auto;
        }
        .line{
            border-color: black;
            width: 100%;
            max-width: 55%;
        }
        .footer p span{
            font-size: 13px;
            padding-left: 10px;
            padding-right: 10px;

        }

    </style>
</head>
<body>
<section id="healthform">
    <div class="container">
        <center> <img src="assets/img/logo.png"></center>
        <center><h3>Invoice</h3></center>
        <center><h4>info@menainsurance.com</h4></center>
        <table>
            <thead>
                <tr>
                    <td style="vertical-align: top !important;">
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr>
                                    <td style="width:33%;"><h3 class=""> From:</h3></td>
                                    <td style="width:33%;"><h4 class=""><span>&nbsp;</span></h4></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr>
                                    <td style="width:33%;"><h4 class="">Company Name:  <span style="font-weight:400;">Mena Insurance</span></h4></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr>
                                    <td style="width:33%;"><h4 class="">Full Name:  <span style="font-weight:400;">Mena Insurance</span></h4></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr>
                                    <td style="width:33%;"><h4 class="">Email:  <span style="font-weight:400;">info@menainsurance.com</span></h4></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr>
                                    <td style="width:37%;"><h4 class="">Address#:  <span style="font-weight:400;">301, Business Venue Building, Umm Hurair Road, Oud Metha, Dubai, AE</span></h4></td>
                                </tr>
                            </table>
                        </center>
                    </td>
                    <td style="align-content: flex-end">
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr>
                                    <td style="width:33%;"><h3 class=""> To:</h3></td>
                                    <td style="width:33%;"><h4 class=""><span>&nbsp;</span></h4></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr>
                                    <td style="width:37%;"><h4 class="">Invoice #:  <span style="font-weight:400;">{{ $transaction->invoice_id ?: '' }}</span></h4></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr>
                                    <td style="width:33%;"><h4 class="">Company Name:  <span style="font-weight:400;">{{ \Illuminate\Support\Facades\Auth::user()->company_name ?: '-' }}</span></h4></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr>
                                    <td style="width:33%;"><h4 class="">Full Name:  <span style="font-weight:400;">{{ $transaction->billing_fname.' '.$transaction->billing_sname }}</span></h4></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr>
                                    <td style="width:33%;"><h4 class="">Email:  <span style="font-weight:400;">{{ $transaction->billing_email }}</span></h4></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr>
                                    <td style="width:37%;"><h4 class="">Address#:  <span style="font-weight:400;">{{ $transaction->billing_address_1 }}</span></h4></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr>
                                    <td style="width:37%;"><h4 class="">City:  <span style="font-weight:400;">{{ $transaction->billing_city }}</span></h4></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr style="margin:0px;padding:0px;border:1px solid #000;">
                                    <td style="width:37%;"><h4 class="">Card #:  <span style="font-weight:400;">{{ $transaction->card_first6 .'******'.  $transaction->card_last4 }}</span></h4></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <table style="table-layout: fixed ;width: 100% ;">
                                <tr style="margin:0px;padding:0px;border:1px solid #000;">
                                    <td style="width:37%;"><h4 class="">Card Type:  <span style="font-weight:400;">{{ $transaction->card_type }}</span></h4></td>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <table style="margin-bottom:20px; table-layout: fixed ;width: 100% ;">
                                <tr style="margin:0px;padding:0px;border:1px solid #000;">
                                    <td style="width:37%;"><h4 class="">Date:  <span style="font-weight:400;">{{ $transaction->created_at }}</span></h4></td>
                                </tr>
                            </table>
                        </center>
                    </td>
                </tr>
            </thead>
        </table>
        <center>
            <table class="entrytable">
                <tr>
                    <th>S.No</th>
                    <th>Package</th>
                    <th>Sanctions</th>
                    <th>Status</th>
                    <th>Package Amount</th>
                    <th>VAT (5%)</th>
                    <th>Total</th>
                </tr>
                <tr style="text-align: center">
                    <td>1</td>
                    <td>{{$transaction->package_name ?: '-'}}</td>
                    <td>{{$transaction->package_sanctions ?: '-'}}</td>
                    <td>{{$transaction->status ?: '-'}}</td>
                    <td>{{$transaction->package_amount .' AED' ?: '-'}}</td>
                    <td>{{$transaction->vat_amount .' AED' ?: '-'}}</td>
                    <td>{{$transaction->total_amount .' AED'?: '-'}}</td>
                </tr>
            </table>

        </center>
        <center>

            <!--Photos goes here-->
            <footer style="position: fixed; bottom: 0px; left: 0px; right: 0px; height: 50px;">
                <!--<section id="footersection">-->
                <!--<div class="footer">-->
                <div class="row">
                    <p>
                        <span> <strong>Address</strong>301, Business Venue Building, Umm Hurair Road, Oud Metha, Dubai, AE</span> <span> <strong>T:</strong> 0123456789</span>  <span> <strong>F:</strong> 0123456789 </span>    <span><strong>M:</strong> 0123456789 </span>
                    </p>
                    <p>
                        <span><strong>E</strong>:<a>info@menainsurance.com</a></span><span> <strong>W:</strong><a>{{Request::gethost()}}</a></span><span> <strong>Company Registration Number:</strong> 0123456</span>
                    </p>
                </div>
                <!--</div>-->
                <!--</section>-->
            </footer>
    </div>
</section>
</body>
</html>
