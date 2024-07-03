@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Landing - Front Pages')

<!-- Vendor Styles -->
@section('vendor-style')
    @vite(['resources/assets/vendor/libs/nouislider/nouislider.scss', 'resources/assets/vendor/libs/swiper/swiper.scss'])
@endsection

<!-- Page Styles -->
@section('page-style')
    @vite(['resources/assets/vendor/scss/pages/front-page-landing.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
    @vite(['resources/assets/vendor/libs/nouislider/nouislider.js', 'resources/assets/vendor/libs/swiper/swiper.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
    @vite(['resources/assets/js/front-page-landing.js'])
@endsection


@section('content')
    <div data-bs-spy="scroll" class="scrollspy-example">
        <!-- Hero: Start -->
        <section id="hero-animation">
            <div id="landingHero" class="section-py landing-hero position-relative">
                <img src="{{ asset('assets/img/front-pages/backgrounds/hero-bg.png') }}" alt="hero background"
                    class="position-absolute top-0 start-50 translate-middle-x object-fit-contain w-100 h-100"
                    data-speed="1" />
                <div class="container">
                    <div class="hero-text-box text-center">
                        <h1 class="text-primary hero-title display-6 fw-bold">One dashboard to manage all your businesses
                        </h1>
                    </div>
                    <div id="heroDashboardAnimation" class="hero-animation-img">
                        <div class="row gy-3">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card border border-label-primary shadow-none">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/img/front-pages/icons/laptop.png') }}" alt="laptop"
                                            class="mb-2" />
                                        <h5 class="h2 mb-1">7.1k+</h5>
                                        <p class="fw-medium mb-0">
                                            Support Tickets<br />
                                            Resolved
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card border border-label-success shadow-none">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/img/front-pages/icons/user-success.png') }}"
                                            alt="laptop" class="mb-2" />
                                        <h5 class="h2 mb-1">50k+</h5>
                                        <p class="fw-medium mb-0">
                                            Join creatives<br />
                                            community
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card border border-label-info shadow-none">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/img/front-pages/icons/diamond-info.png') }}"
                                            alt="laptop" class="mb-2" />
                                        <h5 class="h2 mb-1">4.8/5</h5>
                                        <p class="fw-medium mb-0">
                                            Highly Rated<br />
                                            Products
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card border border-label-warning shadow-none">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/img/front-pages/icons/check-warning.png') }}"
                                            alt="laptop" class="mb-2" />
                                        <h5 class="h2 mb-1">100%</h5>
                                        <p class="fw-medium mb-0">
                                            Money Back<br />
                                            Guarantee
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <a href="#"> --}}
                        <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                            <img src="{{ asset('assets/img/front-pages/landing-page/hero-dashboard-' . $configData['style'] . '.png') }}"
                                alt="hero dashboard" class="animation-img"
                                data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                                data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                            <img src="{{ asset('assets/img/front-pages/landing-page/hero-elements-' . $configData['style'] . '.png') }}"
                                alt="hero elements" class="position-absolute hero-elements-img animation-img top-0 start-0"
                                data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                                data-app-dark-img="front-pages/landing-page/hero-elements-dark.png" />
                        </div>
                        {{-- </a> --}}
                    </div>
                </div>
            </div>
            <div class="landing-hero-blank"></div>
        </section>
        <!-- Hero: End -->

        <!-- Fun facts: Start -->
        {{-- <section id="landingFunFacts" class="section-py landing-fun-facts">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border border-label-primary shadow-none">
                            <div class="card-body text-center">
                                <img src="{{ asset('assets/img/front-pages/icons/laptop.png') }}" alt="laptop"
                                    class="mb-2" />
                                <h5 class="h2 mb-1">7.1k+</h5>
                                <p class="fw-medium mb-0">
                                    Support Tickets<br />
                                    Resolved
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border border-label-success shadow-none">
                            <div class="card-body text-center">
                                <img src="{{ asset('assets/img/front-pages/icons/user-success.png') }}" alt="laptop"
                                    class="mb-2" />
                                <h5 class="h2 mb-1">50k+</h5>
                                <p class="fw-medium mb-0">
                                    Join creatives<br />
                                    community
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border border-label-info shadow-none">
                            <div class="card-body text-center">
                                <img src="{{ asset('assets/img/front-pages/icons/diamond-info.png') }}" alt="laptop"
                                    class="mb-2" />
                                <h5 class="h2 mb-1">4.8/5</h5>
                                <p class="fw-medium mb-0">
                                    Highly Rated<br />
                                    Products
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border border-label-warning shadow-none">
                            <div class="card-body text-center">
                                <img src="{{ asset('assets/img/front-pages/icons/check-warning.png') }}" alt="laptop"
                                    class="mb-2" />
                                <h5 class="h2 mb-1">100%</h5>
                                <p class="fw-medium mb-0">
                                    Money Back<br />
                                    Guarantee
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Fun facts: End -->
    </div>
@endsection
