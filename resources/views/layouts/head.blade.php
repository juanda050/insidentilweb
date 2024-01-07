<head>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bold.css') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets2/assets/images/siipidtitle.svg') }}" type="image/x-icon">
    <title>SIIP-ID | Pelaporan dan Informasi Peretasan Situs</title>
    <link rel="stylesheet" href="{{ asset('assets2/assets/libs/OwlCarousel-2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/dist/css/iconfont/tabler-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/dist/css/style.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="{{ asset('sweetalert2/sweetalert2@11') }}"></script><!-- SweetAlert2 v11 -->

    <style>
        .modal-backdrop {
            display: none !important;
        }
    </style>

    <script src="{{ asset('assets/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">
</head>
