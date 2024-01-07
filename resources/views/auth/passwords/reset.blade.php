<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assets2/assets/images/siipidtitle.svg') }}" type="image/x-icon">
    <title>SIIPID | RESET</title>
    <title>Login | PenTest</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}" />
</head>

<body>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="card-header visually-hidden">{{ __('Login') }}</div>
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row border rounded-5 p-3 bg-white shadow box-area">
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

                <div class="col-md-6 right-box">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Lupa Sandi?</h2>
                            <p>Masukkan sandi dengan benar</p>
                        </div>
                        <label for="email"
                            class="col-md-4 col-form-label text-md-end visually-hidden">{{ __('Email Address') }}</label>
                        <div class="input-group mb-3">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror form-control-lg bg-light fs-6"
                                name="email" placeholder="Masukkan Email" value="{{ $email ?? old('email') }}"
                                required autocomplete="email" autofocus readonly />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end visually-hidden">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror form-control-lg bg-light fs-6"
                                name="password" placeholder="Masukkan Password" required autocomplete="new-password" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end visually-hidden">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password"
                                class="form-control form-control-lg bg-light fs-6" name="password_confirmation"
                                placeholder="Konfirmasi Password" required autocomplete="new-password" />
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">
                                Reset Ulang Sandi
                            </button>
                        </div>
                        <div class="row">
                            <small>Belum memiliki akun?
                                <a href="{{ route('register') }}">Daftar</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


</body>

</html>
