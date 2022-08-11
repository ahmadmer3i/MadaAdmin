@php
    $mission = \App\Models\AboutMission::findOrFail(1);
@endphp
<div class="section"
     style="padding-top:80px;padding-bottom:60px;background-image:url({{asset('frontend/content/images/fsecbig1.png')}});background-repeat:no-repeat;background-position:center top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img alt="fpic1"
                     class="scale-with-grid"
                     height="46"
                     src="{{asset('frontend/content/images/fpic1.png')}}"
                     title=""
                     width="31"/>
                <img
                    alt="faboutpic1"
                    class="scale-with-grid"
                    height="1041"
                    src="{{!empty($mission->image) ? asset($mission->image) : asset('upload/780-1041.png')}}"
                    title="" width="480"/>
            </div>
            <div class="col-md-6">
                <img alt="fpic2"
                     class="float-right"
                     height="46"
                     src="{{asset('frontend/content/images/fpic2.png')}}"
                     title=""
                     width="31"/>
                <div class="clearfix">
                </div>
                <hr class="no_line"
                    style="margin: 0 auto 50px auto"/>
                <h2>{{$mission->title}}</h2>
                <hr class="no_line"
                    style="margin: 0 auto 20px auto"/>
                <h5>{{ $mission->subtitle }}</h5>
                <hr class="no_line"
                    style="margin: 0 auto 20px auto"/>
                <!--								<ul class="list_check">-->
                <!--									<li> Lorem ipsum dolor sit amet enim</li>-->
                <!--									<li> Maecenas malesuada elit lectus felis-->
                <!--									</li>-->
                <!--									<li> Quisque lorem tortor fringilla</li>-->
                <!--								</ul>-->
                {!! $mission->description !!}
                <hr class="no_line"
                    style="margin: 0 auto 50px auto"/>
                <a class="button has-icon button_right button_size_2"
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
