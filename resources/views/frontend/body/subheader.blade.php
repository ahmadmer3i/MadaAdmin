@section('subheader')
    @php
        $home_hero = \App\Models\HomeHero::find(1);
        $phone=  \App\Models\ContactPhoneList::findOrFail(1);
    @endphp
    <div class="mfn-main-slider mfn-rev-slider pt-5">
        <p class="rs-p-wp-fix"></p>
        <rs-module-wrap data-source="gallery"
                        id="rev_slider_1_1_wrapper"
                        style="background:transparent;padding:0;margin: 0 auto;">
            <rs-module data-version="6.3.6" id="rev_slider_1_1">
                <rs-slides>
                    <rs-slide
                        data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;"
                        data-key="rs-1"
                        data-title="Slide">
                        <img alt="Slide"
                             class="rev-slidebg"
                             src="{{asset('frontend/content/images/transparent.png')}}"
                             title="Home">
                        <rs-layer data-color="#4d4d4d"
                                  data-dim="w:400px,400px,161px,161px;"
                                  data-frame_0="y:50,50,19,19;"
                                  data-frame_1="st:300;sp:1000;sR:300;"
                                  data-frame_999="o:0;st:w;sR:7700;"
                                  data-rsp_ch="on"
                                  data-text="w:normal;s:18,18,6,6;l:24,24,9,9;"
                                  data-type="text"
                                  data-vbility="t,t,f,t"
                                  data-xy="x:c;xo:-551px,-551px,-222px,-222px;yo:712px,712px,287px,287px;"
                                  id="slider-1-slide-1-layer-0"
                                  style="z-index:13;font-family:Gotham,sans-serif;">
                            {{ $home_hero->contact_text }}
                        </rs-layer>
                        <rs-layer data-color="#000000"
                                  data-dim="w:600px,600px,650px,650px;"
                                  data-frame_0="y:50,50,19,19;"
                                  data-frame_1="st:100;sp:1000;sR:100;"
                                  data-frame_999="o:0;st:w;sR:7900;"
                                  data-rsp_ch="on"
                                  data-text="w:normal;s:60;l:66;fw:600;"
                                  data-type="text"
                                  data-xy="x:c;xo:-450px,-450px,0,-450px;yo:220px,220px,88px,88px;"
                                  id="slider-1-slide-1-layer-1"
                                  style="z-index:8;font-family:Gotham,sans-serif;">
                            {{ $home_hero->title }}
                        </rs-layer>
                        <!--

                            -->
                        <rs-layer
                            data-dim="w:550px,550px,222px,222px;h:1px;"
                            data-frame_0="y:50,50,19,19;"
                            data-frame_1="st:250;sp:1000;sR:250;"
                            data-frame_999="o:0;st:w;sR:7750;"
                            data-rsp_ch="on"
                            data-text="w:normal;s:20,20,7,7;l:0,0,9,9;"
                            data-type="shape"
                            data-vbility="t,t,f,t"
                            data-xy="x:c;xo:-475px,-475px,-192px,-192px;yo:660px,660px,267px,267px;"
                            id="slider-1-slide-1-layer-3"
                            style="z-index:12;background-color:#e2e2e2;"></rs-layer>
                        <a class="rs-layer rev-btn"
                           data-color="#000000"
                           data-dim="minh:0px,0px,none,0px;"
                           data-frame_0="y:50,50,19,19;"
                           data-frame_1="st:200;sp:1000;sR:200;"
                           data-frame_999="o:0;st:w;sR:7800;"
                           data-frame_hover="c:#000;bgc:#e2e2e2;bor:0px,0px,0px,0px;sp:200;e:power1.inOut;"
                           data-padding="r:30;l:30;"
                           data-rsp_ch="on"
                           data-text="w:normal;s:17;l:55;fw:600;"
                           data-type="button"
                           data-xy="x:c;xo:-480px,-480px,-50px,-50px;yo:545px,545px,330px,330px;"
                           href="{{route('about')}}"
                           id="slider-1-slide-1-layer-4"
                           rel="nofollow"
                           style="z-index:11;background-color:#efefef;font-family:Gotham, sans-serif;"
                           target="_self">About
                            us </a>
                        <rs-layer data-color="#4d4d4d"
                                  data-dim="w:600px,600px,243px,243px;"
                                  data-frame_0="y:50,50,19,19;"
                                  data-frame_1="st:150;sp:1000;sR:150;"
                                  data-frame_999="o:0;st:w;sR:7850;"
                                  data-rsp_ch="on"
                                  data-text="w:normal;s:20,20,7,7;l:28,28,10,10;"
                                  data-type="text"
                                  data-vbility="t,t,f,t"
                                  data-xy="x:c;xo:-450px,-450px,-182px,-182px;yo:450px,450px,182px,182px;"
                                  id="slider-1-slide-1-layer-6"
                                  style="z-index:9;font-family:Gotham,sans-serif;">
                            {{ $home_hero->short_title }}
                        </rs-layer>
                        <rs-layer data-color="#db4041"
                                  data-frame_0="y:50,50,19,19;"
                                  data-frame_1="st:350;sp:1000;sR:350;"
                                  data-frame_999="o:0;st:w;sR:7650;"
                                  data-rsp_ch="on"
                                  data-text="w:normal;s:30,30,12,12;l:40,40,15,15;fw:600;"
                                  data-type="text"
                                  data-vbility="t,t,f,t"
                                  data-xy="x:c;xo:-614px,-614px,-248px,-248px;yo:784px,784px,317px,317px;"
                                  id="slider-1-slide-1-layer-8"
                                  style="z-index:14;font-family:Gotham,sans-serif;">
                            {{ $phone->phone }}
                        </rs-layer>
                        <rs-layer
                            data-border="bor:50%,50%,50%,50%;"
                            data-dim="w:48px,48px,18px,18px;h:48px,48px,18px,18px;"
                            data-frame_0="rY:360deg;"
                            data-frame_1="e:back.out;st:600;sp:700;sR:600;"
                            data-frame_999="o:0;st:w;sR:7700;"
                            data-loop_999="sX:1.1;sY:1.1;yys:t;"
                            data-rsp_ch="on"
                            data-text="w:normal;s:20,20,7,7;l:48,48,18,18;a:center;"
                            data-type="text"
                            data-vbility="t,t,f,t"
                            data-xy="x:c;xo:-268px,-268px,-107px,-107px;yo:774px,774px,313px,313px;"
                            id="slider-1-slide-1-layer-12"
                            style="z-index:16;background-color:#00b7a3;font-family:Gotham,sans-serif;">
                            <i class="icon icon-phone"></i>
                        </rs-layer>
                        <rs-layer
                            data-dim="w:810px,810px,650px,650px;h:766px,766px,615px,615px;"
                            data-frame_0="sX:0.9;sY:0.9;"
                            data-frame_1="st:150;sp:1200;sR:150;"
                            data-frame_999="o:0;st:w;sR:7650;"
                            data-rsp_ch="on"
                            data-text="w:normal;s:20,20,7,7;l:0,0,9,9;"
                            data-type="image"
                            data-xy="x:c;xo:405px,405px,0,405px;y:m,m,b,b;yo:66px,66px,0,66px;"
                            id="slider-1-slide-1-layer-14"
                            style="z-index:15;">
                            <img
                                height="766"
                                src="{{asset('frontend/content/images/slider-top.png')}}"
                                width="810" alt="">
                        </rs-layer>
                        <rs-layer
                            data-dim="w:61px,61px,24px,24px;h:107px,107px,43px,43px;"
                            data-frame_0="rY:360deg;"
                            data-frame_1="e:back.out;st:400;sp:950;sR:400;"
                            data-frame_999="o:0;st:w;sR:7650;"
                            data-rsp_ch="on"
                            data-text="w:normal;s:20,20,7,7;l:0,0,9,9;"
                            data-type="image"
                            data-vbility="t,t,f,t"
                            data-xy="x:c;xo:-837px,-837px,-338px,-338px;yo:200px,200px,80px,80px;"
                            id="slider-1-slide-1-layer-15"
                            style="z-index:18;">
                            <img
                                height="107"
                                src="{{asset('frontend/content/images/finance2-slider-pic2.png')}}"
                                width="61" alt="">
                        </rs-layer>
                        <rs-layer
                            data-actions='o:click;a:scrollbelow;sp:1000ms;e:power1.inOut;'
                            data-dim="w:61px,61px,24px,24px;h:92px,92px,37px,37px;"
                            data-frame_1="st:400;sp:950;sR:400;"
                            data-frame_999="o:0;st:w;sR:7650;"
                            data-rsp_ch="on"
                            data-text="w:normal;s:20,20,7,7;l:0,0,9,9;"
                            data-type="image"
                            data-vbility="t,t,f,t"
                            data-xy="x:c;xo:-837px,-837px,-338px,-338px;yo:674px,674px,272px,272px;"
                            id="slider-1-slide-1-layer-16"
                            style="z-index:19;cursor:pointer;">
                            <img height="92"
                                 src="{{asset('frontend/content/images/finance2-slider-pic3.png')}}"
                                 width="61" alt="">
                        </rs-layer>
                        <rs-layer
                            data-dim="w:48px,48px,18px,18px;h:48px,48px,18px,18px;"
                            data-frame_0="rY:360deg;"
                            data-frame_1="e:back.out;st:650;sp:700;sR:650;"
                            data-frame_999="o:0;st:w;sR:7650;"
                            data-rsp_ch="on"
                            data-text="w:normal;s:20,20,7,7;l:0,0,9,9;"
                            data-type="image"
                            data-vbility="t,t,f,t"
                            data-xy="x:c;xo:-225px,-225px,-91px,-91px;yo:773px,773px,313px,313px;"
                            id="slider-1-slide-1-layer-17"
                            style="z-index:17;">
                            <img
                                alt=""
                                height="48"
                                src="{{asset('frontend/content/images/finance2-slider-pic4.png')}}"
                                width="48">
                        </rs-layer>
                        <a class="rs-layer rev-btn"
                           data-dim="minh:0px,0px,none,0px;"
                           data-frame_0="y:50,50,19,19;"
                           data-frame_1="st:200;sp:1000;sR:200;"
                           data-frame_999="o:0;st:w;sR:7800;"
                           data-frame_hover="bgc:#647cba;bor:0px,0px,0px,0px;sp:200;e:power1.inOut;"
                           data-padding="r:30;l:30;"
                           data-rsp_ch="on"
                           data-text="w:normal;s:17;l:55;fw:600;"
                           data-type="button"
                           data-xy="x:c;xo:-655px,-655px,-221px,-221px;yo:545px,545px,330px,330px;"
                           href="{{route('contact-us')}}"
                           id="slider-1-slide-1-layer-18"
                           rel="nofollow"
                           style="z-index:10;background-color:#2b4076;font-family:Gotham,sans-serif;"
                           target="_self">{{$home_hero->form_button_title}}<i
                                class="icon-right-open"></i>
                        </a></rs-slide>
                </rs-slides>
            </rs-module>
        </rs-module-wrap>
        <!-- END REVOLUTION SLIDER -->
    </div>
@endsection
