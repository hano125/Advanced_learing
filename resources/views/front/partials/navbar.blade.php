<nav class="px-4 py-3 navbar navbar-expand-lg navbar-light px-lg-5 py-lg-0">
    <a href="index.html" class="p-0 navbar-brand">
        <h1 class="m-0">BizConsult</h1>
        <!-- <img src="{{ asset('asset_front') }}/img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="py-0 navbar-nav ms-auto">
            <a href="{{ route('front.index') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('front.about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('front.service') }}" class="nav-item nav-link">Service</a>
            <a href="{{ route('front.contact') }}" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>

<div class="container-xxl bg-primary hero-header">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="text-center col-lg-6 text-lg-start">
                <h1 class="mb-4 text-white animated zoomIn">We Help To Push Your Business To The Top Level
                </h1>
                <p class="pb-3 text-white animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum
                    ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit
                    justo amet ipsum vero ipsum clita lorem</p>
                <a href=""
                    class="px-5 py-3 border-2 btn btn-outline-light rounded-pill animated slideInRight">Learn
                    More</a>
            </div>
            <div class="text-center col-lg-6 text-lg-start">
                <img class="img-fluid animated zoomIn" src="{{ asset('asset_front') }}/img/hero.png" alt="">
            </div>
        </div>
    </div>
</div>
