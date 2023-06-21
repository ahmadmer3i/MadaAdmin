@extends('frontend.main_master')
@section('main')
    <div class="section mcb-section full-width"
         style="padding-top:175px;padding-left:10%;padding-right:10%">
        <div class="row">
            @php
                $about = \App\Models\About::find(1);
            @endphp
            <div class="col-md-6" style="padding:0 4%">
                <div class="row">
                    <div class="col-12 column-margin-40px">
                        <h1>Understanding Our Refund Policy: Your Guide to Rights and Responsibilities</h1>
                    </div>
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
                    alt="About Image"
                    class="scale-with-grid"
                    height="854"
                    src="{{$about->about_image}}"
                    title="" width="960"/></div>
        </div>
    </div>
    @include('frontend.body.refund')
@endsection
