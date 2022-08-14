<div id="Header_wrapper">
    <header id="Header">
        <div id="Top_bar">
            <div class="container">
                <div class="column one">
                    <div class="top_bar_left clearfix">
                        <div class="logo">
                            <a data-height="60" data-padding="25"
                               href="{{url('/')}}" id="logo"
                               title="MADA Leasing">
                                <img alt=""
                                     class="logo-main scale-with-grid"
                                     data-height="60"
                                     data-no-retina
                                     data-retina="{{asset('frontend/content/images/retina-logo.png')}}"
                                     src="{{asset('frontend/content/images/logo.png')}}"/>
                                <img alt=""
                                     class="logo-sticky scale-with-grid"
                                     data-height="60"
                                     data-no-retina
                                     data-retina="{{asset('frontend/content/images/logo-no-retna.png')}}"
                                     src="{{asset('frontend/content/images/logo-no-small.png')}}}"/>
                                <img alt=""
                                     class="logo-mobile scale-with-grid"
                                     data-height="60"
                                     data-no-retina
                                     data-retina="{{asset('frontend/content/images/retina-logo.png')}}"
                                     src="{{asset('frontend/content/images/logo.png')}}"/>
                                <img alt=""
                                     class="logo-mobile-sticky scale-with-grid"
                                     data-height="60"
                                     data-no-retina
                                     data-retina="{{asset('frontend/content/images/retina-logo.png')}}"
                                     src="{{asset('frontend/content/images/logo-no.png')}}}"/>
                            </a>
                        </div>
                        <div class="menu_wrapper">
                            <nav id="menu">
                                <ul class="menu menu-main"
                                    id="menu-main-menu">
                                    <li class="{{request()->is('/') ? 'current-menu-item':null}}"><a
                                            href="{{ url('/') }}"><span>Home</span></a>
                                    </li>
                                    <li class="{{request()->is('about') ? 'current-menu-item':null}}">
                                        <a href="{{route('about')}}"><span>About us</span></a>
                                    </li>
                                    <li class="{{request()->is('services') ? 'current-menu-item':null}}">
                                        <a href="{{ route('services') }}"><span>Our services</span></a>
                                    </li>
                                    <li class="{{request()->is('clients') ? 'current-menu-item':null}}">
                                        <a href="{{route('clients')}}"><span>Our clients</span></a>
                                    </li>
                                    <li class="{{request()->is('partners') ? 'current-menu-item':null}}">
                                        <a href="{{ route('partners') }}"><span>Our partners</span></a>
                                    </li>
                                    <li class="{{request()->is('contact-us') ? 'current-menu-item':null}}">
                                        <a href="{{ route('contact-us') }}"><span>Contact</span></a>
                                    </li>
                                    <li class="top_bar_right">
                                        <div class="top_bar_right_wrapper"><a
                                                class="action_button"
                                                href="{{route('request_form')}}">Apply now <i
                                                    class="icon-right-open"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            <a class="responsive-menu-toggle"
                               href="#"><i
                                    class="icon-menu-fine"></i></a>
                        </div>
                        <div class="secondary_menu_wrapper">
                            <nav class="menu-footer-container"
                                 id="secondary-menu">
                                <ul class="secondary-menu"
                                    id="menu-footer">
                                    <li class="current-menu-item"><a
                                            aria-current="page"
                                            href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('about')}}">About
                                            us</a></li>
                                    <li>
                                        <a href="{{route('services')}}l">Our
                                            services</a></li>
                                    <li>
                                        <a href="{{ route('clients') }}">Our
                                            clients</a></li>
                                    <li>
                                    <li>
                                        <a href="{{route('partners')}}">Our
                                            clients</a></li>
                                    <li>
                                        <a href="{{ route('contact-us') }}" class="action_button">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @yield('subheader')
    </header>
</div>
