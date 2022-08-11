@php
    $counter_data = \App\Models\HomeCounter::find(1);
@endphp
<div class="row">
    <div class="col-md-8"
         style="padding:40px 0 4px 0">
        <div class="row">
            <div class="col-12"><img
                    alt="fpic1"
                    class="scale-with-grid"
                    height="46"
                    src="{{asset('frontend/content/images/fpic1.png')}}"
                    title="" width="31"/></div>
            <div class="col-12">
                <div class="clearfix"
                     style="padding:10px 9% 21px 0;">
                    <h2>
                        <span style="color: #b3b3b3;">{{$counter_data->title}}</span>
                        {{$counter_data->subtitle}}
                    </h2>
                </div>
            </div>
            <div class="col-12">

                <div class="google_font"
                     style="font-family:'Gotham',Arial,Tahoma,sans-serif;font-size:110px;line-height:110px;font-weight:600;letter-spacing:0;color:#581a1a;">
        <span class="counter-inline animate-math"><span
                class="number"
                data-to="{{$counter_data->counter}}">{{$counter_data->counter}}</span>
        </span>
                </div>
            </div>
        </div>
    </div>
</div>
