@extends('admin.layout.master')
@section('title', 'Company')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 d-flex align-self-center align-items-center">
                <a href="{{ route('company.index') }}" class="text-decoration-none mr-2"><i class="fa-solid fa-arrow-left"></i></a>
                <h4 class="page-title">Create Company</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Company</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="{{ route('company.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Create Company</h4>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="">Please Select Type</option>
                                    <option value="client">Client</option>
                                    <option value="supplier">Supplier</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Company Name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" id="address" rows="3" name="address" placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
