@extends('layouts.main')

@section('title')
    All Branches
@endsection

@section('stylesheets')
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
        <div class="modal-dialog" role="document">
            {!! Form::open(['method' => 'post']) !!}

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="roleModalLabel">Role</h4>
                </div>
                <div class="modal-body">
                    <!-- name Form Input -->
                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Role Name']) !!}
                        @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <!-- Submit Form Button -->
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <h3>Roles</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            @can('add_roles')
                <a href="#" class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#roleModal"> <i class="glyphicon glyphicon-plus"></i> New</a>
            @endcan
        </div>
    </div>


    @forelse ($roles as $role)
        {!! Form::model($role, ['method' => 'PUT', 'route' => ['roles.update',  $role->id ], 'class' => 'm-b']) !!}

        @if($role->name === 'Admin')
            @include('shared._permissions', [
                          'title' => $role->name .' Permissions',
                          'options' => ['disabled'] ])
        @else
            @include('shared._permissions', [
                          'title' => $role->name .' Permissions',
                          'model' => $role ])
            @can('edit_roles')
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            @endcan
        @endif

        {!! Form::close() !!}

    @empty
        <p>No Roles defined, please run <code>php artisan db:seed</code> to seed some dummy data.</p>
    @endforelse
@endsection

@section('scripts')    
    <!-- data-table js -->
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/js/jszip.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/js/pdfmake.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/js/vfs_fonts.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/jszip.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/pdfmake.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/vfs_fonts.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/extensions/buttons/js/pdfmake.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>


    <!-- data-table js -->
   <!--  <script src="{{ URL::to('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/js/jszip.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/js/pdfmake.min.js')}}"></script>
    <script src="{{ URL::to('assets/pages/data-table/js/vfs_fonts.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ URL::to('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script> -->
    <!-- i18next.min.js -->
    <script src="{{ URL::to('assets/pages/data-table/js/data-table-custom.js')}}"></script>
@endsection