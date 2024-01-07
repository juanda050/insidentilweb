<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Insiden Website</title>
    <style>
        /* Reset some default styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            font-size: 12px;
        }

        /* Letterhead styles */
        .letterhead {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .letterhead__logo img {
            max-width: 100px;
        }

        .letterhead__details p {
            font-size: 10px;
            margin: 0;
            color: #555;
        }

        .letterhead__title {
            font-size: 24px;
            margin: 1rem 0;
            text-align: center;
        }

        /* Table */
        .custom-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .custom-table th,
        .custom-table td {
            padding: 8px;
            border: 1px solid #ddd;
            word-wrap: break-word;
            /* Menyebabkan teks turun ke baris baru jika melebihi lebar */
            max-width: 200px;
            /* Atur lebar maksimum untuk membatasi lebar sel */
        }

        .custom-table th {
            background-color: #007bff;
            color: #fff;
            text-align: left;
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .custom-link {
            color: #007bff;
            text-decoration: none;
        }

        .custom-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header class="letterhead">
        <div class="letterhead__details">
            <div>
                <p>Kota Baru, Kota Banda Aceh, Aceh</p>
                <p>Phone: (0651) 7554636 | Email: diskominfo[at]acehprov.go.id</p>
            </div>
        </div>
        <div>
            <h1 class="letterhead__title">Daftar Pengajuan SIIP-ID</h1>
        </div>
        <p class="current-date" style="font-size: 10px; color: #555; position: absolute; top: 10px; right: 20px;"></p>
    </header>

    <main>
        <table class="custom-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat Email</th>
                    <th>Tanggal Kejadian</th>
                    <th>Link Situs</th>
                    <th>Peretas</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengajuans as $pengajuan)
                    <tr>
                        <td>{{ $pengajuan->id }}</td>
                        <td>{{ $pengajuan->nama }}</td>
                        <td>{{ $pengajuan->email }}</td>
                        <td>{{ $pengajuan->tanggal_kejadian }}</td>
                        <td>{{ $pengajuan->link_website }}</td>
                        <td>{{ $pengajuan->peretas }}</td>
                        <td>{{ $pengajuan->deskripsi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>

</html>
