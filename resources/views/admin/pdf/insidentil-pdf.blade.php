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
            padding: 0.5rem;
            border: 1px solid #ddd;
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
            {{-- <div class="letterhead__logo">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents('assets/jpg/kominfo.png')) }}"
                    alt="Face 1" style="width: 50px">
            </div> --}}
        </div>
        <div>
            <h1 class="letterhead__title">Daftar Insidentil peretasan Website</h1>
        </div>
        <p class="current-date" style="font-size: 10px; color: #555; position: absolute; top: 10px; right: 20px;"></p>
    </header>

    <main>
        <table class="custom-table">
            <thead>
                <tr>
                    <th>No</th>
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
                        <td><a href="{{ $insident->link_website }}" class="custom-link">{{ $insident->link_website }}</a>
                        </td>
                        <td>{{ $insident->tanggal_kejadian }}</td>
                        <td>{{ $insident->peretas }}</td>
                        <td>{{ $insident->deskripsi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>

</html>
