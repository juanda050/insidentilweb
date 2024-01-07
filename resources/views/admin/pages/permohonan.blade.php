@extends('admin.layouts.main')
@section('content')
    <div class="page-content">
        <!-- Hoverable rows start -->
        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between mb-1">
                            <span>
                                <h3>Pengajuan Laporan Insidentil</h3>
                            </span>
                            <span>
                                <a href="{{ route('pengajuan.pdf') }}" class="btn icon icon-left btn-outline-warning block">
                                    <i class="bi bi-file-earmark-pdf me-2"></i>DOWNLOAD PDF
                                </a>
                            </span>
                        </div>
                        <div class="card-body">
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-striped " id="pengajuan-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Lengkap</th>
                                            <th>Alamat Email</th>
                                            <th>Tanggal Kejadian</th>
                                            <th>Link Situs</th>
                                            <th>Peretas</th>
                                            <th>Deskripsi</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengajuans as $pengajuan)
                                            <tr>
                                                <td>{{ $pengajuan->id }}</td>
                                                <td>{{ $pengajuan->nama }}</td>
                                                <td>{{ $pengajuan->email }}</td>
                                                <td>{{ $pengajuan->tanggal_kejadian }}</td>
                                                <td>
                                                    <a href="{{ $pengajuan->link_website }}"
                                                        target="_blank">{{ $pengajuan->link_website }}</a>
                                                </td>
                                                <td>{{ $pengajuan->peretas }}</td>
                                                <td>{{ $pengajuan->deskripsi }}</td>
                                                <td class="d-flex justify-content-center">
                                                    @if ($pengajuan->status === 'Tinjau')
                                                        <a href="#"
                                                            onclick="changeStatus(event, {{ $pengajuan->id }})"
                                                            class="badge bg-success">Tinjau</a>
                                                    @else
                                                        <a href="#" class="badge bg-dark">Sudah ditinjau</a>
                                                    @endif
                                                    <a href="#" onclick="deleteEntry({{ $pengajuan->id }})"
                                                        class="badge icon bg-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <script>
                                    function changeStatus(event, id) {
                                        event.preventDefault(); // Menghentikan tindakan default dari tombol anchor

                                        // Tampilkan konfirmasi dengan SweetAlert2
                                        Swal.fire({
                                            title: 'Anda yakin ingin mengubah status?',
                                            text: 'Perubahan status akan diterapkan!',
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Ya, Ubah Status!',
                                            cancelButtonText: 'Batal'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                $.ajax({
                                                    url: '/admin/permohonan/' + id + '/ubah-status',
                                                    type: 'PATCH',
                                                    headers: {
                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                    },
                                                    success: function(response) {
                                                        // Di sini Anda bisa memperbarui tampilan atau melakukan sesuatu setelah perubahan status
                                                        console.log(response);

                                                        // Tampilkan toast konfirmasi perubahan status
                                                        Swal.fire({
                                                            icon: 'success',
                                                            title: 'Status berhasil diubah!',
                                                            showConfirmButton: false,
                                                            timer: 1500
                                                        });

                                                        // Refresh halaman untuk menampilkan perubahan status
                                                        setTimeout(function() {
                                                            location.reload();
                                                        }, 1500);
                                                    },
                                                    error: function(xhr, status, error) {
                                                        console.error(error);
                                                    }
                                                });
                                            }
                                        });
                                    }




                                    // Fungsi untuk menghapus entri
                                    function deleteEntry(id) {
                                        Swal.fire({
                                            title: 'Anda yakin?',
                                            text: 'Anda tidak akan dapat mengembalikan ini!',
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#d33',
                                            cancelButtonColor: '#3085d6',
                                            confirmButtonText: 'Ya, hapus!',
                                            cancelButtonText: 'Batal'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                $.ajax({
                                                    url: '/admin/permohonan/' + id + '/hapus',
                                                    type: 'DELETE',
                                                    headers: {
                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                    },
                                                    success: function(response) {
                                                        // Tambahkan animasi toast SweetAlert2 setelah penghapusan berhasil
                                                        Swal.fire({
                                                            icon: 'success',
                                                            title: 'Data berhasil dihapus!',
                                                            showConfirmButton: false,
                                                            timer: 1500
                                                        });
                                                        // Refresh halaman setelah menampilkan toast
                                                        setTimeout(function() {
                                                            location.reload();
                                                        }, 1500);
                                                    },
                                                    error: function(xhr, status, error) {
                                                        console.error(error);
                                                    }
                                                });
                                            }
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $(document).ready(function() {
            $('#pengajuan-table').DataTable();
        });
    </script>
@endsection
