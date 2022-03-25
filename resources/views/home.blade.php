@extends('layouts.master')

@section('content')

<div id="wrapper">
    @include('layouts.nav')
    <div id="page-wrapper" class="gray-bg topMargin">
        <div class="row border-bottom">
            @include('layouts.navtop')
        </div>
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <!--Page Content-->
                    <div class="wrapper wrapper-content">
                        <!--Main Content-->
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-7 col-lg-8 col-xl-8">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="default">Adminos</a></li>
                                    <li class="breadcrumb-item"><a href="#">{{__('Dashboards')}}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{__('Admin Dashboard')}}</li>
                                </ol>
                            </div>
                            <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 text-center">
                                <span id="Date" class="float-right"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                <div class="panel-box statistic-bg-purple radius">
                                    <div class="panel-box-content">
                                        <div class="row">
                                            <div class="col-6 statistic-box">
                                                <h4 class="text-white">$1200</h4>
                                                <h6 class="m-b-0 text-white">Total Revenue</h6>
                                            </div>
                                            <div class="col-6 pl-1 pl-2 statistic-charts pt-3">
                                                <div id="sparkline1"></div>
                                            </div>
                                            <div class="col-12 statistic-footer">
                                                <p class="text-white"><i class="feather icon-clock f-14"></i> update : 2:15 am</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                <div class="panel-box statistic-bg-info radius">
                                    <div class="panel-box-content">
                                        <div class="row">
                                            <div class="col-6 statistic-box">
                                                <h4 class="text-white">700</h4>
                                                <h6 class="m-b-0 text-white">Affiliate Revenue</h6>
                                            </div>
                                            <div class="col-6 pl-1 pl-2 statistic-charts pt-3">
                                                <div id="sparkline2"></div>
                                            </div>
                                            <div class="col-12 statistic-footer">
                                                <p class="text-white m-b-0"><i class="feather icon-clock f-14"></i> update : 2:15 am</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                <div class="panel-box statistic-bg-red radius">
                                    <div class="panel-box-content">
                                        <div class="row">
                                            <div class="col-6 statistic-box">
                                                <h4 class="text-white">3600</h4>
                                                <h6 class="m-b-0 text-white">+ Refunds</h6>
                                            </div>
                                            <div class="col-6 pl-1 pl-2 statistic-charts pt-3">
                                                <div id="sparkline3"></div>
                                            </div>
                                            <div class="col-12 statistic-footer">
                                                <p class="text-white m-b-0"><i class="feather icon-clock f-14"></i> update : 2:15 am</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                <div class="panel-box statistic-bg-yellow radius">
                                    <div class="panel-box-content">
                                        <div class="row">
                                            <div class="col-6 statistic-box">
                                                <h4 class="text-white">$10,207</h4>
                                                <h6 class="m-b-0 text-white">Visual Figure</h6>
                                            </div>
                                            <div class="col-6 pl-1 pl-2 statistic-charts pt-3">
                                                <div id="sparkline4"></div>
                                            </div>
                                            <div class="col-12 statistic-footer">
                                                <p class="text-white m-b-0"><i class="feather icon-clock f-14"></i> update : 2:15 am</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="co-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ui-sortable">
                                <div class="panel-box table-panel-box">
                                    <div class="panel-box-title ui-sortable-handle">
                                        <h5>Last Transactions In The System</h5>
                                        <div class="panel-box-tools">
                                            <a class="collapse-link ui-sortable">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                <i class="fa fa-wrench"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-user dropdown-menu-right">
                                                <li><a href="#">Action option 1</a></li>
                                                <li><a href="#">Action option 2</a></li>
                                            </ul>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="panel-box-content p-3">
                                        <div class="row custom-padding">
                                            <div class="col-sm-9 m-b-xs ui-sortable">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-sm btn-white"> <input name="options" id="option1" type="radio"> Day </label>
                                                    <label class="btn btn-sm btn-white"> <input name="options" id="option2" type="radio"> Week </label>
                                                    <label class="btn btn-sm btn-white"> <input name="options" id="option3" type="radio"> Month </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 ui-sortable">
                                                <div class="input-group">
                                                    <input class="form-control form-control-sm" type="text" placeholder="Search">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-sm btn-primary" type="button">Go!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Merchant </th>
                                                        <th>Telephone</th>
                                                        <th>Amount </th>
                                                        <th>Currency </th>
                                                        <th>Reference </th>
                                                        <th>Transaction_Id</th>
                                                        <th>Status</th>
                                                        <th>Created</th>
                                                        <th>Updated</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Project <small>This is example of project</small></td>
                                                        <td>Allen Smith</td>
                                                        <td>0300 052334</td>
                                                        <td>Example Ltd</td>
                                                        <td><span class="pie" style="display: none;">1/5</span><svg class="peity" height="16" width="16" style="width: 100%;"><path d="M 8 0 A 8 8 0 0 1 15.60845213036123 5.52786404500042 L 8 8" data-value="1" fill="#1AB394"></path><path d="M 15.60845213036123 5.52786404500042 A 8 8 0 1 1 7.999999999999998 0 L 8 8" data-value="4" fill="#F2F2F2"></path></svg></td>
                                                        <td>20%</td>
                                                        <td>Jul 14, 2018</td>
                                                        <td>Jul 14, 2018</td>
                                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="panel-box-footer">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination justify-content-end">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                                <div class="panel-box">
                                    <div class="panel-box-title">
                                        <h5>Monthly View</h5>
                                        <div class="panel-box-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                                <i class="fa fa-wrench"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-user dropdown-menu-right">
                                                <li><a href="#">Config option 1</a></li>
                                                <li><a href="#">Config option 2</a></li>
                                            </ul>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                        <p class="float-right">For more details about usage, please refer
                                            <a href="https://www.amcharts.com/online-store/" class="text-navy">amCharts licence</a>
                                        </p>
                                    </div>
                                    <div class="panel-box-content">
                                        <div id="visitor" style="height:317px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                                <div class="panel-box">
                                        <div class="col-12 text-center panel-box-title">
                                            <h6>Project Completed</h6>
                                        </div>
                                    <div class="panel-box-content" style="height:390px;">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <div class="col-12">
                                            <div data-label="85%" class="radial-bar radial-bar-75 radial-bar-lg radial-bar-warning" data-toggle="tooltip" title="Project Completed 85%"></div>
                                            <p>Version 1.0.0.5</p>
                                            <h6><a href="#" class="yellow-link-color">View Project Report</a></h6>
                                            </div>
                                            <div class="pt-1 pl-3 pr-3">
                                                <span class="pull-left">Current Task</span>
                                                <span class="pull-right">30%</span>
                                                <div class="progress" style="height: 4px; clear: both;">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%;"></div>
                                                </div>
                                            </div>
                                            <div class="pt-2 pl-3 pr-3">
                                                <span class="pull-left">Fixed Bugs</span>
                                                <span class="pull-right">60%</span>
                                                <div class="progress" style="height: 4px; clear: both;">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%"></div>
                                                </div>
                                            </div>
                                            <div class="pt-2 pl-3 pr-3">
                                                <span class="pull-left">Remaining Tasks</span>
                                                <span class="pull-right">37%</span>
                                                <div class="progress" style="height: 4px;  clear: both;">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100" style="width:37%"></div>
                                                </div>
                                            </div>
                                            <div class="pt-2 pl-3 pr-3">
                                                <span class="pull-left">Overall Progress</span>
                                                <span class="pull-right">60%</span>
                                                <div class="progress" style="height: 4px; clear: both;">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!--Sales Per Day, Visitor & Orders-->

                        <!--Application Sales-->

                        <!--Smart Chat And Top Visitors-->

                    </div>
                    <!-- End Site Visitors -->
                    @include('layouts.footer')
                </div>
            </div>
        </div>
    </div>
    <div id="notification-menu" class="sticky-top">
        <div class="notification-menu p-3 notify-scroll">
            <div class="notification-heading">
                <h6 class="menu-title">Messages <a href="#" class="float-right ml-auto" id="close-notification"><i class="feather icon-x"></i></a></h6>
            </div>
            <ul class="nav">
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
                            <img alt="image" class="img-circle" src="img/users/user1.jpg">
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
                            <img alt="image" class="img-circle" src="img/users/user2.jpg">
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
                            <img alt="image" class="img-circle" src="img/users/user3.jpg">
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
                            <img alt="image" class="img-circle" src="img/users/user4.jpg">
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
                            <img alt="image" class="img-circle" src="img/users/user5.jpg">
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
                            <img alt="image" class="img-circle" src="img/users/user6.jpg">
                        </a>
                        <div class="media-body ">
                            <small class="float-right text-navy">5h ago</small>
                            <strong>Chris jackson</strong> started following <strong>Anna Smith</strong>. <br>
                            <small class="text-muted msg-date">3 days ago at 7:58 pm - 01.24.2019</small>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="notification-footer mb-5 text-center">
                <h6 class="btn btn-link btn-sm btn-block"><i class="fa fa-spinner fa-spin"></i> Loading More...</h6>
            </div>
        </div>
    </div>
    <div id="chat" class="sticky-top">
        <div class="chat-messages">
            <div class="search-friends">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="search-users" placeholder="Search by name...">
                    <div class="input-group-append">
                        <button class="btn btn-default show-chat-list" type="submit" data-toggle="tooltip" title="Close Chat List">
                            <i class="feather icon-x-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="online-friends">
                <div class="friends  show-chat-msg">
                    <img alt="image" class="img-friends" src="img/2.jpg">
                    <strong class="username pt-3">John Carlos</strong>
                    <div class="online float-right"><i class="fa fa-circle text-success" data-toggle="tooltip" title="Online"></i></div>
                </div>
                <div class="friends  show-chat-msg">
                    <img alt="image" class="img-friends" src="img/9.jpg">
                    <strong class="username pt-3">Andrew Smith</strong>
                    <div class="online float-right"><i class="fa fa-circle text-success" data-toggle="tooltip" title="Online"></i></div>
                </div>
                <div class="friends  show-chat-msg">
                    <img alt="image" class="img-friends" src="img/users/user1.jpg">
                    <strong class="username pt-3">Mark Albert</strong>
                    <div class="online float-right"><i class="fa fa-circle text-success" data-toggle="tooltip" title="Online"></i></div>
                </div>
                <div class="friends  show-chat-msg">
                    <img alt="image" class="img-friends" src="img/users/user2.jpg">
                    <strong class="username pt-3">Harry Kim</strong>
                    <div class="online float-right"><i class="fa fa-circle text-success" data-toggle="tooltip" title="Online"></i></div>
                </div>
                <div class="friends  show-chat-msg">
                    <img alt="image" class="img-friends" src="img/users/user5.jpg">
                    <strong class="username pt-3">Nina Stephan</strong>
                    <div class="online float-right"><i class="fa fa-circle text-warning" data-toggle="tooltip" title="Away"></i></div>
                </div>
                <div class="friends  show-chat-msg">
                    <img alt="image" class="img-friends" src="img/users/user6.jpg">
                    <strong class="username pt-3">Bill Simth</strong>
                    <div class="online float-right"><i class="fa fa-circle text-muted" data-toggle="tooltip" title="Offline"></i></div>
                </div>
                <div class="friends  show-chat-msg">
                    <img alt="image" class="img-friends" src="img/users/user4.jpg">
                    <strong class="username pt-3">Delos Frank</strong>
                    <div class="online float-right"><i class="fa fa-circle text-success" data-toggle="tooltip" title="Online"></i></div>
                </div>
                <div class="friends  show-chat-msg">
                    <img alt="image" class="img-friends" src="img/users/user3.jpg">
                    <strong class="username pt-3">Danny Larry</strong>
                    <div class="online float-right"><i class="fa fa-circle text-warning" data-toggle="tooltip" title="Away"></i></div>
                </div>
            </div>
            <div class="des">
                <strong>Notes:</strong>
                <p class="small">Online friends panel is just for demo purpose and it dose not have any javascript
                    configuration script, you can add more configuration buttons to other settings panel. </p>
            </div>
        </div>
    </div>
    <div id="chat-messages" class="sticky-top">
        <div class="chat-messages">
            <div class="search-friends text-center">
                <i class="feather icon-arrow-right float-left close-chat-msg" data-toggle="tooltip" title="Close Messages"></i>
                <strong class="username pt-3">John Carlos</strong>
            </div>
            <div class="online-friends-chat">
                <div class="friend-replay">
                    <div class="user-pic">
                        <img alt="image" class="img-friends" src="img/2.jpg">
                    </div>
                    <div class="user-msg">
                        <p class="chat-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="your-replay">
                    <div class="your-pic">
                        <img alt="image" class="img-friends" src="img/users/user2.jpg">
                    </div>
                    <div class="your-msg">
                        <p class="chat-content bg-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="friend-replay">
                    <div class="user-pic">
                        <img alt="image" class="img-friends" src="img/2.jpg">
                    </div>
                    <div class="user-msg">
                        <p class="chat-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="your-replay">
                    <div class="your-pic">
                        <img alt="image" class="img-friends" src="img/users/user2.jpg">
                    </div>
                    <div class="your-msg">
                        <p class="chat-content bg-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="friend-replay">
                    <div class="user-pic">
                        <img alt="image" class="img-friends" src="img/2.jpg">
                    </div>
                    <div class="user-msg">
                        <p class="chat-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="your-replay">
                    <div class="your-pic">
                        <img alt="image" class="img-friends" src="img/users/user2.jpg">
                    </div>
                    <div class="your-msg">
                        <p class="chat-content bg-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="chat-input">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="quick-chat" placeholder="Enter Message">
                    <div class="input-group-append">
                        <button class="btn btn-default" type="submit">
                            <i class="feather icon-navigation"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="selector-toggle">
        <a href="javascript:void(0)" class="right-sidebar-toggle"><i class="feather icon-settings rotate-icon"></i></a>
    </div>
    <div id="right-sidebar" class="animated">
        <div class="sidebar-container">
            <ul class="nav nav-tabs navs-3 setting-menu default-theme" id="mySidenav">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-1"> Skin</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-2"><i class="fa fa-cogs"></i></a></li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="sidebar-title">
                        <h5> <i class="fa fa-th" aria-hidden="true"></i> Select Skins</h5>
                        <small>You have 14 Skin Colors.</small>
                    </div>
                    <br>
                    <div class="color-theme-panel">
                        <div class="themes-scroll">
                            <h6>Sidebar Layout</h6>
                            <div class="theme-color">
                                <a class="btn-sidebar-theme" data-myattr="white-theme" href="#">
                                    <div class="sidebar-white"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="default-theme" href="#">
                                    <div class="sidebar-colored"></div>
                                </a>
                            </div>
                            <h6>Top Navbar</h6>
                            <div class="theme-color">
                                <a class="btn-header-theme" data-myattr="topNav-white-theme" href="#">
                                    <div class="theme-29"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-default-theme" href="#">
                                    <div class="theme-5"></div>
                                </a>
                            </div>
                            <h6>Header Color</h6>
                            <div class="theme-color">
                                <a class="btn-header-theme" data-myattr="topNav-blue-theme" href="#">
                                    <div class="theme-1"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-brown-theme" href="#">
                                    <div class="theme-2"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-dark-gray-theme" href="#">
                                    <div class="theme-3"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-dark-pink-theme" href="#">
                                    <div class="theme-4"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-default-theme" href="#">
                                    <div class="theme-5"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-gray-theme" href="#">
                                    <div class="theme-6"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-green-theme" href="#">
                                    <div class="theme-7"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-light-blue-theme" href="#">
                                    <div class="theme-8"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-light-green-theme" href="#">
                                    <div class="theme-9"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-orange-theme" href="#">
                                    <div class="theme-10"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-purple-theme" href="#">
                                    <div class="theme-11"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-red-theme" href="#">
                                    <div class="theme-12"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-sky-theme" href="#">
                                    <div class="theme-13"></div>
                                </a>
                                <a class="btn-header-theme" data-myattr="topNav-yellow-theme" href="#">
                                    <div class="theme-14"></div>
                                </a>
                            </div>
                            <h6>Sidebar Color</h6>
                            <div class="theme-color">
                                <a class="btn-sidebar-theme" data-myattr="blue-theme" href="#">
                                    <div class="theme-15"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="brown-theme" href="#">
                                    <div class="theme-16"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="dark-gray-theme" href="#">
                                    <div class="theme-17"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="dark-pink-theme" href="#">
                                    <div class="theme-18"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="default-theme" href="#">
                                    <div class="theme-19"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="gray-theme" href="#">
                                    <div class="theme-20"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="green-theme" href="#">
                                    <div class="theme-21"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="light-blue-theme" href="#">
                                    <div class="theme-22"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="light-green-theme" href="#">
                                    <div class="theme-23"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="orange-theme" href="#">
                                    <div class="theme-24"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="purple-theme" href="#">
                                    <div class="theme-25"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="red-theme" href="#">
                                    <div class="theme-26"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="sky-theme" href="#">
                                    <div class="theme-27"></div>
                                </a>
                                <a class="btn-sidebar-theme" data-myattr="yellow-theme" href="#">
                                    <div class="theme-28"></div>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="sidebar-content">
                            <strong>Notes:</strong>
                            <div class="small">
                                Other Settings is just for demo purpose and it dose not have any javascript
                                configuration script, you can add more
                                configuration buttons to other settings panel.
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane">
                    <div class="sidebar-title">
                        <h5><i class="fa fa-gears"></i> Settings</h5>
                        <small>You have 12 configuration settings options.</small>
                    </div>
                    <div class="setting-scroll">
                        <div class="setings-item">
                            <span>
                                Fix Navbar
                            </span>
                            <div class="switch float-right">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="fixed-top-navbar">
                                    <label class="onoffswitch-label" for="fixed-top-navbar">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                            <span>
                                Mini Sidebar Menu
                            </span>
                            <div class="switch float-right">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="mini-sidebar-menu">
                                    <label class="onoffswitch-label" for="mini-sidebar-menu">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                            <span>
                                RTL Navbar
                            </span>
                            <div class="switch float-right">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="RTL-layout">
                                    <label class="onoffswitch-label" for="RTL-layout">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                            <span>
                                Show Notifications
                            </span>
                            <div class="switch float-right">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="show-notifications">
                                    <label class="onoffswitch-label" for="show-notifications">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                            <span>
                                Fixed Footer
                            </span>
                            <div class="switch float-right">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="fixed-footer">
                                    <label class="onoffswitch-label" for="fixed-footer">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                            <span>
                                Disable Quick Chat
                            </span>
                            <div class="switch float-right">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="disableChat">
                                    <label class="onoffswitch-label" for="disableChat">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                            <span>
                                Collapsed Panels
                            </span>
                            <div class="switch float-right">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsed-panels">
                                    <label class="onoffswitch-label" for="collapsed-panels">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <h5><i class="fa fa-server"></i> Other Settings</h5>
                        </div>
                        <div class="setings-item">
                            <span>
                                Enable History
                            </span>
                            <div class="switch float-right">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example9">
                                    <label class="onoffswitch-label" for="example9">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                            <span>
                                Offline Users
                            </span>
                            <div class="switch float-right">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example10">
                                    <label class="onoffswitch-label" for="example10">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                            <span>
                                Global Search
                            </span>
                            <div class="switch float-right">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example11">
                                    <label class="onoffswitch-label" for="example11">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                            <span>
                                Update Everyday
                            </span>
                            <div class="switch float-right">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example12">
                                    <label class="onoffswitch-label" for="example12">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-content">
                        <strong>Notes:</strong>
                        <div class="small">
                            Other Settings is just for demo purpose and it dose not have any javascript configuration
                            script, you can add more
                            configuration buttons to other settings panel.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
