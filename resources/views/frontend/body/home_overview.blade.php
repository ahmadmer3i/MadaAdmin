<div class="section mcb-section equal-height-wrap"
     style="padding-top:30px;padding-bottom:60px;background-image:url({{asset('frontend/content/images/fsectionbig2.png')}});background-repeat:no-repeat;background-position:center top">
    <div class="container">
        @php
            $overview = \App\Models\HomeOverview::find(1);
        @endphp
        <div class="row">
            <div class="col-md-6" style="padding:0 2%"><img
                    alt="finance2-home-pic1"
                    class="scale-with-grid"
                    height="1041"
                    src="{{$overview->image}}"
                    title="" width="780"/></div>
            <div class="col-md-6" style="padding:0 2%"><img
                    alt="finance2-pic2"
                    class="scale-with-grid"
                    height="46"
                    src="{{asset('frontend/content/images/fpic2.png')}}"
                    title=""
                    width="31"/>
                <div class="col-12 column-margin-20px">
                    <div class="align_right mobile_align_right">
                        <h2>{{$overview->title}}</h2>
                        <h5>{{$overview->subtitle}}</h5>
                        <p>{!! $overview->description !!}</p>
                    </div>
                </div>
                <div class="button_align align_right"><a
                        class="button has-icon button_right button_size_2"
                        href="our-services.html"
                        style="background-color:#647cba!important;color:#fff;"><span
                            class="button_icon"><i
                                class="icon-right-open"
                                style="color:#ffffff!important;"></i></span><span
                            class="button_label">Our services</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
