<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>
<html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>MADA Financial Leasing</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- Mobile Specific Metas -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1"
          name="viewport">
    <!-- Favicons -->
    <link href="{{asset('frontend/content/images/favicon.ico')}}" rel="shortcut icon">
    <!-- FONTS -->


    <link href="{{asset('frontend/content/webfontkit/stylesheet.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/content/webfonterarabic/stylesheet.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/content/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--CSS -->
    <link href='{{asset('frontend/content/css/structure.css')}}' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href='{{asset('frontend/content/css/finance2.css')}}' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('frontend/content/css/custom.css') }}">
    <!-- Revolution Slider -->
    <link href="{{asset('frontend/content/plugins/rs-plugin-6.custom/css/rs6.css')}}"
          rel="stylesheet">
    {{--<style media="screen">


        .sidebar-1 {
            position: fixed;
            width: 80px;
            margin-block-start: 0;
            margin-left: 0;
            margin-top: 200px;
            z-index: 8;
            right: 0;
            transition: all 0.3s linear;
            box-shadow: 2px 2px 8px 0px rgba(0, 0, 0, .4);
        }


        .sidebar-1 .li-sidebar {
            height: 60px;

            position: relative;
        }

        .sidebar-1 .li-sidebar .side-bar-link {
            color: white;
            list-style: none !important;
            text-decoration: none !important;
            box-sizing: border-box !important;
            display: block;
            background-size: cover;
            height: 100%;
            width: 100%;
            line-height: 60px;
            padding-left: 25%;
            border-bottom: 1px solid rgba(0, 0, 0, .4);
            transition: all .3s linear;
        }

        .sidebar-1 .li-sidebar:nth-child(1) .side-bar-link {
            background: #4267B2;
        }

        .sidebar-1 .li-sidebar:nth-child(2) .side-bar-link {
            background: #1DA1F2;
        }

        .sidebar-1 .li-sidebar:nth-child(3) .side-bar-link {
            background: #E1306C;
        }

        .sidebar-1 .li-sidebar:nth-child(4) .side-bar-link {
            background: #2867B2;
        }

        .sidebar-1 .li-sidebar:nth-child(5) .side-bar-link {
            background: #333;
        }

        .sidebar-1 .li-sidebar:nth-child(6) .side-bar-link {
            background: #ff0000;
        }

        .sidebar-1 .li-sidebar .side-bar-link .i-sidebar {
            position: absolute;
            top: 17px;

            font-size: 27px;
        }

        .ul-sidebar {
            margin-bottom: 0;
            margin-left: 0;
            margin-block-end: 0;
            margin-inline-start: 0px;

            margin-inline-end: 0px;
            padding-inline-start: 0px;
        }

        .ul-sidebar .li-sidebar .side-bar-link span {
            display: none;
            padding-left: 0 !important;

            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .side-bar-link:hover {
            z-index: 8;
            width: 50px;
        }

        .ul-sidebar .li-sidebar:hover .side-bar-link span {
            padding-right: 30%;
            width: 200px;
            display: block;
        }
    </style>--}}

</head>

<body
    class="home page template-slider style-simple button-flat layout-full-width no-content-padding no-shadows header-transparent header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-line-below-80-1 menuo-right menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky">
<div class="sidebar-main">
    {{--<div class="sidebar-1">
        <ul class="ul-sidebar">

            <li class="li-sidebar"><a href="#" class="side-bar-link"><i
                        class="fa fa-calculator  i-sidebar"></i><span></span></a>
            </li>
        </ul>
    </div>--}}
</div>
<div id="Wrapper">

    @include('frontend.body.header')

    <div id="Content">

        <div class="content_wrapper clearfix">
            @yield('main')

        </div>

    </div>
    @include('frontend.body.subfooter')
    @include('frontend.body.footer')
</div>
<div class="right light" data-width="250" id="Side_slide">
    <div class="close-wrapper"><a class="close" href="#"><i
                class="icon-cancel-fine"></i></a></div>
    <div class="extras"><a class="action_button"
                           href="#"
                           target="_blank">Apply Now
            <i class="icon-right-open"></i></a>
        <div class="extras-wrapper"></div>
    </div>
    <div class="menu_wrapper"></div>
</div>
<div id="body_overlay"></div>
<!-- JS -->
<script src="{{asset('frontend/content/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/content/js/jquery-migrate-3.3.2.js')}}"></script>
<script src="{{asset('frontend/content/js/mfn.menu.js')}}"></script>
<script src="{{asset('frontend/content/js/jquery.plugins.js')}}"></script>
<script src="{{asset('frontend/content/js/jquery.jplayer.min.js')}}"></script>
<script src="{{asset('frontend/content/js/animations/animations.js')}}"></script>
<script src="{{asset('frontend/content/js/translate3d.js')}}"></script>
<script src="{{asset('frontend/content/js/scripts.js')}}"></script>
<script src="{{asset('frontend/content/plugins/rs-plugin-6.custom/js/revolution.tools.min.js')}}"></script>
<script src="{{asset('frontend/content/plugins/rs-plugin-6.custom/js/rs6.min.js')}}"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
