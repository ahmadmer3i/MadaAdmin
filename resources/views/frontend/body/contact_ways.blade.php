@php
    $address = \App\Models\ContactAdress::findOrFail(1);
    $social_media = \App\Models\ContactSocialMedia::all();
@endphp

<div class="section"
     style="padding-top:40px;padding-bottom:60px;background-image:url({{asset('frontend/content/images/fsecbig1.png')}});background-repeat:repeat;background-position:center top">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img alt="fpic1"
                     class="scale-with-grid"
                     height="46"
                     src="{{asset('frontend/content/images/fpic1.png')}}"
                     title=""
                     width="31"
                />
                <hr class="no_line" style="margin:0 auto 20px">
                <h2>There are several ways to contact us:</h2>
            </div>
            <div class="col-12">
                <div class="mfn-drag-helper placeholder-wrap"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr class="no_line" style="margin:0 auto 20px">
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile_align_center"><img
                                alt="finance2-contact-icon4"
                                class="scale-with-grid"
                                height="60"
                                src="{{asset('frontend/content/images/finance2-contact-icon4.png')}}"
                                title=""
                                width="60"/>
                            <hr class="no_line"
                                style="margin: 0 auto 30px auto"/>
                            <h4>Address</h4>
                            <h5>{{$address->office}}, {{$address->building_name}}
                                <br>
                                {{$address->street_name}}
                                <br>
                                {{$address->city_country}}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile_align_center"><img
                                alt="finance2-contact-icon3"
                                class="scale-with-grid"
                                height="60"
                                src="{{asset('frontend/content/images/finance2-contact-icon3.png')}}"
                                title=""
                                width="59"/>
                            <hr class="no_line"
                                style="margin: 0 auto 30px auto"/>
                            <h4>Social Media</h4>
                            <hr class="no_line"
                                style="margin: 0 auto 30px auto"/>
                            <div class="content-center">
                                @foreach($social_media as $social)
                                    <a id="{{ $social->name }}" href="{{$social->link}}"
                                       style="margin: 20px"
                                       target="_blank">
                                        {!! $social->icon !!}
                                    </a>
                                @endforeach

                                {{--<a href="https://www.instagram.com/finance.mada/" target="_blank" style="margin: 20px">
                                    <ion-icon
                                        name="logo-instagram"
                                        class="instagram"
                                        size="large"
                                    >
                                    </ion-icon>
                                </a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile_align_center"><img
                                alt="finance2-contact-icon2"
                                class="scale-with-grid"
                                height="60"
                                src="{{asset('frontend/content/images/finance2-contact-icon2.png')}}"
                                title=""
                                width="60"/>
                            <hr class="no_line"
                                style="margin: 0 auto 30px auto"/>
                            <h4>E-mail</h4>
                            <h5>
                                <a href="mailto:info@madaleasing.com">info@madaleasing.com</a>
                            </h5>
                            <p> liquam erat ac ipsum. Integer
                                aliquam purus luctus. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile_align_center"><img
                                alt="finance2-contact-icon1"
                                class="scale-with-grid"
                                height="60"
                                src="{{asset('frontend/content/images/finance2-contact-icon1.png')}}"
                                title=""
                                width="60"/>
                            <hr class="no_line"
                                style="margin: 0 auto 30px auto"/>
                            <h4>Phone</h4>
                            <h5>+962 79 979 8886</h5>
                            <h5>+962 79 993 9660</h5>
                            <p> Lorem ipsum dolor sit amet,
                                consectetur dapibus. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <hr class="no_line" style="margin:0 auto 50px">
            </div>
        </div>
    </div>
</div>

