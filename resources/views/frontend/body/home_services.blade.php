@php
    $services = \App\Models\Services::findOrFail(1);
@endphp

<div class="section mcb-section"
     style="padding-top:40px;padding-bottom:120px;background-image:url({{asset('frontend/content/images/fsecbig1.png')}});background-repeat:no-repeat;background-position:center top">
    <div class="container">
        <div class="row"><img alt="fpic1"
                              class="scale-with-grid"
                              height="46"
                              src="{{asset('frontend/content/images/fpic1.png')}}"
                              title="" width="31"/>
            <h2>{{ $services->home_title }}</h2>
            <h5>
                <span style="color: #808080;"></span>
            </h5>
        </div>
        <div class="row">
            <div class="mfn-drag-helper placeholder-wrap"></div>
        </div>
        <div class="row row-cols-auto">
            @foreach($services->services_category as $category)
                <div
                    class="col"
                    style="padding:0 1%">
                    <img
                        alt="finance2-about-pic11"
                        class="scale-with-grid"
                        height="500"
                        src="{{!empty($category->home_image) ? $category->home_image : 'upload/622-911.png' }}"
                        title=""
                        width="333"
                    />
                    <div class="column_attr clearfix mobile_align_left">
                        <h6 class="text-uppercase">{{$category->home_subtitle}}</h6>
                        <h4>{{$category->service_title}}</h4>
                        <p>@foreach($category->services_categories_list as $item)
                                @if($loop->last)
                                    - {{ $item->service_item }}
                                @else
                                    - {{ $item->service_item }} <br>
                                @endif
                            @endforeach
                        </p>
                        <hr class="no_line" style="margin: 0 auto 10px auto"/>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
