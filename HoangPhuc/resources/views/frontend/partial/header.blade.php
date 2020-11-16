<div class="header" id="home" style="font-size: 20px">
    <div class="container" style="width: 100%">
        <div class="header-top w3l">
            <div class="logo wow fadeInLeft" data-wow-delay="0.5s">
                <a href="{{url('/')}}"><img src="{{asset('frontend/images/logo.png')}}" class="img-responsive" alt=""/></a>
            </div>
            <div class="top-menu">
                <span class="menu"> </span>
                <ul>
                    <li><a href="{{url('/')}}" class="scroll"><span data-hover="home" style="font-size: xx-large">Trang Chủ</span></a></li>
                    <li>
                        <a href="{{url('ruou-vang')}}" class="scroll" ><span data-hover="wine-ruouvang" style="font-size: xx-large">Rượu Vang</span></a>
                    </li>
                    <li><a href="{{url('ruou-manh')}}" class="scroll"><span data-hover="Whisky-ruoumanh" style="font-size: xx-large">Rượu Mạnh</span></a></li>
                    <li><a href="{{url('trai-cay')}}" class="scroll"><span data-hover="fruit-traicay" style="font-size:xx-large">Trái Cây</span></a></li>
                    <li><a href="{{url('gio-qua')}}" class="scroll"><span data-hover="gift-gioqua" style="font-size: xx-large">Giỏ Quà</span></a></li>
                    <li><a href="{{url('tin-tuc')}}" class="scroll"><span data-hover="new-tintuc" style="font-size: xx-large">Tin Tức</span></a></li>
                    <li><a href="{{url('su-kien')}}" class="scroll"><span data-hover="event-sukien" style="font-size: xx-large">Sự kiện</span></a></li>
                </ul>
            </div>
            <!--script-nav-->
            <script>
                $("span.menu").click(function(){
                    $(".top-menu ul").slideToggle("slow" , function(){
                    });
                });
            </script>

            <div class="social-icon">
                <a href="#"><i class="icon1"></i></a>
                <a href="#"><i class="icon3"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="baneer-center wow bounceIn animated " data-wow-delay="0.5s">
            <h1 style="color: #e5db18">We are master of Wine in VietNam</h1>
            <img src="{{asset('frontend/images/divider.png')}}"  alt=""/>
        </div>
    </div>
</div>
