@extends('frontend.layout.HomePageLayout')
@section('title')
    Hầm Rượu Vang Hoàng Phúc - We are master of wine
@endsection
@section('meta')
    <meta name="description" content="Hầm rượu vang Hoàng Phúc - Đơn vị nhập khẩu và phân phối rượu vang cao cấp chính hãng từ các quốc gia nổi tiếng như vang Ý, vang Pháp, vang Chile, vang Mỹ,,.. - với giá tốt, cạnh tranh nhất trên thị trường. Ngoài ra, tại hoàng phúc còn vô số các buổi thử nếm rượu vang để quý khác có sự lựa chọn chai vang phù hợp">
    <meta property="og:title" content="Hầm Rượu Vang Hoàng Phúc  - We are master of wine">
    <meta property="og:description" content="Hầm rượu vang Hoàng Phúc - Đơn vị nhập khẩu và phân phối rượu vang cao cấp chính hãng từ các quốc gia nổi tiếng như vang Ý, vang Pháp, vang Chile, vang Mỹ,,.. - với giá tốt, cạnh tranh nhất trên thị trường. Ngoài ra, tại hoàng phúc còn vô số các buổi thử nếm rượu vang để quý khác có sự lựa chọn chai vang phù hợp">
@endsection
@section('content')
    <div class="content">
        <div class="about" id="about">
            <div class="container" style="width: 90%;margin-left: 5%;padding-top: 3%;padding-bottom: 5%">
                <div class="col-md-6 about-leftgrid wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                    <h2>Sang trọng - Lịch sự - Xu hướng</h2>
                    <img src="{{asset('frontend/images/img2.png')}}" alt=""/>
                    <p style="font-size: xx-large;font-style:italic;text-align: left">
                       <span style="padding-left: 5%;font-weight: bold">Rượu vang</span> là thức uống đẳng cấp được làm từ những trái chín tự nhiên, lên men và tạo ra những dòng vang với hương thơm tinh khiết, đậm đà lắng sâu trong vòm họng người thưởng thức.
                       Chứa nhiều hoạt tính có lợi, đem lại nhiều tác dụng tốt cho sức khỏe con người như chữa được bệnh về tim mạch, giảm nguy cơ mắc bệnh ung thư, huyết áp cao, và làm sáng da cho phụ nữ,...
                    </p>
                </div>
                <div class="col-md-6 about-rightgrid  wow bounceInLeft animated" data-wow-delay="0.4s" style=" -webkit-animation-delay: 0.4s;">
                    <img src="{{asset('frontend/images/dish.png')}}"  alt="" style="width: 90%;padding-left: 5%;"/>
                </div>
            </div>

        </div>
        <div class="igredients" id="igredients">
            <div class="container">
                <div class="fine-igredients wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                    <div class="fine-igredient agile">
                        <h3>Fine ingredients</h3>
                        <img src="{{asset('frontend/images/divider.png')}}"   alt=""/>
                        <p>If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out!</p>
                    </div>
                    <div class="igredients-imgs w3layouts">
                        <div class="igredients-img w3l-agile">
                            <img src="{{asset('frontend/images/pic-1.png')}}" class="img-responsive"  alt=""/>
                        </div>
                        <div class="igredients-img w3l-agile">
                            <img src="{{asset('frontend/images/pic-2.png')}}" class="img-responsive"  alt=""/>
                        </div>
                        <div class="igredients-img w3l-agile">
                            <img src="{{asset('frontend/images/pic-3.png')}}" class="img-responsive"  alt=""/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="menu9" id="menu">
            <div class="container">

                <div class="col-md-6 menu-grids wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                    <div class="menu-grid1 agileits">
                        <h3>appetisers</h3>
                        <img src="{{asset('frontend/images/img2.png')}}"  alt=""/>
                        <div class="menu-grid">
                            <div class="tzatsikis">
                                <div class="tzatsiki">
                                    <h4>tzatziki</h4>
                                </div>
                                <div class="dollar">
                                    <h4>$3.99</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>Refreshing traditional cucumber and garlic yoghurt dip.</p>
                        </div>
                        <div class="menu-grid">
                            <div class="tzatsikis">
                                <div class="tzatsiki">
                                    <h4>Aubergine_Salad</h4>
                                </div>
                                <div class="dollar">
                                    <h4>$5.50</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>.Pureed eggplant, garlic, green pepper and tomato dip.</p>
                        </div>
                        <div class="menu-grid">
                            <div class="tzatsikis">
                                <div class="tzatsiki">
                                    <h4>Aubergine_Salad </h4>
                                </div>
                                <div class="dollar">
                                    <h4>$5.25</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>Pureed eggplant, garlic, green pepper and tomato dip.</p>
                        </div>
                    </div>
                    <div class="menu-grid2">
                        <h3>Salads</h3>
                        <img src="{{asset('frontend/images/img2.png')}}"  alt=""/>
                        <div class="menu-grid">
                            <div class="tzatsikis">
                                <div class="tzatsiki">
                                    <h4>Olive_Special</h4>
                                </div>
                                <div class="dollar">
                                    <h4>$3.99</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>Refreshing traditional cucumber and garlic yoghurt dip.</p>
                        </div>
                        <div class="menu1-grid">
                            <a href="#">special</a>
                            <div class="menu-grid5">
                                <div class="menu-grid">
                                    <div class="tzatsikis">
                                        <div class="tzatsiki">
                                            <h4>Greek_Salad</h4>
                                        </div>
                                        <div class="dollar">
                                            <h4>$5.50</h4>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <p>.Pureed eggplant, garlic, green pepper and tomato dip.</p>
                                </div>
                            </div>
                        </div>
                        <div class="menu-grid">
                            <div class="tzatsikis">
                                <div class="tzatsiki">
                                    <h4>Gusto_Salad </h4>
                                </div>
                                <div class="dollar">
                                    <h4>$5.25</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>Pureed eggplant, garlic, green pepper and tomato dip.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 menu-grids1  wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                    <div class="menu-grid3">
                        <h3>Starters</h3>
                        <img src="{{asset('frontend/images/img2.png')}}"  alt=""/>
                        <div class="menu-grid">
                            <div class="tzatsikis">
                                <div class="tzatsiki">
                                    <h4>Haloumi</h4>
                                </div>
                                <div class="dollar">
                                    <h4>$3.99</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>Refreshing traditional cucumber and garlic yoghurt dip.</p>
                        </div>
                        <div class="menu-grid">
                            <div class="tzatsikis">
                                <div class="tzatsiki">
                                    <h4>Spinach_Pie</h4>
                                </div>
                                <div class="dollar">
                                    <h4>$5.50</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>.Pureed eggplant, garlic, green pepper and tomato dip.</p>
                        </div>
                    </div>
                    <div class="menu-grid4">
                        <h3>Main Dishes</h3>
                        <img src="{{asset('frontend/images/img2.png')}}"   alt=""/>
                        <div class="menu-grid">
                            <div class="tzatsikis">
                                <div class="tzatsiki">
                                    <h4>Cornish_Mackerel</h4>
                                </div>
                                <div class="dollar">
                                    <h4>$3.99</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>Refreshing traditional cucumber and garlic yoghurt dip.</p>
                        </div>
                        <div class="menu1-grid">
                            <a href="#">special</a>
                            <div class="menu-grid5">
                                <div class="menu-grid">
                                    <div class="tzatsikis">
                                        <div class="tzatsiki">
                                            <h4>Roast_Lamb </h4>
                                        </div>
                                        <div class="dollar">
                                            <h4>$5.50</h4>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <p>.Pureed eggplant, garlic, green pepper and tomato dip.</p>
                                </div>
                            </div>
                        </div>
                        <div class="menu-grid">
                            <div class="tzatsikis">
                                <div class="tzatsiki">
                                    <h4>Fried_Chicken</h4>
                                </div>
                                <div class="dollar">
                                    <h4>$5.25</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>Pureed eggplant, garlic, green pepper and tomato dip.</p>
                        </div>
                        <div class="menu-grid">
                            <div class="tzatsikis">
                                <div class="tzatsiki">
                                    <h4>Pastitsio</h4>
                                </div>
                                <div class="dollar">
                                    <h4>$3.99</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>Refreshing traditional cucumber and garlic yoghurt dip.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="reviews" id="reviews">
            <div class="container">
                <div class="review-info  wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                    <h3>Guest Reviews</h3>
                    <img src="{{asset('frontend/images/divider.png')}}" alt="" />
                    <p>"If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out!</p>
                    <p>- food inc, New York</p>
                </div>
            </div>

        </div>
        <div class="reservations" id="reservations">
            <div class="container">
                <div class="col-md-6 grid-section wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                    <div class="reservation-leftgrid">
                        <img src="{{asset('frontend/images/pic-4.jpg')}}" class="img-responsive"  alt="" />
                    </div>
                    <div class="reservation-leftgrid1">
                        <img src="{{asset('frontend/images/pic-5.jpg')}}" class="img-responsive"  alt="" />
                    </div>
                    <div class=" clearfix"></div>
                </div>
                <div class="col-md-6 reservation-rightgrid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                    <h4>Just the right food</h4>
                    <img src="{{asset('frontend/images/img2.png')}}" alt=""/>
                    <p>If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food.</p>
                    <span>Delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out! Perfect materials and freshly baked food.</span>
                    <div class="contact agileinfo">
                        <form action="#" method="post">

                            <div class="contact-text wthree">
                                <h5>name</h5>
                                <input type="text" class="text" name="name" value="your name *" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your name*';}">
                            </div>
                            <div class="contact-text">
                                <h5>name</h5>
                                <input type="text" class="text" name="email" value="your e-mail *" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your e-mail*';}">
                            </div>
                            <div class="contact-text">
                                <h5>date</h5>
                                <input class="date" id="datepicker" type="text" value="date*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'date*';}">
                            </div>
                            <div class="contact-text">
                                <h5>party number</h5>
                                <div class="dropdown-button">
                                    <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"flat"}'>
                                        <option value="0">party number</option>
                                        <option value="1">0000001</option>
                                        <option value="2">0000002</option>
                                        <option value="3">0000003</option>
                                        <option value="4">0000004</option>
                                        <option value="5">0000005</option>
                                        <option value="6">0000006</option>
                                        <option value="7">0000007</option>
                                        <option value="8">0000008</option>
                                        <option value="9">0000009</option>
                                    </select>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                            <input type="button" class="btn btn-1 btn-1c" value="Book now!">
                        </form>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

