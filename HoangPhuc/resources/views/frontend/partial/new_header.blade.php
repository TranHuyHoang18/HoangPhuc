@include('frontend.partial.homepage_menu_mobile')
<div class="Header">
    <div class="uk-container uk-padding-remove" style="max-width: 90%;padding-left: 5%">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <a href="#my-id" class="uk-navbar-toggle menuHeader__navItem uk-hidden@m" uk-toggle>
                    <div id="m_nav_menu" class="m_nav menu">
                        <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                        <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                        <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                    </div>
                </a>
                <a href="{{url('/')}}" class="uk-navbar-item uk-logo menuHeader__navItem uk-padding-remove-left wow fadeInLeft"><img src="{{asset('frontend/images/logo/logo.png')}}" alt=""></a>
            </div>
            <div class="uk-navbar-right" style="margin-left: 5%;align-items: normal">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li><a href="{{url('/')}}" style="font-size:large;color:white;font-weight: inherit">Trang Chủ</a></li>
                    <li>
                        <a href="{{url('/ruou-vang')}}"  style="font-size:large;color:white;font-weight: inherit">Rượu Vang</a>
                        <div class="uk-navbar-dropdown menuHeader__navbarDropdown menuHeader__navbarDropdown--oneMenu">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="{{url('ruou-vang/san-pham-noi-bat')}}" style="font-size: large!important;">Sản phẩm nổi bật</a></li>
                                <li><a href="{{url('ruou-vang/ruou-vang-y')}}" style="font-size: large!important;">Rượu vang ý</a></li>
                                <li><a href="{{url('ruou-vang/ruou-vang-chile')}}" style="font-size: large!important;">Rượu Vang Chilê</a></li>
                                <li><a href="{{url('ruou-vang/ruou-vang-phap')}}" style="font-size: large!important;">Rượu Vang Pháp</a></li>
                                <li><a href="{{url('ruou-vang/cac-dong-khac')}}" style="font-size: large!important;">Các dòng khác</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('/ruou-manh')}}"  style="font-size:large;color:white;font-weight: inherit">Rượu Mạnh</a>
                        <div class="uk-navbar-dropdown menuHeader__navbarDropdown menuHeader__navbarDropdown--oneMenu">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="{{url('ruou-manh/ruou-chivas')}}" style="font-size: large!important;">Rượu Chivas</a></li>
                                <li><a href="{{url('ruou-manh/ruou-whisky')}}" style="font-size: large!important;">Rượu Whisky</a></li>
                                <li><a href="{{url('ruou-manh/ruou-vodka')}}" style="font-size: large!important;">Rượu Vodka</a></li>
                                <li><a href="{{url('ruou-manh/cac-san-pham-khac')}}" style="font-size: large!important;">Các dòng khác</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('/trai-cay')}}"  style="font-size:large;color:white;font-weight: inherit"> Trái Cây</a>
                    </li>
                    <li>
                        <a href="{{url('/gio-qua')}}"  style="font-size:large;color:white;font-weight: inherit">Giỏ Quà</a>
                        <div class="uk-navbar-dropdown menuHeader__navbarDropdown menuHeader__navbarDropdown--oneMenu">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="{{url('gio-qua/set-qua-ruou')}}" style="font-size: large!important;">Set quà rượu</a></li>
                                <li><a href="{{url('gio-qua/set-qua-trai-cay')}}" style="font-size: large!important;">Set quà trái cây</a></li>
                                <li><a href="{{url('gio-qua/set-qua-dac-biet')}}" style="font-size: large!important;">Set quà đặc biệt</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('tin-tuc/')}}"  style="font-size:large;color:white;font-weight: inherit">Tin Tức</a>
                        <div class="uk-navbar-dropdown menuHeader__navbarDropdown menuHeader__navbarDropdown--oneMenu">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="{{url('tin-tuc/kien-thuc-ve-ruou-vang')}}" style="font-size: large!important;">Kiến thức về rượu vang</a></li>
                                <li><a href="{{url('tin-tuc/kien-thuc-ve-ruou-manh')}}" style="font-size: large!important;">Kiến thức về ruơu mạnh</a></li>
                                <li><a href="{{url('tin-tuc/kien-thuc-ve-trai-cay')}}" style="font-size: large!important;">Kiến thức về trái cây</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('/tuyen-dung/')}}"  style="font-size:large;color:white;font-weight: inherit">Sự Kiện</a>
                        <div class="uk-navbar-dropdown menuHeader__navbarDropdown menuHeader__navbarDropdown--oneMenu">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="{{url('tin-tuc/kien-thuc-ve-ruou-vang')}}" style="font-size: large!important;">Tri ân khách hàng</a></li>
                                <li><a href="{{url('tin-tuc/kien-thuc-ve-ruou-manh')}}" style="font-size: large!important;">Các ngày lễ trong năm</a></li>
                                <li><a href="{{url('tin-tuc/kien-thuc-ve-trai-cay')}}" style="font-size: large!important;">Thông tin tiệc rượu 2020</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="uk-container"style="padding-left: 30%;padding-bottom: 15%">
        <div class="uk-visible@m uk-text-center@s " data-wow-delay="0.5s" >
            <h1 style="color: #e5db18;font-size:80px!important;font-family: 'Embassy BT';margin-top: -12%" >We are master of Wine in <br> Viet Nam</h1>
            <img src="{{asset('frontend/images/divider.png')}}"  alt=""/>
        </div>
    </div>
</div>

