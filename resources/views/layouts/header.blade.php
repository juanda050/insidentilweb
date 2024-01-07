<header class="main-header position-fixed w-100">
    <div class="container">
        <nav class="navbar navbar-expand-xl py-0">
            <div class="logo">
                <a class="navbar-brand py-0 me-0" href="#section1"><img
                        src="{{ asset('assets2/assets/images/siipidlogofc.svg') }}" alt=""
                        style="width: 150px; height: auto;"></a>
            </div>
            <a class="d-inline-block d-lg-block d-xl-none d-xxl-none  nav-toggler text-decoration-none"
                data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">
                <i class="ti ti-menu-2 text-primary"></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#section1">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#section2">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#section3">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#section4">Ajukan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#section5">Tentang</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center ">
                    @if (Route::has('login'))
                        @auth
                            <a class="btn btn-outline-primary text-capitalize mx-1" href="{{ url('/home') }}">Home</a>
                        @else
                            @if (Route::has('register'))
                                <a class="btn btn-outline-primary text-capitalize mx-1" style="border: solid 2px;"
                                    href="{{ route('register') }}">Daftar</a>
                            @endif
                            <a class="btn btn-primary btn-hover-secondery text-capitalize "
                                href="{{ route('login') }}">Masuk</a>
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
    </div>


    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <div class="logo">
                <a class="navbar-brand py-0 me-0" href="#"><img
                        src="{{ asset('assets2/images/Creato-logo.svg') }}" alt=""></a>
            </div>
            <button type="button" class="btn-close text-reset  ms-auto" data-bs-dismiss="offcanvas"
                aria-label="Close"><i class="ti ti-x text-primary"></i></button>
        </div>
        <div class="offcanvas-body pt-0">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-capitalize" href="#section1">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-capitalize" href="#section2">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-capitalize" href="#section3">Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-capitalize" href="#section4">Ajukan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-capitalize" href="#section5">Tentang</a>
                </li>
            </ul>
            <div class="login d-block align-items-center mt-3">
                <a class="btn btn-primary text-capitalize w-100" href="{{ route('login') }}">Masuk</a>
            </div>
        </div>
    </div>
</header>
