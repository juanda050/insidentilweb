<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets2/assets/images/siipidtitle.svg') }}" type="image/x-icon">
    <title>SIIP-ID | {{ $title }}</title>
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
