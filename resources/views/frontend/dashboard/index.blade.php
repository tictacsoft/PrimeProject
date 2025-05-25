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
                        @can('add_projects')
                            <a class="nav-link text-dark" href="{{ route('projects.index') }}">Projects</a>
                        @endcan
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
                            <h5>{{ Auth::user()->name }}</h5>
                            @php
                                $dataArray = json_decode(Auth::user()->roles);
                                $role = current($dataArray);
                            @endphp
                            @if (!empty($dataArray))
                                <p>{{ $role->name }}</p>
                            @else
                                <p>Default</p>
                            @endif
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
