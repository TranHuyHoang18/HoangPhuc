@extends('frontend.layout.NewHomePageLayout')
@section('title')
    Hầm Rượu Vang Hoàng Phúc - We are master of wine
@endsection
@section('meta')
    <meta name="description" content="Hầm rượu vang Hoàng Phúc - Đơn vị nhập khẩu và phân phối rượu vang cao cấp chính hãng từ các quốc gia nổi tiếng như vang Ý, vang Pháp, vang Chile, vang Mỹ,,.. - với giá tốt, cạnh tranh nhất trên thị trường. Ngoài ra, tại hoàng phúc còn vô số các buổi thử nếm rượu vang để quý khác có sự lựa chọn chai vang phù hợp">
    <meta property="og:title" content="Hầm Rượu Vang Hoàng Phúc  - We are master of wine">
    <meta property="og:description" content="Hầm rượu vang Hoàng Phúc - Đơn vị nhập khẩu và phân phối rượu vang cao cấp chính hãng từ các quốc gia nổi tiếng như vang Ý, vang Pháp, vang Chile, vang Mỹ,,.. - với giá tốt, cạnh tranh nhất trên thị trường. Ngoài ra, tại hoàng phúc còn vô số các buổi thử nếm rượu vang để quý khác có sự lựa chọn chai vang phù hợp">
