@extends('frontend.main_master')
@section('main')
    @include('frontend.body.subheader')
    <div class="section mcb-section"
         style="padding-bottom:60px;background-image:url({{asset('frontend/content/images/finance2-wrapbg1.png')}});background-repeat:no-repeat;background-position:center top">
        <div class="container">
            @include('frontend.body.home_counter')
            <div class="row">
                <div class="col-12 column_divider">
                    <hr style="margin:0 auto 25px;"/>
                </div>
            </div>
            @include('frontend.body.home_why')
        </div>
    </div>
    @include('frontend.body.home_overview')
    @include('frontend.body.core_values')
    @include('frontend.body.home_services')

    <script type="text/javascript">
        let revapi1, tpj;

        function revinit_revslider11() {
            jQuery(function () {
                tpj = jQuery;
                revapi1 = tpj("#rev_slider_1_1");
                if (revapi1 === undefined || revapi1.revolution === undefined) {
                    revslider_showDoubleJqueryError("rev_slider_1_1");
                } else {
                    revapi1.revolution({
                        sliderType: "hero",
                        sliderLayout: "fullwidth",
                        visibilityLevels: "1240,1240,778,778",
                        gridwidth: "1920,1920,778,778",
                        gridheight: "900,900,1100,1100",
                        spinner: "spinner8",
                        perspective: 600,
                        perspectiveType: "local",
                        spinnerclr: "#14c9f4",
                        editorheight: "900,768,1100,720",
                        responsiveLevels: "1240,1240,778,778",
                        progressBar: {
                            disableProgressBar: true
                        },
                        navigation: {
                            onHoverStop: false
                        },
                        fallbacks: {
                            allowHTML5AutoPlayOnAndroid: true
                        },
                    });
                }
            });
        } // End of RevInitScript
        let once_revslider11 = false;
        if (document.readyState === "loading") {
            document.addEventListener("readystatechange", function () {
                if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
                    once_revslider11 = true;
                    revinit_revslider11();
                }
            });
        } else {
            once_revslider11 = true;
            revinit_revslider11();
        }
    </script>

@endsection



