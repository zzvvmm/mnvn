@extends('master')
@section('title', 'Đăng nhập / Đăng ký')
@section('content')
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="{{ route('trang-chu') }}">Trang chủ</a>
                        <span><i class="fa fa-caret-right	"></i></span>
                        <span>Đăng nhập / Đăng ký</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="page-title">Đăng nhập / Đăng ký</h2>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif	
                </div>
                {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- SHOPING-CART-MENU START -->
                    <div class="shoping-cart-menu">
                        <ul class="step">
                            <li class="step-todo first step-done">
                                <span><a href="cart.html">01. Summary</a></span>
                            </li>
                            <li class="step-current second">
                                <span>02. Sign in</span>
                            </li>
                            <li class="step-todo third">
                                <span>03. Address</span>
                            </li>
                            <li class="step-todo four">
                                <span>04. Shipping</span>
                            </li>
                            <li class="step-todo last" id="step_end">
                                <span><em>05.</em> Payment</span>
                            </li>
                        </ul>									
                    </div>
                    <!-- SHOPING-CART-MENU END -->
                </div> --}}
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- CREATE-NEW-ACCOUNT START -->
                    <div class="create-new-account">
                    <form class="new-account-box primari-box" id="create-new-account" method="post" action="{{ route('dang-ky') }}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <h3 class="box-subheading">Đăng ký một tài khoản mới</h3>
                            @if(Session::has('thanh-cong'))
                                <div class="alert alert-success">{{Session::get('thanh-cong')}}</div>
                            @else
                                <div class="form-content">
                                    <p>Vui lòng điền các thông tin dưới </p>
                                    <div class="form-group primary-form-group p-info-group">
                                        <label for="name">Họ và tên <sup>(*)</sup></label>
                                        <input type="text" value="" name="name" id="name" class="form-control input-feild" required>
                                    </div>
                                    <div class="form-group primary-form-group p-info-group">
                                        <label for="email">Email <sup>(*)</sup></label>
                                        <input type="email" value="" name="emailsignup" id="emailsignup" class="form-control input-feild" required>
                                    </div>
                                    <div class="form-group primary-form-group">
                                        <label for="password">Password <sup>(*)</sup></label>
                                        <input type="password" value="" name="passwordsignup" id="passwordsignup" class="form-control input-feild" required>
                                    </div>
                                    <div class="form-group primary-form-group">
                                        <label for="password">Nhập lại Password <sup>(*)</sup></label>
                                        <input type="password" value="" name="re_passwordsignup" id="re_passwordsignup" class="form-control input-feild" required>
                                    </div>
                                    <div class="form-group primary-form-group p-info-group">
                                            <label for="email">Số điện thoại <sup>(*)</sup></label>
                                            <input type="number" value="" name="phone" id="phone" class="form-control input-feild" required>
                                            <span class="min-pass"></span>
                                        </div>
                                        <div class="form-group primary-form-group p-info-group">
                                            <label for="text">Địa chỉ <sup>(*)</sup></label>
                                            <input type="text" value="" name="address" id="address" class="form-control input-feild" required>
                                            <span class="min-pass"></span>
                                        </div>
                                    <div class="form-group primary-form-group p-info-group">
                                        <label>Giới tính <sup>(*)</sup></label>
                                        <span class="radio-box">
                                            <input id="radio1" type="radio" name="gender" value="nam" checked="checked" required>
                                            <label for="radio1">Nam</label>
                                        </span>
                                        <span class="radio-box">
                                            <input id="radio2" type="radio" name="gender" value="nữ">
                                            
                                            <label for="radio2">Nữ</label>
                                        </span>
                                    </div>
                                    
                                    <div class="submit-button">
                                        <button type="submit" id="SubmitCreate" class="btn btn-danger"><i class="fa fa-user submit-icon"></i> Đăng ký </button>
                                    </div>
                                </div>
                            @endif
                        </form>							
                    </div>
                    <!-- CREATE-NEW-ACCOUNT END -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- REGISTERED-ACCOUNT START -->
                    <div class="primari-box registered-account">
                        <h3 class="box-subheading">Đăng nhập</h3>

                        @if(Session::get('flag') === 'danger')
                            <div class="row alert alert-danger">{{Session::get('message')}}</div> 
                        @else
                        @endif
                        <form class="new-account-box" id="accountLogin" method="post" action="{{ route('dang-nhap') }}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-content">
                                <div class="form-group primary-form-group">
                                    <label for="loginemail">Email</label>
                                    <input type="emailadas" value="" name="email" id="loginemail" class="form-control input-feild" required>
                                </div>
                                <div class="form-group primary-form-group">
                                    <label for="password">Password</label>
                                    <input type="password" value="" name="password" id="password" class="form-control input-feild" required>
                                </div>
                                <div class="forget-password">
                                    <p><a href="#">Forgot your password?</a></p>
                                </div>
                                <div class="submit-button">
                                    <button type="submit" id="SubmitCreate" class="btn btn-danger"><i class="fa fa-lock submit-icon"></i> Đăng nhập </button>
                                </div>
                            </div>
                        </form>	
                    </div>
                    <!-- REGISTERED-ACCOUNT END -->
                </div>				
            </div>
        </div>
    </section>
@endsection