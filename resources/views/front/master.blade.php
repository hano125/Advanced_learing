<!DOCTYPE html>
<html lang="en">

@include('front.partials.head')

<body>
    <div class="p-0 bg-white container-xxl">
        <!-- Spinner Start -->
        <div id="spinner"
            class="bg-white show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="p-0 container-xxl position-relative">
            @include('front.partials.navbar')
        </div>
        <!-- Navbar & Hero End -->

        @yield('content')

        <!-- Footer Start -->
        <div class="pt-5 container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s"
            style="margin-top: 6rem;">
            @include('front.partials.footer')
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('front.partials.scripts')
</body>

</html>
