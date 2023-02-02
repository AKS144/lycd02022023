<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <!-- CSS only -->
    <style>
        .shapedividers_com-384 {
            /* overflow:hidden; */
            position: relative;
        }

        .shapedividers_com-384::before {
            content: '';
            font-family: 'shape divider from ShapeDividers.com';
            position: absolute;
            z-index: 3;
            pointer-events: none;
            background-repeat: no-repeat;
            bottom: -0.1vw;
            left: -0.1vw;
            right: -0.1vw;
            top: -0.1vw;
            background-size: 100% 90px;
            background-position: 50% 0%;
            background-image: url('data:image/svg+xml;charset=utf8, <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 381 59.27" preserveAspectRatio="none"><g fill="%23f79533"><path d="M381 8.47L0 42.33V0h381z"/><path d="M381 33.87L0 59.27V0h381z" opacity=".66"/></g></svg>');
        }

        <blade media|%20(min-width%3A2100px)%7B%0D>.shapedividers_com-384::before {
            background-size: 100% calc(2vw + 90px);
        }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="padding-top: 50px ; padding-bottom:50px;">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 " style=" padding:32px;">

                <div class="shapedividers_com-384">

                </div>
                <br>
                <img class="text-center" style="    margin-left: auto;
                margin-right: auto;
                display: block;" src="https://lytaa.com/public/assets/logo/logo.png">
                <div class="row">
                    <div class="col-md-6">
                        <h5>To<br>
                            Naresh Shetti</h5>
                        <p>KONDIVITA VILLAGE, J. B. NAGAR, ANDHERI (EAST), MUMBAI - 400059</p>
                    </div>
                    <div class="col-md-6"></div>
                    <p>Lorem Ipsum <b>{{ $contract->user_name }}</b> is simply dummy text of the printing and typesetting
                        industry between <b>{{ $contract->artist_name }}</b> Lorem
                        Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                        of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum.</p>
                    <h4>Term and Conditions</h4>
                    <p>Lorem Ipsumis simply dummy text of the printing and typesetting
                        industry. Lorem
                        Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                        of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum.</p>
                    <p>Lorem Ipsumis simply dummy text of the printing and typesetting
                        industry. Lorem
                        Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                        of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum.</p>
                        
                        @php																											
							$products = App\Product::where('quotes_id','=',$contract->quotes_id)->get();
							$sum = $products->sum('price');								
							
						@endphp	

                    <table border="0" class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">S.No.</th>
							<th scope="col">Product</th>
							<th scope="col">Qty</th>
							<th scope="col">Unit Price</th>
							<th scope="col">Description</th>
							<th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($products->count() > 0)    
                            @foreach($products as $key => $products)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $products->product_name }}</td>
                                <td>{{ $products->qty }}</td>
                                <td>{{ $products->unit_price }}</td>
                                <td>{{ $products->description }}</td>
                                <td>{{ $products->price }}</td>
                            </tr>
                            @endforeach  
                        @endif 
                        </tbody>
                        <tr>	
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td style="font-size: medium">
								<b>Total</b>:<br>
							</td>
							<td style="font-size: medium">
								<strong>₹{{ $sum }}</strong>
							</td>
                        </tr>
                    </table>                  
                    
                    <p>Lorem Ipsumis simply dummy text of the printing and typesetting
                        industry. Lorem
                        Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                        of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum.</p>

                </div>
              
                <br>
                <br>
                <br>

                <div class="row">
                    <div class="col-6 text-center">

                    <img src="{{ asset('upload/'."$contract->artist_sign") ?? ''}}" width="150" height="150"> 	 <br>
                        <h6>
                            Artist signature</h6>
                    </div>
                    <div class="col-6 text-center">
                    <img src="{{ asset('upload/'."$contract->user_sign") ?? ''}}" width="150" height="150"> 	 <br>

                        <h6>Client signature</h6>
                    </div>
                </div>
                <br>
                <br>
                <div class="shapedividers_com-384">

                </div>
            </div>
            <div class="col-md-2">

            </div>

        </div>
    </div>

</body>

</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>