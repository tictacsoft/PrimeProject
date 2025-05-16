@extends('frontend.layout.master')
@section('title', 'Dashboard')
@section('content')
    
            <div class="container mt-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="text-center">
                            <h2>Dashboard</h2>
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
@endsection
