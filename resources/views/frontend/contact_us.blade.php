@extends('frontend.main_master')
@section('main')
    @php
        $social_media = \App\Models\ContactSocialMedia::all();
    @endphp
    <div class="section mcb-section full-width"
         style="padding-top:175px;padding-left:10%;padding-right:10%">
        <div class="row">
            <div class="col-md-6" style="padding:0 4%">
                <div class="row">
                    <div class="col-12 column-margin-40px">
                        <h1>{{ $contact_title->title }}</h1></div>
                    <div class="col-12">
                        <hr class="no_line"
                            style="margin:0 auto 40px">
                    </div>
                    <div class="col-12">
                        <hr style="margin:0 auto 30px;"/>
                    </div>
                    <div class="col-md-8">
                        <p> If you have any questions, order a free
                            conversation with our consultant </p>
                        <h6>CALL US</h6>
                        <h4><span style="color: #db4041;">+962 79 979 8886</span>
                        </h4></div>
                    <div class="col-md-4 text-right"><img
                            alt="finance2-pic3"
                            height="48"
                            src="{{asset('frontend/content/images/finance2-pic3.png')}}"
                            title=""
                            width="84"/></div>
                </div>
            </div>
            <div class="col-md-6" style="padding:0 4%"><img
                    alt="fsubpic1"
                    class="scale-with-grid"
                    height="854"
                    src="{{ !empty($contact_title->image) ? $contact_title->image : 'upload/960-854.png' }}"
                    title="" width="960"/></div>
        </div>
    </div>
    @include('frontend.body.contact_ways')
    @include('frontend.body.contact_form')
    @include('frontend.body.contact_why')
    <script>


        let items = <?php echo json_encode($social_media); ?>;
        console.log(items);
        for (let item of items) {
            console.log(item);

            let icon = document.querySelector(`#${item.name}`)
            console.log(icon);

            icon.firstElementChild.style.fontSize = '44px'
            icon.firstElementChild.style.color = `${item.icon_color}`
        }

    </script>
@endsection
