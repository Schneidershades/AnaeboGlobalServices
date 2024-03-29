@extends('layouts.main')

@section('title')
    Approval Needed
@endsection

@section('content')
<!-- Page header start -->
<div class="page-header">
    <div class="page-header-title">
        <h4>Invoice List</h4>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index-2.html">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Invoice</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Invoice List</a>
            </li>
        </ul>
    </div>
</div>
<!-- Page header end -->
<!-- Page body start -->
<div class="page-body invoice-list-page">
    <div class="row">
        <div class="col-xl-3 col-lg-12 push-xl-9">
            <!-- Search Box card start -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Search Box</h5></div>
                <div class="card-block p-t-10">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search here...">
                        <span class="input-group-addon" id="basic-addon1"><i class="icofont icofont-search"></i></span>
                    </div>
                    <div class="task-right">
                        <div class="task-right-header-status">
                            <span data-toggle="collapse">Completed Stats</span>
                            <i class="icofont icofont-rounded-down f-right"></i>
                        </div>
                        <!-- end of sidebar-header completed status-->
                        <div class="taskboard-right-progress">
                            <h6>Highest Priority</h6>
                            <div class="faq-progress">
                                <div class="progress">
                                    <!-- <span class="faq-text3"></span> -->
                                    <div class="faq-bar3" style="width: 80%;"></div>
                                </div>
                            </div>
                            <h6>High priority</h6>
                            <div class="faq-progress">
                                <div class="progress">
                                    <!-- <span class="faq-text1"></span> -->
                                    <div class="faq-bar1" style="width: 70%;"></div>
                                </div>
                            </div>
                            <h6>Normal priority</h6>
                            <div class="faq-progress">
                                <div class="progress">
                                    <!-- <span class="faq-text2"></span> -->
                                    <div class="faq-bar2" style="width: 50%;"></div>
                                </div>
                            </div>
                            <h6>Low priority</h6>
                            <div class="faq-progress">
                                <div class="progress">
                                    <!-- <span class="faq-text4"></span> -->
                                    <div class="faq-bar4" style="width: 60%;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end of task-board-right progress -->
                        <!-- start task right users -->
                        <div class="task-right-header-users">
                            <span data-toggle="collapse">Assign Users</span>
                            <i class="icofont icofont-rounded-down f-right"></i>
                        </div>
                        <div class="user-box assign-user taskboard-right-users">
                            <div class="media">
                                <div class="media-left media-middle photo-table">
                                    <a href="#">
                                        <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6>Josephin Doe</h6>
                                    <p>Santa Ana,CA</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-middle photo-table">
                                    <a href="#">
                                        <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6>Josephin Doe</h6>
                                    <p>Huntingston, NJ</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-middle photo-table">
                                    <a href="#">
                                        <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6>Josephin Doe</h6>
                                    <p>Willingstion, WA</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left media-middle photo-table">
                                    <a href="#">
                                        <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6>Josephin Doe</h6>
                                    <p>Illions, IL</p>
                                </div>
                            </div>
                        </div>
                        <!-- end of task-board-right users -->
                        <div class="task-right-header-revision">
                            <span data-toggle="collapse">Revision</span>
                            <i class="icofont icofont-rounded-down f-right"></i>
                        </div>
                        <div class="taskboard-right-revision user-box">
                            <div class="media">
                                <div class="media-left">
                                    <a class="btn btn-outline-primary btn-lg bg-white txt-muted btn-icon" href="#!" role="button"><i class="icofont icofont-gears"></i>
                                </a>
                                </div>
                                <div class="media-body">
                                    <div class="chat-header">Drop the IE specific hacks for temporal inputs</div>
                                    <p class="chat-header  text-muted">4 minutes ago</p>
                                </div>
                                <!-- end of media body -->
                            </div>
                            <!-- end of media -->
                            <div class="media">
                                <div class="media-left">
                                    <a class="btn btn-outline-danger btn-lg bg-white txt-muted btn-icon" href="#!" role="button"><i class="icofont icofont-share"></i>
                                </a>
                                </div>
                                <div class="media-body">
                                    <div class="chat-header">Have Carousel ignore keyboard events</div>
                                    <p class="chat-header  text-muted">12 Dec,2015</p>
                                </div>
                                <!-- end of media body -->
                            </div>
                            <!-- end of media -->
                            <div class="media">
                                <div class="media-left">
                                    <a class="btn btn-outline-warning btn-lg bg-white txt-muted btn-icon" href="#!" role="button"><i class="icofont icofont-font"></i>
                                </a>
                                </div>
                                <div class="media-body">
                                    <div class="chat-header">Add full font overrides for popovers and tooltips</div>
                                    <p class="chat-header text-muted">2 month ago</p>
                                </div>
                                <!-- end of media body -->
                            </div>
                            <!-- end of media -->
                            <div class="media">
                                <div class="media-left">
                                    <a class="btn btn-outline-success btn-lg bg-white txt-muted btn-icon" href="#!" role="button"><i class="icofont icofont-responsive"></i>
                                </a>
                                </div>
                                <div class="media-body">
                                    <div class="chat-header">Responsive Asssignment</div>
                                    <p class="chat-header  text-muted">6 month ago</p>
                                </div>
                                <!-- end of media body -->
                            </div>
                            <!-- end of media -->
                        </div>
                        <!-- end of task-right-revision -->
                    </div>
                    <!-- end of sidebar-right -->
                </div>
                <!-- end of card-block -->
            </div>
            <!-- Search Box card end -->
        </div>
        <div class="col-xl-9 col-lg-12 pull-xl-3 filter-bar">
            <!-- Navigation start -->
            <nav class="navbar navbar-light bg-faded m-b-30 p-10">
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#!">Filter: <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="bydate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-clock-time"></i> By Date</a>
                        <div class="dropdown-menu" aria-labelledby="bydate">
                            <a class="dropdown-item" href="#!">Show all</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Today</a>
                            <a class="dropdown-item" href="#!">Yesterday</a>
                            <a class="dropdown-item" href="#!">This week</a>
                            <a class="dropdown-item" href="#!">This month</a>
                            <a class="dropdown-item" href="#!">This year</a>
                        </div>
                    </li>
                    <!-- end of by date dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="bystatus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-chart-histogram-alt"></i> By Status</a>
                        <div class="dropdown-menu" aria-labelledby="bystatus">
                            <a class="dropdown-item" href="#!">Show all</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Open</a>
                            <a class="dropdown-item" href="#!">On hold</a>
                            <a class="dropdown-item" href="#!">Resolved</a>
                            <a class="dropdown-item" href="#!">Closed</a>
                            <a class="dropdown-item" href="#!">Dublicate</a>
                            <a class="dropdown-item" href="#!">Wontfix</a>
                        </div>
                    </li>
                    <!-- end of by status dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="bypriority" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-sub-listing"></i> By Priority</a>
                        <div class="dropdown-menu" aria-labelledby="bypriority">
                            <a class="dropdown-item" href="#!">Show all</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Highest</a>
                            <a class="dropdown-item" href="#!">High</a>
                            <a class="dropdown-item" href="#!">Normal</a>
                            <a class="dropdown-item" href="#!">Low</a>
                        </div>
                    </li>
                    <li class="nav-item nav-grid">
                        <span class="m-r-15">View Mode: </span>
                        <button type="button" class="btn btn-sm btn-primary waves-effect waves-light m-r-10" data-toggle="tooltip" data-placement="top" title="list view">
                            <i class="icofont icofont-listine-dots"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="grid view">
                            <i class="icofont icofont-table"></i>
                        </button>
                    </li>
                    <!-- end of by priority dropdown -->
                </ul>
            </nav>
            <!-- Navigation end  -->
            <div class="row">
                <!-- Invoice list card start -->
                <div class="col-sm-6">
                    <div class="card card-border-primary">
                        <div class="card-header">
                            <h5>John Doe </h5>
                            <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
                            <div class="dropdown-secondary dropdown f-right">
                                <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                <div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-danger"></span>Pending</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-warning"></span>Paid</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item waves-light waves-effect active" href="#!"><span class="point-marker bg-success"></span>On Hold</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-info"></span>Canceled</a>
                                </div>
                                <!-- end of dropdown menu -->
                                <span class="f-left m-r-5 text-inverse">Status : </span>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled">
                                        <li>Invoice #: &nbsp;0028</li>
                                        <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled text-right">
                                        <li>$8,750</li>
                                        <li>Method: <span class="text-semibold">SWIFT</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="task-list-table">
                                <p class="task-due"><strong> Due : </strong><strong class="label label-primary">23 hours</strong></p>
                            </div>
                            <div class="task-board m-0">
                                <a href="http://flatable.phoenixcoded.net/html/invoice.html" class="btn btn-info btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i></a>
                                <!-- end of dropdown-secondary -->
                                <div class="dropdown-secondary dropdown">
                                    <button class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted" type="button" id="dropdown14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdown14" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-alarm"></i> Print Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-attachment"></i> Download invoice</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-spinner-alt-5"></i> Edit Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-edit"></i> Remove Invoice</a>
                                    </div>
                                    <!-- end of dropdown menu -->
                                </div>
                                <!-- end of seconadary -->
                            </div>
                            <!-- end of pull-right class -->
                        </div>
                        <!-- end of card-footer -->
                    </div>
                </div>
                <!-- Invoice list card end -->
                <!-- Invoice list card start -->
                <div class="col-sm-6">
                    <div class="card card-border-primary">
                        <div class="card-header">
                            <h5>John Doe </h5>
                            <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
                            <div class="dropdown-secondary dropdown f-right">
                                <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                <div class="dropdown-menu" aria-labelledby="dropdown6" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-danger"></span>Pending</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-warning"></span>Paid</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item waves-light waves-effect active" href="#!"><span class="point-marker bg-success"></span>On Hold</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-info"></span>Canceled</a>
                                </div>
                                <!-- end of dropdown menu -->
                                <span class="f-left m-r-5 text-inverse">Status : </span>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled">
                                        <li>Invoice #: &nbsp;0028</li>
                                        <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled text-right">
                                        <li>$8,750</li>
                                        <li>Method: <span class="text-semibold">Paypal</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="task-list-table">
                                <p class="task-due"><strong> Due : </strong><strong class="label label-success">23 hours</strong></p>
                            </div>
                            <div class="task-board m-0">
                                <a href="http://flatable.phoenixcoded.net/html/invoice.html" class="btn btn-info btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i></a>
                                <!-- end of dropdown-secondary -->
                                <div class="dropdown-secondary dropdown">
                                    <button class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted" type="button" id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdown3" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-alarm"></i> Print Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-attachment"></i> Download invoice</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-spinner-alt-5"></i> Edit Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-edit"></i> Remove Invoice</a>
                                    </div>
                                    <!-- end of dropdown menu -->
                                </div>
                                <!-- end of seconadary -->
                            </div>
                            <!-- end of pull-right class -->
                        </div>
                        <!-- end of card-footer -->
                    </div>
                </div>
                <!-- Invoice list card end -->
                <div class="col-sm-6">
                    <!-- Invoice list card start -->
                    <div class="card card-border-primary">
                        <div class="card-header">
                            <h5>John Doe </h5>
                            <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
                            <div class="dropdown-secondary dropdown f-right">
                                <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                <div class="dropdown-menu" aria-labelledby="dropdown12" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-danger"></span>Pending</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-warning"></span>Paid</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item waves-light waves-effect active" href="#!"><span class="point-marker bg-success"></span>On Hold</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-info"></span>Canceled</a>
                                </div>
                                <!-- end of dropdown menu -->
                                <span class="f-left m-r-5 text-inverse">Status : </span>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled">
                                        <li>Invoice #: &nbsp;0028</li>
                                        <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled text-right">
                                        <li>$8,750</li>
                                        <li>Method: <span class="text-semibold">Paypal</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="task-list-table">
                                <p class="task-due"><strong> Due : </strong><strong class="label label-warning">23 hours</strong></p>
                            </div>
                            <div class="task-board m-0">
                                <a href="http://flatable.phoenixcoded.net/html/invoice.html" class="btn btn-info btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i></a>
                                <!-- end of dropdown-secondary -->
                                <div class="dropdown-secondary dropdown">
                                    <button class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted" type="button" id="dropdown8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdown8" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-alarm"></i> Print Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-attachment"></i> Download invoice</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-spinner-alt-5"></i> Edit Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-edit"></i> Remove Invoice</a>
                                    </div>
                                    <!-- end of dropdown menu -->
                                </div>
                                <!-- end of seconadary -->
                            </div>
                            <!-- end of pull-right class -->
                        </div>
                        <!-- end of card-footer -->
                    </div>
                    <!-- Invoice list card end -->
                </div>
                <div class="col-sm-6">
                    <!-- Invoice list card start -->
                    <div class="card card-border-primary">
                        <div class="card-header">
                            <h5>John Doe </h5>
                            <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
                            <div class="dropdown-secondary dropdown f-right">
                                <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                <div class="dropdown-menu" aria-labelledby="dropdown4" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-danger"></span>Pending</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-warning"></span>Paid</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item waves-light waves-effect active" href="#!"><span class="point-marker bg-success"></span>On Hold</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-info"></span>Canceled</a>
                                </div>
                                <!-- end of dropdown menu -->
                                <span class="f-left m-r-5 text-inverse">Status : </span>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled">
                                        <li>Invoice #: &nbsp;0028</li>
                                        <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled text-right">
                                        <li>$8,750</li>
                                        <li>Method: <span class="text-semibold">Payoneer</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="task-list-table">
                                <p class="task-due"><strong> Due : </strong><strong class="label label-info">23 hours</strong></p>
                            </div>
                            <div class="task-board m-0">
                                <a href="http://flatable.phoenixcoded.net/html/invoice.html" class="btn btn-info btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i></a>
                                <!-- end of dropdown-secondary -->
                                <div class="dropdown-secondary dropdown">
                                    <button class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted" type="button" id="dropdown16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdown16" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-alarm"></i> Print Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-attachment"></i> Download invoice</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-spinner-alt-5"></i> Edit Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-edit"></i> Remove Invoice</a>
                                    </div>
                                    <!-- end of dropdown menu -->
                                </div>
                                <!-- end of seconadary -->
                            </div>
                            <!-- end of pull-right class -->
                        </div>
                        <!-- end of card-footer -->
                    </div>
                    <!-- Invoice list card end -->
                </div>
                <div class="col-sm-6">
                    <!-- Invoice list card start -->
                    <div class="card card-border-primary">
                        <div class="card-header">
                            <h5>John Doe </h5>
                            <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
                            <div class="dropdown-secondary dropdown f-right">
                                <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                <div class="dropdown-menu" aria-labelledby="dropdown2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-danger"></span>Pending</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-warning"></span>Paid</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item waves-light waves-effect active" href="#!"><span class="point-marker bg-success"></span>On Hold</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-info"></span>Canceled</a>
                                </div>
                                <!-- end of dropdown menu -->
                                <span class="f-left m-r-5 text-inverse">Status : </span>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled">
                                        <li>Invoice #: &nbsp;0028</li>
                                        <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled text-right">
                                        <li>$8,750</li>
                                        <li>Method: <span class="text-semibold">Skrill</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="task-list-table">
                                <p class="task-due"><strong> Due : </strong><strong class="label label-danger">23 hours</strong></p>
                            </div>
                            <div class="task-board m-0">
                                <a href="http://flatable.phoenixcoded.net/html/invoice.html" class="btn btn-info btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i></a>
                                <!-- end of dropdown-secondary -->
                                <div class="dropdown-secondary dropdown">
                                    <button class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted" type="button" id="dropdown9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdown9" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-alarm"></i> Print Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-attachment"></i> Download invoice</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-spinner-alt-5"></i> Edit Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-edit"></i> Remove Invoice</a>
                                    </div>
                                    <!-- end of dropdown menu -->
                                </div>
                                <!-- end of seconadary -->
                            </div>
                            <!-- end of pull-right class -->
                        </div>
                        <!-- end of card-footer -->
                    </div>
                    <!-- Invoice list card end -->
                </div>
                <div class="col-sm-6">
                    <!-- Invoice list card start -->
                    <div class="card card-border-primary">
                        <div class="card-header">
                            <h5>John Doe </h5>
                            <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
                            <div class="dropdown-secondary dropdown f-right">
                                <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                <div class="dropdown-menu" aria-labelledby="dropdown13" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-danger"></span>Pending</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-warning"></span>Paid</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item waves-light waves-effect active" href="#!"><span class="point-marker bg-success"></span>On Hold</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-info"></span>Canceled</a>
                                </div>
                                <!-- end of dropdown menu -->
                                <span class="f-left m-r-5 text-inverse">Status : </span>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled">
                                        <li>Invoice #: &nbsp;0028</li>
                                        <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled text-right">
                                        <li>$8,750</li>
                                        <li>Method: <span class="text-semibold">SWIFT</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="task-list-table">
                                <p class="task-due"><strong> Due : </strong><strong class="label label-primary">23 hours</strong></p>
                            </div>
                            <div class="task-board m-0">
                                <a href="http://flatable.phoenixcoded.net/html/invoice.html" class="btn btn-info btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i></a>
                                <!-- end of dropdown-secondary -->
                                <div class="dropdown-secondary dropdown">
                                    <button class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted" type="button" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdown10" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-alarm"></i> Print Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-attachment"></i> Download invoice</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-spinner-alt-5"></i> Edit Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-edit"></i> Remove Invoice</a>
                                    </div>
                                    <!-- end of dropdown menu -->
                                </div>
                                <!-- end of seconadary -->
                            </div>
                            <!-- end of pull-right class -->
                        </div>
                        <!-- end of card-footer -->
                    </div>
                    <!-- Invoice list card end -->
                </div>
                <div class="col-sm-6">
                    <!-- Invoice list card start -->
                    <div class="card card-border-primary">
                        <div class="card-header">
                            <h5>John Doe </h5>
                            <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
                            <div class="dropdown-secondary dropdown f-right">
                                <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                <div class="dropdown-menu" aria-labelledby="dropdown7" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-danger"></span>Pending</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-warning"></span>Paid</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item waves-light waves-effect active" href="#!"><span class="point-marker bg-success"></span>On Hold</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-info"></span>Canceled</a>
                                </div>
                                <!-- end of dropdown menu -->
                                <span class="f-left m-r-5 text-inverse">Status : </span>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled">
                                        <li>Invoice #: &nbsp;0028</li>
                                        <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled text-right">
                                        <li>$8,750</li>
                                        <li>Method: <span class="text-semibold">Skrill</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="task-list-table">
                                <p class="task-due"><strong> Due : </strong><strong class="label label-success">23 hours</strong></p>
                            </div>
                            <div class="task-board m-0">
                                <a href="http://flatable.phoenixcoded.net/html/invoice.html" class="btn btn-info btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i></a>
                                <!-- end of dropdown-secondary -->
                                <div class="dropdown-secondary dropdown">
                                    <button class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted" type="button" id="dropdown15" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdown15" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-alarm"></i> Print Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-attachment"></i> Download invoice</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-spinner-alt-5"></i> Edit Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-edit"></i> Remove Invoice</a>
                                    </div>
                                    <!-- end of dropdown menu -->
                                </div>
                                <!-- end of seconadary -->
                            </div>
                            <!-- end of pull-right class -->
                        </div>
                        <!-- end of card-footer -->
                    </div>
                    <!-- Invoice list card end -->
                </div>
                <div class="col-sm-6">
                    <!-- Invoice list card start -->
                    <div class="card card-border-primary">
                        <div class="card-header">
                            <h5>John Doe </h5>
                            <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
                            <div class="dropdown-secondary dropdown f-right">
                                <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Overdue</button>
                                <div class="dropdown-menu" aria-labelledby="dropdown5" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-danger"></span>Pending</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-warning"></span>Paid</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item waves-light waves-effect active" href="#!"><span class="point-marker bg-success"></span>On Hold</a>
                                    <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-info"></span>Canceled</a>
                                </div>
                                <!-- end of dropdown menu -->
                                <span class="f-left m-r-5 text-inverse">Status : </span>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled">
                                        <li>Invoice #: &nbsp;0028</li>
                                        <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list list-unstyled text-right">
                                        <li>$8,750</li>
                                        <li>Method: <span class="text-semibold">Paypal</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="task-list-table">
                                <p class="task-due"><strong> Due : </strong><strong class="label label-danger">23 hours</strong></p>
                            </div>
                            <div class="task-board m-0">
                                <a href="http://flatable.phoenixcoded.net/html/invoice.html" class="btn btn-info btn-mini b-none"><i class="icofont icofont-eye-alt m-0"></i></a>
                                <!-- end of dropdown-secondary -->
                                <div class="dropdown-secondary dropdown">
                                    <button class="btn btn-info btn-mini dropdown-toggle waves-light b-none txt-muted" type="button" id="dropdown11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdown11" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-alarm"></i> Print Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-attachment"></i> Download invoice</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-spinner-alt-5"></i> Edit Invoice</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#!"><i class="icofont icofont-ui-edit"></i> Remove Invoice</a>
                                    </div>
                                    <!-- end of dropdown menu -->
                                </div>
                                <!-- end of seconadary -->
                            </div>
                            <!-- end of pull-right class -->
                        </div>
                        <!-- end of card-footer -->
                    </div>
                    <!-- Invoice list card end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page body end -->
@endsection