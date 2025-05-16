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
    <section class="contact-section">
        <div class="container d-flex  justify-content-center  align-items-center">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card shadow">
                        <div class="card-header border-0 bg-white">
                           <h2 class="contact-title text-center my-2 mb-2">Freelancer</h2>
                        </div>
                        <div class="card-body">
                            <form class="form-contact" action="/signup" method="post">
                            @csrf
                                <input name="role" id="role" type="hidden" value="freelancer">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text"
                                                placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email"
                                                placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="phoneno" id="phoneno" type="text"
                                                placeholder="Enter phone no.">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="password" id="password" type="password"
                                                placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="confirm_password" id="confirm_password" type="password"
                                                placeholder="Enter confirm password">
                                        </div>
                                    </div>
                                </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button boxed-btn">Sign Up</button>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>    
                
            </div>
        </div>
    </section>
@endsection
