@extends('admin.layouts.main')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Profil Akun</h3>
                    <p class="text-subtitle text-muted">Halaman tempat pengguna/administrator dapat mengubah informasi profil
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data"
                                id="profileForm">
                                @csrf

                                <div class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="avatar avatar-2xl">
                                        <img id="previewAvatar" src="/avatars/{{ Auth::user()->avatar }}" alt="Avatar">
                                    </div>

                                    <div class="btn-group my-2" role="group" aria-label="Basic example">
                                        <label for="avatar" class="btn icon icon-left btn btn-outline-primary m-1">
                                            <i data-feather="edit"></i> Ubah Foto Profil
                                        </label>
                                        <input type="file" id="avatar" name="avatar" style="display: none;">
                                        <button id="saveButton" type="button"
                                            class="btn btn-outline-success m-1">Simpan</button>
                                    </div>

                                    <h3 class="mt-2">{{ Auth::user()->name }}</h3>
                                    <p class="text-small">Administrator</p>
                                </div>
                            </form>

                            <script>
                                const inputAvatar = document.getElementById('avatar');

                                // Mendapatkan referensi ke tag gambar untuk pratinjau
                                const previewAvatar = document.getElementById('previewAvatar');

                                // Menambahkan event listener ke input file untuk mengubah pratinjau foto saat terjadi perubahan
                                inputAvatar.addEventListener('change', function(event) {
                                    const file = event.target.files[0];
                                    if (file) {
                                        const reader = new FileReader();

                                        reader.onload = function(e) {
                                            previewAvatar.src = e.target.result;
                                        }

                                        reader.readAsDataURL(file);
                                    }
                                });

                                // Menampilkan SweetAlert2 toast setelah form berhasil di-submit
                                const saveButton = document.getElementById('saveButton');
                                saveButton.addEventListener('click', async function() {
                                    const formData = new FormData(document.getElementById('profileForm'));

                                    try {
                                        const response = await fetch('{{ route('user.profile.store') }}', {
                                            method: 'POST',
                                            body: formData
                                        });

                                        if (response.ok) {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Foto Profil Berhasil Disimpan',
                                                showConfirmButton: false,
                                                timer: 1500
                                            }).then(() => {
                                                window.location.reload(); // Refresh halaman setelah berhasil
                                            });
                                        } else {
                                            throw new Error('Gagal menyimpan foto profil');
                                        }
                                    } catch (error) {
                                        console.error(error);
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'Terjadi kesalahan saat menyimpan foto profil!'
                                        });
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <form action="{{ route('admin.profiles') }}" method="POST" id="profileUpdateForm">
                                @csrf
                                <div class="form-group mb-5">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Nama lengkap anda" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Email anda" value="{{ Auth::user()->email }}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="button" id="updateButton" class="btn btn-primary">Simpan
                                        Perubahan</button>
                                </div>
                            </form>
                        </div>

                        <script>
                            // Menampilkan SweetAlert2 toast setelah form berhasil di-submit
                            const updateButton = document.getElementById('updateButton');
                            updateButton.addEventListener('click', async function() {
                                const formData = new FormData(document.getElementById('profileUpdateForm'));

                                try {
                                    const response = await fetch('{{ route('admin.profiles') }}', {
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
        </section>
    </div>
@endsection
