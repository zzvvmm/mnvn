@extends('master')
@section('title', 'Chính sách bảo hành')
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ<span> <i class="fa fa-caret-right"> </i> </span></a>
                    <span><i></i></span>
                    <a href="{{ route('chinh-sach-bao-hanh') }}">&nbsp Chính sách bảo hành sản phẩm &nbsp</a>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
            @include('navbar')
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="page-title">Chính sách bảo hành sản phẩm</h2>
                    </div>	
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- PERSONAL-INFOMATION START -->
                        <div class="personal-infomation">
                            <form class="primari-box personal-info-box" id="personalinfo" method="post" action="#">
                                <h3 class="box-subheading">Ch&iacute;nh s&aacute;ch bảo h&agrave;nh</h3>
                                <div class="single-product-social-share">
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"target="_blank" title="Chia sẻ lên Facebook" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
                                        <li><a href=https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href, d'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false" class="g-plus-link" target="blank"><i class="fa fa-google-plus"></i>Google+</a></li>
                                        <li><a href="https://twitter.com/share?text=Check%20out%20{$items[$i]['name']}%20at%20completeset.us/item/{$items[$i]['item_id']}&url=&via=cmpltst\"  class=\"twitter\  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;" class="twi-link" target="blank"><i class="fa fa-twitter"></i>Tweet</a></li>
                                    </ul>
                                </div>
                                <div class="box-content group">
                                    <div class="entry">
                                        <p>1. Ch&uacute;ng t&ocirc;i bảo h&agrave;nh trong c&aacute;c trường hợp sau:</p>
                                        <p>&ndash; H&agrave;ng h&oacute;a để tự bị oxi h&oacute;a gỉ xanh, tự gỉ s&eacute;t đồng.</p>
                                        <p>&ndash; H&agrave;ng h&oacute;a trong thời gian bảo h&agrave;nh c&oacute; hiện tượng xỉn m&agrave;u.</p>
                                        <p>2. Ch&uacute;ng t&ocirc;i kh&ocirc;ng bảo h&agrave;nh trong c&aacute;c trường hợp sau:</p>
                                        <p>&ndash; H&agrave;ng h&oacute;a để nước hoặc h&oacute;a chất đổ v&agrave;o.</p>
                                        <p>&ndash; H&agrave;ng h&oacute;a cầm&nbsp;nhiều bằng tay c&oacute; &nbsp;mồ h&ocirc;i d&iacute;nh nhiều tr&ecirc;n sản phẩm g&acirc;y hiện tượng ngả m&agrave;u.</p>
                                        <p>&ndash; H&agrave;ng h&oacute;a bị hư hại do mưa gi&oacute;, t&aacute;c động của thi&ecirc;n nhi&ecirc;n l&agrave;m vỡ, g&atilde;y sản phẩm. T&aacute;c động của con người chủ &yacute; l&agrave;m sản phẩm m&eacute;o, g&atilde;y, biến dạng</p>
                                    </div>
                                </div>  
                            </form>							
                        </div>
                        <!-- PERSONAL-INFOMATION END -->
                    </div>
                </div>
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