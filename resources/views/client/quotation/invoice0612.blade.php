
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
.text-center{
    text-align:center !important;
}
.w-100{
    width: 100%;
}
.w-50{
    width:50%;   
}
.w-30{
    width:30%;   
}
.w-85{
    width:85%;   
}
.w-15{
    width:15%;   
}
.logo img{
    width:45px;
    height:45px;
    padding-top:30px;
}
.logo span{
    margin-left:8px;
    top:19px;
    position: absolute;
    font-weight: bold;
    font-size:25px;
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
@php
    $contract = App\Contract::find($contract->id);
    $quotes = App\Models\Quotes::where('contract_id','=',$contract->id)->first();
    $products = App\Product::where('quotes_id','=',$quotes->id)->get();
    $sum = $products->sum('price');
    $tax = $sum * 0;
    $total = $sum + $tax;         
@endphp

<body>
<div class="head-title">
<h1 class="text-center m-0 p-0">Lytaa</h1> 
</div>
<div class="add-detail mt-10">
<div class="w-50 float-left mt-10">
    <p class="m-0 pt-5 text-bold w-100">Invoice Id - <span class="gray-color">LT/0{{ $quotes->id }}#</span></p>
    <p class="m-0 pt-5 text-bold w-100">Order Id - <span class="gray-color">162695CDFS</span></p>
    <p class="m-0 pt-5 text-bold w-100">Order Date - <span class="gray-color">{{ \Carbon\Carbon::now()->format('m/d/Y') }}</span></p>

</div>
<div class="w-50 float-left logo mt-10">
   
</div>
<div style="clear: both;"></div>
</div>
<div class="table-section bill-tbl w-100 mt-10">
<table class="table w-100 mt-10">
    <tr>
        <th class="w-50">From</th>
        <th class="w-50">To</th>
    </tr>
    <tr>
        <td align="center">
            <div class="box-text">
                <p>{{ $quotes->artist_name }}</p>                             
            </div>
        </td>
        <td align="center">
            <div class="box-text">
                <p>{{ $quotes->user_name }}</p>                   
            </div>
        </td>
    </tr>
</table>
</div>
<div class="table-section bill-tbl w-100 mt-10">
<table class="table w-100 mt-10">
    <tr>
        <th class="w-50">Payment Method</th>           
    </tr>
    <tr>
        <td align="center">Cash On Delivery</td>           
    </tr>
</table>
</div>
<div class="table-section bill-tbl w-100 mt-10">
<table class="table w-100 mt-10">
    <tr>   
        <th class="w-5">S.No.</th>
        <th class="w-15">Product Name</th>
        <th class="w-30">Description</th>
        <th class="w-15">Price</th>           
        <th class="w-15">Quantity</th>    
        <th class="w-15">Grand Total</th>
    </tr>
    @foreach($products as $key => $products)
        <tr align="center">
            <td>{{ ++$key }}</td>
            <td>{{ $products->product_name }}</td>
            <td>{{ $products->description }}</td>
            <td>₹{{ $products->unit_price }}/-</td>
            <td>{{ $products->qty }}</td>           
            <td>₹{{ $products->price }}/-</td>
        </tr>
    @endforeach
    <tr>
        <td colspan="7">
            <div class="total-part">
                <div class="total-right w-85 float-left" align="right">
                    <p>Sub Total:</p>
                    <p>Tax (0%):</p>
                    <p>Total Payable:</p>
                </div>
                <div class="total-left w-75 float-left text-bold" align="right">
                    <p>₹{{ $sum }}/-</p>
                    <p>₹{{ $tax }}/-</p>
                    <p>₹{{ $total }}/-</p>
                </div>
                <div style="clear: both;"></div>
            </div> 
        </td>
    </tr>
    <!-- <tr>
        <td></td>
        <td></td>
        <td></td>
        <td class="w-15" align="center"><b>Sub-total</b></td>
        <td align="center">₹{{ $sum }}/-</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td class="w-15" align="center"><b>Tax</b></td>
        <td align="center">₹{{ $tax }}/-</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td class="w-15" align="center"><b>Total</b></td>
        <td align="center">₹{{ $total }}/-</td>
    </tr> -->

</table>
</div>

<!-- <a href="{{ route('invoice.download',['download'=>'pdf']) }}">Download PDF</a> -->
<!-- <a href="{{ route('invoice.download')}}">Download</a> -->
<a href="{{ route('invoice.download',$contract->id) }}">Download PDF</a>



