@extends('layouts.main')

@section('title')
    Create Salary Structure
@endsection

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <div class="page-header-title">
            <h4>Create Salary Structure</h4>
            <span>Create new <code>Salary Structure</code>for the company</span>
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
                <li class="breadcrumb-item"><a href="#!">Create Salary Structure</a>
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
                        <h5>Create new Salary Structure</h5>
                        <div class="card-header-right">
                            <i class="icofont icofont-rounded-down"></i>
                            <i class="icofont icofont-refresh"></i>
                            <i class="icofont icofont-close-circled"></i>
                        </div>
                    </div>
                    <div class="card-block">
                        @include('partials._errors')
                        <form action="{{ route('salary-structure.store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Salary Type</label>
                                <div class="col-sm-4">
                                    <select name="type" class="form-control" required>
                                        <option value="">Select One Value Only</option>
                                        <option value="Fixed">Fixed</option>
                                        <option value="Weekly">Weekly</option>
                                    </select>
                                </div>

                                <label class="col-sm-2 col-form-label">Release Date</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" placeholder="Release Date" name="date">
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