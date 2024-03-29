@extends('layouts.main')

@section('title')
    Dashboard 
@endsection


@section('content')
<div class="page-header">
    <div class="page-header-title">
        <h4>Project Dashboard</h4>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index-2.html">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="">Project</a>
            </li>
        </ul>
    </div>
</div>
<div class="page-body">
    <div class="row">

        <div class="col-md-12 col-xl-4">
            <div class="card counter-card-1">
                <div class="card-block-big">
                    <div>
                        <h3>4, 000, 047</h3>
                        <p>Income Last Month
                            <span class="f-right text-primary">
                        <i class="icofont icofont-arrow-up"></i>
                        37.89%
                        </span></p>
                        <div class="progress ">
                            <div class="progress-bar progress-bar-striped progress-xs progress-bar-pink" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <i class="icofont icofont-comment"></i>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-4">
            <div class="card counter-card-2">
                <div class="card-block-big">
                    <div>
                        <h3>250,064</h3>
                        <p>Income per day
                            <span class="f-right text-success">
                        <i class="icofont icofont-arrow-up"></i>
                        34.52%
                        </span>
                        </p>
                        <div class="progress ">
                            <div class="progress-bar progress-bar-striped progress-xs progress-bar-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <i class="icofont icofont-coffee-mug"></i>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-4">
            <div class="card counter-card-3">
                <div class="card-block-big">
                    <div>
                        <h3>N80,047,489</h3>
                        <p>Total Transaction Per week
                            <span class="f-right text-default">
                        <i class="icofont icofont-arrow-down"></i>
                        22.34%
                        </span></p>
                        <div class="progress ">
                            <div class="progress-bar progress-bar-striped progress-xs progress-bar-default" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <i class="icofont icofont-upload"></i>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <!-- User activities chart start -->
            <div class="card analytic-user">
                <div class="card-block-big text-center">
                    <i class="icofont icofont-wallet"></i>
                    <h1>4, 000, 047</h1>
                    <h4>All Income per day</h4>
                </div>
                <div class="card-footer p-t-25 p-b-25">
                    <p class="m-b-0">This is standard panel footer</p>
                </div>
            </div>
            <!-- User activities chart end -->
        </div>

        <div class="col-md-6 col-xl-3">
            <!-- User activities chart start -->
            <div class="card analytic-user">
                <div class="card-block-big text-center">
                    <i class="icofont icofont-wallet"></i>
                    <h1>N 324587</h1>
                    <h4>Per week</h4>
                </div>
                <div class="card-footer p-t-25 p-b-25">
                    <p class="m-b-0">This is standard panel footer</p>
                </div>
            </div>
            <!-- User activities chart end -->
        </div>

        <div class="col-md-6 col-xl-3">
            <!-- User activities chart start -->
            <div class="card analytic-user">
                <div class="card-block-big text-center">
                    <i class="icofont icofont-wallet"></i>
                    <h1>N 324587</h1>
                    <h4>Per Year</h4>
                </div>
                <div class="card-footer p-t-25 p-b-25">
                    <p class="m-b-0">This is standard panel footer</p>
                </div>
            </div>
            <!-- User activities chart end -->
        </div>

        <div class="col-md-6 col-xl-3">
            <!-- User activities chart start -->
            <div class="card analytic-user">
                <div class="card-block-big text-center">
                    <i class="icofont icofont-wallet"></i>
                    <h1>$ 324587</h1>
                    <h4>All Income</h4>
                </div>
                <div class="card-footer p-t-25 p-b-25">
                    <p class="m-b-0">This is standard panel footer</p>
                </div>
            </div>
            <!-- User activities chart end -->
        </div>
        <!-- Documents card start -->
        <div class="col-md-6 col-xl-3">
            <div class="card client-blocks dark-primary-border">
                <div class="card-block">
                    <h5>Staff</h5>
                    <ul>
                        <li>
                            <i class="icofont icofont-document-folder"></i>
                        </li>
                        <li class="text-right">
                            13
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Documents card end -->
        <!-- New clients card start -->
        <div class="col-md-6 col-xl-3">
            <div class="card client-blocks warning-border">
                <div class="card-block">
                    <h5>Branches</h5>
                    <ul>
                        <li>
                            <i class="icofont icofont-ui-user-group text-warning"></i>
                        </li>
                        <li class="text-right text-warning">
                            2
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- New clients card end -->
        <!-- New files card start -->
        <div class="col-md-6 col-xl-3">
            <div class="card client-blocks success-border">
                <div class="card-block">
                    <h5>Client</h5>
                    <ul>
                        <li>
                            <i class="icofont icofont-files text-success"></i>
                        </li>
                        <li class="text-right text-success">
                            78
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- New files card end -->
        <!-- Open Project card start -->
        <div class="col-md-6 col-xl-3">
            <div class="card client-blocks">
                <div class="card-block">
                    <h5>Stock</h5>
                    <ul>
                        <li>
                            <i class="icofont icofont-ui-folder text-primary"></i>
                        </li>
                        <li class="text-right text-primary">
                            169
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Open Project card end -->
        <div class="col-xl-5 dashbored-live-left col-lg-6">
            <div class="card widget">
                <div class="section section-graph">
                    <div class="graph-info">
                        <i class="graph-arrow"></i>
                        <span class="graph-info-big">634.39</span>
                        <span class="graph-info-small">+2.18 (3.71%)</span>
                    </div>
                    <div id="graph"></div>
                </div>
                <div class="section section-info">
                    <span class="info-time">Today 2:25 PM</span>
                    <h3 class="info-title">Salt Lake City, Utah</h3>
                    <div class="text-center o-auto">
                        <div class="info-block">
                            <dl>
                                <dt>13.5 M</dt>
                                <dd>Shares Traded</dd>
                            </dl>
                        </div>
                        <div class="info-block last m-l-20">
                            <dl>
                                <dt>28.44</dt>
                                <dd>Market Cap</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="info-aapl">
                        <h4>AAPL</h4>
                        <ul>
                            <li><span class="orange" style="height: 37.5%"></span>
                            </li>
                            <li><span class="orange" style="height: 47.5%"></span>
                            </li>
                            <li><span class="orange" style="height: 70%"></span>
                            </li>
                            <li><span class="orange" style="height: 85%"></span>
                            </li>
                            <li><span class="orange" style="height: 40%"></span>
                            </li>
                            <li><span class="green" style="height: 75%"></span>
                            </li>
                            <li><span class="green" style="height: 50%"></span>
                            </li>
                            <li><span class="green" style="height: 15%"></span>
                            </li>
                            <li><span class="green" style="height: 25%"></span>
                            </li>
                        </ul>
                    </div>
                    <div class="yearly-change">
                        <h4>Yearly Change</h4>
                        <span><em>+</em> 127.01</span>
                    </div>
                </div>
            </div>
            <div class="section"></div>
        </div>

        <div class="col-xl-7">
            <div class="card">
                <div class="card-header">
                    <h5>Last Activity</h5>
                    <div class="f-right">
                        <label class="label label-success">Today</label>
                        <label class="label label-danger">Month</label>
                    </div>
                </div>
                <div class="card-block table-border-style">
                    <div class="table-responsive analytic-table">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="count text-primary">2567</span>
                                        <span class="table-msg">Total Message Sent</span>
                                    </td>
                                    <td>34%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="count text-success">3058</span>
                                        <span class="table-msg">Last Activity</span>
                                    </td>
                                    <td>56%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="count text-inverse">6451</span>
                                        <span class="table-msg">Total Message Received</span>
                                    </td>
                                    <td>84%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="count text-warning">9512</span>
                                        <span class="table-msg">Monthly Income</span>
                                    </td>
                                    <td>79%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="count text-info">9874</span>
                                        <span class="table-msg">Total Transfer</span>
                                    </td>
                                    <td>81%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Morris chart start -->
        <div class="col-md-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-primary btn-sm">Week</button>
                    <button class="btn btn-primary btn-sm">Month</button>
                    <button class="btn btn-primary btn-sm">Year</button>
                </div>
                <div class="card-block">
                    <div id="morris-extra-area" style="height:470px;"></div>
                </div>
            </div>
        </div>
        <!-- Morris chart end -->
        <!-- Todo card start -->
        <div class="col-md-12 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h5>Create Your Daily Task</h5>
                    <label class="label label-success">Today</label>
                </div>
                <div class="card-block">
                    <div class="input-group input-group-button">
                        <input type="text" class="form-control add_task_todo" placeholder="Create your task list" name="task-insert">
                        <span class="input-group-addon" id="basic-addon1">
                  <button id="add-btn" class="btn btn-primary">Add Task</button>
                  </span>
                    </div>
                    <div class="new-task">
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                        </span>
                                    <span>Hey.. Attach your new file</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete" ></i></a>
                            </div>
                        </div>
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                        </span>
                                    <span>New Attachment has error</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </div>
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                        </span>
                                    <span>Have to submit early</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </div>
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                        </span>
                                    <span>10 pages has to be completed</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </div>
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                        </span>
                                    <span>Navigation working</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </div>
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                        </span>
                                    <span>Files submited successfully</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </div>
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                        </span>
                                    <span>Work Complete Before Time</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Todo card end -->
        <!-- User chat box start -->
        <div class="col-md-12 col-xl-4">
            <div class="card widget-chat-box">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-2">
                            <i class="icofont icofont-navigation-menu pop-up"></i>
                        </div>
                        <div class="col-sm-8 text-center">
                            <h5>
                       John Henry
                            </h5>
                        </div>
                        <div class="col-sm-2 text-right">
                            <i class="icofont icofont-ui-edit"></i>
                        </div>
                    </div>
                </div>
                <div class="card-block">
                    <p class="text-center">12:05 A.M.</p>
                    <div class="media">
                        <img class="d-flex mr-3 img-circle img-60 img-thumbnail" src="assets/images/user-card/img-round1.jpg" alt="Generic placeholder image">
                        <div class="media-body send-chat">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at
                            <span class="time">3 min ago</span>
                        </div>
                    </div>
                    <div class="media col-sm-8 offset-md-4">
                        <div class="media-body  receive-chat">
                            Cras sit amet nibh libero, in gravida nulla.vel metus scelerisque ante
                            <span class="time">
                            <i class="icofont icofont-check m-r-5"></i>Seen 2 sec ago
                            </span>
                        </div>
                    </div>
                    <div class="media">
                        <img class="d-flex mr-3 img-circle img-60 img-thumbnail" src="assets/images/user-card/img-round1.jpg" alt="Generic placeholder image">
                        <div class="media-body send-chat">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at
                            <span class="time">3 min ago</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="text" class="form-control" placeholder="Your Message">
                </div>
            </div>
        </div>
        <!-- User chat box end -->
        <!-- Horizontal Timeline start -->
        <div class="col-md-12 col-xl-8">
            <div class="card">
            <div class="card-header">
                <h5>Steps To Follow</h5>
            </div>
                <div class="card-block">
                    <div class="cd-horizontal-timeline">
                        <div class="timeline">
                            <div class="events-wrapper">
                                <div class="events">
                                    <ol>
                                        <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
                                        <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
                                        <li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
                                        <li><a href="#0" data-date="20/05/2014">20 May</a></li>
                                        <li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
                                        <li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
                                        <li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
                                        <li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
                                        <li><a href="#0" data-date="10/12/2014">10 Dec</a></li>
                                        <li><a href="#0" data-date="19/01/2015">29 Jan</a></li>
                                        <li><a href="#0" data-date="03/03/2015">3 Mar</a></li>
                                    </ol>
                                    <span class="filling-line" aria-hidden="true"></span>
                                </div>
                                <!-- .events -->
                            </div>
                            <!-- .events-wrapper -->
                            <ul class="cd-timeline-navigation">
                                <li><a href="#0" class="prev inactive">Prev</a></li>
                                <li><a href="#0" class="next">Next</a></li>
                            </ul>
                            <!-- .cd-timeline-navigation -->
                        </div>
                        <!-- .timeline -->
                        <div class="events-content">
                            <ol>
                                <li class="selected" data-date="16/01/2014">
                                    <h2>Horizontal Timeline</h2>
                                    <em>January 16th, 2014</em>
                                    <p class="m-b-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                    </p>
                                    <div class="m-t-20 d-timeline-btn">
                                        <button class="btn btn-danger">Read More</button>
                                        <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                    </div>
                                </li>
                                <li data-date="28/02/2014">
                                    <h2>Event title here</h2>
                                    <em>February 28th, 2014</em>
                                    <p class="m-b-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                    </p>
                                    <div class="m-t-20 d-timeline-btn">
                                        <button class="btn btn-danger">Read More</button>
                                        <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                    </div>
                                </li>
                                <li data-date="20/04/2014">
                                    <h2>Event title here</h2>
                                    <em>March 20th, 2014</em>
                                    <p class="m-b-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                    </p>
                                    <div class="m-t-20 d-timeline-btn">
                                        <button class="btn btn-danger">Read More</button>
                                        <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                    </div>
                                </li>
                                <li data-date="20/05/2014">
                                    <h2>Event title here</h2>
                                    <em>May 20th, 2014</em>
                                    <p class="m-b-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                    </p>
                                    <div class="m-t-20 d-timeline-btn">
                                        <button class="btn btn-danger">Read More</button>
                                        <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                    </div>
                                </li>
                                <li data-date="09/07/2014">
                                    <h2>Event title here</h2>
                                    <em>July 9th, 2014</em>
                                    <p class="m-b-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                    </p>
                                    <div class="m-t-20 d-timeline-btn">
                                        <button class="btn btn-danger">Read More</button>
                                        <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                    </div>
                                </li>
                                <li data-date="30/08/2014">
                                    <h2>Event title here</h2>
                                    <em>August 30th, 2014</em>
                                    <p class="m-b-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                    </p>
                                    <div class="m-t-20 d-timeline-btn">
                                        <button class="btn btn-danger">Read More</button>
                                        <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                    </div>
                                </li>
                                <li data-date="15/09/2014">
                                    <h2>Event title here</h2>
                                    <em>September 15th, 2014</em>
                                    <p class="m-b-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                    </p>
                                    <div class="m-t-20 d-timeline-btn">
                                        <button class="btn btn-danger">Read More</button>
                                        <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                    </div>
                                </li>
                                <li data-date="01/11/2014">
                                    <h2>Event title here</h2>
                                    <em>November 1st, 2014</em>
                                    <p class="m-b-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                    </p>
                                    <div class="m-t-20 d-timeline-btn">
                                        <button class="btn btn-danger">Read More</button>
                                        <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                    </div>
                                </li>
                                <li data-date="10/12/2014">
                                    <h2>Event title here</h2>
                                    <em>December 10th, 2014</em>
                                    <p class="m-b-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                    </p>
                                    <div class="m-t-20 d-timeline-btn">
                                        <button class="btn btn-danger">Read More</button>
                                        <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                    </div>
                                </li>
                                <li data-date="19/01/2015">
                                    <h2>Event title here</h2>
                                    <em>January 19th, 2015</em>
                                    <p class="m-b-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                    </p>
                                    <div class="m-t-20 d-timeline-btn">
                                        <button class="btn btn-danger">Read More</button>
                                        <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                    </div>
                                </li>
                                <li data-date="03/03/2015">
                                    <h2>Event title here</h2>
                                    <em>March 3rd, 2015</em>
                                    <p class="m-b-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                    </p>
                                    <div class="m-t-20 d-timeline-btn">
                                        <button class="btn btn-danger">Read More</button>
                                        <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <!-- .events-content -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Horizontal Timeline end -->
    </div>
</div>
@endsection

@section('scripts')
    
<!-- Morris Chart js -->
<script src="{{ URL::to('backend/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{ URL::to('backend/bower_components/morris.js/morris.js')}}"></script>
<!-- Todo js -->
<script type="text/javascript" src="backend/assets/pages/todo/todo.js"></script>
<!-- Horizontal-Timeline js -->
<script type="text/javascript" src="{{ URL::to('backend/assets/pages/dashboard/horizontal-timeline/js/main.js')}}"></script>

<script type="text/javascript" src="{{ URL::to('backend/assets/pages/dashboard/project-dashboard.js')}}"></script>

@endsection
