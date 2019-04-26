@extends('layouts.main')

@section('title')
    {{ $branch->name }}
@endsection

@section('stylesheets')
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <div class="page-header-title">
            <h4>{{ $branch->name }} Branch</h4>
            <span> <code>{{ $branch->name }}</code> Details </span>
        </div>
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="{{route('home')}}">
                        <i class="icofont icofont-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Edit Branch</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Page header end -->
    <!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <!-- New clients card start -->
            <div class="col-md-6 col-xl-3">
                <div class="card client-blocks warning-border">
                    <div class="card-block">
                        <h5>Staff</h5>
                        <ul>
                            <li>
                                <i class="icofont icofont-ui-user-group text-warning"></i>
                            </li>
                            <li class="text-right text-warning">
                                {{$branch->users->count()}}
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
                                {{$branch->customers->count()}}
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
                                {{$branch->stocks->count()}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

                    <!-- Open Project card start -->
            <div class="col-md-6 col-xl-3">
                <div class="card client-blocks">
                    <div class="card-block">
                        <h5>Suppliers</h5>
                        <ul>
                            <li>
                                <i class="icofont icofont-ui-folder text-primary"></i>
                            </li>
                            <li class="text-right text-primary">
                                {{$branch->suppliers->count()}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <!-- tab header start -->
                <div class="tab-header">
                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">All Stocks</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Purchases</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Sales</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#review" role="tab">Transfers Sent</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#received" role="tab">Transfers Recieved</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#expenses" role="tab">Expenses</a>
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
                            <div class="card-header">
                                <h5 class="card-header-text">All Stocks Available in Branch</h5>
                                <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                    <i class="icofont icofont-edit"></i>
                                </button>
                            </div>
                            <div class="card-block">
                                <div class="view-info">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="dt-responsive table-responsive">
                                                 <table id="footer-search" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Branch</th>
                                                            <th>Stock Category</th>
                                                            <th>Name</th>
                                                            <th>Abbr</th>
                                                            <th>Qty</th><!-- 
                                                            <th>BulkBreaker</th>
                                                            <th>Field Retail</th>
                                                            <th>Retail VSM</th>
                                                            <th>Special Price</th> -->
                                                            <th>Action</th>                             
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($branch->stocks as $stock)
                                                            <tr>
                                                                <td>{{$stock->branch->name}}</td>
                                                                <th>{{$stock->stock_category->name}}</th>
                                                                <td>{{$stock->name}}</td>
                                                                <td>{{$stock->abbr}}</td>
                                                                <td>{{$stock->quantity}}</td>
                                                                <!-- <td>{{$stock->bulkbreaker}}</td>
                                                                <td>{{$stock->field_retail}}</td>
                                                                <td>{{$stock->retail_vsm}}</td>
                                                                <td>{{$stock->special_price}}</td> -->

                                                                <td class="action-icon">
                                                                    <a href="{{route('stocks.show', ['id' => $stock->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="icofont icofont-eye-alt"></i></a>
                                                                    <a href="{{route('stocks.edit',  ['id' => $stock->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                                    <a href="{{route('stocks.delete',  ['id' => $stock->id])}}" class=" text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                                </td>
                                                            </tr>
                                                         @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Branch</th>
                                                            <th>Stock Category</th>
                                                            <th>Name</th>
                                                            <th>Abbr</th>
                                                            <th>Quantity</th><!-- 
                                                            <th>BulkBreaker</th>
                                                            <th>Field Retail</th>
                                                            <th>Retail VSM</th>
                                                            <th>Special Price</th> -->
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                </div>
                                <!-- end of view-info -->
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
                                <div class="view-info">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="dt-responsive table-responsive">
                                                 <table id="footer-search" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Branch</th>
                                                            <th>Stock Category</th>
                                                            <th>Name</th>
                                                            <th>Abbr</th>
                                                            <th>Qty</th>
                                                            <th>Action</th>                             
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($branch->purchases as $stock)
                                                            <tr>
                                                                <td>{{$stock->branch->name}}</td>
                                                                <th>{{$stock->stock_category->name}}</th>
                                                                <td>{{$stock->name}}</td>
                                                                <td>{{$stock->abbr}}</td>
                                                                <td>{{$stock->quantity}}</td>

                                                                <td class="action-icon">
                                                                    <a href="{{route('account.sales.show', ['id' => $sale->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="icofont icofont-eye-alt"></i></a>
                                                                    <a href="{{route('stocks.edit',  ['id' => $stock->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                                    <a href="{{route('stocks.delete',  ['id' => $stock->id])}}" class=" text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                                </td>
                                                            </tr>
                                                         @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Branch</th>
                                                            <th>Stock Category</th>
                                                            <th>Name</th>
                                                            <th>Abbr</th>
                                                            <th>Quantity</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                </div>
                                <!-- end of view-info -->
                            </div>
                            <!-- end of card-block -->
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
                        <!-- info card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">User Services</h5>
                            </div>
                            <div class="card-block">
                                <div class="view-info">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="dt-responsive table-responsive">
                                                 <table id="footer-search" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Branch</th>
                                                            <th>Receipt No</th>
                                                            <th>Cashier</th>
                                                            <th>Customer</th>
                                                            <th>Stocks</th>
                                                            <th>Total</th>
                                                            <th>Discount</th>
                                                            <th>Paid</th>                             
                                                            <th>Due</th>                             
                                                            <th>Action</th>                             
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($branch->sales as $stock)
                                                            <tr>
                                                                <td>{{$stock->branch->name}}</td>
                                                                <th>{{$stock->identifier}}</th>
                                                                <td>{{$stock->user->name}}</td>
                                                                <td>{{$stock->customer->name}}</td>
                                                                <td>{{$stock->saleTransactions->count()}}</td>
                                                                <td>{{$stock->grandTotal}}</td>
                                                                <td>{{$stock->discount}}</td>
                                                                <td>{{$stock->paid}}</td>
                                                                <td>{{$stock->due}}</td>
                                                                <td class="action-icon">
                                                                    <a href="{{route('stocks.show', ['id' => $stock->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="icofont icofont-eye-alt"></i></a>
                                                                    <a href="{{route('stocks.edit',  ['id' => $stock->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                                    <a href="{{route('stocks.delete',  ['id' => $stock->id])}}" class=" text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                                </td>
                                                            </tr>
                                                         @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Branch</th>
                                                            <th>Receipt No</th>
                                                            <th>Cashier</th>
                                                            <th>Customer</th>
                                                            <th>Stocks</th>
                                                            <th>Total</th>
                                                            <th>Discount</th>
                                                            <th>Paid</th>                             
                                                            <th>Due</th>                             
                                                            <th>Action</th>                             
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                </div>
                                <!-- end of view-info -->
                            </div>
                            <!-- end of card-block -->
                        </div>
                    </div>
                    <!-- tab pane contact end -->
                    <div class="tab-pane" id="review" role="tabpanel">
                         <!-- info card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">User Services</h5>
                            </div>
                            <div class="card-block">
                                <div class="view-info">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="dt-responsive table-responsive">
                                                 <table id="footer-search" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Branch</th>
                                                            <th>Stock Category</th>
                                                            <th>Name</th>
                                                            <th>Abbr</th>
                                                            <th>Qty</th>
                                                            <th>Action</th>                             
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($branch->stockTransfers as $stock)
                                                            <tr>
                                                                <td>{{$stock->branch->name}}</td>
                                                                <th>{{$stock->stock_category->name}}</th>
                                                                <td>{{$stock->name}}</td>
                                                                <td>{{$stock->abbr}}</td>
                                                                <td>{{$stock->quantity}}</td>
                                                                <td class="action-icon">
                                                                    <a href="{{route('stocks.show', ['id' => $stock->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="icofont icofont-eye-alt"></i></a>
                                                                    <a href="{{route('stocks.edit',  ['id' => $stock->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                                    <a href="{{route('stocks.delete',  ['id' => $stock->id])}}" class=" text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                                </td>
                                                            </tr>
                                                         @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Branch</th>
                                                            <th>Stock Category</th>
                                                            <th>Name</th>
                                                            <th>Abbr</th>
                                                            <th>Quantity</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                </div>
                                <!-- end of view-info -->
                            </div>
                            <!-- end of card-block -->
                        </div>
                    </div>

                    <div class="tab-pane" id="received" role="tabpanel">
                         <!-- info card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">User Services</h5>
                            </div>
                            <div class="card-block">
                                <div class="view-info">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="dt-responsive table-responsive">
                                                 <table id="footer-search" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Branch</th>
                                                            <th>Stock Category</th>
                                                            <th>Name</th>
                                                            <th>Abbr</th>
                                                            <th>Qty</th>
                                                            <th>Action</th>                             
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if($incoming->count() > 0 )
                                                        @foreach($incoming as $stock)
                                                            <tr>
                                                                <td>{{$stock->branch->name}}</td>
                                                                <th>{{$stock->stock_category->name}}</th>
                                                                <td>{{$stock->name}}</td>
                                                                <td>{{$stock->abbr}}</td>
                                                                <td>{{$stock->quantity}}</td>
                                                                <td class="action-icon">
                                                                    <a href="{{route('stocks.show', ['id' => $stock->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="icofont icofont-eye-alt"></i></a>
                                                                    <a href="{{route('stocks.edit',  ['id' => $stock->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                                    <a href="{{route('stocks.delete',  ['id' => $stock->id])}}" class=" text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                                </td>
                                                            </tr>
                                                         @endforeach
                                                         @endif
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Branch</th>
                                                            <th>Stock Category</th>
                                                            <th>Name</th>
                                                            <th>Abbr</th>
                                                            <th>Quantity</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                </div>
                                <!-- end of view-info -->
                            </div>
                            <!-- end of card-block -->
                        </div>   
                    </div>
                    <div class="tab-pane" id="expenses" role="tabpanel">
                         <!-- info card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">User Services</h5>
                            </div>
                            <div class="card-block">
                                <div class="view-info">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="dt-responsive table-responsive">
                                                 <table id="footer-search" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Branch</th>
                                                            <th>Stock Category</th>
                                                            <th>Name</th>
                                                            <th>Abbr</th>
                                                            <th>Qty</th>
                                                            <th>Action</th>                             
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if($incoming->count() > 0 )
                                                        @foreach($incoming as $stock)
                                                            <tr>
                                                                <td>{{$stock->branch->name}}</td>
                                                                <th>{{$stock->stock_category->name}}</th>
                                                                <td>{{$stock->name}}</td>
                                                                <td>{{$stock->abbr}}</td>
                                                                <td>{{$stock->quantity}}</td>
                                                                <td class="action-icon">
                                                                    <a href="{{route('stocks.show', ['id' => $stock->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="icofont icofont-eye-alt"></i></a>
                                                                    <a href="{{route('stocks.edit',  ['id' => $stock->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                                    <a href="{{route('stocks.delete',  ['id' => $stock->id])}}" class=" text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                                </td>
                                                            </tr>
                                                         @endforeach
                                                         @endif
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Branch</th>
                                                            <th>Stock Category</th>
                                                            <th>Name</th>
                                                            <th>Abbr</th>
                                                            <th>Quantity</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                </div>
                                <!-- end of view-info -->
                            </div>
                            <!-- end of card-block -->
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body end -->
@endsection

@section('scripts')    
    <!-- data-table js -->
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/js/jszip.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/js/pdfmake.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/js/vfs_fonts.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/jszip.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/pdfmake.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/vfs_fonts.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/pdfmake.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <!-- echart js -->
    <script src="{{ URL::to('assets/pages/chart/echarts/js/echarts-all.js')}}" type="text/javascript"></script>
    <script src="{{ URL::to('assets/pages/data-table/js/data-table-custom.js')}}"></script>
@endsection