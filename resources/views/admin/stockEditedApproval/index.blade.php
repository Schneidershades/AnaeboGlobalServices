@extends('layouts.main')

@section('title')
    All Stock Imputations 
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
        <h4>All Stock Quantity Added</h4>
        <span>This Shows all the stock quantities inserted over time</span>
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
            <!-- HTML5 Export Buttons table start -->
            <div class="card">
                <div class="card-header table-card-header">
                    <h5>All Industry Stock</h5>
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
                                <a href="{{route('stocks.create')}}">
                                    <button  type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20">Add Stock
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
                                    <th>Branch</th>
                                    <th>Name</th>
                                    <th>Abbr</th>
                                    <th>Quantity</th>
                                    <th>BulkBreaker</th>
                                    <th>Field Retail</th>
                                    <th>Retail VSM</th>
                                    <th>Special Price</th>
                                    <th>Action</th>                             
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stocks as $stock)
                                    <tr>
                                        <td>{{$stock->branch_id}}</td>
                                        <td>{{$stock->name}}</td>
                                        <td>{{$stock->abbr}}</td>
                                        <td>{{$stock->quantity}}</td>
                                        <td>{{$stock->bulkbreaker}}</td>
                                        <td>{{$stock->field_retail}}</td>
                                        <td>{{$stock->retail_vsm}}</td>
                                        <td>{{$stock->special_price}}</td>
                                        <td>
                                            <a href="{{route('stocks.show', ['id' => $stock->id])}}">
                                                <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;">
                                                    <i class="icofont icofont-eye"></i>
                                                </button>
                                            </a>


                                            <a href="{{route('stocks.delete',  ['id' => $stock->id])}}">
                                                <button  type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;">
                                                    <span class="icofont icofont-ui-delete"></span>
                                                </button>
                                            </a>

                                            <a href="{{route('stocks.edit',  ['id' => $stock->id])}}">
                                                <button  type="button" class="tabledit-delete-button btn btn-warning waves-effect waves-light" style="float: none;margin: 5px;">
                                                    <span class="icofont icofont-ui-edit"></span>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                 @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Branch</th>
                                    <th>Name</th>
                                    <th>Abbr</th>
                                    <th>Quantity</th>
                                    <th>BulkBreaker</th>
                                    <th>Field Retail</th>
                                    <th>Retail VSM</th>
                                    <th>Special Price</th>
                                    <!-- <th>Stock Category</th>
                                    <th>User </th>
                                    <th>Supplier</th>   -->
                                    <th>Action</th>
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