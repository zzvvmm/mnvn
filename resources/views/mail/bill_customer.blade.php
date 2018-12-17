<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>HapoSoft</title>
   <link rel="shortcut icon" href="http://mynghevietnam.vn/wp-content/uploads/2016/05/logo-mnvn1.jpg" type="image/png" />
   <style type="text/css">
       .header .left{ float: left; width: 280px; }
       .header .left p{ text-align: center; }
       .logo{ padding-top: 15px; margin-left: 150px; width: 200px; }
       .title{text-align: center; font-size: 30px;}
       .vacation{ padding-top: 30px; }
       .vacation p{ padding-left: 15px;}
       .sign{ width: 300px; padding-left: 350px; padding-top: 50px; padding-bottom: 50px;}
       .sign p{text-align: center;}   
   </style>
</head>
<body>
<div class="wrapper">
   <div class="header">
       <div class="left">

       </div>
       <div class="right">
           <img src="http://mynghevietnam.vn/wp-content/uploads/2016/05/logo-mnvn1.jpg"	 class="logo">
       </div>
   </div>
   <div class="text-center">
		<p class="title">Đơn hàng từ <a href="http://mynghevietnam.vn"><i>mynghevietnam.vn</i></p>
		<p>Kính chào quý khách !! </p>
		<p><u>Chúng tôi gửi mail này để xác nhận đơn hàng quý khách vừa đặt mua tại website : <a href="http://mynghevietnam.vn"><i>mynghevietnam.vn</i></u></p>
		<h3><b>Thông tin đơn hàng</b></h3>
		<br/>
		<div class="table-responsive">
				<!-- TABLE START -->
			<table class="table table-bordered" id="cart-summary">
				<!-- TABLE HEADER START -->
				<thead>
					<tr>
						<th class="cart-description">Tên</th>
						<th class="cart-unit text-right">Giá</th>
						<th class="cart_quantity text-center">Số lượng</th>
						<th class="cart-total text-right">Thành tiền</th>
					</tr>
				</thead>
				@foreach($product_cart as $product)
				{{-- {{ dd($product)}} --}}
					<tbody>	
						<!-- SINGLE CART_ITEM START -->
						<tr>
							<td class="cart-description">
							<p class="product-name">{{ $product['item']['name'] }}</p>
							</td>
							<td class="cart-unit">
								<ul class="price text-right">
								<li class="price">{{ number_format($product['item']['price']) }} đồng</li>
								</ul>
							</td>
							<td class="cart_quantity text-center">
									<a>{{ $product['qty'] }}</a>
								</div>
							</td>
							<td class="cart-total">
								<span class="price">{{ number_format($product['price']) }} đồng</span>
							</td>
						</tr>    
					</tbody>
				@endforeach	
					<tfoot>										
						<tr class="cart-total-price">
							<td class="cart_voucher" colspan="2" rowspan="0"></td>
							<td class="text-right" colspan="2"><b>Tổng {{ Session('cart')->totalQty }} sản phẩm</b></td>
							<td class="text-right" colspan="2">{{number_format(Session('cart')->totalPrice)}} đồng</td>
						</tr>
					</tfoot>
				<!-- TABLE FOOTER END -->									
			</table>
			<!-- TABLE END -->
		</div>
</div>
</body>
</html>
