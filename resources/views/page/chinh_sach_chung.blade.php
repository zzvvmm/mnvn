@extends('master')
@section('title', 'Chính sách và quy định chung')
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ<span> <i class="fa fa-caret-right"> </i> </span></a>
                    <span><i></i></span>
                    <a href="{{ route('chinh-sach-chung') }}">&nbsp Chính sách và quy định chung&nbsp</a>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
            @include('navbar')
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="page-title">Chính sách và quy định chung</h2>
                    </div>	
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- PERSONAL-INFOMATION START -->
                        <div class="personal-infomation">
                            <form class="primari-box personal-info-box" id="personalinfo" method="post" action="#">
                                <h3 class="box-subheading">Ch&iacute;nh s&aacute;ch &amp; quy định chung</h3>
                                <div class="single-product-social-share">
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"target="_blank" title="Chia sẻ lên Facebook" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
                                        <li><a href=https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href, d'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false" class="g-plus-link" target="blank"><i class="fa fa-google-plus"></i>Google+</a></li>
                                        <li><a href="https://twitter.com/share?text=Check%20out%20{$items[$i]['name']}%20at%20completeset.us/item/{$items[$i]['item_id']}&url=&via=cmpltst\"  class=\"twitter\  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;" class="twi-link" target="blank"><i class="fa fa-twitter"></i>Tweet</a></li>
                                    </ul>
                                </div>
                                <div class="box-content group">
                                    <p>Si&ecirc;u thị đồ đồng Mỹ Nghệ Việt Nam l&agrave; gian h&agrave;ng trực tuyến của c&ocirc;ng ty cổ phần Vykym&nbsp;chuy&ecirc;n&nbsp;c&aacute;c sản phẩm đồ đồng mỹ nghệ, đồ thờ c&uacute;ng, đồ phong thủy, tượng danh nh&acirc;n, logo quốc huy, c&ocirc;ng an hiệu, qu&acirc;n đội hiệu, qu&agrave; tặng đồ đồng, qu&agrave; tặng mạ v&agrave;ng cao cấp, độc đ&aacute;o. C&aacute;c sản phẩm đều được chế t&aacute;c c&ocirc;ng phu, tỉ mỉ nhất đến từng chi tiết nhằm n&acirc;ng cao&nbsp;thương hiệu, uy t&iacute;n v&agrave; đảm bảo chất lượng&nbsp;cho kh&aacute;ch h&agrave;ng.</p>
                                    <p><strong>1. Ch&iacute;nh s&aacute;ch b&aacute;n h&agrave;ng:</strong></p>
                                    <p>Với ch&iacute;nh s&aacute;ch b&aacute;n h&agrave;ng lu&ocirc;n đặt chữ T&acirc;m v&agrave; T&iacute;n l&ecirc;n h&agrave;ng đầu. Ch&uacute;ng t&ocirc;i cam kết:</p>
                                    <p>&ndash; B&aacute;n h&agrave;ng đ&uacute;ng chất lượng, đ&uacute;ng như m&ocirc; tả tr&ecirc;n website. Kh&ocirc;ng b&aacute;n h&agrave;ng Giả, H&agrave;ng Nh&aacute;i, H&agrave;ng quốc cấm hay Lừa đảo chiếm đoạt t&agrave;i sản của kh&aacute;ch h&agrave;ng.<br /> &ndash; Tư vấn cho kh&aacute;ch h&agrave;ng lựa chọn sản phẩm hiệu quả nhất cho mỗi nhu cầu của từng kh&aacute;ch h&agrave;ng.<br /> &ndash; Lu&ocirc;n giữ b&iacute; mật th&ocirc;ng tin kh&aacute;ch mua h&agrave;ng, giao h&agrave;ng nhanh ch&oacute;ng, an to&agrave;n v&agrave; k&iacute;n đ&aacute;o ( Nếu như kh&aacute;ch h&agrave;ng y&ecirc;u cầu)</p>
                                    <p><strong>2. Quy định chung cho người mua h&agrave;ng:</strong></p>
                                    <p>Để đảm bảo giao dịch được th&agrave;nh c&ocirc;ng v&agrave; đảm bảo quyền lợi v&agrave; nghĩa vụ của cả B&ecirc;n b&aacute;n v&agrave; B&ecirc;n Mua, đề nghị qu&yacute; kh&aacute;ch vui l&ograve;ng tu&acirc;n thủ theo c&aacute;c quy định sau đ&acirc;y:</p>
                                    <p><em>Qu&yacute; kh&aacute;ch h&agrave;ng giao dịch mua b&aacute;n tại trang web n&agrave;y phải đồng &yacute; rằng:</em></p>
                                    <p>+ Qu&yacute; kh&aacute;ch l&agrave; một c&aacute; nh&acirc;n hoặc doanh nghiệp.</p>
                                    <p>+ C&oacute; đầy đủ năng lực h&agrave;nh vi d&acirc;n sự.</p>
                                    <p>+ Phải nghi&ecirc;m t&uacute;c v&agrave; ho&agrave;n to&agrave;n chịu tr&aacute;ch nhiệm khi thực hiện bất kỳ giao dịch mua b&aacute;n tại trang web n&agrave;y đều ph&ugrave; hợp, tu&acirc;n thủ theo quy định của ph&aacute;p luật.</p>
                                    <p>+ Khi đăng k&yacute; t&agrave;i khoản tại trang web của ch&uacute;ng t&ocirc;i, qu&yacute; kh&aacute;ch phải bảo vệ mật khẩu của m&igrave;nh v&agrave; gi&aacute;m s&aacute;t c&aacute;c th&ocirc;ng tin c&oacute; li&ecirc;n quan đến t&agrave;i khoản đ&oacute;. Qu&yacute; kh&aacute;ch hiểu v&agrave; đồng &yacute; rằng sẽ chịu tr&aacute;ch nhiệm cả về việc t&agrave;i khoản của Qu&yacute; kh&aacute;ch được sử dụng bởi bất cứ ai m&agrave; qu&yacute; kh&aacute;ch cho ph&eacute;p truy cập v&agrave;o n&oacute;.</p>
                                    <p>+ C&aacute;c th&ocirc;ng tin m&agrave; Qu&yacute; kh&aacute;ch cung cấp cho Mỹ Nghệ Việt Nam&nbsp;l&agrave; th&ocirc;ng tin ch&iacute;nh x&aacute;c, đầy đủ v&agrave; đ&uacute;ng sự thật.</p>
                                    <p>+ Đọc kỹ b&agrave;i viết m&ocirc; tả về sản phẩm cần mua. Nếu c&oacute; điều g&igrave; kh&ocirc;ng r&otilde;, h&atilde;y gọi điện v&agrave;o 1 trong c&aacute;c số điện thoại chăm s&oacute;c kh&aacute;ch h&agrave;ng của ch&uacute;ng t&ocirc;i: 0986.896.995 &ndash; 04.3.919.6969. Ch&uacute;ng t&ocirc;i sẽ giải đ&aacute;p những thắc mắc cho qu&yacute; kh&aacute;ch.</p>
                                    <p>+ H&atilde;y ch&uacute; &yacute; c&acirc;n nhắc về gi&aacute; cả của sản phẩm, so s&aacute;nh gi&aacute; với gi&aacute; b&aacute;n của nh&agrave; sản xuất v&agrave; với trang web kh&aacute;c để mua h&agrave;ng đ&uacute;ng gi&aacute; đ&uacute;ng chất lượng. Tr&aacute;nh mua phải h&agrave;ng giả h&agrave;ng nh&aacute;i gi&aacute; rẻ v&agrave; k&eacute;m chất lượng.</p>
                                    <p>+ Qu&yacute; kh&aacute;ch chỉ Đặt h&agrave;ng khi đ&atilde; thống nhất về Gi&aacute; cả, hiểu được ch&iacute;nh s&aacute;ch Thanh to&aacute;n, Vận chuyển v&agrave; Giao nhận v&agrave; nhận thấy website của ch&uacute;ng t&ocirc;i đ&aacute;ng để qu&yacute; kh&aacute;ch tin tưởng.</p>
                                    <p>+ Kh&ocirc;ng hủy đặt h&agrave;ng sau khi ch&uacute;ng t&ocirc;i đ&atilde; li&ecirc;n hệ th&ocirc;ng b&aacute;o: H&agrave;ng đang được vận chuyển h&agrave;ng tới cho qu&yacute; kh&aacute;ch. ( L&yacute; do: Tất cả ph&iacute; vận chuyển ch&uacute;ng t&ocirc;i đều thanh to&aacute;n. Qu&yacute; kh&aacute;ch hủy đặt h&agrave;ng đồng nghĩa ch&uacute;ng t&ocirc;i bị thiệt hại về chi ph&iacute; vận chuyển đi v&agrave; chuyển ho&agrave;n. Đồng thời mất thời gian của ch&uacute;ng t&ocirc;i. Điều n&agrave;y thể hiện đạo đức, tư c&aacute;ch của người mua h&agrave;ng). Nếu như trường hợp n&agrave;y xảy ra li&ecirc;n tục 3 lần. Th&ocirc;ng tin địa chỉ v&agrave; số điện thoại của Qu&yacute; kh&aacute;ch sẽ được gửi đến cơ quan ph&aacute;p luật, Qu&yacute; kh&aacute;ch sẽ phải chịu tr&aacute;ch nhiệm trước ph&aacute;p luật về h&agrave;nh vi lừa đảo, quấy nhiễu người b&aacute;n h&agrave;ng.</p>Cảm ơn qu&yacute; kh&aacute;ch. Ch&uacute;c qu&yacute; kh&aacute;ch mua được sản phẩm như &yacute;.</strong></p>
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