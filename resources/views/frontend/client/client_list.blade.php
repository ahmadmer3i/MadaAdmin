@php
    $clients = \App\Models\ClientsList::all();
@endphp
<div class="section"
     style="padding-top:40px;padding-bottom:90px">
    <div class="container">
        <div class="row">
            @if(!empty($clients))
                @foreach($clients as $client)
                    <div class="col-md-6"
                         style="padding:0px 3% 80px;margin-top:-100px">
                        <img alt="finance2-clients-pic1"
                             class="scale-with-grid"
                             height="973"
                             src="{{ $client->image }}"
                             title="" width="780"/>
                        <img
                            alt="finance2-clients-icon1"
                            class="scale-with-grid"
                            height="60"
                            src="{{ $client->logo }}"
                            title="" width="312"/>
                        <h2>{{ $client->name }}</h2>
                        <p>{{ $client->description }}</p>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
