<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quý Long </title>
<link rel="shortcut icon" href="{{asset('images/front/logo/icon.png')}}" />
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <!-- boostrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Styles -->
<style type="text/css">
    .body1 h1 h2 h3 h4 h5 p span label
    {
        font-family: "Segoe UI";
    }
    .container
    {
        width: 100%;
    }
    .row
    {
        width: 100%;
    }
    .menu-top
    {
        width: 100%;
        height: 40px;
        background-color:#ffaa00;

    }
    .menu-top h5
    {
        color: white;
    }
    .login
    {
        height: 100%;
        width: 70%;
        background-color: #6a6a6a;
        margin-left: 20px;
        padding-top: 8px;
    }
    .login ul li
    {
        float: left;
        list-style: none;
        height: 100%;
        margin: 0px  auto;
    }
    .login a
    {
        text-align: center;
        color: white;
        font-size: 16px;
    }
    .menu
    {
        background-color:#f9f9f9;
    }
    .menu ul li
    {
        list-style: none;
        float: left;
        margin-left: 15px;
    }
    .menu a
    {
        text-align: center;
        color: #6a6a6a;
        font-size: 18px;
        font-weight: bold;
    }
    .ul-menu
    {
        padding-top: 25px;
    }
    .ul-menu a:hover
    {
        color: #f5c000;
    }
    .col1_4_content p
    {
        height: 80px;
    }
    .col1_4_content
    {
        height: 380px;
    }
    .intro
    {
        margin-top: 50px;
        background-image:url({{asset('images/front/background/back_1.png')}}) ;
        background-color: white;
        width: 100%;
    }
    .trans
    {
        background-image: url({{asset('images/front/background/back_2.png')}});
        width: 100%;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        height: 700px;
    }
    .trans ul li
    {
        list-style: none;
        float: left;
        margin-left: 5px;
    }
    .reason
    {
        background-color:white;
        background-image: url({{asset('images/front/background/back_3.png')}});
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }
    .newreason
    {
        background-color: white;
        margin-bottom: 30px;
    }
    .btn1
    {
        background-color:white;
        background-image: url({{asset('images/front/background/back_4.png')}});
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }
    .lienhe
    {
        background-color: #efefef;
    }
    .form-tv
    {
        background-image: url({{asset('images/front/background/back_5.png')}});
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }
    .form-tv ul li
    {
        list-style: none;
        float: left;
        margin-left: 5px;
    }
    .HD_send
    {
        background-image: url({{asset('images/front/background/back_6.png')}});
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        height: 750px;
    }
    .doitac
    {
        background-color: white;
    }
    .news
    {
        background-color: #f1eeee;
    }
    .news .row
    {
        margin-left: 10px;
        margin-right: 5px;
    }
    .btn-bottom
    {
        background-image: url({{asset('images/front/background/back_footer.png')}});
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }
    .bottom1
    {
        background-image: url({{asset('images/front/background/back_8.png')}});
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        box-shadow: 5px 5px dimgrey;
        border-radius: 10px;
        border: 1px solid white;
        width: 90%;
        margin-left: 5%;
        padding-right:5% ;
        margin-top: 10%;
    }
    .bottom1 .row
    {
        margin-left: 5px;
    }
    .footer
    {
        background-color: #2c383f;
    }
    .footer .row
    {
        margin-left: 5px;
    }

    #main_menu li .sub_menu{
        position: absolute;
        display: none;
        width: 30%;
        background: #f5f5f5;
       /* top: 0px;*/
        left: 100%;
    }
    #main_menu li:hover > .sub_menu {
        display: block;
    }
    #main_menu>li>.sub_menu
    {

        /*top: 55px;*/
        position: absolute;
        left: 5%;
    }
    .sub_menu
    {
        z-index: 3;
    }
    body {
        overflow-x:hidden;
    }
</style>
