@extends('master')
@section('title', 'MỸ NGHỆ VIỆT NAM')
@section('content')
<section class="header-bottom-area">
    <div class="container">
        <div class="row">
            @include('navbar')
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="main-slider-area">
                    <div class="slider-area">
                        <div id="wrapper">
                            <div class="slider-wrapper">
                                <div id="mainSlider" class="nivoSlider" >
                                    <img src="source/img/slider/slide1.png" alt="main slider" title="#htmlcaption"/>
                                    <img src="source/img/slider/slide2.png" alt="main slider" title="#htmlcaption"/>
                                    <img src="source/img/slider/slide3.png" alt="main slider" title="#htmlcaption2"/>
                                </div>
                                <div id="htmlcaption" class="nivo-html-caption slider-caption">
                                    <div class="slider-progress"></div>
                                    <div class="slider-cap-text slider-text1">
                                        <div class="d-table-cell">
                                            <h2 class="animated bounceInDown">ĐỒ ĐỒNG MỸ NGHỆ</h2>
                                            <p class="animated bounceInUp">Siêu thị đồ đồng mỹ nghệ Việt Nam là trang web bán hàng trực tuyến của Công ty cổ phần Vykym. Chuyên cung cấp các sản phẩm nội thất đồ đồng - quà tặng cao cấp</p>	
                                        <a class="wow zoomInDown" data-wow-duration="1s" data-wow-delay="1s" href="{{ route('gioi-thieu') }}">VỀ CHÚNG TÔI &nbsp;<i class="fa fa-caret-right"></i></a>													
                                        </div>
                                    </div>	
                                </div>
                            </div>
                        </div>								
                    </div>											
                </div>	
            </div>						
        </div>
    </div>
</section>

<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="single-left-sidebar sidebar-left-add">
                    <div class="sidebar-left zoom-img">
                        <a><img src="source/img/product/mau.jpg" alt="sidebar left" /></a>
                    </div>	
                </div>
                <div class="single-left-sidebar sidebar-best-seller">
                    <div class="left-title-area">
                        <h2 class="left-title">Sản phẩm mạ vàng Tiêu Biểu</h2>
                    </div>
                    <div class="row">
                        <div class="sidebar-best-seller-carousel">
                            <div class="item">
                                @foreach ($ma_vang as $mv)
                                    <div class="single-product-item">
                                    <div class="col-sm-6">
                                        <div class="sidebar-product-image">
                                            <a href="{{ route('chi-tiet-san-pham', $mv->slug) }}">
                                                <img src="/source/img/product/{{ $mv->getImage($mv->id)->name }}" />
                                            </a> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">    
                                        <div class="">
                                        <a href="{{ route('chi-tiet-san-pham', $mv->slug) }}">{{ $mv->name }}</a>
                                            <div class="customar-comments-box">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <span class="price">Giá:&nbsp{{ number_format($mv->price) }}&nbspVNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>	
                    </div>
                </div>
            </div>	
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="new-product-area">
                            <div class="left-title-area">
                                <h2 class="left-title">Quà tặng lưu niệm</h2>
                            </div>						
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="home2-new-pro-carousel">
                                        @foreach($qua_tang as $qt)
                                            <div class="item">
                                                <div class="new-product">
                                                    <div class="single-product-item">
                                                        <div class="product-image">
                                                        <a href="{{ route('chi-tiet-san-pham', $qt->slug) }}"><img src="source/img/product/{{ $qt->getImage($qt->id)->name }}" alt="product-image" /></a>
                                                            <a class="new-mark-box">Mới</a>
                                                            <div class="overlay-content">
                                                                <ul>
                                                                    <li><a class="fancybox" href="source/img/product/{{ $qt->getImage($qt->id)->name }}" title="Zoom ảnh"><i class="fa fa-search-plus"></i></a></li>
                                                                    <li><a href="{{ route('them-gio-hang', $qt->id) }}" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="{{ route('chi-tiet-san-pham', $qt->slug) }}" title="Xem chi tiết"><i class="fa fa-search"></i></a></li>
                                                                    <li><a  href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
                                                                        target="_blank" title="Chia sẻ lên Facebook"> <i class="fa fa-share"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="customar-comments-box">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="review-box">
                                                                    <span>BH:&nbsp{{ $qt->guarantee }}&nbsptháng</span>
                                                                </div>
                                                            </div>
                                                            <a href="{{ route('chi-tiet-san-pham', $qt->slug) }}">Tên:&nbsp{{ $qt->name }}</a>
                                                            <div class="price-box">
                                                                <span class="price">Giá:&nbsp{{ number_format($qt->price) }}&nbspVNĐ</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>										
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="tow-column-add zoom-img">
                            <a><img src="source/img/product/sl2.jpg" alt="shope-add" /></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="one-column-add zoom-img">
                            <a><img src="source/img/product/sl1.jpg" alt="shope-add" /></a>
                        </div>	
                    </div>	
                    <div class="col-xs-12">
                        <div class="new-product-area">
                            <div class="left-title-area">
                                <h2 class="left-title">Tranh đồng</h2>
                            </div>						
                            <div class="row">
                                <div class="col-xs-12">
                                        <!-- HOME2-NEW-PRO-CAROUSEL START -->
                                    <div class="home2-new-pro-carousel">
                                        <!-- NEW-PRODUCT SINGLE ITEM START -->
                                        @foreach($tranh_dong as $td)
                                        <div class="item">
                                            <div class="new-product">
                                                <div class="single-product-item">
                                                    <div class="product-image">
                                                    <a href="{{ route('chi-tiet-san-pham', $td->slug) }}"><img src="source/img/product/{{ $td->getImage($td->id)->name }}" alt="product-image" /></a>
                                                        <a class="new-mark-box">Mới</a>
                                                        <div class="overlay-content">
                                                            <ul>
                                                                <li><a class="fancybox" href="source/img/product/{{ $td->getImage($td->id)->name }}" title="Zoom ảnh"><i class="fa fa-search-plus"></i></a></li>
                                                                <li><a href="{{ route('them-gio-hang', $td->id) }}" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
                                                                <li><a href="{{ route('chi-tiet-san-pham', $td->slug) }}" title="Xem chi tiết"><i class="fa fa-search"></i></a></li>
                                                                <li><a  href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank" title="Chia sẻ lên Facebook"> <i class="fa fa-share"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="customar-comments-box">
                                                            <div class="rating-box">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="review-box">
                                                                <span>BH:&nbsp{{ $td->guarantee }}&nbsptháng</span>
                                                            </div>
                                                        </div>
                                                            <a href="{{ route('chi-tiet-san-pham', $td->slug) }}">Tên:&nbsp{{ $td->name }}</a>
                                                        <div class="price-box">
                                                            <span class="price">Giá:&nbsp{{ number_format($td->price) }}&nbspVNĐ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>	
            </div>	
        </div>
    </div>
