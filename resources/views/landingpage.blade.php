<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/landingPage.css') }}">
</head>
<body>
        <div class="card-landing">
            <img src="{{ asset('images/logo_pemprov.png') }}" alt="Logo" class="logo"> 

            <div class="text-area">
                <h1 class="judul">SIPADU</h1>
                <div class="subtitle">
                    <p>
                        <span class="biru">S</span>istem 
                        <span class="biru">P</span>eng<span class="biru">A</span>rsipan
                    </p>
                    <p>
                        <span class="biru">D</span>okumen 
                        Terpadu<span class="biru">U</span>
                    </p>
                </div>
                <div class="tombol">
                    <a href="{{ route('login') }}" class="btn btn-custom">Log In</a>
                </div>
            </div>
    </div>
</body>
</html>