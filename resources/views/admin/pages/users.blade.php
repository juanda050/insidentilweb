@extends('admin.layouts.main')
@section('content')
    <div id="main-content mt-0">
        <div class="card container" id="app">
            <div class="card-header d-flex justify-content-between mb-1">
                <span>
                    <h3>Data Pengguna</h3>
                </span>
                <span>
                    <a href="{{ route('users.pdf') }}" class="btn icon icon-left btn-outline-warning block">
                        <i class="bi bi-file-earmark-pdf me-2"></i>DOWNLOAD PDF
                    </a>
                </span>
            </div>

            <div class="table-responsive card-body">
                <table class="table table-striped " id="users-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th>Dibuat Pada</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->avatar }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#users-table').DataTable();
        });
    </script>
@endsection
