@extends('master')
@section('title', 'Loại sản phẩm')
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ<span><i class="fa fa-caret-right"> </i> </span></a>
                    <span><i></i></span>
                    <a href="{{ route('danh-muc', $cate->slug) }}">&nbsp{{ $cate->name }}&nbsp<i class="fa fa-caret-right"> </i> </span></a>
                    <span><i></i></span>
                    <a href="{{ route('danh-muc', $loai_mau->slug) }}">&nbsp{{ $loai_mau->name }}&nbsp</a>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="product-left-sidebar">
                    <div class="left-category-menu">
                        <div class="left-product-cat">
                            <div class="category-heading">
                                <h2>DANH MỤC SẢN PHẨM</h2>
                            </div>
                            <div class="category-menu-list">
                                <ul>
                                    <li>
                                        <a href="{{ route('danh-muc', 'qua-tang-viet') }}"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="source/img/layout2/icon0.png" alt="" /></span>QUÀ TẶNG VIỆT<i class="fa fa-angle-right"></i></a>
                                        <div class="cat-left-drop-menu">
                                            <div class="left-mega col-xs-12">
                                                @foreach($type1 as $value)
                                                    @if($value->id_category == 1)
                                                        <a class="menu-item-heading" href="{{ route('loai-san-pham', $value->slug) }}">{{ $value->name }}</a>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ route('danh-muc', 'do-tho-cung') }}"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="source/img/layout2/icon0.png" alt="" /></span>ĐỒ THỜ CÚNG<i class="fa fa-angle-right"></i></a>
                                        <div class="cat-left-drop-menu">
                                            <div class="left-mega col-xs-12">
                                                @foreach($type1 as $value)
                                                    @if($value->id_category == 2)
                                                        <a class="menu-item-heading" href="{{ route('loai-san-pham', $value->slug) }}">{{ $value->name }}</a>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ route('danh-muc', 'tuong-danh-nhan') }}"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="source/img/layout2/icon0.png" alt="" /></span>TƯỢNG DANH NHÂN<i class="fa fa-angle-right"></i></a>
                                        <div class="cat-left-drop-menu">
                                            <div class="left-mega col-xs-12">
                                                @foreach($type1 as $value)
                                                    @if($value->id_category == 3)
                                                        <a class="menu-item-heading" href="{{ route('loai-san-pham', $value->slug) }}">{{ $value->name }}</a>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ route('danh-muc', 'tuong-phat') }}"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="source/img/layout2/icon0.png" alt="" /></span>TƯỢNG PHẬT<i class="fa fa-angle-right"></i></a>
                                        <div class="cat-left-drop-menu">
                                            <div class="left-mega col-xs-12">
                                                @foreach($type1 as $value)
                                                    @if($value->id_category == 4)
                                                        <a class="menu-item-heading" href="{{ route('loai-san-pham', $value->slug) }}">{{ $value->name }}</a>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ route('danh-muc', 'tranh-dong') }}"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="source/img/layout2/icon0.png" alt="" /></span>TRANH ĐỒNG<i class="fa fa-angle-right"></i></a>
                                        <div class="cat-left-drop-menu">
                                            <div class="left-mega col-xs-12">
                                                @foreach($type1 as $value)
                                                    @if($value->id_category == 5)
                                                        <a class="menu-item-heading" href="{{ route('loai-san-pham', $value->slug) }}">{{ $value->name }}</a>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ route('danh-muc', 'do-phong-thuy') }}"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="source/img/layout2/icon0.png" alt="" /></span>ĐỒ PHONG THỦY<i class="fa fa-angle-right"></i></a>
                                        <div class="cat-left-drop-menu">
                                            <div class="left-mega col-xs-12">
                                                @foreach($type1 as $value)
                                                    @if($value->id_category == 6)
                                                        <a class="menu-item-heading" href="{{ route('loai-san-pham', $value->slug) }}">{{ $value->name }}</a>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ route('danh-muc', 'tuong-con-vat') }}"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="source/img/layout2/icon0.png" alt="" /></span>TƯỢNG CON VẬT <i class="fa fa-angle-right"></i></a>
                                        <div class="cat-left-drop-menu">
                                            <div class="left-mega col-xs-12">
                                                @foreach($type1 as $value)
                                                    @if($value->id_category == 7)
                                                        <a class="menu-item-heading" href="{{ route('loai-san-pham', $value->slug) }}">{{ $value->name }}</a>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ route('danh-muc', 'huy-hieu-dong') }}"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="source/img/layout2/icon0.png" alt="" /></span>HUY HIỆU ĐỒNG <i class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-left-sidebar sidebar-left-add">
                    <div class="sidebar-left zoom-img">
                        <a ><img src="source/img/product/mau.jpg" alt="sidebar left" /></a>
                    </div>	
                </div>
                <div class="single-left-sidebar sidebar-best-seller">
                    <div class="left-title-area">
                        <h2 class="left-title">Sản phẩm khác Tiêu Biểu</h2>
                    </div>
                    <div class="row">
                        <div class="sidebar-best-seller-carousel">
                            <div class="item">
                                @foreach ($sp_khac as $khac)
                                    <div class="single-product-item">
                                    <div class="col-sm-6">
                                        <div class="sidebar-product-image">
                                            <a href="{{ route('chi-tiet-san-pham', $khac->slug) }}">
                                                <img src="/source/img/product/{{ $khac->getImage($khac->id)->name }}" />
                                            </a> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">    
                                        <div class="">
                                            <a href="{{ route('chi-tiet-san-pham', $khac->slug) }}">{{ $khac->name }}</a>
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
                                                <span class="price">Giá:&nbsp{{ number_format($khac->price) }}&nbspVNĐ</span>
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
            <br>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="right-all-product">
                    <!-- PRODUCT-CATEGORY-HEADER START -->
                    <div class="product-category-header">
                        <div class="category-header-image">
                        <img src="source/img/product/{{ $loai_mau->avatar }}"  width="852px" height="420px" alt="category-header"/>
                            <div class="category-header-text">
                                <br><br><br>
                                <h2>{{$loai_mau->name}}</h2>
                                <br><br><br>
                                <h3 style="color:white">{{ $loai_mau->desciption }}</h3>
                            </div>									
                        </div>
                    </div>
                    <!-- PRODUCT-CATEGORY-HEADER END -->
                    <div class="product-category-title">
                        <!-- PRODUCT-CATEGORY-TITLE START -->
                        <h1>
                        <span class="cat-name">{{ $loai_mau->name }}</span>
                        <span class="count-product">Hiện chúng tôi đang có {{ $sp_theoloai->total() }} sản phẩm</span>
                        </h1>
                        <!-- PRODUCT-CATEGORY-TITLE END -->
                    </div>
                </div>
                <hr>
                <div class="all-gategory-product">
                    <div class="row">
                        <ul class="gategory-product">
                            @foreach($sp_theoloai as $sp)
                            <!-- SINGLE ITEM START -->
                                <li class="cat-product-list">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="{{ route('chi-tiet-san-pham', $sp->slug) }}"><img src="source/img/product/{{ $sp->getImage($sp->id)->name }}" alt="product-image" /></a>
                                                <a class="new-mark-box">Mới</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="list-view-content">
                                            <div class="single-product-item">
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <a href="{{ route('chi-tiet-san-pham', $sp->slug) }}">Tên:&nbsp{{ $sp->name }}</a><br>
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div class="review-box">
                                                            <h3>Bảo Hành:&nbsp{{ $sp->guarantee }}&nbsptháng</h3>
                                                        </div>
                                                    </div>
                                                    <div class="product-datails">
                                                        <p>{{ $sp->description }}</p>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="price">Giá:&nbsp{{ number_format($sp->price) }}&nbspVNĐ</span>
                                                    </div>
                                                </div>
                                                <div class="overlay-content-list">
                                                    <ul>
                                                        <li><a class="fancybox" href="source/img/product/{{ $sp->getImage($sp->id)->name }}" title="Zoom ảnh"><i class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="{{ route('them-gio-hang', $sp->id) }}" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="{{ route('chi-tiet-san-pham', $sp->slug) }}" title="Xem chi tiết"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"target="_blank" title="Chia sẻ lên Facebook"><i class="fa fa-share"></i></a></li>
                                                    </ul>
                                                </div>												
                                            </div>														
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div align="center" class="row">{{$sp_theoloai->fragment('pag1')->render()}}</div>
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
