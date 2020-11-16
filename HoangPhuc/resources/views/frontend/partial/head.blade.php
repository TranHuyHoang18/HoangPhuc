<link href="{{asset('frontend/css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<link href='//fonts.googleapis.com/css?family=Yeseva+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!---- start-smoth-scrolling---->

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
<!---End-smoth-scrolling---->
<!---strat-date-piker---->
<link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}" />
<script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
<script>
    $(function() {
        $( "#datepicker,#datepicker1" ).datepicker();
    });
</script>
<!---/End-date-piker---->
<!--Animation-->
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<link href="{{asset('frontend/css/animate.css')}}" rel='stylesheet' type='text/css' />
<script>
    new WOW().init();
</script>
<!---/End-Animation---->

