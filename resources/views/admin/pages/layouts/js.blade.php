@include('admin.layouts.javascript')
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

    function add() {
        $('#CompanyForm').trigger("reset");
        $('#CompanyModal').html("Tambah Data Insidentil");
        $('#company-modal').modal('show');
        $('#id').val('');
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
                $('#CompanyModal').html("Edit Company");
                $('#company-modal').modal('show');
                $('#id').val(res.id);
                $('#nama_website').val(res.nama_website);
                $('#link_website').val(res.link_website);
                $('#tanggal_kejadian').val(res.tanggal_kejadian);
                $('#peretas').val(res.peretas);
                $('#deskripsi').val(res.deskripsi);
            }
        });
    }

    function deleteFunc(id) {
        if (confirm("Hapus Data Insidentil?") == true) {
            var id = id;
            // ajax
            $.ajax({
                type: "POST",
                url: "{{ url('delete-insident') }}", // Menggunakan route 'delete-insident'
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    var oTable = $('#ajax-crud-datatable').dataTable();
                    oTable.fnDraw(false);
                }
            });
        }
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
