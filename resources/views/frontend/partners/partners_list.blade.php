<div class="section"
     style="padding-top:40px;padding-bottom:90px">

    @php
        $partners = \App\Models\PartnersList::all();
        $i = 1;
    @endphp

    <div class="container">
        @if(!empty($partners))
            @foreach($partners as $partner)
                @if($i % 2 != 0)
                    <div class="row">
                        <div class="col-md-6"
                             style="padding:0 3% 80px;margin-top:-100px">
                            <img alt="finance2-clients-pic1"
                                 class="scale-with-grid"
                                 height="973"
                                 src="{{ $partner->image }}"
                                 title="" width="780"/> <img
                                alt="finance2-clients-icon1"
                                class="scale-with-grid"
                                height="60"
                                src="{{ $partner->logo }}"
                                title="" width="312"/>
                            <h2>{{ $partner->name }}</h2>
                            <p>{{ $partner->description }}</p>
                        </div>
                        @else
                            <div class="col-md-6" style="padding:0 3% 80px">
                                <img alt="finance2-clients-pic2"
                                     class="scale-with-grid"
                                     height="973"
                                     src="{{$partner->image}}"
                                     title="" width="780"/> <img
                                    alt="finance2-clients-icon2"
                                    class="scale-with-grid"
                                    height="60"
                                    src="{{ $partner->logo }}"
                                    title="" width="164"/>
                                <h2> {{ $partner->name }} </h2>
                                <p>${{ $partner->description }}</p>
                            </div>
                        @endif
                        <input type="hidden" value="{{ $i++ }}">
                        @endforeach
                        @endif
                    </div>
    </div>
</div>
