<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assets2/assets/images/siipidtitle.svg') }}" type="image/x-icon">
    <title>SIIPID | LOGIN</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}" />
</head>

<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!----------------------- Main Container -------------------------->

        <div class="card-header visually-hidden">{{ __('Login') }}</div>

        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <!----------------------- Login Container -------------------------->

            <div class="row border rounded-5 p-3 bg-white shadow box-area">
                <!--------------------------- Left Box ----------------------------->

                <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                    style="background: #103cbe">
                    <div class="featured-image mb-3 avatar">
                        <img src="{{ asset('assets/jpg/19472101_6106829.svg') }}" class="img-fluid"
                            style="width: 250px" />
                    </div>
                    <p class="text-white fs-2"
                        style="
                font-family: 'Courier New', Courier, monospace;
                font-weight: 600;">
                        Buat Akun
                    </p>
                    <small class="text-white text-wrap text-center"
                        style="
                width: 17rem;
                font-family: 'Courier New', Courier, monospace;">Daftarkan
                        Akun Anda untuk untuk mendapatkan pengalaman yang lebih
                        banyak</small>
                </div>

                <!-------------------- ------ Right Box ---------------------------->

                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Hallo...</h2>
                            <p>Senang rasanya melihat anda kembali.</p>
                        </div>
                        <label for="email"
                            class="col-md-4 col-form-label text-md-end visually-hidden">{{ __('Email Address') }}</label>
                        <div class="input-group mb-3">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror form-control-lg bg-light fs-6"
                                name="email" placeholder="Email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-1">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror form-control-lg bg-light fs-6"
                                name="password" required autocomplete="current-password" placeholder="Sandi" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label visually-hidden" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                <label for="formCheck" class="form-check-label text-secondary"><small>Ingatkan
                                        Saya</small></label>
                            </div>
                            @if (Route::has('password.request'))
                                <div class="forgot">
                                    <small><a href="{{ route('password.request') }}">Lupa Sandi?</a></small>
                                </div>
                            @endif
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">
                                Masuk
                            </button>
                        </div>
                        <div class="input-group mb-3">
                            <a class="btn btn-lg btn-light w-100 fs-6 border" href="{{ route('google.login') }}">
                                <img src="{{ asset('assets/jpg/Google__G__Logo.svg') }}" style="width: 20px"
                                    class="me-2" /><small>Masuk Dengan
                                    Google</small>
                            </a>
                        </div>
                        <div class="row">
                            <small>Belum Memiliki akun?
                                <a href="{{ route('register') }}">Daftar</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
