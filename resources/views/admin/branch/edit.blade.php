@extends('layouts.main')

@section('title')
    Edit Branch
@endsection

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <div class="page-header-title">
            <h4>Edit Branch</h4>
            <span>Edit <code>Branch</code> {{ $branch->name }} for the industry</span>
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
                <li class="breadcrumb-item"><a href="#!">Edit Branch</a>
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
                        <h5>Edit new branch</h5>
                        <div class="card-header-right">
                            <i class="icofont icofont-rounded-down"></i>
                            <i class="icofont icofont-refresh"></i>
                            <i class="icofont icofont-close-circled"></i>
                        </div>
                    </div>
                    
                    <div class="card-block">
                        @include('partials._errors')
                        <form action="{{ route('branches.update', ['id' => $branch->id ]) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Branch Name" name="name" value="{{$branch->name}}">
                                </div>

                                <label class="col-sm-2 col-form-label">Area</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Branch Area"  name="area"  value="{{$branch->area}}">
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">State</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Branch State" name="state"  value="{{$branch->state}}">
                                </div>


                                <label class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-4">
                                    <select name="country" class="form-control">
                                        <option value="1">Nigeria</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-4">
                                     <input type="number" class="form-control" placeholder="Customer Phone number" name="contact" value="{{$branch->contact}}">
                                </div>

                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-4">
                                    <textarea rows="5" cols="5" name="address" class="form-control" placeholder="Default textarea">{{$branch->address}}</textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-square btn-block" value="Save">
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