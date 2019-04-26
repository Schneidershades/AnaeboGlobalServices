@extends('layouts.main')

@section('title')
    Receipt No. {{ $receipt->identifier }}
@endsection

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <div class="page-header-title">
            <h4>Receipt No. {{ $receipt->identifier }} </h4>
            <span> <code>{{ $receipt->identifier }} </code> Transactions </span>
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
                <li class="breadcrumb-item"><a href="#!">{{ $receipt->identifier }} Transaction Details</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Page header end -->
    <!-- Page body start -->
    <div class="page-body">
        <!-- Container-fluid starts -->
        <div class="container">
            <!-- Main content starts -->
            <div>
                <!-- Invoice card start -->
                <div class="card">
                    <div class="row invoice-contact">
                        <div class="col-md-8">
                            <div class="invoice-box row">
                                <div class="col-sm-12">
                                    <table class="table table-responsive invoice-table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td><img src="assets/images/logo-blue.png" class="m-b-10" alt=""></td>
                                            </tr>
                                            <tr>
                                                <td>Anaebo Global Services</td>
                                            </tr>
                                            <tr>
                                                <td>Global Services</td>
                                            </tr>
                                            <tr>
                                                <td><a href="mailto:demo@gmail.com" target="_top">info@anaeboglobalservices.com</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>+07037495705</td>
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
                                    <button type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20">Print Invoice
                                    </button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">Cancel Invoice
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row invoive-info">
                            <div class="col-md-4 col-xs-12 invoice-client-info">
                                <h6>Client Information :</h6>
                                <h6 class="m-0">{{$receipt->customer->name}}</h6>
                                <p class="m-0 m-t-10">{{$receipt->customer->address}}</p>
                                <p class="m-0">{{$receipt->customer->contact}}</p>
                                <p>{{$receipt->customer->email}}</p>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <h6>Order Information :</h6>
                                <table class="table table-responsive invoice-table invoice-order table-borderless">
                                    <tbody>
                                        <tr>
                                            <th>Date :</th>
                                            <td>{{$receipt->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status :</th>
                                            <td>
                                                <span class="label label-warning">{{$receipt->status}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Id :</th>
                                            <td>
                                                {{$receipt->id}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <h6 class="m-b-20">Invoice Number   <span>#{{$receipt->identifier}}</span></h6>
                                <h6 class="text-uppercase text-primary">Total Due :
                            <span>{{$receipt->amount_paid}}</span>
                        </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table  invoice-detail-table">
                                        <thead>
                                            <tr class="thead-default">
                                                <th>Description</th>
                                                <th>Quantity</th>
                                                <th>Amount</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($receipt->transactions as $transaction)
                                            <tr>
                                                <td>
                                                    <h6>{{$transaction->stock->name}}</h6>
                                                   
                                                </td>
                                                <td>{{$transaction->quantity}}</td>
                                                <td>{{$transaction->stock->retail_vsm}}</td>

                                                <td>N {{number_format($transaction->total, 2, '.', ',  ')}}</td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-responsive invoice-table invoice-total">
                                    <tbody>
                                        <tr>
                                            <th>Sub Total :{{number_format($transaction->sum('total'), 2, '.', ',  ')}}</th>
                                            <td>N</td>
                                        </tr>
                                        <tr class="text-info">
                                            <td>
                                                <hr/>
                                                <h5 class="text-primary">Total  : N{{number_format($transaction->sum('total'), 2, '.', ',  ')}}</h5>
                                            </td>
                                            <td>
                                                <hr/>
                                                <h5 class="text-primary"></h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h6>Terms And Condition :</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Invoice card end -->
            </div>
        </div>
        <!-- Container ends -->
    </div>
    <!-- Page body end -->
@endsection