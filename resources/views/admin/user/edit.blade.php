@extends('layouts.main')

@section('title')
    Edit Admin User {{$user->name}}
@endsection

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <div class="page-header-title">
            <h4>Edit Admin User</h4>
            <span>Edit <code>{{$user->name}}</code>for the company</span>
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
                <li class="breadcrumb-item"><a href="#!">Edit Admin User</a>
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
                        <h5>Edit new Admin User</h5>
                        <div class="card-header-right">
                            <i class="icofont icofont-rounded-down"></i>
                            <i class="icofont icofont-refresh"></i>
                            <i class="icofont icofont-close-circled"></i>
                        </div>
                    </div>
                    <div class="card-block">
                        @include('partials._errors')
                        <form action="{{ route('users.update', ['id' => $user->id ]) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Admin Name" name="name" value="{{$user->name}}">
                                </div>

                                <label class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control" placeholder="Admin  Email" name="email" value="{{$user->email}}">
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Brand</label>
                                <div class="col-sm-4">
                                    <select name="branch_id" class="form-control" required>
                                        <option value="">Select One Value Only</option>
                                        @foreach($branches as $branch)
                                        <option value="{{$branch->id}}">{{$branch->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <label class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-4">
                                     <input type="number" class="form-control" placeholder="Admin Phone number" name="contact" value="{{$user->contact}}">
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