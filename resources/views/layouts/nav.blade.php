<nav class="navbar-default navbar-static-side">
    <div class="sidebar-brand fixed-brand">
        <img class="logo-element-img img-logo" id="logo" src="{{ asset('checkout/images/logo.png')}}" alt="">
        <a class="close-canvas-menu text-white float-right"><i class="fa fa-times"></i></a>
    </div>
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="logo-element fixed-brand">
                    <img class="mini-logo" src="{{ asset('checkout/images/logo.png')}}" alt="">
                </div>
                <div class="dropdown profile-element">
                    <div class="sidebar-header">
                        <div class="sidebar-nav-search">
                            <div class="input-group mb-3 input-group-sm input-group-border">
                                <input type="text" class="form-control input-group-text" id="search-menu" placeholder="Search Menu ...">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary toggle-btn" type="submit"><i class="feather icon-x-circle"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="profile-bg"><img src="img/profile_bg.jpg" alt=""></div>
                        <div class="search-toggle toggle-btn"><i class="feather icon-chevron-up"></i></div>
                        <div class="user-profile-info">
                            <div class="user-pic">
                                <img class="img-responsive img-rounded" alt="User picture" src="img/users/user3.jpg">
                            </div>
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <div class="user-info">
                                <span class="user-name">{{ Auth::user()->firstname }}
                                    <strong>{{ Auth::user()->name }}</strong>
                                </span>
                                <span class="user-role">Administrator</span>
                                <span class="user-status">
                                    <i class="fa fa-circle text-success"></i>
                                    <span>{{ __('Online') }}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item category-titles"><a>Navigation</a></li>
            <li class="nav-item active">
                <a href="index.html" class="nav-link"><i class="fa feather icon-home"></i> <span class="nav-label">Dashboards</span> </a>
            </li>

            {{-- 1rst Pannel --}}

            <li class="nav-item category-titles"><a>Manage Transactions</a></li>
            <li class="nav-item ">
                <a class="nav-link " href="#"><i class="ti-wallet icon-box"></i> <span class="nav-label">Wallet</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>All Transactions</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i> Wallet to Wallet</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i> Wallet to Mobile money</a></li>
                </ul>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="#"><i class="ti-wallet icon-box"></i> <span class="nav-label">Mobile Money</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>All Transactions</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i> Callback Response</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i> Verify Transactions</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="ti-wallet icon-box "></i> <span class="nav-label">MoneyGram</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>All Transactions</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i> Callback Response</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i> Verify Transactions</a></li>
                </ul>
            </li>

            {{-- 2nd Pannel --}}

            <li class="nav-item category-titles"><a>Manage Users</a></li>
            <li class="nav-item ">
                <a class="nav-link " href="#"><i class="ion-ios-people" style="font-size: 15px"></i> <span class="nav-label">Merchant</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/manage/users/all') }}"><i class="fa fa-circle-o"></i>All Merchant</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>Create Merchant</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>Update Merchant</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>Delete Merchant</a></li>
                </ul>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="#"><i class="ion-ios-people" style="font-size: 15px"></i> <span class="nav-label">Administrator</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>All Administrator</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>Create Administrator</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>Update Administrator</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>Delete Administrator</a></li>
                </ul>
            </li>

            {{-- 3rd Pannel --}}

            <li class="nav-item category-titles"><a>Manage Employees</a></li>

            <li class="nav-item ">
                <a class="nav-link " href="#"><i class="ion-ios-people" style="font-size: 15px"></i> <span class="nav-label">Employee</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>All Employee</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>Create Employee</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>Update Employee</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-circle-o"></i>Delete Employee</a></li>
                </ul>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="#"><i class="ion-checkmark-circled"></i> <span class="nav-label">Présences</span></a>
            </li>
        </ul>
        @include('layouts.sidebar-footer')
    </div>
</nav>