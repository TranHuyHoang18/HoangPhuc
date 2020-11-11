<aside class="asideLeft uk-background-oxfordBlue uk-overflow-hidden">
    <div class="uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-left">
            <a href="" class="uk-navbar-item uk-logo asideLeft__logo"><img class="uk-responsive-width uk-responsive-height" src="{{asset('images/logo/logo.jpg')}}" alt=""></a>
        </div>
    </div>
    <ul class="uk-nav-default uk-nav-parent-icon asideLeft__nav" uk-nav>
        <li class="asideLeft__li uk-active">
            <a href="{{url('/admin')}}" class="asideLeft__link">
                <div class="asideLeft__Itemmenu">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-auto">
                            <div class="asideLeft__Icon">
                                <img class="uk-responsive-height" src="{{asset('backend/images/homeIcon.png')}}" alt="">
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <span class="asideLeft__txt1 uk-text-uppercase">Trang chủ</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>

        <li class="asideLeft__li ">
            <a href="{{'admin/danh-muc'}}" class="asideLeft__link">
                <div class="asideLeft__Itemmenu">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-auto">
                            <div class="asideLeft__Icon">
                                <i class="fa fa-th-list uk-responsive-height" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 25px"></i>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <span class="asideLeft__txt1">Danh Mục</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="asideLeft__li uk-parent">
            <a href="#" class="asideLeft__link">
                <div class="asideLeft__Itemmenu">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-auto">
                            <div class="asideLeft__Icon">
                                <i class="fa fa-file-text uk-responsive-height" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 25px"></i>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <span class="asideLeft__txt1">Bài Viết</span>
                        </div>
                    </div>
                </div>
            </a>
            <ul class="uk-nav-sub asideLeft__sub">
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('admin/bai-viet/dich-vu')}}" >Dịch Vụ</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('admin/bai-viet/gia-cuoc')}}" >Giá Cước</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('admin/bai-viet/tin-tuc')}}" >Tin Tức</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('admin/bai-viet/tuyen-dung')}}" >Tuyển Dụng</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('admin/bai-viet/chinh-sach')}}" >Chính sách</a>
                </li>
            </ul>
        </li>
        <li class="asideLeft__li uk-parent">
            <a href="#" class="asideLeft__link">
                <div class="asideLeft__Itemmenu">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-auto">
                            <div class="asideLeft__Icon">
                                <i class="fa fa-search uk-responsive-height" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 25px"></i>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <span class="asideLeft__txt1 ">Quản lý Tra Cứu</span>
                        </div>
                    </div>
                </div>
            </a>
            <ul class="uk-nav-sub asideLeft__sub">
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('admin/diem-gui-hang')}}" >Điểm gửi hàng</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('admin/cuoc-van-chuyen')}}" >Bảng cước</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('admin/buu-cuc')}}" >Bưu cục</a>
                </li>
            </ul>
        </li>
        <li class="asideLeft__li uk-parent">
            <a href="#" class="asideLeft__link">
                <div class="asideLeft__Itemmenu">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-auto">
                            <div class="asideLeft__Icon">
                                <img class="uk-responsive-height" src="{{asset('backend/images/setupIcon.png')}}" alt="">                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <span class="asideLeft__txt1 ">Cài đặt</span>
                        </div>
                    </div>
                </div>
            </a>
            <ul class="uk-nav-sub asideLeft__sub">
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('admin/cai-dat/seo-page')}}" >Seo Trang</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('admin/cai-dat/trang-chu')}}" >Trang chủ</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('admin/cai-dat/lien-he')}}" >Liên Hệ</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('admin/cai-dat/media')}}" >Media</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('admin/cai-dat/danh-muc-vc')}}" >Danh Mục VC</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
