@extends('frontend.layout.master')
@section('title', 'Forgot Password')
@section('content')
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
            data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Forgot Password</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title text-center">Forgot Password</h2>
                </div>
                <div class="col-lg-12">
                    <form class="form-contact" action="#" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email"
                                        placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button boxed-btn">Send</button>
                            <a href="/login" class="button boxed-btn">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
