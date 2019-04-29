@extends('master')
@section('title', 'Thông tin tài khoản')
@section('content')
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="{{ route('trang-chu') }}">Trang chủ</a>
                        <span><i class="fa fa-caret-right	"></i></span>
                        <span> Thông tin tài khoản</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="page-title">Xem / Chỉnh sửa thông tin cá nhân</h2>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('sua-that-bai'))
						<div class="alert alert-danger">{{Session::get('sua-that-bai')}}</div>
					@endif
					@if(Session::has('sua-that-bai-2'))
						<div class="alert alert-danger">{{Session::get('sua-that-bai-2')}}</div>
					@endif
					@if(Session::has('sua-thanh-cong'))
						<div class="alert alert-success">{{Session::get('sua-thanh-cong')}}</div>
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
                    <!-- REGISTERED-ACCOUNT START -->
                    <div class="primari-box registered-account">
                        <h3 class="box-subheading">Đổi mật khẩu</h3>

                        @if(Session::get('flag') === 'danger')
                            <div class="row alert alert-danger">{{Session::get('message')}}</div> 
                        @else
                            <form class="new-account-box" id="accountLogin" method="post" action="{{ route('chinh-sua') }}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-content">
                                    <div class="form-group primary-form-group">
                                        <label for="password">Mật khẩu cũ <sup>(*)</sup></label>
                                        <input type="password" value="" name="old_password" id="old_password" class="form-control input-feild" required>
                                    </div>
                                    <div class="form-group primary-form-group">
                                            <label for="password">Mật khẩu mới <sup>(*)</sup></label>
                                            <input type="password" value="" name="password" id="password" class="form-control input-feild" required>
                                        </div>
                                    <div class="form-group primary-form-group">
                                        <label for="password">Nhập lại mật khẩu mới <sup>(*)</sup></label>
                                        <input type="password" value="" name="re_password" id="re_password" class="form-control input-feild" required>
                                    </div>
                                    <div class="submit-button">
                                        <button type="submit" id="SubmitCreate" class="btn btn-danger"><i class="fa fa-lock submit-icon"></i> Đổi mật khẩu </button>
                                    </div>
                                </div>
                            </form>	
                        @endif						
                    </div>
                    <!-- REGISTERED-ACCOUNT END -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!-- CREATE-NEW-ACCOUNT START -->
                    <div class="create-new-account">
                    <form class="new-account-box primari-box" id="create-new-account" method="post" action="{{ route('chinh-sua') }}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <h3 class="box-subheading">Xem / Chỉnh sửa thông tin cá nhân</h3>
                            @if(Session::has('thanh-cong'))
                                <div class="alert alert-success">{{Session::get('thanh-cong')}}</div>
                            @else
                                <div class="form-content">
                                    <p>Vui lòng điền các thông tin dưới </p>
                                    <div class="form-group primary-form-group p-info-group">
                                        <label for="name">Họ và tên</label>
                                        <input type="text" value="{{ Auth::user()->name }}" name="name" id="name" class="form-control input-feild">
                                    </div>
                                    <div class="form-group primary-form-group p-info-group">
                                        <label for="email">Số điện thoại </label>
                                        <input type="number" value="{{ Auth::user()->phone }}" name="phone" id="phone" class="form-control input-feild">
                                        <span class="min-pass"></span>
                                    </div>
                                    <div class="form-group primary-form-group p-info-group">
                                        <label for="text">Địa chỉ</label>
                                        <input type="text" value="{{ Auth::user()->address }}" name="address" id="address" class="form-control input-feild">
                                        <span class="min-pass"></span>
                                    </div>
                                    <div class="form-group primary-form-group p-info-group">
                                        <label>Giới tính </label>
                                        <span class="radio-box">
                                            <input id="radio1" type="radio" name="gender" value="nam" @if( Auth::user()->gender === 'nam') checked = ""  @endif>
                                            <label for="radio1">Nam</label>
                                        </span>
                                        <span class="radio-box">
                                            <input id="radio2" type="radio" name="gender" value="nữ" @if( Auth::user()->gender === 'nữ') checked = ""  @endif>
                                            
                                            <label for="radio2">Nữ</label>
                                        </span>
                                    </div>
                                    
                                    <div class="submit-button">
                                        <button type="submit" id="SubmitCreate" class="btn btn-danger"><i class="fa fa-user submit-icon"></i> Chỉnh sửa </button>
                                    </div>
                                </div>
                            @endif
                        </form>							
                    </div>
                    <!-- CREATE-NEW-ACCOUNT END -->
                </div>				
            </div>
        </div>
    </section>
@endsection