@endsection
@section('content')
    <div class="wine">
        <div class="uk-container uk-padding-remove" style="max-width: 90%;padding-left: 5%">
            <div class="uk-text-default" uk-grid>
                <div class="uk-width-1-1@s uk-width-1-2@m" style="padding-top:3%">
                    <div class="uk-text-center">
                        <div class="uk-text-large">
                            <p style="font-size: 40px;color: #cc9900;font-style: revert; ">Sang trọng quyến rũ </p>
                            <img src="{{asset('frontend/background/img2.png')}}"   alt="" style="margin-left: 10px"/>
                        </div>
                        <div class="uk-text-left@m uk-text-center@s" style="padding-top: 3%">
                            <p style="font-size: large;font-style:italic;text-align: left">
                                <span style="padding-left: 5%;font-weight: bold">Rượu vang</span> là thức uống đẳng cấp được làm từ những trái chín tự nhiên, lên men và tạo ra những dòng vang với hương thơm tinh khiết, đậm đà lắng sâu trong vòm họng người thưởng thức.
                                Chứa nhiều hoạt tính có lợi, đem lại nhiều tác dụng tốt cho sức khỏe con người như chữa được bệnh về tim mạch, giảm nguy cơ mắc bệnh ung thư, huyết áp cao, và làm sáng da cho phụ nữ,...
                            </p>
                        </div>

                        <div class="uk-text-left@m uk-text-center@s uk-visible@m" style="padding-top: 3%">
                            <p style="font-size: large;font-style:italic;text-align: left">
                                <span style="padding-left: 5%;font-weight: bold">Thật tuyệt vời </span> nếu bạn lựa chọn những chai rượu vang ngon, trang nhã, thiết kế đẹp mắt
                                dành tặng cho những vị khách trong các dịp đặc biệt. Người ta coi rượu vang như một món quà mà thượng đế ban tặng cho nhân loại.
                                Nhìn ngắm màu sắc bằng thị giác, rồi lắc nhẹ ly rượu để khứu giác được thưởng thức mùi thơm quyến rũ, và rồi từ từ thưởng thức vị đậm đà khó cưỡng của rượu ở đầu lưỡi, và cả lắng nghe tiếng ly rượu cụng nhẹ vào nhau cũng đủ để làm thỏa mãn những thực khách khó tính.
                            </p>
                        </div>

                        <div class="uk-text-right@m uk-text-right@s" style="padding-top: 3%;margin-right: 3%">
                            <a>
                                <p style="font-size: large;font-style:italic;color: #cc9900">Hầm rượu vang Hoàng Phúc</p>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="uk-width-1-1@s uk-width-1-2@m">
                    <div class="uk-text-center wow bounceInRight animated" data-wow-delay="0.4s" style=" -webkit-animation-delay: 0.4s;">
                        <img src="{{asset('frontend/images/dish.png')}}"  alt="" style="width: 90%;padding-left: 5%;"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wine_more">
        <div class="uk-text-right@m uk-text-center@s uk-text-middle@s" uk-grid>
            <div class="uk-visible@m uk-width-1-2@m">

            </div>
            <div class="uk-width-1-1@s uk-width-1-2@m">
                <div class="wow bounceInRight animated" style="background: black;opacity: 0.7;padding-bottom: 8%;width: 80%;margin-right: 10%;margin-left:10%;visibility: visible; -webkit-animation-delay: 0.4s;" data-wow-delay="0.4s">
                    <div class="uk-text-center">
                        <p style="font-size:xx-large;color: white;font-style: revert;padding-top: 2% ">Hương vị tuyệt vời</p>
                        <img src="{{asset('frontend/background/divider.png')}}"   alt="" style="margin-left: 10px;"/>
                    </div>
                    <div class="uk-text-left@m uk-text-center@s" style="padding-top: 3%;width: 90%;margin-left: 5%">
                        <p style="font-size: large;font-style:italic;text-align: left;color: white">
                            <span style="padding-left: 6%">Mỗi</span> loại rượu vang đều có những hương vị riêng mà nhiều khi phải là các chuyên gia về rượu vang mới biết và cảm nhận được. Vị giác và khứu giác của mỗi người là khác nhau bởi vậy cần thời gian để cảm nhận. Có thể bạn chưa cảm nhận được ngay những hương vị tuyệt vời này, hãy cứ tiếp tục thưởng thức rượu vang với tất cả lòng say mê và chắc hẳn khẩu vị của bạn sẽ dần cảm nhận rõ hơn.
                        </p>
                    </div>
                    <div class="uk-text-center@s uk-visible@m" style="padding-top: 3%;width: 90%;margin-left: 5%;opacity: 0.9">
                        <img src="{{asset('frontend/background/cook.png')}}" class="cook"  alt="" style="margin: 0px auto"/>
                    </div>
                    <div class="uk-text-right">
                        <a style="font-size: large;font-style:italic;color: #c6c616;padding-right: 3%;margin-top: 3%">
                            Xem thêm các dòng rượu vang ...
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products">
        <div class="uk-text-center@s">
            <div class="uk-text-large  uk-text-center">
                <a style="font-size: xx-large;color: #cc9900; ">Các dòng vang nổi tiếng</a>
            </div>
            <div class="uk-text-center">
                <img src="{{asset('frontend/background/img2.png')}}"   alt="" style="margin-left: 10px"/>
            </div>
            <div  style="margin-top: 1%;padding-left:20px;width: 100%">
                <div class="uk-container" >
                    <div uk-slider>
                        <div class="uk-position-relative">
                            <div class="uk-slider-container home__block__tintuc__space" >
                                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-5@l" uk-grid>
                                  @for($i=1;$i<=9;$i++)
                                        <li style="padding-left: 20px">
                                            <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                <div class="uk-cover-container">
                                                    <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                        <img src="{{asset('frontend/images/test.png')}}" alt="" uk-cover>
                                                        <canvas width="450" height="360"></canvas>
                                                    </a>
                                                </div>
                                                <div class="uk-card-body uk-padding-small">
                                                    <div class="uk-text-default">
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                    </div>
                                                    <div class="uk-text-left uk-text-large">
                                                        <div class="name_product">
                                                            <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                        </div>
                                                    </div>
                                                    <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                </div>
                                            </div>
                                        </li>
                                  @endfor
                                </ul>
                            </div>
                            <div class="uk-visible@m">
                                <a class="uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_prev.png')}}" alt=""></a>
                                <a class="uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_next.png')}}" alt=""></a>
                            </div>
                        </div>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>
                    </div>
                </div>
            </div>
            <div  style="margin-top: 1%;padding-left:20px;width: 100%">
                <div class="uk-container" >
                    <div uk-slider>
                        <div class="uk-position-relative">
                            <div class="uk-slider-container home__block__tintuc__space" >
                                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-5@l" uk-grid>
                                    @for($i=1;$i<=9;$i++)
                                        <li style="padding-left: 20px">
                                            <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                <div class="uk-cover-container">
                                                    <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                        <img src="{{asset('frontend/images/test.png')}}" alt="" uk-cover>
                                                        <canvas width="450" height="360"></canvas>
                                                    </a>
                                                </div>
                                                <div class="uk-card-body uk-padding-small">
                                                    <div class="uk-text-default">
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                    </div>
                                                    <div class="uk-text-left uk-text-large">
                                                        <div class="name_product">
                                                            <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                        </div>
                                                    </div>
                                                    <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                </div>
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="uk-visible@m">
                                <a class="uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_prev.png')}}" alt=""></a>
                                <a class="uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_next.png')}}" alt=""></a>
                            </div>
                        </div>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ruou_manh">
        <div class="uk-text-center uk-visible@m wow bounceInLeft animated animated" data-wow-delay="0.4s" style="background: black;opacity: 0.7;width: 46%;margin-left: 27%;padding-top: 3%;padding-bottom: 5%;visibility: visible; animation-delay: 0.4s; animation-name: bounceInLeft;">
            <div class="uk-text-center uk-text-large" style="color: white">
                <p style="color: #c6c616;font-size: xx-large;opacity: 1;font-style: revert;">Say Nồng Cuốn Hút</p>
                <img src="{{asset('frontend/background/divider.png')}}"   alt="" style="margin-left: 10px;"/>
            </div>
            <div class="uk-text-left@m uk-text-center@s" style="padding-top: 3%;width: 90%;margin-left: 5%">
                <p style="font-size: large;font-style:italic;text-align: left;color: white">
                    <span style="padding-left: 6%">Khác</span> với rượu vang được làm từ nho với độ cồn thấp. Rượu mạnh là những rượu có độ cồn cao từ 40 – 80 Vol (%).Với Brandy và Whisky nồng độ cồn rất cao. Thường từ 70 -80%.<br>
                    <span style="padding-left: 6%;">Rượu</span> mạnh là chất cồn được chưng cất. Chưng cất rượu mạnh là quá trình làm nóng chất lỏng đã lên men, làm cho cồn bốc hơi và cô đọng hơi này thành dạng lỏng. Sau đó người ta đưa chất lỏng này vào thùng gỗ sồi để ủ (đối với Whisky và Cognac) hay đóng chai luôn với Vodka, Gin…..
                </p>
            </div>
            <div class="uk-text-right">
                <a style="font-size: large;font-style:italic;color: #c6c616;padding-right: 3%;margin-top: 3%">
                    Xem thêm các dòng rượu mạnh ...
                </a>
            </div>
        </div>
        <div class="uk-text-center uk-hidden@m wow bounceInLeft animated animated" data-wow-delay="0.4s" style="background: black;opacity: 0.7;width: 90%;margin-left: 5%;padding-top: 3%;padding-bottom: 5%;visibility: visible; animation-delay: 0.4s; animation-name: bounceInLeft;">
            <div class="uk-text-center uk-text-large" style="color: white">
                <p style="color: #c6c616;font-size: xx-large;opacity: 1;font-style: revert;">Say Nồng Cuốn Hút</p>
                <img src="{{asset('frontend/background/divider.png')}}"   alt="" style="margin-left: 10px;"/>
            </div>
            <div class="uk-text-left@m uk-text-center@s" style="padding-top: 3%;width: 90%;margin-left: 5%">
                <p style="font-size: large;font-style:italic;text-align: left;color: white">
                    <span style="padding-left: 6%">Khác</span> với rượu vang được làm từ nho với độ cồn thấp. Rượu mạnh là những rượu có độ cồn cao từ 40 – 80 Vol (%).Với Brandy và Whisky nồng độ cồn rất cao. Thường từ 70 -80%.<br>
                    <span style="padding-left: 6%;">Rượu</span> mạnh là chất cồn được chưng cất. Chưng cất rượu mạnh là quá trình làm nóng chất lỏng đã lên men, làm cho cồn bốc hơi và cô đọng hơi này thành dạng lỏng. Sau đó người ta đưa chất lỏng này vào thùng gỗ sồi để ủ (đối với Whisky và Cognac) hay đóng chai luôn với Vodka, Gin…..
                </p>
            </div>
            <div class="uk-text-right">
                <a style="font-size: large;font-style:italic;color: #c6c616;padding-right: 3%;margin-top: 3%">
                    Xem thêm các dòng rượu mạnh ...
                </a>
            </div>
        </div>

    </div>
    <div class="products">
        <div class="uk-text-center@s">
            <div class="uk-text-large  uk-text-center">
                <a style="font-size: xx-large;color: #cc9900; ">Các dòng rượu mạnh nổi tiếng</a>
            </div>
            <div class="uk-text-center">
                <img src="{{asset('frontend/background/img2.png')}}"   alt="" style="margin-left: 10px"/>
            </div>
            <div  style="margin-top: 1%;padding-left:20px;width: 100%">
                <div class="uk-container" >
                    <div uk-slider>
                        <div class="uk-position-relative">
                            <div class="uk-slider-container home__block__tintuc__space" >
                                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-5@l" uk-grid>
                                    @for($i=1;$i<=9;$i++)
                                        <li style="padding-left: 20px">
                                            <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                <div class="uk-cover-container">
                                                    <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                        <img src="{{asset('frontend/images/tomatin.jpg')}}" alt="" uk-cover>
                                                        <canvas width="450" height="360"></canvas>
                                                    </a>
                                                </div>
                                                <div class="uk-card-body uk-padding-small">
                                                    <div class="uk-text-default">
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                    </div>
                                                    <div class="uk-text-left uk-text-large">
                                                        <div class="name_product">
                                                            <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                        </div>
                                                    </div>
                                                    <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                </div>
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="uk-visible@m">
                                <a class="uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_prev.png')}}" alt=""></a>
                                <a class="uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_next.png')}}" alt=""></a>
                            </div>
                        </div>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>
                    </div>
                </div>
            </div>
            <div  style="margin-top: 1%;padding-left:20px;width: 100%">
                <div class="uk-container" >
                    <div uk-slider>
                        <div class="uk-position-relative">
                            <div class="uk-slider-container home__block__tintuc__space" >
                                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-5@l" uk-grid>
                                    @for($i=1;$i<=9;$i++)
                                        <li style="padding-left: 20px">
                                            <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                <div class="uk-cover-container">
                                                    <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                        <img src="{{asset('frontend/images/volka.jpg')}}" alt="" uk-cover>
                                                        <canvas width="450" height="360"></canvas>
                                                    </a>
                                                </div>
                                                <div class="uk-card-body uk-padding-small">
                                                    <div class="uk-text-default">
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                    </div>
                                                    <div class="uk-text-left uk-text-large">
                                                        <div class="name_product">
                                                            <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                        </div>
                                                    </div>
                                                    <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                </div>
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="uk-visible@m">
                                <a class="uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_prev.png')}}" alt=""></a>
                                <a class="uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_next.png')}}" alt=""></a>
                            </div>
                        </div>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fruit">
        <div class="uk-text-right@m uk-text-center@s uk-text-middle@s" uk-grid>
            <div class="uk-visible@m uk-width-1-2@m">
            </div>
            <div class="uk-width-1-1@s uk-width-1-2@m">
                <div class="wow bounceInRight animated" style="background: black;opacity: 0.7;padding-bottom: 8%;width: 80%;margin-right: 10%;margin-left:10%;visibility: visible; -webkit-animation-delay: 0.4s;" data-wow-delay="0.4s">
                    <div class="uk-text-center">
                        <p style="font-size:xx-large;color: white;font-style: revert;padding-top: 2% ">An toàn bổ dưỡng</p>
                        <img src="{{asset('frontend/background/divider.png')}}"   alt="" style="margin-left: 10px;"/>
                    </div>
                    <div class="uk-text-left@m uk-text-center@s" style="padding-top: 3%;width: 90%;margin-left: 5%">
                        <p style="font-size: large;font-style:italic;text-align: left;color: white">
                            <span style="padding-left: 6%">Được</span> trồng tự nhiên với kỹ thuật chăm bón tốt hơn, đặc biệt tất cả sản phẩm đều được trải qua quy trình kiểm soát chất lượng gắt gao nhằm đảm bảo sức khỏe và quyền lợi cho người tiêu dùng,
                            cho nên trái cây nhập khẩu mang đến sự an tâm khi sử dụng.<br>
                            <span style="padding-left: 6%">Trái</span> cây ngoại cũng là nguồn vitamin và các khoáng chất dồi dào, mang đến nhiều lợi ích về sức khỏe cho con người. Điển hình như cam Cara, táo nhập khẩu... với hàm lượng vitamin A, C, E... và khoáng chất dồi dào, tăng sức đề kháng cho cơ thể, hỗ trợ tiêu hóa, tim mạch và cải thiện làn da.

                        </p>
                    </div>
                    <div class="uk-text-right" style="margin-top: 20px">
                        <a style="font-size: large;font-style:italic;color: #c6c616;padding-right: 3%;margin-top: 3%">
                            Xem thêm ...
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products" uk-grid>
        <div class="uk-width-1-1@s uk-width-1-2@m">
            <div class="uk-text-center@s">
                <div class="uk-text-large uk-text-center">
                    <a style="font-size: xx-large;color: #cc9900; ">Trái Cây Mỹ</a>
                </div>
                <div class="uk-text-center">
                    <img src="{{asset('frontend/background/img2.png')}}"   alt="" style="margin-left: 10px"/>
                </div>
                <div  style="margin-top: 1%;padding-left:20px;width: 100%">
                    <div class="uk-container" >
                        <div uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container home__block__tintuc__space" >
                                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-3@m" uk-grid>
                                        @for($i=1;$i<=3;$i++)
                                            <li style="padding-left: 20px">
                                                <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                    <div class="uk-cover-container">
                                                        <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                            <img src="{{asset('frontend/images/cherry.jpg')}}" alt="" uk-cover>
                                                            <canvas width="450" height="360"></canvas>
                                                        </a>
                                                    </div>
                                                    <div class="uk-card-body uk-padding-small">
                                                        <div class="uk-text-default">
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large">
                                                            <div class="name_product">
                                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="padding-left: 20px">
                                                <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                    <div class="uk-cover-container">
                                                        <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                            <img src="{{asset('frontend/images/envy.jpg')}}" alt="" uk-cover>
                                                            <canvas width="450" height="360"></canvas>
                                                        </a>
                                                    </div>
                                                    <div class="uk-card-body uk-padding-small">
                                                        <div class="uk-text-default">
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large">
                                                            <div class="name_product">
                                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="padding-left: 20px">
                                                <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                    <div class="uk-cover-container">
                                                        <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                            <img src="{{asset('frontend/images/taoxanh.jpg')}}" alt="" uk-cover>
                                                            <canvas width="450" height="360"></canvas>
                                                        </a>
                                                    </div>
                                                    <div class="uk-card-body uk-padding-small">
                                                        <div class="uk-text-default">
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large">
                                                            <div class="name_product">
                                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                                <div class="uk-visible@m">
                                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_prev.png')}}" alt=""></a>
                                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_next.png')}}" alt=""></a>
                                </div>
                            </div>
                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-1@s uk-width-1-2@m">
            <div class="uk-text-center@s">
                <div class="uk-text-large uk-text-center">
                    <a style="font-size: xx-large;color: #cc9900; ">Trái Cây Nhật</a>
                </div>
                <div class="uk-text-center">
                    <img src="{{asset('frontend/background/img2.png')}}"   alt="" style="margin-left: 10px"/>
                </div>
                <div  style="margin-top: 1%;padding-left:20px;width: 100%">
                    <div class="uk-container" >
                        <div uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container home__block__tintuc__space" >
                                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-3@m" uk-grid>
                                        @for($i=1;$i<=3;$i++)
                                            <li style="padding-left: 20px">
                                                <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                    <div class="uk-cover-container">
                                                        <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                            <img src="{{asset('frontend/images/duoiluoi.jpg')}}" alt="" uk-cover>
                                                            <canvas width="450" height="360"></canvas>
                                                        </a>
                                                    </div>
                                                    <div class="uk-card-body uk-padding-small">
                                                        <div class="uk-text-default">
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large">
                                                            <div class="name_product">
                                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="padding-left: 20px">
                                                <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                    <div class="uk-cover-container">
                                                        <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                            <img src="{{asset('frontend/images/taonhat.jpg')}}" alt="" uk-cover>
                                                            <canvas width="450" height="360"></canvas>
                                                        </a>
                                                    </div>
                                                    <div class="uk-card-body uk-padding-small">
                                                        <div class="uk-text-default">
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large">
                                                            <div class="name_product">
                                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="padding-left: 20px">
                                                <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                    <div class="uk-cover-container">
                                                        <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                            <img src="{{asset('frontend/images/nhotnhat.jpg')}}" alt="" uk-cover>
                                                            <canvas width="450" height="360"></canvas>
                                                        </a>
                                                    </div>
                                                    <div class="uk-card-body uk-padding-small">
                                                        <div class="uk-text-default">
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large">
                                                            <div class="name_product">
                                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                                <div class="uk-visible@m">
                                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_prev.png')}}" alt=""></a>
                                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_next.png')}}" alt=""></a>
                                </div>
                            </div>
                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-1@s uk-width-1-2@m">
            <div class="uk-text-center@s">
                <div class="uk-text-large  uk-text-center">
                    <a style="font-size: xx-large;color: #cc9900; ">Trái Cây Hàn Quốc</a>
                </div>
                <div class="uk-text-center">
                    <img src="{{asset('frontend/background/img2.png')}}"   alt="" style="margin-left: 10px"/>
                </div>
                <div  style="margin-top: 1%;padding-left:20px;width: 100%">
                    <div class="uk-container" >
                        <div uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container home__block__tintuc__space" >
                                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-3@m" uk-grid>
                                        @for($i=1;$i<=3;$i++)
                                            <li style="padding-left: 20px">
                                                <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                    <div class="uk-cover-container">
                                                        <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                            <img src="{{asset('frontend/images/nhohan.jpg')}}" alt="" uk-cover>
                                                            <canvas width="450" height="360"></canvas>
                                                        </a>
                                                    </div>
                                                    <div class="uk-card-body uk-padding-small">
                                                        <div class="uk-text-default">
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large">
                                                            <div class="name_product">
                                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="padding-left: 20px">
                                                <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                    <div class="uk-cover-container">
                                                        <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                            <img src="{{asset('frontend/images/lehanquoc.png')}}" alt="" uk-cover>
                                                            <canvas width="450" height="360"></canvas>
                                                        </a>
                                                    </div>
                                                    <div class="uk-card-body uk-padding-small">
                                                        <div class="uk-text-default">
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large">
                                                            <div class="name_product">
                                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="padding-left: 20px">
                                                <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                    <div class="uk-cover-container">
                                                        <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                            <img src="{{asset('frontend/images/duale.jpg')}}" alt="" uk-cover>
                                                            <canvas width="450" height="360"></canvas>
                                                        </a>
                                                    </div>
                                                    <div class="uk-card-body uk-padding-small">
                                                        <div class="uk-text-default">
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large">
                                                            <div class="name_product">
                                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                                <div class="uk-visible@m">
                                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_prev.png')}}" alt=""></a>
                                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_next.png')}}" alt=""></a>
                                </div>
                            </div>
                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-1@s uk-width-1-2@m">
            <div class="uk-text-center@s">
                <div class="uk-text-large  uk-text-center">
                    <a style="font-size: xx-large;color: #cc9900; ">Trái Cây Nam Phi</a>
                </div>
                <div class="uk-text-center">
                    <img src="{{asset('frontend/background/img2.png')}}"   alt="" style="margin-left: 10px"/>
                </div>
                <div  style="margin-top: 1%;padding-left:20px;width: 100%">
                    <div class="uk-container" >
                        <div uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container home__block__tintuc__space" >
                                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-3@m" uk-grid>
                                        @for($i=1;$i<=3;$i++)
                                            <li style="padding-left: 20px">
                                                <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                    <div class="uk-cover-container">
                                                        <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                            <img src="{{asset('frontend/images/nhonamphi.jpg')}}" alt="" uk-cover>
                                                            <canvas width="450" height="360"></canvas>
                                                        </a>
                                                    </div>
                                                    <div class="uk-card-body uk-padding-small">
                                                        <div class="uk-text-default">
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large">
                                                            <div class="name_product">
                                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="padding-left: 20px">
                                                <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                    <div class="uk-cover-container">
                                                        <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                            <img src="{{asset('frontend/images/lenamphi.jpg')}}" alt="" uk-cover>
                                                            <canvas width="450" height="360"></canvas>
                                                        </a>
                                                    </div>
                                                    <div class="uk-card-body uk-padding-small">
                                                        <div class="uk-text-default">
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large">
                                                            <div class="name_product">
                                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="padding-left: 20px">
                                                <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                                    <div class="uk-cover-container">
                                                        <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                            <img src="{{asset('frontend/images/luunamphi.jpg')}}" alt="" uk-cover>
                                                            <canvas width="450" height="360"></canvas>
                                                        </a>
                                                    </div>
                                                    <div class="uk-card-body uk-padding-small">
                                                        <div class="uk-text-default">
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color:#9b9a9a;font-size:16px"></i>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large">
                                                            <div class="name_product">
                                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" style="color:black;">{{'Danzante Tuscan Red Blend'}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="uk-text-left uk-text-large" style="color:red;position: relative;float:left">{{'xuất sứ: Italya'}}</div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                                <div class="uk-visible@m">
                                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_prev.png')}}" alt=""></a>
                                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_next.png')}}" alt=""></a>
                                </div>
                            </div>
                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gio_qua" uk-grid style="margin-top: 0px">
        <div class="uk-width-1-1@s uk-width-1-2@m">
            <div class="uk-text-center" style="width:80%;margin-left: 10%; background: darkred;opacity: 0.7;margin-top: 5%;padding-top:3%;padding-bottom: 3%">
                <div class="uk-text-center">
                    <p style="font-size:xx-large;color: white;font-style: revert;padding-top: 2% ">Giỏ Quà tặng đặc biệt</p>
                    <img src="{{asset('frontend/background/divider.png')}}"   alt="" style="margin-left: 10px;"/>
                </div>
                <div class="uk-text-left@s" style="padding:2% 5% 2% 5%">
                    <p style="color: white;opacity: 1;font-size: large;font-style: italic"> <span style="padding-left: 6%">Giỏ quà</span> khi ta biếu tặng, nó mang đến ý nghĩ thể hiện sự quan tâm, kính trọng, gửi gắm tình cảm, sự biết ơn, tấm lòng của người tặng.
                       Giỏ quà vừa chất chứa nghĩa cử cao đẹp, và mang đầy thành ý của người tặng giỏ muốn đem đến cho người nhận. Vì vậy nó rất quan trong và ý nghĩa trong những dịp đặc biệt!</p>
                </div>

                <div class="uk-text-left" uk-grid>
                    <div class="uk-width-1-1@s uk-width-1-2@m" style="margin-top: 1%;padding-top: 0px">
                        <label style="color: yellow;padding-left: 5%;font-size:large ">Tên Khách hàng</label>
                        <input type="text" name="name" placeholder="Nhập tên của quý khách" style="width: 90%; margin-left: 5%; height: 30px;color: black"/>
                    </div>
                    <div class="uk-width-1-1@s uk-width-1-2@m" style="margin-top: 1%;padding-top: 0px">
                        <label style="color: yellow;padding-left: 5%;font-size:large ">SĐT</label>
                        <input type="text" name="phone" placeholder="Nhập sđt của quý khách" style="width: 90%; margin-left: 5%; height: 30px;color: black"/>
                    </div>
                    <div class="uk-width-1-1@s uk-width-1-1@m" style="margin-top: 1%;padding-top: 0px">
                        <label style="color: yellow;padding-left: 5%;font-size:large ">Địa chỉ giao hàng</label>
                        <textarea type="text" name="address"  style="width: 90%; margin-left: 5%; height: 60px;color: black">Địa chỉ giao hàng</textarea>
                    </div>
                    <div class="uk-width-1-1@s uk-width-1-1@m" style="margin-top: 1%;padding-top: 0px">
                        <label style="color: yellow;padding-left: 5%;font-size:large ">Yêu cầu giỏ quà</label>
                        <textarea type="text" name="address"  style="width: 90%; margin-left: 5%; height: 60px;color: black">Làm cho chị giỏ gồm 5 loại quả khoảng 500k tối 8 giờ chị qua lấy!</textarea>
                    </div>
                    <div class="uk-text-center" style="margin: 0px auto;padding-top: 2%">
                        <button class="uk-text-center" style="background:yellow; padding: 5px 20px 5px 20px; color: red;font-size: large;border: none;border-radius: 5px 5px 5px 5px;font-weight: bold">Đặt hàng</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-1@s uk-width-1-2@m">
            <div class="uk-text-center" style="width: 90%; margin-left: 5%;padding-top: 5%">
                <div uk-slider>
                    <div class="uk-position-relative">
                        <div class="uk-slider-container home__block__tintuc__space" >
                            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-3@m" uk-grid>
                                @for($i=1;$i<=6;$i++)
                                    <li style="padding-left: 20px">
                                        <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                            <div class="uk-cover-container">
                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                    <img src="{{asset('frontend/background/gioqua.jpg')}}" alt="" uk-cover>
                                                    <canvas width="450" height="360"></canvas>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                        <div class="uk-visible@m">
                            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_prev.png')}}" alt=""></a>
                            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_next.png')}}" alt=""></a>
                        </div>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>
                </div>
            </div>
            <div class="uk-text-center" style="width: 90%; margin-left: 5%">
                <div uk-slider>
                    <div class="uk-position-relative">
                        <div class="uk-slider-container home__block__tintuc__space" >
                            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
                                @for($i=1;$i<=6;$i++)
                                    <li style="padding-left: 20px">
                                        <div class="uk-card uk-card-default home__block__tintuc__card" style="box-shadow: none">
                                            <div class="uk-cover-container">
                                                <a href="{{url('phu-kien-thuy-sinh/detail/')}}" >
                                                    <img src="{{asset('frontend/background/gioqua.jpg')}}" alt="" uk-cover>
                                                    <canvas width="540" height="450"></canvas>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                        <div class="uk-visible@m">
                            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_prev.png')}}" alt=""></a>
                            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_next.png')}}" alt=""></a>
                        </div>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>
                </div>
            </div>
            <div class="uk-text-center" style="width: 90%; margin-left: 5%;padding-top: 2%">
                <p style="color: white;font-size: large; font-style: italic"> Chúng tôi luôn mong mang lại những <span style="color: yellow">giỏ quà đặc biệt nhất</span> trong những <span style="color: yellow">ngày đặc biệt nhất</span> cho <span style="color: yellow">quý khách</span>!</p>
            </div>
            <div class="uk-text-right@s " style="width: 90%; margin-left: 5%;padding-top: 2%">
                <p style="color: white;font-size: large; font-style: italic">Hầm rượu vang Hoàng Phúc</p>
            </div>
        </div>
    </div>
@endsection

