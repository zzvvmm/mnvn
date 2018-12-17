@extends('master')

@section('title', 'Chính sách vận chuyển và giao nhận')

@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            @include('navbar')
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="page-title">Chính sách vận chuyển và giao nhận</h2>
                    </div>	
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- PERSONAL-INFOMATION START -->
                        <div class="personal-infomation">
                            <form class="primari-box personal-info-box" id="personalinfo" method="post" action="#">
                                <h3 class="box-subheading">Ch&iacute;nh s&aacute;ch vận chuyển v&agrave; giao nhận</h3>
                                <div class="single-product-social-share">
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"target="_blank" title="Chia sẻ lên Facebook" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
                                        <li><a href=https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href, d'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false" class="g-plus-link" target="blank"><i class="fa fa-google-plus"></i>Google+</a></li>
                                        <li><a href="https://twitter.com/share?text=Check%20out%20{$items[$i]['name']}%20at%20completeset.us/item/{$items[$i]['item_id']}&url=&via=cmpltst\"  class=\"twitter\  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;" class="twi-link" target="blank"><i class="fa fa-twitter"></i>Tweet</a></li>
                                    </ul>
                                </div>
                                <div class="box-content group">
                                    <p><strong>DỊCH VỤ &Aacute;P DỤNG :</strong></p>
                                    <p>Tất cả c&aacute;c kh&aacute;ch h&agrave;ng c&oacute; nhu cầu giao h&agrave;ng trực tiếp tại nh&agrave;.</p>
                                    <p><strong>PHẠM VI &Aacute;P DỤNG:</strong></p>
                                    <p>&ndash; Giao h&agrave;ng miễn ph&iacute; v&agrave; c&oacute; ph&iacute;. (t&ugrave;y gi&aacute; trị đơn h&agrave;ng v&agrave; thời gian nhận h&agrave;ng)</p>
                                    <p><strong>THỜI GIAN GIAO H&Agrave;NG NỘI TH&Agrave;NH:</strong></p>
                                    <p>&ndash; C&aacute;c đơn h&agrave;ng mua th&ocirc;ng thường trong ng&agrave;y (thuộc khu vực Nội th&agrave;nh): sẽ được xử l&yacute; đơn h&agrave;ng v&agrave; giao trong ng&agrave;y hoặc theo thời gian y&ecirc;u cầu cụ thể của Qu&yacute; kh&aacute;ch h&agrave;ng.<br /> &ndash; Trong một số trường hợp kh&aacute;ch quan c&oacute; thể giao h&agrave;ng chậm trễ do những điều kiện bất khả kh&aacute;ng như thời tiết xấu, điều kiện giao th&ocirc;ng kh&ocirc;ng thuận lợi, xe hỏng h&oacute;c tr&ecirc;n đường giao h&agrave;ng, trục trặc trong qu&aacute; tr&igrave;nh xuất h&agrave;ng.<br /> &ndash; Trong thời gian chờ đợi nhận h&agrave;ng, Qu&yacute; kh&aacute;ch c&oacute; bất cứ thắc mắc g&igrave; về th&ocirc;ng tin vận chuyển xin vui l&ograve;ng li&ecirc;n hệ tổng đ&agrave;i to&agrave;n chăm s&oacute;c kh&aacute;ch h&agrave;ng 04.6680.1314&nbsp;để nhận trợ gi&uacute;p.</p>
                                    <p><strong>Đ&Oacute;NG G&Oacute;I GIAO H&Agrave;NG Ở XA</strong></p>
                                    <p>Đối với đơn h&agrave;ng giao h&agrave;ng ở xa th&ocirc;ng qua dịch vụ vận chuyển thu&ecirc; ngo&agrave;i, để an to&agrave;n cho h&agrave;ng h&oacute;a của Qu&yacute; kh&aacute;ch h&agrave;ng, cửa h&agrave;ng sẽ đ&oacute;ng g&oacute;i sản phẩm trong c&aacute;c bao b&igrave; hoặc th&ugrave;ng h&agrave;ng chuy&ecirc;n dụng lớn hơn k&iacute;ch thước h&agrave;ng.</p>
                                    <p><strong>CƯỚC PH&Iacute; GIAO NHẬN Ở&nbsp;XA</strong></p>
                                    <p>&ndash; Chuyển ph&aacute;t sản phẩm cho c&aacute;c đơn h&agrave;ng ở xa theo cước ph&iacute; bưu điện ems.vn hoặc cước ph&iacute; giao nhanh của giaohangnhanh.vn. hoặc Qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ chăm s&oacute;c kh&aacute;ch h&agrave;ng 04.6680.1314 để được tư vấn mức ph&iacute; vận chuyển.</p>
                                    <p><strong>TR&Aacute;CH NHIỆM VỚI H&Agrave;NG H&Oacute;A VẬN CHUYỂN</strong></p>
                                    <p>&ndash; Nếu dịch vụ vận chuyển do ch&uacute;ng t&ocirc;i chỉ định, ch&uacute;ng t&ocirc;i sẽ chịu tr&aacute;ch nhiệm với c&aacute;c sản phẩm v&agrave; c&aacute;c rủi ro như mất m&aacute;t hoặc hư hại của sản phẩm trong suốt qu&aacute; tr&igrave;nh vận chuyển đến Qu&yacute; kh&aacute;ch h&agrave;ng.</p>
                                    <p>&ndash; Qu&yacute; kh&aacute;ch h&agrave;ng c&oacute; tr&aacute;ch nhiệm kiểm tra sản phẩm khi nhận h&agrave;ng. Khi ph&aacute;t hiện sản phẩm bị hư hại, trầy xước, bể vỡ, mốp m&eacute;o, hoặc sai th&ocirc;ng tin sản phẩm th&igrave; k&yacute; x&aacute;c nhận t&igrave;nh trạng h&agrave;ng h&oacute;a với Nh&acirc;n vi&ecirc;n giao nhận v&agrave; th&ocirc;ng b&aacute;o ngay cho Bộ phận chăm s&oacute;c kh&aacute;ch h&agrave;ng:&nbsp;04.6680.1314</p>
                                    <p>&ndash; Sau khi Qu&yacute; kh&aacute;ch h&agrave;ng đ&atilde; k&yacute; nhận sản phẩm m&agrave; kh&ocirc;ng ghi ch&uacute; hoặc c&oacute; &yacute; kiến về h&agrave;ng h&oacute;a. Ch&uacute;ng t&ocirc;i kh&ocirc;ng c&oacute; tr&aacute;ch nhiệm với những y&ecirc;u cầu đổi trả v&igrave; hư hỏng, trầy xước, bể vỡ, mốp m&eacute;o, sai h&agrave;ng h&oacute;a,&hellip; từ Qu&yacute; kh&aacute;ch h&agrave;ng sau n&agrave;y.</p>
                                    <p>&ndash; Nếu dịch vụ vận chuyển do Qu&yacute; kh&aacute;ch h&agrave;ng chỉ định v&agrave; lựa chọn th&igrave; Qu&yacute; kh&aacute;ch h&agrave;ng sẽ chịu tr&aacute;ch nhiệm với h&agrave;ng h&oacute;a v&agrave; c&aacute;c rủi ro như mất m&aacute;t hoặc hư hại của h&agrave;ng h&oacute;a trong suốt qu&aacute; tr&igrave;nh vận chuyển h&agrave;ng từ cửa h&agrave;ng đến Qu&yacute; kh&aacute;ch h&agrave;ng. Kh&aacute;ch h&agrave;ng sẽ chịu tr&aacute;ch nhiệm cước ph&iacute; v&agrave; tổn thất li&ecirc;n quan.</p>
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