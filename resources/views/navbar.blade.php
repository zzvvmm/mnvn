<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="left-category-menu">
        <div class="left-product-cat">
            <div class="category-heading">
                <h2>DANH MỤC SẢN PHẨM</h2>
            </div>
            <div class="category-menu-list">
                <div class="category-menu-list">
                    <ul>
                        <li>
                            <a href="{{ route('danh-muc', 'qua-tang-viet') }}"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="source/img/layout2/icon0.png" alt="" /></span>QUÀ TẶNG VIỆT<i class="fa fa-angle-right"></i></a>
                            <div class="cat-left-drop-menu">
                                <div class="left-mega col-xs-12">
                                    @foreach($type as $value)
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
                                    @foreach($type as $value)
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
                                    @foreach($type as $value)
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
                                    @foreach($type as $value)
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
                                    @foreach($type as $value)
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
                                    @foreach($type as $value)
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
                                    @foreach($type as $value)
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