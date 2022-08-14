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
    <link href='{{asset('frontend/content/css/finance2.css')}}' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('frontend/content/css/custom.css') }}">
    <!-- Revolution Slider -->
    <link href="{{asset('frontend/content/plugins/rs-plugin-6.custom/css/rs6.css')}}"
          rel="stylesheet">

</head>

<body
    class="home page template-slider style-simple button-flat layout-full-width no-content-padding no-shadows header-transparent header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-line-below-80-1 menuo-right menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky">
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
