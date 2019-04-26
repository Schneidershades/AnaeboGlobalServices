@extends('layouts.main')

@section('title')
    All Stock Transactions
@endsection

@section('stylesheets')
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-header-title">
        <h4>Stocks Transaction</h4>
        <span>This Shows all the stockes available to the Admin</span>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index-2.html">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Data Table Extensions</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Button</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">HTML5 Data-Export</a>
            </li>
        </ul>
    </div>
</div>
<!-- Page-header end -->
<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- HTML5 Export Buttons table start -->
            <div class="card">
                <div class="card-header table-card-header">
                    <h5>HTML5 Export Buttons</h5>
                    <b>The HTML5 export buttons plug-in for Buttons provides four export buttons:</b>
                    <b><span>copyHtml5</span> - Copy to clipboard</b>
                    <b><span>csvHtml5</span> - Save to CSV file</b>
                    <b><span>excelHtml5</span> - Save to XLSX file - requires JSZip</b>
                    <b><span>pdfHtml5</span> - Save to PDF file - requires PDFMake</b>
                    <div class="card-header-right">
                        <i class="icofont icofont-rounded-down"></i>
                        <i class="icofont icofont-refresh"></i>
                        <i class="icofont icofont-close-circled"></i>
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="basic-btn" class="table table-striped table-bordered wrap">
                            <thead>
                                <tr>
                                    <th>Transaction by</th>
                                    <th>Date</th>
                                    <th>Stock</th>
                                    <th>Customer</th>
                                    <th>Quantity</th>                                
                                    <th>Amount Paid</th>                                
                                    <th>Receipt No</th>                                
                                    <th>Status</th>                                
                                    <th>Payment Method</th>                                
                                    <th>Branch</th>                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td>{{$transaction->created_at}}</td>
                                        <td>{{$transaction->user->name}}</td>
                                        <td>{{$transaction->stock->name}}</td>
                                        <td>{{$transaction->customer->name}}</td>
                                        <td>{{$transaction->quantity}}</td>
                                        <td>{{$transaction->amount_paid}}</td>
                                        <td>{{$transaction->receipt->id}}</td>
                                        <td>{{$transaction->status}}</td>
                                        <td>{{$transaction->payment_method}}</td>
                                        <td>{{$transaction->branch->name}}</td>
                                    </tr>
                                 @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Stock Category</th>
                                    <th>User </th>
                                    <th>Supplier</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-body end -->
</div>
@endsection

@section('scripts')    
    <script src="assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js"></script>
    <!-- data-table js -->
    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/pages/data-table/js/jszip.min.js"></script>
    <script src="assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js"></script>
    <script src="assets/pages/data-table/extensions/buttons/js/jszip.min.js"></script>
    <script src="assets/pages/data-table/extensions/buttons/js/pdfmake.min.js"></script>
    <script src="assets/pages/data-table/extensions/buttons/js/vfs_fonts.js"></script>
    <script src="assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/pages/data-table/extensions/buttons/js/pdfmake.min.js"></script>
    <script src="../bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
@endsection