</section>	

<section class="main-content-section-full-column">
    <div class="container">
        <div class="row">
            <div class="image-add-area">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="onehalf-add-shope zoom-img">
                        <a><img src="source/img/product/sl2.jpg" alt="shope-add" /></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div class="onehalf-add-shope zoom-img">
                        <a><img src="source/img/product/sl1.jpg" alt="shope-add" /></a>
                    </div>
                </div>						
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="featured-products-area">
                    <div class="left-title-area">
                        <h2 class="center-title">Đồ Thờ Cúng</h2>
                    </div>	
                    <div class="row">
                        <div class="feartured-carousel">
                            @foreach($do_tho_cung as $dt)
                                <div class="item">
                                    <!-- SINGLE-PRODUCT-ITEM START -->
                                    <div class="single-product-item">
                                        <div class="product-image">
                                            <a href="{{ route('chi-tiet-san-pham', $dt->slug) }}"><img src="source/img/product/{{ $dt->getImage($dt->id)->name }}" alt="product-image" /></a>
                                            <a class="new-mark-box">Mới</a>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a class="fancybox" href="source/img/product/{{ $dt->getImage($dt->id)->name }}" title="Zoom ảnh"><i class="fa fa-search-plus"></i></a></li>
                                                    <li><a href="{{ route('them-gio-hang', $dt->id) }}" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="{{ route('chi-tiet-san-pham', $dt->slug) }}" title="Xem chi tiết"><i class="fa fa-search"></i></a></li>
                                                    <li><a  href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank" title="Chia sẻ lên Facebook"> <i class="fa fa-share"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="review-box">
                                                    <span>BH:&nbsp{{ $dt->guarantee }}&nbsptháng</span>
                                                </div>
                                            </div>
                                            <a href="{{ route('chi-tiet-san-pham', $dt->slug) }}">Tên:&nbsp{{ $dt->name }}</a>
                                            <div class="price-box">
                                                <span class="price">Giá:&nbsp{{ number_format($dt->price) }}&nbspVNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>						
        </div>
    </div>
