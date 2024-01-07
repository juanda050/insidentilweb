<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="{{ asset('assets2/assets/images/siipidtitle.svg') }}" type="image/x-icon">
    <title>SIIPID | REGISTER</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}" />
    <style></style>
</head>

<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!----------------------- Main Container -------------------------->

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
                font-weight: 600;
              ">
                        Buat Akun
                    </p>
                    <small class="text-white text-wrap text-center"
                        style="
                width: 17rem;
                font-family: 'Courier New', Courier, monospace;
              ">Daftarkan
                        Akun Anda untuk untuk mendapatkan pengalaman yang lebih
                        banyak</small>
                </div>

                <!-------------------- ------ Right Box ---------------------------->

                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Hallo...</h2>
                            <p>Senang rasanya melihat anda.</p>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text"
                                class="form-control form-control-lg bg-light fs-6 @error('name') is-valid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofucus
                                placeholder="Masukkan Nama Anda" />

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="email" type="email"
                                class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Masukkan Email" />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="password" type="password"
                                class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password" placeholder="Sandi" />

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-2">
                            <input id="password-confirm" type="password"
                                class="form-control form-control-lg bg-light fs-6" name="password_confirmation" required
                                autocomplete="new-password" placeholder="Ulangi sandi" />
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck" />
                                <label for="formCheck" class="form-check-label text-secondary"><small>Ingatkan
                                        Saya</small></label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">
                                Daftar
                            </button>
                        </div>
                        <p class="text-center mb-1">atau</p>
                        <div class="input-group mb-3">
                            <a class="btn btn-lg btn-light w-100 fs-6 border" href="{{ route('google.login') }}">
                                <img src="{{ asset('assets/jpg/Google__G__Logo.svg') }}" style="width: 20px"
                                    class="me-2" /><small>Masuk Dengan Google</small>
                            </a>
                            {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature()) --}}
                            {{-- @endif --}}
                        </div>
                        <div class="row">
                            <small>Sudah Memiliki akun?
                                <a href="{{ route('login') }}">Masuk</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
