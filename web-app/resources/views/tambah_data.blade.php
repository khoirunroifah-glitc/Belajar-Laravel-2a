@extends('dashboard')
@section('content')
<h1>{{ $judul }}</h1>
<form method="post" action="/employe/store">
    @csrf
    <table border="0" cellpadding="5" align="center">
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" rows="2" required></textarea></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="gender">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td><input type="text" name="gaji" required></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit">SIMPAN</button>
                <a href="/employe"><button type="button">Kembali</button></a>
            </td>
        </tr>
    </table>
</form>
@endsection
