@extends('layouts.main')

@section('title')
    Edit Stock
@endsection


@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <div class="page-header-title">
            <h4>Create Stock</h4>
            <span>Create new <code>stock</code>for transaction implementation</span>
        </div>
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <i class="icofont icofont-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Create Stock</a>
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
                        <h5>Create Stock Inventory</h5>
                        <div class="card-header-right">
                            <i class="icofont icofont-rounded-down"></i>
                            <i class="icofont icofont-refresh"></i>
                            <i class="icofont icofont-close-circled"></i>
                        </div>
                    </div>
                    <div class="card-block">
                        @include('partials._errors')
                        <form action="{{ route('stocks.update', ['id' => $stock->id ]) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Brand Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Brand Name" name="name" value="{{$stock->name}}">
                                </div>

                                <label class="col-sm-2 col-form-label">Brand Category</label>
                                <div class="col-sm-4">
                                    <select name="stock_category_id" class="form-control" required>
                                        <option value="">Select One Value Only</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Abbreviate Brand Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Brand Name Abbrivation" name="abbr" value="{{$stock->abbr}}">
                                    <input type="hidden" class="form-control"  name="user_id" value="{{Auth()->user()->id}}">
                                    <input type="hidden" class="form-control"  name="branch_id" value="{{Auth()->user()->branch_id}}">
                                </div>


                                <label class="col-sm-2 col-form-label">Bulkbreaker Price</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Bulkbreaker Price" name="bulkbreaker" value="{{$stock->bulkbreaker}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Retail/VSM</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Retail/VSM" name="retail_vsm" value="{{$stock->retail_vsm}}">
                                </div>

                                <label class="col-sm-2 col-form-label">Field Retail</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Field Retail" name="field_retail" value="{{$stock->field_retail}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Special Price</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Special Price" name="special_price" value="{{$stock->special_price}}">
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