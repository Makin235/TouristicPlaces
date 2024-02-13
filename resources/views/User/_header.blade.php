<div class="sticky-wrapper" style="height:10px">

    <!--Start of header-->
    <header id="fh5co-header-section" style="padding-bottom:0">
        <div class="container" style="padding-bottom:0">
            <span style="  padding-left: 30px;padding-top:20px " class="col-md-6 col-lg-6 col-sm-6">
                <form action="{{route('getplace')}}" method="post">

                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                </form>
            </span>
            <span class="col-md-6 col-lg-6 col-sm-6" style="text-align:center;">
                <ul class="flexCenter sf-menu sf-js-enabled sf-arrows" id="fh5co-primary-menu"
                    style="touch-action: pan-y;">
                    <li class="flexCenter" tabindex="0">
                        <a>Login/Signup</a>
                        <ul class="fh5co-sub-menu">
                            <li class="subItem flexCenter" tabindex="0">
                                <a href="{{route('login')}}">Login</a>
                            </li>
                            <li class="subItem flexCenter" tabindex="0">
                                <a href="{{route('register')}}">Signup</a>
                            </li>
                        </ul>
                    </li>
                    <li style="margin-right:10px;"
                        class="flexCenter {{Route::currentRouteName() === 'categories' ? 'active' : '' }}" tabindex="0">
                        <ul class="fh5co-sub-menu">
                            <li class="flexCenter" tabindex="0">
                                <a href="{{route('user_profile')}}">My Profile </a>
                            </li>
                            <li class="flexCenter" tabindex="0">
                                <a href="{{route('user_places')}}">My Places </a>
                            </li>
                            <li class="flexCenter" tabindex="0">
                                <a href="{{route('user_reviews')}}">My Reviews </a>
                            </li>
                            <li class="flexCenter" tabindex="0">
                                <a href="{{route('user_messages')}}">My Messages </a>
                            </li>
                            <li class="flexCenter" tabindex="0">
                                <a href="{{route('admin_index')}}">Admin Panel </a>
                            </li>
                            <li class="flexCenter" tabindex="0">
                                <a href="{{route('user_logout')}}">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </span>
        </div>
        <div class="container">
            <div class="nav-heer">

                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
            </div>
        </div>
        <div class="nav-header" style="text-align:center">
            @include('User._menu')
        </div>
    </header>
    <!-- end:header-top -->
</div>
