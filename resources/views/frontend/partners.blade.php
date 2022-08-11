@extends('frontend.main_master')
@section('main')
    <div class="section mcb-section full-width"
         style="padding-top:175px;padding-left:10%;padding-right:10%">
        <div class="row">
            <div class="col-md-6" style="padding:0 4%">
                <div class="row">
                    <div class="col-12 column-margin-40px">
                        <h1>{{ $partner_data->title }}</h1></div>
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
                    alt="fsubpic3"
                    class="scale-with-grid"
                    height="854"
                    src="{{ $partner_data->image }}"
                    title="" width="960"/></div>
        </div>
    </div>
    @include('frontend.partners.partners_list')
@endsection
