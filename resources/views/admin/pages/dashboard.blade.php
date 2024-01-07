@extends('admin.layouts.main')
@section('content')
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Pengunjung</h6>
                                        @foreach ($visit as $visitor)
                                            @if (isset($visitor->visits))
                                                <h6 class="font-extrabold mb-0">{{ $visitor->visits }}</h6>
                                            @else
                                                <h6 class="font-extrabold mb-0">0</h6>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Pengguna</h6>
                                        <h6 class="font-extrabold mb-0">{{ $totalUsers }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldDocument"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Data</h6>
                                        <h6 class="font-extrabold mb-0">{{ $totalInsidents }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldPaper-Upload"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Pengajuan</h6>
                                        <h6 class="font-extrabold mb-0">{{ $totalPengajuans }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="d-flex justify-content-between">
                                <div class="card-header">
                                    <h4>Data Insidentil Peretasan Perbulan pada tahun</h4>
                                </div>
                                <div class="dropdown dropstart m-4">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tahun
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Coming soon~</a>
                                        <a class="dropdown-item active" href="#">2023</a>
                                        <a class="dropdown-item" href="#">Coming soon~</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart-insidentil"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Data Insidentil</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>Name Website</th>
                                                <th>Tanggal kejadian</th>
                                                <th>Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($insidents->take(7) as $insident)
                                                <tr>
                                                    <td class="col-3">
                                                        <div class="d-flex align-items-center">
                                                            <p class="font-bold ms-3 mb-0">{{ $insident->nama_website }}</p>
                                                        </div>
                                                    </td>
                                                    <td class="col-auto">
                                                        <p class=" mb-0">{{ $insident->tanggal_kejadian }}</p>
                                                    </td>
                                                    <td class="col-auto">
                                                        <p class=" mb-0">{{ $insident->deskripsi }}</p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-content pb-4">
                                <div class="px-4">
                                    <button class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'
                                        onclick="window.location.href = '/admin/documents'">
                                        Lebih Lanjut ke Menu
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card overflow-x-hidden">
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl" style="cursor: pointer;" onclick="redirectToProfile()">
                                <img src="{{ asset('assets/jpg/pancacita.png') }}" alt="Face 1" class="rounded">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">Provinsi</h5>
                                <h5 class="text-muted mb-0">Aceh</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl" style="cursor: pointer;" onclick="redirectToProfile()">
                                <img src="{{ asset('assets/jpg/kominfo.png') }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold mb-0 mt-1">DISKOMINSA</h5>
                                <h6 class="text-muted mt-2">Banda Aceh</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Peninjauan Pengajuan</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-pengajuan"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Pengguna</h4>
                    </div>
                    @foreach ($users->take(4) as $user)
                        <div class="card-content pb-4">
                            <div class="overflow-y-hidden">
                                <div class="recent-message d-flex px-4 py-1">
                                    <div class="avatar avatar-lg">
                                        <img src="{{ asset('avatars/account.png') }}">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">{{ $user->name }}</h5>
                                        <h6 class="text-muted mb-0">{{ $user->email }}</h6>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                    @endforeach
                    <div class="px-4">
                        <button class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'
                            onclick="window.location.href = '/admin/users'">
                            Lebih Lanjut ke Menu
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        var chartData = @json($chartData);

        var optionYear = {
            annotations: {
                position: "back",
            },
            dataLabels: {
                enabled: false,
            },
            chart: {
                type: "bar",
                height: 300,
            },
            fill: {
                opacity: 1,
            },
            plotOptions: {},
            series: [{
                name: "Insiden",
                data: chartData.data,
            }, ],
            colors: "#435ebe",
            xaxis: {
                categories: chartData.categories,
            },
        };

        var chartDataTinjau = @json($chartDataTinjau);
        let optionsTinjau = {
            series: chartDataTinjau.series,
            labels: chartDataTinjau.labels,
            colors: ["#435ebe", "#55c6e8"],
            chart: {
                type: "donut",
                width: "100%",
                height: "350px",
            },
            legend: {
                position: "bottom",
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: "30%",
                    },
                },
            },
        };
    </script>
@endsection
