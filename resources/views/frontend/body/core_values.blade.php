<div class="section mcb-section"
     style="padding-top:30px;padding-bottom:0px;background-image:url({{asset('frontend/content/images/fsecbig3.png')}});background-repeat:no-repeat;background-position:center top">
    <div class="container">
        <div class="row">
            <div class="col-md-8"
                 style="padding:50px 0 0 0">
                <div class="row">
                    <img alt="fpic1"
                         class="scale-with-grid"
                         height="46"
                         src="{{asset('frontend/content/images/fpic1.png')}}"
                         title=""
                         width="31"/>
                </div>
                <div class="row">
                    <div class="clearfix"
                         style="padding:50px 0 20px 0;">
                        <h2>Core Values</h2></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mfn-drag-helper placeholder-wrap"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr class="no_line" style="margin:0 auto 20px">
            </div>
            @php
                $cores = \App\Models\AboutCoreValue::all()
            @endphp
            @if(!empty($cores))
                @foreach($cores as $core)
                    <div class="col-md-3" style="padding:0 5% 30px 0">
                        <img alt="finance2-services-icon1"
                             class="scale-with-grid"
                             height="780"
                             src="{{$core->image}}"
                             title="" width="60"/>
                        <hr class="no_line" style="margin:0 auto 50px">
                        <div class=" mobile_align_left">
                            <h4>
                                {{ $core->title }}
                            </h4>
                            <p>
                                {{ $core->description }}
                            </p>
                        </div>
                        <a class="button has-icon button_right button_size_2"
                           href="our-services.html"
                           style="background-color:#f4f4f4!important;color:#000;"><span
                                class="button_icon"><i
                                    class="icon-right-open"
                                    style="color:#000000!important;"></i></span><span
                                class="button_label">Read more</span></a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
