@extends('master')
@section('title', 'Chính sách đổi trả sản phẩm')
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ<span> <i class="fa fa-caret-right"> </i> </span></a>
                    <span><i></i></span>
                    <a href="{{ route('chinh-sach-doi-tra-hang') }}">&nbsp Chính sách đổi trả sản phẩm &nbsp</a>
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
                        <h2 class="page-title">Ch&iacute;nh s&aacute;ch đổi &ndash; trả h&agrave;ng v&agrave; ho&agrave;n tiền</h2>
                    </div>	
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- PERSONAL-INFOMATION START -->
                        <div class="personal-infomation">
                            <form class="primari-box personal-info-box" id="personalinfo" method="post" action="#">
                                <h3 class="box-subheading">Ch&iacute;nh s&aacute;ch đổi &ndash; trả h&agrave;ng v&agrave; ho&agrave;n tiền</h3>
                                <div class="single-product-social-share">
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"target="_blank" title="Chia sẻ lên Facebook" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
                                        <li><a href=https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href, d'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false" class="g-plus-link" target="blank"><i class="fa fa-google-plus"></i>Google+</a></li>
                                        <li><a href="https://twitter.com/share?text=Check%20out%20{$items[$i]['name']}%20at%20completeset.us/item/{$items[$i]['item_id']}&url=&via=cmpltst\"  class=\"twitter\  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;" class="twi-link" target="blank"><i class="fa fa-twitter"></i>Tweet</a></li>
                                    </ul>
                                </div>
                                <div class="box-content group">
                                    <p>Cửa h&agrave;ng sẽ thực hiện việc đổi/trả h&agrave;ng v&agrave; ho&agrave;n tiền cho kh&aacute;ch h&agrave;ng trong những trường hợp sau.</p>
                                    <p><strong>1. Sản phẩm giao kh&ocirc;ng đ&uacute;ng đơn đặt h&agrave;ng.</strong></p>
                                    <p>Bạn nghĩ rằng sản phẩm giao cho bạn kh&ocirc;ng đ&uacute;ng với đơn đặt h&agrave;ng? H&atilde;y li&ecirc;n hệ với ch&uacute;ng t&ocirc;i c&agrave;ng sớm c&agrave;ng tốt, hệ thống của ch&uacute;ng t&ocirc;i sẽ kiểm tra nếu h&agrave;ng của bạn bị gửi nhầm. Trong trường hợp đ&oacute;, ch&uacute;ng t&ocirc;i sẽ thay thế đ&uacute;ng mặt h&agrave;ng bạn y&ecirc;u cầu (khi c&oacute; h&agrave;ng).</p>
                                    <p><strong>2. Sản phẩm mua rồi nhưng kh&ocirc;ng ưng &yacute;.</strong></p>
                                    <p>Người mua c&oacute; thể trả h&agrave;ng khi kh&ocirc;ng vừa &yacute; trong v&ograve;ng 3 ng&agrave;y kể từ ng&agrave;y nhận h&agrave;ng, ch&uacute;ng t&ocirc;i sẽ đổi sản phẩm cho kh&aacute;ch. Sản phẩm muốn đổi hoặc trả y&ecirc;u cầu phải l&agrave; sản phẩm kh&ocirc;ng c&oacute; dấu hiệu đ&atilde; qua sử dụng v&agrave; c&ograve;n nguy&ecirc;n tem, m&aacute;c, nguy&ecirc;n đai kiện ban đầu. Hoặc kh&aacute;ch h&agrave;ng c&oacute; thể đổi sang sang phẩm kh&aacute;c c&oacute; gi&aacute; trị tương đương hoặc cao hơn.</p>
                                    <p><strong>3. Sản phẩm mua bị lỗi.</strong></p>
                                    <p>Qu&yacute; kh&aacute;ch vui l&ograve;ng kiểm tra sản phẩm trước khi thanh to&aacute;n. Trong trường hợp sản phẩm bị hư hại trong qu&aacute; tr&igrave;nh vận chuyển, qu&yacute; kh&aacute;ch vui l&ograve;ng kiểm tra v&agrave; gửi lại sản phẩm cho c&ocirc;ng ty. Đồng thời th&ocirc;ng b&aacute;o cho bộ phận hỗ trợ kh&aacute;ch h&agrave;ng&nbsp;<strong>0986896995</strong>, ch&uacute;ng t&ocirc;i sẽ gửi cho qu&yacute; kh&aacute;ch mặt h&agrave;ng thay thế.</p>
                                    <p><strong>4. Điều kiện đổi trả h&agrave;ng</strong></p>
                                    <p>Điều kiện về thời gian đổi trả: Trong v&ograve;ng 3 ng&agrave;y kể từ khi nhận được h&agrave;ng.</p>
                                    <p><strong>5. Điều kiện về sản phẩm:</strong></p>
                                    <p>&ndash; H&agrave;ng h&oacute;a c&ograve;n đầy đủ c&aacute;c bộ phận, kh&ocirc;ng c&oacute; dấu hiệu sử dụng qu&aacute; nhiều hoặc hỏng h&oacute;c.</p>
                                    <p>&ndash; C&oacute; đầy đủ c&aacute;c giấy tờ k&egrave;m theo (h&oacute;a đơn mua h&agrave;ng, giấy bảo h&agrave;nh, tem sản phẩm&hellip;) v&agrave; c&aacute;c linh kiện, tặng phẩm k&egrave;m theo (nếu c&oacute;).<br /> &ndash; Kh&aacute;ch h&agrave;ng chịu chi ph&iacute; vận chuyển cho việc đổi, trả h&agrave;ng.<br /> &ndash; Trường hợp kh&ocirc;ng đủ c&aacute;c điều kiện tr&ecirc;n th&igrave; quyền quyết định đổi, trả h&agrave;ng thuộc về cửa h&agrave;ng.</p>
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