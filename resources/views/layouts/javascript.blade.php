{{-- <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script> --}}
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
{{-- Table --}}
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
<script>
    function redirectToProfile() {
        // Ganti URL 'profil' dengan URL menuju halaman profil Anda
        window.location.href = 'profil';
    }
</script>

<script>
    $(document).ready(function() {
        $('.dropdown-toggle').click(function() {
            $('.dropdown-menu').toggleClass('show');
        });

        $('.dropdown-toggle').blur(function() {
            $('.dropdown-menu').addClass('fade-out');
            setTimeout(function() {
                $('.dropdown-menu').removeClass('fade-out');
                $('.dropdown-menu').removeClass('show');
            }, 500);
        });
    });
</script>

{{-- <script src="{{ asset('assets2/dist/js/jquery.min.js') }}"></script> --}}
<script src="{{ asset('assets2/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets2/assets/libs/OwlCarousel-2/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets2/dist/js/custom.js') }}"></script>

<script>
    // Mengaktifkan modal
    var myModal = new bootstrap.Modal(document.getElementById('customModal'), {
        backdrop: 'static', // Membuat backdrop menjadi statis (tidak menghilang ketika diklik di luar modal)
        keyboard: false // Menonaktifkan tombol keyboard untuk menutup modal
    });
</script>
