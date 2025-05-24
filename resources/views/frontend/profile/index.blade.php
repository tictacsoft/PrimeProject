@extends('frontend.layout.master')
@section('title', 'Dashboard')
@section('content')
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link text-dark active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                            role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                        <a class="nav-link text-dark" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                        <a class="nav-link text-dark" href="#">Projects</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <h5>Welcome to Dashboard</h5>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow">
                                        <div class="card-header">Profile Details</div>
                                        <div class="card-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Name</label>
                                                            <input class="form-control" name="name" id="name" type="text" value="{{ Auth::user()->name }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Email</label>
                                                            <input class="form-control" name="email" id="email" type="email" value="{{ Auth::user()->email }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Join</label>
                                                            <input class="form-control" readonly type="text" value="{{ Auth::user()->created_at->diffForHumans() }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Password</label>
                                                            <input class="form-control" name="password" id="password" type="password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="form-label">Confirm Password</label>
                                                            <input class="form-control" name="confirm_password" id="confirm_password" type="password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <button type="submit" class="btn">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <h5>{{ Auth::user()->name }}</h5>
                            <p>Default</p> --}}
                            {{-- @if (Auth::user()->role == Auth::user()->roles[0]['name'])
                                <p>{{ Auth::user()->roles[0]['name'] }}</p>
                            @else
                                 <p>Default</p>
                            @endif --}}
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
