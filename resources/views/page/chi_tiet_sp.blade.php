@extends('master')
@section('title', 'Chi tiết sản phẩm')
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
                    <a href="{{ route('loai-san-pham', $type->slug) }}">&nbsp{{ $type->name }}&nbsp<i class="fa fa-caret-right"> </i> </a>
                    <a href="{{ route('chi-tiet-san-pham', $sanpham->slug) }}">&nbsp{{ $sanpham->name }}&nbsp</a>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <div class="row">
            @include('navbar')
            <br/>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <!-- SINGLE-PRODUCT-DESCRIPTION START -->
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                        <div class="single-product-view">
                            <div class="tab-content">
                                <div class="tab-pane active" id="thumbnail_1">
                                    <div class="single-product-image">
                                        <img src="source/img/product/{{ $sanpham->getImage($sanpham->id)->name }}" alt="single-product-image" />
                                        <a class="new-mark-box">Mới</a>
                                        @foreach($sanpham->getAllImage($sanpham->id) as $sp)
                                            <a class="fancybox" href="source/img/product/{{ $sp->name }}" data-fancybox-group="gallery"><span class="btn large-btn">Zoom<i class="fa fa-search-plus"></i></span></a>
                                        @endforeach
                                    </div>	
                                </div>
                            </div>		
                        </div>
                        <div class="select-product">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs select-product-tab bxslider">
                                @foreach($sanpham->getAllImage($sanpham->id) as $sp)
                                    <li class="active">
                                        <a href="#thumbnail_1" data-toggle="tab"><img src="source/img/product/{{ $sp->name }}" alt="pro-thumbnail" /></a>
                                    </li>
                                @endforeach
                            </ul>										
                        </div>
                        {{-- <div class="single-product-social-share">
                            <ul>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"target="_blank" title="Chia sẻ lên Facebook" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
                                <li><a href=https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href, d'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false" class="g-plus-link" target="blank"><i class="fa fa-google-plus"></i>Google+</a></li>
                                <li><a href="https://twitter.com/share?text=Check%20out%20{$items[$i]['name']}%20at%20completeset.us/item/{$items[$i]['item_id']}&url=&via=cmpltst\"  class=\"twitter\  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;" class="twi-link" target="blank"><i class="fa fa-twitter"></i>Tweet</a></li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                        <div class="single-product-descirption">
                            <h2>Tên :<b>{{ $sanpham->name}}</b></h2>
                            <div class="single-product-review-box">
                                <div class="single-product-social-share">
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"target="_blank" title="Chia sẻ lên Facebook" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
                                        <li><a href=https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href, d'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false" class="g-plus-link" target="blank"><i class="fa fa-google-plus"></i>Google+</a></li>
                                        <li><a href="https://twitter.com/share?text=Check%20out%20{$items[$i]['name']}%20at%20completeset.us/item/{$items[$i]['item_id']}&url=&via=cmpltst\"  class=\"twitter\  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;" class="twi-link" target="blank"><i class="fa fa-twitter"></i>Tweet</a></li>
                                    </ul>
                                </div>
                                <div class="rating-box">
                                    Chất lượng :
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <br/>
                            <div class="single-product-price">
                                <h2>Giá : {{ number_format($sanpham->price) }} VNĐ</h2>
                            </div>
                            <div class="single-product-review-box">
                                <p><b>Gồm :</b> {{ $sanpham->include }}</p>
                                <br/>
                                <b>
                                    <p>Bảo hành : {{ $sanpham->guarantee }} tháng</p>
                                    <br/>
                                    <p>Màu : {{ $sanpham->color }}</p>
                                </b>
                            </div>
                                {{-- <a href="{{ route('dat-hang')}}" class="btn btn-danger" role="button">Mua ngay</a> --}}
                                <a href="{{ route('them-gio-hang', $sanpham->id) }}" class="btn btn-warning" role="button">Thêm vào giỏ hàng</a>
								<div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="product-more-info-tab">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs more-info-tab">
                                <li class="active"><a href="#moreinfo" data-toggle="tab">Mô tả chi tiết</a></li>
                                <li><a href="#datasheet" data-toggle="tab">Thông số chi tiết</a></li>
                                <li><a href="#review" data-toggle="tab">Đánh giá</a></li>
                            </ul>
                              <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="moreinfo">
                                    <div class="tab-description">
                                       {!! $sanpham->detail_description !!}
                                           
                                    </div>
                                </div>
                                <div class="tab-pane" id="datasheet">
                                    <div class="deta-sheet">
                                        <table class="table-data-sheet">			
                                            <tbody>
                                                <tr class="odd">
                                                    <td>Chiều cao</td>
                                                    <td>{{ $sanpham->height }} cm </td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="td-bg">Cân nặng </td>
                                                    <td class="td-bg">{{ $sanpham->weight }} kg</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>Chất liệu</td>
                                                    <td>{{ $sanpham->material }}</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>Màu</td>
                                                    <td>{{ $sanpham->color }}</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>Thời gian bảo hành</td>
                                                    <td>{{ $sanpham->guarantee }} tháng</td>
                                                </tr>
                                            </tbody>
                                        </table>				
                                    </div>
                                </div>
                                <div class="tab-pane" id="review">
                                    <div class="row tab-review-row">
                                        <div class="col-xs-5 col-sm-4 col-md-4 col-lg-3 padding-5">
                                            <div class="tab-rating-box">
                                                <span>Chất lượng đánh giá</span>
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>	
                                                {{-- <div class="review-author-info">
                                                    <strong>write A REVIEW</strong>
                                                    <span>06/22/2015</span>
                                                </div>															 --}}
                                            </div>
                                        </div>
                                        <div class="col-xs-7 col-sm-8 col-md-8 col-lg-9 padding-5">
                                            <div class="write-your-review">
                                                <p><strong>Nhận xét từ khách hàng</strong></p>
                                                {{-- <p>write A REVIEW</p> --}}
                                                <span class="usefull-comment">Có 0 nhận xét</span>
                                                {{-- <a href="#">Report abuse </a> --}}
                                            </div>
                                        </div>
                                        {{-- <a href="#" class="write-review-btn">Write your review!</a> --}}
                                    </div>
                                </div>
                            </div>									
                        </div>
                    </div>
                </div>
                <!-- SINGLE-PRODUCT INFO TAB END -->
                <!-- RELATED-PRODUCTS-AREA START -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="left-title-area">
                        <h2 class="left-title">Sản phẩm cùng loại : {{ $type->name }}</h2>
                        </div>	
                    </div>
                    <div class="related-product-area featured-products-area">
                        <div class="col-sm-12">
                            <div class=" row">
                                <div class="related-product">
                                    @foreach($sp_cungloai as $cl)
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="{{route('chi-tiet-san-pham', $cl->slug)}}"><img src="source/img/product/{{ $cl->getImage($cl->id)->name }}" alt="product-image" /></a>
                                                        <a class="new-mark-box">Mới</a>
                                                        <div class="overlay-content">
                                                            <ul>
                                                                <li><a class="fancybox" href="source/img/product/{{ $cl->getImage($cl->id)->name }}" title="Zoom ảnh"><i class="fa fa-search-plus"></i></a></li>
                                                                <li><a href="{{ route('them-gio-hang', $cl->id) }}" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
                                                                <li><a href="{{route('chi-tiet-san-pham', $cl->slug)}}" title="Xem chi tiết"><i class="fa fa-search"></i></a></li>
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
                                                                <span>BH:&nbsp{{ $cl->guarantee }}&nbsptháng</span>
                                                            </div>
                                                        </div>
                                                        <a href="{{route('chi-tiet-san-pham', $cl->slug)}}">Tên:&nbsp{{ $cl->name }}</a>
                                                        <div class="price-box">
                                                            <span class="price">Giá:&nbsp{{ number_format($cl->price) }}&nbspVNĐ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- RELATED-CAROUSEL END -->
                            </div>	
                        </div>
                    </div>	
                </div>
                <!-- RELATED-PRODUCTS-AREA END -->
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
