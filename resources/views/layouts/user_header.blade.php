<header class="navbar pcoded-header new-pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
<div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
            <a href="index.html" class="b-brand mob_log_anchor">
                <img class="mob_header" src="{{asset('assets/images/logo_new.png')}}" alt="" class="logo images">
                <img src="{{asset('assets/images/logo-icon.svg')}}" alt="" class="logo-thumb images">
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="#!">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav  w-100">
                <li class="nav-item">
                    <div class="main-search open">
                    <img class="mob_header" src="{{asset('assets/images/logo_new.png')}}" alt="" class="logo images">
                    </div>
                </li>
                <li class="second_li">
                    <div class=" profile-notification">
                        <span class="auth_name_span font-weight-bold"> {{ Auth::user()->name }}</span>
                        <!-- <img src="{{asset('assets/images/john_doe.jpg')}}" alt="Avatar" class="avatar ml-2 mr-3"> -->
                        <div class="dropdown custom_dropdown " style="cursor: pointer;">
                            <i class="fas fa-ellipsis-v dropdown-toggle" data-toggle="dropdown"></i>
                            <div class="dropdown-menu custom_dropdown_menu">
                                <!-- <img class="up_arrow_dropdown" src="{{asset('assets/images/up_arrow.png')}}" />
                                <a class="dropdown-item li_dark_border" href="#"><img src="{{asset('assets/images/john_doe.jpg')}}" alt="Avatar" class="avatar"> <span class="edit_icon_adj"> <i class="feather icon-edit-2 "></i> </span></a> -->
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </div>

                    </div>
                </li>
            </ul>

        </div>
    </header>