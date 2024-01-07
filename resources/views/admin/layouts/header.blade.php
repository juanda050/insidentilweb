@guest
    @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif

    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
@else
    <div id="main" class='layout-navbar navbar-fixed'>
        <header>
            <nav class="navbar navbar-expand navbar-light navbar-top">
                <div class="container-fluid">
                    <a href="#" class="burger-btn d-block">
                        <i class="bi bi-justify fs-3"></i>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-lg-0">
                            <li class="nav-item dropdown me-1">
                                <a class="nav-link active dropdown-toggle text-gray-600" href="#"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class='bi bi-envelope bi-sub fs-4'></i>
                                    <span class="badge badge-notification bg-danger">{{ $totalPengajuans }}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Pesan</h6>
                                    </li>
                                    <li><a class="dropdown-item btn" href="{{ route('admin.permohonan') }}">Pengajuan
                                            masuk<span class="badge bg-transparent">{{ $totalPengajuans }}</span></a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="user-menu d-flex">
                                    <div class="user-name text-end me-3">
                                        <h6 class="mb-1 mt-2 text-gray-600">{{ Auth::user()->name }}</h6>
                                        <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                    </div>
                                    <div class="user-img d-flex align-items-center">
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
                                <li><a class="dropdown-item" href="{{ route('admin.profiles') }}"><i
                                            class="icon-mid bi bi-person me-2"></i> My
                                        Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.security') }}"><i
                                            class="icon-mid bi bi-gear me-2"></i>
                                        My Security</a></li>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="bi bi-box-arrow-left" style="margin-right: 10px"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div id="main-content">
        @endguest
