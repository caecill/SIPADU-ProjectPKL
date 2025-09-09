<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="{{ asset('images/logo_pemprov.png') }}" alt="Logo">
            <h2>SIPADU</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="#">Arsip Dokumen</a></li>
            <li><a href="#">Pengaturan</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
</body>
</html>