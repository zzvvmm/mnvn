@extends('master')
@section('title', 'Thông tin thanh toán')
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ<span> <i class="fa fa-caret-right"> </i> </span></a>
                    <span><i></i></span>
                    <a href="{{ route('thong-tin-thanh-toan') }}">&nbsp Thông tin thanh toán &nbsp</a>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
            @include('navbar')
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="page-title">Thông tin thanh toán</h2>
                    </div>	
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- PERSONAL-INFOMATION START -->
                        <div class="personal-infomation">
                            <form class="primari-box personal-info-box" id="personalinfo" method="post" action="#">
                                <h3 class="box-subheading">Th&ocirc;ng tin thanh to&aacute;n</h3>
                                <div class="single-product-social-share">
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"target="_blank" title="Chia sẻ lên Facebook" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
                                        <li><a href=https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href, d'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false" class="g-plus-link" target="blank"><i class="fa fa-google-plus"></i>Google+</a></li>
                                        <li><a href="https://twitter.com/share?text=Check%20out%20{$items[$i]['name']}%20at%20completeset.us/item/{$items[$i]['item_id']}&url=&via=cmpltst\"  class=\"twitter\  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;" class="twi-link" target="blank"><i class="fa fa-twitter"></i>Tweet</a></li>
                                    </ul>
                                </div>
                                <div class="box-content group">
                                        <div class="entry">
                                            <p>Bạn c&oacute; thể đặt h&agrave;ng với&nbsp;<a href="http://mynghevietnam.com/"><strong>VNBRONZE</strong></a><strong>&nbsp;</strong>theo một trong c&aacute;c c&aacute;ch sau:</p>
                                            <p>1. Đặt h&agrave;ng trực tiếp:&nbsp;th&ocirc;ng qua chức năng B&aacute;n h&agrave;ng online với trực tiếp tr&ecirc;n website.</p>
                                            <p>2. Đặt h&agrave;ng th&ocirc;ng qua yahoo:&nbsp;Bạn c&oacute; thể đặt h&agrave;ng trực tiếp th&ocirc;ng qua nick chat yahoo tr&ecirc;n website. Bạn h&atilde;y để lại th&ocirc;ng tin li&ecirc;n hệ của bạn! VNBRONZE sẽ li&ecirc;n hệ với bạn trong ng&agrave;y v&agrave; chuyển h&agrave;ng đến bạn</p>
                                            <p>3. Điện thoại trực tiếp:</p>
                                            <p><strong>&ndash; Tel:&nbsp;04.6680.1314 &ndash; Hotline: 0986.896.995</strong> </p>
                                            <div>4. Mua h&agrave;ng trực tiếp:</div>
                                            <div>Qu&yacute; kh&aacute;ch h&agrave;ng c&oacute; thể qua c&aacute;c địa chỉ sau để mua h&agrave;ng trực tiếp &ndash; Mở cửa từ&nbsp;8h đến 19h30&prime;&nbsp;tất cả c&aacute;c ng&agrave;y trong tuần:</div>
                                                <div>
                                                    <div><strong>Showroom 1: 491A Giải Ph&oacute;ng &ndash; H&agrave; Nội (Gần ngay ng&atilde; ba phố VỌng).</strong></div>
                                                        <div><strong>Showroom 2:&nbsp;358/2 C&aacute;ch Mạng Th&aacute;ng 8, P10, Quận 3, TP Hồ Ch&iacute; Minh.</strong></div>
                                                            <p>Giao h&agrave;ng nhanh ch&oacute;ng v&agrave; đảm bảo</p>
                                                            <p>1. Trong c&aacute;c quận nội th&agrave;nh H&agrave; Nội :<br /> &ndash; Đối với qu&yacute; kh&aacute;ch trong c&aacute;c quận nội th&agrave;nh H&agrave; Nội khi mua h&agrave;ng , ch&uacute;ng t&ocirc;i sẽ mang đến tận nơi hoặc gửi chuyển ph&aacute;t nhanh t&ugrave;y theo địa điểm v&agrave; y&ecirc;u cầu của qu&yacute; kh&aacute;ch khi mua h&agrave;ng.<br /> &ndash; Kh&ocirc;ng t&iacute;nh chi ph&iacute; chuyển h&agrave;ng trong nội th&agrave;nh H&agrave; Nội với đơn h&agrave;ng lớn hơn 500 ng&agrave;n đồng.</p>
                                                            <p>2. C&aacute;c tỉnh th&agrave;nh kh&aacute;c<br /> &ndash; Đối với c&aacute;c địa chỉ ngo&agrave;i địa phận H&agrave; Nội. H&agrave;ng h&oacute;a được gởi nhanh th&ocirc;ng qua bưu điện, SMS. Thời gian qu&yacute; kh&aacute;ch nhận được h&agrave;ng trong khoảng từ 1 đến 3 ng&agrave;y khi ch&uacute;ng t&ocirc;i nhận được đơn h&agrave;ng&nbsp; của Qu&yacute; kh&aacute;ch h&agrave;ng.</p>
                                                            <p>* Ch&uacute; &yacute;: Để đảm bảo chất lượng sản phẩm, đối với kh&aacute;ch h&agrave;ng kh&ocirc;ng ở trong nội th&agrave;nh H&agrave; Nội ch&uacute;ng t&ocirc;i sẽ gửi h&agrave;ng qua đường bưu điện v&agrave; kh&aacute;ch h&agrave;ng thanh to&aacute;n trực tiếp với nh&acirc;n vi&ecirc;n bưu điện</p>
                                                            <p>H&igrave;nh thức thanh to&aacute;n:<br /> Sau khi mua h&agrave;ng, trong qu&aacute; tr&igrave;nh thực hiện thanh to&aacute;n, qu&yacute; kh&aacute;ch c&oacute; thể thanh to&aacute;n bằng những c&aacute;ch sau:</p>
                                                            <p>1. Thanh to&aacute;n trực tiếp với nh&acirc;n vi&ecirc;n giao h&agrave;ng&nbsp;đối với kh&aacute;ch h&agrave;ng trong nội th&agrave;nh H&agrave; Nội</p>
                                                            <p>2.Thanh to&aacute;n trực tiếp với nh&acirc;n vi&ecirc;n giao h&agrave;ng của Bưu Điện đối với kh&aacute;ch h&agrave;ng ở c&aacute;c tỉnh th&agrave;nh kh&aacute;c</p>
                                                            <p>3. Thanh to&aacute;n chuyển khoản<br /> <em><br /> <strong>&ndash; Ng&acirc;n h&agrave;ng Vietcombank:&nbsp;Nguyen Quốc Việt. 0451001981148. CN Th&agrave;nh C&ocirc;ng HN<br /> &ndash; Ng&acirc;n h&agrave;ng Agribank Thăng Long:&nbsp;Nguyen Quoc Viet. 1300206188378</strong><br /> </em><br /> Xin cảm ơn qu&yacute; kh&aacute;ch. Ch&uacute;c qu&yacute; kh&aacute;ch mua được sản phẩm như &yacute;.</p>
                                                        </div>
                                                        <p><span style="color: #ff6600; font-size: small;"><strong>&ndash;<span style="font-size: medium;"> STK1: 0451001981148 &ndash; Nguyen Quoc Viet- <em><span style="color: #008000;">Ng&acirc;n H&agrave;ng Vietcombank</span></em> &ndash; CN Th&agrave;nh C&ocirc;ng</span></strong></span></p>
                                                        <p><strong>&ndash; STK2: Nguyen Quoc Viet &ndash; 2111 0000 327195 &ndash; <span style="color: #ff0000;">Ng&acirc;n h&agrave;ng BIDV</span>, CN H&agrave; Nội</strong></p>
                                                        <p><strong>&ndash; STK3: Nguyen Quoc Viet &ndash; 0101597403 &ndash; Ng&acirc;n h&agrave;ng<span style="color: #003366;"> Đ&ocirc;ng &Aacute; </span>&ndash; CN Kim Li&ecirc;n</strong></p>
                                                        <p><strong><strong>&ndash; STK3: Nguyen Quoc Viet &ndash; 020011697391 &ndash; Ng&acirc;n h&agrave;ng <span style="color: #008080;"><em>Sacombank</em></span> &ndash; CN H&agrave; Nội<br /> </strong><br /> <span style="color: #3366ff;">&ndash; STK4:</span> C&ocirc;ng ty Cổ Phần VYKYM &ndash;&nbsp; 102010001258262 &ndash; Ng&acirc;n h&agrave;ng <span style="color: #ff0000;">Vietin</span><span style="color: #3366ff;">Bank</span>, CN Hai B&agrave; Trưng</strong></p>
                                                    </div>
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