<div class="col-md-8">
    @php


        $phone = \App\Models\ContactPhoneList::first();

        $phoneSection = \App\Models\Phone::findOrFail(1);
    @endphp
    <p>{{$phoneSection->subtitle}}</p>
    <h6 class="text-uppercase">{{$phoneSection->title}}</h6>
    <h4><span style="color: #db4041;">{{!empty($phone->phone) ? $phone->phone : ''}}</span>
    </h4></div>
<div class="col-md-4 text-right"><img
        alt="finance2-pic3"
        height="48"
        src="{{asset('frontend/content/images/finance2-pic3.png')}}"
        title=""
        width="84"/>
</div>
