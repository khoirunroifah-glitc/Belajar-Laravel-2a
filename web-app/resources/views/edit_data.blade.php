@extends('dashboard')
@section('content')
<h1>{{ $judul }}</h1>
<form method="post" action="/employe/{{ $employe->id }}">
    @csrf
    @method('PUT')
    <table border="0" cellpadding="5" align="center">
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="{{ $employe->id }}" readonly></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="{{ $employe->nama }}" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" rows="2" required>{{ $employe->alamat }}</textarea></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="gender">
                    <option value="L" {{ $employe->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ $employe->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td><input type="text" name="gaji" value="{{ $employe->gaji }}" required></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit">SIMPAN PERUBAHAN</button>
                <a href="/employe"><button type="button">Kembali</button></a>
            </td>
        </tr>
    </table>
</form>
@endsection
