@extends('admin.layouts.main')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Keamanan Akun</h3>
                    <p class="text-subtitle text-muted">Halaman dimana halaman ini dapat mengubah pengaturan keamanan akun
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Security</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Ubah Sandi</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.security') }}" method="POST" id="securityForm">
                                @csrf
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @elseif (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div class="form-group my-2">
                                    <label for="oldPasswordInput" class="form-label">Kata sandi saat ini</label>
                                    <input type="password" name="old_password" id="oldPasswordInput"
                                        class="form-control @error('old_password') is-invalid @enderror"
                                        placeholder="Masukkan sandi saat ini">
                                    @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group my-2">
                                    <label for="newPasswordInput" class="form-label">Sandi Baru</label>
                                    <input type="password" name="new_password" id="newPasswordInput"
                                        class="form-control @error('new_password') is-invalid @enderror"
                                        placeholder="Masukkan sandi baru" value="">
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group my-2">
                                    <label for="confirmNewPasswordInput" class="form-label">Konfirmasi Sandi</label>
                                    <input type="password" name="new_password_confirmation" id="confirmNewPasswordInput"
                                        class="form-control" placeholder="Masukkan konfirmasi sandi" value="">
                                </div>

                                <div class="form-group my-2 d-flex justify-content-end">
                                    <button type="button" id="securityButton" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>

                            <script>
                                // Menampilkan SweetAlert2 toast setelah form berhasil di-submit
                                const securityButton = document.getElementById('securityButton');
                                securityButton.addEventListener('click', async function() {
                                    const formData = new FormData(document.getElementById('securityForm'));

                                    try {
                                        const response = await fetch('{{ route('admin.security') }}', {
                                            method: 'POST',
                                            body: formData
                                        });

                                        if (response.ok) {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Data berhasil diperbarui',
                                                showConfirmButton: false,
                                                timer: 1500
                                            }).then(() => {
                                                window.location.reload(); // Refresh halaman setelah berhasil
                                            });
                                        } else {
                                            throw new Error('Gagal memperbarui data');
                                        }
                                    } catch (error) {
                                        console.error(error);
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'Terjadi kesalahan saat memperbarui data!'
                                        });
                                    }
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
