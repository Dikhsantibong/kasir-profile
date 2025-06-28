<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Nova Free Bootstrap Template for Agency')</title>

    <!-- ======= Google Font =======-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">

    <!-- ======= Styles =======-->
    <link href="{{ asset('nova-template/assets/vendors/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('nova-template/assets/vendors/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('nova-template/assets/vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('nova-template/assets/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('nova-template/assets/vendors/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('nova-template/assets/css/style.css') }}" rel="stylesheet">

    <!-- ======= Apply theme =======-->
    <script>
        // Apply the theme as early as possible to avoid flicker
        (function() {
            const storedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-bs-theme', storedTheme);
        })();
    </script>

    @yield('styles')
</head>
<body>
    <!-- ======= Site Wrap =======-->
    <div class="site-wrap">
        @include('layouts.partials.header')

        <!-- ======= Main =======-->
        <main>
            @yield('content')
        </main>

        @include('layouts.partials.footer')
    </div>

    <!-- ======= Back to Top =======-->
    <button id="back-to-top"><i class="bi bi-arrow-up-short"></i></button>

    <!-- ======= Javascripts =======-->
    <script src="{{ asset('nova-template/assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('nova-template/assets/vendors/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('nova-template/assets/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('nova-template/assets/vendors/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('nova-template/assets/vendors/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ asset('nova-template/assets/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('nova-template/assets/vendors/aos/aos.js') }}"></script>
    <script src="{{ asset('nova-template/assets/vendors/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('nova-template/assets/js/custom.js') }}"></script>
    <script src="{{ asset('nova-template/assets/js/send_email.js') }}"></script>

    @yield('scripts')
</body>
</html>
