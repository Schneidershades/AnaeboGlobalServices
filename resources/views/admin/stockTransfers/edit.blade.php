@extends('layouts.main')

@section('title')
    All Inventory Stock
@endsection

@section('content')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-header-title">
        <h4>Stocks Transfer for {{$stockTransfer->stock->name }} - ({{$stockTransfer->stock->abbr}}) for {{$stockTransfer->quantity}} at  {{ $stockTransfer->branch->name }} branch</h4>
        <span>This Shows all the stockes available to the Admin</span>
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
                <div class="card">
                    <div class="card-header">
                        <h5>{{ $stockTransfer->stock->name }}  at {{ $stockTransfer->branch->name }} branch</h5>
                        <div class="card-header-right">
                            <i class="icofont icofont-rounded-down"></i>
                            <i class="icofont icofont-refresh"></i>
                            <i class="icofont icofont-close-circled"></i>
                        </div>
                    </div>
                    
                    <div class="row invoice-contact">
                        <div class="col-md-6">
                            <div class="invoice-box row">
                                <div class="col-sm-12">
                                    <table class="table table-responsive invoice-table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>Quantity: {{$stockTransfer->quantity}}</td>
                                            </tr>

                                            <tr>
                                                <td>Supervisor/ Financier/ Cashier: {{$stockTransfer->user->name}}</td>
                                            </tr>

                                            <tr>
                                                <td>Last Updated: {{$stockTransfer->updated_at}}</td>
                                            </tr>
                                            <tr>
                                                <td>Created on :{{$stockTransfer->created_at}}</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row text-center">
                                <div class="col-sm-4">
                                    <a href=""><button type="button" class="btn btn-primary btn-round">Approve </button></a>
                                </div>
                                
                                <div class="col-sm-4">
                                    <a href=""><button  type="button" class="btn btn-info btn-round">Disappove </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Input Alignment card end -->
        </div>
    </div>
    <!-- Page-body end -->
</div>
@endsection
