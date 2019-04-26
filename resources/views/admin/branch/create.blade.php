@extends('layouts.main')

@section('title')
    Create Branch
@endsection

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <div class="page-header-title">
            <h4>Create Branch</h4>
            <span>Create new <code>Branch</code>for the industry</span>
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
                <li class="breadcrumb-item"><a href="#!">Create Branch</a>
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
                        <h5>Create new branch</h5>
                        <div class="card-header-right">
                            <i class="icofont icofont-rounded-down"></i>
                            <i class="icofont icofont-refresh"></i>
                            <i class="icofont icofont-close-circled"></i>
                        </div>
                    </div>
                    <div class="card-block">
                        @include('partials._errors')
                        <form action="{{ route('branches.store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Branch Name" name="name">
                                </div>

                                <label class="col-sm-2 col-form-label">Area</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Branch Area" name="area">
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">State</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Branch State" name="state">
                                </div>


                                <label class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-4">
                                    <select name="country" class="form-control">
                                        <option value="Nigeria">Nigeria</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-4">
                                     <input type="number" class="form-control" placeholder="Customer Phone number" name="contact">
                                </div>

                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-4">
                                    <textarea rows="5" cols="5" name="address" class="form-control" placeholder="Default textarea"></textarea>
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