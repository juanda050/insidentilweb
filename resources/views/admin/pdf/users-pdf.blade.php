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
        </div>
        <div>
            <h1 class="letterhead__title">Daftar Pengguna SIIP-ID</h1>
        </div>
        <p class="current-date" style="font-size: 10px; color: #555; position: absolute; top: 10px; right: 20px;"></p>
    </header>

    <main>
        <table class="custom-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
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
    </main>
</body>

</html>
