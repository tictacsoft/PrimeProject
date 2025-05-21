@extends('frontend.layout.master')
@section('title', 'Register')
@section('content')
    {{-- <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
            data-background="{{ asset('assets/img/hero/about.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Register</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <section class="contact-section ">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title text-center">Register</h2>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <a href="/register/freelancer" class="text-decoration-none">
                        <div class="card mx-auto shadow" style="width: 18rem;">
                            <img src="https://i.pinimg.com/736x/d9/b7/02/d9b70237f2569ba9dd5f386d16d95dab.jpg" class="card-img-top mx-auto" alt="..." height="250" width="50">
                            <div class="card-body">
                                <h5 class="card-title text-center">Freelancer</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <a href="/register/clients" class="text-decoration-none">
                        <div class="card mx-auto shadow" style="width: 18rem;">
                            <img src="https://i.pinimg.com/736x/17/7c/b0/177cb05010d6968079f394928575e3d5.jpg" class="card-img-top mx-auto" alt="..." height="250" width="50">
                            <div class="card-body">
                                <h5 class="card-title text-center">Clients</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <a href="/register/supplier" class="text-decoration-none">
                        <div class="card mx-auto shadow" style="width: 18rem;">
                            <img src="https://i.pinimg.com/736x/d7/8f/8f/d78f8fa0cee7f78253a7a309ac5c408a.jpg" class="card-img-top mx-auto" alt="..." height="250" width="50">
                            <div class="card-body">
                                <h5 class="card-title text-center">Supplier</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
