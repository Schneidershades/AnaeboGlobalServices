@extends('layouts.main')

@section('title')
    {{ $customer->name }}
@endsection

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <div class="page-header-title">
            <h4>{{ $customer->name }} Branch</h4>
            <span> <code>{{ $customer->name }}</code> Details </span>
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
                <li class="breadcrumb-item"><a href="#!">{{ $customer->name }} Branch Details</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Page header end -->
    <!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Form Inputs card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>{{ $customer->name }}  branch</h5>
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
                                    <table class="table table-responsive invoice-table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>{{$customer->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{$customer->address}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{$customer->address}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$customer->contact}}</td>
                                            </tr>

                                            <tr>
                                                <td>{{$customer->contact}}</td>
                                            </tr>
                                            <!-- <tr>
                                                    <td><a href="#" target="_blank">www.demo.com</a>
                                                    </td>
                                                </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row text-center">
                                <div class="col-sm-12 invoice-btn-group">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Input Alignment card end -->
            </div>
            <!-- Documents card start -->
            <div class="col-md-6 col-xl-6">
                <div class="card client-blocks dark-primary-border">
                    <div class="card-block">
                        <h5>Successful Transactions</h5>
                        <ul>
                            <li>
                                <i class="icofont icofont-document-folder"></i>
                            </li>
                            <li class="text-right">
                                <!-- {{$customer->receipts->count()}} -->2
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Documents card end -->
            <!-- New clients card start -->
            <div class="col-md-6 col-xl-6">
                <div class="card client-blocks warning-border">
                    <div class="card-block">
                        <h5>Items Purchased</h5>
                        <ul>
                            <li>
                                <i class="icofont icofont-ui-user-group text-warning"></i>
                            </li>
                            <li class="text-right text-warning">
                            89
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- New clients card end -->
            <!-- New files card start -->
            <!-- <div class="col-md-6 col-xl-3">
                <div class="card client-blocks success-border">
                    <div class="card-block">
                        <h5>New Files</h5>
                        <ul>
                            <li>
                                <i class="icofont icofont-files text-success"></i>
                            </li>
                            <li class="text-right text-success">
                                240
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <!-- New files card end -->
            <!-- Open Project card start -->
            <!-- <div class="col-md-6 col-xl-3">
                <div class="card client-blocks">
                    <div class="card-block">
                        <h5>Open Projects</h5>
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
            </div> -->
            <!-- <div class="col-md-12 col-xl-4">
                <div class="card counter-card-1">
                    <div class="card-block-big">
                        <div>
                            <h3>4000</h3>
                            <p>Most Played Last Month
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
                            <h3>2500</h3>
                            <p>Coffee cups per day
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
                            <h3>800 Gb</h3>
                            <p>Average Monthly Uploads
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
            </div> -->

            <div class="col-md-6 col-xl-3">
                <!-- User activities chart start -->
                <div class="card analytic-user">
                    <div class="card-block-big text-center">
                        <i class="icofont icofont-wallet"></i>
                        <h1>N 724,587</h1>
                        <h4>Expense</h4>
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
                        <h1>N 324,587</h1>
                        <h4>Last Payment</h4>
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
                        <h1>N 4,587</h1>
                        <h4>Wallet</h4>
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
                        <h1>N 724,587</h1>
                        <h4>Transaction Payments</h4>
                    </div>
                    <div class="card-footer p-t-25 p-b-25">
                        <p class="m-b-0">This is standard panel footer</p>
                    </div>
                </div>
                <!-- User activities chart end -->
            </div>
        </div>
    </div>
    <!-- Page body end -->
@endsection