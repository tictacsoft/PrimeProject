@extends('frontend.layout.master')
@section('title', 'Projects')
@section('content')
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('frontend.layout.flash')
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">View Projects</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Project Name</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @forelse ($projects as $project)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $project->name }}</td>
                                            <td>{{ $project->start_date }}</td>
                                            <td>{{ $project->end_date }}</td>
                                            <td>{{ $project->description }}</td>
                                            <td>{{ $project->status }}</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('projects.create') }}" class="btn btn-primary">Create Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
