@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="card">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-header d-flex justify-content-between">
                <span>
                    <h3>Management Data</h3>
                </span>
                <span>
                    <a href="{{ route('insidentil.pdf') }}" class="btn icon icon-left btn-outline-warning block">
                        <i class="bi bi-file-earmark-pdf"></i>
                    </a>

                    <!-- Button trigger for Disabled Backdrop -->
                    <a type="button" class="btn icon icon-left btn-outline-success block" data-bs-toggle="modal"
                        data-bs-target="#backdrop" onclick="handleUploadButtonClick()">
                        <i data-feather="upload"></i>Tambah Data
                    </a>
                </span>
            </div>

            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Website</th>
                            <th>Link Website</th>
                            <th>Tanggal Kejadian</th>
                            <th>Peretas</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($insidents as $insident)
                            <tr>
                                <td>{{ $no++ }}.</td>
                                <td>{{ $insident->nama_website }}</td>
                                <td>
                                    <a
                                        style="color: rgba(72, 72, 171, 0.797); cursor: pointer; text-decoration: underline;">
                                        {{ $insident->link_halaman }}
                                    </a>
                                </td>

                                <td>{{ $insident->tanggal_kejadian }}</td>
                                <td>{{ $insident->peretas }}</td>
                                <td>{{ $insident->deskripsi }}</td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('admin.documents.update', $insident->id) }}"
                                            class="btn badge bg-primary" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Ubah</a>


                                        <form action="#" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('are you sure?')" type="submit"
                                                class="btn badge bg-danger">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {!! $insidents->links() !!} --}}
            </div>
        </div>


        {{-- modal --}}
    @section('modal')
        @include('admin.items.create')
    @show

    @include('admin.items.edit')

    @error('name')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror


@endsection
