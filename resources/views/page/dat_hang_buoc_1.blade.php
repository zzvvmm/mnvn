@extends('master')
@section('title', 'Kiểm tra giỏ hàng')
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ<span> <i class="fa fa-caret-right"> </i> </span></a>
                    <span><i></i></span>
                    <a href="{{ route('dat-hang') }}">&nbsp Kiểm tra giỏ hàng &nbsp</a>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
            @if( Session::has('cart') )
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- SHOPPING-CART SUMMARY START -->
                        <h2 class="page-title">Thông tin giỏ hàng <span class="shop-pro-item">Giỏ hàng của quý khách đang có : {{Session('cart')->totalQty}} sản phẩm</span></h2>
                        <!-- SHOPPING-CART SUMMARY END -->
                    </div>	
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- SHOPING-CART-MENU START -->
                        <div class="shoping-cart-menu">
                            <ul class="step">
                                <li class="step-current first">
                                    <span>01. Kiểm tra giỏ hàng</span>
                                </li>
                                <li class="step-todo second">
                                    <span>02. Thông tin khách hàng</span>
                                </li>
                                <li class="step-todo third">
                                    <span>03. Thanh toán</span>
                                </li>
                            </ul>									
                        </div>
                        <!-- SHOPING-CART-MENU END -->
                        <!-- CART TABLE_BLOCK START -->
                        <div class="table-responsive">
                            <!-- TABLE START -->
                            <table class="table table-bordered" id="cart-summary">
                                <!-- TABLE HEADER START -->
                                <thead>
                                    <tr>
                                        <th class="cart-product">Ảnh</th>
                                        <th class="cart-description">Tên</th>
                                        <th class="cart-unit text-right">Giá</th>
                                        <th class="cart_quantity text-center">Số lượng</th>
                                        <th class="cart-delete">&nbsp;</th>
                                        <th class="cart-total text-right">Thành tiền</th>
                                    </tr>
                                </thead>
                                @foreach($product_cart as $product)
                                {{-- {{ dd($product)}} --}}
                                    <tbody>	
                                        <!-- SINGLE CART_ITEM START -->
                                        <tr>
                                            <td class="cart-product">
                                                <a href="{{ route('chi-tiet-san-pham', $product['item']['slug']) }}"><img alt="image" src="source/img/product/$product['item']['avatar']"></a>
                                            </td>
                                            <td class="cart-description">
                                            <p class="product-name"><a href="{{ route('chi-tiet-san-pham', $product['item']['slug']) }}">{{ $product['item']['name'] }}</a></p>
                                            </td>
                                            <td class="cart-unit">
                                                <ul class="price text-right">
                                                <li class="price">{{ number_format($product['item']['price']) }} đồng</li>
                                                </ul>
                                            </td>
                                            <td class="cart_quantity text-center">
                                                {{-- <div class="cart-plus-minus-button"> --}}
                                                    {{-- @if($product['qty']!=1) --}}
                                                    <a href="{{ route('xoa-mot-san-pham', $product['item']['id']) }}" title="Xóa 1 sản phẩm khỏi giỏ hàng"><i class="fa fa-minus"></i></a>
                                                    {{-- @endif --}}
                                                    <a>{{ $product['qty'] }}</a>
                                                    <a href="{{ route('them-gio-hang', $product['item']['id']) }}" title="Thêm 1 sản phẩm vào giỏ hàng"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </td>
                                            <td class="cart-delete text-center">
                                                <span>
                                                    <a href="{{ route('xoa-gio-hang', $product['item']['id']) }}" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                                                </span>
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
                        <!-- CART TABLE_BLOCK END -->
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- RETURNE-CONTINUE-SHOP START -->
                        <div class="returne-continue-shop">
                            <a href="{{ route('trang-chu') }}" class="continueshoping"><i class="fa fa-chevron-left"></i>Quay lại mua sắm</a>
                            <a href="{{ route('step2') }}" class="procedtocheckout">Điền thông tin khách hàng<i class="fa fa-chevron-right"></i></a>
                        </div>	
                        <!-- RETURNE-CONTINUE-SHOP END -->						
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<section class="brand-client-area">
    <div class="container">
        <div class="row">
            <!-- BRAND-CLIENT-ROW START -->
            <div class="brand-client-row">
                <div class="center-title-area">
                    <h2 class="center-title">CẢM ƠN QUÝ KHÁCH ĐÃ GHÉ THĂM WEBSITE CỦA CHÚNG TÔI</h2>
                </div>
            </div>
            <!-- BRAND-CLIENT-ROW END -->
        </div>
    </div>
</section>
@endsection
