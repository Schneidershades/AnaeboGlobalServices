@extends('layouts.main')

@section('title')
    {{ $supplier->name }}
@endsection

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <div class="page-header-title">
            <h4>{{ $supplier->name }} Branch</h4>
            <span> <code>{{ $supplier->name }}</code> Details </span>
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
                <li class="breadcrumb-item"><a href="#!">{{ $supplier->name }} Branch Details</a>
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
                        <h5>{{ $supplier->name }}  branch</h5>
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
                                                <td>{{supplier->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{supplier->address}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{supplier->address}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{supplier->contact}}</td>
                                            </tr>

                                            <tr>
                                                <td>{{supplier->contact}}</td>
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
                                    <a href="{{route('suppliers.edit')}}">
                                        <button  type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20">Edit Customer
                                        </button>
                                    </a>
                                    <a href="{{route('suppliers.delete')}}" >
                                        <button type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20">Delete Customer
                                        </button>
                                    </a>
                                    <a href="{{route('suppliers.index')}}" >
                                         <button type="button" class="btn btn-danger waves-effect waves-light">Cancel Invoice
                                    </a>
                                   
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Input Alignment card end -->
            </div>
        </div>
    </div>
    <!-- Page body end -->
@endssupplier