@extends('layouts.main')

@section('content')
    <!------------------------------>
    <!--- Hero Banner Start--------->
    <!------------------------------>
    <!-- Button trigger for Disabled Backdrop -->
    <!-- Button trigger modal -->

    <section class="hero-banner position-relative overflow-hidden" id="section1">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative left-hero-color">
                        <h2 class="mb-0 fw-bold">
                            Lindungi Situs Anda. Laporkan Insiden Secara Langsung
                        </h2>
                        <p>Tempat Pelaporan Insiden Keamanan Situs Anda</p>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-hover-secondery">Ayo Mulai</a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative right-hero-color">
                        <img src="{{ asset('assets2/assets/images/hero/right-image.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!--- Hero Banner End--------->
    <!------------------------------>
    <!---------------------------------->
    <!--- Our Service sectin Start------>
    <!---------------------------------->
    <section class="our-service contact bg-primary position-relative overflow-hidden" id="section2">
        <div class="container">
            <div class="dots-shape-left position-absolute"><img
                    src="{{ asset('assets2/assets/images/icons/dot-shape.png') }}">
            </div>
            <div class="dots-shape-right position-absolute"><img
                    src="{{ asset('assets2/assets/images/icons/dot-shape.png') }}">
            </div>
            <div class="row">
                <div class="col-xxl-8 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <img src="{{ asset('assets2/assets/images/our-service/our-service.png') }}" class="img-fluid">
                </div>
                <div
                    class="col-xxl-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ps-xxl-0 ps-xl-0 ps-lg-3 ps-md-3 ps-sm-3 ps-3">
                    <small class="fs-7 d-block">Layanan Kami</small>
                    <h2 class="fs-2 text-white mb-0">Layanan Unggulan yang Kami Sampaikan</h2>
                    <p class="mb-0 fw-500 fs-7">
                        Kami berkomitmen untuk menyajikan berbagai solusi terkemuka yang bertujuan memberikan kemudahan dan
                        kualitas layanan bagi setiap individu yang mengakses pelayanan kami
                    </p>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li class="d-flex flex-wrap align-items-start">
                            <i class="ti ti-circle-check fs-4 pe-2"></i>
                            <span class="fs-7 text-white">Pemantauan aktif lalu lintas situs untuk mendeteksi potensi
                                serangan .</span>
                        </li>
                        <li class="d-flex flex-wrap align-items-start">
                            <i class="ti ti-circle-check fs-4 pe-2"></i>
                            <span class="fs-7 text-white">Penerapan protokol keamanan yang ketat untuk mencegah akses yang
                                tidak sah.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!--- Our Service sectin End---->
    <!------------------------------>

    <br>

    <section id="section3">
        <div class="container" style="margin-top: 6rem; margin-bottom: 6rem;">
            <div class="row justify-content-center">
                <div class="card-header d-flex justify-content-between mb-1">
                    <span>
                        <h3>Data Laporan Insidentil</h3>
                    </span>
                    <span>
                        <a href="{{ route('insidentil.pdf') }}" class="btn icon icon-left btn-outline-warning block">
                            <i class="bi bi-file-earmark-pdf m-2"></i> DOWNLOAD PDF
                        </a>
                    </span>
                </div>
                <div class="table-responsive my-4">
                    <table class="table table-striped table-hover" id="insidents-table-show">
                        <thead class="table-primary">
                            <tr>
                                <th>NO</th>
                                <th>Nama Website</th>
                                <th>Link Website</th>
                                <th>Tanggal Kejadian</th>
                                <th>Peretas</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($insidents as $insident)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $insident->nama_website }}</td>
                                    <td>
                                        <a href="{{ $insident->link_website }}"
                                            target="_blank">{{ $insident->link_website }}</a>
                                    </td>
                                    <td>{{ $insident->tanggal_kejadian }}</td>
                                    <td>{{ $insident->peretas }}</td>
                                    <td>{{ $insident->deskripsi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#insidents-table-show').DataTable();
            });
        </script>
    </section>


    <!------------------------------>
    <!-----Contact section Start---->
    <!------------------------------>
    <section class="contact bg-primary position-relative overflow-hidden" id="section4">
        <div class="container position-relative">
            <div class="dots-shape-left position-absolute"><img
                    src="{{ asset('assets2/assets/images/icons/dot-shape.png') }}">
            </div>
            <div class="dots-shape-right position-absolute"><img
                    src="{{ asset('assets2/assets/images/icons/dot-shape.png') }}">
            </div>
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <small class="fs-7 d-block text-warning">Ajukan Laporan Kejadian Peretasan</small>
                    <h3 class="fs-3 text-white mb-0">Ayo laporkan peretasan yang terjadi untuk keamanan bersama!</h3>
                    <div class="owl-carousel owl-theme testimonial">
                        <div class="item">
                            <div class="details position-relative">
                                <p class="fs-5 fw-light blue-light mb-4">
                                    Tim kami dari Universitas Gajah Putih Takengon, tengah berpartisipasi dalam kegiatan PKL
                                    di DISKOMINSA.
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="avtar-img rounded-circle overflow-hidden"><img
                                            src="{{ asset('assets/team/asyam.jpg') }}" class="img-fluid"></div>
                                    <div class="name ps-3">
                                        <h6 class="text-white">Asyam</h6>
                                        <small class="d-block blue-light fw-500 fs-10 pb-0">Tim Kreatif Digital</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="details position-relative">
                                <p class="fs-5 fw-light blue-light mb-4">
                                    Tim kami dari Universitas Gajah Putih Takengon, tengah berpartisipasi dalam kegiatan PKL
                                    di DISKOMINSA.
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="avtar-img rounded-circle overflow-hidden">
                                        <img src="{{ asset('assets/team/adel.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="name ps-3">
                                        <h6 class="text-white">Adelia</h6>
                                        <small class="d-block blue-light fw-500 fs-10 pb-0">Tim Kreatif Digital</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="details position-relative">
                                <p class="fs-5 fw-light blue-light mb-4">
                                    Tim kami dari Universitas Gajah Putih Takengon, tengah berpartisipasi dalam kegiatan PKL
                                    di DISKOMINSA.
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="avtar-img rounded-circle overflow-hidden">
                                        <img src="{{ asset('assets/team/juanda.jpg') }}" class="img-fluid">
                                    </div>
                                    <div class="name ps-3">
                                        <h6 class="text-white">Juanda</h6>
                                        <small class="d-block blue-light fw-500 fs-10 pb-0">Tim Kreatif Digital</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 d-flex align-items-center">
                    <form class="position-relative w-100">
                        <div class="row ps-xxl-5 ps-xl-5 ps-lg-3 ps-md-0 ps-sm-0 ps-0">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group text-center">
                                    <h4 class="text-white my-4 text-muted">Silahkan Masuk terlebih dahulu untuk mengajukan
                                        laporan</h4>
                                    <a href="{{ route('login') }}" class="btn btn-warning">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!------------------------------>
    <!------ FAQ section Start------>
    <!------------------------------>
    <section class="faq position-relative overflow-hidden" id="section5">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <small class="fs-7 d-block">Pertanyaan yang Sering Diajukan</small>
                    <h2 class="fs-3 text-black mb-0">Ingin menanyakan sesuatu dari kami?</h2>
                </div>
            </div>
            <div class="accordion-block">
                <div class="accordion row" id="accordionPanelsStayOpenExample">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button text-black fs-7" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Apa itu SIIPID?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    SIIPID atau kepanjangan dari "Sistem Informasi Insidentil Peretasan ID", adalah sebuah
                                    platform
                                    daring yang didedikasikan untuk pelaporan dan pemahaman
                                    insiden keamanan cyber. Ini adalah tempat di mana pengguna dapat melaporkan insiden
                                    siber serta mengakses informasi terkait keamanan online.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed text-black fs-7" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Bagaimana cara saya melaporkan insiden keamanan pada situs Anda?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Anda dapat menggunakan formulir laporan yang disediakan di situs kami. Cukup isi
                                    informasi yang diperlukan dan laporkan insiden yang Anda temui.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed text-black fs-7" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Apakah laporan insidentil tersedia untuk publik atau hanya untuk pemilik situs?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Laporan insidentil dapat tersedia secara beragam, tergantung pada kebijakan situs.
                                    Sebagian besar informasi mungkin dapat diakses oleh pemilik situs atau tim keamanan,
                                    namun beberapa informasi mungkin juga dapat diungkapkan kepada publik jika diperlukan.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                <button class="accordion-button collapsed text-black fs-7" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                                    Bagaimana proses penanganan laporan insidentil dilakukan setelah dilaporkan?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingfour">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Setelah laporan diterima, tim keamanan akan meninjau dan menangani insiden sesuai
                                    prosedur keamanan yang telah ditetapkan. Tindakan lanjut akan diambil untuk mengatasi
                                    masalah yang dilaporkan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                                <button class="accordion-button collapsed text-black fs-7" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                                    Apakah ada langkah-langkah preventif yang dapat dilakukan pengguna untuk melindungi
                                    situs mereka dari insiden peretasan?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingfour">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Ya, langkah-langkah preventif termasuk menggunakan kata sandi yang kuat, melakukan
                                    pembaruan sistem yang teratur, dan memantau aktivitas yang mencurigakan di situs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingsix">
                                <button class="accordion-button collapsed text-black fs-7" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsesix"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapsesix">
                                    Apa yang membuat laporan insidentil peretasan penting bagi pengguna?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingsix">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Laporan insidentil peretasan memberikan wawasan langsung tentang keamanan situs,
                                    memungkinkan tindakan cepat dan peningkatan sistem untuk melindungi data sensitif.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------>
    <!------ FAQ section End------>
    <!------------------------------>
@endsection
