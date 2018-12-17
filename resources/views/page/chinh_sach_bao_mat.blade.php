@extends('master')
@section('title', 'Chính sách bảo mật thông tin')
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ<span> <i class="fa fa-caret-right"> </i> </span></a>
                    <span><i></i></span>
                    <a href="{{ route('chinh-sach-bao-mat') }}">&nbsp Chính sách bảo mật thông tin&nbsp</a>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
            @include('navbar')
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="page-title">Chính sách bảo mật thông tin</h2>
                    </div>	
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- PERSONAL-INFOMATION START -->
                        <div class="personal-infomation">
                            <form class="primari-box personal-info-box" id="personalinfo" method="post" action="#">
                                <h3 class="box-subheading">Ch&iacute;nh s&aacute;ch bảo mật</h3>
                                <div class="single-product-social-share">
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"target="_blank" title="Chia sẻ lên Facebook" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
                                        <li><a href=https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href, d'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false" class="g-plus-link" target="blank"><i class="fa fa-google-plus"></i>Google+</a></li>
                                        <li><a href="https://twitter.com/share?text=Check%20out%20{$items[$i]['name']}%20at%20completeset.us/item/{$items[$i]['item_id']}&url=&via=cmpltst\"  class=\"twitter\  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;" class="twi-link" target="blank"><i class="fa fa-twitter"></i>Tweet</a></li>
                                    </ul>
                                </div>
                                <div class="box-content group">
                                    <p><strong>1. Thu thập th&ocirc;ng tin c&aacute; nh&acirc;n</strong></p>
                                    <p>&ndash; C&aacute;c th&ocirc;ng tin thu thập th&ocirc;ng qua website <strong>Mynghevietnam.vn</strong>&nbsp;sẽ gi&uacute;p ch&uacute;ng t&ocirc;i:</p>
                                    <p>&bull; Hỗ trợ kh&aacute;ch h&agrave;ng khi mua sản phẩm<br /> &bull; Giải đ&aacute;p thắc mắc kh&aacute;ch h&agrave;ng<br /> &bull; Cung cấp cho bạn th&ocirc;ng tin mới nhất tr&ecirc;n Website của ch&uacute;ng t&ocirc;i<br /> &bull; Xem x&eacute;t v&agrave; n&acirc;ng cấp nội dung v&agrave; giao diện của Website<br /> &bull; Thực hiện c&aacute;c bản khảo s&aacute;t kh&aacute;ch h&agrave;ng<br /> &bull; Thực hiện c&aacute;c hoạt động quảng b&aacute; li&ecirc;n quan đến c&aacute;c sản phẩm v&agrave; dịch vụ của ch&uacute;ng t&ocirc;i.</p>
                                    <p><strong>2. Sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n</strong></p>
                                    <p>&ndash;&nbsp;<strong>Mynghevietnam.vn</strong>&nbsp;thu thập v&agrave; sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n qu&yacute; kh&aacute;ch với mục đ&iacute;ch ph&ugrave; hợp v&agrave; ho&agrave;n to&agrave;n tu&acirc;n thủ nội dung của &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; n&agrave;y.<br /> &ndash; Khi cần thiết, ch&uacute;ng t&ocirc;i c&oacute; thể sử dụng những th&ocirc;ng tin n&agrave;y để li&ecirc;n hệ trực tiếp với bạn dưới c&aacute;c h&igrave;nh thức như: gởi thư ngỏ, đơn đặt h&agrave;ng, thư cảm ơn, th&ocirc;ng tin về kỹ thuật v&agrave; bảo mật, qu&yacute; kh&aacute;ch c&oacute; thể nhận được thư định kỳ cung cấp th&ocirc;ng tin sản phẩm, dịch vụ mới, th&ocirc;ng tin về c&aacute;c sự kiện sắp tới hoặc th&ocirc;ng tin tuyển dụng nếu qu&yacute; kh&aacute;ch đăng k&iacute; nhận email th&ocirc;ng b&aacute;o.</p>
                                    <p><strong>3. Chia sẻ th&ocirc;ng tin c&aacute; nh&acirc;n</strong></p>
                                    <p>&ndash; Ngoại trừ c&aacute;c trường hợp về Sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n như đ&atilde; n&ecirc;u trong ch&iacute;nh s&aacute;ch n&agrave;y, ch&uacute;ng t&ocirc;i cam kết sẽ kh&ocirc;ng tiết lộ th&ocirc;ng tin c&aacute; nh&acirc;n bạn ra ngo&agrave;i.<br /> &ndash; Trong một số trường hợp, ch&uacute;ng t&ocirc;i c&oacute; thể thu&ecirc; một đơn vị độc lập để tiến h&agrave;nh c&aacute;c dự &aacute;n nghi&ecirc;n cứu thị trường v&agrave; khi đ&oacute; th&ocirc;ng tin của bạn sẽ được cung cấp cho đơn vị n&agrave;y để tiến h&agrave;nh dự &aacute;n. B&ecirc;n thứ ba n&agrave;y sẽ bị r&agrave;ng buộc bởi một thỏa thuận về bảo mật m&agrave; theo đ&oacute; họ chỉ được ph&eacute;p sử dụng những th&ocirc;ng tin được cung cấp cho mục đ&iacute;ch ho&agrave;n th&agrave;nh dự &aacute;n.<br /> &ndash; Ch&uacute;ng t&ocirc;i c&oacute; thể tiết lộ hoặc cung cấp th&ocirc;ng tin c&aacute; nh&acirc;n của bạn trong c&aacute;c trường hợp thật sự cần thiết như sau: (a) khi c&oacute; y&ecirc;u cầu của c&aacute;c cơ quan ph&aacute;p luật; (b) trong trường hợp m&agrave; ch&uacute;ng t&ocirc;i tin rằng điều đ&oacute; sẽ gi&uacute;p ch&uacute;ng t&ocirc;i bảo vệ quyền lợi ch&iacute;nh đ&aacute;ng của m&igrave;nh trước ph&aacute;p luật; (c) t&igrave;nh huống khẩn cấp v&agrave; cần thiết để bảo vệ quyền an to&agrave;n c&aacute; nh&acirc;n của c&aacute;c th&agrave;nh vi&ecirc;n&nbsp;<strong>VYKYMCORP</strong>&nbsp;kh&aacute;c.</p>
                                    <p><strong>4. Truy xuất th&ocirc;ng tin c&aacute; nh&acirc;n</strong></p>
                                    <p>&ndash; Bất cứ thời điểm n&agrave;o qu&yacute; kh&aacute;ch cũng c&oacute; thể truy cập v&agrave; chỉnh sửa những th&ocirc;ng tin c&aacute; nh&acirc;n của m&igrave;nh theo c&aacute;c li&ecirc;n kết (website&rsquo;s links) th&iacute;ch hợp m&agrave; ch&uacute;ng t&ocirc;i cung cấp.</p>
                                    <p><strong>5. Bảo mật th&ocirc;ng tin c&aacute; nh&acirc;n</strong></p>
                                    <p>&ndash; Tuy nhi&ecirc;n do hạn chế về mặt kỹ thuật, kh&ocirc;ng một dữ liệu n&agrave;o c&oacute; thể được truyền tr&ecirc;n đường truyền internet m&agrave; c&oacute; thể được bảo mật 100%. Do vậy, ch&uacute;ng t&ocirc;i kh&ocirc;ng thể đưa ra một cam kết chắc chắn rằng th&ocirc;ng tin qu&yacute; kh&aacute;ch cung cấp cho ch&uacute;ng t&ocirc;i sẽ được bảo mật một c&aacute;ch tuyệt đối an to&agrave;n, v&agrave; ch&uacute;ng t&ocirc;i kh&ocirc;ng thể chịu tr&aacute;ch nhiệm trong trường hợp c&oacute; sự truy cập tr&aacute;i ph&eacute;p th&ocirc;ng tin c&aacute; nh&acirc;n của qu&yacute; kh&aacute;ch như c&aacute;c trường hợp qu&yacute; kh&aacute;ch tự &yacute; chia sẻ th&ocirc;ng tin với người kh&aacute;c&hellip;. Nếu qu&yacute; kh&aacute;ch kh&ocirc;ng đồng &yacute; với c&aacute;c điều khoản như đ&atilde; m&ocirc; tả ở tr&ecirc;n, Ch&uacute;ng t&ocirc;i khuy&ecirc;n qu&yacute; kh&aacute;ch kh&ocirc;ng n&ecirc;n gửi th&ocirc;ng tin đến cho ch&uacute;ng t&ocirc;i.<br /> &ndash; V&igrave; vậy,&nbsp;<strong>Mynghevietnam.vn</strong>&nbsp;cũng khuyến c&aacute;o qu&yacute; kh&aacute;ch n&ecirc;n bảo mật c&aacute;c th&ocirc;ng tin li&ecirc;n quan đến mật khẩu truy xuất của qu&yacute; kh&aacute;ch v&agrave; kh&ocirc;ng n&ecirc;n chia sẻ với bất kỳ người n&agrave;o kh&aacute;c.<br /> &ndash; Nếu sử dụng m&aacute;y t&iacute;nh chung nhiều người, qu&yacute; kh&aacute;ch n&ecirc;n đăng xuất, hoặc tho&aacute;t hết tất cả cửa sổ Website đang mở.</p>
                                    <p><strong>6. Thay đổi về ch&iacute;nh s&aacute;ch</strong></p>
                                    <p>&ndash; Ch&uacute;ng t&ocirc;i ho&agrave;n to&agrave;n c&oacute; thể thay đổi nội dung trong trang n&agrave;y m&agrave; kh&ocirc;ng cần phải th&ocirc;ng b&aacute;o trước, để ph&ugrave; hợp với c&aacute;c nhu cầu của <strong>Mynghevietnam.vn</strong>&nbsp;cũng như nhu cầu v&agrave; sự phản hồi từ kh&aacute;ch h&agrave;ng nếu c&oacute;. Khi cập nhật nội dung ch&iacute;nh s&aacute;ch n&agrave;y, ch&uacute;ng t&ocirc;i sẽ chỉnh sửa lại thời gian &ldquo;Cập nhật lần cuối&rdquo; b&ecirc;n dưới.<br /> &ndash; Nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; n&agrave;y chỉ &aacute;p dụng tại <strong>Mynghevietnam.vn</strong>. Ch&uacute;ng t&ocirc;i khuyến kh&iacute;ch bạn đọc kỹ ch&iacute;nh s&aacute;ch An to&agrave;n v&agrave; Bảo mật của c&aacute;c trang web của b&ecirc;n thứ ba trước khi cung cấp th&ocirc;ng tin c&aacute; nh&acirc;n cho c&aacute;c trang web đ&oacute;. Ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu tr&aacute;ch nhiệm dưới bất kỳ h&igrave;nh thức n&agrave;o về nội dung v&agrave; t&iacute;nh ph&aacute;p l&yacute; của trang web thuộc b&ecirc;n thứ ba.<br /> &ndash; V&igrave; vậy, bạn đ&atilde; đồng &yacute; rằng, khi bạn sử dụng website của ch&uacute;ng t&ocirc;i sau khi chỉnh sửa nghĩa l&agrave; bạn đ&atilde; thừa nhận, đồng &yacute; tu&acirc;n thủ cũng như tin tưởng v&agrave;o sự chỉnh sửa n&agrave;y. Do đ&oacute;, ch&uacute;ng t&ocirc;i đề nghị bạn n&ecirc;n xem trước nội dung trang n&agrave;y trước khi truy cập c&aacute;c nội dung kh&aacute;c tr&ecirc;n website cũng như bạn n&ecirc;n đọc v&agrave; t ham khảo kỹ nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; của từng website m&agrave; bạn đang truy cập.</p>
                                    <p><strong>7. Th&ocirc;ng tin li&ecirc;n hệ</strong></p>
                                    <p>&ndash; Ch&uacute;ng t&ocirc;i lu&ocirc;n hoan ngh&ecirc;nh c&aacute;c &yacute; kiến đ&oacute;ng g&oacute;p, li&ecirc;n hệ v&agrave; phản hồi th&ocirc;ng tin từ bạn về &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; n&agrave;y. Nếu bạn c&oacute; những thắc mắc li&ecirc;n quan xin vui l&ograve;ng li&ecirc;n hệ theo địa chỉ Email: nguyenviet109@gmail.com</p>
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