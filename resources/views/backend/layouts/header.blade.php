<div class="header navbar">
    <div class="header-container">
        <div class="nav-logo">
            <a href="#">
                <div class="logo logo-dark"></div>
                <div class="logo logo-white"></div>
            </a>
        </div>
        <ul class="nav-left">
            <li>
                <a class="sidenav-fold-toggler" href="javascript:void(0);">
                    <i class="mdi mdi-menu"></i>
                </a>
                <a class="sidenav-expand-toggler" href="javascript:void(0);">
                    <i class="mdi mdi-menu"></i>
                </a>
            </li>
            <li class="search-box">
                <a class="search-toggle" href="javascript:void(0);">
                    <i class="search-icon mdi mdi-magnify"></i>
                    <i class="search-icon-close mdi mdi-close-circle-outline"></i>
                </a>
            </li>
            <li class="search-input">
                {{ Form::text('search', null, ['class' => 'form-group'], ['placeholder' => __('search')]) }}
                <div class="search-predict">
                    <div class="search-footer">
                        <span>{{ __('search') }} '<b class="text-dark"><span class="serach-text-bind"></span></b>'</span>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="nav-right">
            @guest
            <li><a href="#">{{ __('login') }}</a></li>
            @else
            <li class="user-profile dropdown dropdown-animated scale-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img class="profile-img img-fluid" src="{{ asset('source/img/product/' . 'avatar.png') }}" alt="avatar">
                </a>
                <ul class="dropdown-menu dropdown-md p-v-0">
                    <li><center>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{-- <i class="ti-power-off p-r-10"></i> --}}
                            <span><h4>{{ __('Đăng xuất') }}</h4></span>
                        </a></center>
                        {!! Form::open(['method' => 'POST', 'url' => 'manager/logout', 'id' => 'logout-form']) !!} 
                        {!! Form::close() !!}
                    </li>
                </ul>
            </li>
            @endguest
            <li class="m-r-10">
                <a class="quick-view-toggler" href="javascript:void(0);">
                    <i class="mdi mdi-format-indent-decrease"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
