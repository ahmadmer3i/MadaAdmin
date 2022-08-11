@php
    $vision = \App\Models\AboutVision::findOrFail(1);
@endphp
<div class="section"
     style="padding-top:20px;padding-bottom:60px">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img alt="fpic1"
                     class="scale-with-grid"
                     height="46"
                     src="{{asset('frontend/content/images/fpic1.png')}}"
                     title=""
                     width="31"/>
                <hr class="no_line"
                    style="margin: 0 auto 50px auto"/>
                <div class="clearfix"></div>
                <h2>{{ $vision->title }}</h2>
                <hr class="no_line"
                    style="margin: 0 auto 50px auto"/>
                <a class="button has-icon button_right button_size_2"
                   href="contact.html"
                   style="background-color:#3d5ba9!important;color:#fff;"><span
                        class="button_icon"><i
                            class="icon-right-open float-right"
                            style="color:#ffffff!important;"></i></span><span
                        class="button_label">Contact us</span></a>
            </div>
            <div class="col-md-6">
                <hr class="no_line"
                    style="margin: 0 auto 90px auto"/>
                <h5>{{ $vision->description }}</h5>
                <!--								<h5>Phasellus fermentum in, dolor. Pellentesque-->
                <!--									facilisis. Nulla imperdiet sit amet magna.-->
                <!--									Vestibulum dapibus, mauris nec malesuada-->
                <!--									fames ac turpis velit, rhoncus eu.</h5>-->
                <!--								<h5>Aliquam erat ac ipsum. Integer aliquam-->
                <!--									purus. </h5></div>-->
            </div>
        </div>
    </div>
</div>
