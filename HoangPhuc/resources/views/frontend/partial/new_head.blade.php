<!--CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css">
<link rel="stylesheet" href="{{asset('frontend/css/app.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--JS-->
<script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
<script src="{{asset('frontend/assets/jquery/3.5.1/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>

<script type="text/javascript" src="{{asset('frontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
    });
</script>
<style type="text/css">
    .Header {
        background-image: url("{{asset('frontend/background/banner.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .wine {
        background-image: url("{{asset('frontend/background/banner1.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 3%;
        padding-bottom: 5%;
    }
    .wine_more
    {
        background-image: url("{{asset('frontend/background/banner2.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 3%;
        padding-bottom: 5%;

    }
    .products
    {
        background-image: url("{{asset('frontend/background/banner1.jpg')}}");
        background-repeat: repeat;

        padding-top: 3%;
        padding-bottom: 5%;
    }
    .ruou_manh
    {
        background-image: url("{{asset('frontend/background/banner3.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 3%;
        padding-bottom: 5%;
    }
    .fruit
    {
        background-image: url("{{asset('frontend/background/banner5.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 3%;
        padding-bottom: 5%;
    }
    .gio_qua
    {
        background-image: url("{{asset('frontend/background/banner6.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 3%;
        padding-bottom: 5%;
    }
    .footer
    {
        background: black;
        padding-top: 3%;
    }
</style>
<link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}" />
<script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
<script>
    $(function() {
        $( "#datepicker,#datepicker1" ).datepicker();
    });
</script>
<!--Animation-->
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<link href="{{asset('frontend/css/animate.css')}}" rel='stylesheet' type='text/css' />
<script>
    new WOW().init();
</script>
<!---/End-Animation---->
