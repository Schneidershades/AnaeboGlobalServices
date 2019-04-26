@extends('layouts.main')

@section('stylesheets')
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/pages/menu-search/css/component.css')}}">
    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{URL::to('bower_components/select2/dist/css/select2.min.css')}}" />
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('bower_components/multiselect/css/multi-select.css')}}" />
     <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/pages/j-pro/css/demo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/pages/j-pro/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/pages/j-pro/css/j-forms.css')}}">
@endsection

@section('title')
Edit Stock Purcahse
@endsection

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <div class="page-header-title">
            <h4>Create Stock</h4>
            <span>Edit <code>stock purchase inputs</code>for transaction implementation</span>
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
                <li class="breadcrumb-item"><a href="#!">Edit Stock Purcahse</a>
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
                        <form action="{{ route('purcahse.update', ['id' => $purcahse->id ]) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Brand Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Item Quantity" name="quantity" value="{{$purcahse->quantity}}">
                                    
                                    <input type="hidden" class="form-control"  name="user_id" value="{{Auth()->user()->id}}">
                                    <input type="hidden" class="form-control"  name="branch_id" value="{{Auth()->user()->branch_id}}">
                                </div>

                                <label class="col-sm-2 col-form-label">Brand Supplier</label>
                                <div class="col-sm-4">
                                    <select class="js-example-basic-single col-sm-12" name="supplier_id">
                                        <optgroup label="Customer Name">
                                            <option value="">Select One Value Only</option>
                                            @foreach($suppliers as $supplier)
                                            <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Brand Supplier</label>
                                <div class="col-sm-4">
                                    <select class="js-example-basic-single col-sm-12 select-stock" name="stock_id">
                                        <optgroup label="Customer Name">
                                            <option value="">Select One Value Only</option>
                                            @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" value="Save" class="btn btn-success btn-square btn-block">
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

@section('scripts')    <!-- Select 2 js -->
    <script type="text/javascript" src="{{URL::to('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- Multiselect js -->
    <script type="text/javascript" src="{{URL::to('bower_components/bootstrap-multiselect/dist/js/bootstrap-multiselect.js')}}">
    </script>
    <script type="text/javascript" src="{{URL::to('bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('assets/js/jquery.quicksearch.js')}}"></script>

    <script type="text/javascript" src="{{URL::to('assets/pages/advance-elements/select2-custom.js')}}"></script>
    <!-- j-pro js -->
    <script type="text/javascript" src="{{URL::to('assets/pages/j-pro/js/jquery.ui.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('assets/pages/j-pro/js/jquery.maskedinput.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('assets/pages/j-pro/js/jquery-cloneya.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('assets/pages/j-pro/js/custom/cloned-form.js')}}"></script>
@endsection