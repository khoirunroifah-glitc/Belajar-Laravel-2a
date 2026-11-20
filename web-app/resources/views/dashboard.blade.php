<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard_style.css') }}">
</head>
<body>
<div class="container">
    @include('template.header')
    <div class="isi">
        @include('template.sidebar')
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>