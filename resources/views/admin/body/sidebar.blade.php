<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        {{--                        <span--}}
                        {{--                                                    class="badge rounded-pill bg-success float-end">3</span>--}}
                        <span>Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Home Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.hero') }}">Hero</a></li>
                        <li><a href="{{ route('home.counter') }}">Counter Section</a></li>
                        <li><a href="{{ route('home.overview') }}">Overview Section</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-box-fill"></i>
                        <span>About Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('about.about-title') }}">Title And Image</a></li>
                        <li><a href="{{ route('about.core-values') }}">Core Values</a></li>
                        <li><a href="{{ route('about.mission') }}">Mission Section</a></li>
                        <li><a href="{{ route('about.vision') }}">Vision Section</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-box-fill"></i>
                        <span>Services Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('services.title') }}">Header & Services</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Clients Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('clients.title') }}">Header Image & Title</a></li>
                        <li><a href="{{ route('clients.list') }}">Clients List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Partners Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('partners.title') }}">Header Image & Title</a></li>
                        <li><a href="{{ route('partners.list') }}">Partners List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Contact Us Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contacts-us.title') }}">Header Image & Title</a></li>
                        <li><a href="{{ route('contact-us.why') }}">Why Section</a></li>
                        <li><a href="{{ route('contact-us.address') }}">Company Address</a></li>
                        <li><a href="{{ route('contact-us.social-media') }}">Social Media Links</a></li>
                        <li><a href="{{ route('contact-us.email') }}">Emails</a></li>
                        <li><a href="{{ route('contact-us.phones') }}">Phones</a></li>
                    </ul>
                </li>
                <li class="menu-title">Sections</li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Sections</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('phone-section.phone') }}">Phone Section</a></li>
                    </ul>
                </li>

                <li class="menu-title">Application</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Application</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('form-application.applications')}}">Applied Applications</a></li>
                        <li><a href="{{route('form-application.services')}}">Services Categories</a></li>
                        <li><a href="{{route('form-application.qualification')}}">Qualifications</a></li>
                        <li><a href="{{route('form-application.material-status')}}">Material Status</a></li>
                        <li><a href="{{route('form-application.banks')}}">Banks</a></li>
                        <li><a href="{{route('form-application.transfer-ways')}}">Salary Transfer Methods</a></li>
                        <li><a href="{{route('messages.messages')}}">Messages</a></li>
                    </ul>
                </li>
                <li class="menu-title">Users</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if(Auth::user()->username == 'ahmadmerie')
                            <li><a href="{{route('admin.users')}}">Users</a></li>
                        @endif

                        <li><a href="{{route('admin.users.add-user')}}">Add User</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
