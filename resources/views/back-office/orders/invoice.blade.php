<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Invoice - {{$order->title}}</title>
    </head>

    <style type="text/css">
        body{
            font-family: 'Roboto Condensed', sans-serif;
        }
        .m-0{
            margin: 0px;
        }
        .p-0{
            padding: 0px;
        }
        .pt-5{
            padding-top:5px;
        }
        .mt-10{
            margin-top:10px;
        }
        .mt-100{
            margin-top:100px;
        }
        .text-center{
            text-align:center !important;
        }
        .w-100{
            width: 100%;
        }
        .w-50{
            width:50%;
        }
        .w-85{
            width:85%;
        }
        .w-15{
            width:15%;
        }
        .logo img{
            width:200px;
            height:60px;
        }
        .gray-color{
            color:#5D5D5D;
        }
        .text-bold{
            font-weight: bold;
        }
        .border{
            border:1px solid black;
        }
        table tr,th,td{
            border: 1px solid #d2d2d2;
            border-collapse:collapse;
            padding:7px 8px;
        }
        table tr th{
            background: #F4F4F4;
            font-size:15px;
        }
        table tr td{
            font-size:13px;
        }
        table{
            border-collapse:collapse;
        }
        .box-text p{
            line-height:10px;
        }
        .float-left{
            float:left;
        }
        .total-part{
            font-size:16px;
            line-height:12px;
        }
        .total-right p{
            padding-right:20px;
        }
    </style>

    <body>
        <div class="head-title">
            <h1 class="text-center m-0 p-0">Invoice</h1>
        </div>
        <div class="add-detail mt-100">
            <div class="w-50 float-left mt-10">
                <p class="m-0 pt-5 text-bold w-100">Invoice Id - <span class="gray-color">#{{$order->id}}</span></p>
                <p class="m-0 pt-5 text-bold w-100">Order Name - <span class="gray-color">{{$order->title}}</span></p>
                <p class="m-0 pt-5 text-bold w-100">Order Date - <span class="gray-color">{{date('d-m-Y', strtotime($order->created_at))}}</span></p>
            </div>
            {{-- <div class="w-50 float-left logo mt-10" style="font-size: 50px; font-weight: 700;">
                Artlab
            </div> --}}
            <div style="clear: both;"></div>
        </div>
        <div class="table-section bill-tbl w-100 mt-10">
            <table class="table w-100 mt-10">
                <tr>
                    <th class="w-50">From</th>
                    <th class="w-50">To</th>
                </tr>
                <tr>
                    <td>
                        <div class="box-text">
                            <p>{{$user->name}}</p>
                            <p>Artlab</p>
                            <p>Email: {{$user->email}}</p>
                        </div>
                    </td>
                    <td>
                        <div class="box-text">
                            <p>Client:</p>
                            <p>{{$client->name}}</p>
                            <p>Email: {{$client->email}}</p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="table-section bill-tbl w-100 mt-10">
            <table class="table w-100 mt-10">
                <tr>
                    <th class="w-50">Payment Method</th>
                    <th class="w-50">Shipping Method</th>
                </tr>
                <tr>
                    <td>Cash On Delivery</td>
                    <td>Free Shipping - Free Shipping</td>
                </tr>
            </table>
        </div>
        <div class="table-section bill-tbl w-100 mt-10">
            <table class="table w-100 mt-10">
                <tr>
                    <th class="w-50">SKU</th>
                    <th class="w-50">Artwork</th>
                    <th class="w-50">Price</th>
                    <th class="w-50">Qty</th>

                    <th class="w-50">Grand Total</th>
                </tr>
                <tr align="center">
                    <td>M101</td>
                    <td>{{$order->title}}</td>
                    <td>${{$order->totalAmount}}</td>
                    <td>1</td>
                    <td>${{$order->totalAmount}}</td>
                </tr>
                <tr>
                    <td colspan="5">
                        <div class="total-part">
                            <div class="total-left w-85 float-left" align="right">
                                <p>Grand Total</p>
                                <p>Tax (18%)</p>
                                <p>Total Payable</p>
                            </div>
                            <div class="total-right w-15 float-left text-bold" align="right">
                                <p>${{$order->totalAmount}}</p>
                                <p>${{$order->totalAmount / 100 * 18}}</p>
                                <p>${{$order->totalAmount + $order->totalAmount / 100 * 18}}</p>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
