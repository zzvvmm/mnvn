@extends('master')
@section('title', 'Giới thiệu')
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ<span> <i class="fa fa-caret-right"> </i> </span></a>
                    <span><i></i></span>
                    <a href="{{ route('gioi-thieu') }}">&nbsp Giới thiệu công ty &nbsp</a>
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
                        <h2 class="page-title">Giới thiệu công ty</h2>
                    </div>	
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- PERSONAL-INFOMATION START -->
                        <div class="personal-infomation">
                            <form class="primari-box personal-info-box" id="personalinfo" method="post" action="#">
                                <h3 class="box-subheading">Công ty Cổ Phần Đồ Đồng Mỹ Nghệ Việt Nam</h3>
                                <div class="single-product-social-share">
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"target="_blank" title="Chia sẻ lên Facebook" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
                                        <li><a href=https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href, d'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false" class="g-plus-link" target="blank"><i class="fa fa-google-plus"></i>Google+</a></li>
                                        <li><a href="https://twitter.com/share?text=Check%20out%20{$items[$i]['name']}%20at%20completeset.us/item/{$items[$i]['item_id']}&url=&via=cmpltst\"  class=\"twitter\  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;" class="twi-link" target="blank"><i class="fa fa-twitter"></i>Tweet</a></li>
                                    </ul>
                                </div>
                                <p><strong>Trụ sở: 491A Giải Ph&oacute;ng &ndash; H&agrave; Nội</p>
                                <p>Chi nh&aacute;nh: </strong>358/2 C&aacute;ch mạng Th&aacute;ng 8, P10, Quận 3, Tp.HCM.</p>
                                <p>&nbsp;</p>
                                <p>C&aacute;c sản phẩm v&agrave; dịch vụ ch&iacute;nh của ch&uacute;ng t&ocirc;i:</p>
                                <p>1. Chế t&aacute;c&nbsp;v&agrave; cung cấp qu&agrave; tặng:&nbsp;Trống đồng, Ch&ugrave;a 1 cột, Khu&ecirc; Văn C&aacute;c, Rồng L&yacute;, Tượng Danh Nh&acirc;n, Đĩa đồng lưu niệm, c&aacute;c sản phẩm mang đặc th&ugrave; văn h&oacute;a Việt Nam, H&agrave; Nội, S&agrave;i G&ograve;n&hellip;&nbsp;</p>
                                <p>&nbsp;</p>
                                <p><img style="width: 681px;" src="http://driver.gianhangvn.com/image/qua-tang-luu-niem-0605060-764767j22996.jpg" alt="" /></p>
                                <p>&nbsp;</p>
                                <p>2. Chế t&aacute;c sản phẩm trang tr&iacute; nội ngoại thất, huy hiệu C&ocirc;ng An, Qu&acirc;n Đội, Quốc huy Việt Nam, Ng&ocirc;i sao, B&uacute;a Liềm, logo c&aacute;c c&ocirc;ng ty, c&aacute;c doanh nghiệp, ban ng&agrave;nh.</p>
                                <p><img style="width: 681px;" src="http://driver.gianhangvn.com/image/huy-hieu-0605154-764771j22996.jpg" alt="" /></p>
                                <p>&nbsp;</p>
                                <p><img style="width: 681px;" src="http://driver.gianhangvn.com/image/huy-hieu-0605165-764772j22996.jpg" alt="" /></p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>3. Cung cấp c&aacute;c sản phẩm Vật Phẩm Phong thủy, đồ phong thủy, linh vật phong thủy, vật kh&iacute; phong thủy: Tỳ hưu, Kỳ L&acirc;n, Thiềm Thừ, Hồ L&ocirc;, Quan C&ocirc;ng, D&ecirc; đồng, G&agrave; Đồng, c&aacute;c linh vật kh&aacute;c&hellip;</p>
                                <p>&nbsp;</p>
                                <p><img style="width: 618px;" src="http://driver.gianhangvn.com/image/do-phong-thuy-0814-022-764774j22996.jpg" alt="" /></p>
                                <p>&nbsp;</p>
                                <p><img style="width: 618px;" src="http://driver.gianhangvn.com/image/do-phong-thuy-0814-085-764775j22996.jpg" alt="" /></p>
                                <p>&nbsp;</p>
                                <p>4. Đ&uacute;c c&aacute;c sản phẩm Đồ thờ c&uacute;ng, Đỉnh thờ c&uacute;ng, Lư đồng, B&aacute;t Hương, Lọ Hoa, Hạc Đồng, Đỉnh giả cổ, Ho&agrave;nh phi c&acirc;u đối, Đại Tự.&nbsp;Tượng Phật thờ c&uacute;ng: Phật th&iacute;ch ca, A di đ&agrave;, Quan &Acirc;m Bồ t&aacute;t, Địa Tạng, Di lặc, Đạt Ma Sư Tổ, Mật T&ocirc;ng...</p>
                                <p>&nbsp;</p>
                                <p><img style="width: 681px;" src="http://driver.gianhangvn.com/image/do-tho-cung-0605312-764761j22996.jpg" alt="" /><img style="opacity: 0.9; width: 618px;" src="http://driver.gianhangvn.com/image/do-tho-cung0814-23-764759j22996.jpg" alt="" /></p>
                                <p><img style="opacity: 0.9; width: 463px;" src="http://driver.gianhangvn.com/image/do-tho-cung0814-36-764760j22996.jpg" alt="" /></p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>5. Chạm, đi&ecirc;u khắc, ph&ugrave; đi&ecirc;u c&aacute;c sản phẩm tranh đồng, tranh chữ đồng, tranh phong thủy, tranh d&acirc;n gian, tranh tứ qu&yacute;, tứ b&igrave;nh, tứ linh, c&aacute;c sản phẩm về t&ocirc;n gi&aacute;o</p>
                                <p>&nbsp;</p>
                                <p><img style="width: 618px;" src="http://driver.gianhangvn.com/image/tranh-dong-0814-211-764777j22996.jpg" alt="" /></p>
                                <p>&nbsp;</p>
                                <p>6.&nbsp;Tạc tượng, đ&uacute;c tượng Danh Nh&acirc;n: Đức Th&aacute;nh Trần, Tượng B&aacute;c Hồ, L&yacute; Th&aacute;i Tổ, Tượng Th&aacute;nh Gi&oacute;ng, Tượng Quan C&ocirc;ng, Khổng Minh, Napoleon.&nbsp;Dịch vụ đ&uacute;c tượng ch&acirc;n dung, tạc tượng b&aacute;n th&acirc;n theo y&ecirc;u cầu.</p>
                                <p>&nbsp;</p>
                                <p><img style="width: 681px;" src="http://driver.gianhangvn.com/image/img_1845-764778j22996.jpg" alt="" /></p>
                                <p>&nbsp;</p>
                                <p><img style="width: 681px;" src="http://driver.gianhangvn.com/image/img_1839-764780j22996.jpg" alt="" /></p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>Mọi chi tiết xin li&ecirc;n hệ:</p>
                                <p><strong>MỸ NGHỆ VIỆT NAM &ndash;&nbsp;MYNGHEVIETNAM.COM.</strong></p>
                                <p>* H&agrave; Nội:&nbsp;Số 491A Giải Ph&oacute;ng, Q.Thanh Xu&acirc;n, TP.H&agrave; Nội.<br /> Tel.&nbsp;024. 6680.1314&nbsp;&ndash; Hotline:&nbsp;0986.896.995 &ndash; 0902 004 660</p>
                                <p>* S&agrave;i G&ograve;n:&nbsp;358/2 C&aacute;ch mạng Th&aacute;ng 8, P10, Quận 3, Tp.HCM.<br /> Hotline:&nbsp;&nbsp;0938.905.333 - 0168.31.88866<br /> Email.<strong>&nbsp;contact@mynghevietnam.com&nbsp;</strong></p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&ndash; Đ&uacute;c Đỉnh đồng, đỉnh giả cổ, đỉnh tam kh&iacute; khảm bạc, b&aacute;t hương đồng, 
                                    lọ hoa đồng, ống đựng hương v&agrave; x&ocirc;ng trầm.<br /> &ndash;
                                    Đ&uacute;c vật phẩm phong thủy: Tỳ hưu, kỳ l&acirc;n, ngh&ecirc;, thiềm thừ, tượng Quan C&ocirc;ng, 
                                    Tượng Khổng Minh,&hellip;<br /> &ndash; Đ&uacute;c tượng Phật Th&iacute;ch Ca, Phật b&agrave;
                                    Quan &Acirc;m Bồ T&aacute;t, Phật Di Lặc, Tam đa Ph&uacute;c Lộc Thọ, Phật ngh&igrave;n mắt ngh&igrave;n tay 
                                    v&agrave; c&aacute;c sản phẩm tượng TADA, mật t&ocirc;ng.<br /> &ndash; Đ&uacute;c tượng B&aacute;c Hồ, 
                                    tượng ch&acirc;n dung B&aacute;c Hồ, tượng B&aacute;c Hồ ngồi đọc b&aacute;o, tượng B&aacute;c Hồ viết
                                    s&aacute;ch.<br /> &ndash; Cung cấp c&aacute;c sản phẩm qu&agrave; tặng, đĩa qu&agrave; tặng, đĩa lưu niệm, 
                                    đĩa qu&agrave; tặng đối t&aacute;c, trống đồng Việt Nam, trống đồng đ&uacute;c thu nhỏ, 
                                    tượng Rồng thời L&yacute;, tượng Th&aacute;nh Gi&oacute;ng.<br /> &ndash; Chế t&aacute;c Ho&agrave;nh Phi, 
                                    C&acirc;u Đối, Đại Tự, Cuốn Thư bằng đồng với nhiều mẫu m&atilde;.<br /> &ndash; Chế t&aacute;c
                                    Huy Hiệu C&ocirc;ng An Nh&acirc;n D&acirc;n, Quốc Huy Việt Nam bằng đồng.<br /> &ndash; Đ&uacute;c tượng danh nh&acirc;n: Trần Hưng Đạo, L&yacute; 
                                    Th&aacute;i Tổ, Quang Trung, L&ecirc; Lợi, Trần Nh&acirc;n T&ocirc;ng,&hellip;<br /> &ndash; Đ&uacute;c tượng ch&acirc;n dung, tượng b&aacute;n 
                                    th&acirc;n, đ&uacute;c theo y&ecirc;u cầu, theo thiết kế, mẫu m&atilde; của kh&aacute;ch h&agrave;ng.<br /> &ndash; Ch&uacute;ng t&ocirc;i 
                                    nhận đặt h&agrave;ng theo y&ecirc;u cầu theo mọi mẫu theo y&ecirc;u cầu với thời gian ngắn. Đặc biệt, c&aacute;c doanh nghiệp muốn m&oacute;n 
                                    qu&agrave; của m&igrave;nh cho đối t&aacute;c, nh&acirc;n vi&ecirc;n th&ecirc;m &yacute; nghĩa, h&atilde;y li&ecirc;n hệ với ch&uacute;ng 
                                    t&ocirc;i ngay.
                                </p>
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