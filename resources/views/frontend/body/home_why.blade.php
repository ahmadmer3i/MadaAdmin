@php
    $why = \App\Models\ContactWhy::findOrFail(1);
@endphp

<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-10">
                <div class="column_attr clearfix"
                     style="background-image:url('{{asset('frontend/content/images/ficon1.png')}}');background-repeat:no-repeat;background-position:left center;padding:20px 0 0 100px;">
                    <h4>{{$why->title}}</h4>
                    <p>{{ $why->short_description }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3" style="padding:50px 0 0 0">
        <div class="button_align align_center"><a
                class="button has-icon button_right button_size_3 button_dark"
                href="our-services.html"><span
                    class="button_icon"><i
                        class="icon-right-open"></i></span><span
                    class="button_label">Read more</span></a>
        </div>
    </div>
</div>
