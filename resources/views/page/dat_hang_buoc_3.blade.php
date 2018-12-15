@extends('master')
@section('title', 'Đặt hàng thành công')
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ<span><i class="fa fa-caret-right"> </i> </span></a>
                    <span><i></i></span>
                    <a href="{{ route('dat-hang') }}">&nbsp Kiểm tra giỏ hàng &nbsp<span><i class="fa fa-caret-right"></i></span></a>
                    <a>&nbsp Điền thông tin khách hàng &nbsp<span><i class="fa fa-caret-right"> </i> </span></a>
                    <a>&nbsp Điền thông tin khách hàng &nbsp</a>
                </div>
                <hr>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="shoping-cart-menu">
                    <ul class="step">
                        <li class="step-todo first">
                            <span>01. Kiểm tra giỏ hàng</span>
                        </li>
                        <li class="step-todo second">
                            <span>02. Thông tin khách hàng</span>
                        </li>
                        <li class="step-current third">
                            <span>03. Thanh toán</span>
                        </li>
                    </ul>									
                </div>
            </div>
            <br><br>

			<center>
                <h3>{{Session::get('thongbao')}}
				    <p>Đặt hàng thành công! Vui lòng chờ trong ít phút,chúng tôi sẽ gọi điện ngay cho bạn xác nhận! vui lòng chú ý điện thoại! 
				    <p>Hãy quay về <a href="{{ route('trang-chu') }}" style="color: #ff9933"><b>Trang chủ</b></a> để tiếp tục mua hàng!
                </h3>
            </center>
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