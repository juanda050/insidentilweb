<script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
<script src="{{ asset('assets/js/initTheme.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/dark.js') }}"></script>
<script src="{{ asset('assets/css/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<script src="{{ asset('assets/js/app.js') }}"></script>


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
