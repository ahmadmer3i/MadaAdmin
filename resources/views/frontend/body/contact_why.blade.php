@php
    $why = \App\Models\ContactWhy::findOrFail(1);
@endphp
<div class="section"
     style="padding-top:30px;padding-bottom:60px;background-image:url({{asset('frontend/content/images/fsectionbig2.png')}});background-repeat:no-repeat;background-position:center top">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="padding:0 2%"><img
                    alt="fhomepic1"
                    class="scale-with-grid"
                    height="1041"
                    src="{{ !empty($why->image) ? $why->image : url('upload/780-1041.png') }}"
                    title="" width="780"/></div>
            <div class="col-md-6 text-right"
                 style="padding:0 2%"><img
                    alt="fpic2"
                    class="scale-with-grid"
                    height="46"
                    src="{{asset('frontend/content/images/fpic2.png')}}"
                    title=""
                    width="31"/>
                <hr class="no_line"
                    style="margin: 0 auto 40px auto"/>
                <div class="align_right mobile_align_right">
                    <h2>{{ $why->title }}</h2>
                    <h5>{{$why->short_description}}</h5>
                    {!! $why->long_description !!}
                </div>
                <hr class="no_line"
                    style="margin: 0 auto 40px auto"/>
                <div class="button_align align_right"><a
                        class="button has-icon button_right button_size_2"
                        href="our-services.html"
                        style="background-color:#647cba!important;color:#fff;"><span
                            class="button_icon"><i
                                class="icon-right-open float-right"
                                style="color:#ffffff!important;"></i></span><span
                            class="button_label">Our services</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
