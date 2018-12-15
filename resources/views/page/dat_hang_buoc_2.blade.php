@extends('master')
@section('title', 'Thông tin khách hàng')
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ<span> <i class="fa fa-caret-right"> </i> </span></a>
                    <span><i></i></span>
                    <a href="{{ route('dat-hang') }}">&nbsp Kiểm tra giỏ hàng &nbsp<span> <i class="fa fa-caret-right"> </i> </span></a>
                    <a>&nbsp Điền thông tin khách hàng &nbsp<span>
                    
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
                            <li class="step-current second">
                                <span>02. Thông tin khách hàng</span>
                            </li>
                            <li class="step-todo third">
                                <span>03. Thanh toán</span>
                            </li>
                        </ul>									
                    </div>
                <form action="{{ route('dat-hang') }}" method="post" class="beta-form-checkout">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="page-title">Điền thông tin khách hàng</h2>
                        </div>	
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- PERSONAL-INFOMATION START -->
                            <div class="personal-infomation">
                                <form class="primari-box personal-info-box" id="personalinfo" method="post" action="#">
                                    <h3 class="box-subheading">Thông tin của bạn</h3>
                                    <div class="personal-info-content">
                                        
                                        <div class="form-group primary-form-group p-info-group">
                                            <label for="firstname">Họ và tên <sup>*</sup></label>
                                            <input type="text" value="" name="name" id="name" class="form-control input-feild">
                                        </div>
                                        <br>
                                        <div class="form-group primary-form-group p-info-group">
                                            <label>Giới tính<sup>*</sup></label>
                                            <span class="radio-box">
                                                <input id="radio1" type="radio" name="gender" value="nam" checked="checked">
                                                <label for="radio1">Nam</label>
                                            </span>
                                            <span class="radio-box">
                                                <input id="radio2" type="radio" name="gender" value="nữ">
                                                
                                                <label for="radio2">Nữ</label>
                                            </span>
                                        </div>
                                        <br>
                                        <div class="form-group primary-form-group p-info-group">
                                            <label for="email">Email<sup>*</sup></label>
                                            <input type="email" value="" name="email" id="email" class="form-control input-feild">
                                        </div>
                                        <div class="form-group primary-form-group p-info-group">
                                            <label for="email">Số điện thoại <sup>*</sup></label>
                                            <input type="text" value="" name="phone" id="phone" class="form-control input-feild">
                                            <span class="min-pass"></span>
                                        </div>
                                        <div class="form-group primary-form-group p-info-group">
                                            <label for="text">Địa chỉ giao hàng <sup>*</sup></label>
                                            <input type="text" value="" name="address" id="address" class="form-control input-feild">
                                            <span class="min-pass"></span>
                                        </div>
                                        <div class="form-group primary-form-group p-info-group">
                                            <label for="text">Yêu cầu thêm (Nếu có)<sup></sup></label>
                                            <input type="text" value="" name="note" id="note" class="form-control input-feild">
                                            <span class="min-pass"></span>
                                        </div>
                                        <br>
                                        <button type="submit" class="compare-button">Đặt hàng </button>
                                    </div>
                                </form>							
                            </div>
                            <!-- PERSONAL-INFOMATION END -->
                        </div>
                    </div>
                </form>
            <div>
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