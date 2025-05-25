@extends('frontend.layout.master')
@section('title', 'Login')
@section('content')
    {{-- <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
            data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <section class="contact-section">
        <div class="container d-flex justify-content-center  align-items-center">
            <div class="row ">
                @include('frontend.layout.flash')
                <div class="col-12 col-md-12">
                    <div class="card shadow">
                        <div class="card-header border-0 bg-white">
                           <h2 class="contact-title text-center my-2 mb-2">Login</h2>
                        </div>
                        <div class="card-body">
                            <form class="form-contact" action="/signin" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email"
                                                placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="password" id="password" type="password"
                                                placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <a href="/forgot-password" class="text-decoration-none text-primary">Forgot Password</a>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="button boxed-btn">Sign In</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
