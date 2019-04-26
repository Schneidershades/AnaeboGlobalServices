@extends('layouts.main')

@section('stylesheets')
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/pages/menu-search/css/component.css')}}">
    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{URL::to('bower_components/select2/dist/css/select2.min.css')}}" />
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('bower_components/multiselect/css/multi-select.css')}}" />
@endsection

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <div class="page-header-title">
            <h4>Create Transaction on Purchase No: {{$purchase->identifier}}</h4>
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
                <!-- clone elements card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Clone Elements</h5>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                        <div class="card-header-right">
                            <i class="icofont icofont-rounded-down"></i>
                            <i class="icofont icofont-refresh"></i>
                            <i class="icofont icofont-close-circled"></i>
                        </div>
                    </div>
                    
                    <div class="card-block">
                        <div class="wrapper">
                            <form action="" method="post">
                                <div class="row invoice-contact">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                          
                                            <label class="col-sm-2 col-form-label">Supplier</label>
                                            <div class="col-sm-4">
                                                <select class="js-example-basic-single form-control" name="supplier_id" required>
                                                    <option value="">~~SELECT SUPPLIER~~</option>
                                                    @foreach($suppliers as $supplier)
                                                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <label class="col-sm-2 col-form-label">Branch</label>
                                            <div class="col-sm-4">
                                                 <select class="js-example-basic-single form-control" name="branch_id" required>
                                                    <option value="">~~SELECT BRANCH~~</option>
                                                    @foreach($branches as $branch)
                                                        <option value="{{$branch->id}}">{{$branch->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{ csrf_field() }}
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="item_table">

                                        <thead>
                                            <tr>
                                                <th>Stock Name</th>
                                                <th>Price purchased</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th>
                                                    <button type="button" class="addon-btn adn-50 adn-right tr-add">
                                                        <i class="icofont icofont-plus"></i>
                                                    </button>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                        $arrayNumber = 0;
                                        for($x = 1; $x < 4; $x++) { ?>
                                            <tr id="row<?php echo $x; ?>" class="orderItem  <?php echo $arrayNumber; ?>">
                                                <td>
                                                    <div class="form-group">
                                                        <select class="js-example-basic-single form-control" name="productName[]" id="productName<?php echo $x; ?>" onchange="getProductData(<?php echo $x; ?>)" required>
                                                            <option value="">~~SELECT~~</option>
                                                            @foreach($stocks as $stock)
                                                                <option value="{{$stock->id}}">{{$stock->abbr}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group row"  style="padding-left:10px;padding-right:10px">
                                                        <input type="number" name="rate[]" id="rate<?php echo $x; ?>" autocomplete="off" class="form-control" required/>                             
                                                        <input type="hidden" name="rateValue[]" id="rateValue<?php echo $x; ?>" autocomplete="off" class="form-control"  required/>  
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group row"  style="padding-left:10px;padding-right:10px">
                                                        <input type="number" name="quantity[]" id="quantity<?php echo $x; ?>" onkeyup="getTotal(<?php echo $x ?>)" autocomplete="off" class="form-control" min="1" required/>
                                                       
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group row"  style="padding-left:10px;padding-right:10px">
                                                        <input type="text" name="total[]" id="total<?php echo $x; ?>" autocomplete="off" class="form-control" disabled="true" />                                
                                                        <input type="hidden" name="totalValue[]" id="totalValue<?php echo $x; ?>" autocomplete="off" class="form-control" />    
                                                    </div>
                                                </td>
                                                <th>
                                                    <button class="btn btn-default removeProductRowBtn" type="button" id="removeProductRowBtn" onclick="removeProductRow(<?php echo $x; ?>)">
                                                        <i class="icofont icofont-minus"></i>
                                                    </button>
                                                </th>
                                            </tr>
                                        <?php
                                        $arrayNumber++;
                                        } // /for
                                        ?>
                                    </tbody>
                                    </table>

                                  <div class="form-group submitButtonFooter">
                                    <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" class="btn btn-default" onclick="addRow()" id="addRowBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-plus-sign"></i> Add Row </button>

                                      <button type="submit"  class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>

                                      <button type="reset" class="btn btn-default" onclick="resetOrderForm()"><i class="glyphicon glyphicon-erase"></i> Reset</button>
                                    </div>
                                  </div>
                                </div>



                                <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="subTotal" class="col-sm-3 control-label">Total Stock Valuation</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="subTotal" name="subTotal" disabled="true" />
                                              <input type="hidden" class="form-control" id="subTotalValue" name="subTotalValue" />
                                            </div>
                                          </div>             
                                      </div> <!--/col-md-6-->
                                </div>
                            </form>
                        </div>
                    </div>
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
    <script type="text/javascript" src="{{URL::to('assets/js/purchase.js')}}"></script>
@endsection