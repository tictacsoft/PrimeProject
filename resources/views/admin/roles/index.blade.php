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
                        <div id="accordion-role-permission" class="accordion accordion-bordered ">
                            @forelse ($roles as $role)
                                <form action="{{ route('roles.update', [$role->id]) }}" method="post">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
