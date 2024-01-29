<!-- header
   ================================================== -->
<header class="short-header">

    <div class="gradient-block"></div>

    <div class="row header-content">

        <div class="logo">
            <a href="{{ url('/') }}">Logo</a>
        </div>

        <nav id="main-nav-wrap">
            <ul class="main-navigation sf-menu" style="margin-bottom: 0  !important; margin-top: 14px !important;">
                <li class="current"><a href="{{ url('/') }}" title="">Home</a></li>
                <li class="has-children">
                    <a href="category.html" title="">Categories</a>
                    <ul class="sub-menu">
                        <li><a href="category.html">Wordpress</a></li>
                        <li><a href="category.html">HTML</a></li>
                        <li><a href="category.html">Photography</a></li>
                        <li><a href="category.html">UI</a></li>
                        <li><a href="category.html">Mockups</a></li>
                        <li><a href="category.html">Branding</a></li>
                    </ul>
                </li>

                <li class="has-children">
                    <a href="{{ route('blog.index') }}" title="">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="single-video.html">Video Post</a></li>
                        <li><a href="single-audio.html">Audio Post</a></li>
                        <li><a href="single-gallery.html">Gallery Post</a></li>
                        <li><a href="single-standard.html">Standard Post</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('about.page') }}" title="">About</a></li>
                <li><a href="{{ route('contact.page') }}" title="">Contact</a></li>
                <!-- start view mobile  -->

                <div class="auth-nav" style="display: flex; align-items: center; justify-content:center;">
                    @auth
                        <!-- start auth nav -->
                        <li class="has-childrenuser" style="content: none;">
                            <a>
                                <div style="display: flex; align-items: center; justify-content: center; gap: 20px;">
                                    <img src="./images/shutterbug.jpg" alt=""
                                        style="width: 50px; height: 50px; border-radius: 50%;">
                                    <span style=" color: #151515; cursor: pointer; font-weight: 600;">
                                        Hi, {{ auth()->user()->name }}
                                    </span>
                                </div>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="" style="font-size: 15px; font-weight: 700;">My Profile</a></li>
                                <li><a href="" style="font-size: 15px; font-weight: 700;">My Blogs</a></li>
                                <li><a href="" style="font-size: 15px; font-weight: 700;">My Setting</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST"
                                        style="margin: 0 !important; padding: 15px !important;">
                                        <button type="submit" style="margin: 0 !important;">Logout</button>
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="has-childrenuser">
                            <a><i class="fa fa-bell" style="font-size: 20px ; color: #151515"></i> <span class="badge"
                                    style="--mdb-badge-font-size: 0.6rem;
                            --mdb-badge-padding-x: 0.45em;
                            --mdb-badge-padding-y: 0.2em;
                            --mdb-badge-margin-top: -0.1rem;
                            --mdb-badge-margin-left: -0.5rem;
                            position: absolute;
                            font-size: var(--mdb-badge-font-size);
                            padding: var(--mdb-badge-padding-y) var(--mdb-badge-padding-x);
                            margin-top: var(--mdb-badge-margin-top);
                            margin-left: var(--mdb-badge-margin-left);
                            border-radius: 50%;
                            width:15px ;
                            height: 15px;
                            color: #ffff;
                            font-size: 14px;
                            background-color: #dc4c64;
                        "></span></a>
                            <ul class="sub-menu">
                                <li><a>Fuck your self</a> </li>


                            </ul>
                        </li>
                        <!-- end auth nav -->
                    @else
                        <div style="display: flex; align-items: center;  gap: 20px;  ">

                            <a class="" href="{{ route('login.form') }}"
                                style="text-decoration: none;      
                                                        font-size: 1.4rem;
                                                        text-transform: uppercase;
                                                        letter-spacing: .3rem;
                                                        height: 5.4rem;
                                                        line-height: 5.4rem;
                                                        padding: 0 3rem;
                                                        font-weight: 500;
                                                        color: #151515;
                                                        text-decoration: none;
                                                        cursor: pointer;
                                                        text-align: center;
                                                        white-space: nowrap;
                                                        border: none; ">
                                Login </a>
                            <a class="" href="{{ route('register.form') }}"
                                style="text-decoration: none;  font-size: 1.4rem;
                                                     text-transform: uppercase;
                                                     letter-spacing: .3rem;
                                                     height: 5.4rem;
                                                     line-height: 5.4rem;
                                                     padding: 0 3rem;
                                                     font-weight: 500;
                                                     background: #d8d8d8;
                                                     color: #151515;
                                                     text-decoration: none;
                                                     cursor: pointer;
                                                     text-align: center;
                                                     white-space: nowrap;
                                                     border: none; ">
                                Register </a>
                        </div>
                    @endauth
                    <!-- end mobile view -->


                </div>
                <!-- view mobile  -->
            </ul>
            
        </nav> <!-- end main-nav-wrap -->

        <div class="search-wrap">

            <form role="search" method="get" class="search-form" action="#">
                <label>
                    <span class="hide-content">Search for:</span>
                    <input type="search" class="search-field" placeholder="Type Your Keywords" value=""
                        name="s" title="Search for:" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>

            <a href="#" id="close-search" class="close-btn">Close</a>

        </div> <!-- end search wrap -->

        <div class="triggers ">
            <div class="auth-nav">
                <a class="search-trigger" href="#"><i class="fa fa-search" style="font-size: 20px ;  "></i></a>
            </div>
            <!-- view web  -->
            @auth
                <div class="auth" style="display: flex; align-items: center; gap: 10px;">
                    <a class="search-trigger" href="#"><i class="fa fa-search" style="font-size: 20px ;"></i></a>
                    <ul class="main-navigation sf-menu" style="margin-top:0  !important;margin-bottom: 0 !important;">

                        <li class="has-children">
                            <a>
                                <div style="display: flex; align-items: center; justify-content: center; gap: 20px;">
                                    <img src="{{ auth()->user()->image ?? asset('/images/default-user.jpg')}}" alt="user_image"
                                        style="width: 50px; height: 50px; border-radius: 50%;">
                                    <span style=" color: #151515; cursor: pointer; font-weight: 600;">
                                        Hi, {{ auth()->user()->name }}
                                    </span>
                                </div>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="" style="font-size: 15px; font-weight: 700;">My Profile</a></li>
                                <li><a href="" style="font-size: 15px; font-weight: 700;">My Blogs</a></li>
                                <li><a href="" style="font-size: 15px; font-weight: 700;">My Setting</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST"
                                        style="margin: 0 !important; padding: 15px !important;">
                                        @csrf
                                        <button type="submit" style="margin: 0 !important;">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="main-navigation sf-menu" style="margin-top:0  !important;margin-bottom: 0 !important;">

                        <li class="has-children">
                            <a><i class="fa fa-bell" style="font-size: 20px ; color: #151515"></i> <span class="badge"
                                    style="--mdb-badge-font-size: 0.6rem;
                        --mdb-badge-padding-x: 0.45em;
                        --mdb-badge-padding-y: 0.2em;
                        --mdb-badge-margin-top: -0.1rem;
                        --mdb-badge-margin-left: -0.5rem;
                        position: absolute;
                        font-size: var(--mdb-badge-font-size);
                        padding: var(--mdb-badge-padding-y) var(--mdb-badge-padding-x);
                        margin-top: var(--mdb-badge-margin-top);
                        margin-left: var(--mdb-badge-margin-left);
                        border-radius: 50%;
                        width:15px ;
                        height: 15px;
                        color: #ffff;
                        font-size: 14px;
                        background-color: #dc4c64;
                    "></span></a>
                            <ul class="sub-menu">
                                <li><a>Fuck your self</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            @else
                <div class="none-auth">
                    <div style="display: flex; align-items: center;  gap: 20px;  ">
                        <a class="search-trigger" href="#"><i class="fa fa-search"
                                style="font-size: 20px ; margin-top: 10px; "></i></a>
                        <a class="" href="{{ route('login.form') }}"
                            style="text-decoration: none;      
                                                font-size: 1.4rem;
                                                text-transform: uppercase;
                                                letter-spacing: .3rem;
                                                height: 5.4rem;
                                                line-height: 5.4rem;
                                                padding: 0 3rem;
                                                font-weight: 500;
                                                color: #151515;
                                                text-decoration: none;
                                                cursor: pointer;
                                                text-align: center;
                                                white-space: nowrap;
                                                border: none; ">
                            Login </a>
                        <a class="" href="{{ route('register.form') }}"
                            style="text-decoration: none;  font-size: 1.4rem;
                                             text-transform: uppercase;
                                             letter-spacing: .3rem;
                                             height: 5.4rem;
                                             line-height: 5.4rem;
                                             padding: 0 3rem;
                                             font-weight: 500;
                                             background: #d8d8d8;
                                             color: #151515;
                                             text-decoration: none;
                                             cursor: pointer;
                                             text-align: center;
                                             white-space: nowrap;
                                             border: none; ">
                            Register </a>
                    </div>
                </div>
            @endauth

            <!-- view web  -->

            <a class="menu-toggle" href="#"><span>Menu</span></a>
        </div> <!-- end triggers -->

    </div>

</header> <!-- end header -->
