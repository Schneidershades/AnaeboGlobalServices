@extends('layouts.main')

@section('title')
    All Customers
@endsection

@section('stylesheets')
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-header-title">
        <h4>Company Customers</h4>
        <span>This Shows all the existing customers to Anaebo Global Service Limited</span>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="{{route('home')}}">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Customers</a>
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
                    <h5>All Customers</h5>
                    <div class="card-header-right">
                        <i class="icofont icofont-rounded-down"></i>
                        <i class="icofont icofont-refresh"></i>
                        <i class="icofont icofont-close-circled"></i>
                    </div>
                </div>
                <div class="row invoice-contact">
                    <div class="col-md-8">
                        <div class="invoice-box row">
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center">
                            <div class="col-sm-12 invoice-btn-group">
                                <a href="{{route('customers.create')}}">
                                    <button  type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20">Add Customer
                                    </button>
                                </a>
                                <a href="{{route('home')}}" >
                                    <button  type="button" class="btn btn-danger waves-effect waves-light">Back</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="footer-search" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>Ref No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Action</th>                             
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{$customer->reference}}</td>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->user_id}}</td>
                                        <td class="action-icon">
                                            <a href="{{route('customers.show', ['id' => $customer->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="icofont icofont-eye-alt"></i></a>
                                            <a href="{{route('customers.edit',  ['id' => $customer->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                            <a href="{{route('customers.delete',  ['id' => $customer->id])}}" class=" text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                        </td>
                                    </tr>
                                 @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Area</th>
                                    <th>State</th>
                                    <th>Country</th>   
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="payslip-title">Payslip for the month of September 2017</h4>
                    <div class="row">
                        <div class="col-md-6 m-b-20">
                            <img src="images/logo2.png" class="m-b-20 mt-10" alt="" style="width: 100px;">
                            <ul class="list-unstyled m-b-0">
                                <li>Focus Technologies</li>
                                <li>3864 Quiet Valley Lane,</li>
                                <li>Sherman Oaks, CA, 91403</li>
                            </ul>
                        </div>
                        <div class="col-md-6 m-b-20">
                            <div class="invoice-details">
                                <h3 class="text-uppercase">Payslip #49029</h3>
                                <ul class="list-unstyled">
                                    <li>Salary Month: <span>September, 2017</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 m-b-20">
                            <ul class="list-unstyled">
                                <li><h5 class="m-b-0"><strong>John Doe</strong></h5></li>
                                <li><span>Web Designer</span></li>
                                <li>Employee ID: FT-0009</li>
                                <li>Joining Date: 1 Jan 2013</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <h4 class="m-b-10"><strong>Earnings</strong></h4>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><strong>Basic Salary</strong> <span class="pull-right">$6500</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>House Rent Allowance (H.R.A.)</strong> <span class="pull-right">$55</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Conveyance</strong> <span class="pull-right">$55</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Other Allowance</strong> <span class="pull-right">$55</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Total Earnings</strong> <span class="pull-right"><strong>$55</strong></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div>
                                <h4 class="m-b-10"><strong>Deductions</strong></h4>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><strong>Tax Deducted at Source (T.D.S.)</strong> <span class="pull-right">$0</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Provident Fund</strong> <span class="pull-right">$0</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>ESI</strong> <span class="pull-right">$0</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Loan</strong> <span class="pull-right">$300</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Total Deductions</strong> <span class="pull-right"><strong>$59698</strong></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p><strong>Net Salary: $59698</strong> (Fifty nine thousand six hundred and ninety eight only.)</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Page-body end -->
</div>
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


    <!-- data-table js -->
   <!--  <script src="{{ URL::to('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/js/jszip.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/js/pdfmake.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/js/vfs_fonts.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script> -->
    <!-- i18next.min.js -->
    <script src="{{ URL::to('assets/pages/data-table/js/data-table-custom.js')}}"></script>
@endsection