@extends('master')
@section('title', 'Tìm kiếm sản phẩm')
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ<span><i class="fa fa-caret-right"> </i> </span></a>
                    <span><i></i></span>
                    <a href="{{ route('tim-kiem') }}">&nbspTìm kiếm sản phẩm&nbsp</a>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <hr>
        <div class="row">
            @include('navbar')
            <br>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="right-all-product">
                    <div class="product-category-title">
                        <h1>
                        <span class="cat-name">Tìm kiếm sản phẩm với từ khóa : {{ $key }}</span>
                        <span class="count-product">Tìm thấy {{ $sanpham->total() }} sản phẩm</span>
                        </h1>
                        <!-- PRODUCT-CATEGORY-TITLE END -->
                    </div>
                </div>
                <hr>
                <div class="all-gategory-product">
                    <div class="row">
                        <ul class="gategory-product">
                            @foreach($sanpham as $sp)
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
                                                        <a href="{{ route('chi-tiet-san-pham', $sp->slug) }}">Tên:&nbsp{{ $sp->name }}</a>
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
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
                <div align="center" class="row">{{$sanpham->fragment('pag1')->render()}}</div>
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
