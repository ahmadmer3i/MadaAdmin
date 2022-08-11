@extends('frontend.main_master')
@section('main')
    <div class="section mcb-section full-width"
         style="padding-top:175px;padding-left:10%;padding-right:10%">
        <div class="row">
            <div class="col-md-6" style="padding:0 4%">
                <div class="row">
                    <div class="col-12 column-margin-40px">
                        <h1>{{ $services->title }}</h1></div>
                    <div class="col-12">
                        <hr class="no_line"
                            style="margin:0 auto 40px">
                    </div>
                    <div class="col-12">
                        <hr style="margin:0 auto 30px;"/>
                    </div>
                    @include('frontend.body.phone')
                </div>
            </div>
            <div class="col-md-6" style="padding:0 4%"><img
                    alt="finance2-subheader-pic2"
                    class="scale-with-grid"
                    height="854"
                    src="{{$services->image}}"
                    title="" width="960"/></div>
        </div>
    </div>
    <div class="section" style="padding-top:10px">
        <div class="container">
            <div class="row">
                <div class="col-md-8"><img
                        alt="fpic1"
                        height="46"
                        src="{{asset('frontend/content/images/fpic1.png')}}"
                        title=""
                        width="31"/>
                    <hr class="no_line" style="margin:0 auto 20px">
                    <h2>{{ $services->subtitle }}</h2>
                </div>
            </div>
        </div>
    </div>
    @php($i = 1)
    @foreach($services->services_category as $service)

        @if($i % 2 != 0)
            <div class="section" style="padding-top:20px;padding-bottom:40px;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <hr class="no_line" style="margin:0 auto 20px">
                        </div>
                        <div class="col-md-6" style="padding:0 5% 0 0"><img
                                alt="finance2-services-icon1"
                                class="scale-with-grid"
                                height="200"
                                src="{{ $service->image }}"
                                title="" width="200"/></div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3>{{$service->service_title}}</h3>
                                    <h5>{{$service->service_subtitle}}</h5>
                                    <hr class="no_line"
                                        style="margin: 0 auto 20px auto"/>
                                    <h5></h5>
                                    <hr class="no_line"
                                        style="margin: 0 auto 40px auto"/>
                                    <ul class="list_check">
                                        @foreach($service->services_categories_list as $item)
                                            <li>{{$item->service_item}}
                                            </li>
                                        @endforeach
                                    </ul>
                                    <p>{{ $service->service_text }}</p>
                                    <hr class="no_line"
                                        style="margin: 0 auto 40px auto"/>
                                </div>
                                <!--									<div class="col-md-10"><a-->
                                <!--											class="button button_size_3"-->
                                <!--											href="#"-->
                                <!--											style="background-color:#f4f4f4!important;color:#000;"><span-->
                                <!--											class="button_label">Read more</span></a>-->
                                <!--									</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="section" style="padding-top:40px;padding-bottom:40px">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <hr class="no_line" style="margin:0 auto 20px">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3>{{$service->service_title}}</h3>
                                    <h5>{{$service->service_subtitle}}</h5>
                                    <hr class="no_line"
                                        style="margin: 0 auto 20px auto"/>
                                    <h5></h5>
                                    <hr class="no_line"
                                        style="margin: 0 auto 40px auto"/>
                                    <ul class="list_check">
                                        @foreach($service->services_categories_list as $item)
                                            <li>{{$item->service_item}}
                                            </li>
                                        @endforeach
                                    </ul>
                                    <p>{{ $service->service_text }}</p>
                                    <hr class="no_line"
                                        style="margin: 0 auto 40px auto"/>
                                </div>
                                <!--<div class="col-md-10"><a
                                        class="button button_size_3"
                                        href="#"
                                        style="background-color:#f4f4f4!important;color:#000;"><span
                                        class="button_label">Read more</span></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="col-md-6"><img
                                alt="finance2-services-icon2"
                                class="scale-with-grid"
                                height="200"
                                src="{{ $service->image }}"
                                title=""
                                width="200"/></div>
                    </div>
                </div>
            </div>
        @endif
        <input type="hidden" value="{{$i++}}">
    @endforeach


    {{--<div class="section" style="padding-top:20px;padding-bottom:40px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <hr class="no_line" style="margin:0 auto 20px">
                </div>
                <div class="col-md-6" style="padding:0 5% 0 0"><img
                        alt="finance2-services-icon3"
                        class="scale-with-grid"
                        height="200"
                        src="{{asset('frontend/content/images/microfinance-serives.jpeg')}}"
                        title="" width="200"/></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Microfinance</h3>
                            <h5>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui non
                                felis et ligula.</h5>
                            <hr class="no_line"
                                style="margin: 0 auto 20px auto"/>
                            <h5></h5>
                            <hr class="no_line"
                                style="margin: 0 auto 40px auto"/>
                            <ul class="list_check">
                                <li>Startup and
                                    SME Funding
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo. </p>
                            <hr class="no_line"
                                style="margin: 0 auto 40px auto"/>
                        </div>
                        <!--									<div class="col-md-10"><a-->
                        <!--											class="button button_size_3"-->
                        <!--											href="#"-->
                        <!--											style="background-color:#f4f4f4!important;color:#000;"><span-->
                        <!--											class="button_label">Read more</span></a>-->
                        <!--									</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" style="padding-top:20px;padding-bottom:90px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <hr class="no_line" style="margin:0 auto 20px">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Medical</h3>
                            <h5>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui non
                                felis et ligula.</h5>
                            <hr class="no_line"
                                style="margin: 0 auto 20px auto"/>
                            <h5></h5>
                            <hr class="no_line"
                                style="margin: 0 auto 40px auto"/>
                            <ul class="list_check">
                                <li>Medical Equipment
                                </li>
                                <li> Surgeries and
                                    Medical Procedures
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo. </p>
                            <hr class="no_line"
                                style="margin: 0 auto 40px auto"/>
                        </div>
                        <!--<div class="col-md-10"><a
                                class="button button_size_3"
                                href="#"
                                style="background-color:#f4f4f4!important;color:#000;"><span
                                class="button_label">Read more</span></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-md-6" style="padding:0 3%"><img
                        alt="finance2-services-icon4"
                        class="scale-with-grid"
                        height="200"
                        src="{{asset('frontend/content/images/medical-services.png')}}"
                        title="" width="200"/></div>
            </div>
        </div>
    </div>
    <div class="section" style="padding-top:20px;padding-bottom:40px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <hr class="no_line" style="margin:0 auto 20px">
                </div>
                <div class="col-md-6" style="padding:0 5% 0 0"><img
                        alt="finance2-services-icon3"
                        class="scale-with-grid"
                        height="300"
                        src="{{asset('frontend/content/images/manufacturing-service.png')}}"
                        title="" width="300"/></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Contract
                                Manufacturing
                                Equipment</h3>
                            <h5>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui non
                                felis et ligula.</h5>
                            <hr class="no_line"
                                style="margin: 0 auto 20px auto"/>
                            <h5></h5>
                            <hr class="no_line"
                                style="margin: 0 auto 40px auto"/>
                            <ul class="list_check">
                                <li>Industrial Equipment
                                </li>
                                <li>Contracting
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo. </p>
                            <hr class="no_line"
                                style="margin: 0 auto 40px auto"/>
                        </div>
                        <!--									<div class="col-md-10"><a-->
                        <!--											class="button button_size_3"-->
                        <!--											href="#"-->
                        <!--											style="background-color:#f4f4f4!important;color:#000;"><span-->
                        <!--											class="button_label">Read more</span></a>-->
                        <!--									</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
