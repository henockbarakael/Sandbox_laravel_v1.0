<nav class="navbar navbar-static-top navbar-fixed-top topNav-white-theme" id="topNavbar">
    <div class="navbar-header left">
        <a class="nav-link navbar-mini mini-style" href="#"><i class="feather icon-menu icon-toggle-left"></i></a>
        <div class="searchbar">
            <input class="search_input" type="text" placeholder="Search...">
            <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
        </div>
    </div>
    <ul class="nav navbar-top-links navbar-right ml-auto">
        <li class="nav-item">
            <a class="nav-link btn-full-screen toggle-full-screen" onclick="toggleFullScreen();" data-toggle="tooltip" data-placement="top" title="Go FullScreen" data-original-title="FullScreen"><span id="top-full-screen" class="feather icon-maximize full-screen" aria-hidden="true"></span></a>
        </li>
        <li class="nav-item dropdown message-dropdown">
            <a class="nav-link dropdown-toggle count-msg show-notification" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope-o"></i> <span class="label label-success">146</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right notifications bounce animated  ml-auto">
                <li class="notification-heading">
                    <h6 class="menu-title">Messages</h6>
                </li>
                <li>
                    <ul class="dropdown-messages">
                        <li class="nav-item">
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="float-left pt-1">
                                    <img alt="image" class="img-circle" src="img/2.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="float-right">46h ago</small>
                                    <strong>John Loreipsum</strong> started following <strong>Anna Smith</strong>. <br>
                                    <small class="text-muted msg-date">3 days ago at 7:58 pm - 01.24.2019</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li class="nav-item">
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="float-left pt-1">
                                    <img alt="image" class="img-circle" src="img/9.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="float-right text-navy">5h ago</small>
                                    <strong>Chris jackson</strong> started following <strong>Anna Smith</strong>. <br>
                                    <small class="text-muted msg-date">3 days ago at 7:58 pm - 01.24.2019</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li class="nav-item">
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="float-left pt-1">
                                    <img alt="image" class="img-circle" src="img/2.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="float-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Carlos Smith</strong>. <br>
                                    <small class="text-muted msg-date">3 days ago at 7:58 pm - 01.24.2019</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li class="nav-item">
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="float-left pt-1">
                                    <img alt="image" class="img-circle" src="img/9.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="float-right text-navy">5h ago</small>
                                    <strong>Chris jackson</strong> started following <strong>Anna Smith</strong>. <br>
                                    <small class="text-muted msg-date">3 days ago at 7:58 pm - 01.24.2019</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="notification-footer">
                    <h6 class="menu-title">View all<i class="glyphicon glyphicon-circle-arrow-right"></i></h6>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle count-msg show-chat-list" data-toggle="dropdown" href="#">
                <i class="fa fa-bell-o"></i> 
                <span class="label label-danger">12</span>
            </a>
        </li>
        <li class="nav-item user-profile header-notification">
            <div class="nav-link dropdown-primary dropdown config">
                <div class="dropdown-toggle" aria-expanded="true" data-toggle="dropdown" role="menu">
                    <img class="img-radius" alt="User-Profile-Image" src="img/users/user3.jpg"><span class="text-light"> John SR </span><i class="feather icon-chevron-down"></i>
                </div>
                <ul class="dropdown-menu dropdown-menu-right mb-3 menu-log flipInX animated  ml-auto" data-dropdown-out="fadeOut" data-dropdown-in="fadeIn">
                    <li class="nav-item">
                        <a href="#" class="nav-link setting-btn">
                            <i class="fa fa-cogs"></i> Settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.html">
                            <i class="fa fa-user"></i> Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailbox.html">
                            <i class="fa fa-envelope"></i> My Messages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lockscreen.html">
                            <i class="fa fa-lock"></i> Lock Screen
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>