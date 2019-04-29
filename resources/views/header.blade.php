<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- HEADER-LEFT-MENU START -->
                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-left-menu">
                        <div class="welcome-info">
                        <span><i>Mynghevietnam.vn</i></span> kính chào quý khách
                        </div>
                        <div class="currenty-converter">
                            <div class="current-currency">
                                <span class="cur-label">Công Ty cổ phần Vykym </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HEADER-LEFT-MENU END -->
                <!-- HEADER-RIGHT-MENU START -->
                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-right-menu">
                        <nav>
                            <ul class="list-inline">
                                <li><a href="https://www.google.com/maps/place/491+Gi%E1%BA%A3i+Ph%C3%B3ng,+Ph%C6%B0%C6%A1ng+Li%E1%BB%87t,+Thanh+Xu%C3%A2n,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@20.994366,105.8391979,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ac6f7bd73195:0x9278972d5c061338!8m2!3d20.994361!4d105.841392" target="blank">Showroom Giải Phóng - Hà Nội</a></li>
                                <li><a href="https://www.google.com/maps/place/Ng%C3%B5+385+%26+Ho%C3%A0ng+Qu%E1%BB%91c+Vi%E1%BB%87t,+Ngh%C4%A9a+T%C3%A2n,+C%E1%BA%A7u+Gi%E1%BA%A5y,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.04611,105.790484,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab306bbd4ebb:0xf820eb823532b16b!8m2!3d21.046105!4d105.7926781" target="blank">Showroom Cầu Giấy - Hà Nội</a></li>
                                <li><a href="https://www.google.com/maps/place/358%2F2+C%C3%A1ch+M%E1%BA%A1ng+Th%C3%A1ng+8,+Ph%C6%B0%E1%BB%9Dng+10,+Qu%E1%BA%ADn+3,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7820723,106.6722679,17z/data=!3m1!4b1!4m5!3m4!1s0x31752ed7b4010105:0x14d9589e7d73cc14!8m2!3d10.782067!4d106.674462" target="blank">Showroom Thành Phố HCM</a></li>
                            </ul>									
                        </nav>
                    </div>
                </div>
                <!-- HEADER-RIGHT-MENU END -->
            </div>
        </div>
    </div>
            <!-- HEADER-TOP END -->
            <!-- HEADER-MIDDLE START -->
    <section class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo">
                        <a href="{{ route('trang-chu') }}"><img src="source/img/test.jpg" alt="LOGO MYNGHE" /></a>
                    </div>
                    <div class="header-right-callus">
                        <b>
                        <span>HN: 0986-896-995</span>
                        <br/>
                        <span>SG: 0938-905-333</span>
                        </b>
                    </div>
                    <div class="categorys-product-search">
                        <form role="search" method="get" id="searchform" action="{{ route('tim-kiem') }}" class="search-form-cat">
                            <div class="search-product form-group">
                                <input type="text" value="" class="form-control search-form" name="key" id="s" placeholder="Nhập từ khóa..." />
                                <button class="search-button" type="submit" id="searchsubmit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <header class="main-menu-area">
        <div class="container">
            <div class="row">
                <!-- SHOPPING-CART START -->
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea" >
                    <div class="shopping-cart-out pull-right">
                        <div class="shopping-cart">
                            <a class="shop-link" title="View my shopping cart">
                                <i class="fa fa-shopping-cart cart-icon"></i>
                                <b>GIỎ HÀNG</b>
                                    @if(Session::has('cart'))
                                        <span class="ajax-cart-quantity">{{ Session('cart')->totalQty }}</span>
                                    @else 
                                        <span class="ajax-cart-quantity">0</span>
                                    @endif
                                </b>
                            </a>
                            <div class="shipping-cart-overly">
                                @if(Session::has('cart'))
                                    @foreach($product_cart as $product)
                                        <div class="shipping-item">
                                            <span class="cross-icon"> <a class="cart-item-delete" href="{{ route('xoa-gio-hang', $product['item']['id']) }}"><i class="fa fa-times-circle"></i></a></span>
                                            <div class="shipping-item-image">
                                            <a><img src="source/img/product/{{ $product['item']['avatar'] }}" width="50px" height="50px" alt="shopping image" /></a>
                                            </div>
                                            <div class="shipping-item-text">
                                            <span>{{$product['qty']}}<span class="pro-quan-x">x</span> <a href="{{ route('chi-tiet-san-pham', $product['item']['slug']) }}" class="pro-cat">{{ $product['item']['name'] }}</a></span>
                                                <p>{{ $product['item']['unit_price'] }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="shipping-total-bill">
                                        <div class="total-shipping-prices">
                                            <span class="shipping-total">{{ number_format(Session('cart')->totalPrice) }} đồng</span>
                                            <span>Tổng :</span>
                                        </div>										
                                    </div>
                                @endif
                                <div class="shipping-checkout-btn">
                                <a href="{{ route('dat-hang' )}}">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
                    <div class="mainmenu">
                        <nav>
                            <ul class="list-inline mega-menu">
                                @if(Auth::check())
                                    @if(Auth::user()->role == 1)
                                        <li class="active"><a><font color="c1a300">Tài khoản Admin</font></a>
                                            <!-- DROPDOWN MENU START -->
                                            <div class="home-var-menu">
                                                <ul class="home-menu">
                                                    <li><a href="{{ route('backend.home') }}">Đến trang quản lý</a></li>
                                                    <li><a href="{{ route('dang-xuat') }}">Đăng xuất</a></li>
                                                </ul>												
                                            </div>
                                            <!-- DROPDOWN MENU END -->
                                        </li>
                                    @elseif(Auth::user()->role == 2)
                                        <li class="active"><a><font color="c1a300">Tài khoản nhân viên</font></a>
                                            <!-- DROPDOWN MENU START -->
                                            <div class="home-var-menu">
                                                <ul class="home-menu">
                                                    <li><a href="{{ route('backend.home') }}">Đến trang nhân viên</a></li>
                                                    <li><a href="{{ route('dang-xuat') }}">Đăng xuất</a></li>
                                                </ul>												
                                            </div>
                                            <!-- DROPDOWN MENU END -->
                                        </li>
                                    @elseif(Auth::user()->role == 3)
                                        <li class="active"><a><font color="c1a300">Tài khoản khách hàng</font></a>
                                            <!-- DROPDOWN MENU START -->
                                            <div class="home-var-menu">
                                                <ul class="home-menu">
                                                    <li><a href="{{ route('chinh-sua') }}">Thông tin khách hàng</a></li>
                                                    <li><a href="{{ route('dang-xuat') }}">Đăng xuất</a></li>
                                                </ul>												
                                            </div>
                                            <!-- DROPDOWN MENU END -->
                                        </li>
                                    @endif
                                @else
                                    <li><a href="{{ route('trang-chu') }}">TRANG CHỦ</a></li>
                                @endif
                                </li>
                                <li>
                                    <a href="{{ route('gioi-thieu') }}" class="icon-arrows">GIỚI THIỆU</a>
                                    <!-- DRODOWN-MEGA-MENU END -->
                                </li>
                                <li>
                                    <a href="{{ route('huong-dan') }}">HƯỚNG DẪN MUA HÀNG</a>
                                </li>
                                <li>
                                    <a href="#">CÁC BÀI VIẾT</a>
                                </li>
                                @if(Auth::check())
                                @else
                                <li>
                                    <a href="{{ route('dang-nhap') }}"><font color="c1a300">Đăng nhập/đăng ký</font></a>
                                </li>
                                @endif
                                {{-- <li><a href="#">THẾ GIỚI TÂM LINH</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
