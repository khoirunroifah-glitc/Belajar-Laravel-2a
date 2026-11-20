@extends('dashboard')
@section('content')
<h1>{{ $judul }}</h1>
<table border="1" cellpadding="8" align="center">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Gaji</th>
    </tr>
    @foreach($employes as $row)
    <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->nama }}</td>
        <td>{{ $row->alamat }}</td>
        <td>{{ $row->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
        <td>{{ number_format($row->gaji) }}</td>
    </tr>
    @endforeach
</table>
<br>
<center><a href="/employe/create"><button>Tambah Pegawai</button></a></center>
@endsection
