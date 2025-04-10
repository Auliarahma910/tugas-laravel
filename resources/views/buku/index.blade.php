<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            padding: 10px;
            border: 1px solid #aaa;
            text-align: left;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Daftar Buku</h2>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($buku as $b)
                <tr>
                    <td>{{ $b->judul }}</td>
                    <td>{{ $b->pengarang }}</td>
                    <td>{{ $b->penerbit }}</td>
                    <td>{{ $b->tahun_terbit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
