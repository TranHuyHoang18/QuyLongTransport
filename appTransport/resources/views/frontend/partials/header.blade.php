@include('frontend.partials.menu')
{{--<div class="row banner" style="margin-left: 0px">
    <img class="mySlides w3-animate-fading" src="{{asset('images/front/banner/banner-chinh-01.jpg')}}" style="width:100%">
    <img class="mySlides w3-animate-fading" src="{{asset('images/front/banner/banner-chinh-02.jpg')}}" style="width:100%">
    <img class="mySlides w3-animate-fading" src="{{asset('images/front/banner/banner-chinh-04.jpg')}}" style="width:100%">
</div>

<script>
    let myIndex = 0;
    carousel();
    function carousel() {
        let i;
        let x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 5000);
    }
</script>--}}
<head>
    <style type="text/css">
        .banner .khoi-slide {
            width:  100%;
            height:  600px;
            position:  relative;
        }
        .banner
        {
            margin: 0;
            padding: 0;
        }
        .banner .cac-slide {
            width:  100%;
            height:  600px;
            overflow:  hidden;

        }
        .banner .slide {
            position:  absolute;
            top: 0px;
            left: 0px;
            opacity:  0;
            visibility:  hidden;
        }
        .banner .slide.active{
            opacity:  1;
            visibility:  visible;
        }
        .banner .nut-slide span{
            color: white;
            font-size: 60px;
            opacity: 0.5;
        }
        .banner span#btn-prev{
            position: absolute;
            top: 30%;
            left: 0%;
            z-index: 10;
            cursor: pointer;
        }
        .banner  span#btn-next{
            position: absolute;
            top: 30%;
            right: 0%;
            z-index: 10;
            cursor: pointer;
        }
        .banner  .nut-slide ul {
            position:  absolute;
            z-index:  10;
            width:  100px;
            bottom:  25%;
            left:  50%;
            margin-left: -50px;
            display:  flex;
            justify-content:  space-between;
        }
        .banner  .nut-slide ul li {
            width:  20px;
            height:  20px;
            background: #e87b28;
            opacity:  0.5;
            list-style:  none;
            border-radius:  50%;
            cursor:  pointer;
            transition: 0.6s;
        }
        .bien-mat-ben-trai{
            animation: bien-mat-ben-trai 1s forwards;
        }
        @-webkit-keyframes bien-mat-ben-trai{
            from{
                transform: translateX(0%);
            }
            to{
                transform: translateX(-100%);
            }
        }
        .di-vao-ben-phai{
            animation: di-vao-ben-phai 1s forwards;
        }
        @-webkit-keyframes di-vao-ben-phai{
            from{
                transform: translateX(100%);
            }
            to{
                transform: translateX(0%);
            }
        }
        /*xử lý nút prev*/
        .bien-mat-ben-phai{
            animation: bien-mat-ben-phai 1s forwards;
        }
        @-webkit-keyframes bien-mat-ben-phai{
            from{
                transform: translateX(0%);
            }
            to{
                transform: translateX(100%);
            }
        }
        .di-vao-ben-trai{
            animation: di-vao-ben-trai 1s forwards;
        }
        @-webkit-keyframes di-vao-ben-trai{
            from{
                transform: translateX(-100%);
            }
            to{
                transform: translateX(0%);
            }
        }
        .banner .nut-slide ul li.active_nut{
            opacity: 0.8;
        }

    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<div class="row banner">
    <div class="khoi-slide">
    <div class="cac-slide">
        <div class="slide active">
            <img src="{{asset('images/front/banner/banner-chinh-01.jpg')}}" style="width: 100%">
        </div>
        <div class="slide">
            <img src="{{asset('images/front/banner/banner-chinh-02.jpg')}}" style="width: 100%">
        </div>
        <div class="slide">
            <img src="{{asset('images/front/banner/banner-chinh-04.jpg')}}" style="width: 100%">
        </div>
        <div class="slide">
            <img src="{{asset('images/front/banner/banner-chinh-01.jpg')}}" style="width: 100%">
        </div>
    </div>
    <div class="nut-slide">
        <span id="btn-prev"><i class="fas fa-chevron-left"></i></span>
        <span id="btn-next"><i class="fas fa-chevron-right"></i></span>
        <ul>
            <li class="active_nut"></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var autoLoad= setInterval(function(){
            $('#btn-next').trigger('click');
        },3000);

        $('#btn-next').click(function(event) {
            clearInterval(autoLoad);
            var slide_sau = $('.active').next();
            var vi_tri_hien_tai = $('.active_nut').index()+1;
            if(slide_sau.length!=0){
                $('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(event) {
                    $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
                });
                slide_sau.addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event) {
                    $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
                });
                // xử lý nút
                $('.nut-slide ul li').removeClass('active_nut');
                $('.nut-slide ul li:nth-child('+(vi_tri_hien_tai+1)+')').addClass('active_nut');
            }else{
                $('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(event) {
                    $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
                });
                $('.slide:first-child').addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event) {
                    $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
                });
                // xử lý nút
                $('.nut-slide ul li').removeClass('active_nut');
                $('.nut-slide ul li:nth-child(1)').addClass('active_nut');
            }
        });
        $('#btn-prev').click(function(event) {
            clearInterval(autoLoad);
            var slide_truoc = $('.active').prev();
            var vi_tri_hien_tai = $('.active_nut').index()+1;
            if(slide_truoc.length!=0){
                $('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(event) {
                    $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
                });
                slide_truoc.addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event) {
                    $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
                });
                // xử lý nút
                $('.nut-slide ul li').removeClass('active_nut');
                $('.nut-slide ul li:nth-child('+(vi_tri_hien_tai-1)+')').addClass('active_nut');
            }else{
                $('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(event) {
                    $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
                });
                $('.slide:last-child').addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event) {
                    $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
                });
                // xử lý nút
                $('.nut-slide ul li').removeClass('active_nut');
                $('.nut-slide ul li:last-child').addClass('active_nut');
            }
        });

        $('.nut-slide ul li').click(function(event) {
            clearInterval(autoLoad);
            var vi_tri_hien_tai = $('.active_nut').index()+1;
            var vi_tri_click = $(this).index()+1;
            $('.nut-slide ul li').removeClass('active_nut');
            $(this).addClass('active_nut');
            if(vi_tri_click>vi_tri_hien_tai){
                $('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(event) {
                    $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
                });
                $('.slide:nth-child('+vi_tri_click+')').addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event) {
                    $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
                });
            }
            if(vi_tri_click<vi_tri_hien_tai){
                $('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(event) {
                    $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
                });
                $('.slide:nth-child('+vi_tri_click+')').addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event) {
                    $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
                });
            }

        });

    });
</script>
