@extends('admin.layout.master')
@section('title', 'Roles')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 d-flex align-self-center align-items-center">
                <a href="{{ route('roles.index') }}" class="text-decoration-none mr-2"><i class="fa-solid fa-arrow-left"></i></a>
                <h4 class="page-title">Edit Roles</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Roles</li>
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
                        <h2>Edit Roles</h2>
                    </div>
                    <form action="{{ route('update.roles', ['id' => $role->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}">
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
