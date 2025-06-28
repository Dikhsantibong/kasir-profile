<!-- ======= Header =======-->
<header class="fbs__net-navbar navbar navbar-expand-lg dark" aria-label="kasircerdas navbar">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- Start Logo-->
        <a class="navbar-brand w-auto" href="{{ url('/') }}">
            <!-- logo dark-->
            <img class="logo dark img-fluid" src="{{ asset('nova-template/assets/images/logo-dark.svg') }}" alt="Logo KasirCerdas">
            <!-- logo light-->
            <img class="logo light img-fluid" src="{{ asset('nova-template/assets/images/logo-light.svg') }}" alt="Logo KasirCerdas">
        </a>
        <!-- End Logo-->

        <!-- Start offcanvas-->
        <div class="offcanvas offcanvas-start w-75" id="fbs__net-navbars" tabindex="-1" aria-labelledby="fbs__net-navbarsLabel">
            <div class="offcanvas-header">
                <div class="offcanvas-header-logo">
                    <a class="logo-link" id="fbs__net-navbarsLabel" href="{{ url('/') }}">
                        <!-- logo dark-->
                        <img class="logo dark img-fluid" src="{{ asset('nova-template/assets/images/logo-dark.svg') }}" alt="Logo KasirCerdas">
                        <!-- logo light-->
                        <img class="logo light img-fluid" src="{{ asset('nova-template/assets/images/logo-light.svg') }}" alt="Logo KasirCerdas">
                    </a>
                </div>
                <button class="btn-close btn-close-black" type="button" data-bs-dismiss="offcanvas" aria-label="Tutup"></button>
            </div>

            <div class="offcanvas-body align-items-lg-center">
                <ul class="navbar-nav nav me-auto ps-lg-5 mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link scroll-link active" aria-current="page" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#pricing">Harga</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#how-it-works">Cara Kerja</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
        <!-- End offcanvas-->

        <div class="ms-auto w-auto">
            <div class="header-social d-flex align-items-center gap-1">
                <a class="btn btn-primary py-2" href="#">Mulai Sekarang</a>
                <button class="fbs__net-navbar-toggler justify-content-center align-items-center ms-auto" data-bs-toggle="offcanvas" data-bs-target="#fbs__net-navbars" aria-controls="fbs__net-navbars" aria-label="Toggle navigasi" aria-expanded="false">
                    <svg class="fbs__net-icon-menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="21" x2="3" y1="6" y2="6"></line>
                        <line x1="15" x2="3" y1="12" y2="12"></line>
                        <line x1="17" x2="3" y1="18" y2="18"></line>
                    </svg>
                    <svg class="fbs__net-icon-close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
<!-- End Header-->
