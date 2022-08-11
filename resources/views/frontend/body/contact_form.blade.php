@php
    $address = \App\Models\ContactAdress::findOrFail(1)
@endphp
<div class="section"
     style="padding-top:10px;padding-bottom:55px;background-image:url({{asset('frontend/content/images/finance2-wrapbg1.png')}});background-repeat:no-repeat;background-position:center top">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="padding:35px 0% 0px">
                <div class="column_attr clearfix"
                     style="background-image:url({{asset('frontend/content/images/fcontacticon5.png')}});background-repeat:no-repeat;background-position:left center;padding:0px 0px 0px 55px;">
                    <h5 style="margin: 5px 0px 0px 0px;">Contact
                        Us</h5></div>
                <hr class="no_line"
                    style="margin: 0 auto 40px auto"/>
                <h2>Send a request</h2>
                <hr class="no_line"
                    style="margin: 0 auto 40px auto"/>
                <h3>{{$address->office}}, {{$address->building_name}} <br>
                    {{$address->street_name}} <br>
                    {{$address->city_country}}</h3></div>
            <div class="col-md-6" style="padding:54px 0% 0px">
                <div id="contactWrapper">
                    <div id="contactform">
                        <form id="reused_form" method="post">
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second">
                                <input id="name"
                                       maxlength="50"
                                       name="Name"
                                       placeholder="Your name"
                                       required
                                       type="text"></div>
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second">
                                <input id="email"
                                       maxlength="50"
                                       name="Phone"
                                       placeholder="Your Mobile"
                                       required
                                       type="tel"></div>
                            <div class="column one">
                                <input id="subject"
                                       maxlength="50"
                                       name="Subject"
                                       placeholder="Subject"
                                       type="text"></div>
                            <div class="column one">
												<textarea id="message"
                                                          maxlength="6000"
                                                          name="Message"
                                                          placeholder="Message"
                                                          required
                                                          rows="10"></textarea>
                            </div>
                            <div class="column one">
                                <button class="button-primary"
                                        id="submit"
                                        type="submit">Send A
                                    Message
                                </button>
                            </div>
                        </form>
                        <div id="success_message"
                             style="display:none">
                            <h3>Submitted the form
                                successfully!</h3>
                            <p>We will get back to you soon.</p>
                        </div>
                        <div id="error_message"
                             style="width:100%; height:100%; display:none;">
                            <h3>Error</h3> Sorry there was an
                            error sending your form.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
