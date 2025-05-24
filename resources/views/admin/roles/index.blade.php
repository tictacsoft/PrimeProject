@extends('admin.layout.master')
@section('title', 'Roles')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Roles</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Roles</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Roles and Permissions</h2>
                    </div>
                    <div class="card-body">
                        @include('admin.layout.flash')
                        <div id="accordion-role-permission" class="accordion accordion-bordered ">
                            @forelse ($roles as $role)
                                <form action="{{ route('roles.permissions.update', [$role->id]) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    @include('admin.roles._permission', [
                                        'title' => $role->name . ' Permissions',
                                        'model' => $role,
                                        'showButton' => true,
                                    ])
                                </form>
                            @empty
                                <p>No Roles defined, please run <code>php artisan db:seed</code> to seed some dummy data.
                                </p>
                            @endforelse
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addRoles">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addRoles" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Create Roles</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form action="{{ route('roles.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect text-left">Add</button>
                        <button type="button" class="btn btn-danger waves-effect text-left"
                            data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteRoles" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Create Roles</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form action="{{ route('roles.destroy', [$role->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <h5>Do you want delete this role, {{ $role->name }}</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger waves-effect text-left">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
