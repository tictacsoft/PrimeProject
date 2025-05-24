@extends('admin.layout.master')
@section('title', 'Company')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Company</h4>
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
                    <div class="card-body">
                        <h4 class="card-title">View Company</h4>
                        @include('admin.layout.flash')
                        <div class="table-responsive">
                            <table id="file_export" class="table table-striped table-bordered display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Type</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @forelse ($companies as $company)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $company->type }}</td>
                                            <td>{{ $company->name }}</td>
                                            <td>{{ $company->address }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('company.edit', [$company->id]) }}" class="btn btn-warning btn-sm mr-2"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <form action="{{ route('company.destroy', [$company->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="{{ route('company.create') }}">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
