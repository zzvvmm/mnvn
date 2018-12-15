@extends('master')
@section('title', 'Hướng dẫn mua hàng')
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ<span> <i class="fa fa-caret-right"> </i> </span></a>
                    <span><i></i></span>
                    <a href="{{ route('huong-dan') }}">&nbsp Hướng dẫn mua hàng&nbsp</a>
                </div>
                <hr>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
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
                                                {{-- {{dd($type)}} --}}
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
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="page-title">Hướng dẫn mua hàng</h2>
                    </div>	
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- PERSONAL-INFOMATION START -->
                        <div class="personal-infomation">
                            <form class="primari-box personal-info-box" id="personalinfo" method="post" action="#">
                                <h3 class="box-subheading">Phương thức mua h&agrave;ng</h3>
                                <div class="single-product-social-share">
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"target="_blank" title="Chia sẻ lên Facebook" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
                                        <li><a href=https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href, d'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false" class="g-plus-link" target="blank"><i class="fa fa-google-plus"></i>Google+</a></li>
                                        <li><a href="https://twitter.com/share?text=Check%20out%20{$items[$i]['name']}%20at%20completeset.us/item/{$items[$i]['item_id']}&url=&via=cmpltst\"  class=\"twitter\  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;" class="twi-link" target="blank"><i class="fa fa-twitter"></i>Tweet</a></li>
                                    </ul>
                                </div>
                                <div class="box-content group">
                                    <p>Bạn c&oacute; thể đặt h&agrave;ng với&nbsp;<strong>Vykym</strong>&nbsp;theo một trong c&aacute;c c&aacute;ch sau:</p>
                                    <p><strong>1. Đặt h&agrave;ng trực tiếp</strong>:&nbsp;th&ocirc;ng qua chức năng B&aacute;n h&agrave;ng online với trực tiếp tr&ecirc;n website.</p>
                                    <p><strong>2. Đặt h&agrave;ng th&ocirc;ng qua Zalo v&agrave; Viber</strong>:&nbsp;Bạn c&oacute; thể đặt h&agrave;ng trực tiếp qua Zalo v&agrave; Viber số:&nbsp;0986.896.995. Bạn h&atilde;y để lại th&ocirc;ng tin li&ecirc;n hệ của bạn! VYKYM&nbsp;sẽ li&ecirc;n hệ với bạn trong ng&agrave;y v&agrave; chuyển h&agrave;ng đến bạn</p>
                                    <p><strong>3. Điện thoại trực tiếp:</strong></p>
                                    <p>&ndash; Tel:&nbsp;04.6680.1314 &ndash; Hotline: 0986.896.995</p>
                                    <p><strong>4. Mua h&agrave;ng trực tiếp:</strong><br /> Qu&yacute; kh&aacute;ch h&agrave;ng c&oacute; thể qua c&aacute;c địa chỉ sau để mua h&agrave;ng trực tiếp &ndash; Mở cửa từ&nbsp;8h đến 19h30&prime;&nbsp;tất cả c&aacute;c ng&agrave;y trong tuần:<br /> Showroom 1: 491A Giải Ph&oacute;ng &ndash; H&agrave; Nội (Gần ngay ng&atilde; ba phố VỌng)<br /> Showroom 2: 358/2 C&aacute;ch mạng Th&aacute;ng 8, P10, Quận 3, Tp.HCM.</p>
                                    <p>&nbsp;</p>
                                    <p><u><strong>Giao h&agrave;ng nhanh ch&oacute;ng v&agrave; đảm bảo</strong></u></p>
                                    <p><strong>1. Trong c&aacute;c quận nội th&agrave;nh H&agrave; Nội :</strong><br /> &ndash; Đối với qu&yacute; kh&aacute;ch trong c&aacute;c quận nội th&agrave;nh H&agrave; Nội khi mua h&agrave;ng , ch&uacute;ng t&ocirc;i sẽ mang đến tận nơi hoặc gửi chuyển ph&aacute;t nhanh t&ugrave;y theo địa điểm v&agrave; y&ecirc;u cầu của qu&yacute; kh&aacute;ch khi mua h&agrave;ng.<br /> &ndash; Kh&ocirc;ng t&iacute;nh chi ph&iacute; chuyển h&agrave;ng trong nội th&agrave;nh H&agrave; Nội với đơn h&agrave;ng lớn hơn 500 ng&agrave;n đồng.</p>
                                    <p><strong>2. C&aacute;c tỉnh th&agrave;nh kh&aacute;c</strong><br /> &ndash; Đối với c&aacute;c địa chỉ ngo&agrave;i địa phận H&agrave; Nội. H&agrave;ng h&oacute;a được gởi nhanh th&ocirc;ng qua bưu điện, SMS. Thời gian qu&yacute; kh&aacute;ch nhận được h&agrave;ng trong khoảng từ 1 đến 3 ng&agrave;y khi ch&uacute;ng t&ocirc;i nhận được đơn h&agrave;ng&nbsp; của Qu&yacute; kh&aacute;ch h&agrave;ng.</p>
                                    <p>* Ch&uacute; &yacute;: Để đảm bảo chất lượng sản phẩm, đối với kh&aacute;ch h&agrave;ng kh&ocirc;ng ở trong nội th&agrave;nh H&agrave; Nội ch&uacute;ng t&ocirc;i sẽ gửi h&agrave;ng qua đường bưu điện v&agrave; kh&aacute;ch h&agrave;ng thanh to&aacute;n trực tiếp với nh&acirc;n vi&ecirc;n bưu điện</p>
                                    <p>&nbsp;</p>
                                    <p><u><strong>H&igrave;nh thức thanh to&aacute;n:</strong></u><br /> Sau khi mua h&agrave;ng, trong qu&aacute; tr&igrave;nh thực hiện thanh to&aacute;n, qu&yacute; kh&aacute;ch c&oacute; thể thanh to&aacute;n bằng những c&aacute;ch sau:</p>
                                    <p><strong>1. Thanh to&aacute;n trực tiếp</strong> với nh&acirc;n vi&ecirc;n giao h&agrave;ng&nbsp;đối với kh&aacute;ch h&agrave;ng trong nội th&agrave;nh H&agrave; Nội</p>
                                    <p><strong>2.Thanh to&aacute;n trực tiếp</strong> với nh&acirc;n vi&ecirc;n giao h&agrave;ng của Bưu Điện đối với kh&aacute;ch h&agrave;ng ở c&aacute;c tỉnh th&agrave;nh kh&aacute;c</p>
                                    <p><strong>3. Thanh to&aacute;n chuyển khoản</strong><br /> &ndash; Ng&acirc;n h&agrave;ng Vietcombank:&nbsp;Nguyễn Quốc Việt. 0451001981148. CN Th&agrave;nh C&ocirc;ng HN</p>
                                    <p>&ndash; Ng&acirc;n h&agrave;ng Agribank Thăng Long:&nbsp;Nguyễn Quốc Việt. 1300206188378</p>
                                    <p>&ndash;&nbsp;Nguyen Quoc Viet &ndash; 2111 0000 327195 &ndash; Ng&acirc;n h&agrave;ng BIDV, CN H&agrave; Nội</p>
                                    <p>&ndash;&nbsp;Nguyen Quoc Viet &ndash; 0101597403 &ndash; Ng&acirc;n h&agrave;ng Đ&ocirc;ng &Aacute; &ndash; CN Kim Li&ecirc;n</p>
                                    <p>&ndash;&nbsp;Nguyen Quoc Viet &ndash; 020011697391 &ndash; Ng&acirc;n h&agrave;ng&nbsp;Sacombank&nbsp;&ndash; CN H&agrave; Nội<br /> <br /> &ndash;&nbsp;C&ocirc;ng ty Cổ Phần VYKYM &ndash;&nbsp; 102010001258262 &ndash; Ng&acirc;n h&agrave;ng VietinBank, CN Hai B&agrave; Trưng</p>
                                    <p><br /> <strong>Xin cảm ơn qu&yacute; kh&aacute;ch. Ch&uacute;c qu&yacute; kh&aacute;ch mua được sản phẩm như &yacute;.</strong></p>
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