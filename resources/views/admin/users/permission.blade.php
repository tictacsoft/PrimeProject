@extends('admin.layout.master')
@section('title', 'Users')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Users</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                    <form action="{{ url('/admin/users/permissions/update', [$user->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <h4 class="card-title">{{ $user->name }}</h4>
                            @if (isset($user))
                                <input type="hidden" name="roles" value="{{ $user->roles[0]['id'] }}">
                                <div class="form-group">
                                    <label>Override Permissions</label>
                                </div>
                                <div class="row">
                                    @foreach ($permissions as $perm)
                                        <?php
                                        $per_found = null;

                                        if (isset($role)) {
                                            $per_found = $role->hasPermissionTo($perm->name);
                                        }

                                        if (isset($user)) {
                                            $per_found = $user->hasDirectPermission($perm->name);
                                        }
                                        ?>

                                        <div class="col-md-3">
                                            <div class="checkbox">
                                                <label
                                                    class="{{ Str::contains($perm->name, 'delete') ? 'text-danger' : '' }}">
                                                    <input type="checkbox" name="permissions[]" value="{{ $perm->name }}"
                                                        {{ $per_found ? 'checked' : '' }}
                                                        @if (isset($options) && in_array('disabled', $options)) disabled @endif>
                                                    {{ $perm->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
