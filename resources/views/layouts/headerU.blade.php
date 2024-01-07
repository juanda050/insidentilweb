<header class="main-header position-fixed w-100">
    <div class="container" id="myLink">
        <nav class="navbar navbar-expand-xl py-0">
            <div class="logo">
                <a class="navbar-brand py-0 me-0" href="#section1"><img
                        src="{{ asset('assets2/assets/images/siipidlogofc.svg') }}" alt=""
                        style="width: 150px; height: auto;"></a>
            </div>
            <div class="d-flex m-1 d-xl-none d-xxl-none">
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-img d-flex align-items-center">
                                <!-- Konten HTML Anda dengan kelas Bootstrap -->
                                <div class="avatar avatar-md border border-primary px-1 py-1">
                                    <img src="/avatars/{{ Auth::user()->avatar }}" alt="Face 1">
                                    <span class="avatar-status bg-success"></span>
                                </div>

                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                        style="min-width: 11rem;">
                        <li>
                            <h6 class="dropdown-header">Hallo, {{ Auth::user()->name }}</h6>
                        </li>
                        {{-- <li><a class="dropdown-item disabled text-dark" href="#"><i
                                    class="icon-mid bi bi-person me-2 text-dark"></i>Profil Saya</a></li>
                        <li><a class="dropdown-item disabled text-dark" href="#"><i
                                    class="icon-mid bi bi-gear me-2"></i>Settings</a></li> --}}

                        <hr class="dropdown-divider">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-left" style="margin-right: 10px"></i>
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        </li>
                    </ul>
                </div>
                <a class="d-inline-block d-lg-block d-xl-none d-xxl-none  nav-toggler text-decoration-none"
                    data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="ti ti-menu-2 text-primary"></i>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" aria-current="page" href="#section1">Beranda</a>
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
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-img d-flex align-items-center">
                                <!-- Konten HTML Anda dengan kelas Bootstrap -->
                                <!-- Konten HTML Anda dengan kelas Bootstrap -->
                                <div class="avatar avatar-md border border-primary px-1 py-1">
                                    <img src="/avatars/{{ Auth::user()->avatar }}" alt="Face 1">
                                    <span class="avatar-status bg-success"></span>
                                </div>

                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                        style="min-width: 11rem;">
                        <li>
                            <h6 class="dropdown-header">Hallo, {{ Auth::user()->name }}</h6>
                        </li>
                        <!-- Daftar dropdown dengan tautan yang tidak aktif -->
                        {{-- <li><a class="dropdown-item disabled text-dark" href="#"><i
                                    class="icon-mid bi bi-person me-2 text-dark"></i>Profil Saya</a></li>
                        <li><a class="dropdown-item disabled text-dark" href="#"><i
                                    class="icon-mid bi bi-gear me-2"></i>Settings</a></li>
                        <hr class="dropdown-divider"> --}}
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-left" style="margin-right: 10px"></i>
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        </li>
                    </ul>
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
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-warning text-capitalize w-100">Logout</button>
                </form>
            </div>
        </div>
    </div>
</header>
