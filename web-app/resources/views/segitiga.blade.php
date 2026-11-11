<!DOCTYPE html>
<html>
<head>
    <title>{{ $judul }}</title>
    <!-- Menyertakan file CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h2>{{ $judul }}</h2>
<!-- Menampilkan form untuk menghitung luas segitiga -->
    <form action="/kalkulator/segitiga/proses" method="post">
        @csrf
        <p>
        <!-- Menampilkan input untuk alas dan tinggi segitiga -->
            <label>Alas:</label>
            <input type="number" name="alas" value="{{ $alas }}" required>
        </p>
        <p>
            <label>Tinggi:</label>
            <input type="number" name="tinggi" value="{{ $tinggi }}" required>
        </p>
        <p>
            <strong>Luas Segitiga: {{ $luas }}</strong>
        </p>
        <p>
            <button type="submit">HITUNG</button>
        </p>
    </form>
</body>
</html>