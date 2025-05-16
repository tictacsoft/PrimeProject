<header>
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets/img/logo/pd-logo.avif') }}" alt="" width="70px"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="job_listing.html">Find a Jobs </a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">Page</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                                <li><a href="job_details.html">job Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-btn d-none f-right d-lg-block">
                                @auth
                                <div class="d-flex justify-content-center">
                                    <!-- Tombol Dashboard -->
                                    @unless(request()->is('dashboard'))
                                        <a href="{{ url('/dashboard') }}" class="btn head-btn1">
                                            Dashboard
                                        </a>
                                    @endunless

                                    <!-- Dropdown Gambar + Nama User -->
                                    <div class="dropdown d-inline-block ms-3 ml-3">
                                <a href="#" class="dropdown-toggle d-flex align-items-center text-decoration-none"
                                id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ Auth::user()->profile_picture_url ?? asset('assets/img/logo/testimonial.png') }}"
                                        alt="Profile" width="50" height="50" class="rounded-circle me-2 ml-2" style="object-fit: cover;">
                                    <span class="text-dark fw-semibold ml-3">{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="">Profil</a></li>
                                    <li><a class="dropdown-item" href="">Log Activity</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            </div>
                                @else
                                    <!-- Jika belum login -->
                                    <a href="/register" class="btn head-btn1">Register</a>
                                    <a href="/login" class="btn head-btn2">Login</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
