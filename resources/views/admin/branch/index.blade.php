@extends('layouts.main')

@section('title')
    All Branches
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
        <h4>Industry Branches</h4>
        <span>This Shows all the existing branches to Anaebo Global Service Limited</span>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="{{route('home')}}">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Branches</a>
            </li>
        </ul>
    </div>
</div>
<!-- Page-header end -->
<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <!-- Documents card start -->
        <div class="col-md-6 col-xl-3">
            <div class="card client-blocks dark-primary-border">
                <div class="card-block">
                    <h5>Branches</h5>
                    <ul>
                        <li>
                            <i class="icofont icofont-document-folder"></i>
                        </li>
                        <li class="text-right">
                            {{$branches_count}}
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
                    <h5>Staff</h5>
                    <ul>
                        <li>
                            <i class="icofont icofont-ui-user-group text-warning"></i>
                        </li>
                        <li class="text-right text-warning">
                            {{$users_count}}
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
                            {{$customers_count}}
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
                            {{$stocks_count}}
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
                            {{$suppliers_count}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <!-- HTML5 Export Buttons table start -->
            <div class="card">
                <div class="card-header table-card-header">
                    <h5>All Branches</h5>
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
                                <a href="{{route('branches.create')}}">
                                    <button  type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20">Add Branch
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
                                    <th>Name</th>
                                    <th>Area</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>Action</th>                             
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($branches as $branch)
                                    <tr>
                                        <td>{{$branch->name}}</td>
                                        <td>{{$branch->area}}</td>
                                        <td>{{$branch->state}}</td>
                                        <td>{{$branch->country}}</td>
                                       
                                        <td class="action-icon">
                                            <a href="{{route('branches.show', ['id' => $branch->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="icofont icofont-eye-alt"></i></a>
                                            <a href="{{route('branches.edit',  ['id' => $branch->id])}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                            <a href="{{route('branches.delete',  ['id' => $branch->id])}}" class=" text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
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