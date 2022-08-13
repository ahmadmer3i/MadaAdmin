<div class="section"
     style="padding-top:45px;padding-bottom:20px;background-color:#f7f7f7">
    @php
        $social_media = \App\Models\ContactSocialMediaIcon::findOrFail(1);
        $phone = \App\Models\ContactPhoneList::findOrFail(1);
        $phone_section = \App\Models\Phone::findOrFail(1);
    @endphp
    <div class="container" style="font-family: Gotham,sans-serif">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-10">
                        <div class="column_attr clearfix mobile_align_center"
                             style="background-image:url('{{asset('frontend/content/images/finance2-pic3.png')}}');background-repeat:no-repeat;background-position:left center;padding:16px 0 0 100px;">
                            <p>{{ $phone_section->subtitle }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="column_attr clearfix align_right mobile_align_center">
                    <h6>CALL US</h6>
                    <h4><span style="color: #db4041;">{{$phone->phone}}</span>
                    </h4></div>
                <div class="column_attr clearfix align_right mobile_align_center">
                    <h6 class="text-uppercase">{{$social_media->footer_title}}</h6>
                    @foreach($social_media->social_media_link as $social)
                        <a style="color: {{$social->icon_color}};font-size: 33px" id="{{ $social->name }}"
                           href="{{$social->link}}"
                           target="_blank">{!! $social->icon !!}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-12">
                <hr class="no_line"
                    style="margin: 0 auto 40px auto"/>
            </div>
            <div class="col-12" style="padding:15px 0 0 0">
                <div class="column mcb-column one column_divider">
                    <hr style="margin:0 auto 10px;"/>
                </div>
            </div>
            <div class="col-12">
                <hr class="no_line"
                    style="margin: 0 auto 20px auto"/>
            </div>
            <div class="col-md-3"><img alt="finance2"
                                       class="scale-with-grid"
                                       height="60"
                                       src="{{asset('frontend/content/images/logo-yes.png')}}"
                                       title="" width="220"/>
            </div>
            <div class="col-md-5">
                <div class="column_attr clearfix mobile_align_center">
                    <p> One of the most advanced methods of
                        capital asset financing is financial
                        leasing.
                        A financial lease allows the lessee to
                        profit from a specific asset in exchange
                        for
                        monthly payments for a preset length of
                        time, after which the lessee's ownership
                        of the asset is automatically
                        transferred to the lessee.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="column_attr clearfix align_right mobile_align_center">
                    <a class="button has-icon button_right button_size_2 button_dark"
                       href="{{route('request_page')}}"><span
                            class="button_icon"><i
                                class="icon-right-open"></i></span><span
                            class="button_label">Apply now</span></a>
                </div>
            </div>
            {{-- <div class="col-12">
                 <hr class="no_line"
                     style="margin: 0 auto 70px auto"/>
             </div>--}}
        </div>
    </div>
</div>
