@extends('layouts.main')

@section('title')
    Create Stock Category
@endsection

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <div class="page-header-title">
            <h4>Create New Stock Category</h4>
            <span>Create new <code>Stock Category </code>for transaction implementation</span>
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
                <li class="breadcrumb-item"><a href="#!">Create Stock Category</a>
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
                        <h5>Edit Stock Category</h5>
                        <div class="card-header-right">
                            <i class="icofont icofont-rounded-down"></i>
                            <i class="icofont icofont-refresh"></i>
                            <i class="icofont icofont-close-circled"></i>
                        </div>
                    </div>
                    <div class="card-block">
                        @include('partials._errors')
                        <form action="{{ route('stock-category.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Brand Name" name="name">
                                </div>

                                <label class="col-sm-2 col-form-label">Offloading Boys Payment</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Payment to offloaders" name="offloading_boys_pay">
                                </div>

                            </div>
                            
                            <div class="form-group">
                                <button class="btn btn-success btn-square btn-block">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Input Alignment card end -->
            </div>
        </div>
    </div>
    <!-- Page body end -->
@endsection