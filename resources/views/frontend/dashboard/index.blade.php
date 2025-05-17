@extends('frontend.layout.master')
@section('title', 'Dashboard')
@section('content')
    
            <div class="container mt-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="text-center">
                            <h2>Dashboard</h2>
                        </div>
                        <div class="text-center mt-5">
                            <a href="{{ route('job-request') }}" class="btn rounded" style="z-index: 0; position: relative;">Request Project</a>
                        </div>
                    </div>
                </div>
        </div>
   
    <section class="contact-section">
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-12 mb-3">
                    {{-- <h5>{{ Auth::user()->name }}</h5> --}}
                    {{-- <p>{{ Auth::user()->roles[0]['name'] }}</p> --}}
                </div>
                <div class="col-md-3 col-12 d-flex justify-content-md-start justify-content-center px-3 px-md-0 mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-12 d-flex justify-content-md-start justify-content-center px-3 px-md-0 mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-12 d-flex justify-content-md-start justify-content-center px-3 px-md-0 mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- <div class="col-lg-3">
                    <a href="/profile" class="text-decoration-none">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.pinimg.com/736x/8d/ff/49/8dff49985d0d8afa53751d9ba8907aed.jpg" class="card-img-top mx-auto w-50 my-3" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Profile</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="/logout" class="text-decoration-none">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.pinimg.com/736x/6e/ed/0c/6eed0cc73c90c4accb57c820ab1bbcc2.jpg" class="card-img-top mx-auto w-50 my-3" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Logout</h5>
                            </div>
                        </div>
                    </a>
                </div> --}}
                {{-- <div class="col-12">
                    <h2 class="contact-title text-center">{{ Auth::user()->roles[0]['name'] }}</h2>
                    <a href="/logout" class="btn btn-primary">Logout</a>
                </div> --}}
            </div>
        </div>
    </section>
    <div class="container mt-4">
  <h2 class="mb-4">Job Request List</h2>

  <!-- Success Message -->
  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Project Title</th>
              <th>Client Company</th>
              <th>Location</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Duration</th>
              <th>Position Title</th>
              <th>Job Level</th>
              <th>Created By</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($jobRequests as $job)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $job->project_title }}</td>
                <td>{{ $job->client_company }}</td>
                <td>{{ ucfirst($job->project_location) }}</td>
                <td>{{ $job->project_start_date }}</td>
                <td>{{ $job->project_end_date }}</td>
                <td>{{ $job->duration }} {{ $job->duration_unit }}</td>
                <td>{{ $job->position_title }}</td>
                <td>{{ ucfirst($job->job_level) }}</td>
                <td>{{ $job->user->name ?? '-' }}</td>
                <td>
                  <a href="#" class="btn btn-sm btn-info mb-2">View</a>
                  <a href="#" class="btn btn-sm btn-warning mb-2">Edit</a>
                  <form action="#" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="11" class="text-center">No data available</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
