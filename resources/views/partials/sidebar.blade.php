<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style/sidebar.css') }}">
</head>
<body>
    <div class="sidebar">
    <div class="sidebar-logo">
        <img src="{{ asset('images/logo_pemprov.png') }}" alt="Logo">
        <h2>SIPADU</h2>
    </div>
    <ul class="sidebar-menu">
        <li>
        <a href="#">
            <i class="fa fa-home"></i> Beranda
        </a>
        </li>
        <li>
        <a href="#">
            <i class="fa fa-archive"></i> Arsip
        </a>
        </li>
        <li>
        <a href="#">
            <i class="fa fa-book"></i> Laporan
        </a>
        </li>
    </ul>
    </div>
</body>
</html>