</section>

<section class="main-content-section-full-column">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="featured-products-area">
                    <div class="left-title-area">
                        <h2 class="center-title">Đồ Phong Thủy</h2>
                    </div>	
                    <div class="row">
                        <div class="feartured-carousel">
                            @foreach($do_phong_thuy as $pt)
                                <div class="item">
                                    <!-- SINGLE-PRODUCT-ITEM START -->
                                    <div class="single-product-item">
                                        <div class="product-image">
                                            <a href="{{ route('chi-tiet-san-pham', $pt->slug) }}"><img src="source/img/product/{{ $pt->getImage($pt->id)->name }}" alt="product-image" /></a>
                                            <a class="new-mark-box">Mới</a>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a class="fancybox" href="source/img/product/{{ $pt->getImage($pt->id)->name }}" title="Zoom ảnh"><i class="fa fa-search-plus"></i></a></li>
                                                    <li><a href="{{ route('them-gio-hang', $pt->id) }}" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="{{ route('chi-tiet-san-pham', $dt->slug) }}" title="Xem chi tiết"><i class="fa fa-search"></i></a></li>
                                                    <li><a  href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank" title="Chia sẻ lên Facebook"> <i class="fa fa-share"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="review-box">
                                                    <span>BH:&nbsp{{ $pt->guarantee }}&nbsptháng</span>
                                                </div>
                                            </div>
                                            <a href="{{ route('chi-tiet-san-pham', $dt->slug) }}">Tên:&nbsp{{ $pt->name }}</a>
                                            <div class="price-box">
                                                <span class="price">Giá:&nbsp{{ number_format($pt->price) }}&nbspVNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>						
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="featured-products-area">
                    <div class="left-title-area">
                        <h2 class="center-title">Huy hiệu - quốc huy</h2>
                    </div>	
                    <div class="row">
                        <div class="feartured-carousel">
                            @foreach($huy_hieu as $hh)
                                <div class="item">
                                    <!-- SINGLE-PRODUCT-ITEM START -->
                                    <div class="single-product-item">
                                        <div class="product-image">
                                            <a href="{{ route('chi-tiet-san-pham', $hh->slug) }}"><img src="source/img/product/{{ $hh->getImage($hh->id)->name }}" alt="product-image" /></a>
                                            <a class="new-mark-box">Mới</a>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a class="fancybox" href="source/img/product/{{ $hh->getImage($hh->id)->name }}" title="Zoom ảnh"><i class="fa fa-search-plus"></i></a></li>
                                                    <li><a href="{{ route('them-gio-hang', $hh->id) }}" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="{{ route('chi-tiet-san-pham', $hh->slug) }}" title="Xem chi tiết"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank" title="Chia sẻ lên Facebook"> <i class="fa fa-share"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="review-box">
                                                    <span>BH:&nbsp{{ $hh->guarantee }}&nbsptháng</span>
                                                </div>
                                            </div>
                                            <a href="{{ route('chi-tiet-san-pham', $hh->slug) }}">Tên:&nbsp{{ $hh->name }}</a>
                                            <div class="price-box">
                                                <span class="price">Giá:&nbsp{{ number_format($hh->price) }}&nbspVNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>						
        </div>
        <div class="row">
            <div class="image-add-area">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="onehalf-add-shope zoom-img">
                        <a><img alt="shope-add" src="source/img/product/sl2.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="onehalf-add-shope zoom-img">
                        <a><img alt="shope-add" src="source/img/product/sl2.jpg"></a>
                    </div>
                </div>						
            </div>
        </div>
    </div>
</section>

