@extends('layouts.main')

@section('title')
    All Inventory Stock
@endsection

@section('content')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-header-title">
        <h4>Stocks Inventory for {{$stock->name}} - {{$stock->abbr}}</h4>
        <span>This Shows all the stocks on {{$stock->abbr}} available to the Admin</span>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="/">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Stocks</a>
            </li>
        </ul>
    </div>
</div>
<!-- Page-header end -->
<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Basic Form Inputs card start -->
                <!--profile cover end-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- tab header start -->
                        <div class="tab-header">
                            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Stock Infomation</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Stock Transactions</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                        </div>
                        <!-- tab header end -->
                        <!-- tab content start -->
                        <div class="tab-content">
                            <!-- tab panel personal start -->
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <!-- personal card start -->
                                <div class="card">
                                    <div class="card-header text-right">
                                        <a href="{{route('stocks.edit', ['id' => $stock->id])}}" ><button type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20">Edit Stock
                                        </button></a>
                                        <a href="{{route('stocks.delete', ['id' => $stock->id])}}" ><button type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20">Delete Stock
                                        </button></a>
                                        <a href="{{route('stocks.index')}}"><button  type="button" class="btn btn-danger waves-effect waves-light">Back to all Stocks
                                        </button></a>
                                    </div>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-6">
                                                                <table class="table m-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Stock Name</th>
                                                                            <td>{{$stock->name}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Stock Category Name</th>
                                                                            <td>{{$stock->stock_category->name}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Qty Available</th>
                                                                            <td>{{$stock->quantity}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Last Sold Qty</th>
                                                                            <td>{{$stock->quantity}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Total Qty Sold</th>
                                                                            <td>{{$stock->quantity}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                            <div class="col-lg-12 col-xl-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Current Cost of Purchase</th>
                                                                            <td><a href="#!">N{{$stock->quantity}}</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Bulk Breaker</th>
                                                                            <td>{{$stock->bulkbreaker}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Field Retail</th>
                                                                            <td>{{$stock->field_retail}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Retail VSM</th>
                                                                            <td>{{$stock->retail_vsm}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Special Price</th>
                                                                            <td><a href="#!">{{$stock->special_price}}</a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of general info -->
                                                </div>
                                                <!-- end of col-lg-12 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        
                                    </div>
                                    <!-- end of card-block -->
                                </div>
                            </div>
                            <!-- tab pane personal end -->
                            <!-- tab pane info start -->
                            <div class="tab-pane" id="binfo" role="tabpanel">
                                <!-- info card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">User Services</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card b-l-success business-info services m-b-20">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#"><h5 class="card-header-text">Shivani Hero</h5></a>
                                                        </div>
                                                        <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                        <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                            </div>
                                                            <!-- end of col-sm-8 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of card-block -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card b-l-danger business-info services">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#"><h5 class="card-header-text">Dress and Sarees</h5></a>
                                                        </div>
                                                        <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                        <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                            </div>
                                                            <!-- end of col-sm-8 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of card-block -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card b-l-info business-info services">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#"><h5 class="card-header-text">Shivani Auto Port</h5></a>
                                                        </div>
                                                        <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                        <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                            </div>
                                                            <!-- end of col-sm-8 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of card-block -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card b-l-warning business-info services">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#"><h5 class="card-header-text">Hair stylist</h5></a>
                                                        </div>
                                                        <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                        <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                            </div>
                                                            <!-- end of col-sm-8 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of card-block -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card b-l-danger business-info services">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#"><h5 class="card-header-text">BMW India</h5></a>
                                                        </div>
                                                        <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                        <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                            </div>
                                                            <!-- end of col-sm-8 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of card-block -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card b-l-success business-info services">
                                                    <div class="card-header">
                                                        <div class="service-header">
                                                            <a href="#"><h5 class="card-header-text">Shivani Hero</h5></a>
                                                        </div>
                                                        <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                        <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                            <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                            </div>
                                                            <!-- end of col-sm-8 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of card-block -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Profit</h5>
                                            </div>
                                            <div class="card-block">
                                                <div id="main" style="height:300px;width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- info card end -->
                            </div>
                            <!-- tab pane info end -->
                            <!-- tab pane contact start -->
                            <div class="tab-pane" id="contacts" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <!-- user contact card left side start -->
                                        <div class="card">
                                            <div class="card-header contact-user">
                                                <img class="img-circle" src="assets/images/user-profile/contact-user.jpg" alt="contact-user">
                                                <h4>Angelica Ramos</h4>
                                            </div>
                                            <div class="card-block">
                                                <ul class="list-group list-contacts">
                                                    <li class="list-group-item active"><a href="#">All Contacts</a></li>
                                                    <li class="list-group-item"><a href="#">Recent Contacts</a></li>
                                                    <li class="list-group-item"><a href="#">Favourite Contacts</a></li>
                                                </ul>
                                            </div>
                                            <div class="card-block groups-contact">
                                                <h4>Groups</h4>
                                                <ul class="list-group">
                                                    <li class="list-group-item justify-content-between">
                                                        Project
                                                        <span class="badge badge-default badge-pill">30</span>
                                                    </li>
                                                    <li class="list-group-item justify-content-between">
                                                        Notes
                                                        <span class="badge badge-default badge-pill">20</span>
                                                    </li>
                                                    <li class="list-group-item justify-content-between">
                                                        Activity
                                                        <span class="badge badge-default badge-pill">100</span>
                                                    </li>
                                                    <li class="list-group-item justify-content-between">
                                                        Schedule
                                                        <span class="badge badge-default badge-pill">50</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Contacts<span class="f-15"> (100)</span></h4>
                                            </div>
                                            <div class="card-block">
                                                <div class="connection-list">
                                                    <a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-1.jpg" alt="f-1" data-toggle="tooltip" data-placement="top" data-original-title="Airi Satou">
                                                    </a>
                                                    <a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-2.jpg" alt="f-2" data-toggle="tooltip" data-placement="top" data-original-title="Angelica Ramos">
                                                    </a>
                                                    <a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-3.jpg" alt="f-3" data-toggle="tooltip" data-placement="top" data-original-title="Ashton Cox">
                                                    </a>
                                                    <a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-4.jpg" alt="f-4" data-toggle="tooltip" data-placement="top" data-original-title="Cara Stevens">
                                                    </a>
                                                    <a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-5.jpg" alt="f-5" data-toggle="tooltip" data-placement="top" data-original-title="Garrett Winters">
                                                    </a>
                                                    <a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-1.jpg" alt="f-6" data-toggle="tooltip" data-placement="top" data-original-title="Cedric Kelly">
                                                    </a>
                                                    <a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-3.jpg" alt="f-7" data-toggle="tooltip" data-placement="top" data-original-title="Brielle Williamson">
                                                    </a>
                                                    <a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-5.jpg" alt="f-8" data-toggle="tooltip" data-placement="top" data-original-title="Jena Gaines">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- user contact card left side end -->
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- contact data table card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Contacts</h5></div>
                                                    <div class="card-block contact-details">
                                                        <div class="data_table_main table-responsive dt-responsive">
                                                            <table id="simpletable" class="table  table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Mobileno.</th>
                                                                        <th>Favourite</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>abc123@gmail.com</td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Mobileno.</th>
                                                                        <th>Favourite</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- contact data table card end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab pane contact end -->
                            <div class="tab-pane" id="review" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Review</h5>
                                    </div>
                                    <div class="card-block">
                                        <ul class="media-list">
                                            <li class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle comment-img" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Sortino media<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                    <div class="stars-example-css review-star">
                                                        <i class="icofont icofont-star"></i>
                                                        <i class="icofont icofont-star"></i>
                                                        <i class="icofont icofont-star"></i>
                                                        <i class="icofont icofont-star"></i>
                                                        <i class="icofont icofont-star"></i>
                                                    </div>
                                                    <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                    <div class="m-b-25">
                                                        <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                    </div>
                                                    <hr>
                                                    <!-- Nested media object -->
                                                    <div class="media mt-2">
                                                        <a class="media-left" href="#">
                                                            <img class="media-object img-circle comment-img" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                                        </a>
                                                        <div class="media-body">
                                                            <h6 class="media-heading">Larry heading <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                            <div class="stars-example-css review-star">
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                            </div>
                                                            <p class="m-b-0"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                            <div class="m-b-25">
                                                                <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                            </div>
                                                            <hr>
                                                            <!-- Nested media object -->
                                                            <div class="media mt-2">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object img-circle comment-img" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading">Colleen Hurst <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                    <div class="stars-example-css review-star">
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                    </div>
                                                                    <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                    <div class="m-b-25">
                                                                        <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Nested media object -->
                                                    <div class="media mt-2">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object img-circle comment-img" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="media-heading">Cedric Kelly<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                            <div class="stars-example-css review-star">
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                            </div>
                                                            <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                            <div class="m-b-25">
                                                                <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                            </div>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <div class="media mt-2">
                                                        <a class="media-left" href="#">
                                                            <img class="media-object img-circle comment-img" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                                        </a>
                                                        <div class="media-body">
                                                            <h6 class="media-heading">Larry heading <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                            <div class="stars-example-css review-star">
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                            </div>
                                                            <p class="m-b-0"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                            <div class="m-b-25">
                                                                <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                            </div>
                                                            <hr>
                                                            <!-- Nested media object -->
                                                            <div class="media mt-2">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object img-circle comment-img" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading">Colleen Hurst <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                    <div class="stars-example-css review-star">
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                    </div>
                                                                    <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                    <div class="m-b-25">
                                                                        <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media mt-2">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object img-circle comment-img" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="media-heading">Mark Doe<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                            <div class="stars-example-css review-star">
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                            </div>
                                                            <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                            <div class="m-b-25">
                                                                <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                            </div>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="md-float-material d-flex">
                                            <div class="md-group-add-on p-relative col-lg-12">
                                                <div class="input-group input-group-button input-group-primary">
                                                    <span class="input-group-addon"><i class="icofont icofont-comment"></i></span>
                                                    <input type="text" class="form-control" placeholder="Write Comment">
                                                    <span class="input-group-addon">
                                       <button class="btn btn-primary"><i class="icofont icofont-plus"></i>Add Comment</button>
                                       </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab content end -->
                    </div>
                </div>
        </div>
    </div>
    <!-- Page-body end -->
</div>
@endsection
