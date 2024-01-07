<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('assets2/assets/images/siipidtitle.svg') }}" type="image/x-icon">
    <title>SIIP-ID | Insidentil</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts/font.css') }}">

    <script src="{{ asset('sweetalert2/sweetalert2@11') }}"></script><!-- SweetAlert2 v11 -->

</head>

<body>
    <div id="sidebar">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header position-relative">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="{{ route('admin.home') }}">
                            <img src="{{ asset('assets2/assets/images/siipidlogofc.svg') }}" alt="SIIPID"
                                style="width: 150px; height: auto;">
                        </a>
                    </div>
                    <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                            height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                            <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                    opacity=".3"></path>
                                <g transform="translate(-210 -1)">
                                    <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                    <circle cx="220.5" cy="11.5" r="4"></circle>
                                    <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <div class="form-check form-switch fs-6">
                            <input class="form-check-input  me-0" type="checkbox" id="toggle-dark"
                                style="cursor: pointer">
                            <label class="form-check-label"></label>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                            </path>
                        </svg>
                    </div>
                    <div class="sidebar-toggler  x">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Home</li>

                    <li class="sidebar-item {{ Route::is('admin.home') ? 'active' : '' }}">
                        <a href={{ '/admin/home' }} class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-title">Mengelola</li>

                    <li class="sidebar-item {{ Route::is('admin.documents') ? 'active' : '' }}">
                        <a href={{ '/admin/documents' }} class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>Mengelola Data</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Route::is('admin.users') ? 'active' : '' }}">
                        <a href={{ '/admin/users' }} class='sidebar-link'>
                            <i class="bi bi-person-check-fill"></i>
                            <span>Mengelola Pengguna</span>
                        </a>
                    </li>

                    <li class="sidebar-title">Lainnya</li>

                    <li class="sidebar-item">
                        <a href={{ '/admin/permohonan' }} class='sidebar-link'>
                            <i class="bi bi-envelope-paper-fill"></i>
                            <span>Pengajuan</span>
                        </a>
                    </li>
                    <li class="sidebar-item has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-person-circle"></i>
                            <span>Profil</span>
                        </a>
                        <ul class="submenu ">

                            <li class="submenu-item">
                                <a href={{ route('admin.profiles') }} class="submenu-link">Profil</a>

                            </li>

                            <li class="submenu-item">
                                <a href={{ route('admin.security') }} class="submenu-link">My Security</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

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
                                            class="icon-mid bi bi-person me-2"></i>
                                        My
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

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
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
            <div class="card container" id="app">
                <div class="card-header d-flex justify-content-between mb-1">
                    <span>
                        <h3>Data Insidentil</h3>
                    </span>
                    <span>
                        <a href="{{ route('insidentil.pdf') }}" class="btn icon icon-left btn-outline-warning block">
                            <i class="bi bi-file-earmark-pdf"></i>
                        </a>

                        <!-- Button trigger for Disabled Backdrop -->
                        <a class="btn icon icon-left btn-outline-success block" onClick="add()"
                            href="javascript:void(0)">
                            <i data-feather="upload"></i>Tambah Data
                        </a>
                    </span>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="table-responsive card-body">
                    <table class="table table-striped " id="ajax-crud-datatable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Website</th>
                                <th>Link Website</th>
                                <th>Tanggal Kejadian</th>
                                <th>Peretas</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <!-- Bootstrap insident modal -->
                <div class="modal fade" id="company-modal" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="CompanyModal">Tambah Data Insidentil</h4>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('store-insident') }}" id="CompanyForm" name="CompanyForm"
                                    class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" id="id">

                                    <div class="form-group">
                                        <label for="nama_website" class="col-sm-2 control-label">Nama Website</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="nama_website"
                                                name="nama_website" placeholder="Masukkan Nama Website"
                                                maxlength="50" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="link_website" class="col-sm-2 control-label">Link Website</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="link_website"
                                                name="link_website" placeholder="Masukkan Link Website"
                                                maxlength="50" required="">
                                        </div>
                                    </div>

                                    <div class="input-group d-flex">
                                        <div class="form-group col-sm-6">
                                            <label for="peretas" class="control-label">Peretas</label>
                                            <input type="text" class="form-control" id="peretas" name="peretas"
                                                placeholder="Masukkan Nama Peretas" required="">
                                        </div>

                                        <span class="col-sm-1"></span>

                                        <div class="form-group col-sm-5">
                                            <label for="deskripsi" class="control-label">Tanggal Kejadian</label>
                                            <input type="date" class="form-control" id="tanggal_kejadian"
                                                placeholder="Tanggal Kejadian" aria-label="Username"
                                                name="tanggal_kejadian" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" rows="4"
                                                required=""></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary" id="btn-save">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- Footer content -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Bootstrap model -->
            </div>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="copyrights text-center blue-light  fw-500">@<span id="autodate">2023</span>-2024 All
                        Rights
                        Reserved by students participating in PKL Diskominsa</div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('assets/js/dark.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>
<script type="text/javascript">
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#ajax-crud-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('admin/documents') }}", // Menggunakan route 'admin/documents'
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'nama_website',
                    name: 'nama_website'
                },
                {
                    data: 'link_website',
                    name: 'link_website'
                },
                {
                    data: 'tanggal_kejadian',
                    name: 'tanggal_kejadian'
                },
                {
                    data: 'peretas',
                    name: 'peretas'
                },
                {
                    data: 'deskripsi',
                    name: 'deskripsi',
                    orderable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                },
            ],
            order: [
                [0, 'desc']
            ]
        });

    });

    function handleFormSubmission(mode) {
        $('#CompanyForm').off('submit').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ url('store-insident') }}", // Menggunakan route 'store-insident'
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    $("#company-modal").modal('hide');
                    var oTable = $('#ajax-crud-datatable').dataTable();
                    oTable.fnDraw(false);

                    // Tentukan pesan toast berdasarkan mode (tambah atau edit)
                    let toastMessage = (mode === 'add') ? 'Data berhasil ditambahkan!' :
                        'Data berhasil diubah!';

                    // Menampilkan notifikasi toast sesuai dengan mode
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        }
                    });

                    Toast.fire({
                        icon: 'success',
                        title: toastMessage
                    });

                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    }

    function add() {
        $('#CompanyForm').trigger("reset");
        $('#CompanyModal').html("Tambah Data Insidentil");
        $('#company-modal').modal('show');
        $('#id').val('');

        // Handle submission untuk mode tambah
        handleFormSubmission('add');
    }


    function editFunc(id) {
        $.ajax({
            type: "POST",
            url: "{{ url('edit-insident') }}", // Menggunakan route 'edit-insident'
            data: {
                id: id
            },
            dataType: 'json',
            success: function(res) {
                $('#CompanyModal').html("Ubah Data Insidentil");
                $('#company-modal').modal('show');
                $('#id').val(res.id);
                $('#nama_website').val(res.nama_website);
                $('#link_website').val(res.link_website);
                $('#tanggal_kejadian').val(res.tanggal_kejadian);
                $('#peretas').val(res.peretas);
                $('#deskripsi').val(res.deskripsi);

                // Handle submission untuk mode edit
                handleFormSubmission('edit');
            }
        });
    }

    function deleteFunc(id) {
        Swal.fire({
            title: 'Hapus Data Insidentil?',
            text: "Apakah Anda yakin ingin menghapus data ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "{{ url('delete-insident') }}",
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(res) {
                        var oTable = $('#ajax-crud-datatable').dataTable();
                        oTable.fnDraw(false);
                        // Tampilkan notifikasi toast setelah data berhasil dihapus
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer);
                                toast.addEventListener('mouseleave', Swal.resumeTimer);
                            }
                        });

                        Toast.fire({
                            icon: 'success',
                            title: 'Data berhasil dihapus!'
                        });
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }
        });
    }


    $('#CompanyForm').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: "{{ url('store-insident') }}", // Menggunakan route 'store-insident'
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                $("#company-modal").modal('hide');
                var oTable = $('#ajax-crud-datatable').dataTable();
                oTable.fnDraw(false);
                $("#btn-save").html('Submit');
                $("#btn-save").attr("disabled", false);
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
</script>

</html>