<section class="latest-news-area">
    <div class="container">
        <div class="row">
            <div class="latest-news-row">
                <div class="center-title-area">
                    <h2 class="center-title"><a>WEBSITE VÀ Showrooms</a></h2>
                </div>	
                <div class="col-xs-12">
                    <div class="row">
                        <div class="latest-news-carousel">
                            <div class="item ">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a target="blank"><img src="source/img/product/mau.jpg" alt="latest-post" /></a>
                                        <h2><a>Website công ty</a></h2>
                                        <hr>
                                        <p><a href="{{ route('trang-chu') }}">mynghevietnam.vn</a></p>
                                        <div class="latest-post-info">
                                            <p><a href="http://mynghevietnam.com/">mynghevietnam.com</a></p>
                                        </div>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>Chịu trách nhiệm trang web: Công ty cổ phần Vykym - MST: 1000.864.851</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="https://www.google.com/maps/place/491+Gi%E1%BA%A3i+Ph%C3%B3ng,+Ph%C6%B0%C6%A1ng+Li%E1%BB%87t,+Thanh+Xu%C3%A2n,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@20.994366,105.8391979,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ac6f7bd73195:0x9278972d5c061338!8m2!3d20.994361!4d105.841392" target="blank"><img src="source/img/product/mau.jpg" alt="latest-post" /></a>
                                        <h2><a href="https://www.google.com/maps/place/491+Gi%E1%BA%A3i+Ph%C3%B3ng,+Ph%C6%B0%C6%A1ng+Li%E1%BB%87t,+Thanh+Xu%C3%A2n,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@20.994366,105.8391979,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ac6f7bd73195:0x9278972d5c061338!8m2!3d20.994361!4d105.841392" target="blank">Showroom Giải Phóng - Hà Nội</a></h2>
                                        <hr>
                                        <p>Địa chỉ: 491A Giải Phóng, Thanh Xuân, Hà Nội</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-phone"></i><span>Điện thoại: (024) 3.919.6969</span>
                                        </div>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>Hotline: 0986.896.995 - 0902.004.660</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="item ">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="https://www.google.com/maps/place/358%2F2+C%C3%A1ch+M%E1%BA%A1ng+Th%C3%A1ng+8,+Ph%C6%B0%E1%BB%9Dng+10,+Qu%E1%BA%ADn+3,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7820723,106.6722679,17z/data=!3m1!4b1!4m5!3m4!1s0x31752ed7b4010105:0x14d9589e7d73cc14!8m2!3d10.782067!4d106.674462" target="blank"><img src="source/img/product/mau.jpg" alt="latest-post" /></a>
                                        <h2><a href="https://www.google.com/maps/place/358%2F2+C%C3%A1ch+M%E1%BA%A1ng+Th%C3%A1ng+8,+Ph%C6%B0%E1%BB%9Dng+10,+Qu%E1%BA%ADn+3,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7820723,106.6722679,17z/data=!3m1!4b1!4m5!3m4!1s0x31752ed7b4010105:0x14d9589e7d73cc14!8m2!3d10.782067!4d106.674462" target="blank">Showroom Quận 3 - TP Hồ Chí Minh</a></h2>
                                        <hr>
                                        <p>Địa chỉ: Số 358/2 Cách Mạng Tháng 8, Quận 3, TP. Hồ Chí Minh </p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-phone"></i><span>Điện thoại: 0938.905.333 - 0168.31.88866</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->								
                            <div class="item ">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="https://www.google.com/maps/place/Ng%C3%B5+385+%26+Ho%C3%A0ng+Qu%E1%BB%91c+Vi%E1%BB%87t,+Ngh%C4%A9a+T%C3%A2n,+C%E1%BA%A7u+Gi%E1%BA%A5y,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.04611,105.790484,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab306bbd4ebb:0xf820eb823532b16b!8m2!3d21.046105!4d105.7926781" target="blank"><img src="source/img/product/mau.jpg" alt="latest-post" /></a>
                                        <h2><a href="https://www.google.com/maps/place/Ng%C3%B5+385+%26+Ho%C3%A0ng+Qu%E1%BB%91c+Vi%E1%BB%87t,+Ngh%C4%A9a+T%C3%A2n,+C%E1%BA%A7u+Gi%E1%BA%A5y,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.04611,105.790484,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab306bbd4ebb:0xf820eb823532b16b!8m2!3d21.046105!4d105.7926781" target="blank">Showroom Cầu Giấy - Hà Nội</a></h2>
                                        <hr>
                                        <p>Địa chỉ: Số 112 A25 ngõ 385 Hoàng Quốc Việt, Cầu Giấy, Hà Nội</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-phone"></i><span>Điện thoại: (024) 6680.1314</span>
                                        </div>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>Hotline: 0975.358.308 - 0904.793.739</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
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
