<div class="side-nav expand-lg">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="side-nav-header">
                <span>{{ __('manager') }}</span>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fa fa-envira"></i>
                    </span>
                    <span class="title">{{ __('Quản lý sản phẩm') }}</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('products.index') }}">{{ __('Thông tin sản phẩm') }}</a>
                    </li>
                    <li>
                        {{-- <a href="{{ route('product_types.index') }}">{{ __('Product Types') }}</a> --}}
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fa fa-envira"></i>
                    </span>
                    <span class="title">{{ __('Hóa đơn') }}</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('bills.index') }}">{{ __('Thông tin hóa đơn') }}</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
