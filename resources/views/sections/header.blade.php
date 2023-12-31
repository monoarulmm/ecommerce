

<div id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu right-menu">
                        <ul>
                            <li class="menu-item lang-menu menu-item-has-children parent">
                                <a title="English" href="#"><span class="img label-before"><img
                                            src="assets/images/lang-en.png" alt="lang-en"></span>English<i
                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="submenu lang">
                                    <li class="menu-item"><a title="hungary" href="#"><span
                                                class="img label-before"><img src="assets/images/lang-hun.png"
                                                    alt="lang-hun"></span>Hungary</a></li>
                                    <li class="menu-item"><a title="german" href="#"><span
                                                class="img label-before"><img src="assets/images/lang-ger.png"
                                                    alt="lang-ger"></span>German</a></li>
                                    <li class="menu-item"><a title="french" href="#"><span
                                                class="img label-before"><img src="assets/images/lang-fra.png"
                                                    alt="lang-fre"></span>French</a></li>
                                    <li class="menu-item"><a title="canada" href="#"><span
                                                class="img label-before"><img src="assets/images/lang-can.png"
                                                    alt="lang-can"></span>Canada</a></li>
                                </ul>
                            </li>




                            @if (Route::has('login'))
                                @auth
                                    @if (Auth::user()->utype === 'ADM')
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">My Account({{ Auth::user()->name }})<i
                                                    class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency">

                                                <li class="menu-item">
                                                    <a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                                </li>



                                                <li class="menu-item">
                                                    <a title="My Profile" href="{{ route('profile.show') }}">My Profile</a>
                                                </li>



                                                <li class="menu-item">

                                                    <a
                                                        href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                                </li>

                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>

                                            </ul>
                                        </li>
                                    @else
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">My Account({{ Auth::user()->name }})<i
                                                    class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency">

                                                {{-- <li class="menu-item">
                                                    <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                                                </li> --}}


                                                <li class="menu-item">
                                                    <a title="My Profile" href="{{ route('profile.show') }}">My Profile</a>
                                                </li>

                                                <li class="menu-item">

                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                                </li>

                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>


                                            </ul>
                                        </li>
                                    @endif
                                @else
                                    <li class="menu-item"><a title="Register or Login" href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="menu-item "><a title="Register or Login"
                                            href="{{ route('register') }}">Register</a></li>
                                @endif
                                @endif
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">
                        <div class="wrap-search center-section">
                            <div class="wrap-search-form">

                                <form action="{{url('product_search')}}" method="get">@csrf
                                    <input type="text" name="search" placeholder="Search here...">
                                    <button  type="submit"><i class="fa fa-search"></i></button>
                                  
                                </form>


                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
