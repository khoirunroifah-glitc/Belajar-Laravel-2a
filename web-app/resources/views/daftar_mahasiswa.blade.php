<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <!-- Menyertakan file CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Menampilkan judul halaman -->
    <h2>{{ $judul }}</h2>
    <table>
        <tr>
    <!-- Menampilkan header tabel -->
            <th>Nama</th>
            <th>Alamat</th>
            <th>Gender</th>
        </tr>
        @foreach($mahasiswa as $mhs)
        <tr>
        <!-- Menampilkan data mahasiswa -->
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['alamat'] }}</td>
            <td>{{ $mhs['gender'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>